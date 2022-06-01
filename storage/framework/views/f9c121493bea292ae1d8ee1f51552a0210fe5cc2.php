
<?php $__env->startSection('title', 'PWA Settings - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php $__env->startComponent('components.breadcumb',['fourthactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
   <?php echo e(__('PWA Settings')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu1'); ?>
<?php echo e(__('PWA Settings')); ?>

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
                    <h5 class="card-box"><?php echo e(__('PWA Settings')); ?></h5>
                </div> 
               
                <!-- card body started -->
                <div class="card-body">
                <ul class="nav nav-tabs mb-3" id="defaultTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#facebook" role="tab" aria-controls="home" aria-selected="true"><?php echo e(__('Update Manifest')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#google" role="tab" aria-controls="profile" aria-selected="false"><?php echo e(__('Update PWA Icons')); ?></a>
                </li>
               
            </ul>
            <div class="tab-content" id="defaultTabContent">

                <!-- === Update Manifest start ======== -->
                <div class="tab-pane fade show active" id="facebook" role="tabpanel" aria-labelledby="home-tab">
                   
                    <div class="card bg-success-rgba m-b-30">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <small class="text-success process-fonts"><i class="fa fa-info-circle"></i> <?php echo e(__('Progessive Web App Requirements')); ?>


                                <ul process-font>
                    
                                    <li><b><?php echo e(__('HTTPS')); ?></b> <?php echo e(__('must required in your domain (for enable contact your host provider for SSL configuration).')); ?></li>
                                    <li><b><?php echo e(__('Icons and splash screens')); ?></b> <?php echo e(__('required and to be updated in Icon Settings')); ?></li>
                                </ul>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

                    <!-- Update Manifest form start -->
                    <?php echo $__env->make('admin.pwasetting.manifest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- Update Manifest form end -->    
                </div>
                  <!-- === Update Manifest end ======== -->

                  <!-- === Update PWA Icons start ======== -->
                <div class="tab-pane fade" id="google" role="tabpanel" aria-labelledby="profile-tab">
                    <!-- === Update PWA Icons form start ======== -->
                    <?php echo $__env->make('admin.pwasetting.icon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- === Update PWA Icons form end ===========-->
                </div>
                <!-- === Update PWA Icons end ======== -->

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

<?php $__env->stopSection(); ?>
<!-- This section will contain javacsript end -->
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/pwasetting/show.blade.php ENDPATH**/ ?>