<?php namespace Admin\Controller;

use Hdphp\Controller\Controller;

//后台默认控制器
class IndexController extends Controller{
	//登录
	public function index(){
		//如果没有登录
		if(!isset($_SESSION['infoa'])){
			//跳转到登录页面
			go(U('Login/index'));
		}
		View::make();
	}
	
	//登录成功，欢迎页面
	public function welcome(){
		View::make();
	}
	
	//修改密码
	public function changePassword(){
		if(IS_POST){
			//1.判断新密码是否少于6位
			$newPassword = Q('post.newPassword');
			if(strlen($newPassword) < 6 ) View::error('密码不能少于6位，请重新输入！');
			
			//2.两次密码是否一致
			$confirmPassword = Q('post.confirmPassword');
			if($confirmPassword != $newPassword) View::error('两次密码不一致，请重新输入！');
			
			//3.原密码是否正确
			$uid = $_SESSION['info']['uid'];
			$data = Db::table('user')->where("uid={$uid}")->get();
			$oldPassword = Q('post.oldPassword' ,'','md5');
			if($oldPassword != $data[0]['password']) View::error('原密码错误，请重新输入！');
			
			//4.修改密码
			Db::table('user')->where("uid={$uid}")->update(['password'=>md5($newPassword)]);
			View::success('密码修改成功',U('Login/out'));
		}
		View::make();
	}
}


 
 ?>