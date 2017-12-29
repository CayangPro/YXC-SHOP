<!--引入公共头部*****************-->
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
			<a href="http://yxc.wsang.cc/shop/index.php?m=Home&c=Index&a=index">
				<img src="Public/Home/images/shop_182x60.png"/>
			</a>
		</div>
		<div class="topName">YXC在线旗下网上商城</div>
		<div class="topRight">
			还没有YXC商城账号？&nbsp;<a href="<?php echo U('Member/reg')?>">立即注册</a>
		</div>
	</div>
	<!--顶部区结束*******************-->
	
	<!--中间区开始*******************-->	
	<div id="centerBoxLogin">
		<form  onsubmit="return hd_submit(this,'<?php echo U('login')?>','<?php echo U('Index/index')?>')">
			<div id="centerLeftBox"></div>
			<div id="centerRightBox">
				<div class="titleBox">
					登录YXC商城
				</div>
				<div class="userBox userPasswordBox">
					<input type="text" name="cunumber" maxlength="16" placeholder="账号"/>
				</div>
				<div class="passwordBox userPasswordBox">
					<input type="password" name="password" maxlength="16" placeholder="密码"/>
				</div>
				<div class="codeBox userPasswordBox">
					<input type="text" name="code" maxlength="4" placeholder="验证码"/>
				</div>
				<img id="check" src="<?php echo U('Code')?>"/>
				<a href="javascript:change();">换一张</a>
				<!--7天免登陆-->
				<div class="checkBox">
					<input type="checkbox" name="auto" />&nbsp;
					<spand  style="font-size: 16px;">7天自动登陆</spand>
				</div>
				<div class="loginBox">
					<input type="submit" value="登 录" />
				</div>
			</div>
		</form>
	</div>
	<!--中间区结束*******************-->		
	
	<!--引入公共底部*****************-->
	<div id="endFatherBOX">
	<div id="endBOX">				
		<a href="http://www.egou.com/" target="_blank">友情链接</a>				
		<a href="https://gitee.com/yangxingcai" target="_blank">码云-开源中国</a>
		|
		<a href="http://www.swiper.com.cn" target="_blank">Swiper中文网</a>
		|
		<a href="http://fontawesome.dashgame.com/" target="_blank">Font Awesome</a>
		|
		<span>©2015.C69 YangXingCai 版权所有</span>
	</div>
</div>
<script>
	function change(){
		var c=document.getElementById('check').getAttribute('src')+"&cc="+Math.random();;
		c=c+"&cc="+Math.random();
		document.getElementById('check').src=c;
	}
</script>
		
	</body>
</html>
