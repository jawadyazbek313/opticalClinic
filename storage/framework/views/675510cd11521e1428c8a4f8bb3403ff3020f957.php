
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form autocomplete="off" action="<?php echo e(route('patient.index')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div <?php if(App::getlocale()=='ar' ): ?> style="direction: rtl !important" <?php endif; ?> class="row">
                    <div   class="col-lg-6  col-md-12 text-center">
                        <div   class="card border-top-primary">
                            <div  id="col1" class="card-body">
        
                                <div class="form-group">
                                    <label for="firstname"><?php echo e(__('lang.inpFN')); ?></label>
                                    <input  type="text" value="<?php echo e(old ('firstname')); ?>" class="form-control"
                                        name="firstname" placeholder="<?php echo e(__('lang.inEnterFN')); ?>">
                                    <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div id="error" style="direction: ltr !important;"
                                        class="card text-white bg-danger"> <span><i
                                                class="fas fa-exclamation-triangle"></i> <?php echo e($message); ?></span>
                                    </div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                </div>




                                <div class="form-group">
                                    <label for="midname"><?php echo e(__('lang.inpMN')); ?></label>
                                    <input type="text" value="<?php echo e(old ('midname')); ?>" class="form-control" name="midname"
                                        placeholder="<?php echo e(__('lang.inEnterMN')); ?>">
                                    <?php $__errorArgs = ['midname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div id="error" style="direction: ltr !important;"
                                        class="card text-white bg-danger"> <span><i
                                                class="fas fa-exclamation-triangle"></i> <?php echo e($message); ?></span>
                                    </div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>





                                <div class="form-group">
                                    <label for="lastname"><?php echo e(__('lang.inpLN')); ?></label>
                                    <input type="text" value="<?php echo e(old ('lastname')); ?>" class="form-control" name="lastname"
                                        placeholder="<?php echo e(__('lang.inEnterLN')); ?>">
                                    <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div id="error" style="direction: ltr !important;"
                                        class="card text-white bg-danger"> <span><i
                                                class="fas fa-exclamation-triangle"></i> <?php echo e($message); ?></span>
                                    </div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="gender"><?php echo e(__('lang.inpGender')); ?></label>
                                            <select class="selectpicker form-control border" name="gender">
                                                <option value="male"><?php echo e(__('lang.genderOptionMale')); ?></option>
                                                <option value="female"><?php echo e(__('lang.genderOptionFemale')); ?></option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="insurancetype"><?php echo e(__('lang.inpInsuranceType')); ?></label>
                                            <select class="selectpicker form-control border" name="insurancetype">
                                                <option value="" selected hidden><?php echo e(__('lang.inpInsuranceTypeLabel')); ?>

                                                </option>
                                                <option value="NSSF"><?php echo e(__('lang.InsuranceTypeOpt1')); ?></option>
                                                <option value="Hay2a"><?php echo e(__('lang.InsuranceTypeOpt2')); ?></option>
                                                <option value="ISF"><?php echo e(__('lang.InsuranceTypeOpt3')); ?></option>
                                                <option value="Lebanese army"><?php echo e(__('lang.InsuranceTypeOpt4')); ?></option>
                                                <option value="Coop"><?php echo e(__('lang.InsuranceTypeOpt5')); ?></option>
                                                <option value="Private"><?php echo e(__('lang.InsuranceTypeOpt6')); ?></option>

                                            </select>
                                            <?php $__errorArgs = ['insurancetype'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div id="error" style="direction: ltr !important;"
                                                class="card text-white bg-danger"> <span><i
                                                        class="fas fa-exclamation-triangle"></i> <?php echo e($message); ?></span>
                                            </div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>


                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="bloodtype"><?php echo e(__('lang.inpBloodType')); ?></label>
                                            <select class="selectpicker form-control border" name="bloodtype">
                                                <option value="" selected hidden><?php echo e(__('lang.inpBloodTypeLabel')); ?>

                                                </option>
                                                <option value="A+">A+</option>
                                                <option value="B+">B+</option>
                                                <option value="AB+">AB+</option>
                                                <option value="O+">O+</option>
                                                <option value="A-">A-</option>
                                                <option value="B-">B-</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O-">O-</option>

                                            </select>
                                            <?php $__errorArgs = ['bloodtype'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div id="error" style="direction: ltr !important;"
                                                class="card text-white bg-danger"> <span><i
                                                        class="fas fa-exclamation-triangle"></i> <?php echo e($message); ?></span>
                                            </div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div style="direction: ltr !important" class="form-group">

                                            <label for="dob"><?php echo e(__('lang.InpDob')); ?> </label>
                                            <input id="datepicker"  name="dob"/>
                                            <script>
                                                $('#datepicker').datepicker({
                                                    uiLibrary: 'bootstrap4', iconsLibrary: 'materialicons',weekStartDay: 1,
                                                    format: 'dd-mm-yyyy', header: true
                                                });
                                            </script>
                                            <?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div id="error" style="direction: ltr !important;"
                                                class="card text-white bg-danger"> <span><i
                                                        class="fas fa-exclamation-triangle"></i> <?php echo e($message); ?></span>
                                            </div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                        </div>

                                    </div>



                                </div>



                            </div>

                        </div>
                    </div>


                    


                    <div  class="col-lg-6  col-md-12 marginTopResponsive text-center">
                        <div class="card border-top-success">
                            <div id="col2" class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="diag"><?php echo e(__('lang.InpDiag')); ?></label>
                                            <textarea rows="2" class="form-control" name="diag"
                                                placeholder="<?php echo e(__('lang.InpDiagPlaceHolder')); ?>"><?php echo e(old ('diag')); ?></textarea>
                                            <?php $__errorArgs = ['diag'];
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


                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="job"><?php echo e(__('lang.inpJob')); ?></label>
                                            <input type="text" value="<?php echo e(old ('firstname')); ?>" class="form-control" name="job"
                                                placeholder="<?php echo e(__('lang.inpJobPlaceHolder')); ?>">

                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="address"><?php echo e(__('lang.InpAddress')); ?></label>
                                            <textarea rows="1" class="form-control" name="address"
                                                placeholder="<?php echo e(__('lang.InpAddressPlaceHolder')); ?>"><?php echo e(old ('address')); ?></textarea>
                                            <?php $__errorArgs = ['address'];
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

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="number"><?php echo e(__('lang.inpNumber')); ?></label>
                                            <input type="text" value="<?php echo e(old ('firstname')); ?>" class="form-control" name="number"
                                                placeholder="<?php echo e(__('lang.inpNumberPlaceHolder')); ?>">

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="maincomplaint"><?php echo e(__('lang.InpMainComplaint')); ?></label>
                                            <textarea rows="1" class="form-control" name="maincomplaint"
                                                placeholder="<?php echo e(__('lang.InpMainComplaintPlaceHolder')); ?>"><?php echo e(old ('maincomplaint')); ?></textarea>
                                            <?php $__errorArgs = ['maincomplaint'];
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
                            </div>
                        </div>

                    </div>
                </div>

                <div id="EyeDetail" class="row py-4 justify-content-center" style="display: none;margin-bottom: 75px">
                    <div class="col-lg-12 col-md-12">
                        <div class="card text-center border-top-success">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="row">
                                            <div class="col">
                                                <img style=" -webkit-transform: scaleX(-1);
                                                transform: scaleX(-1);" src="<?php echo e(asset('images/Eye.png')); ?>">
                                                <h4>OD EYE (Right Eye)</h4>
                                                <hr>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_VA">OD VA</label>
                                                    <input type="text" class="form-control" name="OD_VA" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_AUTO">OD AUTO</label>
                                                    <input type="text" class="form-control" name="OD_AUTO"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_BCVA_FAR">OD BCVA FAR</label>
                                                    <input type="text" class="form-control" name="OD_BCVA_FAR"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_NEAR">OD NEAR</label>
                                                    <input type="text" class="form-control" name="OD_NEAR"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_AUTO_AFTER_CYCLO">OD AUTO AFTER CYCLO</label>
                                                    <input type="text" class="form-control" name="OD_AUTO_AFTER_CYCLO"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_BUT">OD BUT</label>
                                                    <input type="text" class="form-control" name="OD_BUT"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_IOP">OD IOP</label>
                                                    <input type="text" class="form-control" name="OD_IOP"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_LIDS">OD LIDS</label>
                                                    <input type="text" class="form-control" name="OD_LIDS"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_CORNEA">OD CORNEA</label>
                                                    <input type="text" class="form-control" name="OD_CORNEA"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_CONJUNCTIVA">OD CONJUNCTIVA</label>
                                                    <input type="text" class="form-control" name="OD_CONJUNCTIVA"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_IRIS">OD IRIS</label>
                                                    <input type="text" class="form-control" name="OD_IRIS"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_AC">OD AC</label>
                                                    <input type="text" class="form-control" name="OD_AC" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_LENS">OD LENS</label>
                                                    <input type="text" class="form-control" name="OD_LENS"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_VITREOUS">OD VITREOUS</label>
                                                    <input type="text" class="form-control" name="OD_VITREOUS"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_CD">OD CD</label>
                                                    <input type="text" class="form-control" name="OD_CD" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_FUNDUS">OD FUNDUS</label>
                                                    <input type="text" class="form-control" name="OD_FUNDUS"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        

                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="row">
                                            <div class="col">
                                                <img src="<?php echo e(asset('images/Eye.png')); ?>">
                                                <h4>OS EYE (Left Eye)</h4>
                                                <hr>


                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_VA">OS VA</label>
                                                    <input type="text" class="form-control" name="OS_VA" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_AUTO">OS AUTO</label>
                                                    <input type="text" class="form-control" name="OS_AUTO"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_BCVA_FAR">OS BCVA FAR</label>
                                                    <input type="text" class="form-control" name="OS_BCVA_FAR"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_NEAR">OS NEAR</label>
                                                    <input type="text" class="form-control" name="OS_NEAR"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_AUTO_AFTER_CYCLO">OS AUTO AFTER CYCLO</label>
                                                    <input type="text" class="form-control" name="OS_AUTO_AFTER_CYCLO"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_BUT">OS BUT</label>
                                                    <input type="text" class="form-control" name="OS_BUT"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_IOP">OS IOP</label>
                                                    <input type="text" class="form-control" name="OS_IOP"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_LIDS">OS LIDS</label>
                                                    <input type="text" class="form-control" name="OS_LIDS"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_CORNEA">OS CORNEA</label>
                                                    <input type="text" class="form-control" name="OS_CORNEA"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_CONJUNCTIVA">OS CONJUNCTIVA</label>
                                                    <input type="text" class="form-control" name="OS_CONJUNCTIVA"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_IRIS">OS IRIS</label>
                                                    <input type="text" class="form-control" name="OS_IRIS"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_AC">OS AC</label>
                                                    <input type="text" class="form-control" name="OS_AC" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_LENS">OS LENS</label>
                                                    <input type="text" class="form-control" name="OS_LENS"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_VITREOUS">OS VITREOUS</label>
                                                    <input type="text" class="form-control" name="OS_VITREOUS"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_CD">OS CD</label>
                                                    <input type="text" class="form-control" name="OS_CD" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_FUNDUS">OS FUNDUS</label>
                                                    <input type="text" class="form-control" name="OS_FUNDUS"
                                                        placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        

                                    </div>

                                </div>


                            </div>
                        </div>

                    </div>

                </div>



        </div>
    </div>
</div>


<footer style="margin-bottom: 5px" class="footer fixed-bottom footer-light footer-shadow container">
    <div class="col">
        <div class="row py-2 justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="card border-bottom-info shadow">
                    <div class="card-body">
                        <button id="btnToggleEyeDetails" class="btn btn-primary float-left shadowhover"
                            onclick="showEyeDetailFields()" type="button"><?php echo e(__('lang.addMoreDetails')); ?></button>
                        <button class="btn btn-success float-right shadowhover" type="submit"><?php echo e(__('lang.addPatient')); ?></button>
                    </div>

                </div>
            </div>

        </div>
    </div>
</footer>
</form>
<script>
         $( window ).on( "load", function() { var col2 = document.getElementById('col2').clientHeight;
        var col1= document.getElementById('col1').clientHeight;
        if (col2>col1)
        document.getElementById("col1").style.height = ""+col2+"px";
        else 
        document.getElementById("col2").style.height = ""+col1+"px";});
        
       



        $("#col2").click(function(){
            var col2 = document.getElementById('col2').clientHeight;
        
        document.getElementById("col1").style.height = ""+col2+"px";
});
    function showEyeDetailFields() {
    var x = document.getElementById("EyeDetail");
    var y=document.getElementById("btnToggleEyeDetails");
  
    if (x.style.display === "none") {
        y.innerHTML="<?php echo e(__('lang.hideDetails')); ?>";
      x.style.display = "block";
    } else {
        y.innerHTML="<?php echo e(__('lang.addMoreDetails')); ?>";
      x.style.display = "none";
    }
  }

  <?php if(Session::has('success')): ?>
  $(function(){
    toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
    "positionClass": "toast-bottom-right"
  }
  toastr.options.rtl = true;
            toastr.success("<?php echo e(Session::get('success')); ?>");
        })
  <?php endif; ?>
  <?php if(Session::has('failed')): ?>
  $(function(){
            toastr.options{"positionClass": "toast-bottom-right"};
            toastr.danger("<?php echo e(Session::get('failed')); ?>");
        })
  <?php endif; ?>

  jQuery( document ).ready(function() {
        // event for click on input (also you can use click)
        //better to change form to .yourFormClass
        $('form input[type=text]').focus(function(){
        // get selected input error container
        $(this).siblings("#error").remove();
        });
    });
    jQuery( document ).ready(function() {
        // event for click on input (also you can use click)
        //better to change form to .yourFormClass
        $('form input[type=date]').focus(function(){
        // get selected input error container
        $(this).siblings("#error").remove();
        });
    });
    jQuery( document ).ready(function() {
        // event for click on input (also you can use click)
        //better to change form to .yourFormClass
        $('form form-group select').focus(function(){
        // get selected input error container
        $(this).siblings("#error").remove();
        });
    });


    
</script><?php /**PATH C:\wamp64\www\opticalClinic\resources\views/patient/addPatientlayout.blade.php ENDPATH**/ ?>