<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<link rel="stylesheet" href="/Public/css/public.css" />
	<title></title>
</head>
<body>
	<form action="<?php echo U('Admin/Peixun/addpeixun');?>" method="post" enctype="multipart/form-data">
		<table class="table">
			<tr >
				<td class="th" colspan="2">添加课程</td>
			</tr>
			<tr>
				<td>课程名称</td>
				<td><input type="text" name="p_name"/></td>
			</tr>
                    
                       <tr>
				<td>课程图像</td>
				<td><input type="file" name="p_image"/></td>
			</tr>
                        <tr>
				<td>是否显示</td>
                                <td><input type="radio" name="p_show" value="1" checked="checked"/>开启
					<input type="radio" name="p_show" value="0" />关闭
                                </td>
			</tr>
			<tr>
				<td>描述</td>
				<td>
					<textarea name="p_content" id="description" class="textarea"></textarea>
				</td>
			</tr>
                    
			<tr>
				<td colspan="2">
					<input type="submit" value="添加" class="input_button"/>
					<input type="reset" class="input_button"/>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>