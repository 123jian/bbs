<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<link rel="stylesheet" href="/Tp3.2/bbs/Public/css/public.css" />
	<title></title>
</head>
<body>
	<form action="<?php echo U('Home/Jiuye/add_upload_pro');?>" method="post" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<td class="th" colspan="2">个人形象上传</td>
			</tr>
			<tr>
				<td>形象描述</td>
				<td>
					<input type="text" name="description" class="title"/>
				</td>
			</tr>
			<tr>
				<td>形象视频</td>
				<td>
					<input type="text" name="video" class="title"/>

				</td>
			</tr>
			<tr>
				<td>形象图片</td>
				<td>
					<input type="file" name="image" class="title"/>
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