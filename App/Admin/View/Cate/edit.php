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
		<form action="" method="post">
		<div class="alert alert-success">编辑分类</div>
		<div class="form-group">
			<label for="exampleInputEmail1">分类名称</label>
			<input id="exampleInputEmail1" class="form-control" type="text" placeholder="请输入分类名称"  name="cname" value="{{$oldData['cname']}}">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">所属类型</label>
			<select name="zol_type_tid" class="form-control">
				<option value="0">请选择</option>
				{{foreach from="$typeData" value="$v"}}
					<option value="{{$v['tid']}}"  {{if value="$oldData['zol_type_tid'] eq $v['tid']"}} selected="selected" {{endif}} >{{$v['tname']}}</option>					
				{{endforeach}}
			</select> 
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">所属分类</label>
			<select name="pid" class="form-control">
				<option value="0">顶级分类</option>
				{{foreach from="$cateData" value="$v"}}
					<option value="{{$v['cid']}}"  {{if value="$oldData['pid'] eq $v['cid']"}}selected{{endif}} >{{$v['_name']}}</option>					
				{{endforeach}}
			</select>
		</div>
		
		<div class="form-group">
			<label for="exampleInputEmail1">分类排序</label>
			<input id="exampleInputEmail1" class="form-control" type="text" placeholder="请输入分类排序"  name="csort" value="{{$oldData['csort']}}">
		</div>
		<input type="hidden" name="cid" value="{{$_GET['cid']}}"/>
		<button class="btn btn-primary btn-block" type="submit"> 确定 </button>
		</form>
	</body>
</html>
