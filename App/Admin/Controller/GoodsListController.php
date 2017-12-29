<?php namespace Admin\Controller;
use Hdphp\Controller\Controller;

use Common\Model\Goods;
use Common\Model\GoodsAttr;
use Common\Model\GoodsDetails;
use Common\Model\Cate;
use Common\Model\Brands;
use Common\Model\TypeAttr;
use Common\Model\GoodsList;

//货品列表控制器
class GoodsListController extends CommonController{
	private $goodsModel;
	private $goodsAttrModel;
	private $goodsDetailsModel;
	private $cateModel;
	private $brandsModel;
	private $typeAttrModel;
	private $goodsListModel;
	
	public function __init(){
		$this->goodsModel = new Goods;
		$this->goodsAttrModel = new GoodsAttr;
		$this->goodsDetailsModel = new GoodsDetails;
		$this->cateModel = new Cate;
		$this->brandsModel = new Brands;
		$this->typeAttrModel = new TypeAttr;
		$this->goodsListModel = new GoodsList;
	}
	
	//货品列表页
	public function index(){
		//处理表格表头的规格的数据
		$gid = Q('get.zol_goods_gid',0,'intval');
//		p($gid);exit;
		$data = $this->goodsAttrModel
				->join('type_attr',C('database.prefix').'type_attr_taid','=','taid')
				->where("(zol_goods_gid)={$gid} AND tatype=1")
				->groupBy('taid')
				->get();
//		p($data);
		//添加货品时的下拉菜单的内容（必须是从商品属性表中获得的）
		foreach($data as $k => $v){
			$data[$k]['value'] = $this->goodsAttrModel->where("zol_type_attr_taid={$v['zol_type_attr_taid']} AND zol_goods_gid={$gid}")->get();
		}
//		p($data[$k]['value']);
		
		//显示已有货品
        $listData = $this->goodsListModel->where("zol_goods_gid={$gid}")->get();
//		p($listData);
        foreach ($listData as $k => $v) {
            $listData[$k]['value'] = $this->goodsAttrModel->where("gaid IN({$v['combineid']})")->get();
        }
		
//		p($listData);
		View::with('data',$data);
        View::with('listData',$listData);
	    View::make();
	}
	
	//添加
	public function add(){
		if(IS_POST){
//			p(Q('post.'));
			if($this->goodsListModel->store()){
				View::success("添加成功");
			}
			View::error($this->goodsListModel->getError());			
		}
	}
	
	//编辑*******************
	public function edit(){
		if(IS_POST){
			if($this->goodsListModel->edit()){
				View::success("修改成功");
			}
			View::error($this->goodsListModel->getError());			
		}
		
		//1.获得旧数据
		$gid = Q('get.zol_goods_gid',0,'intval');
		$glid = Q('get.glid',0,'intval');
//		p($gid);EXIT;
//		p($glid);EXIT;
		$oldGoodsListData = $this->goodsListModel->where("glid={$glid}")->find();
		$cid = explode(',', $oldGoodsListData['combineid']);
//		p($cid);
		
		//添加
		//处理表格表头的规格的数据
		$data = $this->goodsAttrModel
				->join('type_attr',C('database.prefix').'type_attr_taid','=','taid')
				->where("(zol_goods_gid)={$gid} AND tatype=1")
				->groupBy('taid')
				->get();
//		p($data);
		//添加货品时的下拉菜单的内容（必须是从商品属性表中获得的）
		foreach($data as $k => $v){
			$data[$k]['value'] = $this->goodsAttrModel->where("zol_type_attr_taid={$v['zol_type_attr_taid']} AND zol_goods_gid={$gid}")->get();
		}
				
		//显示已有货品
        $listData = $this->goodsListModel->where("zol_goods_gid={$gid}")->get();
//		p($listData);
        foreach ($listData as $k => $v) {
        	$vv = explode(',', $v['combineid']);
        	foreach($vv as $value){
        		$listData[$k]['value'][] = $this->goodsAttrModel->where("gaid=$value")->find();
        	}
        }
		
//		p($listData);
		View::with('oldGoodsListData',$oldGoodsListData);
		View::with('cid',$cid);
		View::with('data',$data);
        View::with('listData',$listData);			
		View::make();
	}
	
	//删除货品********************
	public function del(){	
		$glid = Q('get.glid',0,'intval');
		//1.删除商品属性表
		$this->goodsListModel->where("glid={$glid}")->delete();
		View::success('删除成功');
	}
	
}


?>