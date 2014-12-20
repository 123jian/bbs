<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="/bbs/Public/css/public.css" />
	<script type="text/javascript" src="/bbs/Public/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="/bbs/Public/js/public.js"></script>	
</head>
<body>
	<table class="table">
		<tr>
			<td class="th" colspan="10">查看视频</td>
		</tr>
		<tr>
			<th>视频编号</th>
			<th>视频标题</th>
                        <th>讲师</th>
			<th>视频描述</th>
			<th>视频缩略图</th>
			<th>视频操作</th>
		</tr>
		<?php foreach($teacher as $val){?>
		<tr>
			<td align='center' ><?php echo $val['id'];?></td>
			<td align='center' ><?php echo $val['v_title'];?></td>
                        <td align='center' ><?php echo $val['name'];?></td>
			<td align='center' ><?php echo $val['desc'];?></td>
			<td align='center' ><img src="/bbs/Uploads/<?php echo $val['thumb'];?>" width="50" height="50" border="0" alt=""></td>
			
			<td align='center' >
                            <?php if($val['status']==1){?>
				<a href="/bbs/index.php/Admin/Video/video_up/id/<?php echo $val['id'];?>/status/<?php echo $val['status'];?>">[不显示]</a>
                            <?php }else{?>
                                <a href="/bbs/index.php/Admin/Video/video_up/id/<?php echo $val['id'];?>/status/<?php echo $val['status'];?>">[显示]</a>
                            <?php }?>
				<a href="/bbs/index.php/Admin/Video/video_del/id/<?php echo $val['id'];?>" class="del">[删除]</a>
			</td>
		</tr>
		<?php }?>
	</table>
		<div class="page">
			<?php echo $page ?>
		</div>
</body>
</html>