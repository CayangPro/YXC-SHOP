<?php namespace Common\Model;
use Hdphp\Model\Model;
class Brands extends Model{
	//指定表名
	protected $table = 'brands';
	//自动验证
	protected $validate = array(
		array('bname','required','品牌名称不能为空',3,3)
	);
	//自动完成
	protected $auto = array(
		//array(字段名,处理方法,方法类型,验证条件,处理时间) 
		array('blogo','getThumb','method',3,3)
	);
	
	public function getThumb(){
		//接收编辑页面隐藏域的旧图片的值
		$oldImg = Q('post.blogo');
		//如果没上传图片，那么返回空字符串存入数据库
		if($_FILES['blogo']['error'] == 4){
			//如果隐藏域有旧图片地址那么就是修改
			if($oldImg){
				//直接返回旧图片地址
				return $oldImg;
			}
			return '';
		}
		//上传处理
		$files = Upload::type('jpg,jpeg,png,gif')->make();
		//如果上传成功，返回上传地址给数据
		if($files){
			//如果用户在编辑和添加的时候有图片上传
			//如果有旧图片，证明是编辑，删除旧图片
			if($oldImg){
				//删除缩略图
				unlink($oldImg);
				//删除原图
				$path = str_replace('_blogo', '', $oldImg);
				unlink($path);
			}
			//缩略
			$thumbImg = str_replace(".{$files[0]['ext']}", "_blogo.{$files[0]['ext']}", $files[0]['path']);
			$img = Image::thumb($files[0]['path'],$thumbImg,80,40,1);
			return $img;
		}
		//如果上传失败
		//把上传错误压入到当前模型的错误属性，这样外面的控制器就可以用getError来调取了
		$this->error = Upload::getError();
	}
			
	//添加
	public function store(){
		//一、先验证
		if(!$this->create())	return false;	
		//二、添加动作
		$aid = $this->add();
		return true;
	}
	
	//修改
	public function edit(){
		if(!$this->create()){
			return false;
		}
		$this->save();
		return true;
	}
}


 ?>