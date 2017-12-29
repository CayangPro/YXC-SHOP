<!--引入公共头部*****************-->
{{include file="../Common/memberHead"}}
		<div class="topRight">
			还没有YXC商城账号？&nbsp;<a href="{{U('Member/login')}}">立即登录</a>
		</div>
	</div>
	<!--顶部区结束*******************-->
	
	<!--中间区开始*******************-->	
	<div id="centerBoxReg">
		<form  onsubmit="return hd_submit(this,'{{U('reg')}}','{{U('login')}}')">
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
				<img id="check" src="{{U('Code')}}"/>
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
	{{include file="../Common/memberFooter"}}
	
	</body>
</html>





