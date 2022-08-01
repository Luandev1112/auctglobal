<!-- Script files -->

<script src="<?php echo e(JS_HOME); ?>jquery-2.1.1.min.js"></script>
 <!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>  -->

<script src="<?php echo e(JS_HOME_ONLINE); ?>popper.min.js" crossorigin="anonymous"></script>

<!--script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" crossorigin="anonymous"></script-->

<script src="<?php echo e(JS_HOME); ?>bootstrap.min.js"></script>
<script src="<?php echo e(JS_HOME_ONLINE); ?>modernizr.min.js"></script>

<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script> -->

<script src="<?php echo e(JS_HOME_ONLINE); ?>js-offcanvas.pkgd.min.js"></script>

<!-- <script src='https://npmcdn.com/js-offcanvas@1.0/dist/_js/js-offcanvas.pkgd.min.js'></script> -->

<script src="<?php echo e(JS_HOME); ?>slider/owl.carousel.min.js"></script>
<!-- Magnific Popup core JS file -->

<script src="<?php echo e(JS_HOME); ?>wow.min.js"></script>
<script src="<?php echo e(JS_HOME); ?>index.js"></script>
<script src="<?php echo e(JS_HOME); ?>main.js"></script>


<script src="<?php echo e(JS_HOME); ?>dashboard.js"></script>

<script src="<?php echo e(JS); ?>sweetalert-dev.js"></script>


<script src="<?php echo e(JS_HOME); ?>datatables.min.js"></script>

<!-- include alertify script -->
<script src="<?php echo e(ALERTIFY); ?>/alertify.min.js"></script>




<?php if(isset($datatable)): ?>
<script>


 $(document).ready(function () {

  /* var tableObj = $('.datatable').DataTable({
       language: {
           paginate: {
               next: '<i class="fa fa-fw fa-angle-right">'
               , previous: '<i class="fa fa-fw fa-angle-left">'
           }
           , "sLengthMenu": " _MENU_ "
       , }

       , "sDom": 'Rfrtlip'
   });
   $('#search-inp').on('keyup', function () {
       tableObj.search($(this).val()).draw();
   });*/

   $('.datatable').DataTable({
      language: {
           paginate: {
               next: '<i class="fa fa-fw fa-angle-right">'
               , previous: '<i class="fa fa-fw fa-angle-left">'
           }
           , "sLengthMenu": " _MENU_ "
       , },
        responsive: true,
        "aLengthMenu": [5,10,15,20],
        "pageLength": 5

   });

});
</script>
<?php endif; ?>

<script>

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});



// window._token = '<?php echo e(csrf_token()); ?>';

var csrfToken = $('[name="csrf_token"]').attr('content');

  setInterval(refreshToken, 600000); // 1 hour

  function refreshToken(){
      $.get('refresh-csrf').done(function(data){
          csrfToken = data; // the new token
      });
  }

  setInterval(refreshToken, 600000); // 1 hour
</script>



<script>

function showModal(modalname)
{

  if (modalname=='myModal') {

   /* $("#loginModal").modal('hide').hide(100);
    $("#myModal").delay(100).show(100);
*/
    window.setTimeout(function () {
        $('#loginModal').modal('hide');
    }, 100);

     window.setTimeout(function () {
        $('#myModal').delay(100).modal('show');
    }, 100);

  } else if (modalname=='loginModal') {

    /* $("#myModal").hide(100);
     $("#loginModal").delay(100).show(100);*/

      window.setTimeout(function () {
        $('#myModal').modal('hide');
    }, 100);

     window.setTimeout(function () {
        $('#loginModal').delay(100).modal('show');
    }, 100);

  } else {

    $('#myModal, #loginModal').modal('hide');
  }


}





$(function() {

    $('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
    $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });

});




$(function() {

    $('#login-form-modal-link').click(function(e) {
    $("#login-form-modal").delay(100).fadeIn(100);
    $("#register-form-modal").fadeOut(100);
    $('#register-form-modal-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#register-form-modal-link').click(function(e) {
    $("#register-form-modal").delay(100).fadeIn(100);
    $("#login-form-modal").fadeOut(100);
    $('#login-form-modal-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });

});




</script>

<?php echo $__env->yieldContent('footer_scripts'); ?>

<?php echo getSetting('google_analytics', 'seo_settings'); ?>



<?php echo $__env->yieldContent('custom_div_end'); ?>

<div class="ajax-loader" style="display:none;" id="ajax_loader"><img src="<?php echo e(AJAXLOADER); ?>"> <?php echo e(trans('please_wait')); ?>...</div>
