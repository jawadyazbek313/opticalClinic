
<?php $__env->startSection('content'); ?>
<div id="content" class="container-fluid text-center justify-content-center">
  <?php echo $__env->make('appointment.trashlistAjax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>
<script>
  $(".card-body").css('padding',0);
$( ".pagination" ).addClass( "row justify-content-center text-center ltr" );


function restoreMe(id){
let _token   = $('meta[name="csrf-token"]').attr('content');
$.ajax({
    url:"/appointment/"+id+"/restore",
    type: "GET",
    
    success:function(response)
     {

      toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
    "positionClass": "toast-bottom-center"
  }
       toastr.success(response['success']);
       $.ajax({
     url:"/appointments/trashlistrefresh",
     success:function(data)
     {
     
      
      $('#content').html(data);
      
    

     }
    });
    
       
      
      
    
}

});
}
function deleteMe(id){
    let _token   = $('meta[name="csrf-token"]').attr('content');
$.ajax({
    url:"/appointment/"+id,
    type: "DELETE",
    data:{
        _token:_token,
        id:id
    },
    success:function(response)
     {
        toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
    "positionClass": "toast-bottom-center"
  }
       toastr.success(response['success']);
       
       $.ajax({
     url:"/appointments/trashlistrefresh",
     success:function(data)
     {
     
      
      $('#content').html(data);
      
    

     }
    });
       
      
      
    
}

});

}

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\opticalClinic\resources\views/appointment/trashlist.blade.php ENDPATH**/ ?>