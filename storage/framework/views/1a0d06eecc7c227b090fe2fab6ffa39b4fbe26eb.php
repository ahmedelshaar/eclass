
<?php $__env->startSection('title', 'Edit Language'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php $__env->startComponent('components.breadcumb',['fourthactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
   <?php echo e(__('Edit Language')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu1'); ?>
<?php echo e(__('Edit Language')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('button'); ?>
<div class="col-md-4 col-lg-4">
  <div class="widgetbar">
  <a href="<?php echo e(route('show.lang')); ?>" class="btn btn-primary-rgba"><i class="feather icon-arrow-left mr-2"></i><?php echo e(__("Back")); ?></a>
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
                    <h5 class="card-box"><?php echo e(__('adminstaticword.Edit')); ?> <?php echo e(__('adminstaticword.Language')); ?></h5>
                </div> 
               
                	<!-- card body started -->
                	<div class="card-body">
                   		<!-- form start -->
						<form id="demo-form2" method="post" action="<?php echo e(route('languages.update',$language->id)); ?>" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
							<?php echo e(csrf_field()); ?>

							<?php echo e(method_field('PUT')); ?>

					
							<div class="row">
								<div class="col-md-5">
									<div class="form-group">
										<label class="text-dark" for="local"><?php echo e(__('adminstaticword.Local')); ?> : <span class="text-danger">*</span></label>
										<input class="form-control <?php $__errorArgs = ['local'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="local" placeholder="Please enter language local name" value="<?php echo e($language->local); ?>" required>
									</div>
								</div>

								<div class="col-md-5">
									<div class="form-group">
										<label class="text-dark" for="name"><?php echo e(__('adminstaticword.Name')); ?> : <span class="text-danger">*</span></label>
										<input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" id="sub_heading" value="<?php echo e($language->name); ?>" placeholder="Please enter language name eg:English" required>
									</div>
								</div>

								<div class="form-group col-md-2">
									<label class="text-dark" for="exampleInputDetails"><?php echo e(__('adminstaticword.SetDefault')); ?> :</label><br>
									<input type="checkbox" class="custom_toggle" name="def" <?php echo e($language->def==1 ? "checked" : ""); ?>/>
									<input type="hidden"  name="free" value="0" for="status" id="status">
								</div>

							</div>
							
							<div class="form-group">
								<button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
								<button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
								<?php echo e(__("Update")); ?></button>
							</div>
				
						</form>
						<!-- form end -->
                	</div>
                	<!-- card body end -->
        </div><!-- col end -->
    </div>
</div>
</div><!-- row end -->
    <br><br>
<?php $__env->stopSection(); ?>
<!-- main content section ended -->
<!-- This section will contain javacsript start -->
<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>
<!-- This section will contain javacsript end -->
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/language/edit.blade.php ENDPATH**/ ?>