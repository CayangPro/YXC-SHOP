<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>YXC商城</title>
		<!--引入公共头部*****************-->
        {{include file="../Common/myCenterHead"}}
        <!--载入css样式-->
        <link rel="stylesheet" type="text/css" href="Public/Home/css/orderCenter.css"/>
			
		<!--详情区开始-->
		<div id="wrapper">
			<!--左侧导航区开始-->
			<ul id="navLeftBox" class="shadow">
				<!--订单中心-->
				<li class="oderCenter">
					<p class="opc"><i></i>订 单 中 心</p>
					<a href="" class="apc" style="color: #CC0000;">
						我的订单
					</a>
				</li>
				<!--个人设置-->
				<li class="personalSet">
					<p class="opc"><i></i>个 人 设 置</p>
					<a href="{{U('MyCenter/addressCenter')}}" class="apc">收货地址管理</a>
					<!--<a class="apc zolCenter">ZOL个人中心</a>-->
				</li>
			</ul>
			<!--左侧导航区结束-->
			
			<!--右侧侧导航区开始-->
			<div id="navRightBox" class="shadow">
				<ul id="nrTitle">
					<li class="shopOrder">商城订单</li>
				</ul>
				
				<ul id="nrImgs">
					<li class="daiFuK">
						<a href="javascript:;">
							<i></i>
							<span>
								待付款
								<e>0</e>
							</span>
						</a>
					</li>
					<li class="daiFaH">
						<a href="javascript:;">
							<i></i>
							<span>
								待发货
								<e>0</e>
							</span>
						</a>
					</li>
					<li class="daiSaH">
						<a href="javascript:;">
							<i></i>
							<span>
								待收货
								<e>0</e>
							</span>
						</a>
					</li>
					<li class="daiPingJ">
						<a href="javascript:;">
							<i></i>
							<span>
								待评价
								<e>0</e>
							</span>
						</a>
					</li>
				</ul>
				<!--表头-->
				<ul id="navTable">
					<li class="cell1">商品信息</li>
					<li class="cell2">单价(元)</li>
					<li class="cell3">数量</li>
					<li class="cell4">售后</li>
					<li class="cell5">实付款(元)</li>
					<li class="cell6">订单状态</li>
					<li class="cell7">操作</li>	
				</ul>
				<!--订单信息-->
				{{foreach from="$orderData" value="$v"}}
				<div id="OrderInfo">
					<p id="orderNumber">订单号 : {{$v['danumber']}}</p> 
					<p id="orderTime">下单时间 : <?php echo date('Y-m-d h:i',$v['ddtime'])?></p> 
				</div>
				
				<!--商品信息-->
				<table id="goodsInfo">
					<tr>
						<td class="gdi1">
						{{foreach from="$v['value']" value="$value"}}
							<div class="infoBox">
								<a class="goodsPic" href="{{U('Detail/index',['zol_goods_gid'=>$value['zol_goods_gid']])}}" target="_blank">
									<img src="{{$value['dlimg']}}"/>
								</a>
								<a class="goodsTitle" href="{{U('Detail/index',['zol_goods_gid'=>$value['zol_goods_gid']])}}" target="_blank">
									{{$value['dltitle']}}
								</a>
								<p class="gdi2">{{$value['dlpriced']}}</p>
								<p class="gdi3">{{$value['dlnum']}}</p>
								<p class="gdi4">---</p>
								<a class="goodsKuai" href="{{U('Detail/index',['zol_goods_gid'=>$value['zol_goods_gid']])}}" target="_blank">
									交易快照
								</a>
								<p>
									<!--<span>颜色：银色</span>
									<span>套装：官方标配</span>-->
								</p>
							</div>
						{{endforeach}}
						</td>
						<td class="gdi5">
							<p>{{$v['ddtotal']}}</p>
						</td>
						<td class="gdi6">
							<p>已付款</p>
						</td>
						<td class="gdi7">
							<p>
								<a href="javascript:if(confirm('确定删除吗？')) location.href='{{U('MyCenter/del',['daid'=>$v['daid']])}}';">删除</a>
							</p>
						</td>
					</tr>
				</table>
				{{endforeach}}
			</div>
		<!--右侧导航区结束-->
		</div>
		<!--详情区结束-->
		
		 <!--引入公共底部*****************-->
    	{{include file="../Common/indexFooter"}}
				
	</body>
</html>
