<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>YXC商城</title>
		<!--引入公共头部*****************-->
        
<!--载入公共模板-->
	<link rel="stylesheet" type="text/css" href="Public/Home/css/myCenterHead.css"/>
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
						<a href="http://yxc.wsang.cc/shop/index.php?m=Home&c=Cart&a=emptyCart">购物车<span id="focusShopsNum">(0)</span>件</a>
					</li>
								
								<li>
					<a href="http://yxc.wsang.cc/shop/index.php?m=Home&c=MyCenter&a=orderCenter">我的订单</a>
				</li>
						</ul>
			<!--顶部登右侧结束-->
		</div>
	</div>
<!--顶部区结束*******************-->

<!--head区域开始-->
	<div id="headBox">
		<div class="headSon">
			<a class="headTitle" href="http://yxc.wsang.cc/shop/index.php?m=Home&c=MyCenter&a=index"></a>
			<a class="headHome" href="http://yxc.wsang.cc/shop/index.php?m=Home&c=MyCenter&a=index">首页</a>
		</div>
	</div>
<!--head区域结束-->

        <!--载入css样式-->
        <link rel="stylesheet" type="text/css" href="Public/Home/css/orderCenter.css"/>
			
		<!--详情区开始-->
		<div id="wrapper">
			<!--左侧导航区开始-->
			<ul id="navLeftBox" class="shadow">
				<!--订单中心-->
				<li class="oderCenter">
					<p class="opc"><i></i>订 单 中 心</p>
					<a href="" class="apc" style="color: #CC0000;">
						我的订单
					</a>
				</li>
				<!--个人设置-->
				<li class="personalSet">
					<p class="opc"><i></i>个 人 设 置</p>
					<a href="<?php echo U('MyCenter/addressCenter')?>" class="apc">收货地址管理</a>
					<!--<a class="apc zolCenter">ZOL个人中心</a>-->
				</li>
			</ul>
			<!--左侧导航区结束-->
			
			<!--右侧侧导航区开始-->
			<div id="navRightBox" class="shadow">
				<ul id="nrTitle">
					<li class="shopOrder">商城订单</li>
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
				<!--表头-->
				<ul id="navTable">
					<li class="cell1">商品信息</li>
					<li class="cell2">单价(元)</li>
					<li class="cell3">数量</li>
					<li class="cell4">售后</li>
					<li class="cell5">实付款(元)</li>
					<li class="cell6">订单状态</li>
					<li class="cell7">操作</li>	
				</ul>
				<!--订单信息-->
				<?php foreach ($orderData as $v){?>
				<div id="OrderInfo">
					<p id="orderNumber">订单号 : <?php echo $v['danumber']?></p> 
					<p id="orderTime">下单时间 : <?php echo date('Y-m-d h:i',$v['ddtime'])?></p> 
				</div>
				
				<!--商品信息-->
				<table id="goodsInfo">
					<tr>
						<td class="gdi1">
						<?php foreach ($v['value'] as $value){?>
							<div class="infoBox">
								<a class="goodsPic" href="<?php echo U('Detail/index',['zol_goods_gid'=>$value['zol_goods_gid']])?>" target="_blank">
									<img src="<?php echo $value['dlimg']?>"/>
								</a>
								<a class="goodsTitle" href="<?php echo U('Detail/index',['zol_goods_gid'=>$value['zol_goods_gid']])?>" target="_blank">
									<?php echo $value['dltitle']?>
								</a>
								<p class="gdi2"><?php echo $value['dlpriced']?></p>
								<p class="gdi3"><?php echo $value['dlnum']?></p>
								<p class="gdi4">---</p>
								<a class="goodsKuai" href="<?php echo U('Detail/index',['zol_goods_gid'=>$value['zol_goods_gid']])?>" target="_blank">
									交易快照
								</a>
								<p>
									<!--<span>颜色：银色</span>
									<span>套装：官方标配</span>-->
								</p>
							</div>
						<?php }?>
						</td>
						<td class="gdi5">
							<p><?php echo $v['ddtotal']?></p>
						</td>
						<td class="gdi6">
							<p>已付款</p>
						</td>
						<td class="gdi7">
							<p>
								<a href="javascript:if(confirm('确定删除吗？')) location.href='<?php echo U('MyCenter/del',['daid'=>$v['daid']])?>';">删除</a>
							</p>
						</td>
					</tr>
				</table>
				<?php }?>
			</div>
		<!--右侧导航区结束-->
		</div>
		<!--详情区结束-->
		
		 <!--引入公共底部*****************-->
    	<div id="endFatherBox">
	<div id="endBox">				
		<div class="endFoot endFootFirst">
			<a href="http://www.egou.com/" target="_blank">友情链接</a>
			<a href="https://gitee.com/yangxingcai" target="_blank">码云-开源中国</a>
			|
			<a href="http://www.swiper.com.cn" target="_blank">Swiper中文网</a>
			|
			<a href="http://fontawesome.dashgame.com/" target="_blank">Font Awesome</a>
			|
			<span>YXC  cayang@foxmail.com  yxc.wsang.cc版权所有</span>
		</div>
	</div>
</div>
				
	</body>
</html>
