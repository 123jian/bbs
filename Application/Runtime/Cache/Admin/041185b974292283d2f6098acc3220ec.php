<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" href="/Public/css/login.css" />
	<script type="text/javascript" src="/Public/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="/Public/js/login.js"></script>
	<title></title>
</head>
<body>
	<div id="divBox">
		<form action="<?php echo U('Admin/index/admin_login_pro');?>" method="POST" id="loginForm">
			<input type="text" id="userName" name="admin_name"/>
			<input type="password" id="psd" name="admin_pwd"/>
			<input type="" value="" id="verify" name="yzm"/>
			<input type="submit" id="sub" value=""/>
			<!-- 验证码 -->
                        <div id='yzma'>
			<img src='/index.php/Admin/Index/yzm' onclick="gai()"  width="80"  height='25' id='yzm'/> 
                        </div>
                        <div id='zhu'><a href="<?php echo U('Admin/index/zhuce');?>"><img src="/Public/images/medish.jpg"></a></div>
		</form>
		<div class="four_bj">
			<p class="f_lt"></p>
			<p class="f_rt"></p>
			<p class="f_lb"></p>
			<p class="f_rb"></p>
		</div>

		<ul id="peo">
			
		</ul>
		<ul id="psd">
			
		</ul>
		<ul id="ver">
			
		</ul>
	</div>
<!--[if IE 6]>
    <script type="text/javascript" src="/bbs/admin/Public/js/iepng.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('form','background');
    </script>
<![endif]-->
</body>
   <script type="text/javascript" src="/Public/js/jq.js"></script>
   <script type="text/javascript">
    <!--
      function gai(){
                        //alert(111)
                        var yzma=document.getElementById("yzm");

                                //jq("#yzm").attr("src","/index.php/index/verify_image");
                        yzma.src="/index.php/Admin/Index/yzm";
        }
        $('#loginForm').submit(function(){
        if($('#userName').val()==''){
            alert('请输入用户名！');
            return false;
        }
        if($('#psd').val()==''){
            alert('请输入密码！');
            return false;
        }
        if($('#verify').val()==''){
            alert('请输入验证码！');
            return false;
        }
    });
     window.onload=function(){(window.onresize=function(){
            //获取可见高度
            var _h=document.documentElement.clientHeight,
            _n_h=$('#login-panel').height();
            var _login_top=(_h-_n_h-100)/2;
            $('#login-panel').animate({'margin-top':_login_top+'px'},'slow');
        })()};
        $('#userName').focus();

    //-->
    </script>
</html>