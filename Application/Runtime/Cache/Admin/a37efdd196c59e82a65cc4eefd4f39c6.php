<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="/Tp3.2/bbs/Public/houtai/css/public.css" />
	
</head>
<body>
	<table class="table">
		<tr>
			<td class="th" colspan="10">被放入回收站的讲师</td>
		</tr>
		<tr>
			<td class="tdLittle1">ID</td>
			<td class="tdLittle2">讲师名称</td>
			<td class="tdLittle2">职位名称</td>
			<td class="tdLtitle4">专业描述</td>
			<td class="tdLtitle7">操作</td>
		</tr>
            <?php foreach($list as $k=>$val) { ?>
		<tr>
			<td ><?php echo $val['s_id']?></td>
			<td><?php echo $val['s_name']?></td>
			<td><a href=""><?php echo $val['z_name']?></a></td>
			<td> <?php echo mb_substr($val['s_content'],0,16,'utf-8').'........';?></td>
			<td>
                            <a href="" onclick="huifu(<?php echo $val['s_id'];?>)">[恢复]</a>
				<a href="" class="del" onclick="del(<?php echo $val['s_id'];?>)">[彻底删除]</a>
			</td>
		</tr>
            <?php } ?>
	</table>
        <div class="page">
		<?php echo $page;?>
	</div>
</body>
</html>
<script src="/Public/js/jq.js"></script>
<script>
    function huifu(s_id){
        $.ajax({
            url:"<?php echo U('Admin/shizi/huifu');?>",
            data:{"s_id":s_id},
            type:"post",
            success:function(){
            }
        })
    }
    function del(s_id){
        $.ajax({
            url:"<?php echo U('Admin/shizi/delete_shizi');?>",
            data:{"s_id":s_id},
            type:"post",
            success:function(){
            }
        })
    }
    
</script>