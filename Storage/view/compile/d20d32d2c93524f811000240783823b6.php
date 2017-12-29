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
			还没有YXC商城账号？&nbsp;<a href="<?php echo U('Member/login')?>">立即登录</a>
		</div>
	</div>
	<!--顶部区结束*******************-->
	
	<!--中间区开始*******************-->	
	<div id="centerBoxReg">
		<form  onsubmit="return hd_submit(this,'<?php echo U('reg')?>','<?php echo U('login')?>')">
			<div class="kszcBox">
				30秒快速注册，加入YXC商城
			</div>
			<div class="zhaoHao">
				<span>注 册 账 号</span>
				<span>&nbsp;</span>
			</div>
			
			<!--用户名-->
			<div class="userName inputFatherBox">
				<div class="label">
					<p>*</p>
					账&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号:				
				</div>
				<div class="intoBox">
					<input type="text" name="cunumber" maxlength="16" minlength="5" />
				</div>
				<div class="tips">
					请输入5-16位的账号
				</div>
			</div>
			<!--昵称-->
			<div class="nickname inputFatherBox">
				<div class="label">
					<p>*</p>
					昵&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;称:				
				</div>
				<div class="intoBox">
					<input type="text" name="cuname" maxlength="12" />
				</div>
				<div class="tips">
					请输入5-12位的昵称
				</div>
			</div>
			<!--密码-->
			<div class="userName inputFatherBox">
				<div class="label">
					<p>*</p>
					密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码:				
				</div>
				<div class="intoBox">
					<input type="password" name="password" maxlength="16" />
				</div>
				<div class="tips">
					请输入6-16位的密码
				</div>
			</div>
			<!--确认密码-->
			<div class="userName inputFatherBox">
				<div class="label">
					<p>*</p>
					确认密码:				
				</div>
				<div class="intoBox">
					<input type="password" name="confirmPassword" id="" maxlength="16" />
				</div>
				<div class="tips">
					请再次输入密码
				</div>
			</div>
			<!--验证码-->
			<div class="codeFatherBox inputFatherBox">
				<div class="label">
					<p>*</p>
					验&nbsp;证&nbsp;码:				
				</div>
				<div class="intoBox codeInto">
					<input type="text" name="code" maxlength="4" />
				</div>	
				<img id="check" src="<?php echo U('Code')?>"/>
				<a href="javascript:change();">换一张</a>
				<div class="tips">
					请输入验证码
				</div>				
			</div>		
			<div class="regBox">
				<input type="submit" value="立即注册" />
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





