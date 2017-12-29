
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
					<a href="{{U('Index/index')}}" target="_blank">商城首页</a>
				</span>
				<?php if(!isset($_SESSION['info']['cunumber'])) {?>
					<span class="topWelcomeLogin">
						Hi~欢迎来到YXC商城&nbsp;,&nbsp;请&nbsp;<a href="{{U('Member/login')}}">登录</a>						 
					</span>
					<span class="topRegister">
						<a href="{{U('Member/reg')}}">免费注册</a>
					</span>
				<?php }else{?>
					<span class="topWelcomeLogin">
					 您好&nbsp;,&nbsp;<a href="{{U('MyCenter/index')}}">{{$_SESSION['info']['cuname']}}</a>					 
					</span>
					<span class="topRegister">
						<a href="{{U('Member/out')}}">退出</a>
					</span>
				<?php } ?>
			</div>
			<!--顶部左侧区结束-->	
			
			<!--顶部登右侧开始-->
			<ul id="topRight">
				<li>
					<a id="service" href="javascript:;">联系本人</a>
					<div id="serviceCall">13618102625</div>
				</li>
				<?php if(!isset($_SESSION['info']['cunumber'])) {?>
					<li>
						<a href="{{U('Member/login')}}">购物车<span id="focusShopsNum">(0)</span>件</a>
					</li>
				<?php }elseif(empty($_SESSION['cart']['goods'])){?>
					<li>
						<a href="{{U('Cart/emptyCart')}}">购物车<span id="focusShopsNum">(0)</span>件</a>
					</li>
				<?php } else {?>
					<li>
						<a href="{{U('Cart/index')}}">购物车(<span id="focusShopsNum" style="color: red;">{{$_SESSION['cart']['total_rows']}}</span>)件</a>
					</li>
				<?php } ?>
				
				<?php if(!isset($_SESSION['info']['cunumber'])) {?>
				<li>
					<a href="{{U('Member/Login')}}">我的订单</a>
				</li>
			<?php }else{?>
				<li>
					<a href="{{U('MyCenter/orderCenter')}}">我的订单</a>
				</li>
			<?php } ?>
			</ul>
			<!--顶部登右侧结束-->
		</div>
	</div>
<!--顶部区结束*******************-->

<!--head区域开始-->
	<div id="headBox">
		<div class="headSon">
			<a class="headTitle" href="{{U('MyCenter/index')}}"></a>
			<a class="headHome" href="{{U('MyCenter/index')}}">首页</a>
		</div>
	</div>
<!--head区域结束-->
