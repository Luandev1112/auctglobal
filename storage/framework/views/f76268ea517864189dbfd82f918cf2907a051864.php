<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.1/Chart.js"></script>
<script type="text/javascript">
 
<?php $index = -1;
?>
<?php $__currentLoopData = $ids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<?php $index++; ?>
	var ctx = document.getElementById("<?php echo e($id); ?>").getContext("2d");
<?php 
    $cdata = $chart_data;
    if(is_array($chart_data))
    if(isset($chart_data[$index]))
        $cdata = $chart_data[$index]; 
    
    $dataset = $cdata->data;
?>
var myChart = new Chart(ctx, {
    type: '<?php echo e($cdata->type); ?>',
     animation:{
        animateScale:true,
    },
    data: {
        labels: <?php echo json_encode($dataset->labels); ?>,
        datasets: [

        <?php if(in_array($cdata->type, array('bar', 'horizontalBar','polarArea','doughnut','pie'))): ?>
        {
            label: <?php echo json_encode($dataset->dataset_label); ?>, 
            data: <?php echo json_encode($dataset->dataset); ?>,
            backgroundColor: <?php echo json_encode($dataset->bgcolor); ?>,
            borderColor: <?php echo json_encode($dataset->border_color); ?>,
            borderWidth: 1
        },
        <?php elseif(in_array($cdata->type, array('line'))): ?>
         {
            label: <?php echo json_encode($dataset->dataset_label); ?>,
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(75,192,192,0.4)",
            borderColor: "rgba(75,192,192,1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(75,192,192,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: <?php echo json_encode($dataset->dataset); ?>,
            spanGaps: false,
        },


        <?php endif; ?>
     ],
        
    },
    options: {
        scales: {
            <?php if(isset($scale)): ?>
            xAxes: [{
                gridLines: {
                    display:false
                }
            }],
    yAxes: [{
                gridLines: {
                    display:false
                }   
            }]
           <?php endif; ?>
        },
         title: {
            display: true,
            text: '<?php echo e(isset($cdata->title) ? $cdata->title : ''); ?>'
        },
        <?php if($cdata->type=='bar'|| $cdata->type=='line' ): ?>
        legend: {
            display: false
         }
        <?php endif; ?>

    }
});
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</script>