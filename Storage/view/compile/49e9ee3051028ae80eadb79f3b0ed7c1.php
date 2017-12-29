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
		<div class="alert alert-success"  style="text-align:center">货品列表</div>
		<table class="table table-bordered">
			<tr class="active">
			  <th width="120" style="text-align:center">货品ID</th>	
			  <?php foreach ($data as $v){?>		  
			  	<th style="text-align:center"><?php echo $v['taname']?></th>
			  <?php }?>
			  <th style="text-align:center">库存</th>
			  <th style="text-align:center">货号</th>
			  <th style="text-align:center">操作</th>
			</tr>
			<?php foreach ($listData as $v){?>
				<tr style="text-align:center">
					<td><?php echo $v['glid']?></td>					
					<?php foreach ($v['value'] as $value){?>
		                <td><?php echo $value['gavalue']?></td>
		            <?php }?>	
					<td><?php echo $v['gltotal']?></td>
					<td><?php echo $v['glnumber']?></td>					
					<td>						
						<a href="<?php echo U('edit',array('glid'=>$v['glid'],'zol_goods_gid'=>$v['zol_goods_gid']))?>" class="btn btn-sm btn-warning">编辑</a>
						<a href="javascript:if(confirm('确定删除吗？')) location.href='<?php echo U('del',array('glid'=>$v['glid']))?>';" class="btn btn-sm btn-danger" class="btn btn-sm btn-danger">删除</a>
					</td>
				</tr>
			<?php }?>
			<form action="<?php echo U('GoodsList/add')?>" method="post">		
				<tr style="text-align:center">
					<th>添加货品</th>
					<?php foreach ($data as $v){?>
						<td>
							<select name="combineid[]" class="form-control input-sm">
								<option value="">请选择</option>
								<?php foreach ($v['value'] as $value){?>
									<option value="<?php echo $value['gaid']?>"><?php echo $value['gavalue']?></option>
								<?php }?>
							</select>
						</td>
					<?php }?>
					<td>
						<input  class="form-control input-sm" type="text" name="gltotal"/>
					</td>
					<td>
						<input  class="form-control input-sm" type="text" name="glnumber"/>
					</td>
					<td>						
						<input type="hidden" name="zol_goods_gid" value="<?php echo $_GET['zol_goods_gid']?>" />	
						<button class="btn btn-sm btn-primary">确认添加</button>
					</td>
				</tr>
			</form>
		</table>
	</body>
</html>
