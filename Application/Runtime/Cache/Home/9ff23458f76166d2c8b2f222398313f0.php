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
  <div id="left" class="fl"  style="margin-top:3px; overflow:hidden;">
    <div class="clear"></div>
    <div><img src="/Public/shouye/images/lefttop.gif"/></div>
    <div class="left_content3">
<a href="http://dvd.itcast.cn/?php" target="_blank"><font color="red"><h4>下载网速不给力，来申请免费PHP学习光盘吧！全新2014版JAVA/.NET/PHP/网页平面UI设计/iOS入门必备教程光盘免费申领中！</h4></font></a>
      <div class="zhanshi">
        <h4 class="videotitle"><span class="fl">PHP视频下载(如果视频无法下载，请联系QQ:2449444817)</span></h4>
		<div class="blueline1">
<div class="blueline1">
    <?php foreach($array as $key => $val){?>
<table bgcolor="#e2f1f8" border="0" cellpadding="0" cellspacing="1" class="videodown" width="100%">
<tbody>
	<tr>
	<td bgcolor="#ffffff" class="downpic" rowspan="2" width="106"><img alt="" height="71" src="/video/<?php echo $val['v_image']?>" width="96" /></td>
	<td bgcolor="#ffffff" width="272">
	<div class="jiaochengmz"><a href="http://bbs.itcast.cn/thread-33681-1-1.html?php" target="_blank"><span style="color:#ff0000;">8小时打造专属电子留言板系统</span></a></div>
	</td>
	<td align="right" bgcolor="#ffffff" width="215"><a href="http://bbs.itcast.cn/thread-33681-1-1.html?php" target="_blank"><img border="0" height="26" src="/Public/shouye/images/download.jpg" width="56" /></a></td>
	</tr>
	<tr>
	<td bgcolor="#ffffff">
	<div class="jianshi">主讲：<?php echo $val['s_name']?> <span class="blue"><?php echo $val['c_title']?> </span></div>
	</td>
	<td align="right" bgcolor="#ffffff">
	<div class="bdshare_t bds_tools get-codes-bdshare" id="bdshare">
          <span class="bds_more">分享到：</span>
        <a class="bds_qzone" title="分享到QQ空间" href="#"></a>
        <a class="bds_tsina" title="分享到新浪微博" href="#"></a>
        <a class="bds_tqq" title="分享到腾讯微博" href="#"></a>
        <a class="bds_renren" title="分享到人人网" href="#"></a>
        <a class="shareCount" href="#" title="累计分享755次">755</a>  
        </div>
	</td>
	</tr>
</tbody>
</table>
<?php } ?>
</div>
<br />
<div class='page'><?php echo $page?></div>
        </div>
      </div>
    </div>
    <div><img src="/Public/shouye/images/leftbottom.gif"/></div>
    <div></div>
  </div>
  <div id="right" class="fl">
    <h4 class="righttitle1 zhaopin"><span class="blue">常见</span>问题</h4>
    <div class="rightkuang1">
      <ul class="zhaopinlist wenti">
        <!--<ul>
<li><a href="#">正辰科技招聘Java工程师 </a></li>
<li><a href="#">伟鹏科技招聘动画工程师 </a></li>
<li><a href="#">正辰科技招聘网页设计师</a></li>
<li><a href="#">伟鹏科技招聘动画工程师</a></li>
<li><a href="#">正辰科技招聘Java工程师 </a></li>
<li><a href="#">伟鹏科技招聘动画工程师 </a></li>
<li><a href="#">伟鹏科技招聘动画工程师 </a></li>
</ul>-->
<ul class="zhaopinlist wenti">
<li><a href="/news/6c691c56/0dae/41ff/996a/2d110a612490.shtml" target="_blank">你们的PHP培训为什么那么便宜？</a><img height="15" src="/Public/shouye/images/new.gif" width="29" /></li>
<li><a href="/news/28bc21c1/10ef/4bcb/ad34/c0b70fc9ab8a.shtml" target="_blank">你们入学需要什么样的基础</a><img height="15" src="/Public/shouye/images/new.gif" width="29" /></li>
<li><a href="/news/13099012/ae09/4d3b/ad0e/b945b114ae9c.shtml" target="_blank">你们的师资力量是什么样子的？</a> <img height="15" src="/Public/shouye/images/new.gif" width="29" /></li>
<li><a href="/news/5b2001e2/b84e/4b60/b9a2/fb3ca2def9f7.shtml" target="_blank">你们的课程内容质量是怎么样的？</a></li>
<li><a href="/news/28486a2e/2e20/4536/9dee/23b8b0964d3a.shtml" target="_blank">你们PHP的学习模式是什么样的？</a></li>
<li><a href="/news/38f18d98/e496/4c46/9561/5c14558c4394.shtml" target="_blank">你们PHP培训的费用这么低，不怕别人说&quot;便宜没好货&quot;吗？签协议工作有保障吗？</a></li>
<li><a href="/news/ec9cdb54/95e8/4d2a/862b/0e7213e7f254.shtml" target="_blank">你们的PHP培训才开过几期班，质量有保证吗？</a></li>
<li><a href="/news/23700cbd/742d/46ab/b40a/921b780819e0.shtml" target="_blank">你们的课程安排，是怎么样的？</a></li>
<li><a href="/news/bae6d679/af68/4f9b/a015/bb94d3e517b6.shtml" target="_blank">你们有没有阳光扶持政策，可以后交学费?</a></li>
</ul>

      </ul>
      <div class="clear"></div>
      <p class="text-r"><a href="/java/question.shtml"><img src="/Public/shouye/images/jiantoumore.gif"/></a></p>
    </div>
    <div class="rightbottom"><img src="/Public/shouye/images/bottom1.gif"/></div>
    <h4 class="righttitle1 zhaopin"><span class="blue">工具</span>下载</h4>
         <div class="rightkuang1">
		  	<div style="width:275px; height:100px;">
<p class="download" style="width:85px; height:100px; float:left;"><a href="http://player.qq.com/" target="_blank"><img alt="QQ影音" src="/Public/shouye/images/20130801111312850.jpg" style="width: 74px; height: 75px;" /><br />
QQ影音</a></p>
<p class="download" style="width:85px; height:100px; float:left;"><a href="http://www.emule.org.cn/download/" target="_blank"><img alt="电驴" src="/Public/shouye/images/dianlv.jpg" /><br />
电驴</a></p>
<p class="download" style="width:85px; height:100px; float:left;"><a href="http://dl.xunlei.com/" target="_blank"><img alt="迅雷" src="/Public/shouye/images/tengxun.jpg" /><br />
迅雷</a></p>
</div>

		 </div>
   
    <div class="rightbottom"><img src="/Public/shouye/images/rightbottom.jpg"  /></div>
    <h4 class="righttitle1 zhaopin"><span class="blue">最新</span>企业招聘</h4>
    <div class="rightkuang1">
      <p class="cent"> <img src="/Public/shouye/images/select.jpg"  width="256" height="66"/></p>
       <table border="0" cellpadding="0" cellspacing="0" class="zhaopinlist" height="124" style="margin-top: 5px" width="98%">
<tbody>
	
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
    <div class="rightbottom"><img src="/Public/shouye/images/bottom1.gif"/></div>
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
    <div class="rightbottom"><img src="/Public/shouye/images/rightbottom.jpg"/></div>
  </div>
</div>
<div class="clear"></div>
<!-- 页面底部 -->
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