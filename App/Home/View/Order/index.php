<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>YXC商城</title>
        <!--引入公共头部*****************-->
        {{include file="../Common/orderCartHead"}}
        <!--载入css样式-->
        <link rel="stylesheet" type="text/css" href="Public/Home/css/order.css"/>

        <!--head区域开始-->
    <div id="headBox">
        <div id="leftHeadBox">
            <a href="{{U('Index/index')}}"><img src="Public/Home/images/shop.jpg"/></a>
            <a href="{{U('Index/index')}}"><img src="Public/Home/images/logo-text.png"/></a>
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
    <form action="" method="post">
        <!--详情区开始-->
        <div id="wrapper">
            <!--1.收货人信息-->
            <div class="perInfor">
                <table border="none" >
                    <tr>
                        <td class="cell_1" style="width: 117px">收货人信息</td>
                        <td class="cell_2">
                            <ul class="address_list">
                                <li class="defaultShow" style="display: none;"></li>
                                <?php if (isset($addressData)): ?>
                                    {{foreach from="$addressData" value="$v" key="$k"}}
                                    <li class="defaultShow">
                                        <label>
                                            <input type="radio" name="addAddressId" id="addNum" value="{{$v['cuaid']}}" <?php echo $k == 0 ? 'checked="checked"' : '' ?> />
                                            <span>
                                                <strong>
                                                    <e name="rname">{{$v['rname']}}</e>
                                                </strong>
                                            </span>
                                            {{$v['raddress']}}&nbsp;&nbsp;{{$v['radeaddress']}}&nbsp;&nbsp;{{$v['rcall']}}
                                        </label>
                                        <div class="operate" style="display: block;">
                                            <!--<a class="editOperate" href="javascript:void(0)"></a>-->
                                            <!--<a class="delOperate" href="javascript:void(0)"></a>-->
                                        </div>
                                        <!--编辑框-->
                                        <div class="infor-editor editBox ">
                                            <!--收货人-->
                                            <dl>
                                                <dt>
                                                    <em class="xh">*</em>
                                                    收货人:
                                                </dt>
                                                <dd>
                                                    <input type="text" name="rname" id="deliverName{{$v['cuaid']}}" class="text recinput" value="{{$v['rname']}}" maxlength="10" />
                                                </dd>
                                            </dl>
                                            <!--所在地区-->
                                            <dl class="area">
                                                <dt>
                                                    <em class="xh">*</em>
                                                    所在地区:
                                                </dt>
                                                <!--选择省份，地区-->
                                                <dd class="clearfix">
                                                    <select class="provinceId" name="provinceId" id="deliverProvinceId1{{$v['cuaid']}}">

                                                    </select>
                                                    <select class="cityId" name="cityId" id="deliverProvinceId2{{$v['cuaid']}}">

                                                    </select>
                                                    <select class="streetId" name="streetId" id="deliverProvinceId3{{$v['cuaid']}}">

                                                    </select>
                                                </dd>											
                                            </dl>
                                            <!--详细地址-->
                                            <dl>
                                                <dt>
                                                    <em class="xh">*</em>
                                                    详细地址:
                                                </dt>
                                                <dd>
                                                    <input type="text" name="radeaddress" id="deliverAddress{{$v['cuaid']}}" class="text addinput" value="{{$v['radeaddress']}}" maxlength="30" />
                                                </dd>
                                            </dl>
                                            <!--手机号-->
                                            <dl>
                                                <dt>
                                                    <em class="xh">*</em>
                                                    手机号码:
                                                </dt>
                                                <dd>
                                                    <input type="text" name="rcall" id="deliverMobile{{$v['cuaid']}}" value="{{$v['rcall']}}" maxlength="11" />
                                                <e id="deliverMobilePhoneTips{{$v['cuaid']}}" class="tips" style="line-height:25px"></e>
                                                </dd>
                                                <dt class="cuTell">
                                                    固定电话:
                                                </dt>
                                                <dd class="cuTellInput">
                                                    <input type="text" name="rtell" id="deliverTell{{$v['cuaid']}}" value="{{$v['rtell']}}" maxlength="11" />
                                                <e id="deliverMobilePhoneTips{{$v['cuaid']}}" class="tips" style="line-height:26px; font-size: 12px;">请输入手机号码或固定电话</e>
                                                </dd>
                                            </dl>
                                            <!--设置为默认地址-->
                                            <label for="" class="setup-default">
                                                <input type="checkbox" name="deliverDefault" id="deliverDefault{{$v['cuaid']}}" class="checkbox"  value="0" />
                                                设置为默认地址											
                                            </label>
                                            <!--确认收货地址-->
                                            <input type="button" id="addAddress{{$v['cuaid']}}" class="savebtn w120-btn"  value="确认收货地址" />
                                        </div>
                                    </li>
                                    {{endforeach}}
                                <?php endif ?>

                                <!--添加地址-->
                                <li class="addAddress">
                                    <label>
                                        <input id="chooseNum"  class="addClick" type="radio" name="addAddressId" />
                                        添加新地址							
                                    </label>  
                                    <div class="operate operateAdd">
                                        <a class="delOperate delOperateDel" href="javascript:void(0)">关闭</a>
                                    </div>
                                    <!--编辑框-->
                                    <div class="infor-editor editBox ">
                                        <!--收货人-->
                                        <dl>
                                            <dt>
                                                <em class="xh">*</em>
                                                收货人:
                                            </dt>
                                            <dd>
                                                <input type="text" name="rname" id="deliverName" class="text recinput" value="" maxlength="10" />
                                            </dd>
                                        </dl>
                                        <!--所在地区-->
                                        <dl class="area">
                                            <dt>
                                                <em class="xh">*</em>
                                                所在地区:
                                            </dt>
                                            <!--选择省份，地区-->
                                            <dd class="clearfix">
                                                <select class="provinceId" name="provinceId" id="deliverProvinceAddId1">

                                                </select>
                                                <select  class="cityId" name="cityId" id="deliverProvinceAddId2">

                                                </select>
                                                <select  class="streetId" name="streetId" id="deliverProvinceAddId3">

                                                </select>
                                            </dd>											
                                        </dl>
                                        <!--详细地址-->
                                        <dl>
                                            <dt>
                                                <em class="xh">*</em>
                                                详细地址:
                                            </dt>
                                            <dd>
                                                <input class="deliverAddress"  type="text" name="radeaddress" id="deliverAddress" value="" maxlength="30" />
                                            </dd>
                                        </dl>
                                        <!--手机号-->
                                        <dl>
                                            <dt>
                                                <em class="xh">*</em>
                                                手机号码:
                                            </dt>
                                            <dd>
                                                <input type="text" name="rcall" id="deliverMobile" value="" maxlength="11" />
                                            <e id="deliverMobilePhoneTips" class="tips" style="line-height:25px"></e>
                                            </dd>
                                            <dt class="cuTell">
                                                固定电话:
                                            </dt>
                                            <dd>
                                                <input type="text" name="rtell" id="deliverTell" value="" maxlength="11" />
                                            <e id="deliverMobilePhoneTips" class="tips">请输入手机号码或固定电话</e>
                                            </dd>
                                        </dl>
                                        <!--设置为默认地址-->
                                        <label for="" class="setup-default">
                                            <input type="checkbox" name="deliverDefault" id="deliverDefault" class="checkbox"  value="0" />
                                            设置为默认地址											
                                        </label>
                                        <!--确认收货地址-->
                                        <input type="button" id="deliverBotton" class="savebtn w120-btn" value="确认收货地址" />
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
            <!--商品订单-->

            {{foreach from="$_SESSION['cart']['goods']" key="$k" value="$v" }}
            <div class="order-list order-current">
                <input type="hidden" name="" id="" value="" />
                <table border="none" >
                    <tr>
                        <td class="cell_1" style="width: 117px">							
                            <label for="">
                                    <!--<input type="radio" name="merchantId" class="merchantId" value="" />-->
                                	订单信息
                            </label>
                        </td>
                        <td class="cell_2">
                            <table border="none" class="goods">
                                <tr>
                                    <td class="infor">商品信息</td>
                                    <td class="color-suits">所选规格</td>
                                    <!--<td class="saletype">销售类型</td>-->
                                    <td class="price">单价</td>
                                    <!--<td class="agio">优惠</td>-->
                                    <td class="amount">数量</td>
                                    <td class="total">总价</td>
                                </tr>
                                <tr>									
                                    <td class="infor">
                                        <a class="pic" href="{{U('Detail/index',['zol_goods_gid'=>$_SESSION['cart']['goods'][$k]['id']])}}" title="{{$v['name']}}" target="_blank">
                                            <img src="{{$v['options']['pic']}}"/>
                                        </a>
                                        <h5 class="title">
                                            <a href="{{U('Detail/index',['zol_goods_gid'=>$_SESSION['cart']['goods'][$k]['id']])}}" title="{{$v['name']}}" title="{{$v['name']}}" target="_blank">
                                                {{$v['name']}}
                                            </a>
                                        </h5>
                                    </td>
                                    <td class="color-suits">
                                        {{foreach from="$v['options']['name']" key="$kk" value="$vv"}}
                                        <p class="color">{{$vv['gavalue']}}</p>
                                        {{endforeach}}
                                    </td>
                                    <!--<td class="saletype">--</td>-->
                                    <td class="price">&yen;{{$v['price']}}</td>
                                    <!--<td class="agio">--</td>-->
                                    <td class="amount">{{$v['num']}}</td>
                                    <td class="total totalValue">&yen;{{$v['total']}}</td>									
                                </tr>
                            </table>
                            <div class="order-foot clearfix">
                                <div class="store-infor">
                                    <a class="tag-security" href="#">z保障+</a>
                                    <a class="z-security" href="#"> 消费者保障</a>
                                </div>
                                <div class="delivery">
                                    <div class="payment">
                                        <span>支付方式:</span>
                                        <select name="" id="">
                                            <option value="">网上支付</option>
                                        </select>										
                                    </div>
                                    <div class="express">
                                        <div class="payment">
                                            <span>配送方式:</span>
                                            <select name="" id="">
                                                <option value="">顺丰包邮:0元</option>
                                            </select>										
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            {{endforeach}}

            <!--订单备注-->
            <div class="order-note">
                <table border="none">
                    <tr>
                        <td class="cell_1">订单备注</td>
                        <td class="cell_2">
                            <textarea class="orderNote" name="ddnote" rows="" cols="" placeholder="您可以填写对商品、配送的要求...(最多输入120个字符)"  maxlength="120">
									
                            </textarea>
                        </td>
                        <td class="cell_3">
                            <ul class="total-price">
                                <li>
                                    <span>商品总价:</span>									
                                <e id="goods-total-price">&yen;{{$_SESSION['cart']['total']}}</e>									
                                </li>
                                <li>
                                    <span>运费:</span>									
                                <e id="goods-freight-price">&yen;0</e>									
                                </li>
                                <li>
                                    <span>订单总计:</span>									
                                <e id="total-price" class="total">&yen;{{$_SESSION['cart']['total']}}</e>								
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
            <!--提交订单-->
            <div class="submit-order clearfix">
                <a href="{{U('Cart/index')}}">返回修改购物车</a>
                <button id="push" >提交订单</button>
            </div>
        </div>
    </form>
    <!--详情区结束-->

    <!--引入公共底部*****************-->
    {{include file="../Common/orderCartFooter"}}
    <script type="text/javascript">

//城市联动插件
$(function () {
    //初始化方法
    area.init('deliverProvinceAddId');
    //修改的时候默认被选中效果
    area.selected('北京市', '北京', '');
})

//点击事件
$(function () {
    //编辑框点击事件
    $(".editOperate").click(function () {
        if ($(this).parent().next(".infor-editor").height() == 0) {
            $(this).parent().next(".infor-editor").css('height', 'auto').css('margin-top', '15px');//显示编辑框
            $(this).parent().parent().siblings().children(".infor-editor").css('height', '0px').css('margin-top', '0px');//其他编辑框收起
        } else {
            $(this).parent().next(".infor-editor").css('height', '0px').css('margin-top', '0px');//编辑框收起
        }
    });

    //添加地址点击事件
    $(".addClick").click(function () {
        if ($(this).parent().siblings(".infor-editor").height() == 0) {
            $(this).parent().siblings(".infor-editor").css('height', 'auto').css('margin-top', '15px');//显示编辑框
            $(this).parent().parent().siblings().children(".infor-editor").css('height', '0px').css('margin-top', '0px');//其他编辑框收起
            $(this).parent().next().children().css('display', 'block');//显示关闭按钮
        } else {
            $(this).parent().siblings(".infor-editor").css('height', '0px').css('margin-top', '0px');//编辑框收起
            $(this).parent().next().children().css('display', 'none');//隐藏关闭按钮
        }
    });

    //确认收货地址点击按钮
    $(".savebtn").click(function () {
        if ($(this).parent().parent().height() !== 0) {
            $(this).parent().css('height', '0px').css('margin-top', '0px');//收起编辑框
        } else {
            $(this).parent().parent().css('height', '0px').css('margin-top', '0px');
        }
    });

    //关闭点击按钮
    $(".delOperateDel").click(function () {
        if ($(this).parent().next().height() !== 0) {
            $(this).parent().next().css('height', '0px').css('margin-top', '0px');//收起编辑框
        } else {
            $(this).parent().next().css('height', '0px').css('margin-top', '0px');
        }
    });

    //订单选中效果
    $(".merchantId").click(function () {
        $(this).parent().parent().parent().parent().parent().parent().css('border', '2px solid #E02D2D').css('margin', '18px auto');
        $(this).parent().parent().parent().parent().parent().parent().siblings().css('border', '1px solid #E6E6E6');
    });
	
    //提交订单效果
    $("#push").click(function () {
        $(this).text('提交中...');
    });
})

//异步添加地址
$('#deliverBotton').click(function () {
    var rname = $('#deliverName').val();
    var provinceId = $('#deliverProvinceAddId1').val();
    var cityId = $('#deliverProvinceAddId2').val();
    var streetId = $('#deliverProvinceAddId3').val();
    var radeaddress = $('#deliverAddress').val();
    var rcall = $('#deliverMobile').val();
    var rtell = $('#deliverTell').val();
    if (!rname || !provinceId || !cityId || !streetId || !radeaddress || !rcall) {
        alert('参数不全！');
        return false;
    }
    $.ajax({
        type: 'post',
        url: "{{U('Order/ajaxadd')}}",
        data: {rname: rname, provinceId: provinceId, cityId: cityId, streetId: streetId, radeaddress: radeaddress, rcall: rcall, rtell: rtell},
        dataType: "json",
        success: function (phpData) {
            $("input[name=addAddressId]:checked").attr('checked', false);
            var html = "<li class='defaultShow'>";
            html += "<label>";
            html += "<input type='radio' name='addAddressId' />";
            html += "<span>";
            html += "<strong>";
            html += "<e>" + phpData.rname + "</e>";
            html += "</strong>"
            html += "</span>"
            html += phpData.raddress + phpData.radeaddress + phpData.rcall;
            html += "</label>"
            html += "<div class='operate'>"
//	        html+="<a class='editOperate' href='javascript:void(0)'>查看</a>"
//			html+="<a class='editOperate' href='javascript:void(0)'>删除</a>"
            html += "</div>"
            html += "</li>";
            $('li[class=defaultShow]:first').before(html);
            $('form')[0].reset();
        }
    })
});
    </script>
</body>
</html>
