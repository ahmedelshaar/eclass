
<?php $__env->startSection('title', 'Site Settings'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php $__env->startComponent('components.breadcumb',['fourthactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
   <?php echo e(__('Site Settings')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu1'); ?>
<?php echo e(__('Site Settings')); ?>

<?php $__env->endSlot(); ?>
<?php if (isset($__componentOriginaleb2335b938fad9aa8fe68ad102cc16a90a88d3d2)): ?>
<?php $component = $__componentOriginaleb2335b938fad9aa8fe68ad102cc16a90a88d3d2; ?>
<?php unset($__componentOriginaleb2335b938fad9aa8fe68ad102cc16a90a88d3d2); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<div class="contentbar">
    <div class="row">
<?php if($errors->any()): ?>  
  <div class="alert alert-danger" role="alert">
  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
  <p><?php echo e($error); ?><button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true" style="color:red;">&times;</span></button></p>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
  </div>
  <?php endif; ?>
  
    <!-- row started -->
    <div class="col-lg-12">
    
        <div class="card m-b-30">
                <!-- Card header will display you the heading -->
                <div class="card-header">
                    <h5 class="card-box"><?php echo e(__('Site Settings')); ?></h5>
                </div> 
               
                <!-- card body started -->
                <div class="card-body">
                <ul class="nav nav-tabs mb-3" id="defaultTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#facebook" role="tab" aria-controls="home" aria-selected="true"><?php echo e(__('adminstaticword.GeneralSetting')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#google" role="tab" aria-controls="profile" aria-selected="false"><?php echo e(__('adminstaticword.SeoSetting')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#twitter" role="tab" aria-controls="profile" aria-selected="false"><?php echo e(__('adminstaticword.MailSetting')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#linkedin" role="tab" aria-controls="profile" aria-selected="false"><?php echo e(__('adminstaticword.CustomStyleandJS')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#amazon" role="tab" aria-controls="profile" aria-selected="false">&nbsp;&nbsp;<?php echo e(__('adminstaticword.SocialLoginSetting')); ?></a>
                        </li>
                    </ul>
                    <div class="tab-content" id="defaultTabContent">

                        <!-- === genral start ======== -->
                        <div class="tab-pane fade show active" id="facebook" role="tabpanel" aria-labelledby="home-tab">
                            <!-- === genral form start ======== -->
                            <?php echo $__env->make('admin.setting.genral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <!-- === genral form end ===========-->    
                        </div>
                          <!-- === genral end ======== -->

                          <!-- === seo start ======== -->
                        <div class="tab-pane fade" id="google" role="tabpanel" aria-labelledby="profile-tab">
                            <!-- === seo form start ======== -->
                            <?php echo $__env->make('admin.setting.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <!-- === seo form end ===========-->
                        </div>
                        <!-- === seo end ======== -->

                        <!-- === mailsetting start ======== -->
                        <div class="tab-pane fade" id="twitter" role="tabpanel" aria-labelledby="profile-tab">
                            <!-- === mailsetting form start ======== -->
                            <?php echo $__env->make('admin.setting.mailsetting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <!-- === mailsetting form end ===========-->
                        </div>
                        <!-- === mailsetting end ======== -->

                        <!-- === customstyle start ======== -->
                        <div class="tab-pane fade" id="linkedin" role="tabpanel" aria-labelledby="profile-tab">
                            <!-- === customstyle form start ======== -->
                            <?php echo $__env->make('admin.setting.customstyle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <!-- === customstyle form end ===========-->
                        </div>
                        <!-- === customstyle end ======== -->

                        <!-- === amazon start ======== -->
                        <div class="tab-pane fade" id="amazon" role="tabpanel" aria-labelledby="profile-tab">
                            <!-- === amazon form start ======== -->
                            <?php echo $__env->make('admin.setting.sociallogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <!-- === amazon form end ===========-->
                        </div>
                        <!-- === amazon end ======== -->

                    </div>
                </div><!-- card body end -->
            
        </div><!-- col end -->
    </div>
</div>
</div><!-- row end -->
    <br><br>
<?php $__env->stopSection(); ?>
<!-- main content section ended -->
<!-- This section will contain javacsript start -->
<?php $__env->startSection('script'); ?>
<!--  for password eye start -->

<script>
    $(".midia-toggle").midia({
        base_url: '<?php echo e(url('')); ?>',
        directory_name: 'logo'
    });
</script>

<script>
    $(".midia-toggle2").midia({
        base_url: '<?php echo e(url('')); ?>',
        directory_name: 'favicon'
    });
</script>

<style>
.field_icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}
</style>

<script>
$(document).on('click', '.toggle-password1', function() {
$(this).toggleClass("fa-eye fa-eye-slash");
var input = $("#pass_log_id1");
input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});
</script>
<script>
$(document).on('click', '.toggle-password2', function() {
$(this).toggleClass("fa-eye fa-eye-slash");
var input = $("#pass_log_id2");
input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});
</script>
<script>
$(document).on('click', '.toggle-password3', function() {
$(this).toggleClass("fa-eye fa-eye-slash");
var input = $("#pass_log_id3");
input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});
</script>
<script>
$(document).on('click', '.toggle-password4', function() {
$(this).toggleClass("fa-eye fa-eye-slash");
var input = $("#pass_log_id4");
input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});
</script>
<script>
$(document).on('click', '.toggle-password5', function() {
$(this).toggleClass("fa-eye fa-eye-slash");
var input = $("#pass_log_id5");
input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});
</script>
<script>
$(document).on('click', '.toggle-password6', function() {
$(this).toggleClass("fa-eye fa-eye-slash");
var input = $("#pass_log_id6");
input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});
</script>
<script>
$(document).on('click', '.toggle-password', function() {
$(this).toggleClass("fa-eye fa-eye-slash");
var input = $("#pass_log_id7");
input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});
</script>
<!--  for password eye end -->
<!-- script to upload Logo start -->
<script>
        $('.profilechoose1').click(function(){ $('#imgupload1').trigger('click'); });

        $("#imgupload1").on('change',function() {
          readURL1(this);
        });

        function readURL1(input) {
          
          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
              $('.profilechoose1').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }
    </script>
<!-- script to upload Logo end -->
<!-- script to upload footer logo start -->
<script>
        $('.profilechoose2').click(function(){ $('#imgupload2').trigger('click'); });

        $("#imgupload2").on('change',function() {
          readURL2(this);
        });

        function readURL2(input) {
          
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
              $('.profilechoose2').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
          }
        }
    </script>
<!-- script to upload footer logo end -->
<!-- script to upload Favicon start -->
<script>
        $('.profilechoose3').click(function(){ $('#imgupload3').trigger('click'); });

        $("#imgupload3").on('change',function() {
          readURL3(this);
        });

        function readURL3(input) {
          
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
              $('.profilechoose3').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
          }
        }
    </script>
<!-- script to upload Favicon end -->
<!-- script to upload Preloader logo start -->
<script>
        $('.profilechoose4').click(function(){ $('#imgupload4').trigger('click'); });

        $("#imgupload4").on('change',function() {
          readURL4(this);
        });

        function readURL4(input) {
          
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
              $('.profilechoose4').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
          }
        }
    </script>
<!-- script to upload Preloader logo end -->
<!-- script to upload Contact Page Image start -->
<script>
        $('.profilechoose5').click(function(){ $('#imgupload5').trigger('click'); });

        $("#imgupload5").on('change',function() {
          readURL5(this);
        });

        function readURL5(input) {
          
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
              $('.profilechoose5').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
          }
        }
    </script>
<!-- script to upload Contact Page Image end -->
<!-- script to hide and show contact start -->
<script>
  (function($) {
    "use strict";

    $(function(){

          $('#customSwitch2').change(function(){
          if($('#customSwitch2').is(':checked')){
            $('#sec1_one').show('fast');
          }else{
            $('#sec1_one').hide('fast');
          }

        });

          $('#customSwitch2').change(function(){
          if($('#customSwitch2').is(':checked')){
            $('#sec_one').hide('fast');
          }else{
            $('#sec_one').show('fast');
          }

        });
     
    });
  })(jQuery);
</script>
<!-- script to hide and show contact end -->
<!-- script to hide and show PromoText start -->
<script>
  (function($) {
    "use strict";

    $(function(){

          $('#customSwitch3').change(function(){
          if($('#customSwitch3').is(':checked')){
            $('#sec2_one').show('fast');
          }else{
            $('#sec2_one').hide('fast');
          }

        });
     
    });
  })(jQuery);
</script>
<!-- script to hide and show PromoText end -->

<!-- script to hide and show password eye start -->
<script>
$(document).on('click', '.toggle-password', function() {

$(this).toggleClass("fa-eye fa-eye-slash");

var input = $("#pass_log_id");
input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});
</script>
<!-- script to hide and show password eye end -->
<?php $__env->stopSection(); ?>
<!-- This section will contain javacsript end -->
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/setting/setting.blade.php ENDPATH**/ ?>