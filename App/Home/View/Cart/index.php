<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>YXC商城</title>
		<!--引入公共头部*****************-->
		{{include file="../Common/orderCartHead"}}
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
						<e>({{$_SESSION['cart']['total_rows']}}/30)</e>
					</p>
					<div class="total">
						<span>
							总计(不含运费):
							&yen;<e>{{$_SESSION['cart']['total']}}</e>
						</span>
						<a href="{{U('Order/index')}}">
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
					{{foreach from="$_SESSION['cart']['goods']" key="$k" value="$v" }}
						<tr class="tr_2">
							<td colspan="7"></td>
						</tr>
						<tr class="tr_3">
							<td class="s-infor" colspan="2">
								<a class="pic" href="{{U('Detail/index',['zol_goods_gid'=>$_SESSION['cart']['goods'][$k]['id']])}}">
									<img src="{{$v['options']['pic']}}"/>
								</a>
								<div class="inforbox">
									<h5 class="title">
										<a href="{{U('Detail/index',['zol_goods_gid'=>$_SESSION['cart']['goods'][$k]['id']])}}" title="{{$v['name']}}">	
											{{$v['name']}}									   
										</a>
									</h5>
									{{foreach from="$v['options']['name']" key="$kk" value="$vv"}}
										<p>{{$vv['taname']}}:{{$vv['gavalue']}}</p>
									{{endforeach}}
								</div>							
							</td>                                             
							<td class="s-price">
								&yen;<e>{{$v['price']}}</e>
							</td>
							<td class="s-amount">
								<div class="buy-num">
									<a class="minus numRaduce" href="javascript:void(0)" title="减一" sid="{{$k}}">-</a>
									<input class="numInput" name="num" value="{{$v['num']}}" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" />
									<a class="plus numAdd"  name="num"  href="javascript:void(0)" title="加一" sid="{{$k}}">+</a>
								</div>
							</td>
							<td class="s-agio">---</td>
							<td class="s-total">&yen;<e>{{$v['total']}}</e></td>
							<td class="s-del">
								<a href="javascript:if(confirm('确定删除吗？')) location.href='{{U('Cart/delCart',['gid'=>$k])}}';">删 除</a>
							</td>
						</tr>
					{{endforeach}}
				</table>
			</div>
			<!--总价-->
			<div class="totalPrice">
				<span>
					商品总价(不含运费): 
					&yen;<e>{{$_SESSION['cart']['total']}}</e>
				</span>
			</div>
			<!--订单底部-->
			<div class="orderFoot">
				<a href="javascript:if(confirm('确定清空购物车吗？')) location.href='{{U('Cart/delAll')}}';">清空购物车</a>
				<a class="goShopping" href="{{U('Index/index')}}"><< 继续购物</a>
				<a href="{{U('Order/index')}}"><input class="payBtn" type="submit" value="去结算" /></a>
			</div>
		</div>
		<!--详情区结束-->		
		<!--引入公共底部*****************-->
		{{include file="../Common/orderCartFooter"}}
		
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
			        	url:"{{U('Cart/edit')}}",
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
			        	url:"{{U('Cart/edit')}}",
			        	data:{num:num, sid:sid},
				    });
			    });			    
			})
		</script>
	</body>
</html>
