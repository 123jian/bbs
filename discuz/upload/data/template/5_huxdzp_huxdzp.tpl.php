<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('huxdzp');?><?php include template('common/header'); ?><style>
.fct2 .fmn{ float: left; width: 755px; margin-bottom: 1em; }
.fsd { float: right; width: 200px; overflow: hidden; _overflow-y: visible; }
.huxdzp{ padding: 5px 10px 0; border-top: solid <?php echo WRAPBORDERCOLOR;?>; border-width: 1px 0; background-color: <?php echo COMMONBG;?>; height:100px; }
.huxdzp p{text-align:left;}
.huxdzp li{padding-bottom:5px;}
.add{ height:240px;width:240px;}
.txt {border:solid 1px #999;width:220px;padding:3px;}
</style>
<script src="<?php echo $_G['setting']['jspath'];?>home_face.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<div id="pt" class="bm cl">
<div class="z">
<a href="index.php" title="首页" class="nvhm"><?php echo $_G['setting']['bbname'];?></a><em> &rsaquo; </em><a href="plugin.php?id=huxdzp:huxdzp"><?php echo $dzpname;?></a>
</div>
</div>

<div id="ct" class="fct2 wp cl">
<div class="fmn">
              <ul class="tb cl">
<li <?php echo $atclassa;?>><a href="plugin.php?id=huxdzp:huxdzp">!pname!</a></li>
<li <?php echo $atclassb;?>><a href="plugin.php?id=huxdzp:huxdzp&amp;action=jplist">奖品一览</a></li>
<li <?php echo $atclassc;?>><a href="plugin.php?id=huxdzp:huxdzp&amp;action=myjl">中奖记录</a></li>
<?php if(!empty($uid)) { if($adminid == '1') { ?>
<li <?php echo $atclasse;?>><a href="plugin.php?id=huxdzp:huxdzp&amp;action=managejpff">奖品发放</a></li>
<?php } } ?>
              </ul>
<div style="border-bottom:1px solid #CCC;border-left:1px solid #CCC;border-right:1px solid #CCC;padding:5px;">
欢迎您 <?php if($uid) { ?><font color=blue><?php echo $username;?></font> ,您的<?php echo $paymoneyname;?>: <font color=red><?php echo $mycash;?></font> <?php echo $paymoneyunit;?><?php } else { ?>Guest<?php } ?>,每次抽奖消耗<?php echo $paymoneyname;?>: <font color=red><?php echo $paymoneynum;?></font> <?php echo $paymoneyunit;?>
</div>
<div style="padding:2px;">

</div>
<?php if($action == 'managejp') { ?>
<div style="border:1px solid #CCC;padding:5px;">
<table width="100%" border="0" cellspacing="0" cellpadding="1" align="center">
      <th style="padding:2px;"><strong>ID</strong></th><th><strong>奖品名称</strong></th><th><strong>关联号码</strong></th><th><strong>奖品类别</strong></th><th><strong>奖励积分数值</strong></th><th><strong>操作</strong></th><?php if(is_array($mnlist)) foreach($mnlist as $varmn) { ?>      <tr>
        <td style="padding:2px;"><?php echo $varmn['jpid'];?></td>
        <td><?php echo $varmn['jpname'];?></td>
        <td><?php echo $varmn['jid'];?>号奖项</td>
        <td><?php if($varmn['jptype'] == '1') { ?>积分一<?php } elseif($varmn['jptype'] == '2') { ?>积分二<?php } else { ?>其他<?php } ?></td>
        <td><?php echo $varmn['jfnum'];?></td>
        <td><a href="plugin.php?id=huxdzp:huxdzp&amp;action=edit&amp;jpid=<?php echo $varmn['jpid'];?>" onclick="showWindow('huxdzp', this.href,'get',0);return false;">编辑</a> <a href="plugin.php?id=huxdzp:huxdzp&amp;action=jpdel&amp;jpid=<?php echo $varmn['jpid'];?>">删除</a></td>
      </tr>
<?php } ?>
</table>
        </div>
<div style="padding:2px;">

</div>
<?php } elseif($action == 'jplist') { ?>
<div style="border:1px solid #CCC;padding:5px;">
<table width="100%" border="0" cellspacing="0" cellpadding="1" align="center"><?php if(is_array($jxlist)) foreach($jxlist as $varjx) { ?>  <tr>
     <td style="padding:10px;"><strong><font color="blue"><?php echo $varjx['jname'];?></font></td>
  </tr>
<?php } ?>
</table>
        </div>
<div style="padding:2px;">

</div>
<?php } elseif($action == 'myjl') { ?>
<div style="border:1px solid #CCC;padding:5px;">
<table width="100%" border="0" cellspacing="0" cellpadding="1" align="center">
  <th style="padding:2px;"><strong>奖项名称</strong></th><th><strong>发放状态</strong></th><th><strong>操作</strong></th><?php if(is_array($myjl)) foreach($myjl as $varmyjl) { ?>  <tr>
     <td style="padding:2px;"><?php echo $varmyjl['jxname'];?></td>
     <td><?php if($varmyjl['jpstate'] == '1') { ?>已发放<?php } else { if($varmyjl['sqstate'] == '1') { ?>申请中<?php } else { ?>未发放<?php } } ?></td>
     <td><?php if($varmyjl['sqstate'] == '0' && $varmyjl['jpstate'] == '0') { ?><a href="plugin.php?id=huxdzp:huxdzp&amp;action=ffsq&amp;eid=<?php echo $varmyjl['eid'];?>">申请奖品</a><?php } ?></td>
  </tr>
<?php } ?>
</table>
        </div>
<div style="padding:2px;">

</div>
<div>
<?php if($multi) { ?>
<?php echo $multi;?>
<?php } ?>
</div>
<div style="padding:2px;">

</div>
<?php } elseif($action == 'managejpff') { ?>
<div style="border:1px solid #CCC;padding:5px;">
<table width="100%" border="0" cellspacing="0" cellpadding="1" align="center">
  <th style="padding:2px;"><strong>奖项名称</strong></th><th><strong>申请人</strong></th><th><strong>操作</strong></th><?php if(is_array($mnjpff)) foreach($mnjpff as $varmnjpff) { ?>  <tr>
     <td style="padding:2px;"><?php echo $varmnjpff['jxname'];?></td>
     <td><?php echo $varmnjpff['username'];?></td>
     <td><a href="plugin.php?id=huxdzp:huxdzp&amp;action=jpffsave&amp;eid=<?php echo $varmnjpff['eid'];?>">更改状态为已发放</a></td>
  </tr>
<?php } ?>
</table>
        </div>
<div style="padding:2px;">

</div>
<div>
<?php if($multi) { ?>
<?php echo $multi;?>
<?php } ?>
</div>
<div style="padding:2px;">

</div>
<?php } else { ?>
<div class="datalist" style="background-image: url(<?php echo $dzp_root;?>/images/bg_b.gif);">


<!-- load flashplayer start -->
<script type="text/javascript">
//AC_FL_RunContent( \'codebase\',\'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0\',\'width\',\'752\',\'height\',\'512\',\'src\',\'<?php echo $f_root;?>/act/fruitgame\',\'quality\',\'high\',\'pluginspage\',\'http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\',\'movie\',\'huxdzp\' ); //end AC code
</script>
<!-- load flashplayer end -->
<!-- create flash start -->
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="752" height="512">
<param name="movie" value="<?php echo $dzp_root;?>/huxdzp.swf" />
<param name="quality" value="high" />
<param name="FlashVars" value=""/>
<param name="wmode" value="transparent">
<embed src="<?php echo $dzp_root;?>/huxdzp.swf" width="752" height="512" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" flashvars="" wmode="transparent"></embed>
</object>
<!-- create flash end -->


</div>
<div style="padding:2px;">

</div>
<?php } ?>	
</div>
<div class="fsd">
<div class="bm">
<div class="bm_h cl">
<h2>版权信息</h2>
</div>
<div class="bm_c">
<ul class="xl">
                                        <li>

<!-- Please respect the author, copyright information must be retained, not removed or modified -->

<style>
        .copyright_front {font: bold 17px Verdana; color: #fbb040;}
        .copyright_back {font: bold 17px Verdana; color: #f15a29;}
        .copyright_VeRsIoN {font: normal 9px Verdana; display:block;}
</style>

                        <a href="http://www.happyux.com/" title="乐游网" target="_blank">
                                <span class="copyright_front">HUX</span>
                                <span class="copyright_back"> DZP</span>
                        </a>
                <span class="copyright_VeRsIoN"><?php echo $VeRsIoN;?></span>

<!-- Please respect the author, copyright information must be retained, not removed or modified -->

</li>
</ul>
</div>
</div>

</div>
</div><?php include template('common/footer'); ?>