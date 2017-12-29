<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>YXC商城</title>
		<!--引入公共头部*****************-->
		
<!--载入公共模板-->
	<link rel="stylesheet" type="text/css" href="./Public/Home/css/oredrCartHF.css"/>
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
						<a href="http://yxc.wsang.cc/shop/index.php?m=Home&c=Cart&a=index">购物车(<span id="focusShopsNum" style="color: red;">2</span>)件</a>
					</li>
								<li>
					<a href="http://yxc.wsang.cc/shop/index.php?m=Home&c=MyCenter&a=orderCenter">我的订单</a>
				</li>
			</ul>
			<!--顶部登右侧结束-->
		</div>
	</div>
<!--顶部区结束*******************-->


		<!--载入css样式-->
		<link rel="stylesheet" type="text/css" href="./Public/Home/css/addCart.css"/>
		<!--head区域开始-->
		<div id="headBox">
			<div id="leftHeadBox">
				<a href=""><img src="Public/Home/images/shop.jpg"/></a>
				<a href=""><img src="Public/Home/images/logo-text.png"/></a>
			</div>
			<ul id="rightHeadBox">
				<li class='s1'>加入购物车</li>
				<li class='s2'>下订单</li>
				<li class='s3'>去付款</li>
				<li class='s4'>确认收货</li>
				<li class='s5'>评价</li>
			</ul>
		</div>
		<!--head区域结束-->
		<!--详情区开始-->
		<div id="wrapper">
			<div class="cartState">
					<p>
						购物车状态
						<e>(<?php echo $_SESSION['cart']['total_rows']?>/30)</e>
					</p>
					<div class="total">
						<span>
							总计(不含运费):
							&yen;<e><?php echo $_SESSION['cart']['total']?></e>
						</span>
						<a href="<?php echo U('Order/index')?>">
							<input type="submit" name="" id="" value="去结算" />
						</a>
					</div>
			</div>
			<!--订单-->
			<div class="orderTable">
				<table>
					<tr class="tr_1">
						<td class="td-1">
							商品详情
						</td>
						<td class="td-2"></td>
						<td class="td-3">单价(元)</td>
						<td class="td-4">数量</td>
						<td class="td-5">优惠</td>
						<td class="td-6">小计(元)</td>
						<td class="td-7">操作</td>
					</tr>
					<!--具体商品-->
					<?php foreach ($_SESSION['cart']['goods'] as $k=>$v){?>
						<tr class="tr_2">
							<td colspan="7"></td>
						</tr>
						<tr class="tr_3">
							<td class="s-infor" colspan="2">
								<a class="pic" href="<?php echo U('Detail/index',['zol_goods_gid'=>$_SESSION['cart']['goods'][$k]['id']])?>">
									<img src="<?php echo $v['options']['pic']?>"/>
								</a>
								<div class="inforbox">
									<h5 class="title">
										<a href="<?php echo U('Detail/index',['zol_goods_gid'=>$_SESSION['cart']['goods'][$k]['id']])?>" title="<?php echo $v['name']?>">	
											<?php echo $v['name']?>									   
										</a>
									</h5>
									<?php foreach ($v['options']['name'] as $kk=>$vv){?>
										<p><?php echo $vv['taname']?>:<?php echo $vv['gavalue']?></p>
									<?php }?>
								</div>							
							</td>                                             
							<td class="s-price">
								&yen;<e><?php echo $v['price']?></e>
							</td>
							<td class="s-amount">
								<div class="buy-num">
									<a class="minus numRaduce" href="javascript:void(0)" title="减一" sid="<?php echo $k?>">-</a>
									<input class="numInput" name="num" value="<?php echo $v['num']?>" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" />
									<a class="plus numAdd"  name="num"  href="javascript:void(0)" title="加一" sid="<?php echo $k?>">+</a>
								</div>
							</td>
							<td class="s-agio">---</td>
							<td class="s-total">&yen;<e><?php echo $v['total']?></e></td>
							<td class="s-del">
								<a href="javascript:if(confirm('确定删除吗？')) location.href='<?php echo U('Cart/delCart',['gid'=>$k])?>';">删 除</a>
							</td>
						</tr>
					<?php }?>
				</table>
			</div>
			<!--总价-->
			<div class="totalPrice">
				<span>
					商品总价(不含运费): 
					&yen;<e><?php echo $_SESSION['cart']['total']?></e>
				</span>
			</div>
			<!--订单底部-->
			<div class="orderFoot">
				<a href="javascript:if(confirm('确定清空购物车吗？')) location.href='<?php echo U('Cart/delAll')?>';">清空购物车</a>
				<a class="goShopping" href="<?php echo U('Index/index')?>"><< 继续购物</a>
				<a href="<?php echo U('Order/index')?>"><input class="payBtn" type="submit" value="去结算" /></a>
			</div>
		</div>
		<!--详情区结束-->		
		<!--引入公共底部*****************-->
		<div id="footerBox">
	<p>©2016中关村在线 版权所有. 京ICP备09041801号-182 
	<p href="">京ICP证010391号</p>
	<div id="authentication">
		<a href="javascript:;"><img src="Public/Home/images/beian.png"/></a>
		<a href="javascript:;"><img src="Public/Home/images/jingcha.png"/></a>
		<a href="javascript:;"><img src="Public/Home/images/cert.png"/></a>
	</div>
</div>
		
		<script type="text/javascript">
			$(function(){
				//购买数量加减
			    //增加
			    $(".numAdd").click(function(){
			    	//定义编辑购物车ID
			    	var sid = $(this).attr('sid');
			        var num = $(this).siblings(".numInput").val();
			        num= parseInt(num);
			        if(num < 12){
			        	$(this).prev().val(++num);
			        }else{	
			        	num = 12;		        	
			        	alert('数量达到购买上限');
			        }
			        //单价
			        var price = $(this).parent().parent().prev().children(".s-price e").text();
			        var gtotal  = num*price;
			        $(this).parent().parent().siblings(".s-total").find('e').html(gtotal);
			        
			        //循环
			        var total = 0;			        
			        $(".tr_3").each(function(){
			        	var n = parseInt($(this).find(".numInput").val());
			        	var t = parseFloat($(this).find(".s-price e").text());
			        	total+= n*t;
			        });
			        //显示订单总价 
			        $(".totalPrice e").html(total);
			        $(".total span e").html(total);
			         //异步发送更新的购物车数据
			        $.ajax({
			        	type:"post",
			        	url:"<?php echo U('Cart/edit')?>",
			        	data:{num:num, sid:sid},
				    });
			        
			    });
			
			    //减去
			    $(".numRaduce").click(function(){
			    	//定义编辑购物车ID
			    	var sid = $(this).attr('sid');	 			    	
			        var num = $(this).siblings(".numInput").val();
			        num= parseInt(num);			       
			        if(num > 1){
			        	$(this).next().val(num - 1);
			        }else{
			        	num = 1;
			        }			               
			       //单价
			        var price = $(this).parent().parent().prev().children().text();
			        var gtotal  = num*price;
			        $(this).parent().parent().siblings(".s-total").find('e').html(gtotal);
			        
			        //循环
			        var total = 0;			        
			        $(".tr_3").each(function(){
			        	var n = parseInt($(this).find(".numInput").val());
			        	var t = parseFloat($(this).find(".s-price e").text());
			        	total+= n*t;
			        }); 
			        //显示订单总价 
			        $(".totalPrice e").html(total);
			        $(".total span e").html(total);
			        //异步发送更新的购物车数据
			        $.ajax({
			        	type:"post",
			        	url:"<?php echo U('Cart/edit')?>",
			        	data:{num:num, sid:sid},
				    });
			    });			    
			})
		</script>
	</body>
</html>
