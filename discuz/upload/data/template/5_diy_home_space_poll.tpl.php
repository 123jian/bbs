<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('space_poll');
0
|| checktplrefresh('./template/default/home/space_poll.htm', './template/default/home/space_thread_nav.htm', 1419987386, 'diy', './data/template/5_diy_home_space_poll.tpl.php', './template/an_paly', 'home/space_poll')
;?>
<?php $_G[home_tpl_spacemenus][] = "<a href=\"home.php?mod=space&amp;uid=$space[uid]&amp;do=poll&amp;view=me\">TA ������ͶƱ</a>";?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em> 
<a href="home.php?mod=space&amp;do=thread">����</a> <em>&rsaquo;</em>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=poll&amp;view=me">ͶƱ</a>
</div>
</div>

<style id="diy_style" type="text/css"></style>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>

<div id="ct" class="ct2_a wp cl">
<div class="mn">
<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
<div class="bm bw0">
<?php if((!$_G['uid'] && !$space['uid']) || $space['self']) { ?>
<h1 class="mt"><img alt="poll" src="<?php echo IMGDIR;?>/pollsmall.gif" class="vm" /> ͶƱ</h1>
<?php } if($space['self']) { ?>
<ul class="tb cl">
<li<?php echo $actives['we'];?>><a href="home.php?mod=space&amp;do=poll&amp;view=we">���ѷ����ͶƱ</a></li>
<li<?php echo $actives['me'];?>><a href="home.php?mod=space&amp;do=poll&amp;view=me">�ҵ�ͶƱ</a></li>
<?php if($_G['group']['allowpostpoll']) { ?>
<li class="o">
<?php if($_G['setting']['pollforumid']) { ?>
<a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['setting']['pollforumid'];?>&amp;special=1">������ͶƱ</a>
<?php } else { ?>
<a href="forum.php?mod=misc&amp;action=nav&amp;special=1" onclick="showWindow('nav', this.href)">������ͶƱ</a>
<?php } ?>
</li>
<?php } ?>
</ul>
<?php } else { include template('home/space_menu'); } if($_GET['view'] == 'me') { ?>
<p class="tbmu">
<a href="home.php?mod=space&amp;do=poll&amp;view=me"<?php echo $filteractives['publish'];?>>�ҷ����</a><span class="pipe">|</span>
<a href="home.php?mod=space&amp;do=poll&amp;view=me&amp;filter=join"<?php echo $filteractives['join'];?>>�Ҳ���� </a>
</p>
<?php } if($userlist) { ?>
<p class="tbmu">
�����Ѳ鿴
<select name="fuidsel" onchange="fuidgoto(this.value);" class="ps">
<option value="">ȫ������</option><?php if(is_array($userlist)) foreach($userlist as $value) { ?><option value="<?php echo $value['fuid'];?>"<?php echo $fuid_actives[$value['fuid']];?>><?php echo $value['fusername'];?></option>
<?php } ?>
</select>
</p>
<?php } if($count) { ?>
<ul class="el pll"><?php if(is_array($list)) foreach($list as $thread) { ?><li class="cl">
<div class="u z">
<a href="home.php?mod=space&amp;uid=<?php echo $thread['authorid'];?>" class="avt" c="1" target="_blank"><?php echo avatar($thread[authorid],small);?></a>
<p class="mtn"><a href="home.php?mod=space&amp;uid=<?php echo $thread['authorid'];?>" target="_blank"><?php echo $thread['author'];?></a></p>
</div>
<div class="s y">
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>" class="joins" target="_blank">
<span><?php echo $thread['poll']['voters'];?></span>�˲���
</a>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>" class="go" target="_blank">ȥͶƱ</a>
</div>
<div class="c">
<h4 class="h"><a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>" target="_blank"><?php echo $thread['subject'];?></a></h4>
<ol><?php if(is_array($thread['poll']['pollpreview'])) foreach($thread['poll']['pollpreview'] as $key => $value) { ?><li><?php echo $value;?></li>
<?php } ?>
<li style="list-style-type: none;">
...
</li>
</ol>
<div class="mtn xg1">
<?php echo $thread['dateline'];?>
<span class="pipe">|</span>
�ղ� <?php echo $thread['favtimes'];?>
<span class="pipe">|</span>
���� <?php echo $thread['sharetimes'];?>
<span class="pipe">|</span>
�ȶ� <?php echo $thread['heats'];?>
</div>
</div>
</li>
<?php } ?>
</ul>
<?php if($hiddennum) { ?>
<p class="mtm">��ҳ�� <?php echo $hiddennum;?> ��ͶƱ����˽���������</p>
<?php } if($multi) { ?><div class="pgs cl mtm"><?php echo $multi;?></div><?php } } else { ?>
<div class="emp">��û����ص�ͶƱ</div>
<?php } ?>
</div>
<!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]-->
</div>
<div class="appl"><div class="tbn">
<h2 class="mt bbda">����</h2>
<ul>
<li <?php echo $opactives['thread'];?>><a href="forum.php?mod=guide&amp;view=my">ȫ��</a></li>
<li <?php echo $opactives['activity'];?>><a href="home.php?mod=space&amp;do=activity&amp;view=me">�</a></li>
<li <?php echo $opactives['poll'];?>><a href="home.php?mod=space&amp;do=poll&amp;view=me">ͶƱ</a></li>
<li <?php echo $opactives['reward'];?>><a href="home.php?mod=space&amp;do=reward&amp;view=me">����</a></li>
<li <?php echo $opactives['trade'];?>><a href="home.php?mod=space&amp;do=trade&amp;view=me">��Ʒ</a></li>
<?php if(!empty($_G['setting']['plugins']['space_thread'])) { if(is_array($_G['setting']['plugins']['space_thread'])) foreach($_G['setting']['plugins']['space_thread'] as $id => $module) { if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?><li<?php if($_GET['id'] == $id) { ?> class="a"<?php } ?>><a href="home.php?mod=space&amp;do=plugin&amp;op=thread&amp;id=<?php echo $id;?>"><?php echo $module['name'];?></a></li><?php } } } ?>
</ul>
</div><div class="drag">
<!--[diy=diy2]--><div id="diy2" class="area"></div><!--[/diy]-->
</div>

</div>
</div>

<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>

<script type="text/javascript">
function fuidgoto(fuid) {
var parameter = fuid != '' ? '&fuid='+fuid : '';
window.location.href = 'home.php?mod=space&do=poll&view=we'+parameter;
}
</script><?php include template('common/footer'); ?>