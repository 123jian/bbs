<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="/Tp3.2/bbs/Public/css/public.css" />
	
</head>
<body>
	<table class="table">
		<tr>
			<td class="th" colspan="10">查看职位</td>
		</tr>
		<tr>
			<td class="tdLittle1">ID</td>
			<td class="tdLittle2">名称</td>
			<td class="tdLittle2">描述</td>
			
			<td class="tdLtitle7">操作</td>
		</tr>
		<?php foreach($list as $k=>$v){ ?>
		<tr>
			<td ><?php echo $v['z_id'];?></td>
			<td><?php echo $v['z_name'];?></td>
			<td><?php echo $v['z_content'];?></td>
			<td>
                            <a href="<?php echo U('Home/position/edit_position');?>?z_id=<?php echo $v['z_id'];?>">[编辑]</a>
                            <a href="<?php echo U('Home/position/delete_position');?>?z_id=<?php echo $v['z_id'];?>">[删除]</a>
			</td>		
		</tr>
                <?php } ?>
	</table>
    <div class="page">   
          <?php echo $page;?>          
    </div>
</body>
</html>