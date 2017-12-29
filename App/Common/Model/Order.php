<?php namespace Common\Model;

use Hdphp\Model\Model;
class Order extends Model{
    //指定表名
    protected $table='dingdan';
    //自动验证
//    protected $validate=array(
//        array(字段名,验证方法,错误信息,验证条件,验证时间)
//        array('','required','图片不能为空',3,3)
//    );
	
    //地址添加
    public function store($data){
        $adressModel=new Address;
        if ($adressModel->create()){
            $adressModel->add($data);
            return true;
        }
        return false;
    }
}