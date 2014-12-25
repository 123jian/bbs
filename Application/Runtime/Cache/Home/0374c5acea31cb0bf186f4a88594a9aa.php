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
		<h1 class="fl"><a href="http://www.bbs.com/bbs/index.php"><img src="/Public/shouye/images/logo6.jpg" width='170' height='66' alt="传智播客php培训学院" border="0"  class="png"/></a></h1>
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
	</body>
<div id="box">
		    <div class="mbx">
			<!-- Baidu share BEGIN -->
    <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
        <span class="bds_more">分享到：</span>
        <a class="bds_sqq">QQ好友</a>
		<a class="bds_qzone">QQ空间</a>
		<a class="bds_tqq">腾讯微博</a>
		<a class="bds_tsina">新浪微博</a>
		<a class="bds_tieba">百度贴吧</a>
		<a class="shareCount"></a>
    </div>
<!-- Baidu share END 需在页面底部添加baidushare.js -->
			   <div style="padding-left:10px;float:left;">
			     <b>其它学院入口：</b>  <img src="/Public/shouye/images/sanjiao.jpg" /> <a href="http://net.itcast.cn">.net学院</a> <img src="/Public/shouye/images/sanjiao.jpg" /> <a href="http://java.itcast.cn">java学院</a>  <img src="/Public/shouye/images/sanjiao.jpg" /> <a href="http://icd.itcast.cn">网页平面设计学院</a>
			   </div>
			</div>
			  <div id="left" class="fl"  style="margin-top:3px;">
			<div><img src="/Public/shouye/images/lefttop.gif"/></div>
			<div class="jyjb">
			<div><img src="/Public/shouye/images/kcjs-tu.jpg" /></div>
			 ﻿
<div class="kcjs">
<style type="text/css">
.kcnr-table{ line-height:20px;}
	.kcnr-table li{ list-style-image:url(/Public/shouye/images/20120718144154342.jpg); margin-left:15px;;</style>
</div>
<ol>
    <?php foreach($list as $k=>$v){?>
    
<li class="fl" style="width:141px;"><img src="/bbs/upload/<?php echo $v['p_image'];?>" width="100" height="100"></li>
<li class="fl jyjb-11-font1" style=" width:470px;"><b class="jyjb-11-font2"><a href="http://php.itcast.cn/php/course/base.shtml" target="_blank"><?php echo $v['p_name']?></a></b>
<p><?php echo $v['p_content']?></p>
</li>

</ol>
<table border="0" cellpadding="0" cellspacing="0" class="kcnr-table" width="99%">
<tbody>
      <?php foreach($list1 as $k=>$val) { if($val['p_id']==$v['p_id']) { ?>  
      
	<tr>
	<td>PHP基础班课程名称</td>
        
	<td><strong><a href="http://php.itcast.cn/php/course/base.shtml" target="_blank"><?php echo $val['k_name']?></a></strong></td>
	</tr>
	<tr>
	<td width="22%"><br />
	课程介绍</td>
	<td width="78%">
	<p></p>
	<ul>
	
	<li><?php echo $val['k_content']?></li>
	</ul>
	</td>
	</tr>
        
        <?php } } ?>
	
</tbody>

</table>
<?php }?>
<div class="page">
			<?php echo $page; ?>
		</div>
<br />
<br />

			</div>
			<div><img src="/Public/shouye/images/leftbottom.gif"/></div>
				<div></div>
		</div>		
		<div id="right" class="fl">			
			<h4 class="righttitle1" style="margin-top:10px;"><span class="fl">PHP培训开班信息</span></h4>
			<div class="jyjb-left" >
                <ul>
 <?php foreach($list as $k1=>$v1){?>
<li style="border-bottom: medium none; float: left; color: #515151"><a href="http://php.itcast.cn/php/course/base.shtml"><b><font style="color: #515151"><?php echo $v1['p_name']?></font></b></a></li>
<br />
</ul>

<ul style="clear: both">
   <?php foreach($list1 as $k=>$val) { if($val['p_id']==$v1['p_id']) { ?>  
    
<li><a href="http://php.itcast.cn/php/course/base.shtml" target="_blank"><span class="time jyjb-font2"><b></b></span><?php echo $val['k_name']?></a></li>
 <?php } } ?>
</ul>
<?php  } ?>
<ul>
			</div>
			<div class="rightbottom"><img src="/Public/shouye/images/rightbottom.jpg"/></div>
			<h4 class="righttitle1 lianxi"><span class="fl"><span class="blue">课程</span>咨询</span></h4>
			
			<div class="rightkuang">
			<dl>
	<dt style="padding-bottom:20px;">
		北京传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="北京传智播客QQ在线咨询" border="0" height="27" src="/Public/shouye/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="北京传智播客QQ在线咨询" border="0" height="27" src="/Public/shouye/images/qqkczx.jpg" width="99" /></a></dd>
</dl>

			<div class="clear"></div>	
			</div>
	  </div>
	</div>		
	<div class="clear"></div>
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