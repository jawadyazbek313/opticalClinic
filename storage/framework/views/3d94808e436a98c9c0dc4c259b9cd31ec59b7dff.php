<?php $__env->startSection('content'); ?>
    <div class="container-fluid">


        <div class="row justify-content-center py text-center">
            <div class="col-md-12">




                <div class="row justify-content-center">
                    <div class="col-12 ">
                        <div <?php if(app()->getlocale() == 'ar'): ?>
                            style="direction:rtl"
                            <?php endif; ?> class="row">
                            <div id="ContentHere" class="col-lg-6 col-md-12 <?php if(App::getLocale() == 'ar'): ?> rtlME <?php endif; ?>">

                                <?php echo $__env->make('dailyAppointment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                            </div>

                        </div>

                        <div class="col-lg-6 col-md-12 marginTopResponsive <?php if(App::getLocale() == 'ar'): ?> rtlME <?php endif; ?>">
                            <div class="card border-top-primary shadow h-100 py-2 ">
                                <div class="card-header bg-transparent">
                                    <h3>Live Chat</h3>
                                </div>
                                <div class="card-body">

                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('messages')->html();
} elseif ($_instance->childHasBeenRendered('NzWHus6')) {
    $componentId = $_instance->getRenderedChildComponentId('NzWHus6');
    $componentTag = $_instance->getRenderedChildComponentTagName('NzWHus6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('NzWHus6');
} else {
    $response = \Livewire\Livewire::mount('messages');
    $html = $response->html();
    $_instance->logRenderedChild('NzWHus6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                                </div>
                            </div>
                        </div>


                    </div>
                    <br>
                    <div class="row marginTopResponsive">
                        <div class="col-lg-6 ">
                            <div class="card border-top-primary shadow h-100 py-2 ">
                                <div class="card-body">
                                    <h3><?php echo e(__('lang.nextWeekAppointment')); ?></h3>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 marginTopResponsive">
                            <div class="card border-top-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <h3><?php echo e(__('lang.tomorrowAppointment')); ?></h3>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <button role="button" style="position: fixed; bottom: 25px;right: 25px" data-trigger="focus"
        class="btn btn-primary btn-circle btn-md ltr" data-toggle="popover" data-html="true"
        data-content="    <div class='row justify-content-center p-0 m-0 '><div class='col m-0 p-0'> <a type='button' href='<?php echo e(route('patient.create')); ?>''
    class=' btn btn-block btn-outline-primary btn-lg'><?php echo e(__('lang.addPatient')); ?> <i class='float-right mx-2 fa fa-user-plus fa-lg'></i></a>
    <a type='button' href='<?php echo e(route('appointment.create')); ?>'
    class=' btn btn-block btn-outline-primary btn-lg'><?php echo e(__('lang.addAppointment')); ?> <i class='float-right '><i class=' ml-2 fa fa-calendar-alt fa-lg'> </i><i class='fa fa-plus fa-sm'></i></i></a>
    <a type='button' href='<?php echo e(route('patient.index')); ?>'
    class=' btn btn-block btn-outline-primary btn-lg'><?php echo e(__('lang.listPatient')); ?>  <i class='float-right mx-2 fa fa-users fa-lg'></i></a>

    <a type='button' href='<?php echo e(route('appointment.index')); ?>'
    class=' btn btn-block btn-outline-primary btn-lg'><?php echo e(__('lang.listAppointment')); ?> <i class='float-right mx-2 fa fa-calendar-alt fa-lg'></i></a></div></div> ">
        <i class="fa fa-plus fa-2x"></i></button>



    <button role="button" style="position: fixed; bottom: 100px !important;right: 25px !important"
        class="btn btn-primary btn-circle btn-md ltr" data-toggle="popover" data-html="true" data-trigger="focus"
        data-content="<div class='row justify-content-center p-0 m-0 '><div class='col m-0 p-0'> 
    <a type='button' class='btn btn-block btn-outline-primary btn-lg OpenAddPatient'><?php echo e(__('lang.addPatient')); ?> <i class='float-right mx-2 fa fa-user-plus fa-lg'></i></a>
    <a type='button' class=' btn btn-block btn-outline-primary btn-lg OpenAddAppointment'><?php echo e(__('lang.addAppointment')); ?> <i class='float-right '><i class=' ml-2 fa fa-calendar-alt fa-lg'> </i><i class='fa fa-plus fa-sm'></i></i></a>
    </div></div> ">
        <i class="fa fa-bolt fa-2x"></i></button>



    </div>
    <div <?php if(app()->getlocale() == 'ar'): ?>
        style="direction:rtl"
        <?php endif; ?> class="modal fade " id="myModal" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true"
        style="display: none;">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo e(__('lang.choosePaymentType')); ?></h5>
                    <button type="button" class="btn <?php if(app()->getlocale() == 'ar'): ?> float-left <?php else: ?> float-right <?php endif; ?> " data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="ajaxform">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <input hidden name="patient_id" value="">
                                <input hidden name="appointment_id" value="">

                                <div class="form-group">
                                    <label for="payment_type"><?php echo e(__('lang.choosePaymentType')); ?></label>
                                    <select required minlength="1" class="form-control selectpicker" name="payment_type"
                                        id="payment_type">
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
                                            <input minlength="4" disabled type="payment" value="<?php echo e(old('payment')); ?>"
                                                class="form-control" name="payment" id="payment"
                                                placeholder="<?php echo e(__('lang.inpPaymentPlaceHolder')); ?>" required>

                                        </div>
                                    </div>
                                    <div id="Currency" style="display: none" class="col-4">
                                        <div class="form-group">
                                            <label for="payment_currency"><?php echo e(__('lang.choosePaymentCurrency')); ?></label>
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
                    </form>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" onclick="Resetform()"
                        data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary save-data">Save changes</button>
                </div>
            </div>

        </div>
    </div>

    


    <div <?php if(app()->getlocale() == 'ar'): ?>
        style="direction:rtl"
        <?php endif; ?> class="modal fade " id="myModal1" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true"
        style="display: none;">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalCenterTitle"><?php echo e(__('lang.addPatient')); ?></h3>
                    <button type="button" class="btn <?php if(app()->getlocale() == 'ar'): ?> float-left <?php else: ?> float-right <?php endif; ?> " data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="ajaxgo">

                    </form>
                </div>

            </div>

        </div>
    </div>



    <div <?php if(app()->getlocale() == 'ar'): ?>
        style="direction:rtl"
        <?php endif; ?> class="modal fade " id="addAppointment" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true"
        style="display: none;">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalCenterTitle"><?php echo e(__('lang.addAppointment')); ?></h3>
                    <button type="button" class="btn <?php if(app()->getlocale() == 'ar'): ?> float-left <?php else: ?> float-right <?php endif; ?> " data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addAppointmentAjax">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <label for="patient_id">Choose Patient</label>
                                    <select id="patient_idjax" name="patient_id"
                                        class="selectpicker form-control justify-content-center" data-live-search="true"
                                        data-size="8" data-virtualScroll="true">
                                        <option selected hidden value=""></option>
                                        <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($patient->id); ?>" data-subtext=" <?php echo e($patient->dob); ?> ">
                                                <?php echo e($patient->firstname . ' ' . $patient->midname . ' ' . $patient->lastname); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>



                                </div>
                            </div>
                            <div class="col-lg-2 col-md-12">
                                <div style="direction: ltr !important" class="form-group">
                                    <label for="date"><?php echo e(__('lang.chooseReviewDate')); ?></label>
                                    <input id="datepicker" value="<?php echo e(date('Y-m-d')); ?>" name="date" />
                                    <script>
                                        $('#datepicker').datepicker({
                                            uiLibrary: 'bootstrap4',
                                            iconsLibrary: 'materialicons',
                                            weekStartDay: 1,
                                            format: 'yyyy-mm-dd'
                                        });
                                    </script>



                                </div>
                            </div>

                            <div class="col-lg-2 col-md-12">
                                <div style="direction: ltr !important" class="form-group">
                                    <label for="time"><?php echo e(__('lang.chooseReviewTime')); ?></label>
                                    <input id="timepicker" name="time" />
                                    <script>
                                        $('#timepicker').timepicker({
                                            uiLibrary: 'bootstrap4',
                                            iconsLibrary: 'materialicons',
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
                                            <label class="form-check-label" for="inlineRadio1"><?php echo e(__('lang.yes')); ?></label>
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
                        <div class="row h-100 mt-4 rtl">
                            <div class="col">
                                <div class="form-group ">
                                    <textarea rows="2" class="form-control" id="note" name="notes"
                                        placeholder="<?php echo e(__('lang.AppointmentNotesPlaceHolder')); ?>"><?php echo e(old('notes')); ?></textarea>

                                    <?php $__errorArgs = ['notes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div id="error" style="direction: ltr !important;"
                                            class="card text-white bg-danger">
                                            <span><i class="fas fa-exclamation-triangle"></i> <?php echo e($message); ?></span>
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
                                        <select class="form-control selectpicker" name="payment_type" id="payment_type1">
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
                                                <input disabled type="payment" value="<?php echo e(old('payment')); ?>"
                                                    class="form-control" name="payment" id="payment1"
                                                    placeholder="<?php echo e(__('lang.inpPaymentPlaceHolder')); ?>">

                                            </div>
                                        </div>
                                        <div id="Currency1" style="display: none" class="col-4">
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
                        <div class="row h-100">
                            <div class="col text-center">
                                <button class="addAjaxAppointment btn btn-lg mt-2 shadow-sm btn-outline-secondary"><i
                                        class="fa fa-xs fa-plus"></i> <i class="fa fa-calendar-alt"></i>
                                    <?php echo e(__('lang.addAppointment')); ?></button>
                            </div>
                        </div>




                        <script>
                            document.getElementById('inlineRadio1').addEventListener('change', function() {
                                if (this.checked == '1') {
                                    document.getElementById('Payments').style.display = "block";
                                } else
                                    document.getElementById('Payments').style.display = "none";


                            });

                            document.getElementById('inlineRadio2').addEventListener('change', function() {
                                if (this.checked == '1') {
                                    document.getElementById('Payments').style.display = "none";
                                } else
                                    document.getElementById('Payments').style.display = "block";


                            });

                            document.getElementById('payment_type').addEventListener('change', function() {
                                var x = document.getElementById('payment');
                                if (this.value != null) x.disabled = false;
                                if (this.value != 'cash') {
                                    x.value = "";
                                    x.type = 'text';
                                    if (document.getElementById('Currency').style.display == "block") {
                                        document.getElementById('Currency').style.display = "none";
                                    }
                                } else {
                                    x.value = "";
                                    x.type = 'number';
                                    document.getElementById('Currency').style.display = "block";
                                }
                            });
                        </script>
                    </form>
                </div>

            </div>

        </div>
    </div>

    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body text-center">
                    <h2> <?php echo e(__('lang.AreYouSureToDelete')); ?></h2>
                    <h6><span class="badge-warning badge-pill card p-2"><i class="fas fa-exclamation-triangle"></i>
                            <?php echo e(__('lang.warnDelete')); ?></span></h6>
                    <div class="row pt-4">
                        <input hidden type="text" name="appointmentidtrash" id="">
                        <div class="col-6">
                            <a class="btn btn-block btn-info text-white btn-ok MoveToTrash"><i class="fas fa-recycle"></i>
                                <?php echo e(__('lang.MoveToTrash')); ?></a>

                        </div>
                        <div class="col-6">
                            <a class="btn btn-block btn-danger btn-ok DeletePermanently"><i class="fas fa-trash"></i>
                                <?php echo e(__('lang.DeletePermanently')); ?></a>
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light text-dark  btn-default btn-block"
                        data-dismiss="modal">Cancel</button>

                </div>
            </div>
        </div>
    </div>
    <script>
        $(".addAjaxAppointment").click(function(event) {
            event.preventDefault();


            let patient_id = $("#addAppointment select[name=patient_id]").val();
            if (!patient_id) {
                toastr.warning("Please Choose patient First");

                return;
            }
            let date = $("#addAppointment input[name=date]").val();
            let time = $("#addAppointment input[name=time]").val();
            let isDone;
            if ($("#addAppointment #inlineRadio1").is(":checked")) isDone = 1;
            else isDone = 0;
            let notes = $("#addAppointment #note").val();
            console.log(notes)

            let payment_type = $("#addAppointment select[name=payment_type]").val();
            let payment_currency = $("#addAppointment select[name=payment_currency]").val();
            let payment = $("#addAppointment input[name=payment]").val();

            let _token = $('meta[name="csrf-token"]').attr('content');

            console.log(patient_id + "\n" + date + "\n" + time + "\n" + isDone + "\n" + notes + "\n" +
                payment_type + " " + payment_currency + " " + payment);

            $.ajax({
                url: "<?php echo e(route('appointment.store')); ?>",
                type: "post",

                data: {
                    patient_id: patient_id,
                    date: date,
                    time: time,
                    isDone: isDone,
                    notes: notes,
                    payment_type: payment_type,
                    payment_currency: payment_currency,
                    payment: payment,
                    _token: _token
                },
                success: function(response) {
                    $.ajax({
                        url: "/go/fetch_data/?page=" + 1,
                        success: function(data) {


                            $('#ContentHere').html("" + data + "");
                            $('[data-toggle="popover"]').popover();
                            $('[data-toggle="tooltip"]').tooltip();
                            $(".OpenModal").click(function(event) {

                                $('#myModal').modal('show');
                                var pat_id = $(this).attr('data-patient_id');
                                var app_id = $(this).attr('data-appointment_id');
                                $("input[name=patient_id]").val(pat_id);
                                $("input[name=appointment_id]").val(app_id);

                            });
                            $(".btnAbort").click(function(event) {

                                let appointment_id = $(this).attr(
                                    'data-appointmentid');
                                $('input[name=appointmentidtrash]').val(
                                    appointment_id);

                                $("#confirm-delete").modal('show');



                            });

                        }
                    });

                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                        "positionClass": "toast-top-right"
                    }
                    toastr.success(response['success']);


                    $('#addAppointment').modal('hide');
                    $("#addAppointmentAjax")[0].reset();
                    $(".filter-option-inner-inner").html("Choose Patient");


                },
                fail: function() {
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                        "positionClass": "toast-bottom-full-width"
                    }
                    toastr.danger("Failed to add");
                }
            });
        });
        //End Add Appointment AJAX



        $(function() {
            $('[data-toggle="popover"]').popover()
        });


        $(".DeletePermanently").click(function(event) {
            let appointment_id = $('input[name=appointmentidtrash]').val();

            deleteMe(appointment_id);

        });





        $(".MoveToTrash").click(function(event) {
            let appointment_id = $('input[name=appointmentidtrash]').val();
            let _token = $('meta[name="csrf-token"]').attr('content');
            let type = "temp";
            $.ajax({
                url: "appointment/trash",
                type: "post",

                data: {
                    appointment_id: appointment_id,
                    type: type,
                    _token: _token
                },
                success: function(response) {
                    toastr.success(response['success']);
                    $("#confirm-delete").modal('hide');
                    $.ajax({
                        url: "/go/fetch_data/?page=" + 1,
                        success: function(data) {


                            $('#ContentHere').html("" + data + "");
                            $('[data-toggle="tooltip"]').tooltip();
                            $('[data-toggle="popover"]').popover();
                            $(".btnAbort").click(function(event) {

                                let appointment_id = $(this).attr(
                                    'data-appointmentid');
                                $('input[name=appointmentidtrash]').val(
                                    appointment_id);

                                $("#confirm-delete").modal('show');



                            });

                            $(".OpenModal").click(function(event) {

                                $('#myModal').modal('show');
                                var pat_id = $(this).attr('data-patient_id');
                                var app_id = $(this).attr('data-appointment_id');
                                $("input[name=patient_id]").val(pat_id);
                                $("input[name=appointment_id]").val(app_id);

                            });
                        }
                    });


                }
            });



        });

        $(".btnAbort").click(function(event) {

            let appointment_id = $(this).attr('data-appointmentid');
            $('input[name=appointmentidtrash]').val(appointment_id);

            $("#confirm-delete").modal('show');



        });

        $(".OpenModal").click(function(event) {

            $('#myModal').modal('show');
            var pat_id = $(this).attr('data-patient_id');
            var app_id = $(this).attr('data-appointment_id');
            $("input[name=patient_id]").val(pat_id);
            $("input[name=appointment_id]").val(app_id);

        });

        function Resetform() {

            $("#ajaxform")[0].reset();
        }

        $(".save-data").click(function(event) {
            event.preventDefault();

            let payment_type = $("select[name=payment_type]").val();
            let payment_currency = $("select[name=payment_currency]").val();
            let payment = $("input[name=payment]").val();
            let patient_id = $("input[name=patient_id]").val();
            let _token = $('meta[name="csrf-token"]').attr('content');
            let appointment_id = $("input[name=appointment_id]").val();


            $.ajax({
                url: "/appointment/" + appointment_id + "/MarkDone",
                type: "post",
                beforeSend: function() {
                    this.innerHTML =
                        ' <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="sr-only">Loading...</span>';
                },
                complete: function() {
                    this.innerHTML = 'Save';
                },
                data: {
                    payment_type: payment_type,
                    payment_currency: payment_currency,
                    payment: payment,
                    patient_id: patient_id,
                    _token: _token
                },
                success: function(response) {
                    $.ajax({
                        url: "/go/fetch_data/?page=" + 1,
                        success: function(data) {


                            $('#ContentHere').html("" + data + "");
                            $('[data-toggle="tooltip"]').tooltip();
                            $('[data-toggle="popover"]').popover()
                            $(".btnAbort").click(function(event) {

                                let appointment_id = $(this).attr(
                                    'data-appointmentid');
                                $('input[name=appointmentidtrash]').val(
                                    appointment_id);

                                $("#confirm-delete").modal('show');



                            });
                            $(".OpenModal").click(function(event) {

                                $('#myModal').modal('show');
                                var pat_id = $(this).attr('data-patient_id');
                                var app_id = $(this).attr('data-appointment_id');
                                $("input[name=patient_id]").val(pat_id);
                                $("input[name=appointment_id]").val(app_id);

                            });
                        }
                    });
                    if (response) {
                        toastr.options = {
                            "closeButton": true,
                            "progressBar": true,
                            "positionClass": "toast-bottom-full-width"
                        }
                        toastr.success(response['success']);
                        var curr = "";
                        if (response['payment_type'] == 'cash') {
                            switch (response['payment_type']) {
                                case 'us':
                                    curr = "$$";
                                    break;
                                case 'lbp':
                                    curr = "L.L.";
                                    break;

                                default:
                                    curr = " ";
                                    break;
                            }
                        }

                        $('#myModal').modal('hide');
                        $("#ajaxform")[0].reset();
                        // $('#ChangeAfterSuccess').html('Done').removeClass('bg-primary').addClass('bg-success')
                        // .removeClass('OpenModal').attr("data-toggle","tooltip").attr("data-placement","bottom").attr("data-html",true)
                        // .removeAttr("type").attr("data-original-title",'<div  class="row "><div class="col"><h4>Paid: <small>'+response['payment_type']+'</small></h4></div></div> <div class="row"><div class="col"><h5>'
                        // +response['payment']+'<small>'+curr+'</small></h5> <br> '+response['created_at']+'</div></div>');
                        // $('[data-toggle="tooltip"]').tooltip();
                    }
                },
                fail: function() {
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                        "positionClass": "toast-bottom-full-width"
                    }
                    toastr.danger("Failed to Update");
                }
            });
        });
        document.getElementById('payment_type1').addEventListener('change', function() {
            var x = document.getElementById('payment1');
            if (this.value != null) x.disabled = false;
            if (this.value != 'cash') {
                x.value = "";
                x.type = 'text';
                if (document.getElementById('Currency1').style.display == "block") {
                    document.getElementById('Currency1').style.display = "none";
                }
            } else {
                x.value = "";
                x.type = 'number';
                document.getElementById('Currency1').style.display = "block";
            }
        });
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>



    <script>
        $(document).ready(function() {

            $(document).on('click', '#ContentHere .pagination a', function(event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
            });

            //add appointment ajax
            $(document).on('click', '.OpenAddAppointment', function(event) {

                $('#addAppointment').modal('show');

            });
            //add patient ajax
            $(document).on('click', '.OpenAddPatient', function(event) {
                event.preventDefault();
                $.ajax({
                    url: "/patient/create",
                    success: function(data) {


                        $('#ajaxgo').html(data);


                        $('#myModal1').modal('show');


                    }
                });
            });

            function fetch_data(page) {
                $.ajax({
                    url: "/go/fetch_data/?page=" + page,
                    success: function(data) {


                        $('#ContentHere').html("" + data + "");
                        $('[data-toggle="popover"]').popover();

                        $('[data-toggle="tooltip"]').tooltip();
                        $(".btnAbort").click(function(event) {

                            let appointment_id = $(this).attr('data-appointmentid');
                            $('input[name=appointmentidtrash]').val(appointment_id);

                            $("#confirm-delete").modal('show');



                        });
                        $(".OpenModal").click(function(event) {

                            $('#myModal').modal('show');
                            var pat_id = $(this).attr('data-patient_id');
                            var app_id = $(this).attr('data-appointment_id');
                            $("input[name=patient_id]").val(pat_id);
                            $("input[name=appointment_id]").val(app_id);

                        });
                    }
                });
            }

        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\opticalClinic\resources\views/home.blade.php ENDPATH**/ ?>