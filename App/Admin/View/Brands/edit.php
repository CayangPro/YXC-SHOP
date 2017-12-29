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
		<form action="" method="post" enctype="multipart/form-data">
		<div class="alert alert-success">编辑品牌</div>
		<div class="form-group">
			<label for="exampleInputEmail1">品牌名称</label>
			<input id="exampleInputEmail1" class="form-control" type="text" placeholder="请输入分类名称"  name="bname"  value="{{$oldData['bname']}}">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">logo图</label>
			<input type="hidden" name="blogo" value="{{$oldData['blogo']}}" />
			<input id="exampleInputEmail1" type="file"  name="blogo" >
			<img src="{{$oldData['blogo']}}"/>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">品牌排序</label>
			<input id="exampleInputEmail1" class="form-control" type="text" placeholder="请输入分类排序"  name="bsort" value="{{$oldData['bsort']}}">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">热门</label>
			<input type="radio" name="bhot" value="是" />
			<label for="exampleInputEmail1">非热门</label>
			<input type="radio" name="bhot" value="否"/>
		</div>
		<input type="hidden" name="bid" value="{{$_GET['bid']}}" />
		<button class="btn btn-primary btn-block" type="submit"> 确定 </button>
		</form>
	</body>
</html>

