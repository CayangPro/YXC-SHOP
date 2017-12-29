<?php namespace Home\Controller;
use Common\Model\Goods;
use Hdphp\Controller\Controller;
class CartController extends Controller{

    //购物车
    public function index(){
    	if(isset($_SESSION['info']['cunumber'])){
			View::make();
		}else{
			View::success('请先登陆',U('Member/Login'));	
		}
	}
	
    public function add(){
        $cid=Q('post.cid');
        $gid=Q('post.gid');
        $gname=Q('post.gname');
        $num=Q('post.num');
        $gmarketPrice=Q('post.gmarketPrice');
        $gPrice=Q('post.gprice');
		$glnumber=Q('post.glnumber');
        $str=Q('post.str');
        $str=rtrim($str,',');
        $str=explode(',',$str); 
        $goodsModel=new Goods;
        foreach($str as $v){
            $goodsData[]=$goodsModel
            			->join('goods_attr','gid','=','zol_goods_gid')
                		->join('type_attr','zol_type_attr_taid','=','taid')
		                ->where("gid={$gid} AND gaid={$v}")
		                ->get();
        }
        foreach($goodsData as $k=>$v){
            foreach($v as $kk=>$vv){
                $attrData['name'][]=[
                    'taname'=>$vv['taname'],
                    'gavalue'=>$vv['gavalue'],
                ];
            }
        }
        $attrData['pic']=$goodsData[0][0]['glist_map'];
        $attrData['gmarket_price']=$gmarketPrice;
        $attrData['zol_category_cid']=$cid;
		$attrData['glnumber']=$glnumber;

        $data = [
            'id'        => $gid,
            'name'      =>$gname,
            'num'       =>$num,
            'price'     =>$gPrice,
            'options'   => $attrData,
        ];
        Cart::add($data);
        echo json_encode($data);exit;
    }

	//删除某个商品
	public function delCart(){
		if(isset($_GET['gid'])){
			Cart::del($_GET['gid']);
		}
		if(!empty($_SESSION['cart']['goods'])){
			View::success('删除成功');
		}else{
			View::success('购物车为空',U('Cart/emptyCart'));
		}
		
	}
	
	//清除购物车
	public function delAll(){
		unset($_SESSION['cart']);
		Cart::flush();
		View::success('购物车已清空',U('Cart/emptyCart'));
	}
	
	//空购物车
	public function emptyCart(){
		View::make();
	}
	
	//编辑购物车
	public function edit(){
		$sid=Q('post.sid');
        $num=Q('post.num');
		$data = [ 
		    'sid' =>$sid,// 唯一 sid，添加购物车时自动生成 
		    'num' =>$num 
		]; 
		Cart::update($data); 
	}
}
