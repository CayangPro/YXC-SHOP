
$(function (){ 
	//显示所有
	$(".moreChoice").click(function(){
		if($("#screenBox").height()==150){
			$("#screenBox").css('height','auto');
			$(".moreChoice").html('收起');
		}else{
			$("#screenBox").css('height','150px');
			$(".moreChoice").html('更多选项');
		}
	})		
});  
