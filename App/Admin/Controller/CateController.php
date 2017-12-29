<?php namespace Admin\Controller;
use Hdphp\Controller\Controller;
//分类默认控制器
class CateController extends CommonController{
	private $model;
	private $tmodel;
	//框架自定义构造方法
	public function  __auto(){
		$this->model = new \Common\Model\Cate;
		$this->tmodel = new \Common\Model\Type;
	}
	
	//分类列表******************
	public function index(){			
		$data = $this->model
    			->join('type','zol_type_tid','=','tid')
				->orderBy('csort','DESC')
				->get();
		//如果没有分类，那就先去添加
		if(!$data){
			View::success('请先添加分类',U('add'));
		}
		//将其变为树状结构
		$data = Data::tree($data,'cname','cid','pid');
		View::with('data',$data);
		View::make();
	}
	
	//添加顶级分类******************
	public function add(){
		//所属类型
		//判断：如果是POST提交
		if(IS_POST){
//			
			if($this->model->store()){
				View::success("添加成功");
			}
			//错误提示(会提示相应的错误，比如‘分类名不能为空’等)
			View::error($this->model->getError());			
		}
		$typeData = $this->tmodel->get();
		View::with('typeData',$typeData);
		View::make();	
	}
	
	//添加子分类******************
	public function addSon(){
		//2.添加
		if(IS_POST){
//			P(Q('post.'));
//			die;
			if($this->model->store()){
				View::success('添加成功',U('index'));
			}			
			//错误提示(会提示相应的错误，比如‘分类名不能为空’等)
			View::error($this->model->getError());
		}
		
		//1.获取所属的分类
		//Q()中的intval作用函数是用来将cid转整
		$cid = Q('get.cid',0,'intval');
		$cate = $this->model->where("cid={$cid}")->find();
//		P($cate);
		View::with('cate',$cate)->make();
	}
		
	//分类编辑*******************
	public function edit(){
		//二、修改
		if(IS_POST){
			if($this->model->edit()){
				View::success('修改成功',U('index'));
			}
			View::error($this->model->getError());
		}		
		//一、获取旧数据
		$cid = Q('get.cid',0,'intval');
		$oldData = $this->model
					->join('type','zol_type_tid','=','tid')
					->where("cid={$cid}")->find();
//		p($oldData);
		//二、获取类型
		$typeData = $this->tmodel->get();		
		//分配变量到页面
		View::with('oldData',$oldData);
		//2.处理'所属分类'，此时不能是自己和自己的自己的子集
		$cateData = Data::tree($this->model->getNoMy($cid),'cname','cid','pid');
		View::with('cateData',$cateData);
		View::with('typeData',$typeData);
//		p($typeData);				
		View::make();
	}
		
	//删除********************
	public function del(){
		$cid = Q('get.cid',0,'intval');
		//1.判断该分类下面是否有商品
//		$arcModel = new \Common\Model\Shop;
//		$shopData = $shopModel->where("category_cid={$cid}")->find();
		//如果该分类下有商品
//		if($shopData){
//			View::error('请先删除该分类下面的商品');
//		}
		
		//2.子分类上移位置
		//pluck是直接获取值
		$pid = $this->model->where("cid={$cid}")->pluck('pid');
		//找到当前分类的所有的子集把pid改成被删除分类的pid
		$this->model->where("pid={$cid}")->update(array('pid'=>$pid));
		//3.删除操作
		$this->model->where("cid={$cid}")->delete();
		View::success('删除成功');		
	}
}
