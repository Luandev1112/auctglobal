<?php $__env->startSection('content'); ?>
        
         <h3 class="page-title"><?php echo e($reportTitle); ?></h3>
         

        <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo e($reportTitle); ?>

        </div>


        <div class="panel-body">

         <div class="row">

        <div class="col-md-10">
            <!-- <h2 style="margin-top: 0;"><?php echo e($reportTitle); ?></h2> -->

            <canvas id="myChart"></canvas>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
            <script>
                var ctx = document.getElementById("myChart");
                var myChart = new Chart(ctx, {
                    type: '<?php echo e($chartType); ?>',
                    data: {
                        labels: [
                            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group => $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                "<?php echo e($group); ?>",
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        ],

                        datasets: [{
                            label: '<?php echo e($reportLabel); ?>',
                            data: [
                                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group => $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo $result; ?>,
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            </script>
        </div>

    </div>

</div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>