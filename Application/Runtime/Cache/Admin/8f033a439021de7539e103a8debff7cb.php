<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" href="/Public/css/public.css"/>
	<title></title>
</head>
<body>
	<form action="<?php echo U('Admin/nav/nav_add_pro');?>" method="post">
		<table class="table">
			<tr>
				<td class="th" colspan="2">添加导航栏</td>
			</tr>
			<tr>
				<td>名称</td>
				<td>
					<input type="text" name="title" class="title" size="30"/>
				</td>
			</tr>
			<tr>
				<td>链接</td>
				<td>
					<input type="text" name="url" class="title" size="30" value=""/><span style="font-size:10px;color:red;">&nbsp;&nbsp;请填写控制器和方法名&nbsp;&nbsp;如：index/index</span>

				</td>
			</tr>
                    <tr>
                        <td>导航所属</td>
                        <td><select name="category">
                               <option value="0" selected>传智播客</option>
                               <option value="1">传智论坛</option>
                            </select><span style="font-size:10px;color:red;">&nbsp;&nbsp;请选择导航显示的位置</span>
                        </td>
                    </tr>
                    <tr>
				<td>是否显示</td>
				<td>
					<input type="radio" name="isset" value="1" checked="checked"/>显示
					<input type="radio" name="isset" value="0" />隐藏
				</td>
			</tr>
			<tr>
				<td>介绍</td>
				<td>
					<textarea id="editor_id" name="content" style="width:700px;height:300px;"></textarea>
				</td>
			</tr>
			<tr>
				<td>排序</td>
				<td>
					<input type="text" name="order" class="order"/>
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