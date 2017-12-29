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
		<div class="alert alert-success"  style="text-align:center">类型列表</div>
		<table class="table table-bordered">
			<tr class="active">
			  <th width="80" style="text-align:center">类型ID</th>
			  <th style="text-align:center">类型名称</th>
			  <th style="text-align:center">类型排序</th>
			  <th width="210" style="text-align:center">操作</th>
			</tr>
			{{foreach from="$data" value="$v"}}
				<tr style="text-align:center">
					<td>{{$v['tid']}}</td>
					<td>{{$v['tname']}}</td>
					<td>{{$v['tsort']}}</td>
					<td>
						<a href="{{U('TypeAttr/index',array('tid'=>$v['tid']))}}" class="btn btn-sm btn-primary">属性列表</a>
						<a href="{{U('edit',array('tid'=>$v['tid']))}}" class="btn btn-sm btn-warning">编辑</a>
						<a href="javascript:if(confirm('确定删除吗？')) location.href='{{U('del',array('tid'=>$v['tid']))}}';" class="btn btn-sm btn-danger" class="btn btn-sm btn-danger">删除</a>
					</td>
				</tr>
			{{endforeach}}
		</table>
		<style type="text/css">
			#showPage ul.pagination li{
				background:#364150;
				margin-left:4px;
			}
		</style>
		<center id="showPage">
			<ul class="pagination">
				{{$page}}
			</ul>
		</center>
	</body>
</html>
