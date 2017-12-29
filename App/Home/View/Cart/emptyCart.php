<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>YXC商城</title>
		<!--引入公共头部*****************-->
		{{include file="../Common/orderCartHead"}}
		<link rel="stylesheet" type="text/css" href="./Public/Home/css/emptyCart.css"/>
		
		<!--head区域开始-->
		<div id="headBox">
			<div id="leftHeadBox">
				<a href=""><img src="Public/Home/images/shop.jpg"/></a>
				<a href=""><img src="Public/Home/images/logo-text.png"/></a>
			</div>
			<ul id="rightHeadBox">
				<li class='s1'>下订单</li>
				<li class='s2'>去付款</li>
				<li class='s3'>确认收货</li>
				<li class='s4'>评价</li>
			</ul>
		</div>
		<!--head区域结束-->
		
		<!--详情区开始-->
		<div id="wrapper">
			<dl cass="shopCarTip">
				<dt>您的购物车里还没有商品，您可以：</dt>
				<dd>
					去
					<a href="{{U('Index/index')}}">挑选商品</a>
				</dd>
			</dl>
		</div>
		<!--详情区结束-->
		
		<!--底部区结束-->
		<!--引入公共头部*****************-->
		{{include file="../Common/orderCartFooter"}}
	</body>
</html>
