<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>YXC商城</title>
		<!--引入公共头部*****************-->
		
<!--载入公共模板-->
	<link rel="stylesheet" type="text/css" href="Public/Home/css/index.css"/>
	<link rel="stylesheet" type="text/css" href="./Public/Home/css/list.css"/>
	<link rel="stylesheet" type="text/css" href="./Public/Home/css/Detail.css"/>
	<link rel="stylesheet" href="Public/hdjs/hdjs.css">
	<script src="Public/Home/js/jquery-1.8.2.min.js"></script>
	<script src="Public/Home/js/zhulunbo.js"></script>
	<script src="Public/Home/js/listclick.js"></script>
	<script src="Public/hdjs/hdjs.min.js"></script>
</head>

<div id="topBack">
	<div id="topFather">
		<!--顶部登左侧开始-->
		<div id="topLeft">
			<span class="topHome">
				<a href="http://localhost/MyWorks/YXC-Shop/index.php?m=Home&c=Index&a=index" target="_blank">商城首页</a>
			</span>
							<span class="topWelcomeLogin">
					Hi~欢迎来到YXC商城&nbsp;,&nbsp;请&nbsp;<a href="http://localhost/MyWorks/YXC-Shop/index.php?m=Home&c=Member&a=login">登录</a>						 
				</span>
				<span class="topRegister">
					<a href="http://localhost/MyWorks/YXC-Shop/index.php?m=Home&c=Member&a=reg">免费注册</a>
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
					<a href="http://localhost/MyWorks/YXC-Shop/index.php?m=Home&c=Member&a=login">购物车<span id="focusShopsNum">(0)</span>件</a>
				</li>
							
							<li>
					<a href="http://localhost/MyWorks/YXC-Shop/index.php?m=Home&c=Member&a=Login">我的订单</a>
				</li>
					</ul>
		<!--顶部登右侧结束-->
	</div>
</div>
<!--顶部区结束*******************-->

<!--顶部搜索区开始*******************-->
<div id="topHead">
	<div id="searchFatherBox">
			<div class="searchLogo">
				<a href=""><img src="Public/Home/images/logo_180x50.png"/></a>
			</div>
		<div class="searchName">YXC在线旗下网上商城</div>
		<!--搜索框-->
		<form action="">
		<div id="searchBox">
			<input type="hidden" name="c" value="List" />
			<input type="hidden" name="cid" value="0" />
			<input class="searchContent" type="text" placeholder="请输入要搜索的内容" name="keywords"/></input>	
			<input class="searchBtn" type="submit" value="搜 索"/></input>	
		</div>
		
		<div class="searchBoxImg">
			<a href=""><img src="Public/Home/images/ChMkJlYcpziIdMcxAAB2sdYBFdcAADnzQKpVyIAAHbJ372.jpg"/></a>
		</div>
		</form>
	</div>
	<ul class="searcHot">
		<!--<a href="">苹果iPhone SE</a>
		<a href="">魅蓝metal</a>
		<a href="">热销笔记本</a>
		<a href="">298买1T硬盘</a>
		<a href="">九阳豆浆机直降100!</a>
		<a href="">罗技G502RGB</a>-->
	</ul>
</div>
<!--顶部搜索区结束*******************-->

<!--商品分类区开始*******************-->
<div id="bannerFatherBox">
	<div class="bannerLeft">商品分类</div>
	<ul class="bannerRight">
		<li class="bannerFirst">
			<a href="http://localhost/MyWorks/YXC-Shop/index.php?m=Home&c=Index&a=index" target="_blank"  >首页</a>
		</li>
					<li>
				<a href="http://localhost/MyWorks/YXC-Shop/index.php?m=Home&c=List&a=index&cid=1" target="_blank"                 style="color: #FF335A" 
               >手机通讯</a>
			</li>
					<li>
				<a href="http://localhost/MyWorks/YXC-Shop/index.php?m=Home&c=List&a=index&cid=2" target="_blank" >电脑笔记本</a>
			</li>
					<li>
				<a href="http://localhost/MyWorks/YXC-Shop/index.php?m=Home&c=List&a=index&cid=3" target="_blank" >摄影摄像</a>
			</li>
					<li>
				<a href="http://localhost/MyWorks/YXC-Shop/index.php?m=Home&c=List&a=index&cid=4" target="_blank" >游戏电玩</a>
			</li>
					<li>
				<a href="http://localhost/MyWorks/YXC-Shop/index.php?m=Home&c=List&a=index&cid=5" target="_blank" >硬件设备</a>
			</li>
					<li>
				<a href="http://localhost/MyWorks/YXC-Shop/index.php?m=Home&c=List&a=index&cid=6" target="_blank" >智能生活</a>
			</li>
					<li>
				<a href="http://localhost/MyWorks/YXC-Shop/index.php?m=Home&c=List&a=index&cid=7" target="_blank" >家用办公</a>
			</li>
					<li>
				<a href="http://localhost/MyWorks/YXC-Shop/index.php?m=Home&c=List&a=index&cid=8" target="_blank" >生活电器</a>
			</li>
				<div class="bannerHot">新品手机大聚汇 现货抢购送大奖</div>
	</ul>	
</div>
		<!--菜单栏、轮播图分类区开始*******************-->
		<!--菜单栏、轮播图分类区结束*******************-->
		
		<!--首页区开始*******************-->
		<ul id="ListhomeBOX">
			<div class="homeTotal">
				共<span> <?php echo $gnumber?> </span>件
			</div>
			<!--首页-->
			<li style="color: #E6E6E6;">
				<a href="<?php echo U('Index/index')?>" target="_blank">首页</a>
			</li>
			<!--手机/手机配件--> 
			<?php foreach ($cname as $v){?>
				<li style="color: #E6E6E6;">></li>
				<li>
					<a href="<?php echo U('index',['cid'=>$v['cid']])?>" <?php if($_GET['cid']==$v['cid']){?>
                style="color:#FF335A;"
               <?php }?> ><?php echo $v['cname']?></a>
				</li>
			<?php }?>
		</ul>
		<!--首页区结束*******************-->
		
		<!--品牌框区开始*******************-->
		<div id="screenBox">	
			
			<div class="screenBoxList">
				<dl>
					<dt>分类:</dt>
					<dd>
						<div class="listsInner">
							<ul>
								<li>
									<a href="javascript:void(0);" style="color: #FF335A;">不限</a>
								</li>
								<?php foreach ($cate as $v){?>
									<li>
										<a href="<?php echo U('index',['cid'=>$v['cid']])?>" <?php if($_GET['cid']==$v['cid']){?>
                style="color:#FF335A;"
               <?php }?> ><?php echo $v['cname']?></a>
									</li>
								<?php }?>
							</ul>
						</div>
					</dd>
				</dl>
			</div>
			
			<div class="screenBoxList">
				<dl>
					<dt>品牌:</dt>
					<dd>
						<div class="listsInner">
							<ul>
								<li>
									<a href="" style="color: #FF335A;">不限</a>
								</li>
								<?php foreach ($brands as $v){?>
									<li>
										<a href="<?php echo U('List/index',array('cid'=>$_GET['cid'], 'bid'=>$v['bid']))?>" <?php if($v['bid']==$_GET['bid']){?>
                 style="color: #FF335A;" 
               <?php }?>><?php echo $v['bname']?></a>
									</li>
								<?php }?>
							</ul>
						</div>
					</dd>
				</dl>
			</div>
						
			<!--其他-->
			<?php foreach ($combineAttr as $k=>$v){?>
				<?php
					$temp = $param;
					$temp[$k]=0;
				?>
				<div class="screenBoxList">
					<dl>
						<dt><?php echo $v['name']?>:</dt>
						<dd>
							<div class="listsInner">
								<ul class="clearCate">
									<li>
										<a href="<?php echo U('index',['cid'=>$_GET['cid'],'param'=>implode('_',$temp)])?>" <?php if($param[$k]==0){?>
                style="color: #FF335A;"
               <?php }?> >不限</a>
									</li>
									<?php foreach ($v['value'] as $value){?>
									<?php 
										$temp[$k]=$value['gaid'];
									?>
										<li>
											<a href="<?php echo U('index',['cid'=>$_GET['cid'],'param'=>implode('_',$temp),'bid'=>$_GET['bid']])?>" <?php if($value['gaid']==$param[$k]){?>
                style="color: #FF335A;"
               <?php }?>><?php echo $value['gavalue']?></a>
										</li>
									<?php }?>
								</ul>							
							</div>						
						</dd>
					</dl>
				</div>
			<?php }?>
		</div>
		<div id="shadow"></div> <!--阴影-->		
		<div class="moreChoice">
			更多选项
			<i></i>
		</div>
		<!--品牌框区结束*******************-->
		
		<!--商品排序导航开始*******************-->
		<div id="goodsNav">
			<!--默认-->
			<ul id="navLeftBOX">
				<!--默认-->
				<li><a href="javascript:;">默认</a></li>
				<!--<li><a href="">高人气</a></li>
				<li><a href="">高销量</a></li>
				<li><a href="">价格由低到高</a></li>
				<li><a href="">价格由高到低</a></li>
				<li><a href="">发货地></a></li>-->
				<!--价格排序*********************-->
				<!--<li class="navPrice">
					<div class="navPriceOrder">
						<form id="PriceForm" action="" method="post">
							<input type="text" placeholder="￥" maxlength="10" />
							<i>-</i>
							<input type="text" placeholder="￥" maxlength="10" /><br />
							<span class="operation" --><!--style="display: none;-->
					<!--			<a id="priceClear" href="javascript:void(0)">清除</a>
								<a id="priceConfirm" class="confirm" href="javascript:void(0)">确定</a>
							</span>
						</form>
					</div>
				</li>-->
			</ul>
		</div>
		<!--商品排序导航结束*******************-->
		
		<!--具体图片商品展示开始*******************-->
		<ul id="goodsShow">
			<?php foreach ($goodsFind as $v){?>
				<li>
					<a href="<?php echo U('Detail/index',['zol_goods_gid'=>$v['gid'],'cid'=>$_GET['cid']])?>" title="<?php echo $v['gname']?>&nbsp;&nbsp;点击查看详情">
						<img src="<?php echo $v['glist_map']?>"/>
					</a>
					<div class="title">
						<a href="<?php echo U('Detail/index',['zol_goods_gid'=>$v['gid']])?>">
							<?php echo $v['gname']?>
						</a>
					</div>
					<div class="price">
						<span id="">&yen;<?php echo $v['gprice']?></span>
					</div>
					<div class="volume">						
						<span><em></em></span>
						<span>查看次数 :<em> <?php echo $v['gclick']?> 次</em></span>
					</div>
					<div class="shopInfor">
						<a href=""></a>
					</div>
				</li>
			<?php }?>
			<?php if($goodsFind==null){?>
                
				<div style="height: 200px; width: 1200px;margin: 20px auto;text-align: center;line-height: 200px; background: #F5F5F5; color: #FF335A; border: 1px solid #E6E6E6;">
					抱歉没有找到您想要的产品,你可以去<a href="<?php echo U('Index/index')?>" target="_blank" style="color: #3366CC; font-size: 20px;">商城</a>选购喜欢的商品	
				</div>
			
               <?php }?>	
	    </ul>
		
		<!--具体商品图片展示结束*******************-->
		
		<!--翻页区开始**********************-->
		<!--<ul id="page">
			<li>< 上一页</li>
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li></li>
			<li>下一页 ></li>
		</ul>-->
		<!--翻页区结束**********************-->
		
		<!--正在进行中的活动区开始**********************-->
		<!--<div id="HOT">正在进行中的活动</div>
		<ul id="hotImg">
			<a href=""><img src="./Public/Home/images/ChMkJlejRmaIEaHjAAAwF1ZZQL8AAUKawEB4PwAADAv657.jpg" alt="" /></a>
			<a href=""><img src="./Public/Home/images/ChMkJ1eimBSIDIu2AAElP9YQj6UAAUJAgO9OasAASVX407.jpg" alt="" /></a>
			<a href=""><img src="./Public/Home/images/ChMkJ1ej76SISqAyAADUy_qZVcsAAULHgD0yl0AANTj742.jpg" alt="" /></a>
			<a href=""><img src="./Public/Home/images/ChMkJ1eWqdCIfWpMAACtol7Dzi4AAT1ZgPwdXoAAK26940.jpg" alt="" /></a>
		</ul>-->
		<!--正在进行中的活动区结束**********************-->
		
		<!--底部搜索区开始*******************-->
		
		<!--<div id="searchBottomBox">
			<input class="searchContent" type="text" placeholder="请输入要搜索的内容"/></input>	
			<input class="searchBtn" type="submit" value="搜 索"/></input>	
		</div>-->
			
		<!--底部搜索区结束*******************-->
		
		<!--引入公共底部*****************-->
		<div id="endFatherBox">
	<div id="endBox">				
		<div class="endFoot endFootFirst">
			<a href="http://www.egou.com/" target="_blank">友情链接</a>
			<a href="https://gitee.com/yangxingcai" target="_blank">码云-开源中国</a>
			|
			<a href="http://www.swiper.com.cn" target="_blank">Swiper中文网</a>
			|
			<a href="http://fontawesome.dashgame.com/" target="_blank">Font Awesome</a>
			|
			<span>YXC  cayang@foxmail.com  yxc.wsang.cc版权所有</span>
		</div>
	</div>
</div>
		
		<!--引入公共右侧栏*****************-->
		<div id="rightFatherBox">
	<div id="rightBoxA">
		<!--我的订单-->
		<div class="myOrder rightTips">
			<div class="tipsHover">
									<a href="http://localhost/MyWorks/YXC-Shop/index.php?m=Home&c=Member&a=login">我的订单</a>
							</div>
		</div>
		<!--我的足迹-->
		<div class="myFootprint rightTips"  style="display: none;">
			<div class="tipsHover">
									<a href="http://localhost/MyWorks/YXC-Shop/index.php?m=Home&c=Member&a=login">我的足迹</a>
							</div>
		</div>
		
		<!--购物车-->
					<div class="ShoppingCart rightTips">
				<span id="cartTotal">0</span>
				<div class="tipsHover">
					<a href="http://localhost/MyWorks/YXC-Shop/index.php?m=Home&c=Member&a=login">购物车</a>
				</div>
			</div>
			
					
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
		
	</body>
</html>
