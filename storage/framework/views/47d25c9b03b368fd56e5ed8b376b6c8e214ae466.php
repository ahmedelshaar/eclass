
<?php $__env->startSection('title','Edit User'); ?>
<?php $__env->startSection('maincontent'); ?>

<?php $__env->startComponent('components.breadcumb',['thirdactive' => 'active']); ?>

<?php $__env->slot('heading'); ?>
<?php echo e(__('Home')); ?>

<?php $__env->endSlot(); ?>

<?php $__env->slot('menu1'); ?>
<?php echo e(__('Admin')); ?>

<?php $__env->endSlot(); ?>

<?php $__env->slot('menu2'); ?>
<?php echo e(__(' Edit User')); ?>

<?php $__env->endSlot(); ?>

<?php $__env->slot('button'); ?>
<div class="col-md-4 col-lg-4">
  <a href="<?php echo e(route('user.index')); ?>" class="float-right btn btn-primary-rgba mr-2"><i
      class="feather icon-arrow-left mr-2"></i><?php echo e(__('Back')); ?></a>
</div>
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
    <div class="col-lg-12">
      <div class="card m-b-30">
        <div class="card-header">
          <h5 class="box-title"><?php echo e(__('adminstaticword.Edit')); ?> <?php echo e(__('adminstaticword.User')); ?></h5>
        </div>
        <div class="card-body ml-2">
          <form action="<?php echo e(route('user.update',$user->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('PUT')); ?>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fname">
                    <?php echo e(__('adminstaticword.FirstName')); ?>:
                    <sup class="text-danger">*</sup>
                  </label>
                  <input value="<?php echo e($user->fname); ?>" autofocus required name="fname" type="text" class="form-control"
                    placeholder="<?php echo e(__('adminstaticword.Please')); ?> <?php echo e(__('adminstaticword.Enter')); ?> <?php echo e(__('adminstaticword.FirstName')); ?>" />
                </div>
                <div class="form-group">
                  <label for="lname">
                    <?php echo e(__('adminstaticword.LastName')); ?>:
                    <sup class="text-danger">*</sup>
                  </label>
                  <input value="<?php echo e($user->lname); ?>" required name="lname" type="text" class="form-control"
                    placeholder="<?php echo e(__('adminstaticword.Enter')); ?> <?php echo e(__('adminstaticword.LastName')); ?>" />
                </div>

                <div class="form-group">
                  <label for="mobile"> <?php echo e(__('adminstaticword.Mobile')); ?>:</label>
                  <input value="<?php echo e($user->mobile); ?>" type="text" name="mobile"
                    placeholder="<?php echo e(__('adminstaticword.Enter')); ?> <?php echo e(__('adminstaticword.Mobile')); ?>"
                    class="form-control">
                </div>
                <div class="form-group">
                  <label for="mobile"><?php echo e(__('adminstaticword.Email')); ?>:<sup class="text-danger">*</sup> </label>
                  <input value="<?php echo e($user->email); ?>" required type="email" name="email"
                    placeholder="<?php echo e(__('adminstaticword.Enter')); ?> <?php echo e(__('adminstaticword.Email')); ?>"
                    class="form-control">
                </div>
                <div class="form-group">
                  <label for="address"><?php echo e(__('adminstaticword.Address')); ?>: </label>
                  <textarea name="address" class="form-control" rows="1"
                    placeholder="<?php echo e(__('adminstaticword.Enter')); ?> adderss" value=""><?php echo e($user->address); ?></textarea>
                </div>
                
                <div class="form-group">
                  

                  <div class="row">
                    <div class="col-md-12">
                      <div class="update-password">
                        <label for="box1"> <?php echo e(__('adminstaticword.UpdatePassword')); ?>:</label>
                        <input type="checkbox" id="myCheck" name="update_pass" class="custom_toggle" onclick="myFunction()">
                      </div>
                    </div>
                  </div>


                  <div style="display: none" id="update-password">
                  <div class="form-group">
                    <label><?php echo e(__('adminstaticword.Password')); ?></label>
                    <input type="password" name="password" class="form-control"
                      placeholder="<?php echo e(__('adminstaticword.Enter')); ?> <?php echo e(__('adminstaticword.Password')); ?>">
                  </div>
               
              
                <div class="form-group" >
                  <label><?php echo e(__('adminstaticword.ConfirmPassword')); ?></label>
                  <input type="password" name="confirmpassword" class="form-control"
                    placeholder="<?php echo e(__('adminstaticword.ConfirmPassword')); ?>">
                </div>

              </div>
               
              </div>
               
                <div class="form-group">
                  <label for="twitter_url">
                    <?php echo e(__('adminstaticword.TwitterUrl')); ?>:
                  </label>
                  <input autofocus name="twitter_url" value="<?php echo e($user->twitter_url); ?>" type="text" class="form-control"
                    placeholder="Twitter.com/" />
                </div>
                <div class="form-group">
                  <label for="linkedin_url">
                    <?php echo e(__('adminstaticword.LinkedInUrl')); ?>:
                  </label>
                  <input autofocus name="linkedin_url" value="<?php echo e($user->linkedin_url); ?>" type="text"
                    class="form-control" placeholder="Linkedin.com/" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="role"><?php echo e(__('adminstaticword.SelectRole')); ?>:</label>
                  <?php if(Auth::User()->role=="admin"): ?>
                  <select class="form-control select2" name="role">
                    <option <?php echo e($user->role == 'user' ? 'selected' : ''); ?> value="user"><?php echo e(__('adminstaticword.User')); ?>

                    </option>
                    <option <?php echo e($user->role == 'admin' ? 'selected' : ''); ?> value="admin">
                      <?php echo e(__('adminstaticword.Admin')); ?>

                    </option>
                    <option <?php echo e($user->role == 'instructor' ? 'selected' : ''); ?> value="instructor">
                      <?php echo e(__('adminstaticword.Instructor')); ?></option>
                  </select>
                  <?php endif; ?>
                  <?php if(Auth::User()->role=="instructor"): ?>
                  <select class="form-control select2" name="role">
                    <option <?php echo e($user->role == 'user' ? 'selected' : ''); ?> value="user"><?php echo e(__('adminstaticword.User')); ?>

                    </option>
                    <option <?php echo e($user->role == 'instructor' ? 'selected' : ''); ?> value="instructor">
                      <?php echo e(__('adminstaticword.Instructor')); ?></option>
                  </select>
                  <?php endif; ?>
                  <?php if(Auth::User()->role=="user"): ?>
                  <select class="form-control select2" name="role">
                    <option <?php echo e($user->role == 'user' ? 'selected' : ''); ?> value="user"><?php echo e(__('adminstaticword.User')); ?>

                    </option>
                  </select>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label for="city_id"><?php echo e(__('adminstaticword.Country')); ?>:</label>
                  <select id="country_id" class="form-control select2" name="country_id">
                    <option value="none" selected disabled hidden>
                      <?php echo e(__('adminstaticword.SelectanOption')); ?>

                    </option>

                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($coun->country_id); ?>"
                      <?php echo e($user->country_id == $coun->country_id ? 'selected' : ''); ?>>
                      <?php echo e($coun->nicename); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="city_id"><?php echo e(__('adminstaticword.State')); ?>:</label>
                  <select id="upload_id" class="form-control select2" name="state_id">
                    <option value="none" selected disabled hidden>
                      <?php echo e(__('adminstaticword.SelectanOption')); ?>

                    </option>
                    <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($s->state_id); ?>" <?php echo e($user->state_id==$s->state_id ? 'selected' : ''); ?>>
                      <?php echo e($s->name); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </select>
                </div>
                <div class="form-group">
                  <label for="city_id"><?php echo e(__('adminstaticword.City')); ?>:</label>
                  <select id="grand" class="form-control select2" name="city_id">
                    <option value="none" selected disabled hidden>
                      <?php echo e(__('adminstaticword.SelectanOption')); ?>

                    </option>
                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($c->id); ?>" <?php echo e($user->city_id == $c->id ? 'selected' : ''); ?>><?php echo e($c->name); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="pin_code"><?php echo e(__('adminstaticword.Pincode')); ?>:</label>
                  <input value="<?php echo e($user->pin_code); ?>"
                    placeholder="<?php echo e(__('adminstaticword.Enter')); ?> <?php echo e(__('adminstaticword.Pincode')); ?>" type="text"
                    name="pin_code" class="form-control">
                </div>
                

               
                <div class="form-group">
                  <label><?php echo e(__('adminstaticword.Image')); ?>:<sup class="redstar">*</sup></label>
                  <small class="text-muted"><i class="fa fa-question-circle"></i>
                    <?php echo e(__('adminstaticword.Recommendedsize')); ?> (1375 x 409px)</small>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01"><?php echo e(__('Upload')); ?></span>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="inputGroupFile01" name="user_img"
                        aria-describedby="inputGroupFileAddon01">
                      <label class="custom-file-label" for="inputGroupFile01"><?php echo e(__('Choose file')); ?></label>
                    </div>
                  </div>
                  <?php if($user->user_img != null || $user->user_img !=''): ?>
                  <div class="edit-user-img">
                    <img src="<?php echo e(url('/images/user_img/'.$user->user_img)); ?>"  alt="User Image" class="img-responsive image_size">
                  </div>
                  <?php else: ?>
                  <div class="edit-user-img">
                    <img src="<?php echo e(asset('images/default/user.jpg')); ?>"  alt="User Image" class="img-responsive img-circle">
                  </div>
                  <?php endif; ?>
                </div>
             

              
                <div class="form-group">
                  <label for="fb_url">
                    <?php echo e(__('adminstaticword.FacebookUrl')); ?>:
                  </label>
                  <input autofocus name="fb_url" value="<?php echo e($user->fb_url); ?>" type="text" class="form-control"
                    placeholder="Facebook.com/" />
                </div>
                <div class="form-group">
                  <label for="youtube_url">
                    <?php echo e(__('adminstaticword.YoutubeUrl')); ?>:
                  </label>
                  <input autofocus name="youtube_url" value="<?php echo e($user->youtube_url); ?>" type="text" class="form-control"
                    placeholder="youtube.com/" />

                </div>

                

              </div>
               <div class="form-group">
                  <label for="detail"><?php echo e(__('adminstaticword.Detail')); ?>:<sup class="text-danger">*</sup></label>
                  <textarea id="detail" name="detail" class="form-control" rows="5"
                    placeholder="<?php echo e(__('adminstaticword.Enter')); ?> <?php echo e(__('adminstaticword.Detail')); ?>"
                    value=""><?php echo e($user->detail); ?></textarea>
                </div>
            </div>
            
            <div class="col-md-6">
     <div class="form-group">
                  <label for="exampleInputDetails"><?php echo e(__('adminstaticword.Verified')); ?>:<sup
                      class="redstar text-danger">*</sup></label><br>
                  <input id="verified" type="checkbox" class="custom_toggle" name="verified"
                    <?php echo e($user->email_verified_at != NULL ? 'checked' : ''); ?> />
                 

                </div>
                <div class="form-group">
                  <label for="exampleInputTit1e"><?php echo e(__('adminstaticword.Status')); ?>:<sup
                      class="text-danger">*</sup></label><br>
                  <input type="checkbox" class="custom_toggle" name="status"
                    <?php echo e($user->status == '1' ? 'checked' : ''); ?> />

                  <input type="hidden" name="status" value="0" for="status" id="status">
                </div>
            </div>
            <div class="col-md-6">
 <div class="form-group">
                  <button type="reset" class="btn btn-danger-rgba"><i class="fa fa-ban"></i>
                    <?php echo e(__('Reset')); ?></button>
                  <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                    <?php echo e(__('Update')); ?></button>
                </div>

                <div class="clear-both"></div>
            </div>
        </div>

      </div>
    </div>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
  (function ($) {
    "use strict";

    $(function () {
      $("#dob,#doa").datepicker({
        changeYear: true,
        yearRange: "-100:+0",
        dateFormat: 'yy/mm/dd',
      });
    });


    $('#married_status').change(function () {

      if ($(this).val() == 'Married') {
        $('#doaboxxx').show();
      } else {
        $('#doaboxxx').hide();
      }
    });

    $(function () {
      var urlLike = '<?php echo e(url('
      country / dropdown ')); ?>';
      $('#country_id').change(function () {
        var up = $('#upload_id').empty();
        var cat_id = $(this).val();
        if (cat_id) {
          $.ajax({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "GET",
            url: urlLike,
            data: {
              catId: cat_id
            },
            success: function (data) {
              console.log(data);
              up.append('<option value="0">Please Choose</option>');
              $.each(data, function (id, title) {
                up.append($('<option>', {
                  value: id,
                  text: title
                }));
              });
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
              console.log(XMLHttpRequest);
            }
          });
        }
      });
    });

    $(function () {
      var urlLike = '<?php echo e(url('
      country / gcity ')); ?>';
      $('#upload_id').change(function () {
        var up = $('#grand').empty();
        var cat_id = $(this).val();
        if (cat_id) {
          $.ajax({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "GET",
            url: urlLike,
            data: {
              catId: cat_id
            },
            success: function (data) {
              console.log(data);
              up.append('<option value="0">Please Choose</option>');
              $.each(data, function (id, title) {
                up.append($('<option>', {
                  value: id,
                  text: title
                }));
              });
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
              console.log(XMLHttpRequest);
            }
          });
        }
      });
    });

  })(jQuery);
</script>


<script>
  (function($) {
    "use strict";
    $(function(){
        $('#myCheck').change(function(){
          if($('#myCheck').is(':checked')){
            $('#update-password').show('fast');
          }else{
            $('#update-password').hide('fast');
          }
        });
        
    });
  })(jQuery);
  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/user/edit.blade.php ENDPATH**/ ?>