<?php
header("content-type:text/html;charset=utf-8");
$link=mysql_connect("192.168.1.217","root","");
	mysql_select_db("bbs",$link);
	$sql="select c_id,c_time from bbs_category";
	$res=mysql_query($sql);//echo $res;die;
	//$arr=mysql_fetch_assoc($res);
	//echo $arr;die;
	//$data="<table border=1>";
	$list="<table border=1><th>id</th><th>name</th>";
	while($row=mysql_fetch_assoc($res)){
		
		$list.="<tr>";
		$list.="<td>".$row['c_id']."</td><td>".$row['c_time']."</td>";
		$list.="</tr>";
	}
	$list.="</table>";
	echo @$_GET['callback']."(".json_encode($list).")";
	//print_r($list);die;
/*if($_GET['a']=='dc82d632c9fcecb0778afbc7924494a6'){
	
	//$data.="</table>";
	
}
else
{
	echo @$_GET['callback']."(".json_encode($_GET).")";
}*/
?>