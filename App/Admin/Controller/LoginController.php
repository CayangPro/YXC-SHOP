<?php namespace Admin\Controller; 

use Hdphp\Controller\Controller;

//登录控制器
class LoginController extends Controller{
    //首页
    public function index(){
    	if(IS_POST){
    		//一.判断验证码是否正确
    		//Q()里的三个参数分别为：
    		//(1).post.code相当于$_POST['code'];
    		//(2).默认值
    		//(3).作用函数，此处的strtoupper是把验证码全部转换为大写
    		$code = Q('post.code','','strtoupper');
			if($code != $_SESSION['code']) View::error('验证码错误，请重新输入!');
			
    		//二、判断用户账号是否存在
    		$usernumber = Q('post.usernumber');
			$data = Db::table('user')->where("usernumber='{$usernumber}'")->get();
			//如果用户账号不存在
			if(!$data) View::error('用户账号或密码错误，请重新输入!');
			
    		//三、判断密码是否正确
    		$password = Q('post.password','','md5');
			if($password != $data[0]['password']) View::error('用户账号或密码错误，请重新输入!');
    		
    		//四、登陆成功
    		$_SESSION['infoa'] = [
    			'usernumber'=>$usernumber,
    			'uid'=>$data[0]['uid'],
    			'username'=>$data[0]['username']
    		];
			View::success('登录成功',U('Index/index'));
    	}
				
       //登录页面显示	
       View::make();
    }
	
	//显示验证码
	public function code(){
		Code::num(4)->fontColor('red')->width(100)->height(45)->make();
	}
	
	//退出
	public function out(){
		//清除SESSION
		session_unset();
		//销毁SESSION
		session_destroy();
		//跳转到当前控制器的index方法，也就是登陆页面
		echo "<script>parent.location.href='".U('Login/index')."'</script>";
	}
}
