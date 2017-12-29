<?php namespace Common\Model;
use Hdphp\Model\Model;
class GoodsDetails extends Model{
	//指定表名
	protected $table = 'goods_details';
	
	//自动验证
	protected $validate = array(
		//array(字段名,验证方法,错误信息,验证条件,验证时间)
		//验证条件:3代表--必须处理
		//验证时间:3代表--全部情况时处理
		array('gdinfo','required','商品详情不能为空',3,3)
	);
	
}
	
	
?>