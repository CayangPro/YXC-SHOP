<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>YXC商城</title>
		<!--引入公共头部*****************-->
		{{include file="../Common/indexHead"}}
		<!--菜单栏、轮播图分类区开始*******************-->
		<div id="menuFatherBox">
			<!--左侧菜单-->
			<div class="menuLeftBox">
				<!--分类菜单-->
				<ul class="menuLeftList">
					<!--顶级分类-->
					{{foreach from="$cateData" value="$v"}}
						<li>		
							<div class="LeftListBox">
								<!--网络字体-->
								<i class="iconfont"></i>
								<a href="{{U('List/index',['cid'=>$v['cid']])}}" target="_blank">{{$v['cname']}}</a>
							</div>
							<!--二级菜单栏-->
							<div class="menuListSon">
								<!--一级分类-->
								{{foreach from="$v['son']" value="$value"}}
									<dl>
										<dt>
											<a href="{{U('List/index',['cid'=>$v['cid']])}}" target="_blank" {{if value="$_GET['cid'] eq $v['cid']"}}style="color:#FF335A;"{{endif}}>{{$value['cname']}}</a>
										</dt>
										<dd>
											<!--二级分类-->							
											<p>
											{{foreach from="$value['sons']" value="$vv"}}	
												<a href="{{U('List/index',['cid'=>$vv['cid']])}}" target="_blank" {{if value="$_GET['cid'] eq $vv['cid']"}}style="color:#FF335A;"{{endif}}>{{$vv['cname']}}</a>|
											{{endforeach}}
											</p>
										</dd>
									</dl>
								{{endforeach}}
							</div>
						</li>
					{{endforeach}}
				</ul>
				<!--每天限时抢新-->
				<div class="menuLeftAdd"></div>
			</div>
			<!--轮播图区-->
			<div id="menuCenterBox">
				<a href="{{U('Detail/index',['zol_goods_gid'=>39])}}" target="_blank" class="active"><img src="Public/Home/images/ChMkJleha9CIWtHfAAElUOlKzB8AAUHRwGb9HYAASVo013.jpg"/></a>				
				<a href="{{U('Detail/index',['zol_goods_gid'=>36])}}" target="_blank"><img src="Public/Home/images/ChMkJ1e6Th-ID1pzAAQEtOxaBHgAAUn2AE55N8ABATM528.jpg" /></a>
				<a href="{{U('Detail/index',['zol_goods_gid'=>7])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJlfRBsiINmKbAAC0nEsfupkAAVHUgIWDeYAALS0791.jpg" /></a>
				<a href="{{U('Detail/index',['zol_goods_gid'=>17])}}" target="_blank"><img src="Public/Home/images/ChMkJle6bz6IZO7xAAEyKBAXT18AAUoGgGvhd8AATJA735.jpg" /></a>
				<a href="{{U('Detail/index',['zol_goods_gid'=>28])}}" target="_blank"><img src="Public/Home/images/ChMkJ1er1QOIRCgyAACc7MtBDbkAAUVtgNGli8AAJ0E380.jpg" /></a>
				<a href="{{U('Detail/index',['zol_goods_gid'=>45])}}" target="_blank"><img src="Public/Home/images/ChMkJ1eybaSIOGkkAAI_YTAyUwYAAUeLwEz7WMAAj95367.jpg" /></a>
				<ul>
					<li>1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
					<li>5</li>
					<li>6</li>
				</ul>
				<div id="CenterBoxClick">
					<div class="CenterBoxClick_left">&lt;</div>
					<div class="CenterBoxClick_right">&gt;</div>
				</div>
			</div>
			<!--右侧区-->
			<div class="menurRightBox">
				<!--右侧商城服务保障区-->
				<div class="menurRightBox1"></div>
				<!--商城公告-->
				<div class="menurRightBox2">
					<div class="storeNotice">
						<a href="">商城推荐</a>
						<ul>
							<li><a href="{{U('Detail/index',['zol_goods_gid'=>7])}}" target="_blank">[爆品]iphone7 火爆来袭!</a></li>
							<li><a href="{{U('Detail/index',['zol_goods_gid'=>17])}}" target="_blank">[福利]魅族 MX6,优惠中！</a></li>
							<li><a href="{{U('Detail/index',['zol_goods_gid'=>15])}}" target="_blank">[福利][爆品]iphone6s 直降700!</a></li>
							<li><a href="{{U('Detail/index',['zol_goods_gid'=>29])}}" target="_blank">[爆品]三星940X3L 触控超薄来袭！</a></li>
							<li><a href="{{U('Detail/index',['zol_goods_gid'=>21])}}" target="_blank">[促销]vivo X7新品到货 速来抢购</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--菜单栏、轮播图分类区结束*******************-->
		
		<!--精品团购区开始*******************-->
		<div id="jptgTitle">精品团购</div>
		<ul id="jptgImg">
			<li>
				<a href="{{U('Detail/index',['zol_goods_gid'=>1])}}" target="_blank">
					<img src="Public/Home/goodsImgs/ChMkJlfM7j2IecUEAAB7-tlPzDUAAVCKANgRK0AAHwS980.jpg"/>
				</a>
			</li>
			<li>
				<a href="{{U('Detail/index',['zol_goods_gid'=>2])}}" target="_blank">
					<img src="Public/Home/goodsImgs/ChMkJlfJTjmIRjwLAAB_MG79cdcAAU9MAGfWbIAAH9I124.jpg"/>
				</a>
			</li>
			<li>
				<a href="{{U('Detail/index',['zol_goods_gid'=>3])}}" target="_blank">
					<img src="Public/Home/goodsImgs/ChMkJ1fHjNWIKlEzAACxHskQGigAAU48wATzPIAALE2046.jpg"/>
				</a>
			</li>
			<li>
				<a href="{{U('Detail/index',['zol_goods_gid'=>4])}}" target="_blank">
					<img src="Public/Home/goodsImgs/ChMkJ1fHj6qIRPb2AACCIFzABF8AAU4-QE9CUIAAII4542.jpg"/>
				</a>
			</li>
		</ul>
		<!--精品团购区结束*******************-->
		
		<!--特色购区开始*******************-->
		<div id="tsgTitle">特色购</div>
		<ul id="tsgImgBox">
			<li class="tsgImgA">
				<a href="{{U('Detail/index',['zol_goods_gid'=>5])}}" target="_blank">
					<img src="Public/Home/goodsImgs/ChMkJ1fM7zqIOKaCAADHk4IkOIwAAVCKwEk_FUAAMer098.jpg"/>
				</a>
			</li>
			<li class="tsgImgB">
				<a href="{{U('Detail/index',['zol_goods_gid'=>7])}}" target="_blank">
					<img src="Public/Home/goodsImgs/ChMkJlfRCQKIGf41AAA0EGaA0ZoAAVHVQCcjw4AADQo289.jpg"/>					
				</a>
			</li>
			<li class="tsgImgC"><a href="{{U('Detail/index',['zol_goods_gid'=>8])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJlfQyteIKwfzAABsxWLGAtEAAVG8wLK_VgAAGzd412.jpg"/></a></li>
			<li class="tsgImgD"><a href="{{U('Detail/index',['zol_goods_gid'=>9])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJ1e_9FyIDLpTAACdeQtZBeEAAUvcgJii6QAAJ2R111.jpg"/></a></li>
			<li class="tsgImgE"><a href="{{U('Detail/index',['zol_goods_gid'=>10])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJlfPjZSIKp12AAg0M_-i2F0AAVFgQLwC50ACDRL917.png"/></a></li>
			<li class="tsgImgF"><a href="{{U('Detail/index',['zol_goods_gid'=>11])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJ1fD_wiID_KuAACBRAdUIR8AAU0TAMo1rwAAIFc020.jpg"/></a></li>
			<li class="tsgImgG"><a href="{{U('Detail/index',['zol_goods_gid'=>12])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJlfHkXeISYz_AABFSrsI0WMAAU4_QPaezcAAEVi224.jpg"/></a></li>
			<li class="tsgImgH"><a href="{{U('Detail/index',['zol_goods_gid'=>13])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJlfJfEuIYM20AAA7X_IeSvIAAU-ZwEXRqAAADt3745.jpg"/></a></li>
			<li class="tsgImgI"><a href="{{U('Detail/index',['zol_goods_gid'=>14])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJ1fQzcGIDFOkAAA1U_18hGgAAVG-AGuTZMAADVr392.jpg"/></a></li>
		</ul>
		<!--特色购区结束*******************-->
		
		<!--1F手机通讯区开始*******************-->
		<div id="sjtxTitle">1F手机通讯</div>
		<div id="sjtxBox">
			<div class="sjtxImgA">
				<a href="{{U('Detail/index',['zol_goods_gid'=>15])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJ1fJKJyIUH4wAAFWr1-JnUAAAU7QABun-MAAVbH808.jpg"/></a>
			</div>
			<!--轮播图-->
			<div class="sjtxImgB">
				<ul>
					<li>
						<a href="{{U('Detail/index',['zol_goods_gid'=>16])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJ1eF4AqIK1_sAAGJ_idgfyEAATeLQDJ6JMAAYoW585.jpg"/></a>
					</li>
				</ul>
			</div>
			<div class="sjtxImgC">
				<div class="sjtxImgC1"><a href="{{U('Detail/index',['zol_goods_gid'=>17])}}" target="_blank">魅族 MX6（全网通）</a></div>
				<div class="sjtxImgC2">PDAF相位对焦，快速充</div>
				<div class="sjtxImgC3">
					<a href="{{U('Detail/index',['zol_goods_gid'=>17])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJ1eoGoyIIllOAABdnPLZchcAAUQggNQ9-cAAF20793.jpg"/></a>
				</div>
			</div>
			<div class="sjtxImgC">
				<div class="sjtxImgC1"><a href="{{U('Detail/index',['zol_goods_gid'=>18])}}"  target="_blank">三星新品C5</a></div>
				<div class="sjtxImgC2">骁龙八核 更有惊艳粉色</div>
				<div class="sjtxImgC3">
					<a href="{{U('Detail/index',['zol_goods_gid'=>18])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJlehzRSIKDMnAADtqLGD-woAAUH-wP-pwoAAO3A852.png"/></a>
				</div>
			</div>
			<div class="sjtxImgC ImgC3">
				<div class="sjtxImgC1"><a href="{{U('Detail/index',['zol_goods_gid'=>19])}}" target="_blank">魅蓝Note3（全网通）</a></div>
				<div class="sjtxImgC2">金属机身 指纹解锁</div>
				<div class="sjtxImgC3">
					<a href="{{U('Detail/index',['zol_goods_gid'=>19])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJleF6lOIUkSlAACTBFqB3MMAATePQA6GPUAAJMc485.jpg"/></a>
				</div>
			</div>
			<div class="sjtxImgC">
				<div class="sjtxImgC1"><a href="{{U('Detail/index',['zol_goods_gid'=>20])}}" target="_blank">荣耀 8 全网通</a></div>
				<div class="sjtxImgC2">好手感 令人无法拒绝</div>
				<div class="sjtxImgC3">
					<a href="{{U('Detail/index',['zol_goods_gid'=>20])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJleQQNeIauu_AAA1YUX_odEAATr7gE7qOAAADV5647.jpg"/></a>
				</div>
			</div>
			<div class="sjtxImgC">
				<div class="sjtxImgC1"><a href="{{U('Detail/index',['zol_goods_gid'=>15])}}" target="_blank">苹果 iPhone 6S Plus</a></div>
				<div class="sjtxImgC2">唯一的不同，处处都不同</div>
				<div class="sjtxImgC3">
					<a href="{{U('Detail/index',['zol_goods_gid'=>15])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJleF7EeIF_9_AACS2-5_g1AAATePwJkMpQAAJLz493.jpg"/></a>
				</div>
			</div>
			<div class="sjtxImgC">
				<div class="sjtxImgC1"><a href="{{U('Detail/index',['zol_goods_gid'=>21])}}" target="_blank">vivo X7 Plus</a></div>
				<div class="sjtxImgC2">赠豪华大礼包</div>
				<div class="sjtxImgC3">
					<a href="{{U('Detail/index',['zol_goods_gid'=>21])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJ1efF6KIaUraAAAz5KHSOVEAAUDpAGrmXQAADP8443.jpg"/></a>
				</div>
			</div>
		</div>
		<ul id="pinPai">
			<li><a href="{{U('List/index',['cid'=>37,'bid'=>1])}}" target="_blank"><img src="Public/Home/goodsImgs/Cg-4WVV2sVaIKmm3AAA1Ltrzx_8AAE6DwPV05UAADVG749.jpg"/></a></li>
			<li><a href="{{U('List/index',['cid'=>36,'bid'=>2])}}" target="_blank"><img src="Public/Home/goodsImgs/Cg-4WVV2rcaIUXYjAABB1hgbjlEAAE6AAJtPIkAAEHu751.jpg"/></a></li>
			<li><a href="{{U('List/index',['cid'=>43,'bid'=>3])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJlcZ60OIWS2tAAASvD7rQygAAQaBwJ3JAgAABLU467.jpg"/></a></li>			
			<li><a href="{{U('List/index',['cid'=>40,'bid'=>4])}}" target="_blank"><img src="Public/Home/goodsImgs/Cg-4WlV3pSeIc0HGAABIByqUlzkAAE9yQB4uHEAAEgf223.jpg"/></a></li>			
			<li><a href="{{U('List/index',['cid'=>44,'bid'=>5])}}" target="_blank"><img src="Public/Home/goodsImgs/Cg-4WVV3pXeIDWEZAABH7lBGGJ0AAE9ygIc-tgAAEgG964.jpg"/></a></li>
			<li><a href="{{U('List/index',['cid'=>264,'bid'=>6])}}" target="_blank"><img src="Public/Home/goodsImgs/Cg-4WVV2uCSIHgvRAABGckzwWOIAAE6LgMYL3kAAEaK168.jpg"/></a></li>
			<li><a href="{{U('List/index',['cid'=>39,'bid'=>7])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJlYu4C-INDScAAAVM43PIkoAAEJngJFmUQAABVL801.jpg"/></a></li>
			<li><a href="{{U('List/index',['cid'=>45,'bid'=>8])}}" target="_blank"><img src="Public/Home/goodsImgs/Cg-4WlV2tT6IZu9-AAA3LKRFbDMAAE6IQDm5DMAADdE002.jpg"/></a></li>
			<li><a href="{{U('List/index',['cid'=>38,'bid'=>9])}}" target="_blank"><img src="Public/Home/goodsImgs/Cg-4WVV2romIZ-DsAABF1x5kAN0AAE6AwKmvG0AAEXv142.jpg"/></a></li>			
			<li><a href="{{U('List/index',['cid'=>265,'bid'=>10])}}" target="_blank"><img src="Public/Home/goodsImgs/Cg-4WVV20p6IE6brAAAU7NOFKBIAAE6mANtXc0AABUE611.jpg"/></a></li>
		</ul>
		<!--1F手机通讯区结束*******************-->
		
		<!--2F电脑数码/配件区开始*******************-->
		<div id="sjtxTitle">2F电脑数码/配件</div>
		<div id="sjtxBox">
			<div class="sjtxImgA">
				<a href="{{U('Detail/index',['zol_goods_gid'=>25])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJlfH_P6ICxcNAAB1jSSZu7kAAU5vgMvFnUAAHWl871.jpg"/></a>
			</div>
			<!--轮播图-->
			<div class="sjtxImgB">
				<ul>
					<li>
						<a href="{{U('Detail/index',['zol_goods_gid'=>26])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJ1fH_f2ITbeZAACOgrZPXBsAAU5wgMi98MAAI6a527.jpg"/></a>
					</li>
				</ul>
			</div>
			<div class="sjtxImgC">
				<div class="sjtxImgC1"><a href="{{U('Detail/index',['zol_goods_gid'=>27])}}" target="_blank">神舟 战神 K610D-i7 D2</a></div>
				<div class="sjtxImgC2">i7处理器 尽享畅玩</div>
				<div class="sjtxImgC3">
					<a href="{{U('Detail/index',['zol_goods_gid'=>27])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJ1eVeU-IYzdYAABA0D1sl9UAATzHAM4qdcAAEDo809.jpg"/></a>
				</div>
			</div>
			<div class="sjtxImgC">
				<div class="sjtxImgC1"><a href="{{U('Detail/index',['zol_goods_gid'=>28])}}" target="_blank">联想 G40-80影音娱乐本</a></div>
				<div class="sjtxImgC2">强劲性能 限时抢购</div>
				<div class="sjtxImgC3">
					<a href="{{U('Detail/index',['zol_goods_gid'=>28])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJleVdyWITOlVAABCexpizPgAATzFAF_aTcAAEKT449.jpg"/></a>
				</div>
			</div>
			<div class="sjtxImgC ImgC3">
				<div class="sjtxImgC1"><a href="{{U('Detail/index',['zol_goods_gid'=>29])}}" target="_blank">三星940X3L 触控超薄</a></div>
				<div class="sjtxImgC2">时尚轻薄本 劲爆特惠</div>
				<div class="sjtxImgC3">
					<a href="{{U('Detail/index',['zol_goods_gid'=>29])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJlctnouIN0Z9AAFgRzPRZ18AARJagJkKXMAAWBf098.jpg"/></a>
				</div>
			</div>
			<div class="sjtxImgC">
				<div class="sjtxImgC1"><a href="{{U('Detail/index',['zol_goods_gid'=>30])}}" target="_blank">Acer暗影骑士2</a></div>
				<div class="sjtxImgC2">GTX960M炫薄游戏本热</div>
				<div class="sjtxImgC3">
					<a href="{{U('Detail/index',['zol_goods_gid'=>30])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJ1fIAJeIDC-7AAAi6FVQG8sAAU5xwNZ9kUAACMA144.jpg"/></a>
				</div>
			</div>
			<div class="sjtxImgC">
				<div class="sjtxImgC1"><a href="{{U('Detail/index',['zol_goods_gid'=>31])}}" target="_blank">苹果 MacBook Pro</a></div>
				<div class="sjtxImgC2">品牌电脑，特惠低价！</div>
				<div class="sjtxImgC3">
					<a href="{{U('Detail/index',['zol_goods_gid'=>31])}}" target="_blank"><img src="Public/Home/goodsImgs/20160911033642.png"/></a>
				</div>
			</div>
			<div class="sjtxImgC">
				<div class="sjtxImgC1"><a href="{{U('Detail/index',['zol_goods_gid'=>32])}}" target="_blank">华硕 灵耀U3000 超极本</a></div>
				<div class="sjtxImgC2">限时直降500元</div>
				<div class="sjtxImgC3">
					<a href="{{U('Detail/index',['zol_goods_gid'=>32])}}" target="_blank"><img src="Public/Home/goodsImgs/20160911035144.png"/></a>
				</div>
			</div>
		</div>
		<ul id="pinPai">
			<li><a href="{{U('List/index',['cid'=>74,'bid'=>11])}}" target="_blank"><img src="Public/Home/goodsImgs/Cg-4WVV3qgmIABtEAABJvjFkHxQAAE93gBTLNcAAEnW751.jpg"/></a></li>
			<li><a href="{{U('List/index',['cid'=>85,'bid'=>9])}}" target="_blank"><img src="Public/Home/goodsImgs/Cg-4WVV2romIZ-DsAABF1x5kAN0AAE6AwKmvG0AAEXv142.jpg"/></a></li>
			<li><a href="{{U('List/index',['cid'=>70,'bid'=>12])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJleF29uIQ2CVAAAR2SSM4gAAATeKAE2CaYAABHx708.png"/></a></li>			
			<li><a href="{{U('List/index',['cid'=>69,'bid'=>16])}}" target="_blank"><img src="Public/Home/goodsImgs/Cg-4WVV3qZqIH6rVAABH68uVVgUAAE92wP_VqwAAEgD309.jpg"/></a></li>
			<li><a href="{{U('List/index',['cid'=>73,'bid'=>15])}}" target="_blank"><img src="Public/Home/goodsImgs/Cg-4WlV3pz2IfpI7AABGCjc5uFAAAE90QPZM0YAAEYi841.jpg"/></a></li>
			<li><a href="{{U('List/index',['cid'=>2,'bid'=>14])}}" target="_blank"><img src="Public/Home/goodsImgs/Cg-4WlV_lDqIcC7vAABF3BHzeB8AAFc0gJPvH0AAEX0745.jpg"/></a></li>
			<li><a href="{{U('List/index',['cid'=>71,'bid'=>1])}}" target="_blank"><img src="Public/Home/goodsImgs/Cg-4WFQ491mIKZ5WAAALECkG5eIAAQBEQMdKRYAAAso635.jpg"/></a></li>
			<li><a href="{{U('List/index',['cid'=>72,'bid'=>58])}}" target="_blank"><img src="Public/Home/goodsImgs/20111101_2ba0f7d7da2216be2181JvdHSTEaMJsE.jpg"/></a></li>
			<li><a href="{{U('List/index',['cid'=>68,'bid'=>17])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJ1acmK-IQN_wAABoqVEDDncAAHZ9wHAT9UAAGjB614.jpg"/></a></li>			
			<li><a href="{{U('List/index',['cid'=>78,'bid'=>10])}}" target="_blank"><img src="Public/Home/goodsImgs/Cg-4WVV20p6IE6brAAAU7NOFKBIAAE6mANtXc0AABUE611.jpg"/></a></li>
		</ul>
		<!--2F电脑数码/配件区结束*******************-->
		
		<!--3F智能数码/家电区开始*******************-->
		<div id="sjtxTitle">3F智能数码/家电</div>
		<div id="sjtxBox">
			<div class="sjtxImgA">
				<a href="{{U('Detail/index',['zol_goods_gid'=>34])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJ1fPg7KILybqAADZViggU5QAAVFbwOfXlMAANlu510.jpg"/></a>
			</div>
			<!--轮播图-->
			<div class="sjtxImgB">
				<ul>
					<li>
						<a href="{{U('Detail/index',['zol_goods_gid'=>35])}}" target="_blank">
							<img src="Public/Home/goodsImgs/ChMkJle_10qIVuR9AAGMlUxtRUAAAUvOgMGBDsAAYyt394.jpg"/>
						</a>
					</li>
				</ul>
			</div>
			<div class="sjtxImgC">
				<div class="sjtxImgC1"><a href="{{U('Detail/index',['zol_goods_gid'=>36])}}" target="_blank">家用全自动酸奶</a></div>
				<div class="sjtxImgC2">送菌粉 立体加热智能控制</div>
				<div class="sjtxImgC3">
					<a href="{{U('Detail/index',['zol_goods_gid'=>36])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJ1fPh6WIfZ8tAADI4k-IsLEAAVFeAEOjm0AAMj6746.png"/></a>
				</div>
			</div>
			<div class="sjtxImgC">
				<div class="sjtxImgC1"><a href="{{U('Detail/index',['zol_goods_gid'=>37])}}" target="_blank">LED智能健康护眼阅读灯</a></div>
				<div class="sjtxImgC2">无闪频 无炫目 无辐射</div>
				<div class="sjtxImgC3">
					<a href="{{U('Detail/index',['zol_goods_gid'=>37])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJlfPigWIBIlcAABYv3OqhqIAAVFfAKUh8gAAFjX779.png"/></a>
				</div>
			</div>
			<div class="sjtxImgC ImgC3">
				<div class="sjtxImgC1"><a href="{{U('Detail/index',['zol_goods_gid'=>3])}}" target="_blank">普耐尔学生智能手表</a></div>
				<div class="sjtxImgC2">开启美好智能生活</div>
				<div class="sjtxImgC3">
					<a href="{{U('Detail/index',['zol_goods_gid'=>3])}}" target="_blank"><img src="Public/Home/goodsImgs/20160911185748.jpg"/></a>
				</div>
			</div>
			<div class="sjtxImgC">
				<div class="sjtxImgC1"><a href="{{U('Detail/index',['zol_goods_gid'=>4])}}" target="_blank">尼康D3300 单反套机</a></div>
				<div class="sjtxImgC2">限时抢购 立省338元！</div>
				<div class="sjtxImgC3">
					<a href="{{U('Detail/index',['zol_goods_gid'=>4])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJleoMTqIAkb6AAA-Otz4OwkAAUQqgJrvYsAAD5S777.jpg"/></a>
				</div>
			</div>
			<div class="sjtxImgC">
				<div class="sjtxImgC1"><a href="{{U('Detail/index',['zol_goods_gid'=>12])}}" target="_blank">索尼 ILCE-6000套机</a></div>
				<div class="sjtxImgC2">骁龙八核 更有惊艳粉色</div>
				<div class="sjtxImgC3">
					<a href="{{U('Detail/index',['zol_goods_gid'=>12])}}" target="_blank"><img src="Public/Home/goodsImgs/Cg-4WVUnj4qIbQ8KAAHJnjlDMO8AABSFACSbjUAAcm2348.jpg"/></a>
				</div>
			</div>
			<div class="sjtxImgC">
				<div class="sjtxImgC1"><a href="{{U('Detail/index',['zol_goods_gid'=>38])}}" target="_blank">酷开50英寸闪电4K </a></div>
				<div class="sjtxImgC2">超高清液晶电视带回家</div>
				<div class="sjtxImgC3">
					<a href="{{U('Detail/index',['zol_goods_gid'=>38])}}" target="_blank"><img src="Public/Home/goodsImgs/20160911194107.jpg"/></a>
				</div>
			</div>
		</div>
		<ul id="pinPai">
			<li><a href="{{U('List/index',['cid'=>240,'bid'=>59])}}" target="_blank"><img src="Public/Home/goodsImgs/20160911172746.jpg"/></a></li>
			<li><a href="{{U('List/index',['cid'=>21,'bid'=>18])}}" target="_blank"><img src="Public/Home/goodsImgs/Cg-4WlV3q6iIOAGmAABMBL5rslcAAE95QKqwtQAAEwc861.jpg"/></a></li>
			<li><a href="{{U('List/index',['cid'=>116,'bid'=>8])}}" target="_blank"><img src="Public/Home/goodsImgs/Cg-4WVV2ramIY8q0AAA3L-CxnO4AAE6AADazvoAADdH157.jpg"/></a></li>			
			<li><a href="{{U('List/index',['cid'=>107,'bid'=>19])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJleF9GyIRvapAAAj97NsWScAATeXQE3vcQAACQP716.jpg"/></a></li>			
			<li><a href="{{U('List/index',['cid'=>197,'bid'=>55])}}" target="_blank"><img src="Public/Home/goodsImgs/20160907095108.png"/></a></li>
			<li><a href="{{U('List/index',['cid'=>77,'bid'=>14])}}" target="_blank"><img src="Public/Home/goodsImgs/Cg-4WlV2rbiIHDMlAAA9fJp-uRwAAE6AAFW_L8AAD2U668.jpg"/></a></li>			
			<li><a href="{{U('List/index',['cid'=>8,'bid'=>56])}}" target="_blank"><img src="Public/Home/goodsImgs/20160909032623.png"/></a></li>
			<li><a href="{{U('List/index',['cid'=>8,'bid'=>22])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJ1YbIkOIBeOvAAATBWOGkBsAADk1AI24cUAABMd526.jpg"/></a></li>
			<li><a href="{{U('List/index',['cid'=>8,'bid'=>24])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJ1ebB86IeHwTAAAdsa90nnsAAT9xAJuqM8AAB3J551.jpg"/></a></li>	
			<li><a href="{{U('List/index',['cid'=>174,'bid'=>57])}}" target="_blank"><img src="Public/Home/goodsImgs/20160909205316.png"/></a></li>
		</ul>
		<!--3F智能数码/家电区开始区结束*******************-->
		
		<!--4FDIY硬件/外设区开始*******************-->
		<div id="sjtxTitle">4FDIY硬件/外设</div>
		<div id="sjtxBox">
			<div class="sjtxImgA">
				<a href="{{U('Detail/index',['zol_goods_gid'=>39])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJle_9BeIUaW4AACvxE6aOGMAAUvcgFNEsMAAK_c361.jpg"/></a>
			</div>
			<!--轮播图-->
			<div class="sjtxImgB">
				<ul>
					<li>
						<a href="{{U('Detail/index',['zol_goods_gid'=>26])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJ1fH_f2ITbeZAACOgrZPXBsAAU5wgMi98MAAI6a527.jpg"/></a>
					</li>
				</ul>
			</div>
			<div class="sjtxImgC">
				<div class="sjtxImgC1"><a href="{{U('Detail/index',['zol_goods_gid'=>40])}}" target="_blank">Intel Xeon E3-1231 v3</a></div>
				<div class="sjtxImgC2">E3限时特惠：1587元</div>
				<div class="sjtxImgC3">
					<a href="{{U('Detail/index',['zol_goods_gid'=>40])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJ1e6ddyIOCPRAAAjCcjx7zcAAUoJwD8aL0AACMh243.jpg"/></a>
				</div>
			</div>
			<div class="sjtxImgC">
				<div class="sjtxImgC1"><a href="{{U('Detail/index',['zol_goods_gid'=>41])}}" target="_blank">Luna 8cm减震风扇</a></div>
				<div class="sjtxImgC2">优惠活动，先到先得</div>
				<div class="sjtxImgC3">
					<a href="{{U('Detail/index',['zol_goods_gid'=>41])}}" target="_blank"><img src="Public/Home/goodsImgs/20160911220534.jpg"/></a>
				</div>
			</div>
			<div class="sjtxImgC ImgC3">
				<div class="sjtxImgC1"><a href="{{U('Detail/index',['zol_goods_gid'=>42])}}" target="_blank">希捷 Backup睿品升级版</a></div>
				<div class="sjtxImgC2">你身边的数据备份专家</div>
				<div class="sjtxImgC3">
					<a href="{{U('Detail/index',['zol_goods_gid'=>42])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJ1dGcI6IBr2sAADW3C1R3dYAAR53gNG-BMAANb0178.jpg"/></a>
				</div>
			</div>
			<div class="sjtxImgC">
				<div class="sjtxImgC1"><a href="{{U('Detail/index',['zol_goods_gid'=>43])}}" target="_blank">技嘉 GA-Z97X主板</a></div>
				<div class="sjtxImgC2">性能强悍，极致流畅！</div>
				<div class="sjtxImgC3">
					<a href="{{U('Detail/index',['zol_goods_gid'=>43])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJlXxM1CIRxABAAVF2_ks4kAAACeDwH3KukABUXz769.jpg"/></a>
				</div>
			</div>
			<div class="sjtxImgC">
				<div class="sjtxImgC1"><a href="{{U('Detail/index',['zol_goods_gid'=>44])}}" target="_blank">威刚 8GB DDR3 1600</a></div>
				<div class="sjtxImgC2">仅售245元！</div>
				<div class="sjtxImgC3">
					<a href="{{U('Detail/index',['zol_goods_gid'=>44])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJ1XlCnuIaPNpAAKY05LpansAACHYANuTUAAApjr237.jpg"/></a>
				</div>
			</div>
			<div class="sjtxImgC">
				<div class="sjtxImgC1"><a href="{{U('Detail/index',['zol_goods_gid'=>45])}}" target="_blank">游戏悍将 刀锋1 </a></div>
				<div class="sjtxImgC2">新品主板 价格实惠</div>
				<div class="sjtxImgC3">
					<a href="{{U('Detail/index',['zol_goods_gid'=>45])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJ1YMlVKITeYxAAGISfMFkHcAADMmADey_8AAYhh838.jpg"/></a>
				</div>
			</div>
		</div>
		<ul id="pinPai">
			<li><a href="{{U('List/index',['cid'=>5,'bid'=>26])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJ1ejDWyIBuIbAAAM4kf1eIoAAUKAAI1nhcAAAz6298.jpg"/></a></li>
			<li><a href="{{U('List/index',['cid'=>150,'bid'=>27])}}" target="_blank"><img src="Public/Home/goodsImgs/Cg-4WVV3ltqIZtCYAAA8ZETLH8EAAE9hgLYJrgAADx8933.jpg"/></a></li>
			<li><a href="{{U('List/index',['cid'=>5,'bid'=>28])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJ1eF6iWIFhZuAAAQoNcKhl0AATePANB_PUAABC4223.png"/></a></li>			
			<li><a href="{{U('List/index',['cid'=>5,'bid'=>30])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJ1ejDtCIVIxNAAAKP3IZva8AAUKAgNNEwIAAApX767.jpg"/></a></li>			
			<li><a href="{{U('List/index',['cid'=>156,'bid'=>16])}}" target="_blank"><img src="Public/Home/goodsImgs/Cg-4WVV3lgiIb0MTAAA4LYKvZ7oAAE9ggNCAhIAADhF509.jpg"/></a></li>
			<li><a href="{{U('List/index',['cid'=>5,'bid'=>29])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJlejDLmIGQxDAAAK4kt-3WIAAUJ_wGlCi8AAAr6229.jpg"/></a></li>			
			<li><a href="{{U('List/index',['cid'=>5,'bid'=>13])}}" target="_blank"><img src="Public/Home/goodsImgs/Cg-4WlV3lwOIdJR1AABGSwKzp1QAAE9hwGgyNgAAEZj942.jpg"/></a></li>
			<li><a href="{{U('List/index',['cid'=>165,'bid'=>32])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJleF6yWIF1mZAAAhlE8pEsAAATePgD7zSAAACGs745.png"/></a></li>
			<li><a href="{{U('List/index',['cid'=>160,'bid'=>9])}}" target="_blank"><img src="Public/Home/goodsImgs/Cg-4WVV2romIZ-DsAABF1x5kAN0AAE6AwKmvG0AAEXv142.jpg"/></a></li>	
			<li><a href="{{U('List/index',['cid'=>2,'bid'=>17])}}" target="_blank"><img src="Public/Home/goodsImgs/ChMkJleF64eIcZ1JAAAU0A7_UEsAATePgNFPl0AABTo667.png"/></a></li>
		</ul>
		<!--4FDIY硬件/外设区结束*******************-->
		<div id="tuAadd">
			<a href="{{U('Detail/index',['zol_goods_gid'=>15])}}" target="_blank"><img src="Public/Home/images/ChMkJ1dj4iGICTHnAACNFAbQyCgAAStJgC9vU0AAI0s143.jpg"/></a>
		</div>
		
		<!--1元夺宝开始*******************-->
		<!--<div id="yydb">1元夺宝</div>
		<ul id="yydbBOX">
			<li></li>
		</ul>	-->
		
		<!--一元夺宝结束*******************-->
		
		<!--引入公共底部*****************-->
		{{include file="../Common/indexFooter"}}
		
		<!--引入公共右侧栏*****************-->
		{{include file="../Common/indexRight"}}
		<!--右侧栏结束*******************-->
	</body>
</html>
