
<?php $__env->startSection('title', 'Get Started - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>
 

<?php $__env->startComponent('components.breadcumb',['thirdactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
   <?php echo e(__('Get Started')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu1'); ?>
   <?php echo e(__('Front Settings')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu2'); ?>
   <?php echo e(__('Get Started')); ?>

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
			<h5 class="card-title"><?php echo e(__('Get Started')); ?></h5>
		  </div>
		  <div class="card-body">
			<form action="<?php echo e(action('GetstartedController@update')); ?>" method="POST" enctype="multipart/form-data">
				<?php echo e(csrf_field()); ?>

				<?php echo e(method_field('PUT')); ?>

		
			
			<div class="row">
			  <div class="form-group col-md-6">
				<label for="heading"><?php echo e(__('adminstaticword.Heading')); ?></label>
				<input value="<?php echo e(optional($show)['heading']); ?>" autofocus name="heading" type="text" class="form-control" placeholder="<?php echo e(__('adminstaticword.Enter')); ?> <?php echo e(__('adminstaticword.Heading')); ?>"/>
			</div>
			  <div class="form-group col-md-6">
				<label for="sub_heading"><?php echo e(__('adminstaticword.SubHeading')); ?></label>
				<input value="<?php echo e(optional($show)['sub_heading']); ?>" autofocus name="sub_heading" type="text" class="form-control" placeholder="<?php echo e(__('adminstaticword.Enter')); ?> <?php echo e(__('adminstaticword.SubHeading')); ?>"/>
			</div>
			  <div class="form-group col-md-6">
				<label for="button_txt"><?php echo e(__('adminstaticword.ButtonText')); ?></label>
				<input value="<?php echo e(optional($show)['button_txt']); ?>" autofocus name="button_txt" type="text" class="form-control" placeholder="<?php echo e(__('adminstaticword.Enter')); ?> <?php echo e(__('adminstaticword.ButtonText')); ?>"/>
			</div>
			  <div class="form-group col-md-6">
				<label for="button_txt"><?php echo e(__('adminstaticword.ButtonLink')); ?></label>
				<input value="<?php echo e(optional($show)['link']); ?>" name="link" type="text" class="form-control" placeholder="<?php echo e(__('adminstaticword.Enter')); ?> <?php echo e(__('adminstaticword.ButtonLink')); ?>"/>
			</div>
			  <div class="form-group col-md-6">
				  
				<label for="image"><?php echo e(__('adminstaticword.BackgroundImage')); ?><sup class="redstar text-danger">*</sup></label><br>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
					  <span class="input-group-text" id="inputGroupFileAddon01"><?php echo e(__("Upload")); ?></span>
					</div>
					<div class="custom-file">
					  <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
					  <label class="custom-file-label" for="inputGroupFile01"><?php echo e(__("Choose file")); ?></label>
					</div>
				  </div>
				  
				  
				
				<img src="<?php echo e(url('/images/getstarted/'.optional($show)['image'])); ?>" class="img-responsive image_size"/>
			</div>
			  
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
	




<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/get_started/edit.blade.php ENDPATH**/ ?>