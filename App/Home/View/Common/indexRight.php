<div id="rightFatherBox">
	<div id="rightBoxA">
		<!--我的订单-->
		<div class="myOrder rightTips">
			<div class="tipsHover">
				<?php if(!isset($_SESSION['info']['cunumber'])) {?>
					<a href="{{U('Member/login')}}">我的订单</a>
				<?php }else{?>
					<a href="{{U('Mycenter/index')}}">我的订单</a>
				<?php } ?>
			</div>
		</div>
		<!--我的足迹-->
		<div class="myFootprint rightTips"  style="display: none;">
			<div class="tipsHover">
				<?php if(!isset($_SESSION['info']['cunumber'])) {?>
					<a href="{{U('Member/login')}}">我的足迹</a>
				<?php }else{?>
					<a href="{{U('Mycenter/index')}}">我的足迹</a>
				<?php } ?>
			</div>
		</div>
		
		<!--购物车-->
		<?php if(!isset($_SESSION['info']['cunumber'])) {?>
			<div class="ShoppingCart rightTips">
				<span id="cartTotal">0</span>
				<div class="tipsHover">
					<a href="{{U('Member/login')}}">购物车</a>
				</div>
			</div>
		<?php }elseif(empty($_SESSION['cart']['goods'])){?>
			<div class="ShoppingCart rightTips">
				<span id="cartTotal">0</span>
				<div class="tipsHover">
					<a href="{{U('Cart/emptyCart')}}">购物车</a>
				</div>
			</div>
		<?php } else {?>
			<div class="ShoppingCart rightTips">
				<span id="cartTotal">{{$_SESSION['cart']['total_rows']}}</span>
				<div class="tipsHover">
					<a href="{{U('Cart/index')}}">购物车</a>
				</div>
			</div>
		<?php } ?>	
					
	</div>
	<!--返回顶部-->
	<a href="#top">
		<div id="rightBoxB">
			<div class="returnTop">
				返回顶部
			</div>
		</div>
	</a>
</div>