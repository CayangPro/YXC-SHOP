<?php namespace Common\Model;
use Hdphp\Model\Model;
class Login extends Model{
    //指定表名
    protected $table='customer';
    //自动完成
    protected $auto=array(
        array('password','md5','function',3,3)
    );
    //自动验证
    protected $validate=[
        //(字段名,验证方法,错误信息,验证条件,验证时间)
        ['cunumber','required','账号不能为空,必填',3,3],
        ['cunumber','getCunumber' ,'帐号不存在',3,3],
        ['password','required','密码不能为空,必填',3,3],
        ['password','getPassword','密码不正确',3,3],
        ['code','required','验证码不能为空,必填',3,3],
        ['code','getCode','验证码不正确',3,3],
    ];
    //验证帐号是否存在
    public function getCunumber(){
        $cunumber = Q('post.cunumber');
        $cunumberData = $this->where("cunumber='$cunumber'")->pluck('cunumber');
		$cunameData = $this->where("cunumber='$cunumber'")->pluck('cuname');
		$cuid = $this->where("cunumber='$cunumber'")->pluck('cuid');
        if (!$cunumberData) return false;
        $_SESSION['info']=[
            'cunumber'=>$cunumberData,
            'cuname'=>$cunameData,
            'cuid'  =>$cuid
        ];
        return true;
    }
    //密码是否正确
    public function getPassword(){
        $password = Q('post.password','','md5');
        $cunumber = Q('post.cunumber');
        $pd=$this->where("cunumber='$cunumber' or password='$password'")->pluck('password');
        if ($password!=$pd) return false;
        return true;
    }
    //验证码是否正确
    public function getCode(){
        $code=Q('post.code');
        if (strtolower($code)!=strtolower($_SESSION['code'])) return false;
        return true;
    }
    public function store(){
        if (!$this->create()) return false;
        return true;
    }
}