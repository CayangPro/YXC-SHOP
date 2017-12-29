<!--引入公共头部*****************-->
{{include file="../Common/memberHead"}}
		<div class="topRight">
			还没有YXC商城账号？&nbsp;<a href="{{U('Member/reg')}}">立即注册</a>
		</div>
	</div>
	<!--顶部区结束*******************-->
	
	<!--中间区开始*******************-->	
	<div id="centerBoxLogin">
		<form  onsubmit="return hd_submit(this,'{{U('login')}}','{{U('Index/index')}}')">
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
				<img id="check" src="{{U('Code')}}"/>
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
	{{include file="../Common/memberFooter"}}
		
	</body>
</html>
