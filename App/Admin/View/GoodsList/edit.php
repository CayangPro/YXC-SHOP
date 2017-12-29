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
	    
	</head>
	<body>		
		<div class="alert alert-success"  style="text-align:center">编辑货品</div>
		<table class="table table-bordered">
			<tr class="active">
			  <th width="120" style="text-align:center">货品ID</th>	
			  {{foreach from="$data" value="$v"}}		  
			  	<th style="text-align:center">{{$v['taname']}}</th>
			  {{endforeach}}
			  <th style="text-align:center">库存</th>
			  <th style="text-align:center">货号</th>
			  <th style="text-align:center">操作</th>
			</tr>
			<!--{{foreach from="$listData" value="$v"}}
				<tr style="text-align:center">
					<td>{{$v['glid']}}</td>					
					{{foreach from="$v['value']" value="$value"}}
		                <td>{{$value['gavalue']}}</td>
		            {{endforeach}}	
					<td>{{$v['gltotal']}}</td>
					<td>{{$v['glnumber']}}</td>					
					<td>						
						<input type="hidden" name="zol_goods_gid" value="{{$_GET['zol_goods_gid']}}" />	
						<a href="{{U('edit',array('glid'=>$v['glid']))}}" class="btn btn-sm btn-warning">确认编辑</a>
					</td>
				</tr>
			{{endforeach}}-->
			<form action="{{U('GoodsList/edit')}}" method="post">		
				<tr style="text-align:center">
					<th>编辑货品</th>
					{{foreach from="$data" value="$v"}}
						<td>
							<select name="combineid[]" class="form-control input-sm">
								<option value="">请选择</option>
								{{foreach from="$v['value']" value="$value"}}
									<option value="{{$value['gaid']}}" {{if value="in_array($value['gaid'],$cid)"}}selected{{endif}} >{{$value['gavalue']}}</option>
								{{endforeach}}
							</select>
						</td>
					{{endforeach}}
					<td>
						<input  class="form-control input-sm" type="text" name="gltotal" value="{{$oldGoodsListData['gltotal']}}"/>
					</td>
					<td>
						<input  class="form-control input-sm" type="text" name="glnumber" value="{{$oldGoodsListData['glnumber']}}"/>
					</td>	
					<td>						
						<input type="hidden" name="glid" value="{{$_GET['glid']}}" />	
						<input type="hidden" name="zol_goods_gid" value="{{$_GET['zol_goods_gid']}}" />	
						<button class="btn btn-sm btn-warning">确认修改</button>
					</td>				
				</tr>
			</form>
		</table>
	</body>
</html>
