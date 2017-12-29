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
		<div class="alert alert-success">添加商品类型属性</div>
		<input type="hidden" name="zol_type_tid" value="{{$_GET['tid']}}"/>	
		<div class="form-group">
			<label for="exampleInputEmail1">属性名称</label>
			<input id="exampleInputEmail1" class="form-control" type="text" placeholder="请输入属性名称"  name="taname" value="">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">属性类别</label>
			<select name="tatype" class="form-control">
				<option value="0">属性</option>
				<option value="1">规格</option>
			</select>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">属性值</label>
			<textarea name="tavalue" rows="5" cols="" class="form-control" placeholder="请输入属性值，多个属性值用英文逗号隔开"></textarea>
		</div>		
		
		<button class="btn btn-primary btn-block" type="submit"> 确定 </button>
		</form>
	</body>
</html>
