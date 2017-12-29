<?php namespace Admin\Controller;
use Hdphp\Controller\Controller;

use Common\Model\Goods;
use Common\Model\GoodsAttr;
use Common\Model\GoodsDetails;
use Common\Model\Cate;
use Common\Model\Brands;
use Common\Model\TypeAttr;

//商品列表控制器
class GoodsController extends CommonController{
	private $goodsModel;
	private $goodsAttrModel;
	private $goodsDetailsModel;
	private $cateModel;
	private $brandsModel;
	private $typeAttrModel;
	//框架自定义构造方法
	public function __init(){
		$this->goodsModel = new Goods;
		$this->goodsAttrModel = new GoodsAttr;
		$this->goodsDetailsModel = new GoodsDetails;
		$this->cateModel = new Cate;
		$this->brandsModel = new Brands;
		$this->typeAttrModel = new TypeAttr;
	}
	
	//商品列表页
	public function index(){
		$goodsData = $this->goodsModel->get();
		View::with('goodsData',$goodsData);	
//		p($goodsData);exit;
	    View::make();
	}
	
	//添加
	public function add(){
		if(IS_POST){
			if($this->goodsModel->store()){
				View::success("添加成功",U('index'));
			}
			View::error($this->goodsModel->getError());		
		}
		//1.获取分类表数据
		$data = $this->cateModel->orderBy('csort','DESC')->get();
		//变为树状结构
		$cateData = Data::tree($data,'cname','cid','pid');	
		//2.获取品牌表数据
		$brandsData = $this->brandsModel->get();
		//3.获取商品表数据
		$goodsData = $this->goodsModel->get();
		
		//分配变量
		View::with('cateData',$cateData);
		View::with('brandsData',$brandsData);
		View::with('goodsData',$goodsData);
		View::make();	
	}
	
	
	//获得类型属性
	public function getAttr(){
		//得到类型id
		$tid = Q('post.t',0,'intval');
//		p($tid);exit;
		//通过类型id找到类型属性
		$data = $this->typeAttrModel->where("zol_type_tid={$tid}")->get();
//		p($data);exit;
		foreach ($data as $k => $v) {
			//把字符串变为数组，将来要循环利用
			$data[$k]['tavalue'] = explode(',', $v['tavalue']);
		}
//		p($data);
		echo json_encode($data);exit;
	}
	
	//uploadify异步上传
	public function upload()
	{
	    $file = Upload::path('Upload/Content/' . date('y/m'))->make();
	    if (empty($file)) {
	        // 相当于：echo json_encode(Upload::getError());exit;
	        $this->ajax(Upload::getError());
	    } else {
	        /** $file内部就是以下这个数组
	            $file = array(
	                0 => array(
		                'path' => 'Upload/Content/15/8/123981239172.jpg'    ,
		                'url' => 'http://localhost/cms_edu/Upload/Content/15/8/123981239172.jpg',
		                'image' => 1
	            ),
	        );**/
	        //上传成功，把上传好的信息返给js 也就是uploadify
	        $data = $file[0];
	        // 相当于：echo json_encode($data);exit;
	        $this->ajax($data);
	    }
	}
	
	//编辑商品*******************
	public function edit(){
		//修改
		if(IS_POST){			
			if($this->goodsModel->edit()){
				View::success('修改成功',U('index'));
			}
			View::error($this->goodsModel->getError());
		}		
		
		//一、获取表数据
		//1..获得旧数据
		$gid = Q('get.gid',0,'intval');	
		$oldGoodsData = $this->goodsModel
						->join('goods_details',C('database.prefix').'goods.gid','=',C('database.prefix').'goods_gid')					   
						->where(C('database.prefix')."goods.gid={$gid}")
						->find();
		//2.获取分类表数据
		$data = $this->cateModel->orderBy('csort','DESC')->get();
		//变为树状结构
		$cateData = Data::tree($data,'cname','cid','pid');
		
		//3.获取品牌表数据
		$brandsData = $this->brandsModel->get();

//		//3.获取商品属性表数据
		$goodsAttrData = $this->goodsAttrModel;
		$data = $goodsAttrData
				->join('type_attr',C('database.prefix').'type_attr_taid','=',C('database.prefix').'type_attr.taid')
				->where("zol_goods_gid={$gid}")
				->get();
		//获得taid就是为了以后排除已经选过的类型属性
		$taid = [];
		foreach($data as $k =>$v){
			$data[$k]['tavalue'] = explode(',', $v['tavalue']);
			$taid[] = $v['taid'];
		}
		
		//把商品没有选过的属性取出来
		$typeAttrData = $this->typeAttrModel;
		$taidStr = implode(',', $taid);
		
		$typeAttr = $this->typeAttrModel->where("taid NOT IN ({$taidStr}) AND zol_type_tid={$oldGoodsData['zol_type_tid']}")->get();

		foreach ($typeAttr as $v){
            $data[] = array(
                'gavalue' => '',
                'taname'=>$v['taname'],
                'tavalue'=>explode(',',$v['tavalue']),
                'tatype'=>$v['tatype'],
                'taid'=>$v['taid']
            );
        }

		//图册处理
		$gdimages = explode(',',$oldGoodsData['gdimages']);
        $oldGoodsData['gdimages']=$gdimages;

		//分配变量到页面
		View::with('cateData' , $cateData);
		View::with('brandsData' , $brandsData);
		View::with('oldGoodsData' , $oldGoodsData);
		View::with('data' , $data);
		View::make();
	}
	
	//删除商品********************
	public function del(){		
		$gid = Q('get.gid',0,'intval');
		//1.删除商品表
		$this->goodsModel->where("gid={$gid}")->delete();
		//2.删除商品详情表
		$this->goodsDetailsModel->where("zol_goods_gid={$gid}")->delete();
		//1.删除商品属性表
		$this->goodsAttrModel->where("zol_goods_gid={$gid}")->delete();
		View::success('删除成功',U('index'));
	}
	
}


 ?>