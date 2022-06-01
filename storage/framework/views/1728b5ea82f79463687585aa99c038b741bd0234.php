
<?php $__env->startSection('title', 'Edit Testimonial - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>


<?php $__env->startComponent('components.breadcumb',['fourthactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
<?php echo e(__('Edit Testimonial')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu1'); ?>
<?php echo e(__('Front Settings')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu2'); ?>
<?php echo e(__('Testimonial')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu3'); ?>
<?php echo e(__('Edit Testimonial')); ?>

<?php $__env->endSlot(); ?>

<?php $__env->slot('button'); ?>
<div class="col-md-4 col-lg-4">
  <div class="widgetbar">
      <a href="<?php echo e(url('testimonial')); ?>" class="btn btn-primary-rgba"><i class="feather icon-arrow-left mr-2"></i><?php echo e(__("Back")); ?></a>
      
  </div>                        
</div>
<?php $__env->endSlot(); ?>

<?php if (isset($__componentOriginaleb2335b938fad9aa8fe68ad102cc16a90a88d3d2)): ?>
<?php $component = $__componentOriginaleb2335b938fad9aa8fe68ad102cc16a90a88d3d2; ?>
<?php unset($__componentOriginaleb2335b938fad9aa8fe68ad102cc16a90a88d3d2); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>


<div class="contentbar">
  <?php if($errors->any()): ?>  
  <div class="alert alert-danger" role="alert">
  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
  <p><?php echo e($error); ?><button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true" style="color:red;">&times;</span></button></p>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
  </div>
  <?php endif; ?>
         
  <div class="row">
    <div class="col-lg-12">
      <div class="card m-b-30">
        <div class="card-header">
          <h5 class="card-title"><?php echo e(__("Edit Testimonial")); ?></h5>
        </div>
        <div class="card-body">

          <form id="demo-form2" method="post" action="<?php echo e(url('testimonial/'.$test->id)); ?>" data-parsley-validate class="form-horizontal form-label-left"  enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('PATCH')); ?>


            <div class="row">
              <div class="form-group col-md-6">
                <label for="exampleInputName"><?php echo e(__('adminstaticword.Name')); ?>:<sup class="text-danger">*</sup></label>
                  <input type="text" class="form-control" name="client_name" id="exampleInputTitle"value="<?php echo e($test->client_name); ?>">
              </div>
       

              <div class="form-group col-md-12">
                <label for="exampleInputDetails"><?php echo e(__('adminstaticword.Detail')); ?>:<sup class="text-danger">*</sup></label>
                <textarea name="details" row="3" class="form-control"><?php echo e($test->details); ?></textarea>
              </div>
              <div class="form-group col-md-6">
                <label for="exampleInputSlug"><?php echo e(__('adminstaticword.Image')); ?>:<sup class="text-danger">*</sup></label><br>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01"><?php echo e(__('Upload')); ?></span>
                  </div>
                  <div class="custom-file">
                    <input type="file"  name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01"><?php echo e(__('Choose file')); ?></label>
                  </div>
                </div>
                
                
                <img src="<?php echo e(url('/images/testimonial/'.$test->image)); ?>" class="img-responsive image_size"  />
              </div>
              <div class="form-group col-md-4 offset-md-2">
                <label for="exampleInputDetails" class="mr-3"><?php echo e(__('adminstaticword.Status')); ?>:</label><br>
                <input id="status_toggle" type="checkbox" class="custom_toggle" name="status" <?php echo e($test->status == '1' ? 'checked' : ''); ?> />
                <input type="hidden"  name="free" value="0" for="status" id="status">
              </div>

              
            </div>
            <div class="col-md-12">
              <div class="form-group<?php echo e($errors->has('rating') ? ' has-error' : ''); ?>">
                <label for="exampleInputName"><?php echo e('Rating'); ?></label>
                  <div class="col-md-6">
                      <div class="rating">
                          <label>
                              <input type="radio" name="rating" value="1"
                                  <?php echo e($test->rating == 1 ? 'checked' : ''); ?> />
                              <span class="icon"><i class="fa fa-star" style='color:orange'
                                      aria-hidden="true"></i></span>
                          </label>
                          <label>
                              <input type="radio" name="rating" value="2"
                                  <?php echo e($test->rating == 2 ? 'checked' : ''); ?> />
                              <span class="icon"><i class="fa fa-star" style='color:orange'
                                      aria-hidden="true"></i></span>
                              <span class="icon"><i class="fa fa-star" style='color:orange'
                                      aria-hidden="true"></i></span>
                          </label>
                          <label>
                              <input type="radio" name="rating" value="3"
                                  <?php echo e($test->rating == 3? 'checked' : ''); ?> />
                              <span class="icon"><i class="fa fa-star" style='color:orange'
                                      aria-hidden="true"></i></span>
                              <span class="icon"><i class="fa fa-star" style='color:orange'
                                      aria-hidden="true"></i></span>
                              <span class="icon"><i class="fa fa-star" style='color:orange'
                                      aria-hidden="true"></i></span>
                          </label>
                          <label>
                              <input type="radio" name="rating" value="4"
                                  <?php echo e($test->rating == 4 ? 'checked' : ''); ?> />
                              <span class="icon"><i class="fa fa-star" style='color:orange'
                                      aria-hidden="true"></i></span>
                              <span class="icon"><i class="fa fa-star" style='color:orange'
                                      aria-hidden="true"></i></span>
                              <span class="icon"><i class="fa fa-star" style='color:orange'
                                      aria-hidden="true"></i></span>
                              <span class="icon"><i class="fa fa-star" style='color:orange'
                                      aria-hidden="true"></i></span>
                          </label>
                          <label>
                              <input type="radio" name="rating" value="5"
                                  <?php echo e($test->rating == 5 ? 'checked' : ''); ?> />
                              <span class="icon"><i class="fa fa-star" style='color:orange'
                                      aria-hidden="true"></i></span>
                              <span class="icon"><i class="fa fa-star" style='color:orange'
                                      aria-hidden="true"></i></span>
                              <span class="icon"><i class="fa fa-star" style='color:orange'
                                      aria-hidden="true"></i></span>
                              <span class="icon"><i class="fa fa-star" style='color:orange'
                                      aria-hidden="true"></i></span>
                              <span class="icon"><i class="fa fa-star" style='color:orange'
                                      aria-hidden="true"></i></span>
                          </label>
                      </div>
                  </div>
              </div>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputTit1e"><?php echo e(__('Designation')); ?>:<sup class="text-danger">*</sup></label>
                <input type="text" class="form-control" value="<?php echo e($test->designation); ?>" name="designation" id="exampleInputTitle" placeholder="<?php echo e(__('adminstaticword.Enter')); ?> <?php echo e(__('Designation')); ?>" value="">
          </div>
          <div class="form-group">
            <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
            <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
            <?php echo e(__("Update")); ?></button>
          </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<script>
(function($) {
  "use strict";
  tinymce.init({selector:'textarea'});
})(jQuery);
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/testimonial/testi_edit.blade.php ENDPATH**/ ?>