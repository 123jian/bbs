<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<link rel="stylesheet" href="/Public/houtai/css/public.css" />
	<title></title>
</head>
<body>
    <form action="<?php echo U('Admin/shizi/update_shizi');?>" method="post" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<td class="th" colspan="2">添加师资数据</td>
			</tr>
                        <?php foreach($list as $k=>$v) { ?>
			<tr>
                            <td>教师名称</td>
                            <td>
                                <input type="text" name="s_name" value="<?php echo $v['s_name'];?>" value=class="title"/>
                            </td>
			</tr>
                        <tr>
                            <td>教师头像</td>
                            <td>
                                <input type="file" name="s_image" class="title"/>
                            </td>
			</tr>
			<tr>
                            <td>栏目</td>
                            <td>
                                    <select name='z_name'>                                           
                                            <option value="">====选择栏目====</option> 
                                            <?php foreach($position as $key => $val){?>
                                            <option value="<?php echo $val['z_name']?>"><?php echo $val['z_name']?></option>
                                            <?php }?>
                                    </select>
                            </td>
			</tr>
			<tr>
                            <td>描述</td>
                            <td>
                                    <textarea id="editor_id" name="s_content" style="width:700px;height:300px;"><?php echo $v['s_content']?></textarea>
                            </td>
			</tr>
                        <tr>
                            <td>是否显示</td>
                            <td>
                                
                                显示：<input type='radio' checked="checked" name='is_show' value='1' />不显示：<input type='radio' name='is_show' value='0'/>
       
                            </td>
			</tr>
                        <tr>	
                            <td>
                               <input type='hidden' name='s_id' value="<?php echo $v['s_id'];?>"/>
                            </td>
			</tr>
                        <?php } ?>
			<tr>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="发表" class="input_button"/>
					<input type="reset" class="input_button"/>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>