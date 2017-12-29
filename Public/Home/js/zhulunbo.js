window.onload = function(){
	$(function(){
		//一.自动轮播
		// 1.变量
		var num = 0;
		// 2.执行函数
		function run(){
			num++;
			// 回流判断
			if(num==6){num=0;}
			// 当前图片元素显示，兄弟元素隐藏
			$("#menuCenterBox a").eq(num).fadeIn().siblings("a").fadeOut();
			// 当前li变红,兄弟li变灰
			$("#menuCenterBox ul li").eq(num).css({background:"#B61B1F"}).siblings().css({background:"#3e3e3e"});
		}
		// 3.定时器
		timer=setInterval(run,2500);

		// 二.鼠标移入移出
		$("#menuCenterBox").hover(function(){
			// 清除定时器
			clearInterval(timer);
			// 左右点击块淡入
			$("#CenterBoxClick").stop().fadeIn();
		},function(){
			// 开启定时器
		    timer=setInterval(run,2500);
		    $("#CenterBoxClick").stop().fadeOut();

		})
		// 三.手动轮播
        $("#menuCenterBox ul li").mouseover(function(){
        	// 获得当前移入元素的序号        	
        	num = $(this).index();
        	// 当前图片元素显示，兄弟元素隐藏
        	// stop()防止动画叠加
			$("#menuCenterBox a").eq(num).stop().fadeIn().siblings("a").stop().fadeOut();
			// 当前li变红,兄弟li变灰
			$("#menuCenterBox ul li").eq(num).css({background:"#B61B1F"}).siblings().css({background:"#3e3e3e"});
        })
        // 四.左点击
        var c = 0;
        $(".CenterBoxClick_left").click(function(){
            // 点击判断，让按钮在两秒钟之内不可点击
        	if(c==1){
        		return;
        	}
            c=1;
            setTimeout(function(){
            	c=0;
            },1000);
            
            num--;
            // 回流判断
            if(num==-1){
            	num=5;
            }
            // 当前图片元素显示，兄弟元素隐藏
            $("#menuCenterBox a").eq(num).stop().fadeIn().siblings("a").stop().fadeOut();
			// 当前li变红,兄弟li变灰
			$("#menuCenterBox ul li").eq(num).css({background:"#B61B1F"}).siblings().css({background:"#3e3e3e"});
        });
        // 五.右点击
        $(".CenterBoxClick_right").click(function(){
        	// 点击判断，让按钮在两秒钟之内不可点击
        	if(c==1){
        		return;
        	}
            c=1;
            setTimeout(function(){
            	c=0;
            },1000);

            num++;
            // 回流判断
            if(num==6){
            	num=0;
            }
            // 当前图片元素显示，兄弟元素隐藏
            $("#menuCenterBox a").eq(num).stop().fadeIn().siblings("a").stop().fadeOut();
			// 当前li变红,兄弟li变灰
			$("#menuCenterBox ul li").eq(num).css({background:"#B61B1F"}).siblings().css({background:"#3e3e3e"});
        });
	})	
}