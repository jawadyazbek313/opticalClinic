<script>function tConvert (time) {
    // Check correct time format and split into components
    time = time.toString ().match (/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [time];
  
    if (time.length > 1) { // If time format correct
      time = time.slice (1);  // Remove full string match value
      time[5] = +time[0] < 12 ? 'AM' : 'PM'; // Set AM/PM
      time[0] = +time[0] % 12 || 12; // Adjust hours
    }
    return time.join (''); // return adjusted time or original string
  }</script>
<div class="card border-top-primary shadow h-100">
    <div class="card-body">
        <h3><?php echo e(__('lang.todayAppointment')); ?> : <?php echo e($countme); ?></h3>
        <hr class="mb-0">
      
 
<ul style="padding-right:0" class="list-group list-group-flush border border-0">
  <?php if(!$appointments->isEmpty()): ?>

    <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="list-group-item">
        <div class="row justify-content-center">
            <div style="display: table; overflow: hidden;" class="col-lg-1 col-md-4 col-sm-4">
                <div style="display: table-cell; vertical-align: middle;">
                <a class="btn btn-outline-success btn-block" href="<?php echo e(route('appointment.edit', $appointment->id)); ?>"><i class="fa fa-edit"></i></a>
                </div>
            </div>
            <div style="display: table; overflow: hidden;" class="col-lg-4 col-md-4 col-sm-4 marginTopResponsive">
                <div style="display: table-cell; vertical-align: middle;">
                   <h5> <a href="patient/<?php echo e($appointment->patient[0]->id); ?> "> <?php echo e($appointment->patient[0]->firstname.' '.$appointment->patient[0]->midname.' '.$appointment->patient[0]->lastname); ?> </a></h5>
                </div>
            </div>
            <div style="display: table; overflow: hidden;" class="col-lg-2 col-md-4 col-sm-4">
                <div style="display: table-cell; vertical-align: middle;">
                   <h4><?php echo e($appointment->time); ?></h4>
                </div>
            </div>
           

            <div style="display: table; overflow: hidden;" class="col-lg-4 col-md-12">
                <div style="display: table-cell; vertical-align: middle;">
                    <?php if($appointment->isDone==1): ?>
                    <div data-toggle="tooltip" data-placement="bottom" data-html="true" title='<div  class="row "><div class="col"><h4>Paid: <small><?php echo e($appointment->payment[0]->payment_type); ?></small></h4></div></div> <div class="row"><div class="col"><h5><?php echo e($appointment->payment[0]->payment); ?> 
                        <?php if($appointment->payment[0]->payment_type=='cash'): ?>
                        <?php echo e(($appointment->payment[0]->payment_currency=="us") ? '<small>$$</small>' : '<small>L.L.</small>'); ?>

                        <?php endif; ?></h5> <br>
                        <?php echo e($appointment->payment[0]->created_at); ?></div>
                </div>' class="marginTopResponsive card text-white bg-success text-center justify-content-center mb-0 my-0">Done<div>
            <?php else: ?>
            
                
            <div class="text-center btn-group btn-block marginTopResponsive " style="direction: ltr !important">
                <button id="ChangeAfterSuccess" data-patient_id="<?php echo e($appointment->patient[0]->id); ?>"
                    data-appointment_id="<?php echo e($appointment->id); ?>"
                    class="OpenModal  btn btn-outline-primary text-center justify-content-center mb-0 my-0 success-change"
                    type="button"><i class="fas fa-check"></i> <?php echo e(__('lang.MarkDone')); ?></button>
            <button  data-appointmentid="<?php echo e($appointment->id); ?>"  type="button" class="btn btnAbort  btn-outline-danger text-center justify-content-center mb-0 my-0"><i class="fas fa-times"></i> <?php echo e(__('lang.Abort')); ?></button>
           </div>
       
            <?php endif; ?>
        </div> 
</div>
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<h3>No Appointments Today For Now!</h3>
<?php endif; ?>
</div>
<div class="row justify-content-center"><?php echo e($appointments->links()); ?></div>
</ul>

<?php /**PATH C:\wamp64\www\opticalClinic\resources\views/dailyAppointment.blade.php ENDPATH**/ ?>