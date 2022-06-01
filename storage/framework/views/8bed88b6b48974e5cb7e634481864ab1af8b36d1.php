
<?php $__env->startSection('title', 'Edit Manual Payment Gateway - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php $__env->startComponent('components.breadcumb',['fourthactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
   <?php echo e(__('Edit Manual Payment Gateway')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu1'); ?>
<?php echo e(__('Manual Payment')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('button'); ?>
<div class="col-md-4 col-lg-4">
  <div class="widgetbar">
  <a href="<?php echo e(url('manualpayment')); ?>" class="btn btn-primary-rgba"><i class="feather icon-arrow-left mr-2"></i><?php echo e(__("Back")); ?></a>
  </div>
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
  
    <!-- row started -->
    <div class="col-lg-12">
    
        <div class="card m-b-30">
                <!-- Card header will display you the heading -->
                <div class="card-header">
                    <h5 class="card-box"><?php echo e(__('Edit Manual Payment Gateway')); ?></h5>
                </div> 
               
                <!-- card body started -->
                <div class="card-body">
                    <!-- form to edit manualpayment start -->
                    <form action="<?php echo e(url('manualpayment/'.$payment->id)); ?>" class="form" method="POST" novalidate enctype="multipart/form-data">
                      <?php echo e(csrf_field()); ?>

                      <?php echo e(method_field('PUT')); ?>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                          <div class="row">

                                                <div class="col-md-12">
                                                  <div class="row">
                                                      <!-- Name -->
                                                      <div class="col-md-12">
                                                          <div class="form-group">
                                                          <label class="text-dark"><?php echo e(__('adminstaticword.Name')); ?> :<span class="text-danger">*</span></label>
                                                            <input value="<?php echo e($payment->name); ?>" autofocus="" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Please Enter Name" name="name" required="">
                                                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong><?php echo e($message); ?></strong>
                                                                </span>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                      </div>

                                                  </div>
                                              </div>

                                          </div>
                                          <hr>
                                            <div class="row">
                                                <!-- Detail -->
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                            <label class="text-dark"><?php echo e(__('adminstaticword.Detail')); ?> : <span class="text-danger">*</span></label>
                                                            <textarea id="detail" name="detail" class="<?php $__errorArgs = ['detail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Please Enter Detail" required=""><?php echo e($payment->detail); ?></textarea>
                                                            <?php $__errorArgs = ['detail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong><?php echo e($message); ?></strong>
                                                                </span>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                <label class="text-dark"><?php echo e(__('adminstaticword.Image')); ?>:<span class="text-danger">*</span></label><br>
                                                <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupFileAddon01"><?php echo e(__('Upload')); ?></span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01" name="image" aria-describedby="inputGroupFileAddon01">
                                                    <label class="custom-file-label" for="inputGroupFile01"><?php echo e(__('Choose file')); ?></label>
                                                </div>
                                                </div>
                                                <?php if($image = @file_get_contents('../public/images/manualpayment/'.$payment->image)): ?>
                                                <img src="<?php echo e(url('/images/manualpayment/'.$payment->image)); ?>" class="image_size"/>
                                                <?php endif; ?>
                                                </div>

                                                <!-- Status -->
                                                <div class="form-group col-md-2">
                                                    <label class="text-dark" for="exampleInputDetails"><?php echo e(__('adminstaticword.Status')); ?>:</label><br>
                                                    <input type="checkbox" class="custom_toggle" name="status" <?php echo e($payment->status == '1' ? 'checked' : ''); ?> />
                                                    <input type="hidden"  name="free" value="0" for="status" id="status">
                                                </div>

                                                <div class="col-md-12">
                                                    <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                                    <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                                        <?php echo e(__("Update")); ?></button>
                                                </div>
                      
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- form to create manualpayment end -->
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
<style>
    .image_size{
    height:80px;
    width:200px;
}
</style>
<?php $__env->stopSection(); ?>
<!-- This section will contain javacsript end -->
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/manual_payment/edit.blade.php ENDPATH**/ ?>