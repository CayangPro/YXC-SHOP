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
		<table class="table table-bordered">
			<tr class="active">
			  <th width="80" style="text-align:center">品牌ID</th>
			  <th style="text-align:center">品牌名称</th>
			  <th style="text-align:center">品牌Logo</th>
			  <th style="text-align:center">排序</th>
			  <th style="text-align:center">是否热门</th>			
			  <th width="210" style="text-align:center">操作</th>
			</tr>
			{{foreach from="$data" value="$v"}}
			<tr style="text-align:center">
				<td>{{$v['bid']}}</td>
				<td>{{$v['bname']}}</td>
				<td><img src="{{$v['blogo']}}" /></td>
				<td>{{$v['bsort']}}</td>
				<td>{{$v['bhot']}}</td>
				<td>
					<a href="{{U('edit',array('bid'=>$v['bid']))}}" class="btn btn-sm btn-warning">编辑</a>
					<a href="javascript:if(confirm('确定删除吗？')) location.href='{{U('del',array('bid'=>$v['bid']))}}';" class="btn btn-sm btn-danger">删除</a>
				</td>
			</tr>
			{{endforeach}}
		</table>
	</body>
</html>
