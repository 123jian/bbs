<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="/Tp3.2/bbs/Public/houtai/css/public.css" />
	<script type="text/javascript" src="/Tp3.2/bbs/Public/houtai/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="/Tp3.2/bbs/Public/houtai/js/public.js"></script>	
</head>
<body>
	<table class="table">
		<tr>
			<td class="th" colspan="10">查看栏目</td>
		</tr>
		<tr>
			<th>CID</th>
			<th>栏目名称</th>
                        <th>修改时间</th>
			<th>操作</th>
		</tr>
		<?php foreach($data as $key => $val){ ?>
		<tr>

			<td><?php echo $val['c_id']?></td>
			<td><a href=""><?php echo $val['c_title']?></a></td>
                        <td><a href=""><?php echo $val['c_time']?></a></td>
			<td>
				<a href="/Tp3.2/bbs/index.php/Admin/Index/edit_category_show/?c_id=<?php echo $val['c_id']?>">[编辑]</a>
                                <a href="/Tp3.2/bbs/index.php/Admin/Index/category_delete?c_id=<?php echo $val['c_id']?>" class="del">[删除]</a>
			</td>
		</tr>
		<?php }?>
	</table>
		<div class="page">
			<?php echo $page?>
		</div>
</body>
</html>