<?php if(count($appointments)==0): ?>
<div class="container">
<h3 class="card shadow p-3 mt-6 bg-light">No Trashed Appointments</h3></div> <?php else: ?>
<div class="card shadow" <?php if(app()->getlocale()=='ar'): ?>
    style="direction:rtl"
    <?php endif; ?>>
    <div class="card-header bg-light">
        <div class="row justify-content-center">
            <div class="col-lg col-sm-4 col-xs-4">ID</div>
            <div class="col-lg-2 col-sm-4 col-xs-4"><?php echo e(__('lang.patientName')); ?></div>
            <div class="col-lg-2 col-sm-4 col-xs-4"><?php echo e(__('lang.appointmentDate')); ?></div>
            <div class="col-lg-2 col-md-6"><?php echo e(__('lang.deleteDate')); ?></div>
            <div class="col-lg-5 col-md-6"><?php echo e(__('lang.Options')); ?></div>
        </div>
    </div>
    <div class="card-body">
        <ul style="padding-right:0" class="list-group list-group-flush">
            <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-lg col-sm-4 col-xs-4"> <?php echo e($appointment->id); ?></div>
                    <div class="col-lg-2 col-sm-4 col-xs-4"><a
                        href="<?php echo e(route('patient.show',$appointment->patient[0]->id )); ?>"><?php echo e($appointment->patient[0]->firstname.' '.$appointment->patient[0]->midname.' '.$appointment->patient[0]->lastname); ?></a></div>
                    <div class="col-lg-2 col-sm-4 col-xs-4"><?php echo e($appointment->date.' | '.$appointment->time); ?></div>
                    <div class="col-lg-2 col-md-6"><?php echo e($appointment->updated_at); ?></div>
                    <div class="col-lg-5 col-md-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6"><button class="btn btn-block btn-success"onclick="restoreMe(<?php echo e($appointment->id); ?>)"><i class="fas fa-trash-restore"></i> &nbsp; <?php echo e(__('lang.Restore')); ?></button></div>
                            <div class="col-lg-6 col-md-6"><button class="btn btn-block btn-danger" onclick="deleteMe(<?php echo e($appointment->id); ?>)"><i class="fas fa-trash"></i> &nbsp; <?php echo e(__('lang.DeletePermanently')); ?></button></div>
                        </div>
                    </div>
                </div>

            </li>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>
        
        
    </div>
    <div class="card-footer bg-light">
        <div class="row justify-content-center text-center">
            <div class="col"><?php echo e($appointments->links()); ?></div>
        </div></div>
</div><?php endif; ?><?php /**PATH C:\xampp\htdocs\laravel\opticalClinic\resources\views/appointment/trashlistAjax.blade.php ENDPATH**/ ?>