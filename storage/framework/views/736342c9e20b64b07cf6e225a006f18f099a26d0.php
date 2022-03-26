
<?php $__env->startSection('content'); ?>
<div class="container-xl">
    <form autocomplete="off" action="<?php echo e(route('appointment.index')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div class="card p-4 shadow-sm border-left-info shadow">
                    <div <?php if(App()->getLocale()=='ar'): ?>
                        style="direction: rtl !important"
                        <?php endif; ?> class="card-body ">
                        <div class="row">
                            <div class="col">
                                <h5><?php echo e(__('lang.addAppointment')); ?></h5>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <label for="patient_id">Choose Patient</label>
                                    <select name="patient_id" class="selectpicker form-control justify-content-center"
                                        data-live-search="true" data-size="8" data-virtualScroll="true">
                                        <option selected hidden value=""></option>
                                        <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($patient->id); ?>" data-subtext=" <?php echo e($patient->dob); ?> ">
                                            <?php echo e($patient->firstname.' '.$patient->midname.' '.$patient->lastname); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>



                                </div>
                            </div>
                            <div class="col-lg-2 col-md-12">
                                <div style="direction: ltr !important" class="form-group">
                                    <label for="date"><?php echo e(__('lang.chooseReviewDate')); ?></label>
                                    <input id="datepicker" value="<?php echo e(date('Y-m-d')); ?>"  name="date"/>
                                    <script>
                                        $('#datepicker').datepicker({
                                            uiLibrary: 'bootstrap4', iconsLibrary: 'materialicons',weekStartDay: 1,
                                            format: 'yyyy-mm-dd'
                                        });
                                        
                                    </script>
                                   


                                </div>
                            </div>

                            <div class="col-lg-2 col-md-12">
                                <div style="direction: ltr !important" class="form-group">
                                    <label for="time"><?php echo e(__('lang.chooseReviewTime')); ?></label>
                                    <input id="timepicker"  name="time"/>
                                    <script>
                                        $('#timepicker').timepicker({
                                            uiLibrary: 'bootstrap4', iconsLibrary: 'materialicons',
                                            format: 'h:M tt'
                                        });
                                    </script>
                                   


                                </div>

                            </div>

                            <div style="margin-top: 25px !important" class="col-lg-4 col-md-12 m-0 ">


                                <ul style="padding-right: 0 !important" class="list-group justify-content-center">
                                    <li class="list-group-item">

                                        <label for="customCheck1"><?php echo e(__('lang.isDone')); ?></label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="isDone" id="inlineRadio1"
                                                value="1">
                                            <label class="form-check-label"
                                                for="inlineRadio1"><?php echo e(__('lang.yes')); ?></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input checked class="form-check-input" type="radio" name="isDone"
                                                id="inlineRadio2" value="0">
                                            <label class="form-check-label" for="inlineRadio2"><?php echo e(__('lang.no')); ?></label>
                                        </div>


                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="row h-100">
                            <div class="col">
                                <div class="form-group">
                                    <label for="notes"><?php echo e(__('lang.InpAppointmentNotes')); ?></label>
                                    <textarea rows="2" class="form-control" name="notes"
                                        placeholder="<?php echo e(__('lang.AppointmentNotesPlaceHolder')); ?>"><?php echo e(old ('notes')); ?></textarea>
                                    <?php $__errorArgs = ['notes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div id="error" style="direction: ltr !important;"
                                        class="card text-white bg-danger"><span><i
                                                class="fas fa-exclamation-triangle"></i> <?php echo e($message); ?></span>
                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                        <span id="Payments" style="display: none;">
                            <hr>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">

                                    <div class="form-group">
                                        <label for="payment_type"><?php echo e(__('lang.choosePaymentType')); ?></label>
                                        <select class="form-control selectpicker" name="payment_type" id="payment_type">
                                            <option selected hidden value=""><?php echo e(__('lang.chooseHere')); ?></option>
                                            <option value="cash"><?php echo e(__('lang.cash')); ?></option>
                                            <option value="gift"><?php echo e(__('lang.gift')); ?></option>
                                            <option value="free"><?php echo e(__('lang.free')); ?></option>
                                            <option value="other"><?php echo e(__('lang.other')); ?></option>
                                        </select>

                                    </div>

                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="payment"><?php echo e(__('lang.payment')); ?></label>
                                                <input disabled type="payment" value="<?php echo e(old ('payment')); ?>"
                                                    class="form-control" name="payment" id="payment"
                                                    placeholder="<?php echo e(__('lang.inpPaymentPlaceHolder')); ?>">

                                            </div>
                                        </div>
                                        <div id="Currency" style="display: none" class="col-4">
                                            <div class="form-group">
                                                <label
                                                    for="payment_currency"><?php echo e(__('lang.choosePaymentCurrency')); ?></label>
                                                <select class="form-control selectpicker" name="payment_currency"
                                                    id="payment_currency">
                                                    <option selected hidden value=""></option>
                                                    <option value="lbp"><?php echo e(__('lang.lbp')); ?></option>
                                                    <option value="us"><?php echo e(__('lang.us')); ?></option>

                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div class="card p-4 shadow pd-0 m-0 border-left-info">
                    <div class="row">
                        <div class="col-4 border">

                        </div>
                        <div class="col-3 border">SPHERE</div>
                        <div class="col-3 border">CYLINDER</div>
                        <div class="col-2 border">AXIS</div>
                    </div>
                    <div class="row ">
                        <div class="col-4 border">
                            <div class="row" style="height: 76px;">
                                <div class="col-9 border">DISTANT</div>
                                <div class="col-3 justify-content-center">
                                    <div style="height: 38px;" class="row border justify-content-center text-center">R
                                    </div>
                                    <div style="height: 38px;" class="row border justify-content-center text-center">L
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 border mx-0 pd-0 ">
                            <div class="row">
                                <div class="col no-padding"><input name="dist_r_sphere" class="form-control"
                                        style="display: block; width:100%" type="text"></div>
                            </div>
                            <div class="row">
                                <div class="col no-padding"><input name="dist_l_sphere" class="form-control"
                                        style="display: block; width:100%" type="text"></div>
                            </div>

                        </div>
                        <div class="col-3 border ">
                            <div class="row">
                                <div class="col no-padding"><input name="dist_r_cylinder" class="form-control"
                                        style="display: block; width:100%" type="text"></div>
                            </div>
                            <div class="row">
                                <div class="col no-padding"><input name="dist_l_cylinder" class="form-control"
                                        style="display: block; width:100%" type="text"></div>
                            </div>
                        </div>
                        <div class="col-2 border ">
                            <div class="row">
                                <div class="col no-padding"><input name="dist_r_axis" class="form-control"
                                        style="display: block; width:100%" type="text"></div>
                            </div>
                            <div class="row">
                                <div class="col no-padding"><input name="dist_l_axis" class="form-control"
                                        style="display: block; width:100%" type="text"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-4 border">
                            <div class="row" style="height: 76px;">
                                <div class="col-9 border">NEAR</div>
                                <div class="col-3 justify-content-center">
                                    <div style="height: 38px;" class="row border justify-content-center text-center">R
                                    </div>
                                    <div style="height: 38px;" class="row border justify-content-center text-center">L
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 border mx-0 pd-0 ">
                            <div class="row">
                                <div class="col no-padding"><input name="near_r_sphere" class="form-control"
                                        style="display: block; width:100%" type="text"></div>
                            </div>
                            <div class="row">
                                <div class="col no-padding"><input name="near_l_sphere" class="form-control"
                                        style="display: block; width:100%" type="text"></div>
                            </div>

                        </div>
                        <div class="col-3 border ">
                            <div class="row">
                                <div class="col no-padding"><input name="near_r_cylinder" class="form-control"
                                        style="display: block; width:100%" type="text"></div>
                            </div>
                            <div class="row">
                                <div class="col no-padding"><input name="near_l_cylinder" class="form-control"
                                        style="display: block; width:100%" type="text"></div>
                            </div>
                        </div>
                        <div class="col-2 border ">
                            <div class="row">
                                <div class="col no-padding"><input name="near_r_axis" class="form-control"
                                        style="display: block; width:100%" type="text"></div>
                            </div>
                            <div class="row">
                                <div class="col no-padding"><input name="near_l_axis" class="form-control"
                                        style="display: block; width:100%" type="text"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row border">
                        <div class="col-3 border">P.D/DISTANT</div>
                        <div class="col-7 no-padding"><input name="pddist" class="form-control"
                                style="display: block; width:100%" type="text">
                        </div>
                        <div class="col-2">mm</div>
                    </div>
                    <div class="row border">
                        <div class="col-3 border">P.D/NEAR</div>
                        <div class="col-7 no-padding"><input name="pdnear" class="form-control"
                                style="display: block; width:100%" type="text">
                        </div>
                        <div class="col-2">mm</div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col"><button class="btn btn-primary"
                                type="submit"><?php echo e(__('lang.addAppointment')); ?></button></div>
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>
    <script>
        document.getElementById('inlineRadio1').addEventListener('change', function() {
if(this.checked=='1'){
document.getElementById('Payments').style.display = "block";
}else 
document.getElementById('Payments').style.display = "none";


});

document.getElementById('inlineRadio2').addEventListener('change', function() {
    if(this.checked=='1'){
document.getElementById('Payments').style.display = "none";
}else 
document.getElementById('Payments').style.display = "block";


});

   document.getElementById('payment_type').addEventListener('change', function() {
    var x= document.getElementById('payment');
    if(this.value!=null) x.disabled = false;
    if(this.value!='cash') {x.value=""; x.type='text'; if(document.getElementById('Currency').style.display=="block") {document.getElementById('Currency').style.display="none";}}
    else  {x.value=""; x.type='number'; document.getElementById('Currency').style.display="block";}
});
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\opticalClinic\resources\views/appointment/create.blade.php ENDPATH**/ ?>