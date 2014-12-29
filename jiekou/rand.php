<?php
$page = 2;
$nonce = 3;
$token = 'http://www.bbs1.com/index.php/Admin/Huiyuan/jiekou';
$tmpArr = array($token,$page,$nonce);
sort($tmpArr, SORT_STRING);
$tmpStr = implode( '|',$tmpArr );
$tmpStr = sha1( $tmpStr );
echo $tmpStr;
?>