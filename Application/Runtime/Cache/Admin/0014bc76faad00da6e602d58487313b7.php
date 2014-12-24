<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<link rel="stylesheet" href="/bbs/admin/Public/css/public.css" />
	<title></title>
</head>
<body>
	<form action="/Tp3.2/bbs/index.php/Admin/Video/add_video_pro" enctype="multipart/form-data" method="post" >
		<table class="table">
			<tr>
				<td class="th" colspan="2">添加视频</td>
			</tr>
			<tr>
				<td>视频标题</td>
				<td>
					<input type="text" name="v_title" class="title"/>
				</td>
			</tr>
                    <tr>
				<td>视频来源</td>
				<td>
					<input type="text" name="video" class="title"/>
				</td>
			</tr>
			<tr>
				<td>缩略图</td>
				<td><input type="file" name="thumb"/></td>
			</tr>
                      
                    <tr>
				<td>主讲老师</td>
				<td>
					<select name='t_id'>
						<option value="">====选择讲师====</option> 
                                                <?php foreach($teacher as $v){?>
                                                <option value="<?php echo $v['t_id']?>"><?php echo $v['name']?></option>
                                                <?php }?>
					</select>
				</td>
			</tr>
		
			<tr>
				<td>视频描述</td>
				<td>
					<textarea id="editor_id" name="desc" style="width:700px;height:300px;"></textarea>
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