<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="/Public/css/public.css" />
	<script type="text/javascript" src="/Public/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="/Public/js/public.js"></script>	
</head>
<body>
	<table class="table">
		<tr>
			<td class="th" colspan="10">查看课程</td>
		</tr>
		<tr>
			<td class="tdLittle1">AID</td>
			<td>标题</td>
			<td class="tdLittle2">课程名称</td>
			<td class="tdLtitle4">创作时间</td>
			<td class="tdLtitle7">操作</td>
		</tr>
            <?php foreach($list as $k=>$v){?>
		<tr>
			<td ><?php echo $v['k_id']?></td>
			<td><?php echo $v['k_name']?></td>
			<td><a href=""><?php echo $v['p_name']?></a></td>
			<td><?php echo $v['k_time']?></td>
			<td>
				<a href="">[置顶]</a>
				<a href="/index.php/Admin/Peixun/updcourse/id/<?php echo $v['k_id'];?>">[编辑]</a>
				<a href="/index.php/Admin/Peixun/delcourse/id/<?php echo $v['k_id'];?>" class="del">[删除]</a>
			</td>
		</tr>
            <?php } ?>
	</table>
	<div class="page">
			<?php echo $page; ?>
		</div>
</body>
</html>