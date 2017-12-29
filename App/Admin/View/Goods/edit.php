<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">
	    <!-- Loading Bootstrap -->
	    <link href="./Public/Admin/Flat/dist/css/vendor/bootstrap.min.css" rel="stylesheet">
	    <!-- Loading Flat UI -->
	    <link href="./Public/Admin/Flat/dist/css/flat-ui.css" rel="stylesheet">
	    <link href="./Public/Admin/Flat/docs/assets/css/demo.css" rel="stylesheet">
	    <link rel="shortcut icon" href="./Public/Admin/Flat/img/favicon.ico">
	    <!-- 需要载入的文件 -->
   		<script type="text/javascript" src="Public/Admin/uploadify/jquery-1.8.2.min.js"></script>
    	<script type="text/javascript" src="Public/Admin/uploadify/jquery.uploadify.min.js"></script>
    	<link rel="stylesheet" type="text/css" href="Public/Admin/uploadify/uploadify.css">
    	<!--载入百度编辑器-->
    	<script type="text/javascript" charset="utf-8" src="Public/Admin/ueditor1_4_3/ueditor.config.js"></script>
		<script type="text/javascript" charset="utf-8" src="Public/Admin/ueditor1_4_3/ueditor.all.min.js"> </script>
		<script type="text/javascript" charset="utf-8" src="Public/Admin/ueditor1_4_3/lang/zh-cn/zh-cn.js"></script>
		
		<!--异步添加-->
		<script>
			$(function(){			
				$('select[name=zol_category_cid]').change(function(){
					//获得选中的option的tid
					var tid = $('option:selected').attr('tid');
//					console.log(tid);
					$.ajax({
						type:"post",
						url:"{{U('Goods/getAttr')}}",
						data:{t:tid},
						//确定返回数据类型
						dataType:'json',
						success:function(phpData){
//							console.log(phpData);
							var attr='';
							var spec='';
							$.each(phpData, function(k,v){
								console.log(v);
								//如果是属性
								if(v.tatype == 0){
									attr += '<tr class="info">';
									attr += '<td>'+v.taname+'</td>';
									attr += '<td>';
									attr += '<select name="attr['+v.taid+']" id="" >';
									attr += '<option value=""> 请 选 择 </option>';
										$.each(v.tavalue, function(kk,vv) {
											attr += '<option value="'+vv+'">'+vv+'</option>';
										});
									attr += '</select>';
									attr += '</td></tr>';
								} else {//如果是规格
									spec += '<tr class="info">';
									spec += '<td>'+v.taname+'</td>';
									spec += '<td>';
									spec += '<select name="spec[value]['+v.taid+'][]" id="">';
									spec += '<option value=""> 请 选 择 </option>';
										$.each(v.tavalue, function(kk,vv) {    
											spec += '<option value="'+vv+'">'+vv+'</option>';                                                          
										});
									spec += '</select></td>';
									spec += '<td>附加价格：<input type="text" name="spec[added]['+v.taid+'][]" id="" /></td>';
									spec += '<td>';
									spec += '<a href="javascript:;" class="btn btn-primary addSpec">添加规格</a>';
									spec += '</td></tr>';
								}
							});
							$('#attr').html(attr);
							$('#spec').html(spec);
						}
					});				
				})
				//点击添加规格
				$('.addSpec').live('click',function(){
					//找到当前的父级的tr
					var ftr = $(this).parents('tr');
					//克隆
					var tr =  ftr.clone();
					tr.find('.addSpec').html('删除规格').removeClass('btn btn-primary addSpec').addClass('btn btn-danger removeSpec');
					//再插入到当前父级的下面
					ftr.after(tr);
				})
				//点击删除规格
				$('.removeSpec').live('click',function(){
					$(this).parents('tr').remove();
				})
			})
						
		</script>
	    
	</head>
	<body>
		<form action="" method="post">			
		
			<div class="alert alert-success">编辑商品</div>
			<div class="btn btn-info">基本信息</div>
			
			<div class="form-group">
				<label for="exampleInputEmail1">商品名称</label>
				<input id="exampleInputEmail1" class="form-control" type="text" placeholder="请输入商品名称"  name="gname" value="{{$oldGoodsData['gname']}}">
			</div>
			
			<div class="form-group">
				<label for="exampleInputEmail1">所属分类</label>
				<select name="zol_category_cid" class="form-control">
					<option value="">请选择</option>
					{{foreach from="$cateData" value="$v"}}
						<option value="{{$v['cid']}}" tid={{$v['zol_type_tid']}} <?php if($oldGoodsData['zol_category_cid'] == $v['cid']): ?>selected <?php endif ?> >{{$v['_name']}}</option>
					{{endforeach}}
				</select>
			</div>
			
			<div class="form-group">
				<label for="exampleInputEmail1">所属品牌</label>
				<select name="zol_brands_bid" class="form-control">
					<option value="">请选择</option>
					{{foreach from="$brandsData" value="$v"}}
						<option value="{{$v['bid']}}" <?php if($oldGoodsData['zol_brands_bid'] == $v['bid']): ?>selected<?php endif ?> >{{$v['bname']}}</option>
					{{endforeach}}
				</select>
			</div>
			
			<div class="form-group">
				<label for="exampleInputEmail1">市场价</label>
				<input id="exampleInputEmail1" class="form-control" type="text" placeholder="请输入市场价"  name="gmarket_price" value="{{$oldGoodsData['gmarket_price']}}">
			</div>
			
			<div class="form-group">
				<label for="exampleInputEmail1">商城价</label>
				<input id="exampleInputEmail1" class="form-control" type="text" placeholder="请输入商城价"  name="gprice"  value="{{$oldGoodsData['gprice']}}">
			</div>
			
			<div class="form-group">
				<label for="exampleInputEmail1">总库存</label>
				<input id="exampleInputEmail1" class="form-control" type="text" placeholder="请输入库存"  name="gtotal"  value="{{$oldGoodsData['gtotal']}}">
			</div>
			
			<div class="form-group">
				<label for="exampleInputEmail1">单位</label>
				<input id="exampleInputEmail1" class="form-control" type="text" placeholder="请输入单位"  name="gnuit"  value="{{$oldGoodsData['gnuit']}}">
			</div>
						
			<div class="form-group">
				<label for="exampleInputEmail1">点击次数</label>
				<input id="exampleInputEmail1" class="form-control" type="text" placeholder="请输入点击次数"  name="gclick" value="{{$oldGoodsData['gclick']}}">
			</div>	
			
			<div class="form-group">
				<label for="exampleInputEmail1">上市时间</label>
				<input id="exampleInputEmail1" class="form-control" type="text" placeholder="请输入上市时间"  name="gdate_listing" value="{{$oldGoodsData['gdate_listing']}}">
			</div>	
			<br />
			<!--{{p($data)}}-->
			<div class="btn btn-info">商品属性</div><br />
			<table class="table table-bordered table-hover" id="attr" class="info">
				{{foreach from="$data" value="$v"}}
					{{if value="$v['tatype'] eq 0"}}
						<tr class="info">
							<td>{{$v['taname']}}</td>
							<td>
								<select name="attr[{{$v['taid']}}]">
									<option value="">请选择</option>
									{{foreach from="$v['tavalue']" value="$value"}}
										<option value="{{$value}}" {{if value="$v['gavalue'] eq $value"}}selected{{endif}}>{{$value}}</option>
									{{endforeach}}
								</select>
							</td>
						</tr>
					{{endif}}
				{{endforeach}}
			</table>
			
			<div class="btn btn-info">商品规格</div><br />
			<!--{{p($data)}}-->
			<table class="table table-bordered table-hover" id='spec'>
				<?php 
					$taid = [];
				?>
				{{foreach from="$data" value="$v"}}	
					{{if value="$v['tatype'] eq 1"}}
						<?php
							$taid[] = $v['taid']; 
						?>
						<tr class="info">
							<td>{{$v['taname']}}</td>
							<td>
								<select name="spec[value][{{$v['taid']}}][]">
									<option value="">请选择</option>
									{{foreach from="$v['tavalue']" value="$value"}}
										<option value="{{$value}}" {{if value="$v['gavalue'] eq $value"}}selected{{endif}}>{{$value}}</option>
									{{endforeach}}
								</select>
							</td>
							<td>      
<!--//							<?php isset($v['gaadd_price'])? $v['gaadd_price'] : 0; ?>-->                       
								附加价格:<input type="" name="spec[added][{{$v['taid']}}][]" value="<?php if(isset($v['gaadd_price'])){echo ($v['gaadd_price']);}else{ echo 0;} ?>" />
							</td>
							<td>
								<a href="javascript:;" class="btn btn-danger removeSpec goodsAttr{{$v['taid']}}">删除规格</a>
							</td>
						</tr>
					{{endif}}
				{{endforeach}}			
			</table>
			<?php
				//去除重复的taid
				$taid = array_unique($taid);			
			?>
			<script>
				var taid = '<?php echo json_encode($taid) ?>';
				//把js字符串转为json对象
				taid = $.parseJSON(taid);
//				alert(taid);
				//循环json
				$.each(taid, function(k,v) {
					//取第一个元素，改变class
					$('.goodsAttr'+ v).first().removeClass('removeSpec btn-danger').addClass('addSpec btn-primary').html('添加规格');
				});
				
			</script>
			<div class="btn btn-info">列表图</div><br />
			<div lab="uploadFileL">
				<!-- file表单 -->
			    <input id="f" type="file" multiple="true">
			    <span>类型: *.jpg,*.png 大小: 2000KB 数量: 10</span>
			    <script type="text/javascript">
			        $(function() {
			            $('#f').uploadify({
			                'formData'     : {//POST数据
			                    '<?php echo session_name();?>' : '<?php echo session_id();?>',
			                },
			                'fileTypeExts' : '*.jpg;*.png',
			                'swf'      : '{{__PUBLIC__}}/Admin/uploadify/uploadify.swf',
			                'uploader' : '{{U('upload')}}',//指定服务器上传的方法
			                'buttonText':'选择文件',
			                'fileSizeLimit' : '2000KB',
			                'uploadLimit' : 1,//上传文件数
			                'width':65,
			                'height':25,
			                'successTimeout':10,//等待服务器响应时间
			                'removeTimeout' : 0.2,//成功显示时间
			                'onUploadSuccess' : function(file, data, response) {
			                    //把php返回的数据转为json
			                    data=$.parseJSON(data);
			                    //获得图片地址
			                    var imageUrl = data.url;
			                    var li="<li>";
			                    li += "<img src='"+imageUrl+"' width='200'/>";
			                    li += "<input type='hidden' name='glist_map' value='"+data.path+"'/><a href='javascript:;' id='self-closeL'>X</a>";
			                    li += "</li>";
			                    $("#uploadListL ul").prepend(li);
			                    $('#imgLs').remove();
			                }
			            });
			
						//关闭图片
			            var i = 1;
			            $('#self-closeL').live('click',function(){
			                $(this).parent('li').remove();
			                i++;
			                $('#f').uploadify('settings','uploadLimit',i);			               
			            })
			        });
			    </script>
			    <div id="uploadListL">
			        <ul>
			
			        </ul>
			    </div>
			    <!--显示旧图片-->
			    <img id="imgLs" src="{{$oldGoodsData['glist_map']}}" width='200'/>	
			</div>
			
			<div class="btn btn-info">商品图册</div><br />
			
			<div lab="uploadFileT">
				<!-- file表单 -->
			    <input id="g" type="file" multiple="true">
			    <span>类型: *.jpg,*.png 大小: 2000KB 数量: 10</span>
			    <script type="text/javascript">
			        $(function() {
			            $('#g').uploadify({
			                'formData'     : {//POST数据
			                    '<?php echo session_name();?>' : '<?php echo session_id();?>',
			                },
			                'fileTypeExts' : '*.jpg;*.png',
			                'swf'      : '{{__PUBLIC__}}/Admin/uploadify/uploadify.swf',
			                'uploader' : '{{U('upload')}}',//指定服务器上传的方法
			                'buttonText':'选择文件',
			                'fileSizeLimit' : '2000KB',
			                'uploadLimit' : 0,//上传文件数
			                'width':65,
			                'height':25,
			                'successTimeout':10,//等待服务器响应时间
			                'removeTimeout' : 0.2,//成功显示时间
			                'onUploadSuccess' : function(file, data, response) {
			                    //把php返回的数据转为json
			                    data=$.parseJSON(data);
			                    //获得图片地址
			                    var imageUrl = data.url;
			                    var li="<li>";
			                    li += "<img src='"+imageUrl+"'  width='200'/>";
			                    li += "<input type='hidden' name='gdimages[]' value='"+data.path+"'/><a href='javascript:;' id='self-closeT'>X</a>";
			                    li += "</li>";
			                    $("#uploadListT ul").prepend(li);
			                }
			            });
			
						//关闭图片
			            $('#self-closeT').live('click',function(){
			                $(this).parent('li').remove();
//			               
			            })			            
			        });
			    </script>
			    <!--显示旧图片-->
			    <div id="uploadListT">
			        <ul>
						{{foreach from="$oldGoodsData['gdimages']" value="$v"}}
					    	<li style="list-style: none">
						    	<img id="imgTs" src="{{$v}}" width='200'/>
						    	<input type="hidden" name="gdimages[]" value="{{$v}}" />
						    	<a href='javascript:;' id='self-closeT'>X</a>
						    </li>	
					    {{endforeach}}
			       </ul>			        
			    </div>	
			</div>			
			
			<div class="btn btn-info">商品详情</div><br />
			<div class="form-group">
				<!--调用百度编辑器-->
				<script id="editor" type="text/plain" style="width:100%;height:500px;" name="gdinfo">{{$oldGoodsData['gdinfo']}}</script>
			    <script>
			        var ue = UE.getEditor('editor');
			    </script>			
			</div>			
							
			<input type="hidden" name="gid" value="{{$_GET['gid']}}" />	
			<button class="btn btn btn-primary btn-block" type="submit">确认修改</button>
		</form>
	</body>
</html>
