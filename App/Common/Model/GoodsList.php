<?php namespace Common\Model;
use Hdphp\Model\Model;
class GoodsList extends Model{
	//指定表名
	protected $table = 'goods_list';
	
	//自动验证****************
	protected $validate = array(
		//array(字段名,验证方法,错误信息,验证条件,验证时间)
		//验证条件:3代表--必须处理
		//验证时间:3代表--全部情况时处理
		array('gltotal','required','库存不能为空',3,3),
		array('glnumber','required','货号不能为空',3,3)
	);
		
	public function getGlnumber(){
		return $glnumber = time();
	}
	
	//货品添加****************
	public function store(){				
		if(!$this->create()) return false;
		$data = Q('post.');		
//		p($data);exit;
		$d = implode(',', $data['combineid']);
		$data['combineid'] = $d;		
		$data['zol_goods_gid'] = Q('post.zol_goods_gid');
		$this->add($data);
		return true;
	}
	
	//货品编辑****************
	public function edit(){
//		p($this->data);exit;
		$gid = Q('post.zol_goods_gid',0,'intval');	
//		p(Q('post.'));	
		$data = Q('post.');
		if(!$this->create()) return false;
		$this->data['combineid'] = implode(',',$this->data['combineid']);
		$d = $this->data['combineid'];
//		p($d);
		$oldLData = $this->where("zol_goods_gid={$gid} AND combineid='$d'")->get();
		if($oldLData== $data){
			$this->error = '该货品已存在，请重新修改';
			return false;
		}
		//此处修改，要在页面加隐藏域
		$this->save();
		
		return true;
	}
}
	
	
?>