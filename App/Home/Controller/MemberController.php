<?php namespace Home\Controller; 

use Common\Model\Customer;
use Common\Model\Login;
use Hdphp\Controller\Controller;

//登录注册控制器
class MemberController extends Controller{

    //会员中心
    public function index(){
		
    }
	
	//注册
	public function reg(){
		if(IS_AJAX){
			$CustomerModel = new Customer();
			if(!$CustomerModel->store()){
				$this->ajax(['stutus'=>false,'message'=>$CustomerModel->getError()]);
			} else {
				$this->ajax(['status'=>true,'message'=>'注册成功！']);
			}
		}
	    View::make();
	}
    //登录
    public function login(){
        if (IS_AJAX){
            $loginModel=new Login();
            if (!$loginModel->store()){
                $this->ajax(['status'=>false,'message'=>$loginModel->getError()]);
            }else{
                //7天免登陆
                if (isset($_POST['auto'])){
                    // ./是当前目录，/是根目录
                    setcookie(session_name(),session_id(),time()+3600*24*7,'/');
                }else{
                    setcookie(session_name(),session_id(),0,'/');
                }				
                $this->ajax(['status'=>true,'message'=>'登录成功！']);
            }
        }	
        View::make();
    }

    //显示验证码
    public function code(){
        Code::num(4)->fontColor('red')->width(100)->height(40)->make();
    }
    //退出
    public function out(){
        session_unset();
        session_destroy();
        //跳转到登录界面
        View::success('退出成功',U('Index/index'));
    }

}
