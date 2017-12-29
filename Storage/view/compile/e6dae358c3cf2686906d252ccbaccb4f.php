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
        <link rel="stylesheet" type="text/css" href="Public/Home/css/addressCenter.css"/>
		<script>
			//城市联动插件
			$(function () {
			    //初始化方法
			    area.init('addressId');
			    //修改的时候默认被选中效果
			    area.selected('北京市', '北京', '');
			})
		</script>		
		<!--详情区开始-->
		<div id="wrapper">
			<!--左侧导航区开始-->
			<ul id="navLeftBox" class="shadow">
				<!--订单中心-->
				<li class="oderCenter">
					<p class="opc"><i></i>订 单 中 心</p>
					<a href="<?php echo U('MyCenter/orderCenter')?>" class="apc">
						我的订单
					</a>
				</li>
				<!--个人设置-->
				<li class="personalSet">
					<p class="opc"><i></i>个 人 设 置</p>
					<a class="apc"  style="color: #CC0000;">收货地址管理</a>
					<!--<a class="apc zolCenter">ZOL个人中心</a>-->
				</li>
			</ul>
			<!--左侧导航区结束-->
			
			<!--右侧侧导航区开始-->
			<div id="navRightBox" class="shadow">
				<ul id="nrTitle">
					<li class="shopOrder">新增收货地址</li>
				</ul>
				<!--下方显示收货人地址位置-->
				<table class="tableBlock addrTable" cellspacing="" cellpadding="">
					<tr class="tbTitle">
						<td class="cell1">收货人</td>
						<td class="cell2">所在地区</td>
						<td class="cell3">街道地址</td>
						<td class="cell4">邮编</td>
						<td class="cell5">电话/手机</td>
						<td class="cell6">操作</td>
					</tr>
					<?php foreach ($addressData as $v){?>
						<tr class="tbContent">
							<td class="cell1"><?php echo $v['rname']?></td>
							<td class="cell2"><?php echo $v['raddress']?></td>
							<td class="cell3"><?php echo $v['radeaddress']?></td>
							<td class="cell4"><?php echo $v['rmail']?></td>
							<td class="cell5"><?php echo $v['rcall']?></td>
							<td class="cell6">
								<!--<a href="">设为默认</a>-->
								<!--<a href="">修改</a>-->
								<a href="javascript:if(confirm('确定删除吗？')) location.href='<?php echo U('MyCenter/deladdress',['daid'=>$v['cuaid']])?>';">删除</a>
							</td>
						</tr>
					<?php }?>
				</table>
				
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
