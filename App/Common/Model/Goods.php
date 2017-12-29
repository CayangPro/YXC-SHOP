<?php namespace Common\Model;
use Hdphp\Model\Model;
class Goods extends Model{
	//指定表名
	protected $table = 'goods';
	
	//自动验证****************
	protected $validate = array(
		//array(字段名,验证方法,错误信息,验证条件,验证时间)
		//验证条件:3代表--必须处理
		//验证时间:3代表--全部情况时处理
		array('gname','required','商品名不能为空',3,3),
		array('gname','maxlen:250','商品名不能超过250个字符',3,3)
	);
	
	//自动完成货号添加
//	protected $auto = array(
//		//array(字段名,处理方法,方法类型,验证条件,处理时间) 
//		array('gnumber','getGnumber','method',3,3),
//		array('zol_user_uid','getyUid','method',3,3)
//	);
	
//	public function getGnumber(){
//		return $gnumber = time();
//	}
	
	public function getyUid(){
		return $_SESSION['infoa']['uid'];
	}
	
	//类型添加****************
	public function store(){				
		if(!$this->create()) return false;
		//1.把当前商品所属得类型的ID压到商品表中
		$cateModel = new Cate;
		$a=Q('post.zol_category_cid');		
		$tid = $cateModel->where("cid={$a}")->pluck('zol_type_tid');
		$this->data['zol_type_tid'] = $tid;
//		p($this->data);exit;
		//2.添加商品第一张商品属性表，返回自增id		
		$gid = $this->add();
		//添加商品属性表
		$goodsAttrModel = new GoodsAttr;
		//属性添加
		foreach (Q('post.attr') as $taid => $v){
			if($v){
				$data = array(
					'gavalue'=>$v,
					'zol_type_attr_taid'=>$taid,
					'zol_goods_gid'=>$gid
				);
				$goodsAttrModel->add($data);
			}
		}
		//规格添加
		$spec = Q('post.spec');
		if($spec){
			$value = $spec['value'];
			foreach ($value as $taid => $v) {
				foreach ($v as $kk => $vv) {
					$data = array(
						'gavalue'=>$vv,
						'zol_type_attr_taid'=>$taid,
						'zol_goods_gid'=>$gid,
						'gaadd_price'=>$spec['added'][$taid][$kk]
					);
					$goodsAttrModel->add($data);
				}
			}
		}		
		//3.添加商品第二张商品属性详细表
		$goodsDetailsModel = new GoodsDetails;
		$goodsDetailsModel->create();
//		p($goodsDetailsModel->data);
		//将多张图片的地址组成的数组拆分成字符串
		$gdimages=$goodsDetailsModel->data['gdimages'];
		$goodsDetailsModel->data['gdimages']=implode(',', $gdimages);
		$goodsDetailsModel->data['zol_goods_gid'] = $gid;
		$goodsDetailsModel->add();
		return true;
	}	
	//商品编辑****************
	public function edit(){		
		if(!$this->create()) return false;	
//		p(Q('post.'));exit;
		//此处修改，要在页面加隐藏域
		$this->save();
		
		$gid = Q('post.gid',0,'intval');
//		p($gid);exit;		
		//修改详情表
		$goodsDetailsModel = new GoodsDetails;
		$goodsDetailsModel->create();
//		p($goodsDetailsModel->data);exit;
		//处理图册
		$gdimages = $goodsDetailsModel->data['gdimages'];
			
		$goodsDetailsModel->data['gdimages'] = implode(',',$gdimages);
//		p($goodsDetailsModel);exit;	
		$goodsDetailsModel->where("zol_goods_gid={$gid}")->save();
		
		//修改商品属性表(先删删除除再添加)
		//删除
		$goodsAttrModel = new GoodsAttr;
		$goodsListModel = new GoodsList;
		$attr = Q('post.attr');
		$goodsAttrModel->where("zol_goods_gid={$gid}")->delete();
		$goodsListModel->where("zol_goods_gid={$gid}")->delete();
		
		//添加属性
		foreach (Q('post.attr') as $taid => $v){			
			if($v){
				$data = array(
					'gavalue'=>$v,
					'zol_type_attr_taid'=>$taid,
					'zol_goods_gid'=>$gid
				);
				$goodsAttrModel->add($data);
			}
		}

		//规格添加
		$spec = Q('post.spec');
		if($spec){
			$value = $spec['value'];
			foreach ($value as $taid => $v) {
				foreach ($v as $kk => $vv) {
					$data = array(
						'gavalue'=>$vv,
						'zol_type_attr_taid'=>$taid,
						'zol_goods_gid'=>$gid,
						'gaadd_price'=>$spec['added'][$taid][$kk]
					);
					$goodsAttrModel->add($data);
				}
			}
		}	
		return true;
	
	}	
}
	 
	
?>