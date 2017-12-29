<?php namespace Common\Model;

use Hdphp\Model\Model;

class TypeAttr extends Model{
	//指定表名
	protected $table='type_attr';
	
	protected $validate=array(
		//array(字段名，验证方法，错误信息，验证条件，验证时间)
		array('taname','required','属性名不能为空',3,3),
		array('tavalue','required','属性值不能为空',3,3)
	);
	//自动完成
	protected $auto =array(
		//array(字段名,处理方法,方法类型,验证条件,处理时间)
		array('type_tid','getTid','method',3,1)
	);
	
	//类型属性添加
	public function store(){
		if($this->create()){
			//添加add方法所需要的数据就是$this->data里面的数据
			$this->add();
			return true;
		}
		return false;	
	}
	
	public function edit(){
		if(!$this->create()) return false;
		$this->save();
		return true;
	}
}
