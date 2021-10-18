
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card border-left-info shadow">
                    <div class="card-header text-center"><h4><?php echo e(__('lang.listPatient')); ?></h4></div>
                    <div class="card-body">
                        <?php echo $dataTable->table(); ?>


                    </div>
                </div>

        </div>
    </div>
</div>
<?php echo $dataTable->scripts(); ?> 

<script>
    $("#patient-table").addClass("table-hover").addClass("table-bordered").addClass("text-center");


</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\opticalClinic\resources\views/patient/index.blade.php ENDPATH**/ ?>