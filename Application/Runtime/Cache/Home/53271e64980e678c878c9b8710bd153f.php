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
  <div class="position"><a name="pagetop">您现在的位置：<span class="STYLE5"></span></a><a href="http://php.itcast.cn">PHP学院</a> &gt;&gt; PHP学院班级活动 &gt;&gt; 正文</div>
  <div style="margin-top:8px;" class="fl" id="left">
    <div class="infotop"><img src="/images/infotop.gif"></div>
    <div class="left_content1">
      <div id="printarea">
        <h1 class="infotitle"><?php echo $list['a_title']?></h1>
        <div class="editer">更新时间:<?php echo $list['a_time']?> </div>
        <div class="infor">
         <div><span style="font-size:14px;"><strong>&nbsp; &nbsp; 开班。我们为何选择八维？同学们纷纷到讲桌前发表了感言：<br><?php echo $list['a_content']?></strong></span></div>
<div style="text-align: center;"><br>


</strong></span></div>

	
        </div>
      </div>
      <div class="pre">
	               
                       
       	  </div>
      <div class="next">
	  	  </div>

      <div class="clear"></div>
     <div class="bshare-custom icon-medium-plus"><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到网易微博" class="bshare-neteasemb"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count">0</span></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
	  <?php if(is_array($data)): foreach($data as $key=>$vo): ?><div class="review">
	  <!-- 评论列表 -->
			<h3 class="reviewtitle"><span class="fl"><?php echo ($vo["user"]); ?>
			</span><span class="fr"><?php echo (date('Y-m-d h:i:s',$vo["add_time"])); ?> 发表</span></h3>
			<div class="reviewneirong">
			<?php echo ($vo["content"]); ?>    
			<!-- -- reply ---->
			<!-- -- reply ---->
			</div>
			<!-- 评论列表 -->
			<!--<div class="febgye">
						   <a href="javascript:goPage(1)" title="首页">&lt;&lt;</a>
													  <span>1</span>
			</div>-->
      </div><?php endforeach; endif; ?>
	  <div class="clear"></div>
      <div class="print"><a id="printbutton" href="#">【打印】</a> <a href="#pagetop">【返回顶部】</a></div>
      	  <!-- 评论区 -->
	    	<script type="text/javascript">
	           $(document).ready(function(){
	              	loadcomment('20140328-17081824603', 1);
               });   
	       </script>
	  <div id="commentcontent"></div>
	  <form style="padding:0;margin:0px;" name="comment" action="/index.php/Home/Index/add_com" method="post">
        <input type="hidden" value="<?php echo $list['id']?>" name="pid">

        <textarea name="content" style="width:610px;" rows="6" cols="85"></textarea>
        <div class="clear"></div>
        <div class="fabiao">
	      <span class="fl">请输入验证码：<input type="text" style="width:80px;" name="code">  <!----><img width="100" id="yzm" onclick="gai()" src="/index.php/Home/Index/verify"></span><span class="fr"><input type="submit" id="savebutton" value="提 交"></span>
	    </div>
	  </form>
	  <div title="评论保存结果" id="dialog"></div><!-- 对话框内容 -->
      <!-- 评论区 -->
	        <div class="clear"></div>
      <div class="ad">
      <!-- 广告区 -->
      <!--<a href="http://icd.itcast.cn"><img border="0" src="http://www.itcast.cn/images/ad/icdad.gif" width="620" /></a>--> 
      <!-- 广告区 -->
      </div>
    </div>
    <div><img src="/images/leftbottom.gif"></div>
  </div>
  <div class="fl" id="right">
    <h4 class="righttitle1"><span class="fl">PHP视频下载</span><span class="fr"><a href="/php/video.shtml">+MORE</a></span></h4>
    <ul class="rightkuang">
       <ul>
<li><a href="http://php.itcast.cn/news/caa9b58b/37b1/47f6/98e3/bd3600c98cfc.shtml">PHP入门到精通教程</a></li>
<li><a href="http://php.itcast.cn/news/7acb031c/5958/42d8/be84/47796e2c1243.shtml">zend framework</a></li>
<li><a href="http://php.itcast.cn/news/a632aeea/df9a/46bf/92f1/896679400a37.shtml">smarty模板引擎 </a></li>
<li><a href="http://php.itcast.cn/news/2889f5ee/060a/4014/a6a8/cff645e79925.shtml">Ajax技术 </a></li>
<li><a href="http://php.itcast.cn/news/166b4e78/01b0/4017/96ae/764cd57432a8.shtml">页面静态化</a></li>
<li><a href="http://php.itcast.cn/news/50b67f71/dba5/4302/8749/b62bcc314bd0.shtml">Memcached缓存技术</a></li>
<li><a href="http://php.itcast.cn/news/61ee8515/a34e/477d/9d5d/662dbff5e161.shtml#">Mysql优化</a></li>
<li><a href="http://php.itcast.cn/news/fd551fd3/9db4/4360/9afa/57f438973108.shtml">轻松搞定网页设计</a></li>
<li><a href="http://php.itcast.cn/news/5805c1ea/1b18/41eb/8fcc/6234659d8b40.shtml">PHP数据库陷阱</a></li>
<li><a href="http://php.itcast.cn/news/94c86c32/a7c1/4d2f/b2b4/ded74c6e1113.shtml">PHP网上支付技术</a></li>
<li><a href="http://php.itcast.cn/news/47d47284/bd39/4322/8aa6/fd48cd51f9df.shtml">PHP报表视频教程</a></li>
<li><a href="http://php.itcast.cn/news/42366bc5/fc13/43f1/a69b/bc57132cfdc7.shtml">Linux视频教程</a></li>
<li><a href="http://php.itcast.cn/news/c31baf40/8fa5/4803/ac4d/6e27086d009f.shtml">Oracle视频教程</a></li>
</ul>

    </ul>
    <div class="rightbottom"><img src="/images/rightbottom.jpg"></div>
   
  </div>
</div>
<script src="/Public/houtai/js/jq.js"></script>
   <script type="text/javascript">
    <!--
      function gai(){
                        //alert(111)
                        var yzma=document.getElementById("yzm");

                                //jq("#yzm").attr("src","/index.php/index/verify_image");
                        yzma.src="/index.php/Home/Index/verify";
        }
	//-->
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