<?php exit; ?>
<!--{subtemplate common/header_common}-->
<meta name="application-name" content="$_G['setting']['bbname']" />
<meta name="msapplication-tooltip" content="$_G['setting']['bbname']" />
<!--{if $_G['setting']['portalstatus']}-->
<meta name="msapplication-task" content="name=$_G['setting']['navs'][1]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['portal']) ? 'http://'.$_G['setting']['domain']['app']['portal'] : $_G[siteurl].'portal.php'};icon-uri={$_G[siteurl]}{IMGDIR}/portal.ico" />
<!--{/if}-->
<meta name="msapplication-task" content="name=$_G['setting']['navs'][2]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['forum']) ? 'http://'.$_G['setting']['domain']['app']['forum'] : $_G[siteurl].'forum.php'};icon-uri={$_G[siteurl]}{IMGDIR}/bbs.ico" />
<!--{if $_G['setting']['groupstatus']}-->
<meta name="msapplication-task" content="name=$_G['setting']['navs'][3]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['group']) ? 'http://'.$_G['setting']['domain']['app']['group'] : $_G[siteurl].'group.php'};icon-uri={$_G[siteurl]}{IMGDIR}/group.ico" />
<!--{/if}-->
<!--{if helper_access::check_module('feed')}-->
<meta name="msapplication-task" content="name=$_G['setting']['navs'][4]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['home']) ? 'http://'.$_G['setting']['domain']['app']['home'] : $_G[siteurl].'home.php'};icon-uri={$_G[siteurl]}{IMGDIR}/home.ico" />
<!--{/if}-->
<!--{if $_G['basescript'] == 'forum' && $_G['setting']['archiver']}-->
<link rel="archives" title="$_G['setting']['bbname']" href="{$_G[siteurl]}archiver/" />
<!--{/if}-->
<!--{if !empty($rsshead)}-->
$rsshead<!--{/if}-->
<!--{if widthauto()}-->

<link rel="stylesheet" id="css_widthauto" type="text/css" href="data/cache/style_{STYLEID}_widthauto.css?{VERHASH}" />
<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
<!--{/if}-->
<!--{if $_G['basescript'] == 'forum' || $_G['basescript'] == 'group'}-->
<script type="text/javascript" src="{$_G[setting][jspath]}forum.js?{VERHASH}"></script>
<!--{elseif $_G['basescript'] == 'home' || $_G['basescript'] == 'userapp'}-->
<script type="text/javascript" src="{$_G[setting][jspath]}home.js?{VERHASH}"></script>
<!--{elseif $_G['basescript'] == 'portal'}-->
<script type="text/javascript" src="{$_G[setting][jspath]}portal.js?{VERHASH}"></script>
<!--{/if}-->
<!--{if $_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->
<script type="text/javascript" src="{$_G[setting][jspath]}portal.js?{VERHASH}"></script>
<!--{/if}-->
<!--{if $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->
<link rel="stylesheet" type="text/css" id="diy_common" href="data/cache/style_{STYLEID}_css_diy.css?{VERHASH}" />
<!--{/if}-->

<meta http-equiv="X-UA-Compatible" content="IE=8" >
<meta http-equiv="X-UA-Compatible" content="IE=9" >
<meta http-equiv="X-UA-Compatible" content="IE=edge" >
<script language="javascript" type="text/javascript">
<!-- 
if (top.location != self.location)top.location=self.location;
// -->
</script>




<script type="text/javascript" src="$_G['style'][styleimgdir]/tools.js"></script>
<script type="text/javascript">
var jq=jQuery.noConflict();
</script>
<script type="text/javascript" src="$_G['style'][styleimgdir]/slider.js"></script>
<script language="javascript" type="text/javascript">
function killErrors() {
	return true;
	}
window.onerror = killErrors;
</script>
</head>
<body id="nv_{$_G[basescript]}" class="pg_{CURMODULE}{if $_G['basescript'] === 'portal' && CURMODULE === 'list' && !empty($cat)} {$cat['bodycss']}{/if}" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<!--{if $_GET['diy'] == 'yes' && check_diy_perm($topic)}--> 
<!--{template common/header_diy}--> 
<!--{/if}--> 
<!--{if check_diy_perm($topic)}--> 
<!--{template common/header_diynav}--> 
<!--{/if}--> 
<!--{if CURMODULE == 'topic' && $topic && empty($topic['useheader']) && check_diy_perm($topic)}--> 
$diynav 
<!--{/if}--> 
<!--{if empty($topic) || $topic['useheader']}--> 
<!--{if $_G['setting']['mobile']['allowmobile'] && (!$_G['setting']['cacheindexlife'] && !$_G['setting']['cachethreadon'] || $_G['uid']) && ($_GET['diy'] != 'yes' || !$_GET['inajax']) && ($_G['mobile'] != '' && $_G['cookie']['mobile'] == '' && $_GET['mobile'] != 'no')}-->
<div class="xi1 bm bm_c"> {lang your_mobile_browser}<a href="{$_G['siteurl']}forum.php?mobile=yes">{lang go_to_mobile}</a> <span class="xg1">|</span> <a href="$_G['setting']['mobile']['nomobileurl']">{lang to_be_continue}</a> </div>
<!--{/if}--> 
<!--{if $_G['setting']['shortcut'] && $_G['member'][credits] >= $_G['setting']['shortcut']}-->
<div id="shortcut"> <span><a href="javascript:;" id="shortcutcloseid" title="{lang close}">{lang close}</a></span> {lang shortcut_notice} <a href="javascript:;" id="shortcuttip">{lang shortcut_add}</a> </div>
<script type="text/javascript">setTimeout(setShortcut, 2000);</script> 
<!--{/if}-->

<div>
<div class="cl login-info-wrap">
	<div class="cl ysection">
		<div class="y">
		<!--{if $_G['uid']}-->
			<div class="has-login">
			        <!--{if  !empty($_G['style']['extstyle'])}--><a id="sslct" href="javascript:;" onMouseOver="delayShow(this, function() {showMenu({'ctrlid':'sslct','pos':'34!'})});">{lang changestyle}</a><!--{/if}--> 
			
				<a href="home.php?mod=space&uid=$_G[uid]" target="_blank" title="{lang visit_my_space}">{$_G[member][username]}</a>
				<a href="{if $_G['uid']}home.php{else}javascript:;{/if}" id="qmenu" class="" onmouseover="showMenu(this.id);">��ݵ���</a>
				<!--{hook/global_usernav_extra1}-->
				<a href="home.php?mod=spacecp">{lang setup}</a>
				<a href="home.php?mod=space&do=pm" id="pm_ntc"{if $_G[member][newpm]} class="new"{/if}>{lang pm_center}</a>
				<a href="home.php?mod=space&do=notice" id="myprompt"{if $_G[member][newprompt]} class="new"{/if}>{lang remind}<!--{if $_G[member][newprompt]}-->($_G[member][newprompt])<!--{/if}--></a><span id="myprompt_check"></span>
				<!--{if $_G['setting']['taskon'] && !empty($_G['cookie']['taskdoing_'.$_G['uid']])}--><span class="pipe">|</span><a href="home.php?mod=task&item=doing" id="task_ntc" class="new">{lang task_doing}</a><!--{/if}-->
				<!--{if ($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))}-->
				<a href="portal.php?mod=portalcp"><!--{if $_G['setting']['portalstatus'] }-->{lang portal_manage}<!--{else}-->{lang portal_block_manage}<!--{/if}--></a>
				<!--{/if}-->
				<!--{if $_G['uid'] && $_G['group']['radminid'] > 1}-->
				<a href="forum.php?mod=modcp&fid=$_G[fid]" target="_blank">{lang forum_manager}</a>
				<!--{/if}-->
				<!--{if $_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)}-->
				<a href="admin.php" target="_blank">{lang admincp}</a>
				<!--{/if}-->
				<!--{if check_diy_perm($topic)}--><a href="javascript:saveUserdata('diy_advance_mode', '1');openDiy();"><i class="ic21"></i>DIY����</a><!--{/if}-->
				<!--{hook/global_usernav_extra2}-->
				<a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
			</div>
		<!--{else}-->
			<div class="no-login">
			<!--{if  !empty($_G['style']['extstyle'])}--><a id="sslct" href="javascript:;" onMouseOver="delayShow(this, function() {showMenu({'ctrlid':'sslct','pos':'34!'})});">{lang changestyle}</a><!--{/if}--> 
			    <!--{hook/global_cpnav_extra2}-->
				<!--{loop $_G['setting']['topnavs'][1] $nav}-->
				<!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}-->$nav[code]<!--{/if}-->
				<!--{/loop}-->
				<a onclick="showWindow('login', this.href);return false;" href="member.php?mod=logging&amp;action=login" rel="nofollow">�û���¼</a>
				<a href="member.php?mod=register" rel="nofollow">ע���˺�</a>
			</div>
		<!--{/if}-->
		</div>

		<div class="get-index">
			<!--{loop $_G['setting']['topnavs'][0] $nav}-->
			<!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}-->$nav[code]<!--{/if}-->
			<!--{/loop}-->
			<!--{hook/global_cpnav_extra1}-->
		</div>
	</div>
</div>

<!--{if !IS_ROBOT}--> 

<!--{if $_G['uid']}-->
<ul id="myprompt_menu" class="p_pop" style="display: none;">
  <li><a href="home.php?mod=space&do=pm" id="pm_ntc" style="background-repeat: no-repeat; background-position: 0 50%;"><em class="prompt_news{if empty($_G[member][newpm])}_0{/if}"></em>{lang pm_center}</a></li>
  <li><a href="home.php?mod=follow&do=follower"><em class="prompt_follower{if empty($_G[member][newprompt_num][follower])}_0{/if}"></em><!--{lang notice_interactive_follower}-->{if $_G[member][newprompt_num][follower]}($_G[member][newprompt_num][follower]){/if}</a></li>
  
  <!--{if $_G[member][newprompt] && $_G[member][newprompt_num][follow]}-->
  <li><a href="home.php?mod=follow"><em class="prompt_concern"></em><!--{lang notice_interactive_follow}-->($_G[member][newprompt_num][follow])</a></li>
  <!--{/if}--> 
  <!--{if $_G[member][newprompt]}--> 
  <!--{loop $_G['member']['category_num'] $key $val}-->
  <li><a href="home.php?mod=space&do=notice&view=$key"><em class="notice_$key"></em><!--{echo lang('template', 'notice_'.$key)}-->(<span class="rq">$val</span>)</a></li>
  <!--{/loop}--> 
  <!--{/if}--> 
  <!--{if empty($_G['cookie']['ignore_notice'])}-->
  <li class="ignore_noticeli"><a href="javascript:;" onClick="setcookie('ignore_notice', 1);hideMenu('myprompt_menu')" title="{lang temporarily_to_remind}"><em class="ignore_notice"></em></a></li>
  <!--{/if}-->
</ul>
<!--{/if}--> 

<!--{if !empty($_G['style']['extstyle'])}-->
<div id="sslct_menu" class="cl p_pop" style="display: none;"> 
  <!--{if !$_G[style][defaultextstyle]}--><span class="sslct_btn" onClick="extstyle('')" title="{lang default}"><i></i> {lang default}</span><!--{/if}--> 
  <!--{loop $_G['style']['extstyle'] $extstyle}--> 
  <span class="sslct_btn" onClick="extstyle('$extstyle[0]')" title="$extstyle[1]"><i style='background:$extstyle[2]'></i> $extstyle[1] </span> 
  <!--{/loop}--> 
</div>
<!--{/if}--> 

<!--{subtemplate common/header_qmenu}--> 
<!--{/if}--> 

<!--{ad/headerbanner/wp a_h}-->
<div id="hd">
  <div class="wp">
    <div class="hdc cl"> <div id="headlogo">
      <!--{eval $mnid = getcurrentnav();}-->
      <h2><!--{if !isset($_G['setting']['navlogos'][$mnid])}--><a href="{if $_G['setting']['domain']['app']['default']}http://{$_G['setting']['domain']['app']['default']}/{else}./{/if}" title="$_G['setting']['bbname']">{$_G['style']['boardlogo']}</a><!--{else}-->$_G['setting']['navlogos'][$mnid]<!--{/if}--></h2></div>
<div id="headscbar">
<!--{subtemplate common/sxp_search}--> 
</div>	      
</div>
  </div>
  <div class="jacket">
  <div id="sxp_nv">
    <ul>
      <!--{loop $_G['setting']['navs'] $nav}--> 
      <!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}-->
      <li {if $mnid == $nav[navid]}class="a" {/if}$nav[nav]></li>
      <!--{/if}--> 
      <!--{/loop}-->
    </ul>
    <!--{hook/global_nav_extra}--> 
  </div>
  </div>
  <!--{if !empty($_G['setting']['plugins']['jsmenu'])}-->
  <ul class="p_pop h_pop" id="plugin_menu" style="display: none">
    <!--{loop $_G['setting']['plugins']['jsmenu'] $module}--> 
    <!--{if !$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])}-->
    <li>$module[url]</li>
    <!--{/if}--> 
    <!--{/loop}-->
  </ul>
  <!--{/if}--> 
  $_G[setting][menunavs]
  <div id="mu" class="cl"> 
    <!--{if $_G['setting']['subnavs']}--> 
    <!--{loop $_G[setting][subnavs] $navid $subnav}--> 
    <!--{if $_G['setting']['navsubhover'] || $mnid == $navid}-->
    <ul class="cl {if $mnid == $navid}current{/if}" id="snav_$navid" style="display:{if $mnid != $navid}none{/if}">
      $subnav
    </ul>
    <!--{/if}--> 
    <!--{/loop}--> 
    <!--{/if}--> 
  </div>
  <!--{subtemplate common/sxp_nv_sub}-->	
  <!--{ad/subnavbanner/a_mu}--> 
</div>

<!--{hook/global_header}--> 
<!--{/if}-->

<div id="wp" class="wp">
