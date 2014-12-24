<?php if (!defined('THINK_PATH')) exit();?><canvas id="myChart" width="400" height="400"></canvas>
<script src="/Tp3.2/bbs2/Public/Chart.js-master/Chart.js"></script>

<script>
   
  //alert(<?php echo $x?>);
   
       var data = {
            
                    labels : [<?php echo $x?>],
                    datasets : [
                            {
                                    fillColor : "rgba(220,20,220,0.5)",
                                    strokeColor : "rgba(220,20,220,1)",
                                    data : [<?php echo $y?>]
                            }
                    ]
            }
var ctx = document.getElementById("myChart").getContext("2d"); 
var myNewChart = new Chart(ctx).Bar(data);//new Chart(ctx).PolarArea(data);
</script>