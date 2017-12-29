<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>登录页</title>
		<link rel="stylesheet" type="text/css" href="Public/Home/css/login.css"/>
		<link rel="stylesheet" type="text/css" href="Public/Home/css/reg.css"/>
		<script type="text/javascript" src="Public/Home/js/jquery-1.8.2.min.js"></script> 
		<!--载入hdjs-->
	    <link rel="stylesheet" href="Public/hdjs/hdjs.css">
	    <script src="Public/hdjs/hdjs.min.js"></script>
		<script type="text/javascript">  
		    $(function (){ 	
		    	//登录输入框点击
				$(".userPasswordBox").click(function(){
					$(this).css('border-color','#C61E1E');
				})	
				$(".userPasswordBox").mouseout(function(){
					$(this).css('border-color','#E6E6E6');
				})
				//注册输入框点击
				$(".intoBox").click(function(){
					$(this).css('border-color','#C61E1E');
				})	
				$(".intoBox").mouseout(function(){
					$(this).css('border-color','#E6E6E6');
				})
		   	});  
		</script>  
	</head>
	<body>
	<!--顶部区开始*******************-->
	<div id="topBox">
		<div class="topLogo">
			<a href="<?php echo U('Index/index')?>">
				<img src="Public/Home/images/shop_182x60.png"/>
			</a>
		</div>
		<div class="topName">YXC在线旗下网上商城</div>