<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
<<<<<<< HEAD
	<link rel="stylesheet" href="/Public/houtai/css/public.css" />
	<script type="text/javascript" src="/Public/houtai/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="/Public/houtai/js/public.js"></script>	
=======
	<link rel="stylesheet" href="/Tp3.2/bbs/Public/houtai/css/public.css" />
	<script type="text/javascript" src="/Tp3.2/bbs/Public/houtai/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="/Tp3.2/bbs/Public/houtai/js/public.js"></script>	
>>>>>>> aca8509030f5fc402e4ed8856270c74d743c2496
</head>
<body>
	<table class="table">
		<tr>
			<td class="th" colspan="10">查看博文</td>
		</tr>
		<tr>
			<td>AID</td>
			<td>标题</td>
			<td>所属分类</td>
			<td>创作时间</td>
			<td>操作</td>
		</tr>
            <?php foreach($array as $key => $val){?>
		<tr>
			<td ><?php echo $val['id']?></td>
			<td><?php echo $val['a_title']?></td>
			<td><a href=""><?php echo $val['c_title']?></a></td>
			<td><?php echo $val['a_time']?></td>
			<td>
<<<<<<< HEAD
				<a href="/index.php/Admin/Index/edit_article_show/id/<?php echo $val['id']?>">[编辑]</a>
                                <a href="/index.php/Admin/Index/article_delete/c_id/<?php echo $val['id']?>" class="del">[删除]</a>
=======
				<a href="/Tp3.2/bbs/index.php/Admin/Index/edit_article_show/id/<?php echo $val['id']?>">[编辑]</a>
                                <a href="/Tp3.2/bbs/index.php/Admin/Index/article_delete/c_id/<?php echo $val['id']?>" class="del">[删除]</a>
>>>>>>> aca8509030f5fc402e4ed8856270c74d743c2496
			</td>
		</tr>
            <?php }?>
	</table>
	<div class="page">
		<?php echo $page ?>
	</div>
</body>
</html>