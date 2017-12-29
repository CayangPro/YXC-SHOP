<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>YXC商城</title>
				
		<!--引入公共头部*****************-->
		{{include file="../Common/indexHead"}}
		<!--商品分类区结束*******************-->
		
		<!--首页开始*******************-->
		<ul id="homeBOX">
			<li>
				<a href="{{U('Index/index')}}" target="_blank">首页</a>
			</li>
			<li style="color: #E6E6E6;">></li>			
			<li>
				<a href="{{U('List/index',['cid'=>$goodsData['pid']])}}">{{$cname}}</a>
			</li>
			<li style="color: #E6E6E6;">></li>
			<li>
				<a href="{{U('List/index',['cid'=>$goodsData['cid']])}}">{{$goodsData['bname']}}</a>
			</li>
		</ul>
		<!--首页结束*************************-->
		
		<!--商品展示开始**********************-->
		<div id="goodsShowBox">
			<div id="leftShowBox">
				<div class="imgBox">
					{{foreach from="$gdimages" value="$v"}}
						<img class="imgShows" src="{{$v}}"/>	
					{{endforeach}}
				</div>
				<ul class="listImgBox">
					{{foreach from="$gdimages" value="$v"}}
						<li class="imgClick">
							<img src="{{$v}}"/>
						</li>
					{{endforeach}}
				</ul>
			</div>
			<div id="rightShowBox">
					<div class="title" goodsId="{{$goodsData['gid']}}" goodsCid="{{$goodsData['cid']}}">
						{{$goodsData['gname']}}
					</div>
					<div class="price">
						<dl class="gmarketPrice">
							<dt>原价 :</dt>
							<dd>
								<span gmarketPrice="{{$goodsData['gmarket_price']}}">
									<del>&yen;&nbsp;<em>{{$goodsData['gmarket_price']}}</em></del>
								</span>
							</dd>
						</dl>
						<dl class="gPrice">
							<dt>促销价 :</dt>
							<dd>
								<span gPrice="{{$goodsData['gprice']}}"  glnumber="{{$stock}}">
									&yen;&nbsp;<em>{{$goodsData['gprice']}}</em>
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
				{{foreach from="$combineAttr" value="$v"}}
				<?php if(isset($v['taname'])) :?>
					<dl class="goodsChoice">
						<dt>{{$v['taname']}} :</dt>
						<dd>
							<ul class="choiceList">
								{{foreach from="$v['value']" value="$value"}}
									<li class="choose" spacName="{{$v['taname']}}" specId="{{$value['gaid']}}">
										<span>{{$value['gavalue']}}</span>
										<i></i>
									</li>
								{{endforeach}}
							</ul>
						</dd>
					</dl>
				<?php endif?>
				{{endforeach}}
				
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
						<a href="{{U('Member/login')}}" class="fl mr10 buy_btn buy_now">立即购买</a>
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
					<p>{{$detailData[0]['gdinfo']}}</p>
				</div>
				<!--参数框-->
				<div class="goodsList inforList_2">
					{{foreach from="$data" value="$v"}}
						<dl class="inforListBox">
							<dt class="inforTitle">{{$v['taname']}}</dt>
							<dd class="inforContent">{{$v['gavalue']}}</dd>
						</dl>
					{{endforeach}}
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
		{{include file="../Common/indexFooter"}}
		
		<!--引入公共右侧栏*****************-->
		{{include file="../Common/indexRight"}}
		
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
			                url:"{{U('Detail/getTotal')}}",
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
	                        url:"{{U('Cart/add')}}",
	                        data:{ gid:gid, cid:cid, gname:gname, num:num, gmarketPrice:gmarketPrice, gprice:gprice,str:str,gtotal:gtotal, glnumber:glnumber},
	                        dataType:"json",
	                        success:function(phpData){
	                            hd_confirm({message:'添加到购物车成功，是否进入购物车？',success:function(){
	                                location.href="{{U('Cart/index')}}"
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
	                        url:"{{U('Cart/add')}}",
	                        data:{ gid:gid, cid:cid, gname:gname, num:num, gmarketPrice:gmarketPrice, gprice:gprice,str:str,gtotal:gtotal, glnumber:glnumber},
	                        dataType:"json",
	                        success:function(phpData){	
	                        	hd_confirm({message:'添加商品成功，是否立即结算？',success:function(){
	                                location.href="{{U('Order/index')}}"
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
