
<?php $__env->startSection('content'); ?>

<div class="container">

    <div style="direction: rtl" class="row text-center">

        <div class="col-lg-6 col-md-12 marginTopResponsive">
            <div class="card align-content-center text-center h-100 border-top-success shadow">
                <div class="card-body">
                    <div style="display: flex;" class="row">
                        <div style="  margin: auto;" class="col-lg-2 col-md-12 text-success">
                            <i class="fas fa-dollar-sign fa-6x "></i>
                          
                        </div>
                        <div style="  margin: auto;" class="col-lg col-md-12">
                            <div class="row">
                                <div class="col">
                                    <h4><?php echo e(__('lang.totalMonth')); ?><br><br> 
                                        <span style="font-size: 24px !important" class="badge badge-primary p-2"><?php echo e(number_format($totalMonthLBP)); ?>  <?php echo e(__('lang.LL')); ?></span> 
                                        <span style="font-size: 24px !important" class="ml-2 badge badge-success p-2"><?php echo e(number_format($totalMonthUSD)); ?> <?php echo e(__('lang.usd')); ?></span></h4>
                                </div>
                            </div>
                            <hr>
                            
                            <div class="row">
                                <div class="col">
                                    <h4><?php echo e(__('lang.total')); ?><br><br> 
                                        <span style="font-size: 24px !important" class="badge badge-primary p-2"><?php echo e(number_format($totalLBP)); ?> <?php echo e(__('lang.LL')); ?></span> 
                                        <span style="font-size: 24px !important" class="ml-2 badge badge-success p-2"><?php echo e(number_format($totalUSD)); ?> <?php echo e(__('lang.usd')); ?></span></h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 marginTopResponsive">
            <div class="card align-content-center text-center h-100 border-top-primary shadow">
                <div class="card-body">
                    <div style="display: flex;" class="row">
                        <div style="  margin: auto;" class="col-lg-2 col-md-12 text-primary">
                            <i class="far fa-calendar-alt fa-6x"></i>
                          
                        </div>
                        <div style="  margin: auto;" class="col-lg col-md-12">
                            <div class="row">
                                <div class="col">
                                    <h4><?php echo e(__('lang.totalAppointmentMonth')); ?><br><br> 
                                        <span style="font-size: 24px !important" class="badge w-25 badge-primary p-2"><?php echo e($totalMonthApp); ?></span> 
                                        <span style="font-size: 24px !important" class="ml-2 w-25 badge badge-success p-2">15$</span></h4>
                                </div>
                            </div>
                            <hr>
                            
                            <div class="row">
                                <div class="col">
                                    <h4>: إجمالي الدخل<br><br> 
                                        <span style="font-size: 24px !important" class="badge w-25 badge-primary p-2"><?php echo e($totalApp); ?></span> 
                                        <span style="font-size: 24px !important" class="ml-2 w-25 badge badge-success p-2">15$</span></h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\opticalClinic\resources\views/admin/index.blade.php ENDPATH**/ ?>