<?php namespace Common\Model;
use Hdphp\Model\Model;
class Type extends Model{
	//指定表名
	protected $table = 'type';
	
	//自动验证****************
	protected $validate = array(
		//array(字段名,验证方法,错误信息,验证条件,验证时间)
		//验证条件:3代表--必须处理
		//验证时间:3代表--全部情况时处理
		array('tname','required','类型名不能为空',3,3),
		array('tname','maxlen:20','类型名不能超过20个字符',3,3)
	);
	
	//类型添加****************
	public function store(){
		if(!$this->create()) return false;
		$tagArr = explode('|', Q('post.tname'));
		foreach($tagArr as $tname){
			$this->add();
		}				
		return true;
	}
	
	//类型编辑****************
	public function edit(){		
		if(!$this->create()) return false;
		//此处修改，要在页面加隐藏域
		$this->save();
		return true;
	}	
	
		
	
	
}
	
	
?>