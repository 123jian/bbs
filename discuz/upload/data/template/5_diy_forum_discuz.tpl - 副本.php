<?php

if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('discuz');
block_get('9,41,73,72,24,23');?><?php include template('common/header'); ?><script src="template/an_paly/style/js/jquery-1.js" type="text/javascript"></script>
<script src="template/an_paly/style/js/jquery_pic.js" type="text/javascript"></script>
<style type="text/css">
.specials-pic-text, .specials-list li a, .specials-text-bg{ width:220px}
</style>



<?php if(empty($gid)) { ?><?php echo adshow("text/wp a_t");?><?php } ?>

<style id="diy_style" type="text/css">#portal_block_24 { margin-bottom:20px !important;}#portal_block_73 { background-color:#ffffff !important;background-image:none !important;border:#666666 0px none !important;margin:10px !important;}#portal_block_73 .dxb_bc { color:#ff9900 !important;font-size:14px !important;margin:5px !important;}#portal_block_73 .dxb_bc a { color:#ff0066 !important;font-size:16px !important;}#portal_block_72 { margin:10px !important;}#portal_block_72 .dxb_bc { color:#ff9900 !important;font-size:14px !important;margin:5px !important;}#portal_block_72 .dxb_bc a { color:#0066ff !important;font-size:16px !important;}</style>



<?php if(empty($gid)) { ?>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"><div id="framed2q1R8" class="frame move-span cl frame-1"><div id="framed2q1R8_left" class="column frame-1-c"><div id="framed2q1R8_left_temp" class="move-span temp"></div><?php block_display('9');?></div></div><div id="framez85WVC" class="frame move-span cl frame-1"><div id="framez85WVC_left" class="column frame-1-c"><div id="framez85WVC_left_temp" class="move-span temp"></div><div id="framen29fDU" class="frame move-span cl frame-1-1-1"><div class="title frame-title"><span class="titletext">1-1-1框架</span></div><div id="framen29fDU_left" class="column frame-1-1-1-l"><div id="framen29fDU_left_temp" class="move-span temp"></div><?php block_display('41');?></div><div id="framen29fDU_center" class="column frame-1-1-1-c"><div id="framen29fDU_center_temp" class="move-span temp"></div><?php block_display('73');?></div><div id="framen29fDU_right" class="column frame-1-1-1-r"><div id="framen29fDU_right_temp" class="move-span temp"></div><?php block_display('72');?></div></div><?php block_display('24');?><?php block_display('23');?></div></div></div><!--[/diy]-->
</div>
<?php } ?>

<div id="pt" class="bm cl">
<?php if(empty($gid) && $announcements) { ?>
<div class="y">
<div id="an">
<dl class="cl">
<dt class="z xw1">公告:&nbsp;</dt>
<dd>
<div id="anc"><ul id="ancl"><?php echo $announcements;?></ul></div>
</dd>
</dl>
</div>
<script type="text/javascript">announcement();</script>
</div>
<?php } ?>
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a><em>&raquo;</em><a href="forum.php"><?php echo $_G['setting']['navs']['2']['navname'];?></a><?php echo $navigation;?>
</div>
<div class="z"><?php if(!empty($_G['setting']['pluginhooks']['index_status_extra'])) echo $_G['setting']['pluginhooks']['index_status_extra'];?></div>
</div>

<div id="ct" class="wp cl<?php if($_G['setting']['forumallowside']) { ?> ct2<?php } ?>">
<?php if(empty($gid)) { ?>
<div id="chart" class="bm bw0 cl">
<p class="chart z">今日: <em><?php echo $todayposts;?></em><span class="pipe">|</span>昨日: <em><?php echo $postdata['0'];?></em><span class="pipe">|</span>帖子: <em><?php echo $posts;?></em><span class="pipe">|</span>会员: <em><?php echo $_G['cache']['userstats']['totalmembers'];?></em><?php if($_G['cache']['userstats']['newsetuser']) { ?><span class="pipe">|</span>欢迎新会员: <em><a href="home.php?mod=space&amp;username=<?php echo rawurlencode($_G['cache']['userstats']['newsetuser']); ?>" target="_blank" class="xi2"><?php echo $_G['cache']['userstats']['newsetuser'];?></a></em><?php } ?></p>
<div class="y">
<?php if(!empty($_G['setting']['pluginhooks']['index_nav_extra'])) echo $_G['setting']['pluginhooks']['index_nav_extra'];?>
<?php if($_G['uid']) { ?><a href="forum.php?mod=guide&amp;view=my" title="我的帖子" class="xi2">我的帖子</a><?php } if(!empty($_G['setting']['search']['forum']['status'])) { if($_G['uid']) { ?><span class="pipe">|</span><?php } ?><a href="forum.php?mod=guide&amp;view=new" title="最新回复" class="xi2">最新回复</a><?php } ?>
</div>
</div>
<?php } ?>
<!--[diy=diy_chart]--><div id="diy_chart" class="area"></div><!--[/diy]-->

<!--杨总start-->
<div id="study_nge_div" class="study_nge_auto">
<div nowrap="" class="floattitle" id="popLayer" style="visibility: hidden; left: 715px; top: 472px;"></div>
<div class="fl bm">
<div class="bm_h cl">
<span class="o">
<img onclick="nge_toggle_collapse('category_study_nge');" alt="收起、展开N格" title="收起、展开N格" src="static/image/common/collapsed_no.gif" id="category_study_nge_img">
</span>

<span class="y">
<a onclick="delayShow(this, function() {showMenu({'ctrlid':'nge_sslct','pos':'34!'})});" onmouseover="delayShow(this, function() {showMenu({'ctrlid':'nge_sslct','pos':'34!'})});" href="javascript:;" id="nge_sslct">切换风格</a>
</span>

<span class="y">
<a name="xxx" title="下载桌面快捷访问" href="plugin.php?id=study_nge:desktopshotcut" id="nge_desktopshotcut">下载桌面快捷访问</a>
</span>

<span class="z">
<table>
<tbody><tr>

<td style="line-height:20px;height:20px;margin-top:10px;">

</td>
<td>
<!--<h2>	
<script language="JavaScript">
day = new Date( )
nge_Hour = day.getHours( )
var nge_warmprompt = "";
if (nge_Hour == 0)
nge_warmprompt = "现在已经过凌晨了，身体是无价的资本喔，早点休息吧！"
if (nge_Hour == 1)
nge_warmprompt = "凌晨1点多了，工作是永远都做不完的，别熬坏身子！"
if (nge_Hour == 2)
nge_warmprompt = "该休息了，身体可是革命的本钱啊！"
if (nge_Hour == 3)
nge_warmprompt = "夜深了，熬夜很容易导致身体内分泌失调，长痘痘的！"
if (nge_Hour == 4)
nge_warmprompt = "四点过了，你明天不上班？？？"
if (nge_Hour == 5)
nge_warmprompt = "你知道吗，此时是国内网络速度最快的时候！"
if (nge_Hour == 6)
nge_warmprompt = "清晨好，这麽早就上论坛啦，昨晚做的梦好吗？ "
if (nge_Hour == 7)
nge_warmprompt = "新的一天又开始了，祝你过得快乐!"
if (nge_Hour == 8)
nge_warmprompt = "早上好，一天之际在于晨，又是美好的一天！"
if ((nge_Hour == 9) || (nge_Hour ==10))
nge_warmprompt = "上午好！今天你看上去好精神哦！"
if (( nge_Hour == 11) || (nge_Hour == 12))
nge_warmprompt = "该吃午饭啦！有什么好吃的？您有中午休息的好习惯吗？"
if (( nge_Hour >= 13) && (nge_Hour <= 17))
nge_warmprompt = "下午好！外面的天气好吗？记得朵朵白云曾捎来朋友殷殷的祝福。"
if (( nge_Hour >= 17) && (nge_Hour <= 18))
nge_warmprompt = "太阳落山了！快看看夕阳吧！如果外面下雨，就不必了 ^_^"
if (( nge_Hour >= 18) && (nge_Hour <= 19))
nge_warmprompt = "晚上好，今天的心情怎么样，来论坛和我们诉说吧！"
if (( nge_Hour >= 19) && (nge_Hour <= 21))
nge_warmprompt = "忙碌了一天，累了吧？来玩玩应用游戏，放松下吧！"
if (( nge_Hour >= 22) && (nge_Hour <= 23))
nge_warmprompt = "这么晚了，还在上网？早点洗洗睡吧，睡前记得洗洗脸喔！"
document.write("　　<font color='#2E9AFE'>『温馨提示』")
document.write(nge_warmprompt)
document.write("</font>")
</script>
</h2>-->
</td>
</tr>
</tbody></table>
</span>
</div>
<div id="category_study_nge">
<div style="">
<table width="100%" cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse;border-bottom:1px solid #C2D5E3;">
    <tbody><tr>

<td width="450px" class="nge_border_right">
<table width="100%" cellspacing="0" cellpadding="0" border="0" style="height:24px">
        <tbody>
        	<tr style="TEXT-ALIGN:center;">
        		<td style="border-right:none;" class="nge_inactive">精华推荐</td>
</tr>
       </tbody>
    </table>
</td>
    
    <td class="nge_border_right">
    <table width="100%" cellspacing="0" cellpadding="0" style="height:24px">
        <tbody>
        <tr>

                			<td align="center" style="cursor: pointer;" onmouseover="study_nge_hoverLi('_threads_','0','4');" id="study_nge_t_threads_0" class="nge_inactive">学员感言</td>
        			<td align="center" style="cursor: pointer;" onmouseover="study_nge_hoverLi('_threads_','1','4');" id="study_nge_t_threads_1" class="nge_active">教程下载</td>
        			<td align="center" style="cursor: pointer;" onmouseover="study_nge_hoverLi('_threads_','2','4');" id="study_nge_t_threads_2" class="nge_inactive">热门主题</td>
        			<td align="center" style="cursor: pointer;border-right:0px;" onmouseover="study_nge_hoverLi('_threads_','3','4');" id="study_nge_t_threads_3" class="nge_inactive">热门活动</td>

        </tr>
        </tbody>
    </table>
    </td>
    
    </tr>
    <tr>
    	
    <td width="450px" align="center" style="border-top:none;" class="nge_border_right">
    <table width="450" cellspacing="0" cellpadding="0" border="0">
      <tbody>
        <tr>
        	<td align="center" style="position: relative;">

<div style="position: relative;">
<div class="module cl slidebox" id="0.8072562360053982" style="display: block;">
<ul class="slideshow">
<li style="width: 450px; height: 250px; display: block;">
<a target="_blank" title="2小时搞定千千静听播放器 ..." href="http://open.itcast.cn/home/open/look/mark/3/id/152.htmll?jd1">
<img width="450" height="250" alt="newpic" src="http://bbs.itcast.cn/data/attachment/forum/201412/25/092800cuotqqvs4g9ggzuh.jpg"></a>										
</li>
<li style="width: 450px; height: 250px; display: none;">
<a target="_blank" title="播妞庆双旦，礼物大放送 ..." href="http://bbs.itcast.cn/thread-46775-1-1.html?jd2">
<img width="450" height="250" alt="newpic" src="http://bbs.itcast.cn/data/attachment/forum/201412/25/093125z7ma6c779a999zx9.jpg"></a>										
</li>
<li style="width: 450px; height: 250px; display: none;">
<a target="_blank" title="应届生的程序员之路超强就业指导 ..." href="http://open.itcast.cn/home/open/look/mark/1/id/154.html?jd3">
<img width="450" height="250" alt="newpic" src="http://bbs.itcast.cn/data/attachment/forum/201412/29/102017z7edhz85e63363lj.jpg"></a>										
</li>
<li style="width: 450px; height: 250px; display: none;">
<a target="_blank" title="C++培训谁与争锋" href="http://c.itcast.cn/?jd4">
<img width="450" height="250" alt="newpic" src="http://bbs.itcast.cn/data/attachment/forum/201412/10/142213yc991oae6ocjn110.jpg"></a>										
</li>

</ul>
</div>
<script type="text/javascript">
runslideshow();
</script>
<div class="slidebar" style="position: absolute; top: 5px; left: 4px;"><ul><li onmouseover="slideshow.entities[0.8072562360053982].xactive(0); return false;" class="on">1</li><li onmouseover="slideshow.entities[0.8072562360053982].xactive(1); return false;" class="">2</li><li onmouseover="slideshow.entities[0.8072562360053982].xactive(2); return false;" class="">3</li><li onmouseover="slideshow.entities[0.8072562360053982].xactive(3); return false;" class="">4</li></ul></div></div>

</td>
</tr>
</tbody>
</table>
</td>    
    
    <td class="nge_border_right">
    <table width="100%" cellspacing="0" cellpadding="0" border="0" style="table-layout:auto;">
        <tbody>
        <tr valign="top">
        <td>
        	<img alt="列表" src="source/plugin/study_nge/images/list10.gif">
        </td>
        <td class="nge_list_td">
        
                	<div class="nge_undis" id="study_nge_m_threads_0">
                		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="" href="thread-50796-1-1.html">曾经的黑帮老大，现在的Java大神，你有什么要问的？</a>

</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="版块: 学员感言
标题: 【网络营销一期】独白
发表: 一起走过的日子 (2014-12-29 00:14)
浏览:  19 次 回复: 3 次
回复: 乐笑媛媛yuan (2014-12-29 20:22)" href="thread-51637-1-1.html">【网络营销一期】独白</a>

</div>
</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="版块: 学员感言
标题: 2015年会更好!
发表: cz_yinmeixia (2014-12-29 10:26)
浏览:  12 次 回复: 1 次
回复: 格子夕 (2014-12-29 10:49)" href="thread-51746-1-1.html">2015年会更好!</a>

</div>
</div>
</div>


        	</div>
        	<div class="nge_dis" id="study_nge_m_threads_1">


        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="版块: 干货分享
标题: Photoshop史上最强抠头发丝的技巧
发表: 高志远老师 (2013-09-18 23:49)
浏览:  7121 次 回复: 557 次
回复: fadacai001 (2014-12-30 21:47)" href="thread-19370-1-1.html">Photoshop史上最强抠头发丝的技巧</a>

</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="" href="thread-13894-1-1.html">网页平面-贺叶铭-PS人物面部美化及商业修片技法教程视</a>

</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="版块: 干货分享
标题: Adobe CC 2014 全套软件及完美注册机 X-FORCE（含破解
发表: 高志远老师 (2014-06-29 21:35)
浏览:  4173 次 回复: 243 次
回复: pazzieee (2014-12-27 23:43)" href="thread-26647-1-1.html">Adobe CC 2014 全套软件及完美注册机 X-FORCE（含破解</a>

</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="" href="thread-33240-1-1.html">【首发】史上最适合自学的C语言视频，超20000人订阅</a>

</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="" href="thread-17036-1-1.html">【高薪就业必备11】java中静态变量和实例变量的区别？</a>

</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="" href="thread-28067-1-1.html">特供精品.Net基础全套视频教程2014版 -- 04Winform应</a>

</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="" href="thread-22808-1-1.html">1月6、7号邵山欢老师JS公开课视频下载</a>

</div>
</div>

        	</div>
        	<div class="nge_undis" id="study_nge_m_threads_2">


        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="版块: 衣食住行
标题: 体验软件之巅:传智播客受邀参加第十七届中国国际软件
发表: 栾博老师 (2013-06-07 01:07)
浏览:  6383 次 回复: 10 次
回复: 対伱♂嶶笶 (2013-07-02 00:06)" href="thread-13371-1-1.html">体验软件之巅:传智播客受邀参加第十七届中国国际软件</a>

</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="版块: 衣食住行
标题: 畅游古刹八大处，尽显讲师年少时&mdash;记传智首个讲师日活
发表: 刘晓曲老师 (2013-04-08 02:30)
浏览:  6145 次 回复: 5 次
回复: 仇邓强 (2013-05-31 16:43)" href="thread-10548-1-1.html">畅游古刹八大处，尽显讲师年少时&mdash;记传智首个讲师日活</a>

</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="版块: 衣食住行
标题: 毕姥爷突击查寝暖人心&mdash;&mdash;上海传智播客住宿生活篇（一
发表: 王平 (2013-04-02 16:20)
浏览:  8754 次 回复: 25 次
回复: 茹红 (2014-12-10 14:01)" href="thread-10437-1-1.html">毕姥爷突击查寝暖人心&mdash;&mdash;上海传智播客住宿生活篇（一</a>

</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="版块: 衣食住行
标题: 爱心之火成燎原之势&mdash;&mdash;浩荣 成都传智播客支持你
发表: 成都中心 (2013-03-27 14:17)
浏览:  1974 次 回复: 1 次
回复: 成都中心 (2013-03-27 14:37)" href="thread-10233-1-1.html">爱心之火成燎原之势&mdash;&mdash;浩荣 成都传智播客支持你</a>

</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="版块: 衣食住行
标题: 必看！！！java&amp;平面联谊元旦晚会图文直播 精彩不断啊
发表: 王平 (2013-01-08 15:19)
浏览:  4453 次 回复: 6 次
回复: 左手牵右手 (2013-02-27 23:37)" href="thread-7632-1-1.html">必看！！！java&amp;平面联谊元旦晚会图文直播 精彩不断啊</a>

</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="版块: 衣食住行
标题: 期盼2013 high爆了 java班元旦晚会
发表: 冯佳老师 (2012-12-31 16:22)
浏览:  1928 次 回复: 2 次
回复: 指弹 (2012-12-31 19:44)" href="thread-7465-1-1.html">期盼2013 high爆了 java班元旦晚会</a>

</div>
</div>

        	</div>

        
<!-- Powered by 1314study.com -->
        </td>
        </tr>
        </tbody>
    </table>
</td>
</tr>
</tbody></table>
<table width="100%" cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse;">
    </table>
</div>
</div>
</div>
</div>

<!--杨总end-->

<?php if(!empty($_G['setting']['grid']['showgrid'])) { ?>
<!-- index four grid -->
<div class="fl bm">
<div class="bm bmw cl">
<div id="category_grid" class="bm_c" >
<table cellspacing="0" cellpadding="0"><tr>
<?php if(!$_G['setting']['grid']['gridtype']) { ?>
<td valign="top" class="category_l1">
<div class="newimgbox">
<h4><span class="tit_newimg"></span>最新图片</h4>
<div class="module cl slidebox_grid" style="width:218px">
<script type="text/javascript">
var slideSpeed = 5000;
var slideImgsize = [218,200];
var slideBorderColor = '<?php echo $_G['style']['specialborder'];?>';
var slideBgColor = '<?php echo $_G['style']['commonbg'];?>';
var slideImgs = new Array();
var slideImgLinks = new Array();
var slideImgTexts = new Array();
var slideSwitchColor = '<?php echo $_G['style']['tabletext'];?>';
var slideSwitchbgColor = '<?php echo $_G['style']['commonbg'];?>';
var slideSwitchHiColor = '<?php echo $_G['style']['specialborder'];?>';<?php $k = 1;?><?php if(is_array($grids['slide'])) foreach($grids['slide'] as $stid => $svalue) { ?>slideImgs[<?php echo $k; ?>] = '<?php echo $svalue['image'];?>';
slideImgLinks[<?php echo $k; ?>] = '<?php echo $svalue['url'];?>';
slideImgTexts[<?php echo $k; ?>] = '<?php echo $svalue['subject'];?>';<?php $k++;?><?php } ?>
</script>
<script src="<?php echo $_G['setting']['jspath'];?>forum_slide.js?<?php echo VERHASH;?>" type="text/javascript"></script>
</div>
</div>
</td>
<?php } ?>
<td valign="top" class="category_l2">
<div class="subjectbox">
<h4><span class="tit_subject"></span>最新主题</h4>
        <ul class="category_newlist">
        <?php if(is_array($grids['newthread'])) foreach($grids['newthread'] as $thread) { ?>        	<?php if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { $thread[tid]=$thread[closed];?><?php } ?>
<li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;extra=<?php echo $extra;?>"<?php if($thread['highlight']) { ?> <?php echo $thread['highlight'];?><?php } if($_G['setting']['grid']['showtips']) { ?> tip="标题: <strong><?php echo $thread['oldsubject'];?></strong><br/>作者: <?php echo $thread['author'];?> (<?php echo $thread['dateline'];?>)<br/>查看/回复: <?php echo $thread['views'];?>/<?php echo $thread['replies'];?>" onmouseover="showTip(this)"<?php } else { ?> title="<?php echo $thread['oldsubject'];?>"<?php } if($_G['setting']['grid']['targetblank']) { ?> target="_blank"<?php } ?>><?php echo $thread['subject'];?></a></li>
<?php } ?>
         </ul>
         </div>
</td>
<td valign="top" class="category_l3">
<div class="replaybox">
<h4><span class="tit_replay"></span>最新回复</h4>
        <ul class="category_newlist">
        <?php if(is_array($grids['newreply'])) foreach($grids['newreply'] as $thread) { ?>        	<?php if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { $thread[tid]=$thread[closed];?><?php } ?>
<li><a href="forum.php?mod=redirect&amp;tid=<?php echo $thread['tid'];?>&amp;goto=lastpost#lastpost"<?php if($thread['highlight']) { ?> <?php echo $thread['highlight'];?><?php } if($_G['setting']['grid']['showtips']) { ?>tip="标题: <strong><?php echo $thread['oldsubject'];?></strong><br/>作者: <?php echo $thread['author'];?> (<?php echo $thread['dateline'];?>)<br/>查看/回复: <?php echo $thread['views'];?>/<?php echo $thread['replies'];?>" onmouseover="showTip(this)"<?php } else { ?> title="<?php echo $thread['oldsubject'];?>"<?php } if($_G['setting']['grid']['targetblank']) { ?> target="_blank"<?php } ?>><?php echo $thread['subject'];?></a></li>
<?php } ?>
         </ul>
         </div>
</td>
<td valign="top" class="category_l3">
<div class="hottiebox">
<h4><span class="tit_hottie"></span>热帖</h4>
        <ul class="category_newlist">
        <?php if(is_array($grids['hot'])) foreach($grids['hot'] as $thread) { ?>        	<?php if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { $thread[tid]=$thread[closed];?><?php } ?>
<li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;extra=<?php echo $extra;?>"<?php if($thread['highlight']) { ?> <?php echo $thread['highlight'];?><?php } if($_G['setting']['grid']['showtips']) { ?> tip="标题: <strong><?php echo $thread['oldsubject'];?></strong><br/>作者: <?php echo $thread['author'];?> (<?php echo $thread['dateline'];?>)<br/>查看/回复: <?php echo $thread['views'];?>/<?php echo $thread['replies'];?>" onmouseover="showTip(this)"<?php } else { ?> title="<?php echo $thread['oldsubject'];?>"<?php } if($_G['setting']['grid']['targetblank']) { ?> target="_blank"<?php } ?>><?php echo $thread['subject'];?></a></li>
<?php } ?>
         </ul>
         </div>
</td>
<?php if($_G['setting']['grid']['gridtype']) { ?>
<td valign="top" class="category_l4">
<div class="goodtiebox">
<h4><span class="tit_goodtie"></span>精华帖子</h4>
<ul class="category_newlist"><?php if(is_array($grids['digest'])) foreach($grids['digest'] as $thread) { if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { $thread[tid]=$thread[closed];?><?php } ?>
<li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;extra=<?php echo $extra;?>"<?php if($thread['highlight']) { ?> <?php echo $thread['highlight'];?><?php } if($_G['setting']['grid']['showtips']) { ?> tip="标题: <strong><?php echo $thread['oldsubject'];?></strong><br/>作者: <?php echo $thread['author'];?> (<?php echo $thread['dateline'];?>)<br/>查看/回复: <?php echo $thread['views'];?>/<?php echo $thread['replies'];?>" onmouseover="showTip(this)"<?php } else { ?> title="<?php echo $thread['oldsubject'];?>"<?php } if($_G['setting']['grid']['targetblank']) { ?> target="_blank"<?php } ?>><?php echo $thread['subject'];?></a></li>
<?php } ?>
 </ul>
 	</div>
</td>
<?php } ?>
</table>
</div>
</div>
</div>
<!-- index four grid end -->
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['index_top'])) echo $_G['setting']['pluginhooks']['index_top'];?>
<?php if(!empty($_G['cache']['heats']['message'])) { ?>
<div class="bm">
<div class="bm_h cl">
<h2><?php echo $_G['setting']['navs']['2']['navname'];?>热点</h2>
</div>
<div class="bm_c cl">
<div class="heat z"><?php if(is_array($_G['cache']['heats']['message'])) foreach($_G['cache']['heats']['message'] as $data) { ?><dl class="xld">
<dt><?php if($_G['adminid'] == 1) { ?><a class="d" href="forum.php?mod=misc&amp;action=removeindexheats&amp;tid=<?php echo $data['tid'];?>" onclick="return removeindexheats()">delete</a><?php } ?>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $data['tid'];?>" target="_blank" class="xi2"><?php echo $data['subject'];?></a></dt>
<dd><?php echo $data['message'];?></dd>
</dl>
<?php } ?>
</div>
<ul class="xl xl1 heatl"><?php if(is_array($_G['cache']['heats']['subject'])) foreach($_G['cache']['heats']['subject'] as $data) { ?><li><?php if($_G['adminid'] == 1) { ?><a class="d" href="forum.php?mod=misc&amp;action=removeindexheats&amp;tid=<?php echo $data['tid'];?>" onclick="return removeindexheats()">delete</a><?php } ?>&middot; <a href="forum.php?mod=viewthread&amp;tid=<?php echo $data['tid'];?>" target="_blank" class="xi2"><?php echo $data['subject'];?></a></li>
<?php } ?>
</ul>
</div>
</div>
<?php } ?>

<?php if(!empty($_G['setting']['pluginhooks']['index_catlist_top'])) echo $_G['setting']['pluginhooks']['index_catlist_top'];?>
<div class="bankuai_h">
<?php if(!empty($collectiondata['follows'])) { $forumscount = count($collectiondata['follows']);?><?php $forumcolumns = 4;?><?php $forumcolwidth = (floor(100 / $forumcolumns) - 0.1).'%';?><div class="<?php if($forumcolumns) { ?> flg<?php } ?> cl">
<div class="bm_h cl">
<span class="o">
<img id="category_-1_img" src="<?php echo IMGDIR;?>/<?php echo $collapse['collapseimg_-1'];?>" title="收起/展开" alt="收起/展开" onclick="toggle_collapse('category_-1');" />
</span>
<h2><a href="forum.php?mod=collection&amp;op=my">我订阅的专辑</a></h2>
</div>
<div id="category_-1" class="bm_c" style="<?php echo $collapse['category_-1']; ?>">
<table cellspacing="0" cellpadding="0" class="fl_tb">
<tr><?php $ctorderid = 0;?><?php if(is_array($collectiondata['follows'])) foreach($collectiondata['follows'] as $key => $colletion) { if($ctorderid && ($ctorderid % $forumcolumns == 0)) { ?>
</tr>
<?php if($ctorderid < $forumscount) { ?>
<tr class="fl_row">
<?php } } ?>
<td class="fl_g"<?php if($forumcolwidth) { ?> width="<?php echo $forumcolwidth;?>"<?php } ?>>
<div class="fl_icn_g">
<a href="forum.php?mod=collection&amp;action=view&amp;ctid=<?php echo $colletion['ctid'];?>" target="_blank"><img src="<?php echo IMGDIR;?>/forum<?php if($followcollections[$key]['lastvisit'] < $colletion['lastupdate']) { ?>_new<?php } ?>.gif" alt="<?php echo $colletion['name'];?>" /></a>
</div>
<dl>
<dt><a href="forum.php?mod=collection&amp;action=view&amp;ctid=<?php echo $colletion['ctid'];?>"><?php echo $colletion['name'];?></a></dt>
<dd><em>主题: <?php echo dnumber($colletion['threadnum']); ?></em>, <em>评论: <?php echo dnumber($colletion['commentnum']); ?></em></dd>
<dd>
<?php if($colletion['lastpost']) { if($forumcolumns < 3) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $colletion['lastpost'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($colletion['lastsubject'], 30); ?></a> <cite><?php echo dgmdate($colletion[lastposttime]);?> <?php if($colletion['lastposter']) { ?><?php echo $colletion['lastposter'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $colletion['lastpost'];?>&amp;goto=lastpost#lastpost">最后发表: <?php echo dgmdate($colletion[lastposttime]);?></a>
<?php } } else { ?>
从未
<?php } ?>
</dd>
<?php if(!empty($_G['setting']['pluginhooks']['index_followcollection_extra'][$colletion[ctid]])) echo $_G['setting']['pluginhooks']['index_followcollection_extra'][$colletion[ctid]];?>
</dl>
</td><?php $ctorderid++;?><?php } if(($columnspad = $ctorderid % $forumcolumns) > 0) { echo str_repeat('<td class="fl_g"'.($forumcolwidth ? " width=\"$forumcolwidth\"" : '').'></td>', $forumcolumns - $columnspad);; } ?>
</tr>
</table>

</div>
</div>

<?php } if(empty($gid) && !empty($forum_favlist)) { $forumscount = count($forum_favlist);?><?php $forumcolumns = $forumscount > 3 ? ($forumscount == 4 ? 4 : 5) : 1;?><?php $forumcolwidth = (floor(100 / $forumcolumns) - 0.1).'%';?><div class="<?php if($forumcolumns) { ?> flg<?php } ?> cl">
<div class="bm_h cl">
<span class="o">
<img id="category_0_img" src="<?php echo IMGDIR;?>/<?php echo $collapse['collapseimg_0'];?>" title="收起/展开" alt="收起/展开" onclick="toggle_collapse('category_0');" />
</span>
<h2><a href="home.php?mod=space&amp;do=favorite&amp;type=forum">我收藏的版块</a></h2>
</div>
<div id="category_0" class="bm_c" style="<?php echo $collapse['category_0']; ?>">
<table cellspacing="0" cellpadding="0" class="fl_tb">
<tr><?php $favorderid = 0;?><?php if(is_array($forum_favlist)) foreach($forum_favlist as $key => $favorite) { if($favforumlist[$favorite['id']]) { $forum=$favforumlist[$favorite[id]];?><?php $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];?><?php if($forumcolumns>1) { if($favorderid && ($favorderid % $forumcolumns == 0)) { ?>
</tr>
<?php if($favorderid < $forumscount) { ?>
<tr class="fl_row">
<?php } } ?>
<td class="fl_g"<?php if($forumcolwidth) { ?> width="<?php echo $forumcolwidth;?>"<?php } ?>>
<div class="fl_icn_g"<?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="width: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
<?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
<?php } ?>
</div>
<dl<?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="margin-left: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
<dt><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a><?php if($forum['todayposts'] && !$forum['redirect']) { ?><em class="xw0 xi1" title="今日"> (<?php echo $forum['todayposts'];?>)</em><?php } ?></dt>
<?php if(empty($forum['redirect'])) { ?><dd><em>主题: <?php echo dnumber($forum['threads']); ?></em>, <em>帖数: <?php echo dnumber($forum['posts']); ?></em></dd><?php } ?>
<dd>
<?php if($forum['permission'] == 1) { ?>
私密版块
<?php } else { if($forum['redirect']) { ?>
<a href="<?php echo $forumurl;?>" class="xi2">链接到外部地址</a>
<?php } elseif(is_array($forum['lastpost'])) { if($forumcolumns < 3) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($forum['lastpost']['subject'], 30); ?></a> <cite><?php echo $forum['lastpost']['dateline'];?> <?php if($forum['lastpost']['author']) { ?><?php echo $forum['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost">最后发表: <?php echo $forum['lastpost']['dateline'];?></a>
<?php } } else { ?>
从未
<?php } } ?>
</dd>
<?php if(!empty($_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]];?>
</dl>
</td><?php $favorderid++;?><?php } else { ?>
<td class="fl_icn" <?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="width: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
<?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
<?php } ?>
</td>
<td>
<h2><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a><?php if($forum['todayposts'] && !$forum['redirect']) { ?><em class="xw0 xi1" title="今日"> (<?php echo $forum['todayposts'];?>)</em><?php } ?></h2>
<?php if($forum['description']) { ?><p class="xg2"><?php echo $forum['description'];?></p><?php } if($forum['subforums']) { ?><p>子版块: <?php echo $forum['subforums'];?></p><?php } if($forum['moderators']) { ?><p>版主: <span class="xi2"><?php echo $forum['moderators'];?></span></p><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]];?>
</td>
<td class="fl_i">
<?php if(empty($forum['redirect'])) { ?><span class="xi2"><?php echo dnumber($forum['threads']); ?></span><span class="xg1"> / <?php echo dnumber($forum['posts']); ?></span><?php } ?>
</td>
<td class="fl_by">
<div>
<?php if($forum['permission'] == 1) { ?>
私密版块
<?php } else { if($forum['redirect']) { ?>
<a href="<?php echo $forumurl;?>" class="xi2">链接到外部地址</a>
<?php } elseif(is_array($forum['lastpost'])) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($forum['lastpost']['subject'], 30); ?></a> <cite><?php echo $forum['lastpost']['dateline'];?> <?php if($forum['lastpost']['author']) { ?><?php echo $forum['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
从未
<?php } } ?>
</div>
</td>
</tr>
<tr class="fl_row">

<?php } } } if(($columnspad = $favorderid % $forumcolumns) > 0) { echo str_repeat('<td class="fl_g"'.($forumcolwidth ? " width=\"$forumcolwidth\"" : '').'></td>', $forumcolumns - $columnspad);; } ?>
</tr>
</table>

</div>
</div><?php echo adshow("intercat/bm a_c/-1");?><?php } if(is_array($catlist)) foreach($catlist as $key => $cat) { ?><?php if(!empty($_G['setting']['pluginhooks']['index_catlist'][$cat[fid]])) echo $_G['setting']['pluginhooks']['index_catlist'][$cat[fid]];?>
<div class="<?php if($cat['forumcolumns']) { ?> flg<?php } ?> cl">
<div class="bm_h cl">
<span class="o">
<img id="category_<?php echo $cat['fid'];?>_img" src="<?php echo IMGDIR;?>/<?php echo $cat['collapseimg'];?>" title="收起/展开" alt="收起/展开" onclick="toggle_collapse('category_<?php echo $cat['fid'];?>');" />
</span>
<?php if($cat['moderators']) { ?><span class="y">分区版主: <?php echo $cat['moderators'];?></span><?php } $caturl = !empty($cat['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$cat['domain'].'.'.$_G['setting']['domain']['root']['forum'] : '';?><h2><a href="<?php if(!empty($caturl)) { ?><?php echo $caturl;?><?php } else { ?>forum.php?gid=<?php echo $cat['fid'];?><?php } ?>" style="<?php if($cat['extra']['namecolor']) { ?>color: <?php echo $cat['extra']['namecolor'];?>;<?php } ?>"><?php echo $cat['name'];?></a></h2>
</div>
<div id="category_<?php echo $cat['fid'];?>" class="bm_c" style="<?php echo $collapse['category_'.$cat['fid']]; ?>">
<table cellspacing="0" cellpadding="0" class="fl_tb">
<tr><?php if(is_array($cat['forums'])) foreach($cat['forums'] as $forumid) { $forum=$forumlist[$forumid];?><?php $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];?><?php if($cat['forumcolumns']) { if($forum['orderid'] && ($forum['orderid'] % $cat['forumcolumns'] == 0)) { ?>
</tr>
<?php if($forum['orderid'] < $cat['forumscount']) { ?>
<tr class="fl_row">
<?php } } ?>
<td class="fl_g" width="<?php echo $cat['forumcolwidth'];?>">
<div class="fl_icn_g"<?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="width: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
<?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
<?php } ?>
</div>
<dl<?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="margin-left: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
<dt><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a><?php if($forum['todayposts'] && !$forum['redirect']) { ?><em class="xw0 xi1" title="今日"> (<?php echo $forum['todayposts'];?>)</em><?php } ?></dt>
<?php if(empty($forum['redirect'])) { ?><dd><em>主题: <?php echo dnumber($forum['threads']); ?></em>, <em>帖数: <?php echo dnumber($forum['posts']); ?></em></dd><?php } ?>
<dd>
<?php if($forum['permission'] == 1) { ?>
私密版块
<?php } else { if($forum['redirect']) { ?>
<a href="<?php echo $forumurl;?>" class="xi2">链接到外部地址</a>
<?php } elseif(is_array($forum['lastpost'])) { if($cat['forumcolumns'] < 3) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($forum['lastpost']['subject'], 30); ?></a> <cite><?php echo $forum['lastpost']['dateline'];?> <?php if($forum['lastpost']['author']) { ?><?php echo $forum['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost">最后发表: <?php echo $forum['lastpost']['dateline'];?></a>
<?php } } else { ?>
从未
<?php } } ?>
</dd>
<?php if(!empty($_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]];?>
</dl>
</td>
<?php } else { ?>
<td class="fl_icn" <?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="width: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
<?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
<?php } ?>
</td>
<td>
<h2><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a><?php if($forum['todayposts'] && !$forum['redirect']) { ?><em class="xw0 xi1" title="今日"> (<?php echo $forum['todayposts'];?>)</em><?php } ?></h2>
<?php if($forum['description']) { ?><p class="xg2"><?php echo $forum['description'];?></p><?php } if($forum['subforums']) { ?><p>子版块: <?php echo $forum['subforums'];?></p><?php } if($forum['moderators']) { ?><p>版主: <span class="xi2"><?php echo $forum['moderators'];?></span></p><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]];?>
</td>
<td class="fl_i">
<?php if(empty($forum['redirect'])) { ?><span class="xi2"><?php echo dnumber($forum['threads']); ?></span><span class="xg1"> / <?php echo dnumber($forum['posts']); ?></span><?php } ?>
</td>
<td class="fl_by">
<div>
<?php if($forum['permission'] == 1) { ?>
私密版块
<?php } else { if($forum['redirect']) { ?>
<a href="<?php echo $forumurl;?>" class="xi2">链接到外部地址</a>
<?php } elseif(is_array($forum['lastpost'])) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($forum['lastpost']['subject'], 30); ?></a> <cite><?php echo $forum['lastpost']['dateline'];?> <?php if($forum['lastpost']['author']) { ?><?php echo $forum['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
从未
<?php } } ?>
</div>
</td>
</tr>
<tr class="fl_row">
<?php } } ?>
<?php echo $cat['endrows'];?>
</tr>
</table>
</div>
</div><?php echo adshow("intercat/bm a_c/$cat[fid]");?><?php } if(!empty($collectiondata['data'])) { $forumscount = count($collectiondata['data']);?><?php $forumcolumns = 4;?><?php $forumcolwidth = (floor(100 / $forumcolumns) - 0.1).'%';?><div class="<?php if($forumcolumns) { ?> flg<?php } ?> cl">
<div class="bm_h cl">
<span class="o">
<img id="category_-2_img" src="<?php echo IMGDIR;?>/<?php echo $collapse['collapseimg_-2'];?>" title="收起/展开" alt="收起/展开" onclick="toggle_collapse('category_-2');" />
</span>
<h2><a href="forum.php?mod=collection">淘专辑推荐</a></h2>
</div>
<div id="category_-2" class="bm_c" style="<?php echo $collapse['category_-2']; ?>">
<table cellspacing="0" cellpadding="0" class="fl_tb">
<tr><?php $ctorderid = 0;?><?php if(is_array($collectiondata['data'])) foreach($collectiondata['data'] as $key => $colletion) { if($ctorderid && ($ctorderid % $forumcolumns == 0)) { ?>
</tr>
<?php if($ctorderid < $forumscount) { ?>
<tr class="fl_row">
<?php } } ?>
<td class="fl_g"<?php if($forumcolwidth) { ?> width="<?php echo $forumcolwidth;?>"<?php } ?>>
<div class="fl_icn_g">
<a href="forum.php?mod=collection&amp;action=view&amp;ctid=<?php echo $colletion['ctid'];?>" target="_blank"><img src="<?php echo IMGDIR;?>/forum.gif" alt="<?php echo $colletion['name'];?>" /></a>
</div>
<dl>
<dt><a href="forum.php?mod=collection&amp;action=view&amp;ctid=<?php echo $colletion['ctid'];?>"><?php echo $colletion['name'];?></a></dt>
<dd><em>主题: <?php echo dnumber($colletion['threadnum']); ?></em>, <em>评论: <?php echo dnumber($colletion['commentnum']); ?></em></dd>
<dd>
<?php if($colletion['lastpost']) { if($forumcolumns < 3) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $colletion['lastpost'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($colletion['lastsubject'], 30); ?></a> <cite><?php echo dgmdate($colletion[lastposttime]);?> <?php if($colletion['lastposter']) { ?><?php echo $colletion['lastposter'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $colletion['lastpost'];?>&amp;goto=lastpost#lastpost">最后发表: <?php echo dgmdate($colletion[lastposttime]);?></a>
<?php } } else { ?>
从未
<?php } ?>
</dd>
<?php if(!empty($_G['setting']['pluginhooks']['index_datacollection_extra'][$colletion[ctid]])) echo $_G['setting']['pluginhooks']['index_datacollection_extra'][$colletion[ctid]];?>
</dl>
</td><?php $ctorderid++;?><?php } if(($columnspad = $ctorderid % $forumcolumns) > 0) { echo str_repeat('<td class="fl_g"'.($forumcolwidth ? " width=\"$forumcolwidth\"" : '').'></td>', $forumcolumns - $columnspad);; } ?>
</tr>
</table>

</div>
</div>

<?php } ?>

</div>

<?php if(!empty($_G['setting']['pluginhooks']['index_middle'])) echo $_G['setting']['pluginhooks']['index_middle'];?>
<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>

<?php if(empty($gid) && $_G['setting']['whosonlinestatus']) { ?>
<div id="online" class="bm oll">
<div class="bm_h">
<?php if($detailstatus) { ?>
<span class="o"><a href="forum.php?showoldetails=no#online" title="收起/展开"><img src="<?php echo IMGDIR;?>/collapsed_no.gif" alt="收起/展开" /></a></span>
<h3>
<strong><a href="home.php?mod=space&amp;do=friend&amp;view=online&amp;type=member">在线会员</a></strong>
<span class="xs1">- <strong><?php echo $onlinenum;?></strong> 人在线
- <strong><?php echo $membercount;?></strong> 会员(<strong><?php echo $invisiblecount;?></strong> 隐身),
<strong><?php echo $guestcount;?></strong> 位游客
- 最高记录是 <strong><?php echo $onlineinfo['0'];?></strong> 于 <strong><?php echo $onlineinfo['1'];?></strong>.</span>
</h3>
<?php } else { if(empty($_G['setting']['sessionclose'])) { ?>
<span class="o"><a href="forum.php?showoldetails=yes#online" title="收起/展开"><img src="<?php echo IMGDIR;?>/collapsed_yes.gif" alt="收起/展开" /></a></span>
<?php } ?>
<h3>
<strong>
<?php if(!empty($_G['setting']['whosonlinestatus'])) { ?>
在线会员
<?php } else { ?>
<a href="home.php?mod=space&amp;do=friend&amp;view=online&amp;type=member">在线会员</a>
<?php } ?>
</strong>
<span class="xs1">- 总计 <strong><?php echo $onlinenum;?></strong> 人在线
<?php if($membercount) { ?>- <strong><?php echo $membercount;?></strong> 会员,<strong><?php echo $guestcount;?></strong> 位游客<?php } ?>
- 最高记录是 <strong><?php echo $onlineinfo['0'];?></strong> 于 <strong><?php echo $onlineinfo['1'];?></strong>.</span>
</h3>
<?php } ?>
</div>
<?php if($_G['setting']['whosonlinestatus'] && $detailstatus) { ?>
<dl id="onlinelist" class="bm_c">
<dt class="ptm pbm bbda"><?php echo $_G['cache']['onlinelist']['legend'];?></dt>
<?php if($detailstatus) { ?>
<dd class="ptm pbm">
<ul class="cl">
<?php if($whosonline) { if(is_array($whosonline)) foreach($whosonline as $key => $online) { ?><li title="时间: <?php echo $online['lastactivity'];?>">
<img src="<?php echo STATICURL;?>image/common/<?php echo $online['icon'];?>" alt="icon" />
<?php if($online['uid']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $online['uid'];?>"><?php echo $online['username'];?></a>
<?php } else { ?>
<?php echo $online['username'];?>
<?php } ?>
</li>
<?php } } else { ?>
<li style="width: auto">当前只有游客或隐身会员在线</li>
<?php } ?>
</ul>
</dd>
<?php } ?>
</dl>
<?php } ?>
</div>
<?php } if(empty($gid) && ($_G['cache']['forumlinks']['0'] || $_G['cache']['forumlinks']['1'] || $_G['cache']['forumlinks']['2'])) { ?>
<div class="bm lk">
<div id="category_lk" class="bm_c ptm">
<?php if($_G['cache']['forumlinks']['0']) { ?>
<ul class="m mbn cl"><?php echo $_G['cache']['forumlinks']['0'];?></ul>
<?php } if($_G['cache']['forumlinks']['1']) { ?>
<div class="mbn cl">
<?php echo $_G['cache']['forumlinks']['1'];?>
</div>
<?php } if($_G['cache']['forumlinks']['2']) { ?>
<ul class="x mbm cl">
<?php echo $_G['cache']['forumlinks']['2'];?>
</ul>
<?php } ?>
</div>
</div>
<?php } ?>

<?php if(!empty($_G['setting']['pluginhooks']['index_bottom'])) echo $_G['setting']['pluginhooks']['index_bottom'];?>
</div>

<?php if($_G['setting']['forumallowside']) { ?>
<div id="sd" class="sd">
<?php if(!empty($_G['setting']['pluginhooks']['index_side_top'])) echo $_G['setting']['pluginhooks']['index_side_top'];?>
            <div class="col-special border-top-bold"></div>
            <span class="blank15"></span>
<div class="drag specials-list cl" style=" width:220px">
<!--[diy=diy2]--><div id="diy2" class="area"></div><!--[/diy]-->
             <span class="blank15"></span><span class="blank15"></span>   
            <div id="guess" class="guess border-top-bold"> 
            <!--[diy=diy7]--><div id="diy7" class="area"></div><!--[/diy]--> 
        </div>
</div>
            
<?php if(!empty($_G['setting']['pluginhooks']['index_side_bottom'])) echo $_G['setting']['pluginhooks']['index_side_bottom'];?>
</div>
<?php } ?>
</div>
<?php if($_G['group']['radminid'] == 1) { helper_manyou::checkupdate();?><?php } if(empty($_G['setting']['disfixednv_forumindex']) ) { ?><script>fixed_top_nv();</script><?php } include template('common/footer'); ?>