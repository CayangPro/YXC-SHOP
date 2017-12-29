<?php namespace Admin\Controller;
//品牌管理控制器
class BrandsController extends CommonController{
	private $model;
	public function __auto(){
	    $this->model = new \Common\Model\Brands;
	}
	
	//首页
	public function index(){
		$data=$this->model->orderBy('bsort','DESC')->get();
		View::with('data',$data);
		View::make();
	}
	
	//添加
	public function add(){
		if(IS_POST){
			if($this->model->store()){
				View::success('添加成功');
			}
			View::error($this->model->getError());
		}
		View::make();
	}
	
	//编辑
	public function edit(){
		//二、修改
		if(IS_POST){
			if($this->model->edit()){
				View::success('编辑成功',U('index'));
			}
			View::error($this->model->getError());
		}
				
		//一、获取旧数据
		$bid = Q('get.bid',0,'intval');
		$oldData = $this->model->where("bid={$bid}")->find();
//		p($oldData);
		//分配变量到页面
		View::with('oldData' , $oldData);
		View::make();
	}
	
	//删除
	public function del(){
		$bid = Q('get.bid',0,'intval');
		//执行删除
		$this->model->where("bid={$bid}")->delete();
		View::success('删除成功');
	}
}

 ?>