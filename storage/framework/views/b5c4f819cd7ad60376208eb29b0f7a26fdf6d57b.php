
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form id="ajaxgo1" autocomplete="off" action="<?php echo e(route('patient.index')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div <?php if(App::getlocale()=='ar' ): ?> style="direction: rtl !important" <?php endif; ?> class="row">
                    <div   class="col-lg-6  col-md-12 text-center">
                        <div   class="card border-top-primary">
                            <div  id="col1" class="card-body">
        
                                <div class="form-group">
                                    <label for="firstname"><?php echo e(__('lang.inpFN')); ?></label>
                                    <input  type="text" value="<?php echo e(old ('firstname')); ?>" class="form-control"
                                        name="firstname" placeholder="<?php echo e(__('lang.inEnterFN')); ?>">
                                        <span class="text-danger error-text firstname_err"></span>

                                </div>




                                <div class="form-group">
                                    <label for="midname"><?php echo e(__('lang.inpMN')); ?></label>
                                    <input type="text" value="<?php echo e(old ('midname')); ?>" class="form-control" name="midname"
                                        placeholder="<?php echo e(__('lang.inEnterMN')); ?>">
                                        <span class="text-danger error-text midname_err"></span>

                                </div>





                                <div class="form-group">
                                    <label for="lastname"><?php echo e(__('lang.inpLN')); ?></label>
                                    <input type="text" value="<?php echo e(old ('lastname')); ?>" class="form-control" name="lastname"
                                        placeholder="<?php echo e(__('lang.inEnterLN')); ?>">
                                        <span class="text-danger error-text lastname_err"></span>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="gender"><?php echo e(__('lang.inpGender')); ?></label>
                                            <select class="form-control border" name="gender">
                                                <option value="male"><?php echo e(__('lang.genderOptionMale')); ?></option>
                                                <option value="female"><?php echo e(__('lang.genderOptionFemale')); ?></option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="insurancetype"><?php echo e(__('lang.inpInsuranceType')); ?></label>
                                            <select class="form-control border" name="insurancetype">
                                                <option value="" selected hidden><?php echo e(__('lang.inpInsuranceTypeLabel')); ?>

                                                </option>
                                                <option value="NSSF"><?php echo e(__('lang.InsuranceTypeOpt1')); ?></option>
                                                <option value="Hay2a"><?php echo e(__('lang.InsuranceTypeOpt2')); ?></option>
                                                <option value="ISF"><?php echo e(__('lang.InsuranceTypeOpt3')); ?></option>
                                                <option value="Lebanese army"><?php echo e(__('lang.InsuranceTypeOpt4')); ?></option>
                                                <option value="Coop"><?php echo e(__('lang.InsuranceTypeOpt5')); ?></option>
                                                <option value="Private"><?php echo e(__('lang.InsuranceTypeOpt6')); ?></option>

                                            </select>
                                            <span class="text-danger error-text insurancetype_err"></span>

                                        </div>


                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="bloodtype"><?php echo e(__('lang.inpBloodType')); ?></label>
                                            <select class="form-control border" name="bloodtype">
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
                                            <span class="text-danger error-text bloodtype_err"></span>

                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div style="direction: ltr !important" class="form-group">

                                            <label for="dob"><?php echo e(__('lang.InpDob')); ?> </label>
                                            <input type="date" class="form-control"  name="dob"/>
                                           
                                            <span class="text-danger error-text dob_err"></span>


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
                                            <input type="text" value="<?php echo e(old ('number')); ?>" class="form-control" name="number"
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

                



        </div>
    </div>
</div>


<footer style="margin-bottom: 5px" class="footer footer-light footer-shadow">
    <div class="col">
        <div class="row py-2 justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="card border-bottom-info shadow">
                    <div class="card-body justify-content-center text-center">
                       
                        <button class="btn btn-block btn-success" onclick="AddPatient()" type="button"><?php echo e(__('lang.addPatient')); ?></button>
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


// JavaScript function to add patient from ajax form with live validation
  function AddPatient(){

   let firstname=$("input[name=firstname]").val();
   let midname=$("input[name=midname]").val();
   let lastname=$("input[name=lastname]").val();
   let gender=$("select[name=gender]").val();
   let insurancetype=$("select[name=insurancetype]").val();
   let bloodtype=$("select[name=bloodtype]").val();
   let dob=$("input[name=dob]").val();
   let job=$("input[name=job]").val();
   let diag=$("textarea[name=diag]").val();
   let _token=$('meta[name="csrf-token"]').attr('content');
   let address=$("textarea[name=address]").val();
   let number=$("input[name=number]").val();
   let maincomplaint=$("textarea[name=maincomplaint]").val();

   $.ajax({
        url: "/patient",
        type:"post",

        data:{
            firstname:firstname,
            midname:midname,
            lastname:lastname,
            gender:gender,
            insurancetype:insurancetype,
            dob:dob,
            bloodtype:bloodtype,
            job:job,
            diag:diag,
            address:address,
            number:number,
            maincomplaint:maincomplaint,
          _token: _token,


        },
        success:function(response){
           
                toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
    "positionClass": "toast-bottom-right"
  }
          toastr.success("Added successfully");
          $('#ajaxgo1')[0].reset();
        
        },
        error:function (response) {
          $('.firstname_err').text(response.responseJSON.errors.firstname);
          $('.midname_err').text(response.responseJSON.errors.midname);
          $('.lastname_err').text(response.responseJSON.errors.lastname);
          $('.gender_err').text(response.responseJSON.errors.gender);
          $('.bloodtype_err').text(response.responseJSON.errors.bloodtype);
          $('.dob_err').text(response.responseJSON.errors.dob);
          $('.insurancetype_err').text(response.responseJSON.errors.insurancetype);
        }
       }
       );
  }


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


    
</script><?php /**PATH C:\wamp64\www\opticalClinic\resources\views/patient/addPatientFast.blade.php ENDPATH**/ ?>