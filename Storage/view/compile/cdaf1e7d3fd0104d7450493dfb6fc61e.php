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
		<div class="alert alert-success"  style="text-align:center">商品列表</div>
		<table class="table table-bordered">
			<tr class="active">
			  <th width="80" style="text-align:center">商品ID</th>
			  <th style="text-align:center">商品名称</th>
			  <th style="text-align:center">价格</th>
			  <th style="text-align:center">库存</th>
			  <th style="text-align:center">点击次数</th>
			  <th style="text-align:center">上市时间</th>
			  <th style="text-align:center">操作</th>
			</tr>
			<?php foreach ($goodsData as $v){?>
				<tr style="text-align:center">
					<td><?php echo $v['gid']?></td>
					<td><?php echo $v['gname']?></td>
					<td style="text-align:left;">
						市场价: <del>&yen;<?php echo $v['gmarket_price']?></del>
						<br />
						商城价: &yen;<?php echo $v['gprice']?>
					</td>
					<td><?php echo $v['gtotal']?></td>
					<td><?php echo $v['gclick']?></td>
					<td><?php echo $v['gdate_listing']?></td>
					<td>
						<a href="<?php echo U('GoodsList/index',array('zol_goods_gid'=>$v['gid']))?>" class="btn btn-sm btn-primary">货品列表</a>
						<a href="<?php echo U('edit',array('gid'=>$v['gid']))?>" class="btn btn-sm btn-warning">编辑</a>
						<a href="javascript:if(confirm('确定删除吗？')) location.href='<?php echo U('del',array('gid'=>$v['gid']))?>';" class="btn btn-sm btn-danger" class="btn btn-sm btn-danger">删除</a>
					</td>
				</tr>
			<?php }?>
		</table>
	</body>
</html>
