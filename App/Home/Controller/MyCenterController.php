<?php namespace Home\Controller;

use Common\Model\Order;
use Common\Model\OrderList;
use Common\Model\Address;
use Hdphp\Controller\Controller;

//默认个人中心控制器
class MyCenterController extends Controller{
	private $orderModel;
	private $orderListModel;	
	private $addressModel;
	
	public function __init(){
		$this->orderModel = new Order;
		$this->orderListModel = new OrderList;
		$this->addressModel  = new Address;
	}
	   
    //个人中心
    public function index(){
    	View::make();
	}
	
	//我的订单
	public function orderCenter(){
    	$cid = $_SESSION['info']['cuid'];//获取当前用户ID 
		$orderData = $this->orderModel->where("zol_customer_cuid={$cid}")->get();
		foreach($orderData as $k=>$v){
			$orderData[$k]['value'] = $this->orderModel
									->join("dingdan_list", "daid","=","zol_dingdan_daid")
									->where("zol_dingdan_daid={$v['daid']}")
									->get();
		}
		View::with('orderData',$orderData);	
    	View::make();
	}
	
		
	//删除定单
	public function del(){
		$cid = $_SESSION['info']['cuid'];//获取当前用户ID
		//1.删除当前定单表下的定单列表
		//获取当前定单ID;
		$daid = $this->orderModel->where("zol_customer_cuid={$cid}")->pluck('daid');
		//删除
		$this->orderListModel->where("zol_dingdan_daid={$daid}")->delete();
		//2.删除定单表
		$this->orderModel->where("daid={$daid}")->delete();
		View::success('删除成功',U('MyCenter/orderCenter'));
	}
	
	//管理收货地址
	public function addressCenter(){
		$cid = $_SESSION['info']['cuid'];//获取当前用户ID
		$addressData = $this->addressModel->where("zol_customer_cuid={$cid}")->get();
		View::with('addressData',$addressData);
    	View::make();
	}
	
	//删除地址
	public function deladdress(){
		//删除
		$this->addressModel->where("cuaid={$_GET['daid']}")->delete();
		View::success('删除成功',U('MyCenter/addressCenter'));
	}

}

