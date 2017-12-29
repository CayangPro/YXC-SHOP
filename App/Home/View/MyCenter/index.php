<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>YXC商城</title>
		<!--引入公共头部*****************-->
        {{include file="../Common/myCenterHead"}}
        <!--载入css样式-->
		<link rel="stylesheet" type="text/css" href="Public/Home/css/myCenter.css"/>
		<!--详情区开始-->
		<div id="wrapper">
			<!--左侧导航区开始-->
			<ul id="navLeftBox" class="shadow">
				<!--订单中心-->
				<li class="oderCenter">
					<p class="opc"><i></i>订 单 中 心</p>
					<a href="{{U('MyCenter/orderCenter')}}" class="apc">
						我的订单
					</a>
				</li>
				<!--个人设置-->
				<li class="personalSet">
					<p class="opc"><i></i>个 人 设 置</p>
					<a href="{{U('MyCenter/addressCenter')}}" class="apc">收货地址管理</a>
					<!--<a class="apc zolCenter">ZOL个人中心</a>-->
				</li>
			</ul>
			<!--左侧导航区结束-->			
						
			<!--右侧侧导航区开始-->
			<div id="navRightBox" class="shadow">
				<!--头像区开始-->
				<ul id="headBox">
					<li class="touXiang"></li>
					<li class="userName">{{$_SESSION['info']['cuname']}}</li>
				</ul>
				<!--头像区结束-->
				<ul id="nrTitle">
					<li class="shopOrder">我的订单</li>
				</ul>
				
				<ul id="nrImgs">
					<li class="daiFuK">
						<a href="javascript:;">
							<i></i>
							<span>
								待付款
								<e>0</e>
							</span>
						</a>
					</li>
					<li class="daiFaH">
						<a href="javascript:;">
							<i></i>
							<span>
								待发货
								<e>0</e>
							</span>
						</a>
					</li>
					<li class="daiSaH">
						<a href="javascript:;">
							<i></i>
							<span>
								待收货
								<e>0</e>
							</span>
						</a>
					</li>
					<li class="daiPingJ">
						<a href="javascript:;">
							<i></i>
							<span>
								待评价
								<e>0</e>
							</span>
						</a>
					</li>
				</ul>
				
			</div>
		<!--右侧导航区结束-->
		</div>
		<!--详情区结束-->
		
		 <!--引入公共底部*****************-->
    	{{include file="../Common/indexFooter"}}
				
	</body>
</html>
