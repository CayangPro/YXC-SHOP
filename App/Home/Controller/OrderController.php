<?php namespace Home\Controller;

use Common\Model\Order;
use Common\Model\Address;
use Common\Model\OrderList;
use Hdphp\Controller\Controller;

//默认订单控制器
class OrderController extends Controller{
	private $orderModel;
	private $orderlistModel;
	private $addressModel;
	
    public function __init(){
        $this->orderModel = new Order;
		$this->addressModel = new Address;
    }
    //订单页
    public function index(){
    	$addressData = $this->addressModel->where("zol_customer_cuid={$_SESSION['info']['cuid']}")->get();
        View::with('addressData',$addressData);
    	if(IS_POST){
			if(isset($_POST['addAddressId'])){
				$cuaid = $_POST['addAddressId'];
                $addressInfo = $this->addressModel->where("cuaid={$cuaid}")->find();
	    		//1.添加订单表
	    		$orderDate = [
	    			'zol_customer_cuid' =>$_SESSION['info']['cuid'],
	    			'danumber'  => Cart::getOrderId(),   //订单号
					'daname'    => $addressInfo['rname'],     //收货人
					'ddaddress' => $addressInfo['raddress'].$addressInfo['radeaddress'], //收货地址
					'ddtotal'   => $_SESSION['cart']['total'], //价格总计
					'ddtime'    => time(),                 //生成时间
					'ddnote'    => $_POST['ddnote'],       //备注
					'ddstate'   => 1,       //订单状态（1.未付款2.已付款,3.未完成,4.已完成)
	    		];
				$daid = $this->orderModel->add($orderDate);//返回一个自增ID
				View::with('daid',$daid);
				
				foreach ($_SESSION['cart']['goods'] as $v){
					//1.添加订单表列表
					$orderListDate = [
		    			'dlnum'     => $v['num'],             //购买数量
		    			'dlpriced'  => $v['price'],           //单价
						'dlprice'   => $v['total'],           //价格小计
						'dlimg'     => $v['options']['pic'],  //商品图片
						'dltitle'   => $v['name'],           //商品名称
						'dlnote'    => $_POST['ddnote'],      //备注
						'zol_goods_gid'   => $v['id'],        //商品ID
						'zol_dingdan_daid'   => $daid,        //订单ID
					];
					$orderListModel = new OrderList;
					$orderListModel->add($orderListDate);
				}
				if(isset($_SESSION['cart'])){
					View::success('正在跳转到支付页面......',U('Pay/index',array('daid'=>$daid)));
				}else{
					View::success('购物车为空，请去添加商品',U('Index/index'));
				}
			}else{
				View::success('您还没有添加地址，请先添加地址',U('Order/index'));
			}
    	}		
    	View::make();
	}
	
	//异步添加收货人信息
    public function ajaxadd(){
//  	P($_POST);
    	$rname=Q('post.rname');
        $radeaddress=Q('post.radeaddress');
        $raddress=Q('post.provinceId').Q('post.cityId').Q('post.streetId');
        $rcall=Q('post.rcall');
        $rtell=Q('post.rtell');
		//添加到数据库的数据
        $data=[
            'rname'=>$rname,
            'radeaddress'=>$radeaddress,
            'raddress'=>$raddress,
            'rcall'=>$rcall,
            'rtell'=>$rtell,
            'zol_customer_cuid'=>$_SESSION['info']['cuid'],
        ];
        if ($this->orderModel->store($data)){
       	//返回到页面的数据
    	$addressData=[
            'rname'=>$rname,
            'radeaddress'=>$radeaddress,
            'raddress'=>$raddress,
            'rcall'=>$rcall,
            'rtell'=>$rtell,
        ];
        	echo json_encode($data);
        }
	}
}
