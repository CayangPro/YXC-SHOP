<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>YXC商城</title>
		<!--引入公共头部*****************-->
        {{include file="../Common/myCenterHead"}}
        <!--载入css样式-->
        <link rel="stylesheet" type="text/css" href="Public/Home/css/addressCenter.css"/>
		<script>
			//城市联动插件
			$(function () {
			    //初始化方法
			    area.init('addressId');
			    //修改的时候默认被选中效果
			    area.selected('北京市', '北京', '');
			})
		</script>		
		<!--详情区开始-->
		<div id="wrapper">
			<!--左侧导航区开始-->
			<ul id="navLeftBox" class="shadow">
				<!--订单中心-->
				<li class="oderCenter">
					<p class="opc"><i></i>订 单 中 心</p>
					<a href="{{U('MyCenter/orderCenter')}}" class="apc">
						我的订单
					</a>
				</li>
				<!--个人设置-->
				<li class="personalSet">
					<p class="opc"><i></i>个 人 设 置</p>
					<a class="apc"  style="color: #CC0000;">收货地址管理</a>
					<!--<a class="apc zolCenter">ZOL个人中心</a>-->
				</li>
			</ul>
			<!--左侧导航区结束-->
			
			<!--右侧侧导航区开始-->
			<div id="navRightBox" class="shadow">
				<ul id="nrTitle">
					<li class="shopOrder">新增收货地址</li>
				</ul>
				<!--下方显示收货人地址位置-->
				<table class="tableBlock addrTable" cellspacing="" cellpadding="">
					<tr class="tbTitle">
						<td class="cell1">收货人</td>
						<td class="cell2">所在地区</td>
						<td class="cell3">街道地址</td>
						<td class="cell4">邮编</td>
						<td class="cell5">电话/手机</td>
						<td class="cell6">操作</td>
					</tr>
					{{foreach from="$addressData" value="$v"}}
						<tr class="tbContent">
							<td class="cell1">{{$v['rname']}}</td>
							<td class="cell2">{{$v['raddress']}}</td>
							<td class="cell3">{{$v['radeaddress']}}</td>
							<td class="cell4">{{$v['rmail']}}</td>
							<td class="cell5">{{$v['rcall']}}</td>
							<td class="cell6">
								<!--<a href="">设为默认</a>-->
								<!--<a href="">修改</a>-->
								<a href="javascript:if(confirm('确定删除吗？')) location.href='{{U('MyCenter/deladdress',['daid'=>$v['cuaid']])}}';">删除</a>
							</td>
						</tr>
					{{endforeach}}
				</table>
				
			</div>
		<!--右侧导航区结束-->
		</div>
		<!--详情区结束-->
		
		 <!--引入公共底部*****************-->
    	{{include file="../Common/indexFooter"}}
				
	</body>
</html>
