<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<link rel="stylesheet" href="/Tp3.2/bbs/Public/houtai/css/public.css" />
	<title></title>
</head>
<body>
	<form action="/Tp3.2/bbs/index.php/Admin/Index/article_show" method="post">
		<table class="table">
			<tr>
				<td class="th" colspan="2">添加文章</td>
			</tr>
			<tr>
				<td>文章标题</td>
				<td>
					<input type="text" name="title" class="title"/>
				</td>
			</tr>
			<tr>
				<td>栏目</td>
				<td>
					<select name='a_id'> 
						<option value="">====选择栏目====</option> 
                                                <?php foreach($array as $key => $val){?>
                                                <option value="<?php echo $val['c_title']?>"><?php echo $val['c_title']?></option>
                                                <?php }?>
					</select>
				</td>
			</tr>
			<tr>
				<td>内容</td>
				<td>
					<textarea id="editor_id" name="content" style="width:700px;height:300px;"></textarea>
				</td>
			</tr>
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