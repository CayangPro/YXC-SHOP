<?php namespace Home\Controller;

use Common\Model\Cate;
use Common\Model\Detail;
use Common\Model\Goods;
use Common\Model\GoodsAttr;
use Common\Model\GoodsList;
use Common\Model\TypeAttr;
use Hdphp\Controller\Controller;

//详情表控制器
class DetailController extends Controller{

    //商品详情页
    public function index(){ 
        //选择商品部分
        $goodsModel = new Goods;		
        $gid=Q('get.zol_goods_gid',0,'intval');
        $goodsData = $goodsModel
        		   ->join('category','zol_category_cid','=','cid')
				   ->join('brands','zol_brands_bid','=','bid')
//				   ->join('goods_list','zol_goods_gid','=','gid')
        		   ->where("gid={$gid}")
        		   ->find();
		$stock = Db::table('goods_list')->where("zol_goods_gid={$gid}")->pluck("gltotal");
		if(!$stock)  $stock=0;
		View::with('stock',$stock);		
        View::with('goodsData',$goodsData);
		//获取顶级分类
		$pid = $goodsData['pid'];
		$cateModel = new Cate;
		$cname = $cateModel->where("cid=$pid")->pluck('cname');		
		View::with('cname',$cname);
			
        $goodsAttrModel=new GoodsAttr;
        $goodsAttrData=$goodsAttrModel->where("zol_goods_gid={$gid}")->get();
        $sameTemp=[];
        foreach($goodsAttrData as $v){
            $sameTemp[$v['zol_type_attr_taid']][] = $v;
        }

        $typeAttrModel=new TypeAttr;
        $combineAttr=[];
        foreach($sameTemp as $attrTaid=>$v){
            $taname=$typeAttrModel->where("taid={$attrTaid} AND tatype=1")->pluck('taname');
            if ($taname != NULL){
                $combineAttr[]=[
                    'taname'=>$taname,
                    'value'=>$v
                ];
            }
        }

        View::with('combineAttr',$combineAttr);

        //商品详情部分
        $detailModel = new Detail;
        $detailData = $detailModel->where("zol_goods_gid={$gid}")->get();
//		p($detailData);
        $gdimages = explode(',',$detailData[0]['gdimages']);

        $detailData[0]['gdimages']=$gdimages;
        View::with('detailData',$detailData);

        $data = $typeAttrModel
        	  ->join('goods_attr','taid','=','zol_type_attr_taid')
        	  ->where("zol_goods_gid={$gid} AND tatype=0")
        	  ->groupBy('taid')
        	  ->get();
	    View::with('gdimages',$gdimages);
        View::with('data',$data);

        View::make();
    }
    public function getTotal(){
        //异步选择规格属性
        $combineId = Q('post.combineId');
//		p($combineId);exit;
        $combineId = rtrim($combineId,',');
        $listModel = new GoodsList;
        $gltotal = $listModel->where("combineid='{$combineId}'")->pluck('gltotal');
        if (!$gltotal){
            $gltotal = 0;
        }
        echo json_encode($gltotal);exit;
    }
}
