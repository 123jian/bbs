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

<div id="box">
	<div id="left" class="fl"  style="margin-top:3px;">
	<div><img src="/Public/images/lefttop.gif"  /></div>
		<div class="jyjb">
			<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="jyjb-11">
                    <ul>
                    <li class="fl jyjb-11-font1" style="height:96px;"><a href="<?php echo U('Jiuye/detial');?>?id=
<?php echo ($v["id"]); ?>"><img alt="传智播客php培训学院就业学生" src="/upload/<?php echo ($v["image"]); ?>" style="width: 130px; height: 93px;" 
/></a></li>
                    <li class="fl jyjb-11-font1" style="height:100px;">
                        <span style="color:#000000;">
                            <b><?php echo ($v["description"]); ?><br /></b>
                        </span><br />
                    <span class="jyjb-font2"><a href="<?php echo U('Jiuye/detial');?>?id=<?php echo ($v["id"]); ?>">[播放]</a></span></li>
                    </ul>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        <br />
			 <div class="clear"></div>
<table border="0" cellpadding="0" cellspacing="0" class="jiuye" width="97%">
<tbody>
	<tr>
	<th class="zhanshi" style="color:red;margin-bottom:0;border-bottom:0;font-

size:12px;background-color:#ecf6fd;">
		传智播客所有就业信息皆真实可靠，可联络就业学员验证；应企业和学员要求，企业名称和部分学员信息未呈现。</th>
	</tr>
</tbody>
</table>
<div class="zhanshi">
<h4><span class="fr" style="font-weight: normal; margin-right: 30px"><a href="#">更多 </a></span>12月20日PHP就业班部分学员就业喜报</h4>
<div><img alt="" src="http://www.itcast.cn/files/image/201408/20140811153535947.jpg" style="width: 628px; height: 266px;" /></div>
</div>
<form action="<?php echo U('Jiuye/search');?>" method="post">
姓名：<input type="text" name="student_name" value="<?php echo @$_REQUEST['student_name'];?>">
毕业学校：<input type="text" name="school_name" value="<?php echo @$_REQUEST['school_name'];?>">
<input type="submit" value="搜索">
</form>
<table border="0" cellpadding="0" cellspacing="0" class="jiuye" width="97%">
<tbody>
	<tr>
	<th bgcolor="#ecf6fd" width="10%">
		姓名</th>
	<th bgcolor="#ecf6fd" width="25%">
		毕业学校</th>
	<th bgcolor="#ecf6fd" width="15%">
		入职时间</th>
	<th bgcolor="#ecf6fd" width="30%">
		入职公司</th>
	<th bgcolor="#ecf6fd" class="STYLE6" width="20%">
		薪资（￥）</th>
	</tr>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
	<td><?php echo ($vo["student_name"]); ?></td>
	<td><?php echo ($vo["school_name"]); ?></td>
	<td><?php echo ($vo["job_time"]); ?></td>
	<td><?php echo ($vo["job_company"]); ?></td>
	<td class="STYLE6">起薪<?php echo ($vo["work_money"]); ?></td>
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</tbody>
</table>
<div class="page">
		<?php echo ($page); ?>
</div>
<br />
<br />
</div>
<div><img src="/Public/images/leftbottom.gif"  /></div>
</div>		
		<div id="right" class="fl">			
			<h4 class="righttitle1 zhaopin"><span class="blue">最新</span>企业招聘</h4>
			<div class="rightkuang1">
			<p class="cent"> <img src="/Public/images/select.jpg"  width="256" height="66" /></p>
                  <table border="0" cellpadding="0" cellspacing="0" class="zhaopinlist" height="124" style="margin-top: 5px" width="98%">
<tbody>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16233788127.shtml" target="_blank">上海北岸信息生物谷招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">11.28</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16302725269.shtml" target="_blank">TCL数码科技有限公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">11.28</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16292068856.shtml" target="_blank">博雅软件集团有限公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">11.28</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16242833345.shtml" target="_blank">北京南天信息有限公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">11.28</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16223017278.shtml" target="_blank">北京十方元基科技公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">11.28</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16213222025.shtml" target="_blank">北京天舟通信有限公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">11.28</td>
	</tr>
	<tr></tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16183668306.shtml" target="_blank">北京新玛互动传媒公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">11.28</td>
	</tr>
	<tr></tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/1617416903.shtml" target="_blank">北京缔凡思信息技术公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">11.21</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16165624603.shtml" target="_blank">北京韩购街贸易有限公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">11.21</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16155357521.shtml" target="_blank">北京花生米数字科技公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">11.21</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16145632220.shtml" target="_blank">集慧智佳知识产权管理招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">11.21</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141201/16135856735.shtml" target="_blank">北京金万维科技有限公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">11.21</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/list/20c133c0-6635-421c-acae-6125b0702b34/1.shtml" target="_blank"><span style="color:#ff0000;">更多企业招聘信息请点击&hellip;&hellip;</span></a></td>
	<td width="11%"><a href="http://www.itcast.cn/news/list/20c133c0-6635-421c-acae-6125b0702b34/1.shtml" target="_blank"><span style="color:#ff0000;">查看</span></a></td>
	<td width="16%"><a href="http://www.itcast.cn/news/list/20c133c0-6635-421c-acae-6125b0702b34/1.shtml" target="_blank"><span style="color:#ff0000;">更多</span></a></td>
	</tr>
	<tr></tr>
</tbody>
</table>

 <div class="clear"></div>
			</div>
			<div class="rightbottom"><img src="/Public/images/bottom1.gif"/></div>
			<h4 class="righttitle1" style="margin-top:5px;"><span class="fl">PHP培训开班信息</span></h4>
			
			<div class="jyjb-left" >
			<ul>
<li style="border-bottom: medium none; float: left; color: #515151"><a href="http://php.itcast.cn/php/course/base.shtml"><b><font style="color: #515151">PHP基础班</font></b></a></li>
<br />
</ul>
<ul style="clear: both">
<li><a href="http://php.itcast.cn/php/course/base.shtml" target="_blank"><span class="time jyjb-font2"><b>预约报名</b></span>北京--第34期(2015年01月10号)</a></li>
<li><a href="http://php.itcast.cn/php/course/base.shtml" target="_blank"><span class="time jyjb-font1"><b>爆满已开班</b></span>北京--第33期(2014年11月27号)</a></li>
<li><a href="http://php.itcast.cn/php/course/base.shtml" target="_blank"><span class="time jyjb-font2"><b>预约报名</b></span>广州--第08期(2014年12月25号)</a></li>
</ul>
<ul>
<li style="border-bottom: medium none; float: left; color: #515151"><a href="http://php.itcast.cn/php/course/php.shtml"><b><font style="color: #515151">PHP就业班</font></b></a></li>
<br />
</ul>
<ul style="clear: both">
<li><a href="http://php.itcast.cn/php/course/php.shtml" target="_blank"><span class="time jyjb-font2"><b>预约报名</b></span>北京--第34期(2015年01月05号)</a></li>
<li><a href="http://php.itcast.cn/php/course/php.shtml" target="_blank"><span class="time jyjb-font1"><b>爆满已开班</b></span>北京--第33期(2014年11月21号)</a></li>
<li><a href="http://php.itcast.cn/php/course/php.shtml" target="_blank"><span class="time jyjb-font2"><b>预约报名</b></span>广州--第07期(2014年12月18号)</a></li>
</ul>
<ul>
<li style="border-bottom: medium none; float: left; color: #515151"><a href="http://php.itcast.cn/news/981030b0/96d5/4005/9ae4/eba8bac4195a.shtml"><b><font style="color: #515151">PHP远程班</font></b></a></li>
<br />
</ul>
<ul style="clear: both">
<li><a href="http://php.itcast.cn/news/981030b0/96d5/4005/9ae4/eba8bac4195a.shtml" target="_blank"><span class="time jyjb-font2"><b>预约报名</b></span>基础班--第34期(2015年01月10号)</a></li>
<li><a href="http://php.itcast.cn/news/981030b0/96d5/4005/9ae4/eba8bac4195a.shtml" target="_blank"><span class="time jyjb-font1"><b>爆满已开班</b></span>基础班--第33期(2014年11月27号)</a></li>
<li><a href="http://php.itcast.cn/news/981030b0/96d5/4005/9ae4/eba8bac4195a.shtml" target="_blank"><span class="time jyjb-font2"><b>预约报名</b></span>就业班--第34期(2015年01月05号)</a></li>
<li><a href="http://php.itcast.cn/news/981030b0/96d5/4005/9ae4/eba8bac4195a.shtml" target="_blank"><span class="time jyjb-font1"><b>爆满已开班</b></span>就业班--第33期(2014年11月21号)</a></li>
</ul>

			</div>
			<div class="rightbottom"><img src="/Public/images/rightbottom.jpg"/></div>
			<h4 class="righttitle1 lianxi"><span class="fl"><span class="blue">课程</span>咨询</span></h4>
			<div class="rightkuang">
		<dl>
	<dt style="padding-bottom:20px;">
		北京传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="北京传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="北京传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<dl class="qqtwo">
	<dt style="padding-bottom:20px;">
		广州传智播客</dt>
	<dd style=" width:120px;height:40px;float:left;">
		<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzgwMDA2ODg2OF8yMDczMV84MDAwNjg4NjhfMl8" target="_blank"><img alt="广州传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style=" width:120px;height:40px;float:left;">
		<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzgwMDA2ODg2OF8yMDczMV84MDAwNjg4NjhfMl8" target="_blank"><img alt="广州传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<dl class="qqthree">
	<dt style="padding-bottom:20px;">
		上海传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/djUD" target="_blank"><img alt="上海传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/djUD" target="_blank"><img alt="上海传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<dl class="qqfour">
	<dt style="padding-bottom:20px;">
		武汉传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/P4EE" target="_blank"><img alt="武汉传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/P4EE" target="_blank"><img alt="武汉传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<dl class="qqfive">
	<dt style="padding-bottom:20px;">
		郑州传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/0LVE" target="_blank"><img alt="武汉传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/0LVE" target="_blank"><img alt="武汉传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<dl class="qqsix">
	<dt style="padding-bottom:20px;">
		西安传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="西安传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="西安传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<!--<dl class="qqsev">
	<dt style="padding-bottom:20px;">
		西安传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="西安传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="西安传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>-->
			<div class="clear"></div>		
			</div>
			<div class="rightbottom"><img src="/Public/images/rightbottom.jpg"/></div>
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



<body>