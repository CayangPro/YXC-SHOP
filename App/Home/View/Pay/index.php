<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>YXC商城</title>		
		<!--引入公共头部*****************-->
		{{include file="../Common/orderCartHead"}}
		
		<!--载入css样式-->
		<link rel="stylesheet" type="text/css" href="Public/Home/css/pay.css"/>
		
		<!--head区域开始-->
		<div id="headBox">
			<div id="leftHeadBox">
				<a href=""><img src="Public/Home/images/shop.jpg"/></a>
				<a href=""><img src="Public/Home/images/logo-text.png"/></a>
			</div>
			<ul id="rightHeadBox">
				<li class='s1'>加入购物车</li>
				<li class='s2'>下订单</li>
				<li class='s3'>去付款</li>
				<li class='s4'>确认收货</li>
				<li class='s5'>评价</li>
			</ul>
		</div>
		<!--head区域结束-->
		
		<!--详情区开始-->
		<div id="wrapper">
			<!--顶部信息区-->
			<div class="infoFatherBox">
				<div class="orderInfoBox">	
					<div class="orderMoney">
						<p>
							订单已提交，请在<e>&nbsp;24小时&nbsp;</e>内完成付款（逾期自动取消）
						</p>						
						应付金额<span>{{$orderData['ddtotal']}}</span>元
					</div>
					<p class="orderNumber">您的订单号 : {{$orderData['danumber']}}</p>
					{{foreach from="$orderListData" value="$v" }}
					   <p class="orderName" maxlength="80">商品名称 : {{$v['dltitle']}}</p>
					{{endforeach}}
					
						<p class="cuName">收货人：{{$orderData['daname']}}</p>
						<p class="cuAddress">收货地址 :{{$orderData['ddaddress']}}</p>
				
				</div>
				
				<div class="orderErWei">
					<img src="./Public/Home/images/zhifubao.png"/>
					<span></span>
				</div>
			</div>

			<!--付款方式-->
			<div class="payChoose">
				<div class="payNum">
					<span  class="iclick"></span>
					第三方支付平台：
				</div>
				<div class="zfpayNum">
					<img src="Public/Home/images/alipay.png"/>
				</div>
				<div class="paytotal">
					支付<span> {{$orderData['ddtotal']}} </span>元
				</div>
			</div>
			<!--立即支付-->
			<div class="payNow">
				<a href="{{U('Pay/delAll')}}" class="payNowNum fl mr10 buy_cart buy_btn" >立即支付</a>
				<div class="notice">
					提示： 若订单金额大于您的网络支付单笔交易限额，您可以拍下多个订单，并致电客服给您拆单再进行分单付款，客服电话400-678-0068； 
				</div>
			</div>
			
			<!--常见问题-->
			<div class="problemBox">
				<p class="pb1">常见支付问题</p>
				<p class="pb2">1. 支付金额超过网银支付的单笔限额怎么办?</p>
				<p class="pb3">若支付金额超过您的网银单笔交易限额，您可以下多个订单，并致电客服400-678-0068，由我们客服给您拆单再进行分单付款；或致电银行取消限额。</p>
				<p class="pb2">2. 网上银行/支付宝/微信已扣款有消费记录，但订单上还显示"等待买家付款" ?</p>
				<p class="pb3">出现此问题，可能是银行/支付宝/财付通的数据没有即时传输至我们收银台，请您第一时间与我们客服联系400-678-0068告知订单信息，我们将协助您解决。</p>
				<p class="pb2">3. 支付宝余额有足额的金额，却无法用余额付款?</p>
				<p class="pb3">可能由于您支付宝账户没有实名认证，建议您去支付宝网页申请实名认证。</p>
			</div>
		</div>
		<!--详情区结束-->
		<!--引入公共底部-->
		{{include file="../Common/orderCartFooter"}}
		<!--底部区结束-->
		
		<!--<script type="text/javascript">
			$(function(){
				$(".buy_cart").click(function(){
					alert('支付成功，请耐心等待收货!');
					location.href="{{U('MyCenter/index')}}"
				});
			})
		</script>-->
		
	</body>
</html>
