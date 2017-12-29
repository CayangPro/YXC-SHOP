<?php namespace Common\Model;
use Hdphp\Model\Model;
class Cate extends Model{
	//指定表名
	protected $table = 'category';
	
	//自动验证
	protected $validate = array(
		//array(字段名,验证方法,错误信息,验证条件,验证时间)
		//验证条件:3代表--必须处理
		//验证时间:3代表--全部情况时处理
		array('cname','required','分类名不能为空',3,3),
		array('cname','maxlen:60','分类名不能超过60个字符',3,3),
		array('csort','required','分类排序不能为空，请输入0~100的数字',3,3),			
	);
	
	//分类添加
	public function store(){
		//create的作用：
		//1.create之后$this->data才会有数据
		//2.create会触发自动验证
		if($this->create()){
			//添加add方法所需要的数据就是$this->data里面的数据
			$this->add();
			return true;
		}
		return false;
	}
	
	//分类编辑
	public function edit(){	
		if(!$this->create()) return false;
			//此处修改，要在页面加隐藏域
			$this->save();			
			//修改类型
			$tid = Q('post.zol_type_tid');
//			p($tid);exit;
			$typeModel = new Type;
			$typeModel->create();	
			$typeModel->where("tid={$tid}")->save();
			return true;
	}	
	
	//获得除了自己和自己的子集的分类数据
	public function getNoMy($cid){
		//1.获得自己的子集的cid
		$cids = $this->getSon($this->get(),$cid);
		//把自己的cid压入
		$cids[] = $cid;
		//2.排除自己和自己子集的cid
		$where = "cid NOT IN(" . implode(',', $cids) . ")";	
		return $this->where($where)->get();	
//		p($this->where($where)->get());exit;	
	}
	
	//获得子集
	public function getSon($data,$cid){
		$temp = array();
		//循环所有数据
		foreach($data as $v){
			//如果找到当前分类的子集(即一个类的pid=当前类的的cid，说明这个类就是当前类的子集)
			if($v['pid'] == $cid){
				//将其压入到临时数组中
				$temp[] = $v['cid'];
				//递归调用，不断合并
				$temp = array_merge($temp,$this->getSon($data, $v['cid']));
			}			
		}
		//得到结果，返出
		return $temp;
	}	
	
	//获得父集
	public function getFather($data,$pid){
//		p($data);
//		p($pid);
		$temp = array();
		//循环所有数据
		foreach($data as $v){
			if($v['cid']==$pid){
				//将其压入到临时数组中
				$temp[] = $v['cid'];
				//递归调用，不断合并
				$temp = array_merge($temp, $this->getFather($data ,$v['pid']));
			}
		}
		//得到结果，返出
		return $temp;
	}
}
	
	
?>