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
		
			<div class="alert alert-success">添加分类</div>
			<div class="form-group">
				<label for="exampleInputEmail1">分类名称</label>
				<input id="exampleInputEmail1" class="form-control" type="text" placeholder="请输入分类名称" required="" name="cname">
			</div>
			
			<div class="form-group">
				<label for="exampleInputEmail1">所属分类</label>
				<select name="pid" class="form-control">
					<option value="{{$cate['cid']}}">{{$cate['cname']}}</option>
				</select>
			</div>
			
			<div class="form-group">
				<label for="exampleInputEmail1">分类排序</label>
				<input id="exampleInputEmail1" class="form-control" type="text" placeholder="请输入分类排序" required="" name="csort" value="100">
			</div>
			
			<input type="hidden" name="zol_type_tid"  value="{{$cate['zol_type_tid']}}" />		
			<button class="btn btn-primary btn-block" type="submit">确定 </button>
		</form>
	</body>
</html>
