
        <div class="card border-left-info shadow">
          
            <div class="card-body">
                <div <?php echo e((app()->getlocale()=='ar' ? "style=direction:rtl" : '')); ?> class="row text-center">
                    <div class="col-lg-4 col-md-12">
                        <h4><small><?php echo e(__('lang.patientName')); ?>: </small>
                           <a href="<?php echo e(route('patient.show', $appointment->patient[0]->id)); ?>"> <?php echo e($appointment->patient[0]->firstname.' '.$appointment->patient[0]->midname.' '.$appointment->patient[0]->lastname); ?></a>
                        </h4>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <h4><small><?php echo e(__('lang.appointmentDate')); ?>: </small> <?php echo e($appointment->date.' | '.$appointment->time); ?></h4>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="row">
                            <div class="col-3"><?php echo e(__('lang.status')); ?></div>
                            <div class="col">
                                <?php if($appointment->isDone=='1'): ?>
                                <div class="shadow card bg-success text-white"><strong>DONE</strong></div>
                                <?php else: ?>
                                <div class="shadow card bg-danger text-white"><strong>NOT DONE</strong></div>                                
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <hr><div class="row card-body border-left-info shadow pd-2 m-1"><div class="col">
                <div class="row text-center">
                    <div class="col">

                        <h3> <?php echo e(__('lang.InpAppointmentNotes')); ?> </h3>

                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <div><?php if($appointment->notes==null): ?> <h3 class="text-info">No Notes Available
                            </h3> <?php else: ?> <span><?php echo $appointment->notes; ?></span> <?php endif; ?></div>
                    </div>
                </div></div></div>

                <?php if($appointment->isDone=='1'): ?>
                <br>
                <div <?php echo e((app()->getlocale()=='ar' ? "style=direction:rtl" : '')); ?> class="row text-center">
                    <div class="col-6">
                        <div class="card-body border-left-info shadow"><h4><small>Done at:</small>
                            <?php echo e($appointment->payment[0]->created_at); ?></h4></div>
                    </div>
                    <div class="col-6">
                        <div class="card-body border-left-info shadow"><h4><small><?php echo e(__('lang.payment')); ?>:</small>
                            <?php echo e($appointment->payment[0]->payment); ?>  <?php if($appointment->payment[0]->payment_type=='cash'): ?>
                            <?php if($appointment->payment[0]->payment_currency=='us'): ?>
                                <small>$$</small>
                            <?php else: ?>
                                <small>L.L.</small>
                            <?php endif; ?>
                            <?php endif; ?></h4></div>
                    </div>
                </div>
                <?php endif; ?>
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
                        <div class="col no-padding"><input disabled name="dist_r_sphere"
                                value="<?php echo e($appointment->dist_r_sphere); ?>" class="form-control text-center"
                                style="display: block; width:100%" type="text"></div>
                    </div>
                    <div class="row">
                        <div class="col no-padding"><input disabled name="dist_l_sphere"
                                value="<?php echo e($appointment->dist_l_sphere); ?>" class="form-control text-center"
                                style="display: block; width:100%" type="text"></div>
                    </div>

                </div>
                <div class="col-3 border ">
                    <div class="row">
                        <div class="col no-padding"><input disabled name="dist_r_cylinder"
                                value="<?php echo e($appointment->dist_r_cylinder); ?>" class="form-control text-center"
                                style="display: block; width:100%" type="text"></div>
                    </div>
                    <div class="row">
                        <div class="col no-padding"><input disabled name="dist_l_cylinder"
                                value="<?php echo e($appointment->dist_l_cylinder); ?>" class="form-control text-center"
                                style="display: block; width:100%" type="text"></div>
                    </div>
                </div>
                <div class="col-2 border ">
                    <div class="row">
                        <div class="col no-padding"><input disabled name="dist_r_axis"
                                value="<?php echo e($appointment->dist_r_axis); ?>" class="form-control text-center"
                                style="display: block; width:100%" type="text"></div>
                    </div>
                    <div class="row">
                        <div class="col no-padding"><input disabled name="dist_l_axis"
                                value="<?php echo e($appointment->dist_l_axis); ?>" class="form-control text-center"
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
                        <div class="col no-padding"><input disabled name="near_r_sphere"
                                value="<?php echo e($appointment->near_r_sphere); ?>" class="form-control text-center"
                                style="display: block; width:100%" type="text"></div>
                    </div>
                    <div class="row">
                        <div class="col no-padding"><input disabled name="near_l_sphere"
                                value="<?php echo e($appointment->near_l_sphere); ?>" class="form-control text-center"
                                style="display: block; width:100%" type="text"></div>
                    </div>

                </div>
                <div class="col-3 border ">
                    <div class="row">
                        <div class="col no-padding"><input disabled name="near_r_cylinder"
                                value="<?php echo e($appointment->near_r_cylinder); ?>" class="form-control text-center"
                                style="display: block; width:100%" type="text"></div>
                    </div>
                    <div class="row">
                        <div class="col no-padding"><input disabled name="near_l_cylinder"
                                value="<?php echo e($appointment->near_l_cylinder); ?>" class="form-control text-center"
                                style="display: block; width:100%" type="text"></div>
                    </div>
                </div>
                <div class="col-2 border ">
                    <div class="row">
                        <div class="col no-padding"><input disabled name="near_r_axis"
                                value="<?php echo e($appointment->near_r_axis); ?>" class="form-control text-center"
                                style="display: block; width:100%" type="text"></div>
                    </div>
                    <div class="row">
                        <div class="col no-padding"><input disabled name="near_l_axis"
                                value="<?php echo e($appointment->near_l_axis); ?>" class="form-control text-center"
                                style="display: block; width:100%" type="text"></div>
                    </div>
                </div>
            </div>
            <div class="row border">
                <div class="col-3 border">P.D/DISTANT</div>
                <div class="col-7 no-padding"><input disabled name="pddist" value="<?php echo e($appointment->pddist); ?>"
                        class="form-control text-center" style="display: block; width:100%" type="text">
                </div>
                <div class="col-2">mm</div>
            </div>
            <div class="row border">
                <div class="col-3 border">P.D/NEAR</div>
                <div class="col-7 no-padding"><input disabled name="pdnear" value="<?php echo e($appointment->pdnear); ?>"
                        class="form-control text-center" style="display: block; width:100%" type="text">
                </div>
                <div class="col-2">mm</div>
            </div>



        </div>
<?php /**PATH C:\xampp\htdocs\laravel\opticalClinic\resources\views/appointment/showInModal.blade.php ENDPATH**/ ?>