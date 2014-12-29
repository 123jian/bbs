<script type="text/javascript" src='jq.js'></script>
<script type="text/javascript">
//alert($)
$.ajax({
	url:"http://www.bbs1.com/jiekou/jiekou.php?a=dc82d632c9fcecb0778afbc7924494a6",
		dataType:"jsonp",
		type:"post",
		success:function(msg){
			//alert(msg)
			//var list=msg;
			$("#listDiv").html(msg);
		}
		//$("#listDiv").html(list);
})
</script>
<!-- 显示列表 -->
<div id='listDiv'>aaa
</div>