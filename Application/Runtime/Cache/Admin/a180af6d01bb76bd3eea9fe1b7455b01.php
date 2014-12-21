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
			<td class="th" colspan="10" style="font-size:20px;">导航列表</td>
		</tr>
		<tr>
			<td class="tdLittle1" style="font-size:16px;font-weight:bold;">ID</td>
			<td class="tdLittle4" style="font-size:16px;font-weight:bold;">导航名称</td>
			<td class="tdLittle2" style="font-size:16px;font-weight:bold;">导航url</td>
                        <td class="tdLittle5" style="font-size:16px;font-weight:bold;">导航所属</td>
			<td style="font-size:16px;font-weight:bold;">介绍</td>
                        <td class="tdLittle3" style="font-size:16px;font-weight:bold;">状态</td>
                        <td class="tdLittle6" style="font-size:16px;font-weight:bold;">排序</td>
			<td class="tdLtitle7" style="font-size:16px;font-weight:bold;">操作</td>
		</tr>
           <?php foreach($data as $key => $val){?>
		<tr>
			<td><?php echo $val['nav_id']?></td>
			<td><?php echo $val['nav_name']?></td>
			<td><?php echo $val['nav_url']?></td>
                        <td><?php if($val['nav_category']==0){echo "传智播客";}else{echo "传智论坛";}?></td>
			<td><?php echo $val['nav_content']?></td>
                        <td><?php if($val['isset']==1){echo "显示";}else{echo "隐藏";}?></td>
                        <td><?php echo $val['order']?></td>
			<td>
                                <?php if($val['isset']==1){?>
                                <a href="/Tp3.2/bbs2/index.php/Admin/Nav/nav_isset_a/nav_id/<?php echo $val['nav_id']?>">[隐藏]</a>
                                <?php }else{ ?>
                                <a href="/Tp3.2/bbs2/index.php/Admin/Nav/nav_isset_b/nav_id/<?php echo $val['nav_id']?>">[显示]</a>
                                <?php } ?>
                               <a href="/Tp3.2/bbs2/index.php/Admin/Nav/nav_edit/nav_id/<?php echo $val['nav_id']?>">[编辑]</a>
				<a href="/Tp3.2/bbs2/index.php/Admin/Nav/nav_delete/nav_id/<?php echo $val['nav_id']?>">[删除]</a>
			</td>
		</tr>
            <?php }?>
	</table>
	<div class="page">
		<?php echo $page ?>
	</div>
</body>
</html>