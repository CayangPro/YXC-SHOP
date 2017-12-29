<?php namespace Admin\Controller;

//类型属性表控制器
class TypeAttrController extends CommonController{
	private $model;
	//框架自定义构造方法
	public function __auto(){
		$this->model = new \Common\Model\TypeAttr;
	}	
	//分类列表
	public function index(){
		//如果没有一个分类，先去添加
		//获取当前所属类型属性(先获取当前类型的tid)
		$tid = Q('get.tid',0,'intval');
//		p($tid);
		$data=$this->model->where("zol_type_tid={$tid}")->get();
//		p($data);
		//如果没有就去添加
		if(!$data){
			View::success('还没有属性，请先添加类型属性',U("TypeAttr/add",array('tid'=>$tid)));
		}
		View::with('data',$data);
		View::make();
	}
	public function add(){		
		if(IS_POST){
			$tid = Q('get.tid',0,'intval');
//			p($tid);
			if($this->model->store()){
				View::success('添加成功',U("TypeAttr/index",array('tid'=>$tid)));
			}
			View::error($this->model->getError());
		}
		View::make();
	}
	
	//修改
	public function edit(){
		$taid=Q('get.taid',0,'intval');
//		P($taid);exit;
		$data = $this->model->where("taid={$taid}")->find();
		$zol_type_tid = $data['zol_type_tid'];
		//二.修改
		if(IS_POST){
			if($this->model->edit()){
				View::success('修改成功',U('TypeAttr/index',array("tid"=>$zol_type_tid)));
			}
			View::error($this->model->getError());
		}		
		//一、获取旧数据
		$taid=Q('get.taid',0,'intval');
		$oldData = $this->model->where("taid={$taid}")->find();
//		p($oldData);die;
		//分配变量到页面
		View::with('oldData' , $oldData);
		View::make();
	}
	
	//删除属性
	public function del(){
		//接收要删的数据
		$taid=Q('get.taid',0,'intval');
		$data = $this->model->where("taid={$taid}")->find();
		$zol_type_tid = $data['zol_type_tid'];
		//删除		
		$this->model->where("taid=$taid")->delete();
		View::success('删除成功',U('TypeAttr/index',array("tid"=>$zol_type_tid)));
	}
}

 ?>