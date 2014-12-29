<?php
$a=rand(1,1000 );//echo $a."<br>";
$mi=sha1($a);
$link=mysql_connect("192.168.1.217","root","");
	mysql_select_db("bbs",$link);
	mysql_query("set names utf8");
	$sql="select c_id,c_desc,c_time from bbs_category";
	$res=mysql_query($sql);
?>