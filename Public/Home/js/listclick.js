
$(function (){ 
	//显示所有
	$(".moreChoice").click(function(){
		if($("#screenBox").height()==76){
			$("#screenBox").css('height','auto');
			$(".moreChoice").html('收起');
		}else{
			$("#screenBox").css('height','76px');
			$(".moreChoice").html('更多选项');
		}
	})		
});  
