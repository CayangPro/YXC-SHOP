<?php namespace Common\Model;

use Hdphp\Model\Model;
class Customer extends Model{
	//指定表名
    protected $table = 'customer';
	//自动完成
    protected $auto = [
        ['password','md5','function',3,3]
    ];

    protected $validate = [
        //字段名,验证方法,错误信息,验证条件,验证时间
        ['cunumber','required','账号不能为空,必填',3,3],
        ['cunumber','getCunumber' ,'帐号已存在',3,3],
        ['cunumber','minlen:5' ,'帐号不得少于5位',3,3],
        ['cunumber','maxlen:16' ,'帐号大于16位',3,3],
        ['cuname','required' ,'昵称不能为空,必填',3,3],
        ['cuname','minlen:5','昵称不得少于5位',3,3],
        ['cuname','maxlen:12','昵称大于12位',3,3],
        ['cuname','getCuname' ,'昵称已存在',3,3],        
        ['password','required','密码不能为空,必填',3,3],
        ['password','minlen:6','密码不得少于6位',3,3],
        ['password','maxlen:16' ,'密码大于16位',3,3],
        ['password','getPassword','两次密码不一致',3,3],
        ['code','required','验证码不能为空,必填',3,3],
        ['code','getCode','验证码不正确',3,3]
    ];
	
	//验证帐号是否存在
	public function getCunumber(){
		$cunumber = Q('post.cunumber');
		$cunumberData = $this->where(['cunumber'=>$cunumber])->find();
		if($cunumberData) return false;
		return true;
	}
	//验证昵称是否存在
	public function getCuname(){
	
	    $cuname = Q('post.cuname');
//		p($cuname);
		$cunameData = $this->where(['cuname'=>$cuname])->find();
		if($cunameData) return false;
		return true;
	}
	//验证两次密码是否一致
	public function getPassword(){
	    $password = Q('post.password');
		$confirmPassword = Q('post.confirmPassword');		
		if($password != $confirmPassword) return false;
		return true;
	}
	//验证码是否正确
    public function getCode(){
        $code = Q('post.code');
		if(strtolower($code) != strtolower($_SESSION['code'])){
			return false;
		}
        return true;
    }
    //注册用户名
    public function store(){
    	if(!$this->create()) return false;
		return $this->add();        
    }

}