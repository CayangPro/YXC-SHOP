<?php namespace Admin\Controller;

use Hdphp\Controller\Controller;  
//自定义公共控制器
class CommonController extends Controller{
	public function __init(){
		//验证是否登录
		$this->authorLogin();
		//检测是否有__auto方法，如果有就执行
		if(method_exists($this, '__auto'))
		$this->__auto();
	}
	
	public function authorLogin(){
		//如果SESSION不存在
		if(!isset($_SESSION['infoa'])){
			//跳转到登录页面
			go(U('Login/index'));
		}
	}
}
	
	
	
?>