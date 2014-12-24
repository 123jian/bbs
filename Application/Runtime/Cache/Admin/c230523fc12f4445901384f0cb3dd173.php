<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="/Tp3.2/bbs2/Public/css/public.css" />
	<script type="text/javascript" src="/Tp3.2/bbs2/Public/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="/Tp3.2/bbs2/Public/js/public.js"></script>	
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
            <?php foreach($data as $key => $val){?>
		<tr>
			<td ><?php echo $val['text_id']?></td>
			<td><?php echo $val['text_title']?></td>
			<td><a href=""><?php echo $val['c_name']?></a></td>
			<td><?php echo date('Y-m-d h:m:s',$val['add_time'])?></td>
			<td>
				<a href="/Tp3.2/bbs2/index.php/Admin/Huiyuan/edit_article_show/text_id/<?php echo $val['text_id']?>">[编辑]</a>
                                <a href="/Tp3.2/bbs2/index.php/Admin/Huiyuan/article_delete/text_id/<?php echo $val['text_id']?>" class="del">[删除]</a>
			</td>
		</tr>
            <?php }?>
	</table>
	<div class="page">
		<?php echo $page ?>
	</div>
</body>
</html>