
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row justify-content-center text-center pb-2 pt-0" ><div class="col"><div class="shadow py-2 card border-top-success"><h4>تعديل الملف</h4></div></div></div>
            <form action="<?php echo e(route('patient.update',$patient->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div <?php if(App::getlocale()=='ar' ): ?> style="direction: rtl !important" <?php endif; ?> class="row">
                    <div class="col-lg-6 mb-4 col-md-12 text-center">
                        <div  class="card h-100 border-top-success">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="firstname"><?php echo e(__('lang.inpFN')); ?></label>
                                    <input value="<?php echo e($patient->firstname); ?>" type="text" class="form-control"
                                        name="firstname">

                                </div>




                                <div class="form-group">
                                    <label for="midname"><?php echo e(__('lang.inpMN')); ?></label>
                                    <input value="<?php echo e($patient->midname); ?>" type="text" class="form-control"
                                        name="midname">

                                </div>





                                <div class="form-group">
                                    <label for="lastname"><?php echo e(__('lang.inpLN')); ?></label>
                                    <input value="<?php echo e($patient->lastname); ?>" type="text" class="form-control"
                                        name="lastname">

                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="gender"><?php echo e(__('lang.inpGender')); ?></label>
                                            <select id="genderSelect" class="form-control" name="gender">
                                                <option value="male"><?php echo e(__('lang.genderOptionMale')); ?></option>
                                                <option value="female"><?php echo e(__('lang.genderOptionFemale')); ?></option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="insurancetype"><?php echo e(__('lang.inpInsuranceType')); ?></label>
                                            <select id="InsuranceSelect" class="form-control" name="insurancetype">
                                                <option selected hidden><?php echo e(__('lang.inpInsuranceTypeLabel')); ?></option>
                                                <option value="NSSF"><?php echo e(__('lang.InsuranceTypeOpt1')); ?></option>
                                                <option value="Hay2a"><?php echo e(__('lang.InsuranceTypeOpt2')); ?></option>
                                                <option value="ISF"><?php echo e(__('lang.InsuranceTypeOpt3')); ?></option>
                                                <option value="Lebanese army"><?php echo e(__('lang.InsuranceTypeOpt4')); ?></option>
                                                <option value="Coop"><?php echo e(__('lang.InsuranceTypeOpt5')); ?></option>
                                                <option value="Private"><?php echo e(__('lang.InsuranceTypeOpt6')); ?></option>

                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="bloodtype"><?php echo e(__('lang.inpBloodType')); ?></label>
                                            <select id="BloodSelect" class="form-control" name="bloodtype">
                                                <option selected hidden><?php echo e(__('lang.inpBloodTypeLabel')); ?></option>
                                                <option value="A+">A+</option>
                                                <option value="B+">B+</option>
                                                <option value="AB+">AB+</option>
                                                <option value="O+">O+</option>
                                                <option value="A-">A-</option>
                                                <option value="B-">B-</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O-">O-</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">

                                            <label for="dob"><?php echo e(__('lang.InpDob')); ?> </label>
                                            <input value="<?php echo e($patient->dob); ?>" class="datepicker form-control" id="dob"
                                                name="dob" type="date" data-date-format="dd/mm/yy">
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


                    


                    <div class="col-lg-6 mb-4  col-md-12 marginTopResponsive text-center">
                        <div class="card h-100 border-top-success">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="diag"><?php echo e(__('lang.InpDiag')); ?></label>
                                            <textarea rows="2" class="form-control"
                                                name="diag"><?php echo e(old ('diag')); ?><?php echo e($patient->diag); ?></textarea>
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
                                            <input value="<?php echo e($patient->job); ?>" type="text" class="form-control"
                                                name="job">

                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="address"><?php echo e(__('lang.InpAddress')); ?></label>
                                            <textarea rows="1" class="form-control"
                                                name="address"><?php echo e(old ('address')); ?><?php echo e($patient->address); ?></textarea>
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
                                            <input value="<?php echo e($patient->number); ?>" type="text" class="form-control"
                                                name="number">

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="maincomplaint"><?php echo e(__('lang.InpMainComplaint')); ?></label>
                                            <textarea rows="1" class="form-control"
                                                name="maincomplaint"><?php echo e(old ('maincomplaint')); ?><?php echo e($patient->maincomplaint); ?></textarea>
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

                <div id="EyeDetail" class="row py-4 justify-content-center" style="display: none; margin-bottom: 75px">
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
                                                    <input value="<?php echo e($patient->OD_VA); ?>" type="text" class="form-control"
                                                        name="OD_VA" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_AUTO">OD AUTO</label>
                                                    <input value="<?php echo e($patient->OD_AUTO); ?>" type="text"
                                                        class="form-control" name="OD_AUTO" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_BCVA_FAR">OD BCVA FAR</label>
                                                    <input value="<?php echo e($patient->OD_BCVA_FAR); ?>" type="text"
                                                        class="form-control" name="OD_BCVA_FAR" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_NEAR">OD NEAR</label>
                                                    <input value="<?php echo e($patient->OD_NEAR); ?>" type="text"
                                                        class="form-control" name="OD_NEAR" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_AUTO_AFTER_CYCLO">OD AUTO AFTER CYCLO</label>
                                                    <input value="<?php echo e($patient->OD_AUTO_AFTER_CYCLO); ?>" type="text"
                                                        class="form-control" name="OD_AUTO_AFTER_CYCLO" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_BUT">OD BUT</label>
                                                    <input value="<?php echo e($patient->OD_BUT); ?>" type="text" class="form-control"
                                                        name="OD_BUT" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_IOP">OD IOP</label>
                                                    <input value="<?php echo e($patient->OD_IOP); ?>" type="text" class="form-control"
                                                        name="OD_IOP" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_LIDS">OD LIDS</label>
                                                    <input value="<?php echo e($patient->OD_LIDS); ?>" type="text"
                                                        class="form-control" name="OD_LIDS" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_CORNEA">OD CORNEA</label>
                                                    <input value="<?php echo e($patient->OD_CORNEA); ?>" type="text"
                                                        class="form-control" name="OD_CORNEA" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_CONJUNCTIVA">OD CONJUNCTIVA</label>
                                                    <input value="<?php echo e($patient->OD_CONJUNCTIVA); ?>" type="text"
                                                        class="form-control" name="OD_CONJUNCTIVA" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_IRIS">OD IRIS</label>
                                                    <input value="<?php echo e($patient->OD_IRIS); ?>" type="text"
                                                        class="form-control" name="OD_IRIS" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_AC">OD AC</label>
                                                    <input value="<?php echo e($patient->OD_AC); ?>" type="text" class="form-control"
                                                        name="OD_AC" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_LENS">OD LENS</label>
                                                    <input value="<?php echo e($patient->OD_LENS); ?>" type="text"
                                                        class="form-control" name="OD_LENS" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_VITREOUS">OD VITREOUS</label>
                                                    <input value="<?php echo e($patient->OD_VITREOUS); ?>" type="text"
                                                        class="form-control" name="OD_VITREOUS" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_CD">OD CD</label>
                                                    <input value="<?php echo e($patient->OD_CD); ?>" type="text" class="form-control"
                                                        name="OD_CD" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OD_FUNDUS">OD FUNDUS</label>
                                                    <input value="<?php echo e($patient->OD_FUNDUS); ?>" type="text"
                                                        class="form-control" name="OD_FUNDUS" placeholder="">

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
                                                    <input value="<?php echo e($patient->OS_VA); ?>" type="text" class="form-control"
                                                        name="OS_VA" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_AUTO">OS AUTO</label>
                                                    <input value="<?php echo e($patient->OS_AUTO); ?>" type="text"
                                                        class="form-control" name="OS_AUTO" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_BCVA_FAR">OS BCVA FAR</label>
                                                    <input value="<?php echo e($patient->OS_BCVA_FAR); ?>" type="text"
                                                        class="form-control" name="OS_BCVA_FAR" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_NEAR">OS NEAR</label>
                                                    <input value="<?php echo e($patient->OS_NEAR); ?>" type="text"
                                                        class="form-control" name="OS_NEAR" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_AUTO_AFTER_CYCLO">OS AUTO AFTER CYCLO</label>
                                                    <input value="<?php echo e($patient->OS_AUTO_AFTER_CYCLO); ?>" type="text"
                                                        class="form-control" name="OS_AUTO_AFTER_CYCLO" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_BUT">OS BUT</label>
                                                    <input value="<?php echo e($patient->OS_BUT); ?>" type="text" class="form-control"
                                                        name="OS_BUT" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_IOP">OS IOP</label>
                                                    <input value="<?php echo e($patient->OS_IOP); ?>" type="text" class="form-control"
                                                        name="OS_IOP" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_LIDS">OS LIDS</label>
                                                    <input value="<?php echo e($patient->OS_LIDS); ?>" type="text"
                                                        class="form-control" name="OS_LIDS" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_CORNEA">OS CORNEA</label>
                                                    <input value="<?php echo e($patient->OS_CORNEA); ?>" type="text"
                                                        class="form-control" name="OS_CORNEA" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_CONJUNCTIVA">OS CONJUNCTIVA</label>
                                                    <input value="<?php echo e($patient->OS_CONJUNCTIVA); ?>" type="text"
                                                        class="form-control" name="OS_CONJUNCTIVA" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_IRIS">OS IRIS</label>
                                                    <input value="<?php echo e($patient->OS_IRIS); ?>" type="text"
                                                        class="form-control" name="OS_IRIS" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_AC">OS AC</label>
                                                    <input value="<?php echo e($patient->OS_AC); ?>" type="text" class="form-control"
                                                        name="OS_AC" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_LENS">OS LENS</label>
                                                    <input value="<?php echo e($patient->OS_LENS); ?>" type="text"
                                                        class="form-control" name="OS_LENS" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_VITREOUS">OS VITREOUS</label>
                                                    <input value="<?php echo e($patient->OS_VITREOUS); ?>" type="text"
                                                        class="form-control" name="OS_VITREOUS" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_CD">OS CD</label>
                                                    <input value="<?php echo e($patient->OS_CD); ?>" type="text" class="form-control"
                                                        name="OS_CD" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="OS_FUNDUS">OS FUNDUS</label>
                                                    <input value="<?php echo e($patient->OS_FUNDUS); ?>" type="text"
                                                        class="form-control" name="OS_FUNDUS" placeholder="">

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

<script>
    function showEyeDetailFields() {
    var x = document.getElementById("EyeDetail");
    var y=document.getElementById("btnToggleEyeDetails");
  
    if (x.style.display === "none") {
        y.innerText="إخفاء التفاصيل";
      x.style.display = "block";
    } else {
        y.innerText="إضغط هنا لإصافة تفاصيل العينين";
      x.style.display = "none";
    }
  }

  <?php if(Session::has('success')): ?>
  $(function(){
    toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
      "positionClass": "toast-top-left"
  }
  toastr.options.rtl = true;
            toastr.success("<?php echo e(Session::get('success')); ?>");
        })
  <?php endif; ?>
  <?php if(Session::has('failed')): ?>
  $(function(){
            toastr.danger("<?php echo e(Session::get('failed')); ?>");
        })
  <?php endif; ?>


    window.onload = function() {
                    var InsuranceValue = "<?php echo e($patient->insurance); ?>";
                    var z = "<?php echo e($patient->gender); ?>";
                    var bloodtype = "<?php echo e($patient->bloodtype); ?>";
                    console.log(bloodtype);
                    bloodtype
                    let select1 = document.body.querySelector('#genderSelect');
                    switch (z) {
                        case "male":
                            select1.options[0].selected = true;
                            break;
                        case "female":
                            select1.options[1].selected = true;
                            break;

                    }
                    InsuranceValue = $.trim(InsuranceValue);
                    let select = document.body.querySelector('#InsuranceSelect');
                    switch (InsuranceValue) {
                        case "NSSF":
                            select.options[1].selected = true;
                            break;
                        case "Hay2a":
                            select.options[2].selected = true;
                            break;
                        case "ISF":
                            select.options[3].selected = true;
                            break;
                        case "Lebanese army":
                            select.options[4].selected = true;
                            break;
                        case "Coop":
                            select.options[5].selected = true;
                            break;
                        case "Private":
                            select.options[6].selected = true;
                            break;
                        default: 
                        select.options[0].selected = true;
                    }

                    bloodtype = $.trim(bloodtype);
                    let select2 = document.getElementById("BloodSelect");
                    switch (bloodtype) {
                        case 'A+':
                            select2.options[1].selected = true;
                            break;
                        case 'B+':
                            select2.options[2].selected = true;
                            break;
                        case 'AB+':
                            select2.options[3].selected = true;
                            break;
                        case 'O+':
                            select2.options[4].selected = true;
                            break;
                        case 'A-':
                            select2.options[5].selected = true;
                            break;
                        case 'B-':
                            select2.options[6].selected = true;
                            break;
                        case 'AB-':
                            select2.options[7].selected = true;
                            break;
                        case 'O-':
                            select2.options[8].selected = true;
                            break;
                    }}
</script>
<footer style="margin-bottom: 5px;height: auto;" class="footer fixed-bottom footer-light footer-shadow">
    <div class="col">
    <div class="row py-1  justify-content-center">
        <div class="col-lg-12 col-md-12">
            <div class="card border-bottom-info shadow">
                <div class="card-body">
                    <button id="btnToggleEyeDetails" class="btn btn-primary float-left"
                        onclick="showEyeDetailFields()"
                        type="button"><?php echo e(__('lang.showMoreDetails')); ?></button>
                    <button class="btn btn-success float-right"
                        type="submit"><?php echo e(__('lang.updatePatient')); ?></button></div>

            </div>
        </div>

    </div></div>
</footer>    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\opticalClinic\resources\views/patient/edit.blade.php ENDPATH**/ ?>