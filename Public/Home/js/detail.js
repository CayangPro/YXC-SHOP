$(function(){
//	Tab切换
    $(".InforNavSon").click(function(){
    	// $(this)当前元素
    	// index()目标元素在兄弟元素中的排序
    	$(this).css('border-top','2px solid #C61E1E').css('background','white').css('margin-top','-1px');	
    	var num = $(this).index();
    	// 显示和消失
    	$(".goodsList").eq(num).show().siblings().hide();
    	$(".InforNavSon").mouseout(function(){
			$(this).css('border-top','1px solid #E6E6E6').css('background','#F5F5F5');
		}) 
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
            $.ajax({
                type:"post",
                url:"{{U('Detail/getLstock')}}",
                data:{combineId:str},
                dataType:'json',
                success:function (phpData) {
                    var stock='';
                    stock='库存<span>'+phpData+'</span>件';
                    $('.goods_stock').html(stock);
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
	
    //点击切换商品图片
	$(".imgClick").mouseover(function (){
        var num=$(this).index();
		$(this).css('border-color','#C61E1E');					
        $(".imgShows").eq(num).stop().fadeIn().siblings().fadeOut();
    });
	$(".imgClick").mouseout(function(){
		$(this).css('border-color','white');
	});
	
	$('.buy_btn').click(function (){
                var gid=$('.title').attr('goodsId');
                var gname=$('.title').html();
                var num=$('.numInput').val();
                var gmarketPrice=$('.gmarketPrice span').attr('gmarketPrice');
                var gprice=$('.gPrice span').attr('gPrice');
                var gtotal=$('.goodsGtotal').attr('specId');
                if (gtotal!=0){
                    var str='';
                    //得到所有选中的商品属性id
                    $.each($('.red'),function () {
                        str+=$(this).attr('specId')+',';
                    })
                    $.ajax({
                        type:"post",
                        url:"{{U('Cart/add')}}",
                        data:{gid:gid,gname:gname,num:num,gmarketPrice:gmarket_price,gprice:gprice,str:str,gtotal:gtotal},
                        dataType:"json",
                        success:function(phpData){
                            hd_confirm({message:'添加到购物车成功，是否进入购物车？',success:function(){
                                location.href="{{U('Cart/index')}}"
                            }});
                        }
                    })
                }else {
                    hd_confirm({message:'该商品没有库存，请重新选择'});
                }

            })
	
	
})