<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>YXC商城</title>		
		<!--引入公共头部*****************-->
		
<!--载入公共模板-->
	<link rel="stylesheet" type="text/css" href="./Public/Home/css/oredrCartHF.css"/>
	<script src="Public/Home/js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="Public/Home/js/area.js"></script>
	<script src="Public/hdjs/hdjs.min.js"></script>
</head>
<body>
	<div id="topBack">
		<div id="topFather">
			<!--顶部登左侧开始-->
			<div id="topLeft">
				<span class="topHome">
					<a href="http://yxc.wsang.cc/shop/index.php?m=Home&c=Index&a=index" target="_blank">商城首页</a>
				</span>
									<span class="topWelcomeLogin">
					 您好&nbsp;,&nbsp;<a href="http://yxc.wsang.cc/shop/index.php?m=Home&c=MyCenter&a=index">测试~账号</a>					 
					</span>
					<span class="topRegister">
						<a href="http://yxc.wsang.cc/shop/index.php?m=Home&c=Member&a=out">退出</a>
					</span>
							</div>
			<!--顶部左侧区结束-->	
			
			<!--顶部登右侧开始-->
			<ul id="topRight">
				<li>
					<a id="service" href="javascript:;">联系本人</a>
					<div id="serviceCall">13618102625</div>
				</li>
									<li>
						<a href="http://yxc.wsang.cc/shop/index.php?m=Home&c=Cart&a=index">购物车(<span id="focusShopsNum" style="color: red;">2</span>)件</a>
					</li>
								<li>
					<a href="http://yxc.wsang.cc/shop/index.php?m=Home&c=MyCenter&a=orderCenter">我的订单</a>
				</li>
			</ul>
			<!--顶部登右侧结束-->
		</div>
	</div>
<!--顶部区结束*******************-->


		
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
						应付金额<span><?php echo $orderData['ddtotal']?></span>元
					</div>
					<p class="orderNumber">您的订单号 : <?php echo $orderData['danumber']?></p>
					<?php foreach ($orderListData as $v){?>
					   <p class="orderName" maxlength="80">商品名称 : <?php echo $v['dltitle']?></p>
					<?php }?>
					
						<p class="cuName">收货人：<?php echo $orderData['daname']?></p>
						<p class="cuAddress">收货地址 :<?php echo $orderData['ddaddress']?></p>
				
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
					支付<span> <?php echo $orderData['ddtotal']?> </span>元
				</div>
			</div>
			<!--立即支付-->
			<div class="payNow">
				<a href="<?php echo U('Pay/delAll')?>" class="payNowNum fl mr10 buy_cart buy_btn" >立即支付</a>
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
		<div id="footerBox">
	<p>©2016中关村在线 版权所有. 京ICP备09041801号-182 
	<p href="">京ICP证010391号</p>
	<div id="authentication">
		<a href="javascript:;"><img src="Public/Home/images/beian.png"/></a>
		<a href="javascript:;"><img src="Public/Home/images/jingcha.png"/></a>
		<a href="javascript:;"><img src="Public/Home/images/cert.png"/></a>
	</div>
</div>
		<!--底部区结束-->
		
		<!--<script type="text/javascript">
			$(function(){
				$(".buy_cart").click(function(){
					alert('支付成功，请耐心等待收货!');
					location.href="<?php echo U('MyCenter/index')?>"
				});
			})
		</script>-->
		
	</body>
</html>
