<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="/bbs/admin/Public/css/public.css" />
		
</head>
<body>
	<table class="table">
		<tr>
			<td class="th" colspan="10">查看师资数据</td>
		</tr>
		<tr>
			<td class="tdLittle1">ID</td>
			<td>讲师名称</td>
			<td class="tdLittle2">职位名称</td>
			<td class="tdLtitle4">专业描述</td>
			<td class="tdLtitle7">操作</td>
		</tr>
            <?php foreach($list as $key => $val){?>
		<tr>
			<td ><?php echo $val['s_id']?></td>
			<td><?php echo $val['s_name']?></td>
			<td><a href=""><?php echo $val['z_name']?></a></td>
			<td> <?php echo substr($val['s_content'],0,35).'........';?></td>
			<td>
				<a href="" onclick="is_show(<?php echo $val['s_id'];?>,<?php echo $val['is_show'];?>)">[<?php if($val['is_show']==1){echo '隐藏';}else{echo '显示';}?>]</a>
                                <a href="<?php echo U('shizi/edit_shizi');?>?s_id=<?php echo $val['s_id'];?>">[编辑]</a>
				<a href="" onclick="is_del(<?php echo $val['s_id'];?>)">[删除]</a>
			</td>
		</tr>
            <?php }?>
	</table>
	<div class="page">
		<?php echo $page;?>
	</div>
</body>
</html>
<script src="/Public/js/jquery.js"></script>
<script>
    function is_show(s_id,is_show){
        $.ajax({
            url:"<?php echo U('shizi/is_show');?>",
            data:{"s_id":s_id,"is_show":is_show},
            type:"post",
            success:function(){
            }
        })
    }
    function is_del(s_id){
        $.ajax({
            url:"<?php echo U('shizi/is_del');?>",
            data:{"s_id":s_id},
            type:"post",
            success:function(){
            }
        })
    }
    
</script>