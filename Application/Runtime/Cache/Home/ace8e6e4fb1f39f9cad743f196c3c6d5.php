<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	</body>
<div id="box">
  <div style="width:960px; height:149px; margin:0 auto;"><img src="/Public/shouye/images/teacherpic.jpg"  /></div>
  <div id="left" class="fl"  style="margin-top:3px;">
    <div><img src="/Public/shouye/images/lefttop.gif"/></div>
    <div class="left_content2">
      <h4 class="ganyan"><span class="STYLE3">师资</span>介绍</h4>
      
	  <?php foreach($list as $k=>$v){ ?>
	<div class="teacher_z" style="height: auto; overflow: hidden">
		<div class="teacher">
			<p class="fl">
				<img alt="" src="/bbs/upload/<?php echo $v['s_image'];?>" style="width: 155px; height: 189px;" />
			</p>
			<dl class="fr">
				<dt>
                                <span class="blue"><strong><?php echo $v['s_name'];?></strong></span><strong>--<a href="<?php echo U('shizi/detail');?>?s_id=<?php echo $v['s_id'];?>" target="_blank"><span style="color: rgb(0, 0, 255);">在线试听精彩课程</span></a></strong></dt>
				<dt><strong>职 务：<?php echo $v['z_name'];?></strong></dt>
				<dd>
                                    <?php echo $v['s_content'];?>
				</dd>
			</dl>
		</div>
		<div></div>
	</div><br />
	<?php } ?>
    </div>
    <div class="page">
		<?php echo $page;?>
	</div>
    <div><img src="/Public/shouye/images/leftbottom.gif"/></div>
  </div>
  










  <div id="right" class="fl">
    <h4 class="righttitle1 zhaopin"><span class="blue">讲师</span>招聘</h4>
    <div class="rightkuang1">
      <p class="cent"><img src="/Public/shouye/images/xuanze.jpg" width="256" height="66" /></p>
      <div class="clear"> </div>
      <p class="miaoshu"> 中国的软件教育已经坑害了不少软件工程师苗子，传智播客自成立之日起就立志于改变中国的软件教育，目前已经出版IT教程书籍十多本，教学视频几十套，发表各类技术文章几百篇，已经开始对中国的软件教育有所影响。随着传智播客的事业被越来越多的人认知，加盟到传智播客愿意为此事业奋斗终生的技术牛人也越来越多。尽管加盟到传智播客的技术牛人很多，但要从政策上改变中国的软件教育，我们的力量还很小，小到可以说是微不足道。所以我们需要各路英雄豪杰加盟传智播客，为改变中国的软件教育而奋斗不息。</p>
      <p class="cent"><a href="" target="_blank"><img src="/Public/shouye/images/liulan.jpg" width="142" height="23"/></a></p>
    </div>
    <div class="rightbottom"><img src="/Public/shouye/images/bottom1.gif"/></div>
    <h4 class="righttitle1"><span class="fl">我们出版的书籍</span><span class="fr"><a href="">+MORE</a></span></h4>
    <div class="rightkuang chuban" style="height:auto; overflow:hidden;">
       
<dl>
        <dt><a href="" target="_blank"><img src="/Public/shouye/images/book01.jpg"/></a></dt>
        <dd><span class="blue"><strong><a href="" target="_blank">《EJB3.0入门经典》</a></strong></span></dd>
        <dd>作 者：<span class="STYLE4">黎活明</span> </dd>
        <dd>定价：<span class="STYLE6"><strong>￥59.80 元</strong> </span></dd>
        <dd>页数：<span class="STYLE4">479</span> </dd>
</dl> 
    </div>
    <div class="rightbottom"><img src="/Public/shouye/images/rightbottom.jpg"/></div>
    <h4 class="righttitle1 lianxi"><span class="fl"><span class="blue">课程</span>咨询</span></h4>
    <div class="rightkuang">
<dl>
		<dt style="padding-bottom:20px;">
		北京传智播客</dt>
		<dd style="width:120px;height:40px;float:left;">
		<a href="" target="_blank"><img alt="北京传智播客QQ在线咨询" border="0" height="27" src="/Public/shouye/images/qqmfst.jpg" width="99" /></a></dd>
		<dd style="width:120px;height:40px;float:left;">
		<a href="" target="_blank"><img alt="北京传智播客QQ在线咨询" border="0" height="27" src="/Public/shouye/images/qqkczx.jpg" width="99" /></a></dd>
	</dl>

      <div class="clear"></div>
    </div>
    <div class="rightbottom"><img src="/Public/shouye/images/rightbottom.jpg"/></div>
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