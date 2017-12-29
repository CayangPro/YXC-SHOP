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
				<a href="http://localhost/MyWorks/YXC-Shop/index.php?m=Home&c=List&a=index&cid=1" target="_blank" >手机通讯</a>
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
		<!--商品分类区结束*******************-->
		
		<!--首页开始*******************-->
		<ul id="homeBOX">
			<li>
				<a href="<?php echo U('Index/index')?>" target="_blank">首页</a>
			</li>
			<li style="color: #E6E6E6;">></li>			
			<li>
				<a href="<?php echo U('List/index',['cid'=>$goodsData['pid']])?>"><?php echo $cname?></a>
			</li>
			<li style="color: #E6E6E6;">></li>
			<li>
				<a href="<?php echo U('List/index',['cid'=>$goodsData['cid']])?>"><?php echo $goodsData['bname']?></a>
			</li>
		</ul>
		<!--首页结束*************************-->
		
		<!--商品展示开始**********************-->
		<div id="goodsShowBox">
			<div id="leftShowBox">
				<div class="imgBox">
					<?php foreach ($gdimages as $v){?>
						<img class="imgShows" src="<?php echo $v?>"/>	
					<?php }?>
				</div>
				<ul class="listImgBox">
					<?php foreach ($gdimages as $v){?>
						<li class="imgClick">
							<img src="<?php echo $v?>"/>
						</li>
					<?php }?>
				</ul>
			</div>
			<div id="rightShowBox">
					<div class="title" goodsId="<?php echo $goodsData['gid']?>" goodsCid="<?php echo $goodsData['cid']?>">
						<?php echo $goodsData['gname']?>
					</div>
					<div class="price">
						<dl class="gmarketPrice">
							<dt>原价 :</dt>
							<dd>
								<span gmarketPrice="<?php echo $goodsData['gmarket_price']?>">
									<del>&yen;&nbsp;<em><?php echo $goodsData['gmarket_price']?></em></del>
								</span>
							</dd>
						</dl>
						<dl class="gPrice">
							<dt>促销价 :</dt>
							<dd>
								<span gPrice="<?php echo $goodsData['gprice']?>"  glnumber="<?php echo $stock?>">
									&yen;&nbsp;<em><?php echo $goodsData['gprice']?></em>
								</span>
							</dd>
						</dl>
					</div>
				<dl class="goodsService">
					<dt>服务保障 :</dt>
					<dd>由商家发货并承诺提供以下服务保障</dd>
					<dd>
						<div class="serviceTu">行货保证</div>
						<div class="serviceTu">发票保障</div>
						<div class="serviceTu">顺丰包邮</div>
						<div class="serviceTu">无忧退换</div>		
					</dd>
				</dl>
				<!--规格选择-->
				<?php foreach ($combineAttr as $v){?>
				<?php if(isset($v['taname'])) :?>
					<dl class="goodsChoice">
						<dt><?php echo $v['taname']?> :</dt>
						<dd>
							<ul class="choiceList">
								<?php foreach ($v['value'] as $value){?>
									<li class="choose" spacName="<?php echo $v['taname']?>" specId="<?php echo $value['gaid']?>">
										<span><?php echo $value['gavalue']?></span>
										<i></i>
									</li>
								<?php }?>
							</ul>
						</dd>
					</dl>
				<?php endif?>
				<?php }?>
				
				<!--购买数量-->
				<dl class="goodsSL">
					<dt>购买数量 :</dt>
					<dd>
						<div>
							<span class="numRaduce"></span>
							<input class="numInput" value="1"  title="请输入购买量" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"/>
							<span class="numAdd"></span>							
						</div>
						<span class="shopNumber">件 限购(12)件</span>
						<span class="goodsGtotal" >库存<span>0</span>件</span>
						
					</dd>
				</dl>
				<!--购买-->
				<div class="goodsShop">
					<?php if(!isset($_SESSION['info']['cunumber'])) {?>
						<a href="<?php echo U('Member/login')?>" class="fl mr10 buy_btn buy_now">立即购买</a>
					<?php } elseif($stock = 0) { ?>
						<a href="javascript:;" class="fl mr10 buy_btn buy_now">立即购买</a>
					<?php } else { ?>
						<a href="javascript:;" class="fl mr10 buy_btn buy_now">立即购买</a>
					<?php } ?>
					<a class="fl mr10 buy_cart buy_btn" href="javascript:;">加入购物车</a>				
				</div>
			</div>
		</div>
		
		<!--商品详情开始**********************-->
		<div id="goodsInforBox">
			<!--左侧*********************-->
			<div id="leftGoodsInfor"></div>
			<!--右侧*********************-->
			<!--商品详情导航框开始***********-->
			<ul id="rightGoodsInfor">
				<li class="InforNavSon InforNavSon_1  choosed"><a href="javascript:;">商品详情</a></li>
				<li class="InforNavSon InforNavSon_2"><a href="javascript:;">参数</a></li>
				<li class="InforNavSon InforNavSon_3"><a href="javascript:;">商城服务承诺</a></li>
			</ul>
			<div id="InforListBox">
				<!--商品详情框-->
				<div class="goodsList inforList_1">
					<img src="Public/Home/images/sevice-title-new.png" />
					<p><?php echo $detailData[0]['gdinfo']?></p>
				</div>
				<!--参数框-->
				<div class="goodsList inforList_2">
					<?php foreach ($data as $v){?>
						<dl class="inforListBox">
							<dt class="inforTitle"><?php echo $v['taname']?></dt>
							<dd class="inforContent"><?php echo $v['gavalue']?></dd>
						</dl>
					<?php }?>
				</div>
				<!--商城服务承诺框-->
				<div class="goodsList inforList_3">
					<img src="Public/Home/images/fuwua.png"/>
					<img src="Public/Home/images/fuwub.png"/>
					<img src="Public/Home/images/fuwuc.png"/>
					<img src="Public/Home/images/fuwud.png"/>			
				</div>
			</div>
				<!--商品详情导航框结束**********-->	
		</div>
		
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
		
		<script type="text/javascript">
			$(function(){
				
				//点击切换商品图片
				$(".imgClick").mouseover(function (){
			        var num=$(this).index();
					$(this).css('border-color','#C61E1E');					
			        $(".imgShows").eq(num).stop().fadeIn().siblings().fadeOut();
			    });
				$(".imgClick").mouseout(function(){
					$(this).css('border-color','white');
				});
				
			    //Tab切换
			    $(".InforNavSon").click(function(){
			    	// $(this)当前元素
			    	// index()目标元素在兄弟元素中的排序
			    	$(this).addClass('choosed').siblings().removeClass('choosed');
			    	var num = $(this).index();
			    	// 显示和消失
			    	$(".goodsList").eq(num).show().siblings().hide();
			    });
				    
				// 选择规格
				$(".goodsChoice .choiceList li").click(function () {
			        $(this).addClass('red').siblings().removeClass('red');
			        //li的个数，也就是多少种属性
			        var liLen=$('.goodsChoice .choiceList').length;
			        //选中元素的个数
			        var redLen=$('.red').length;
			        if(redLen==liLen){
			            var str='';
			            //得到所有选中的商品属性id，然后发异步到货品列表查询，最后获得结果
			            $.each($('.red'),function () {
			                str+=$(this).attr('specId')+',';
			            })
			            console.log(str);
			            $.ajax({
			                type:"post",
			                url:"<?php echo U('Detail/getTotal')?>",
			                data:{combineId:str},
			                dataType:'json',
			                success:function (phpData) {
			                    var total='';
			                    total='库存<span>'+phpData+'</span>件';
			                    $('.goodsGtotal').html(total);
			                }
			            })
			        }
			    });
				    
				//购买数量加减
			    //增加
			    $(".numAdd").click(function() {
			        var num = parseInt($(".numInput").val()) || 0;
			        if(num<12){
			        	$(".numInput").val(num + 1);
			        }else{
			        	alert('数量达到购买上限');
			        }
			        
			    });
			
			    //减去
			    $(".numRaduce").click(function() {
			        var num = parseInt($(".numInput").val()) || 0;
			        num = num - 1;
			        num = num < 1 ? 1 : num;
			        $(".numInput").val(num);
			    });
				
//				加入购物车
				$('.buy_btn').click(function (){
	                var gid=$('.title').attr('goodsId');
	                var cid=$('.title').attr('goodsCid');
	                var gname=$('.title').html();
	                var num=$('.numInput').val();
	                var gmarketPrice=$('.gmarketPrice span').attr('gmarketPrice');
	                var gprice=$('.gPrice span').attr('gPrice');
	                var gtotal=$('.goodsGtotal span').html();
	                var glnumber=$('.gPrice span').attr('glnumber');
	                if (gtotal!=0){
	                    var str='';
	                    //得到所有选中的商品属性id
	                    $.each($('.red'),function () {
	                        str+=$(this).attr('specId')+',';
	                    })
	                    $.ajax({
	                        type:"post",
	                        url:"<?php echo U('Cart/add')?>",
	                        data:{ gid:gid, cid:cid, gname:gname, num:num, gmarketPrice:gmarketPrice, gprice:gprice,str:str,gtotal:gtotal, glnumber:glnumber},
	                        dataType:"json",
	                        success:function(phpData){
	                            hd_confirm({message:'添加到购物车成功，是否进入购物车？',success:function(){
	                                location.href="<?php echo U('Cart/index')?>"
	                            }});
	                        }
	                    })
	                }else{
	                    hd_confirm({message:'该商品没有库存，请重新选择',success:function(){
	                    	location.href="javascript:;"
	                    }});
	                }	
	            })
	            
	            //立即购买
				$('.buy_now').click(function (){
	                var gid=$('.title').attr('goodsId');
	                var cid=$('.title').attr('goodsCid');
	                var gname=$('.title').html();
	                var num=$('.numInput').val();
	                var gmarketPrice=$('.gmarketPrice span').attr('gmarketPrice');
	                var gprice=$('.gPrice span').attr('gPrice');
	                var gtotal=$('.goodsGtotal span').html();
	                var glnumber=$('.gPrice span').attr('glnumber');
	                if (gtotal!=0){
	                    var str='';
	                    //得到所有选中的商品属性id
	                    $.each($('.red'),function () {
	                        str+=$(this).attr('specId')+',';
	                    })
	                    $.ajax({
	                        type:"post",
	                        url:"<?php echo U('Cart/add')?>",
	                        data:{ gid:gid, cid:cid, gname:gname, num:num, gmarketPrice:gmarketPrice, gprice:gprice,str:str,gtotal:gtotal, glnumber:glnumber},
	                        dataType:"json",
	                        success:function(phpData){	
	                        	hd_confirm({message:'添加商品成功，是否立即结算？',success:function(){
	                                location.href="<?php echo U('Order/index')?>"
	                            }});                          
	                        }
	                    })
	                }else {
	                    hd_confirm({message:'该商品没有库存，请重新选择',success:function(){
	                    	location.href="javascript:;"
	                    }});
	                }	
	            })
	            
			})
		</script>
	</body>
</html>
