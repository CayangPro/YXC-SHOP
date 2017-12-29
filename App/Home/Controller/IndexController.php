<?php namespace Home\Controller; 

use \Common\Model\Brands;
use \Common\Model\Cate;
use Hdphp\Controller\Controller;

//首页默认控制器
class IndexController extends Controller{

    //首页
    public function index(){
    	//1.获取分类    	
		$cate = new Cate;
		//顶级分类
		$cateData = $cate->where("pid=0")->orderBy('csort','DESC')->get();
		//一级分类
		foreach($cateData as $k => $v){
			$cateData[$k]['son'] = $cate->where("pid={$v['cid']}")->orderBy('csort','DESC')->get();
			//二级分类
			foreach($cateData[$k]['son'] as $kk => $vv){
				$cateData[$k]['son'][$kk]['sons']= $cate->where("pid={$vv['cid']}")->orderBy('csort','DESC')->get();
			}
		}	
		
		View::with('cateData',$cateData);
   		View::make();
		
    }
}
	