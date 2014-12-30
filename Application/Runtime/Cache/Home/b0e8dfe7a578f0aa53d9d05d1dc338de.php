<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="php培训,php教程,php视频,php下载,php视频教程" />
<meta name="description" content="php培训的龙头老大,口碑最好的php培训机构,进来看看同学们的呐喊，就会知道我们是个怎么样的学校,问天下php培训机构谁与争锋?php培训课程内容包含目前最流行的zendframework、thinkphp框架、ECShop、dedecms等产品的二次开发" />
<title>传智播客PHP学院官网-北京PHP培训_PHP网站开发培训_PHP程序员培训学校</title>
<link href="/Public/shouye/css/css.css" type="text/css" rel="stylesheet" />
<link href="/Public/shouye/css/nav_main.css" type="text/css" rel="stylesheet" />
<link href="/Public/shouye/css/imageswitch.css" type="text/css" rel="stylesheet" />
<link href="/Public/shouye/css/webim.css" type="text/css" rel="stylesheet" />
<link type="image/x-icon" rel="shortcut icon" href="favicon.ico" /> 
<script type="text/javascript" src="/Public/shouye/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/Public/shouye/js/imageschange.js"></script>
<script type="text/javascript" id="bdshare_js" data="type=tools" ></script>
<script type="text/javascript" id="bdshell_js"></script>

</head>

<body>	
	<div id="header">
	<!-- 页面顶部 -->
<div class="top1">

	<p class="fr">
            <?php if(empty($_SESSION['name'])){?>
            <a href="/index.php/home/index/login">登录注册</a>
            <?php }else{ ?>
            <span color='red'><?php echo $_SESSION['name']?><a href="/index.php/home/index/loginout">退出</a></span>
            <?php }?>
     </p>
</div>

	<div class="clear"></div>
	<div class="top2">
		<h1 class="fl"><a href="/index.php"><img src="/Public/shouye/images/logo6.jpg" width='180' height='95' alt="传智播客php培训学院" border="0"  class="png"/></a></h1>
		<div class="fl toubu">
		<div class="toubu-font1">PHP学院</div>
			 <!-- 校区 -->
<p><a href="http://www.itcast.cn" target="_blank">北京校区</a></p>
<p><a target="_blank" href="http://sh.itcast.cn">上海校区</a></p>
<p><a href="http://gz.itcast.cn" target="_blank">广州校区</a></p><br />
<p><a target="_blank" href="http://wh.itcast.cn">武汉校区</a></p>
<p><a href="http://cd.itcast.cn" target="_blank">成都校区</a></p>
<p><a href="http://zz.itcast.cn" target="_blank">郑州校区</a></p><br />
<p><a href="http://xa.itcast.cn" target="_blank">西安校区</a></p>
<!-- 校区 --> 
		</div>
		<p class="fr"><img src="/Public/shouye/images/topword.gif" alt="改变中国教育，我们正在行动..." class="png"/></p>
	</div>
	<div class="clear"></div>
	<ul id="nav">
<?php foreach($nav as $key => $val){?>
	<li nid="nav_life" width="15%"><a href="/index.php/<?php echo $val['nav_url']?>" id="nav_main"><?php echo $val['nav_name']?></a></li>
<?php }?>
	<li nid="nav_life" width="15%"><a href="/discuz/upload/forum.php" id="nav_main" target="_blank">技术论坛</a></li>
</ul>
	</div>


<?php
session_start(); if($_POST){ if($_POST['mobile']!=$_SESSION['mobile'] or $_POST['mobile_code']!=$_SESSION['mobile_code'] or empty($_POST['mobile']) or empty($_POST['mobile_code'])){ exit('手机验证码输入错误。'); }else{ echo "<script>location.href='/index.php/index/zhmm_pro';</script>"; } } function random($length = 6 , $numeric = 0) { PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000); if($numeric) { $hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1)); } else { $hash = ''; $chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789abcdefghjkmnpqrstuvwxyz'; $max = strlen($chars) - 1; for($i = 0; $i < $length; $i++) { $hash .= $chars[mt_rand(0, $max)]; } } return $hash; } $_SESSION['send_code'] = random(6,1); ?>

<DIV id="box">
<DIV class="mbx"><!-- Baidu share BEGIN -->
<DIV id="bdshare" class="bdshare_t bds_tools get-codes-bdshare"><SPAN class="bds_more">分享到：</SPAN><A 
class="bds_sqq">QQ好友</A><A class="bds_qzone">QQ空间</A><A 
class="bds_tqq">腾讯微博</A><A class="bds_tsina">新浪微博</A><A 
class="bds_tieba">百度贴吧</A><A class="shareCount"></A></DIV><!-- Baidu share END 需在页面底部添加baidushare.js -->
<DIV 
style="padding-left: 60px; float: left; _padding-top: 8px;"><B>其它学院入口：</B><IMG 
src="/Public/shouye/images/sanjiao.jpg"> <A href="http://java.itcast.cn/" 
target="_blank">java学院</A> <IMG src="/Public/shouye/images/sanjiao.jpg"> 
<A href="http://net.itcast.cn/" target="_blank">.net学院</A><IMG src="/Public/shouye/images/sanjiao.jpg"> 
<A href="http://ios.itcast.cn/">ios学院</A> <IMG src="/Public/shouye/images/sanjiao.jpg"> 
<A href="http://c.itcast.cn/">c/c++学院</A><IMG src="/Public/shouye/images/sanjiao.jpg"> 
<A href="http://icd.itcast.cn/" target="_blank">网页平面设计学院</A></DIV></DIV>

<DIV style="margin-top: 3px;" id="left" class="fl">
<DIV><IMG 
src="/Public/shouye/images/lefttop.gif"></DIV>
<DIV class="left_content2">
    <form action="/index.php/index/zhmm" method="post" name="formUser">
	<table width="100%"  border="0" align="left" cellpadding="5" cellspacing="3">
	<tr>
		<td align="right">请输入用户名：<td>
		<input id="username" name="username" type="text" size="25" class="inputBg" onblur="get_mobile()"/>
		<span style="color:#FF0000"> *</span><input id="zphone" type="button" value=" 获取手机验证码 " onClick="get_mobile_code();"> </td>
        </tr>		
		<input id="mobile" name="mobile" type="hidden" size="25" class="inputBg" readonly />
       </td>
       
		<tr>
			<td align="right">验证码：</td>
			<td><input type="text" size="8" name="mobile_code" class="inputBg" /></td>
		</tr>
		<tr>
			<td align="right"></td>
			<td><input type="submit" value=" 注册 " class="button">
			<input type="button" value=" 获取 " class="button" onclick="aa()"></td>
		</tr>
	</table>
</form>
</div>  </div><br><br><br><br><br>

<script type="text/javascript" src="/Public/js/jquery-message.js"></script>
<script type="text/javascript" src="/Public/js/jquery-suke.js"></script>
<script type="text/javascript" src="/Public/js/jq.js"></script>
<script language="javascript">
function aa(){
	var name=$("#username").val();
	location.href="http://www.bbs.com/index.php/index/hqsj?username="+name;
}

//通过用户名获取手机号码
	function get_mobile(){
		
		var name=$("#username").val();
		//alert(name);
		if(name==''){
			alert('请输入用户名！');
			return false;
		}
		
		$.ajax({			
			url:"http://www.bbs.com/index.php/index/hqsj",
			data:{"username":name},
			type:"get",
			dataType:"jsonp",
			jsonp:'callback',
            success: function(msg){
				alert(msg);
			}
		})
		
	}

	//获取手机验证码
	function get_mobile_code(){
		//alert($);		
        $.post('/sms.php', {mobile:jQuery.trim($('#mobile').val()),send_code:<?php echo $_SESSION['send_code'];?>}, function(msg) {
            alert(jQuery.trim(unescape(msg)));
			if(msg=='提交成功'){
				RemainTime();
			}
        });
	}
	var iTime = 59;
	var Account;
	function RemainTime(){
		document.getElementById('zphone').disabled = true;
		var iSecond,sSecond="",sTime="";
		if (iTime >= 0){
			iSecond = parseInt(iTime%60);
			iMinute = parseInt(iTime/60)
			if (iSecond >= 0){
				if(iMinute>0){
					sSecond = iMinute + "分" + iSecond + "秒";
				}else{
					sSecond = iSecond + "秒";
				}
			}
			sTime=sSecond;
			if(iTime==0){
				clearTimeout(Account);
				sTime='获取手机验证码';
				iTime = 59;
				document.getElementById('zphone').disabled = false;
			}else{
				Account = setTimeout("RemainTime()",1000);
				iTime=iTime-1;
			}
		}else{
			sTime='没有倒计时';
		}
		document.getElementById('zphone').value = sTime;
	}	
</script>
<div id="footer">
  <div class="footer_info">
    <p class="fl mar"><!--<img src="/images/footlogo.jpg" />--></p>
    <p><a style="padding-left:0;" target="_blank" href="http://www.itcast.cn/channel/introduction.shtml">传智简介</a>|<a target="_blank" href="http://weibo.com/itcast">官方微博</a>|<a target="_blank" href="http://bbs.itcast.cn/forum.php?mod=forumdisplay&amp;fid=175&amp;filter=typeid&amp;typeid=180">传智快报</a>|<a target="_blank" href="http://bbs.itcast.cn/forum.php?mod=forumdisplay&amp;fid=184&amp;filter=typeid&amp;typeid=217">校区活动</a>|<a target="_blank" href="http://www.itcast.cn/channel/campus.shtml">校园生活</a>|<a target="_blank" href="http://www.itcast.cn/channel/personnel.shtml">人才服务</a>|<a target="_blank" href="http://www.itcast.cn/channel/flow.shtml">汇款账号</a>|<a target="_blank" href="http://www.itcast.cn/channel/zhaopin.shtml">招贤纳士</a>|<a target="_blank" href="http://www.itcast.cn/channel/contact.shtml">联系我们</a></p>
    <p>传智播客-专业java培训、.net培训、php培训、iOS培训、C++培训、网页设计、平面设计、网络营销培训机构</p>
    <p>版权所有 2006 - 2014 北京传智播客教育科技有限公司</p>
    <p>地址：北京市昌平区建材城西路金燕龙办公楼一层 邮编：100096</p>
    <p>电话：010-82935150/60/70 传真：010-82935100 邮箱: zhanghj+itcast.cn</p>
<p><a target="_blank" href="http://www.miibeian.gov.cn/">京ICP备08001421号</a><a target="_blank" href="http://www.bjgaj.gov.cn/web/">京公网安备110108007702</a></p>
	<p style="padding-top:10px"><a target="_blank" href="http://webscan.360.cn/index/checkwebsite/url/www.itcast.cn" style="overflow:hidden; margin-right:6px; padding:0;"><img width="124" height="47" src="http://www.itcast.cn/images/360anquan.png"></a><a target="_blank" href="http://t.knet.cn/index_new.jsp" style="overflow:hidden; margin-right:6px; padding:0;"><img width="124" height="47" src="http://www.itcast.cn/images/cx.png"></a><a style="padding:0;" href="http://www.bj.cyberpolice.cn/index.do" target="_blank"><img width="124" height="47" src="http://www.itcast.cn/images/jc.png"></a></p>
  </div>
</div>



<body>