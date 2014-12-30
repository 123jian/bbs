<?php
header("content-type:text/html;charset=utf-8");

?>
<input type="button" value="查询分类" onclick="sear()">
<script type="text/javascript" src='jq.js'></script>
<script type="text/javascript">
//alert($)
function sear(){
	$.ajax({
		url:"http://www.bbs1.com/jiekou/jiekou.php",
			dataType:"jsonp",
			data:{'typeture':'c86a7ee3d8ef0b551ed58e354a836f2b'},
			type:'get',
			jsonp:'callback',
			//type:"post",
			success:function(e){
				//alert(e)
				if(e!=0){
					var str='<table border=1><tr><td>id</td><td>描述</td><td>时间戳</td></tr>';
					for(var i in e){
						str+='<tr>'+'<td>'+e[i].c_id+'</td>'+'<td>'+e[i].c_desc+'</td>'+'<td>'+e[i].c_time+'</td>'+'</tr>';
					}
					str+='</table>';
					$('#listDiv').html(str);
				}else{
					$('#listDiv').html("密钥有错");
				}
				
			}
			//$("#listDiv").html(list);
	})
}

</script>
<!-- 显示列表 -->
<div id='listDiv'>
</div>