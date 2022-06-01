
<?php $__env->startSection('title', 'Edit Facts Slider - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>
 


<?php $__env->startComponent('components.breadcumb',['fourthactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
   <?php echo e(__('Edit Facts Slider')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu1'); ?>
   <?php echo e(__('Front Settings')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu2'); ?>
   <?php echo e(__('Facts Slider')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu3'); ?>
   <?php echo e(__('Edit Facts Slider')); ?>

<?php $__env->endSlot(); ?>

<?php $__env->slot('button'); ?>
<div class="col-md-4 col-lg-4">
  <div class="widgetbar">
    <a href="<?php echo e(url('facts')); ?>" class="btn btn-primary-rgba"><i class="feather icon-arrow-left mr-2"></i><?php echo e(__("Back")); ?></a>
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
          <h5 class="card-title"><?php echo e(__('Edit Facts Slider')); ?></h5>
        </div>
        <div class="card-body">
          
          <form action="<?php echo e(route('facts.update',$show->id)); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

              <?php echo e(method_field('PUT')); ?>

      
          
          <div class="row">
            <div class="form-group col-md-4">
              <label for="icon"><?php echo e(__('adminstaticword.Icon')); ?>:<sup class="redstar text-danger">*</sup></label>
              
              <div class="input-group">
                  <input type="text" class="form-control iconvalue" name="icon" value="<?php echo e($show->icon); ?>">
                  <span class="input-group-append">
                      <button  type="button" class="btnicon btn btn-outline-secondary" role="iconpicker"></button>
                  </span>
              </div>
              
            </div>
            <div class="form-group col-md-4">
              <label for="heading"><?php echo e(__('adminstaticword.Heading')); ?>:<sup class="redstar text-danger">*</sup></label>
              <input value="<?php echo e($show->heading); ?>" autofocus required name="heading" type="text" class="form-control" placeholder="Enter Facts Heading"/>
            </div>

            <div class="form-group col-md-4">
              <label for="sub_heading"><?php echo e(__('adminstaticword.SubHeading')); ?>:<sup class="redstar text-danger">*</sup></label>
              <input value="<?php echo e($show->sub_heading); ?>" autofocus required name="sub_heading" type="text" class="form-control" placeholder="Enter Facts Sub Heading"/>
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


<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/slider_facts/edit.blade.php ENDPATH**/ ?>