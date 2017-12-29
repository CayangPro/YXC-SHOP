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
		<div class="alert alert-success"  style="text-align:center">分类列表</div>
		<table class="table table-bordered">
			<tr class="active">
			  <th width="80" style="text-align:center">分类ID</th>
			  <th style="text-align:center">分类名称</th>
			  <th style="text-align:center">排序</th>
			  <th style="text-align:center">所属类型</th>			
			  <th width="210" style="text-align:center">操作</th>
			</tr style="text-align:center">
			{{foreach from="$data" value="$v"}}
			<tr style="text-align:center">
				<td>{{$v['cid']}}</td>
				<td>{{$v['_name']}}</td>
				<td>{{$v['csort']}}</td>				
				<td>{{$v['tname']}}</td>
				<td>
					<a href="{{U('addSon',array('cid'=>$v['cid']))}}" class="btn btn-sm btn-primary">添加子类</a>
					<a href="{{U('edit',array('cid'=>$v['cid']))}}" class="btn btn-sm btn-warning">编辑</a>
					<a href="javascript:if(confirm('确定删除吗？')) location.href='{{U('del',array('cid'=>$v['cid']))}}';" class="btn btn-sm btn-danger">删除</a>
				</td>
			</tr>
			{{endforeach}}
		</table>
	</body>
</html>
