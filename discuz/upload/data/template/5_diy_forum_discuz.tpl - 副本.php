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
<!--[diy=diy1]--><div id="diy1" class="area"><div id="framed2q1R8" class="frame move-span cl frame-1"><div id="framed2q1R8_left" class="column frame-1-c"><div id="framed2q1R8_left_temp" class="move-span temp"></div><?php block_display('9');?></div></div><div id="framez85WVC" class="frame move-span cl frame-1"><div id="framez85WVC_left" class="column frame-1-c"><div id="framez85WVC_left_temp" class="move-span temp"></div><div id="framen29fDU" class="frame move-span cl frame-1-1-1"><div class="title frame-title"><span class="titletext">1-1-1���</span></div><div id="framen29fDU_left" class="column frame-1-1-1-l"><div id="framen29fDU_left_temp" class="move-span temp"></div><?php block_display('41');?></div><div id="framen29fDU_center" class="column frame-1-1-1-c"><div id="framen29fDU_center_temp" class="move-span temp"></div><?php block_display('73');?></div><div id="framen29fDU_right" class="column frame-1-1-1-r"><div id="framen29fDU_right_temp" class="move-span temp"></div><?php block_display('72');?></div></div><?php block_display('24');?><?php block_display('23');?></div></div></div><!--[/diy]-->
</div>
<?php } ?>

<div id="pt" class="bm cl">
<?php if(empty($gid) && $announcements) { ?>
<div class="y">
<div id="an">
<dl class="cl">
<dt class="z xw1">����:&nbsp;</dt>
<dd>
<div id="anc"><ul id="ancl"><?php echo $announcements;?></ul></div>
</dd>
</dl>
</div>
<script type="text/javascript">announcement();</script>
</div>
<?php } ?>
<div class="z">
<a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a><em>&raquo;</em><a href="forum.php"><?php echo $_G['setting']['navs']['2']['navname'];?></a><?php echo $navigation;?>
</div>
<div class="z"><?php if(!empty($_G['setting']['pluginhooks']['index_status_extra'])) echo $_G['setting']['pluginhooks']['index_status_extra'];?></div>
</div>

<div id="ct" class="wp cl<?php if($_G['setting']['forumallowside']) { ?> ct2<?php } ?>">
<?php if(empty($gid)) { ?>
<div id="chart" class="bm bw0 cl">
<p class="chart z">����: <em><?php echo $todayposts;?></em><span class="pipe">|</span>����: <em><?php echo $postdata['0'];?></em><span class="pipe">|</span>����: <em><?php echo $posts;?></em><span class="pipe">|</span>��Ա: <em><?php echo $_G['cache']['userstats']['totalmembers'];?></em><?php if($_G['cache']['userstats']['newsetuser']) { ?><span class="pipe">|</span>��ӭ�»�Ա: <em><a href="home.php?mod=space&amp;username=<?php echo rawurlencode($_G['cache']['userstats']['newsetuser']); ?>" target="_blank" class="xi2"><?php echo $_G['cache']['userstats']['newsetuser'];?></a></em><?php } ?></p>
<div class="y">
<?php if(!empty($_G['setting']['pluginhooks']['index_nav_extra'])) echo $_G['setting']['pluginhooks']['index_nav_extra'];?>
<?php if($_G['uid']) { ?><a href="forum.php?mod=guide&amp;view=my" title="�ҵ�����" class="xi2">�ҵ�����</a><?php } if(!empty($_G['setting']['search']['forum']['status'])) { if($_G['uid']) { ?><span class="pipe">|</span><?php } ?><a href="forum.php?mod=guide&amp;view=new" title="���»ظ�" class="xi2">���»ظ�</a><?php } ?>
</div>
</div>
<?php } ?>
<!--[diy=diy_chart]--><div id="diy_chart" class="area"></div><!--[/diy]-->

<!--����start-->
<div id="study_nge_div" class="study_nge_auto">
<div nowrap="" class="floattitle" id="popLayer" style="visibility: hidden; left: 715px; top: 472px;"></div>
<div class="fl bm">
<div class="bm_h cl">
<span class="o">
<img onclick="nge_toggle_collapse('category_study_nge');" alt="����չ��N��" title="����չ��N��" src="static/image/common/collapsed_no.gif" id="category_study_nge_img">
</span>

<span class="y">
<a onclick="delayShow(this, function() {showMenu({'ctrlid':'nge_sslct','pos':'34!'})});" onmouseover="delayShow(this, function() {showMenu({'ctrlid':'nge_sslct','pos':'34!'})});" href="javascript:;" id="nge_sslct">�л����</a>
</span>

<span class="y">
<a name="xxx" title="���������ݷ���" href="plugin.php?id=study_nge:desktopshotcut" id="nge_desktopshotcut">���������ݷ���</a>
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
nge_warmprompt = "�����Ѿ����賿�ˣ��������޼۵��ʱ�ร������Ϣ�ɣ�"
if (nge_Hour == 1)
nge_warmprompt = "�賿1����ˣ���������Զ��������ģ��𰾻����ӣ�"
if (nge_Hour == 2)
nge_warmprompt = "����Ϣ�ˣ�������Ǹ����ı�Ǯ����"
if (nge_Hour == 3)
nge_warmprompt = "ҹ���ˣ���ҹ�����׵��������ڷ���ʧ�����������ģ�"
if (nge_Hour == 4)
nge_warmprompt = "�ĵ���ˣ������첻�ϰࣿ����"
if (nge_Hour == 5)
nge_warmprompt = "��֪���𣬴�ʱ�ǹ��������ٶ�����ʱ��"
if (nge_Hour == 6)
nge_warmprompt = "�峿�ã������������̳�������������κ��� "
if (nge_Hour == 7)
nge_warmprompt = "�µ�һ���ֿ�ʼ�ˣ�ף����ÿ���!"
if (nge_Hour == 8)
nge_warmprompt = "���Ϻã�һ��֮�����ڳ����������õ�һ�죡"
if ((nge_Hour == 9) || (nge_Hour ==10))
nge_warmprompt = "����ã������㿴��ȥ�þ���Ŷ��"
if (( nge_Hour == 11) || (nge_Hour == 12))
nge_warmprompt = "�ó��緹������ʲô�óԵģ�����������Ϣ�ĺ�ϰ����"
if (( nge_Hour >= 13) && (nge_Hour <= 17))
nge_warmprompt = "����ã�������������𣿼ǵö��������������������ף����"
if (( nge_Hour >= 17) && (nge_Hour <= 18))
nge_warmprompt = "̫����ɽ�ˣ��쿴��Ϧ���ɣ�����������꣬�Ͳ����� ^_^"
if (( nge_Hour >= 18) && (nge_Hour <= 19))
nge_warmprompt = "���Ϻã������������ô��������̳��������˵�ɣ�"
if (( nge_Hour >= 19) && (nge_Hour <= 21))
nge_warmprompt = "æµ��һ�죬���˰ɣ�������Ӧ����Ϸ�������°ɣ�"
if (( nge_Hour >= 22) && (nge_Hour <= 23))
nge_warmprompt = "��ô���ˣ��������������ϴϴ˯�ɣ�˯ǰ�ǵ�ϴϴ��ร�"
document.write("����<font color='#2E9AFE'>����ܰ��ʾ��")
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
        		<td style="border-right:none;" class="nge_inactive">�����Ƽ�</td>
</tr>
       </tbody>
    </table>
</td>
    
    <td class="nge_border_right">
    <table width="100%" cellspacing="0" cellpadding="0" style="height:24px">
        <tbody>
        <tr>

                			<td align="center" style="cursor: pointer;" onmouseover="study_nge_hoverLi('_threads_','0','4');" id="study_nge_t_threads_0" class="nge_inactive">ѧԱ����</td>
        			<td align="center" style="cursor: pointer;" onmouseover="study_nge_hoverLi('_threads_','1','4');" id="study_nge_t_threads_1" class="nge_active">�̳�����</td>
        			<td align="center" style="cursor: pointer;" onmouseover="study_nge_hoverLi('_threads_','2','4');" id="study_nge_t_threads_2" class="nge_inactive">��������</td>
        			<td align="center" style="cursor: pointer;border-right:0px;" onmouseover="study_nge_hoverLi('_threads_','3','4');" id="study_nge_t_threads_3" class="nge_inactive">���Ż</td>

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
<a target="_blank" title="2Сʱ�㶨ǧǧ���������� ..." href="http://open.itcast.cn/home/open/look/mark/3/id/152.htmll?jd1">
<img width="450" height="250" alt="newpic" src="http://bbs.itcast.cn/data/attachment/forum/201412/25/092800cuotqqvs4g9ggzuh.jpg"></a>										
</li>
<li style="width: 450px; height: 250px; display: none;">
<a target="_blank" title="�����˫������������ ..." href="http://bbs.itcast.cn/thread-46775-1-1.html?jd2">
<img width="450" height="250" alt="newpic" src="http://bbs.itcast.cn/data/attachment/forum/201412/25/093125z7ma6c779a999zx9.jpg"></a>										
</li>
<li style="width: 450px; height: 250px; display: none;">
<a target="_blank" title="Ӧ�����ĳ���Ա֮·��ǿ��ҵָ�� ..." href="http://open.itcast.cn/home/open/look/mark/1/id/154.html?jd3">
<img width="450" height="250" alt="newpic" src="http://bbs.itcast.cn/data/attachment/forum/201412/29/102017z7edhz85e63363lj.jpg"></a>										
</li>
<li style="width: 450px; height: 250px; display: none;">
<a target="_blank" title="C++��ѵ˭������" href="http://c.itcast.cn/?jd4">
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
        	<img alt="�б�" src="source/plugin/study_nge/images/list10.gif">
        </td>
        <td class="nge_list_td">
        
                	<div class="nge_undis" id="study_nge_m_threads_0">
                		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="" href="thread-50796-1-1.html">�����ĺڰ��ϴ����ڵ�Java��������ʲôҪ�ʵģ�</a>

</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="���: ѧԱ����
����: ������Ӫ��һ�ڡ�����
����: һ���߹������� (2014-12-29 00:14)
���:  19 �� �ظ�: 3 ��
�ظ�: ��Ц����yuan (2014-12-29 20:22)" href="thread-51637-1-1.html">������Ӫ��һ�ڡ�����</a>

</div>
</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="���: ѧԱ����
����: 2015������!
����: cz_yinmeixia (2014-12-29 10:26)
���:  12 �� �ظ�: 1 ��
�ظ�: ����Ϧ (2014-12-29 10:49)" href="thread-51746-1-1.html">2015������!</a>

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
        			
<a name="xxx" target="_blank" title="���: �ɻ�����
����: Photoshopʷ����ǿ��ͷ��˿�ļ���
����: ��־Զ��ʦ (2013-09-18 23:49)
���:  7121 �� �ظ�: 557 ��
�ظ�: fadacai001 (2014-12-30 21:47)" href="thread-19370-1-1.html">Photoshopʷ����ǿ��ͷ��˿�ļ���</a>

</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="" href="thread-13894-1-1.html">��ҳƽ��-��Ҷ��-PS�����沿��������ҵ��Ƭ�����̳���</a>

</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="���: �ɻ�����
����: Adobe CC 2014 ȫ�����������ע��� X-FORCE�����ƽ�
����: ��־Զ��ʦ (2014-06-29 21:35)
���:  4173 �� �ظ�: 243 ��
�ظ�: pazzieee (2014-12-27 23:43)" href="thread-26647-1-1.html">Adobe CC 2014 ȫ�����������ע��� X-FORCE�����ƽ�</a>

</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="" href="thread-33240-1-1.html">���׷���ʷ�����ʺ���ѧ��C������Ƶ����20000�˶���</a>

</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="" href="thread-17036-1-1.html">����н��ҵ�ر�11��java�о�̬������ʵ������������</a>

</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="" href="thread-28067-1-1.html">�ع���Ʒ.Net����ȫ����Ƶ�̳�2014�� -- 04WinformӦ</a>

</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="" href="thread-22808-1-1.html">1��6��7����ɽ����ʦJS��������Ƶ����</a>

</div>
</div>

        	</div>
        	<div class="nge_undis" id="study_nge_m_threads_2">


        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="���: ��ʳס��
����: �������֮��:���ǲ��������μӵ�ʮ�߽��й��������
����: �ﲩ��ʦ (2013-06-07 01:07)
���:  6383 �� �ظ�: 10 ��
�ظ�: ���á�U�E (2013-07-02 00:06)" href="thread-13371-1-1.html">�������֮��:���ǲ��������μӵ�ʮ�߽��й��������</a>

</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="���: ��ʳס��
����: ���ι�ɲ�˴󴦣����Խ�ʦ����ʱ&mdash;�Ǵ����׸���ʦ�ջ�
����: ��������ʦ (2013-04-08 02:30)
���:  6145 �� �ظ�: 5 ��
�ظ�: ���ǿ (2013-05-31 16:43)" href="thread-10548-1-1.html">���ι�ɲ�˴󴦣����Խ�ʦ����ʱ&mdash;�Ǵ����׸���ʦ�ջ�</a>

</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="���: ��ʳס��
����: ����үͻ������ů����&mdash;&mdash;�Ϻ����ǲ���ס������ƪ��һ
����: ��ƽ (2013-04-02 16:20)
���:  8754 �� �ظ�: 25 ��
�ظ�: ��� (2014-12-10 14:01)" href="thread-10437-1-1.html">����үͻ������ů����&mdash;&mdash;�Ϻ����ǲ���ס������ƪ��һ</a>

</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="���: ��ʳס��
����: ����֮�����ԭ֮��&mdash;&mdash;���� �ɶ����ǲ���֧����
����: �ɶ����� (2013-03-27 14:17)
���:  1974 �� �ظ�: 1 ��
�ظ�: �ɶ����� (2013-03-27 14:37)" href="thread-10233-1-1.html">����֮�����ԭ֮��&mdash;&mdash;���� �ɶ����ǲ���֧����</a>

</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="���: ��ʳס��
����: �ؿ�������java&amp;ƽ������Ԫ�����ͼ��ֱ�� ���ʲ��ϰ�
����: ��ƽ (2013-01-08 15:19)
���:  4453 �� �ظ�: 6 ��
�ظ�: ����ǣ���� (2013-02-27 23:37)" href="thread-7632-1-1.html">�ؿ�������java&amp;ƽ������Ԫ�����ͼ��ֱ�� ���ʲ��ϰ�</a>

</div>
</div>
        		<div class="nge_list_div">
        			<div style="float:right;margin-right:5px;display:inline;overflow:hidden;text-overflow:ellipsis;">
&nbsp;

        				
        			
        			</div>
        			<div style="display:inline;overflow:hidden;text-overflow:ellipsis;">
        			
<a name="xxx" target="_blank" title="���: ��ʳס��
����: ����2013 high���� java��Ԫ�����
����: �����ʦ (2012-12-31 16:22)
���:  1928 �� �ظ�: 2 ��
�ظ�: ָ�� (2012-12-31 19:44)" href="thread-7465-1-1.html">����2013 high���� java��Ԫ�����</a>

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

<!--����end-->

<?php if(!empty($_G['setting']['grid']['showgrid'])) { ?>
<!-- index four grid -->
<div class="fl bm">
<div class="bm bmw cl">
<div id="category_grid" class="bm_c" >
<table cellspacing="0" cellpadding="0"><tr>
<?php if(!$_G['setting']['grid']['gridtype']) { ?>
<td valign="top" class="category_l1">
<div class="newimgbox">
<h4><span class="tit_newimg"></span>����ͼƬ</h4>
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
<h4><span class="tit_subject"></span>��������</h4>
        <ul class="category_newlist">
        <?php if(is_array($grids['newthread'])) foreach($grids['newthread'] as $thread) { ?>        	<?php if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { $thread[tid]=$thread[closed];?><?php } ?>
<li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;extra=<?php echo $extra;?>"<?php if($thread['highlight']) { ?> <?php echo $thread['highlight'];?><?php } if($_G['setting']['grid']['showtips']) { ?> tip="����: <strong><?php echo $thread['oldsubject'];?></strong><br/>����: <?php echo $thread['author'];?> (<?php echo $thread['dateline'];?>)<br/>�鿴/�ظ�: <?php echo $thread['views'];?>/<?php echo $thread['replies'];?>" onmouseover="showTip(this)"<?php } else { ?> title="<?php echo $thread['oldsubject'];?>"<?php } if($_G['setting']['grid']['targetblank']) { ?> target="_blank"<?php } ?>><?php echo $thread['subject'];?></a></li>
<?php } ?>
         </ul>
         </div>
</td>
<td valign="top" class="category_l3">
<div class="replaybox">
<h4><span class="tit_replay"></span>���»ظ�</h4>
        <ul class="category_newlist">
        <?php if(is_array($grids['newreply'])) foreach($grids['newreply'] as $thread) { ?>        	<?php if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { $thread[tid]=$thread[closed];?><?php } ?>
<li><a href="forum.php?mod=redirect&amp;tid=<?php echo $thread['tid'];?>&amp;goto=lastpost#lastpost"<?php if($thread['highlight']) { ?> <?php echo $thread['highlight'];?><?php } if($_G['setting']['grid']['showtips']) { ?>tip="����: <strong><?php echo $thread['oldsubject'];?></strong><br/>����: <?php echo $thread['author'];?> (<?php echo $thread['dateline'];?>)<br/>�鿴/�ظ�: <?php echo $thread['views'];?>/<?php echo $thread['replies'];?>" onmouseover="showTip(this)"<?php } else { ?> title="<?php echo $thread['oldsubject'];?>"<?php } if($_G['setting']['grid']['targetblank']) { ?> target="_blank"<?php } ?>><?php echo $thread['subject'];?></a></li>
<?php } ?>
         </ul>
         </div>
</td>
<td valign="top" class="category_l3">
<div class="hottiebox">
<h4><span class="tit_hottie"></span>����</h4>
        <ul class="category_newlist">
        <?php if(is_array($grids['hot'])) foreach($grids['hot'] as $thread) { ?>        	<?php if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { $thread[tid]=$thread[closed];?><?php } ?>
<li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;extra=<?php echo $extra;?>"<?php if($thread['highlight']) { ?> <?php echo $thread['highlight'];?><?php } if($_G['setting']['grid']['showtips']) { ?> tip="����: <strong><?php echo $thread['oldsubject'];?></strong><br/>����: <?php echo $thread['author'];?> (<?php echo $thread['dateline'];?>)<br/>�鿴/�ظ�: <?php echo $thread['views'];?>/<?php echo $thread['replies'];?>" onmouseover="showTip(this)"<?php } else { ?> title="<?php echo $thread['oldsubject'];?>"<?php } if($_G['setting']['grid']['targetblank']) { ?> target="_blank"<?php } ?>><?php echo $thread['subject'];?></a></li>
<?php } ?>
         </ul>
         </div>
</td>
<?php if($_G['setting']['grid']['gridtype']) { ?>
<td valign="top" class="category_l4">
<div class="goodtiebox">
<h4><span class="tit_goodtie"></span>��������</h4>
<ul class="category_newlist"><?php if(is_array($grids['digest'])) foreach($grids['digest'] as $thread) { if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { $thread[tid]=$thread[closed];?><?php } ?>
<li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;extra=<?php echo $extra;?>"<?php if($thread['highlight']) { ?> <?php echo $thread['highlight'];?><?php } if($_G['setting']['grid']['showtips']) { ?> tip="����: <strong><?php echo $thread['oldsubject'];?></strong><br/>����: <?php echo $thread['author'];?> (<?php echo $thread['dateline'];?>)<br/>�鿴/�ظ�: <?php echo $thread['views'];?>/<?php echo $thread['replies'];?>" onmouseover="showTip(this)"<?php } else { ?> title="<?php echo $thread['oldsubject'];?>"<?php } if($_G['setting']['grid']['targetblank']) { ?> target="_blank"<?php } ?>><?php echo $thread['subject'];?></a></li>
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
<h2><?php echo $_G['setting']['navs']['2']['navname'];?>�ȵ�</h2>
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
<img id="category_-1_img" src="<?php echo IMGDIR;?>/<?php echo $collapse['collapseimg_-1'];?>" title="����/չ��" alt="����/չ��" onclick="toggle_collapse('category_-1');" />
</span>
<h2><a href="forum.php?mod=collection&amp;op=my">�Ҷ��ĵ�ר��</a></h2>
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
<dd><em>����: <?php echo dnumber($colletion['threadnum']); ?></em>, <em>����: <?php echo dnumber($colletion['commentnum']); ?></em></dd>
<dd>
<?php if($colletion['lastpost']) { if($forumcolumns < 3) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $colletion['lastpost'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($colletion['lastsubject'], 30); ?></a> <cite><?php echo dgmdate($colletion[lastposttime]);?> <?php if($colletion['lastposter']) { ?><?php echo $colletion['lastposter'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $colletion['lastpost'];?>&amp;goto=lastpost#lastpost">��󷢱�: <?php echo dgmdate($colletion[lastposttime]);?></a>
<?php } } else { ?>
��δ
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
<img id="category_0_img" src="<?php echo IMGDIR;?>/<?php echo $collapse['collapseimg_0'];?>" title="����/չ��" alt="����/չ��" onclick="toggle_collapse('category_0');" />
</span>
<h2><a href="home.php?mod=space&amp;do=favorite&amp;type=forum">���ղصİ��</a></h2>
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
<dt><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a><?php if($forum['todayposts'] && !$forum['redirect']) { ?><em class="xw0 xi1" title="����"> (<?php echo $forum['todayposts'];?>)</em><?php } ?></dt>
<?php if(empty($forum['redirect'])) { ?><dd><em>����: <?php echo dnumber($forum['threads']); ?></em>, <em>����: <?php echo dnumber($forum['posts']); ?></em></dd><?php } ?>
<dd>
<?php if($forum['permission'] == 1) { ?>
˽�ܰ��
<?php } else { if($forum['redirect']) { ?>
<a href="<?php echo $forumurl;?>" class="xi2">���ӵ��ⲿ��ַ</a>
<?php } elseif(is_array($forum['lastpost'])) { if($forumcolumns < 3) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($forum['lastpost']['subject'], 30); ?></a> <cite><?php echo $forum['lastpost']['dateline'];?> <?php if($forum['lastpost']['author']) { ?><?php echo $forum['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost">��󷢱�: <?php echo $forum['lastpost']['dateline'];?></a>
<?php } } else { ?>
��δ
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
<h2><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a><?php if($forum['todayposts'] && !$forum['redirect']) { ?><em class="xw0 xi1" title="����"> (<?php echo $forum['todayposts'];?>)</em><?php } ?></h2>
<?php if($forum['description']) { ?><p class="xg2"><?php echo $forum['description'];?></p><?php } if($forum['subforums']) { ?><p>�Ӱ��: <?php echo $forum['subforums'];?></p><?php } if($forum['moderators']) { ?><p>����: <span class="xi2"><?php echo $forum['moderators'];?></span></p><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]];?>
</td>
<td class="fl_i">
<?php if(empty($forum['redirect'])) { ?><span class="xi2"><?php echo dnumber($forum['threads']); ?></span><span class="xg1"> / <?php echo dnumber($forum['posts']); ?></span><?php } ?>
</td>
<td class="fl_by">
<div>
<?php if($forum['permission'] == 1) { ?>
˽�ܰ��
<?php } else { if($forum['redirect']) { ?>
<a href="<?php echo $forumurl;?>" class="xi2">���ӵ��ⲿ��ַ</a>
<?php } elseif(is_array($forum['lastpost'])) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($forum['lastpost']['subject'], 30); ?></a> <cite><?php echo $forum['lastpost']['dateline'];?> <?php if($forum['lastpost']['author']) { ?><?php echo $forum['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
��δ
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
<img id="category_<?php echo $cat['fid'];?>_img" src="<?php echo IMGDIR;?>/<?php echo $cat['collapseimg'];?>" title="����/չ��" alt="����/չ��" onclick="toggle_collapse('category_<?php echo $cat['fid'];?>');" />
</span>
<?php if($cat['moderators']) { ?><span class="y">��������: <?php echo $cat['moderators'];?></span><?php } $caturl = !empty($cat['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$cat['domain'].'.'.$_G['setting']['domain']['root']['forum'] : '';?><h2><a href="<?php if(!empty($caturl)) { ?><?php echo $caturl;?><?php } else { ?>forum.php?gid=<?php echo $cat['fid'];?><?php } ?>" style="<?php if($cat['extra']['namecolor']) { ?>color: <?php echo $cat['extra']['namecolor'];?>;<?php } ?>"><?php echo $cat['name'];?></a></h2>
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
<dt><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a><?php if($forum['todayposts'] && !$forum['redirect']) { ?><em class="xw0 xi1" title="����"> (<?php echo $forum['todayposts'];?>)</em><?php } ?></dt>
<?php if(empty($forum['redirect'])) { ?><dd><em>����: <?php echo dnumber($forum['threads']); ?></em>, <em>����: <?php echo dnumber($forum['posts']); ?></em></dd><?php } ?>
<dd>
<?php if($forum['permission'] == 1) { ?>
˽�ܰ��
<?php } else { if($forum['redirect']) { ?>
<a href="<?php echo $forumurl;?>" class="xi2">���ӵ��ⲿ��ַ</a>
<?php } elseif(is_array($forum['lastpost'])) { if($cat['forumcolumns'] < 3) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($forum['lastpost']['subject'], 30); ?></a> <cite><?php echo $forum['lastpost']['dateline'];?> <?php if($forum['lastpost']['author']) { ?><?php echo $forum['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost">��󷢱�: <?php echo $forum['lastpost']['dateline'];?></a>
<?php } } else { ?>
��δ
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
<h2><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a><?php if($forum['todayposts'] && !$forum['redirect']) { ?><em class="xw0 xi1" title="����"> (<?php echo $forum['todayposts'];?>)</em><?php } ?></h2>
<?php if($forum['description']) { ?><p class="xg2"><?php echo $forum['description'];?></p><?php } if($forum['subforums']) { ?><p>�Ӱ��: <?php echo $forum['subforums'];?></p><?php } if($forum['moderators']) { ?><p>����: <span class="xi2"><?php echo $forum['moderators'];?></span></p><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]];?>
</td>
<td class="fl_i">
<?php if(empty($forum['redirect'])) { ?><span class="xi2"><?php echo dnumber($forum['threads']); ?></span><span class="xg1"> / <?php echo dnumber($forum['posts']); ?></span><?php } ?>
</td>
<td class="fl_by">
<div>
<?php if($forum['permission'] == 1) { ?>
˽�ܰ��
<?php } else { if($forum['redirect']) { ?>
<a href="<?php echo $forumurl;?>" class="xi2">���ӵ��ⲿ��ַ</a>
<?php } elseif(is_array($forum['lastpost'])) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($forum['lastpost']['subject'], 30); ?></a> <cite><?php echo $forum['lastpost']['dateline'];?> <?php if($forum['lastpost']['author']) { ?><?php echo $forum['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
��δ
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
<img id="category_-2_img" src="<?php echo IMGDIR;?>/<?php echo $collapse['collapseimg_-2'];?>" title="����/չ��" alt="����/չ��" onclick="toggle_collapse('category_-2');" />
</span>
<h2><a href="forum.php?mod=collection">��ר���Ƽ�</a></h2>
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
<dd><em>����: <?php echo dnumber($colletion['threadnum']); ?></em>, <em>����: <?php echo dnumber($colletion['commentnum']); ?></em></dd>
<dd>
<?php if($colletion['lastpost']) { if($forumcolumns < 3) { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $colletion['lastpost'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($colletion['lastsubject'], 30); ?></a> <cite><?php echo dgmdate($colletion[lastposttime]);?> <?php if($colletion['lastposter']) { ?><?php echo $colletion['lastposter'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
<?php } else { ?>
<a href="forum.php?mod=redirect&amp;tid=<?php echo $colletion['lastpost'];?>&amp;goto=lastpost#lastpost">��󷢱�: <?php echo dgmdate($colletion[lastposttime]);?></a>
<?php } } else { ?>
��δ
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
<span class="o"><a href="forum.php?showoldetails=no#online" title="����/չ��"><img src="<?php echo IMGDIR;?>/collapsed_no.gif" alt="����/չ��" /></a></span>
<h3>
<strong><a href="home.php?mod=space&amp;do=friend&amp;view=online&amp;type=member">���߻�Ա</a></strong>
<span class="xs1">- <strong><?php echo $onlinenum;?></strong> ������
- <strong><?php echo $membercount;?></strong> ��Ա(<strong><?php echo $invisiblecount;?></strong> ����),
<strong><?php echo $guestcount;?></strong> λ�ο�
- ��߼�¼�� <strong><?php echo $onlineinfo['0'];?></strong> �� <strong><?php echo $onlineinfo['1'];?></strong>.</span>
</h3>
<?php } else { if(empty($_G['setting']['sessionclose'])) { ?>
<span class="o"><a href="forum.php?showoldetails=yes#online" title="����/չ��"><img src="<?php echo IMGDIR;?>/collapsed_yes.gif" alt="����/չ��" /></a></span>
<?php } ?>
<h3>
<strong>
<?php if(!empty($_G['setting']['whosonlinestatus'])) { ?>
���߻�Ա
<?php } else { ?>
<a href="home.php?mod=space&amp;do=friend&amp;view=online&amp;type=member">���߻�Ա</a>
<?php } ?>
</strong>
<span class="xs1">- �ܼ� <strong><?php echo $onlinenum;?></strong> ������
<?php if($membercount) { ?>- <strong><?php echo $membercount;?></strong> ��Ա,<strong><?php echo $guestcount;?></strong> λ�ο�<?php } ?>
- ��߼�¼�� <strong><?php echo $onlineinfo['0'];?></strong> �� <strong><?php echo $onlineinfo['1'];?></strong>.</span>
</h3>
<?php } ?>
</div>
<?php if($_G['setting']['whosonlinestatus'] && $detailstatus) { ?>
<dl id="onlinelist" class="bm_c">
<dt class="ptm pbm bbda"><?php echo $_G['cache']['onlinelist']['legend'];?></dt>
<?php if($detailstatus) { ?>
<dd class="ptm pbm">
<ul class="cl">
<?php if($whosonline) { if(is_array($whosonline)) foreach($whosonline as $key => $online) { ?><li title="ʱ��: <?php echo $online['lastactivity'];?>">
<img src="<?php echo STATICURL;?>image/common/<?php echo $online['icon'];?>" alt="icon" />
<?php if($online['uid']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $online['uid'];?>"><?php echo $online['username'];?></a>
<?php } else { ?>
<?php echo $online['username'];?>
<?php } ?>
</li>
<?php } } else { ?>
<li style="width: auto">��ǰֻ���οͻ������Ա����</li>
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