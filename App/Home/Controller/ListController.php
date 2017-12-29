<?php namespace Home\Controller;
use \Hdphp\Controller\Controller;

use Common\Model\Cate;
use Common\Model\Goods;
use Common\Model\GoodsAttr;
use Common\Model\TypeAttr;
use Common\Model\GoodsList;
use Common\Model\Brands;

class ListController extends Controller{
    public function index(){
//  	//获取当前的cid
    	$cid = Q('get.cid',0,'intval');
		$bid=Q('get.bid',0,'intval');
		
		//获取上一级的所有分类的名称
		$cateModel = new Cate;
		$pid=$cateModel->where("cid=$cid")->pluck('pid');
		$cateup=$cateModel->getFather($cateModel->get(), $pid);

		$cateup[]=$cid;
		$cname=$cateModel->where("cid IN(".implode(',',$cateup).")")->get();
	
		View::with('cname',$cname);	
		
		//获取下一级所有分类
		$cate=$cateModel->where("pid=$cid")->orderBy('csort','DESC')->get();
		//获取当前类型下所有的商品及包含的品牌
		//1.先获取当前分类下的所有分类的id
		$cateIds = $cateModel->getSon($cateModel->get(),$cid);
		
		$cateIds[] = $cid;
		//判断
		if($cateIds){
			//获取品牌id 
			//从商品表里查询属于当前分类的ID，然后取出当前商品的品牌ID
			$goodsModel = new Goods;
			$bidsId = $goodsModel
					->where("zol_category_cid IN(".implode(',',$cateIds).")")
					->lists("zol_brands_bid");
			//搜索
			$keywords = Q('get.keywords');
			if($keywords){
				$keywords = "AND gname like '%{$keywords}%'";
			}			
			//获取商品gid 
			$gidsId = $goodsModel
					->where("zol_category_cid IN(".implode(',',$cateIds)."){$keywords}")
					->lists("gid");
			//判断商品是否存在
			if($gidsId){
				//获取当前分类下的所有品牌
				$brandsModel = new Brands;
				$brands =  $brandsModel
						->where("bid IN(".implode(',',$bidsId).")")
						->get();									
				if($bid!=0){//判断是否有品牌	
					$brands =  $brandsModel
						->where("bid IN(".implode(',',$bidsId).")")
						->where("bid=$bid")
						->get();
				}
				View::with('brands',$brands);
			
				//获取当前的所有属性
				$goodsAttrModel = new GoodsAttr;
					$goodsAttrData = $goodsAttrModel
								->where("zol_goods_gid IN(".implode(',',$gidsId).")")
								->groupBy('gavalue')
								->get();
				View::with("goodsAttrData",$goodsAttrData);
				
				if($bid!=0){
					$goodsAttrData = $goodsAttrModel
									->join("goods","zol_goods_gid","=",'gid')
									->where("zol_goods_gid IN(".implode(',',$gidsId).")")
									->where("zol_brands_bid=$bid")
									->groupBy('gavalue')
									->get();
				}
				//把相同taid的属性放在一起
				 $sameTemp = [];
						$typeAttr = new TypeAttr;
						$tnamea=[];
			            foreach ($goodsAttrData as $v){
			                $sameTemp[$v['zol_type_attr_taid']][] = $v;
			            }
				//组合名字和值
				$combineAttr = [];
	            foreach ($sameTemp as $taid => $v){
	            	foreach($v as $vv){
	            		$typename = $typeAttr
									->where("taid={$vv['zol_type_attr_taid']}")
				            		->pluck('taname');	
	            	}
	                $combineAttr[] = [
	                    'name' => $typename,
	                    'value'=> $v
	                ];
	            }
				//筛选效果
				//1.地址栏效果
				//获取个数
				$num=count($combineAttr);
				if(isset($_GET['param'])){
					$param=explode("_", $_GET['param']);
							
				}else{
					$param=array_fill(0,$num,0);
				}
				View::with("param",$param);
			
				
				//2.筛选操作，最终获得商品的id
				$findGids = $this->filter($param,$gidsId);
				
				if($findGids){
					$goodsFind=$goodsModel
						->where("gid IN(".implode(',',$findGids).")")
						->get();
						
					if($bid!=0){
						$goodsFind=$goodsModel
							->where("gid IN(".implode(',',$findGids).")")
							->where("zol_brands_bid={$bid}")
							->get();
					}
					View::with('goodsFind',$goodsFind);
				}else{
					View::with('goodsFind',[]);
				}
			}
		}	
		
		//获取统计总数
		$goodsListModel = new GoodsList;
		$gnumber = $goodsListModel
				->count();
		View::with('gnumber',$gnumber);	
		//判断是否为空，为空则赋值为空数组(避免遍历时报错)
		if(!$cate){
			View::with('cate',[]);
		}
		if(!$gidsId){
			View::with('gidsId',[]);
		}
		if(!isset($brands)){
			View::with('brands',[]);
		}
		if(!isset($goodsFind)){
			View::with('goodsFind',[]);
		}
		if(isset($combineAttr)){
			View::with('combineAttr',$combineAttr);
		}else{
			View::with('combineAttr',[]);
		}
		View::with('cate',$cate);
		
		View::make();
	} 	

	//第一个参数是Array[0] => 0[1] => 5[2] => 0[3] => 0[4] => 3)
	//代表着相对应的商品属性
	//第二个参数是商品id
	private function filter($param,$cidGids){
		$goodsAttrModel = new GoodsAttr; 
		$gidArr = [];
		foreach ($param as $gtid){
			//根据$gtid得到不同的商品
			if($gtid){
				//查找商品的属性名称
				$gavalue=$goodsAttrModel
					->where("gaid=$gtid")
					->pluck('gavalue');
				//通过名称找到商品的gid
				$gidArr[] = $goodsAttrModel
					->where("gavalue='{$gavalue}'")
					->lists('zol_goods_gid');
			}
		}
		//如果$gidArr有值的时候，就是用户不是全部不限
		if($gidArr){
			$gid=$gidArr[0];
			foreach ($gidArr as $v){
				//array_intersect取交集
                $gid = array_intersect($v,$gid);
            }
			//再次取交集
			$finalGids = array_intersect($gid,$cidGids);
		}else{
			$finalGids = $cidGids;
		}
		return $finalGids;
	}
	
}
	
	
	
	
	
	
	
	
	
