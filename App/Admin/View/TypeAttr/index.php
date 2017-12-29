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
		<div class="alert alert-success"  style="text-align:center">属性列表</div>
		<div style="text-align:left">
			<a href="{{U('TypeAttr/add',array('tid'=>$_GET['tid']))}}" class="btn btn-info">添加属性</a>
			<input type="hidden" name="zol_type_tid"  value="{{$_GET['tid']}}" />
			<a href="{{U('Type/index')}}" class="btn btn-success">返回列表页</a>
		</div>
		<br />		
		<table class="table table-bordered">			
			<tr class="active" style="text-align:center">
			  <th style="text-align:center">属性ID</th>
			  <th style="text-align:center">属性名称</th>
			  <th style="text-align:center">属性类别</th>
			  <th style="text-align:center">属性值</th>
			  <th style="text-align:center">操作</th>
			</tr>
			{{foreach from="$data" value="$v"}}
			<tr style="text-align:center">
				<td>{{$v['taid']}}</td>
				<td>{{$v['taname']}}</td>				
				{{if value="$v['tatype'] eq 1"}}
					<td>规格</td>
				{{elseif value="$v['tatype'] eq 0"}}
					<td>属性</td>
				{{endif}}
				<td  style="text-align:left">{{$v['tavalue']}}</td>
				<td>
					<a href="{{U('TypeAttr/edit',array('taid'=>$v['taid']))}}" class="btn btn-sm btn-warning">修改</a>
					<a href="javascript:if(confirm('确定删除吗？')) location.href='{{U('del',array('taid'=>$v['taid']))}}'" class="btn btn-sm btn-danger">删除</a>
					<!--<a href="{{U('TypeAttr/add',array('tid'=>$v['zol_type_tid']))}}"class="btn btn-info">添加属性</a>-->
				</td>						
			</tr>
			{{endforeach}}							
		</table>
	</body>
</html>
