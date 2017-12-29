<?php namespace Admin\Controller;
use Hdphp\Controller\Controller;
//类型默认控制器
class TypeController extends CommonController{
	private $model;
	//框架自定义构造方法
	public function __auto(){
		$this->model = new \Common\Model\Type;
	}
	
	//类型列表
	public function index(){		
		//1.分页显示
		//每页显示三个标签(是没有在回收站的文章);count()----统计有多少个标签
		$page = Page::row(3)->make(Db::table('type')->count());
		View::with('page',$page);
		//2.如果没有分类，那就先去添加
		$data = $this->model->get();
		if(!$data){
			View::success('还没有类型，请先添加',U('add'));
		}
		$data = Db::table('type')->orderBy('tsort','DESC')->limit(Page::limit())->get();
		View::with('data',$data);
	    View::make();
	}
	
	//添加类型******************
	public function add(){
		//如果是POST提交
		if(IS_POST){
			if($this->model->store()){
				View::success('添加成功',U('index'));
			}
			View::error($this->model->getError());
		}					
		View::make();		
	}	
		
	//编辑类型*******************
	public function edit(){
		//二、修改
		if(IS_POST){
			if($this->model->edit()){
				View::success('修改成功',U('index'));
			}
			View::error($this->model->getError());
		}		
		
		//一、获取旧数据
		$tid = Q('get.tid',0,'intval');
		$oldData = $this->model->where("tid={$tid}")->find();
//		p($oldData['tname']);
		//分配变量到页面
		View::with('oldData' , $oldData);
		View::make();
	}
		
	//删除类型********************
	public function del(){		
		$tid = Q('get.tid',0,'intval');
		$tamodel = new \Common\Model\TypeAttr;
		$taData = $tamodel->where("zol_type_tid={$tid}")->get();
		$cmodel = new \Common\Model\Cate;
		$cData = $cmodel->where("zol_type_tid={$tid}")->get();
		
		if($taData){
			View::success("请先删除下面的类型属性");
		}
		else if($cData){
			View::success("请先删除下面的分类");
		}
		else{
			$this->model->where("tid={$tid}")->delete();
			View::success('删除成功',U('Type/index'));
		}
	}
}
	
?>