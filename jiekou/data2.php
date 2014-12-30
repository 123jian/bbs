<?php
header("content-type:text/html;charset=utf-8");

?>
<input type="button" value="查询分类" onclick="sear()">
<script type="text/javascript" src='jq.js'></script>
<script type="text/javascript">
//alert($)
function sear(){
	$.ajax({
		url:"http://www.bbs1.com/index.php/Admin/Huiyuan/jiekou",
			dataType:"jsonp",
			data:{'my':'f0aedffc0333fe9b7f984b282c6aad7d3b5fbd1e','page':2,'nonce':3},
			type:'get',
			jsonp:'callback',
			//type:"post",
			success:function(e){
				//alert(e)
				if(e!=0){
					var str='<table border=1><tr><td>id</td><td>标题</td><td>内容</td></tr>';
					for(var i in e){
						str+='<tr><td>'+e[i].text_id+'</td>'+'<td>'+e[i].text_title+'</td>'+'<td>'+e[i].text_content+'</td></tr>';
					}
					str+='</table>';
					$('#listDiv').html(str);/**/
				}else{
					$('#listDiv').html("密钥错了！！！");
				}
			}
			//$("#listDiv").html(list);
	})
}

</script>
<!-- 显示列表 -->
<div id='listDiv'>
</div>