<?php namespace Home\Controller;

use Common\Model\Order;
use Common\Model\Address;
use Common\Model\OrderList;
use Hdphp\Controller\Controller;

//默认支付控制器
class PayController extends Controller{
	   
    //支付页
    public function index(){
    	$id = Q('get.daid');
    	$orderModel = new Order;
		$orderData = $orderModel->where("daid={$id}")->find();
		View::with('orderData',$orderData);
		
		$orderListModel = new OrderList;
		$orderListData = $orderListModel->where("zol_dingdan_daid={$id}")->get();
		View::with('orderListData',$orderListData);
		
		$addressModel = new Address;
		$addressData = $addressModel->where("zol_customer_cuid={$_SESSION['info']['cuid']}")->find();
		View::with('addressData',$addressData);
		
		View::make();
		
	}
	
	//清除购物车
	public function delAll(){
		unset($_SESSION['cart']);
		Cart::flush();
		View::success('支付成功，请耐心等待！',U('MyCenter/index'));
	}
}

