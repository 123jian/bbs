<?php
header("content-type:text/html;charset=utf-8");
//print_R($_GET);die;
$str="c86a7ee3d8ef0b551ed58e354a836f2b";
$yao=$_GET['typeture'];
//echo $str."<br>";
//echo $yao;die;
	//print_r($list);die;
if($str==$yao){
	/*$link=mysql_connect("192.168.1.217","root","");
	mysql_select_db("bbs",$link);
	mysql_query("set names utf8");
	$sql="select c_id,c_desc,c_time from bbs_category";
	$res=mysql_query($sql);//echo $res;die;
	$arr=mysql_fetch_assoc($res);
	//echo $arr;die;
	//$data="<table border=1>";
	$list="<table border=1><th>id</th><th>name</th><th>time</th>";
	while($row=mysql_fetch_assoc($res)){
		
		$list.="<tr>";
		$list.="<td>".$row['c_id']."</td><td>".$row['c_desc']."</td><td>".$row['c_time']."</td>";
		$list.="</tr>";
	}
	$list.="</table>";*/
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