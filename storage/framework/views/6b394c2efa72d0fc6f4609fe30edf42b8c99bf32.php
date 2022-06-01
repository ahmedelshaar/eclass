
<?php $__env->startSection('title', 'Widget Setting - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>


<?php $__env->startComponent('components.breadcumb',['thirdactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
<?php echo e(__('Widget Setting')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu1'); ?>
<?php echo e(__('Front Settings')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu2'); ?>
<?php echo e(__('Widget Setting')); ?>

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
			<h5 class="card-title"><?php echo e(__('Widget Setting')); ?></h5>
		  </div>
		  <div class="card-body">
  
			<form action="<?php echo e(action('WidgetController@update')); ?>" method="POST">
				<?php echo e(csrf_field()); ?>

				<?php echo e(method_field('PUT')); ?>

			  <div class="row">
				<div class="form-group col-md-12">
					<label for=""><?php echo e(__('Enable Widget')); ?>: </label>
					<input id="status_toggle" class="custom_toggle"  type="checkbox" id="widget_enable" name="widget_enable" <?php echo e(optional($show)->widget_enable == 1 ? 'checked' : ''); ?> />
				</div>
					
					
  
				<div class="form-group col-md-3">
					<label for="heading"><?php echo e(__('adminstaticword.WidgetOne')); ?><sup class="redstar text-danger">*</sup></label>
				
					<input value="<?php echo e($show ? $show->widget_one : ''); ?>" autofocus name="widget_one" type="text" class="form-control" placeholder="Enter widget" required/>
				</div>
				<div class="form-group col-md-3">
					<label for=""><?php echo e(__('Enable About Us')); ?>: </label><br>
					<input id="status_toggle" class="custom_toggle"  type="checkbox" id="widget_enable" name="about_enable" <?php echo e(optional($show)->about_enable == 1 ? 'checked' : ''); ?> />
					
				</div>
				<div class="form-group col-md-6">
					<label for=""><?php echo e(__('Enable Contact Us')); ?>: </label><br>
					<input id="status_toggle" class="custom_toggle"  type="checkbox" id="widget_enable" name="contact_enable" <?php echo e(optional($show)->contact_enable == 1 ? 'checked' : ''); ?> />
				</div>
				
  
				
  
				<div class="form-group col-md-3">
					<label for="heading"><?php echo e(__('adminstaticword.WidgetTwo')); ?><sup class="redstar text-danger">*</sup></label>
					<input value="<?php echo e(optional($show)->widget_two); ?>" autofocus name="widget_two" type="text" class="form-control" placeholder="Enter widget" required/>
  
				</div>
				<div class="form-group col-md-3">
					<label for=""><?php echo e(__('Enable Career Us')); ?>: </label><br>
					<input id="status_toggle" class="custom_toggle"  type="checkbox" id="widget_enable" name="career_enable" <?php echo e(optional($show)->career_enable == 1 ? 'checked' : ''); ?> />
				</div>
  
  
				<div class="form-group col-md-3">
					<label for=""><?php echo e(__('Enable Blog')); ?>: </label><br>
					<input id="status_toggle" class="custom_toggle"  type="checkbox" id="widget_enable" name="blog_enable" <?php echo e(optional($show)->blog_enable == 1 ? 'checked' : ''); ?> />
  
  
				</div>
				<div class="form-group col-md-3">
					<label for=""><?php echo e(__('Enable Help & Support')); ?>: </label><br>
					<input id="status_toggle" class="custom_toggle"  type="checkbox" id="widget_enable"name="help_enable" <?php echo e(optional($show)->help_enable == 1 ? 'checked' : ''); ?>  />
  
				</div>
				<div class="form-group col-md-3">
					<label for="heading"><?php echo e(__('adminstaticword.WidgetThree')); ?><sup class="redstar">*</sup></label>
					<input value="<?php echo e(optional($show)->widget_three); ?>" autofocus name="widget_three" type="text" class="form-control" placeholder="Enter widget" required/>
  
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

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/widget/edit.blade.php ENDPATH**/ ?>