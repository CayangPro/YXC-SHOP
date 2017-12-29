<?php 
//1.获取顶级分类
$cate = new \Common\Model\Cate;
//顶级分类
$cateData = $cate->where("pid=0")->orderBy('csort','DESC')->get();
$cid = Q('get.cid',0,'intval');
//控制器判断使用变量
$c = Q('get.c');

?>

<!--载入公共模板-->
	<link rel="stylesheet" type="text/css" href="Public/Home/css/index.css"/>
	<link rel="stylesheet" type="text/css" href="./Public/Home/css/list.css"/>
	<link rel="stylesheet" type="text/css" href="./Public/Home/css/Detail.css"/>
	<link rel="stylesheet" href="Public/hdjs/hdjs.css">
	<script src="Public/Home/js/jquery-1.8.2.min.js"></script>
	<script src="Public/Home/js/zhulunbo.js"></script>
	<script src="Public/Home/js/listclick.js"></script>
	<script src="Public/hdjs/hdjs.min.js"></script>
</head>

<div id="topBack">
	<div id="topFather">
		<!--顶部登左侧开始-->
		<div id="topLeft">
			<span class="topHome">
				<a href="<?php echo U('Index/index')?>" target="_blank">商城首页</a>
			</span>
			<?php if(!isset($_SESSION['info']['cunumber'])) {?>
				<span class="topWelcomeLogin">
					Hi~欢迎来到YXC商城&nbsp;,&nbsp;请&nbsp;<a href="<?php echo U('Member/login')?>">登录</a>						 
				</span>
				<span class="topRegister">
					<a href="<?php echo U('Member/reg')?>">免费注册</a>
				</span>
			<?php }else{?>
				<span class="topWelcomeLogin">
				 您好&nbsp;,&nbsp;<a href="<?php echo U('MyCenter/index')?>"><?php echo $_SESSION['info']['cuname']?></a>					 
				</span>
				<span class="topRegister">
					<a href="<?php echo U('Member/out')?>">退出</a>
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
					<a href="<?php echo U('Member/login')?>">购物车<span id="focusShopsNum">(0)</span>件</a>
				</li>
			<?php }elseif(empty($_SESSION['cart']['goods'])){?>
				<li>
					<a href="<?php echo U('Cart/emptyCart')?>">购物车<span id="focusShopsNum">(0)</span>件</a>
				</li>
			<?php } else {?>
				<li>
					<a href="<?php echo U('Cart/index')?>">购物车(<span id="focusShopsNum" style="color: red;"><?php echo $_SESSION['cart']['total_rows']?></span>)件</a>
				</li>
			<?php } ?>
				
			<?php if(!isset($_SESSION['info']['cunumber'])) {?>
				<li>
					<a href="<?php echo U('Member/Login')?>">我的订单</a>
				</li>
			<?php }else{?>
				<li>
					<a href="<?php echo U('MyCenter/orderCenter')?>">我的订单</a>
				</li>
			<?php } ?>
		</ul>
		<!--顶部登右侧结束-->
	</div>
</div>
<!--顶部区结束*******************-->

<!--顶部搜索区开始*******************-->
<div id="topHead">
	<div id="searchFatherBox">
			<div class="searchLogo">
				<a href=""><img src="Public/Home/images/logo_180x50.png"/></a>
			</div>
		<div class="searchName">YXC在线旗下网上商城</div>
		<!--搜索框-->
		<form action="">
		<div id="searchBox">
			<input type="hidden" name="c" value="List" />
			<input type="hidden" name="cid" value="0" />
			<input class="searchContent" type="text" placeholder="请输入要搜索的内容" name="keywords"/></input>	
			<input class="searchBtn" type="submit" value="搜 索"/></input>	
		</div>
		
		<div class="searchBoxImg">
			<a href=""><img src="Public/Home/images/ChMkJlYcpziIdMcxAAB2sdYBFdcAADnzQKpVyIAAHbJ372.jpg"/></a>
		</div>
		</form>
	</div>
	<ul class="searcHot">
		<!--<a href="">苹果iPhone SE</a>
		<a href="">魅蓝metal</a>
		<a href="">热销笔记本</a>
		<a href="">298买1T硬盘</a>
		<a href="">九阳豆浆机直降100!</a>
		<a href="">罗技G502RGB</a>-->
	</ul>
</div>
<!--顶部搜索区结束*******************-->

<!--商品分类区开始*******************-->
<div id="bannerFatherBox">
	<div class="bannerLeft">商品分类</div>
	<ul class="bannerRight">
		<li class="bannerFirst">
			<a href="<?php echo U('Index/index')?>" target="_blank" <?php if($c=='Index'){?>
                 style="color: #FF335A;"
               <?php }?> >首页</a>
		</li>
		<?php foreach ($cateData as $v){?>
			<li>
				<a href="<?php echo U('List/index',['cid'=>$v['cid']])?>" target="_blank" <?php if($v['cid']==$_GET['cid']){?>
                style="color: #FF335A" 
               <?php }?>><?php echo $v['cname']?></a>
			</li>
		<?php }?>
		<div class="bannerHot">新品手机大聚汇 现货抢购送大奖</div>
	</ul>	
</div>