
<?php $__env->startSection('title', 'Update Process - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php $__env->startComponent('components.breadcumb',['fourthactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
   <?php echo e(__('Update Process')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu1'); ?>
<?php echo e(__('Update Process')); ?>

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
        <?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- Card header will display you the heading -->
                <div class="card-header">
                    <h5 class="card-box"><?php echo e(__('Update Process')); ?></h5>
                </div> 
               
                <!-- card body started -->
                <div class="card-body bg-primary-rgba ml-5 mr-5 mb-5">
                <!-- ===================== -->
          <small class="text-info process-fonts"><i class="fa fa-info-circle"></i> Important Note:

    <br>
<ul class="process-font">
    <li>Note: Before Update Take Backup of All Files And Database. Make .zip file and download all file, Go To phpmyadmin and select your database and export it.<br/></li>
    <li>Copy All files and paste to you folder replace file. Only be careful when replace files in public folder, don't copy<code> .env </code>file. Any user customize design and code please do not update.</li>
    <li>Update to Latest Version </li>
    <li>Copy All files of folder and paste to you folder and replace files, only be careful when replace files in public folder, don't copy<code> .env </code>file.Any user customize design and code please do not update.</li>
    <li>After replacing the files successfully 
    <li>login with admin goto yourdomain.com/ota/update. If your domain contain public then goto </li>
    <li>yourdomain.com/public/ota/update</li><li>. Read update pre-notes and FAQ properly, then check the agreement box and click on update. After the update completion you will be redirected to yourdomain with a successful update message.</li>
    <li> Once the process is complete you will see a successful message on your home page.</li>
    <li>You successfully upgraded to latest version </li>

</ul>
</small>

        <!-- ===================== -->
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
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/ota/process.blade.php ENDPATH**/ ?>