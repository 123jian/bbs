<?php
header("content-type:text/html;charset=utf-8");
//print_R($_GET);die;
$str="c86a7ee3d8ef0b551ed58e354a836f2b";
$yao=$_GET['typeture'];
//echo $str."<br>";
//echo $yao;die;
	//print_r($list);die;
if($str==$yao){
	
	$pdo=new PDO('mysql:dbname=bbs;host=192.168.1.217','root','');
	$pdo->query('set names utf8');
	$re=$pdo->query("select c_id,c_desc,c_time from bbs_category");
	$arr=$re->fetchall();
	//echo $a."(".json_encode($arr).")";
	echo @$_GET['callback']."(".json_encode($arr).")";
	//$data.="</table>";
}else{
	echo @$_GET['callback']."(".json_encode('0').")";
}
?>