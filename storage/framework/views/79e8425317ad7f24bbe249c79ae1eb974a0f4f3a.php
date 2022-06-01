
<?php $__env->startSection('title', 'Remove public - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php $__env->startComponent('components.breadcumb',['fourthactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
   <?php echo e(__('Remove Public')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu1'); ?>
<?php echo e(__('Remove Public')); ?>

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
                    <h5 class="card-box"><?php echo e(__('Remove Public')); ?></h5>
                </div> 
               
                <!-- card body started -->
                <div class="card-body">
                <div class="card bg-success-rgba m-b-30">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <small class="text-success process-fonts"><i class="fa fa-info-circle"></i> <?php echo e(__('adminstaticword.ImportantNote')); ?>

                                        <ul class="process-font">
                                    <li>
                                        <?php echo e(__(('Removing public from URL is only works when you have installed script in main domain.'))); ?>

                                    </li>

                                    <li>
                                        <?php echo e(__("Do not remove public when you have Installed script in subdomin or subfolders.")); ?>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- =============================== -->
                <div class="row">
                 
                    <?php if(file_exists(base_path().'/'.'.htaccess')): ?>         
                    <?php if($contents == NULL || $contents != $destinationPath): ?>
                    <div class="col-12">
                        <!-- form start -->
                        <form action="<?php echo e(route('add.content')); ?>" class="form" method="POST">
                            <?php echo csrf_field(); ?>
                            <!-- row start -->
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- card start -->
                                    <div class="card">
                                        <!-- card body start -->
                                        <div class="card-body">
                                            <!-- row start -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <!-- row start -->
                                                    <div class="row">       
                                                            <div class="col-md-12">
                                                                <label class="text-dark"><?php echo e(__('Remove public from URL')); ?></label>
                                                                    <button type="submit" class="btn btn-primary btn-block">
                                                                        <?php echo e(__("Click to Remove public")); ?>

                                                                    </button>
                                                            </div>
                                                    </div><!-- row end -->
                                                </div><!-- col end -->
                                            </div><!-- row end -->
                                        </div><!-- card body end -->
                                    </div><!-- card end -->
                                </div><!-- col end -->
                            </div><!-- row end -->
                        </form>
                    <!-- form end -->
                    </div><?php endif; ?>
                        <?php elseif(!file_exists(base_path().'/'.'.htaccess') ): ?>
                        <div class="col-12">
                            <!-- form start -->
                            <form action="<?php echo e(route('create.file')); ?>" class="form" method="POST">
                                <?php echo csrf_field(); ?>
                                <!-- row start -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- card start -->
                                        <div class="card">
                                            <!-- card body start -->
                                            <div class="card-body">
                                                <!-- row start -->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <!-- row start -->
                                                        <div class="row">       
                                                            <div class="col-md-4">
                                                            <label class="text-dark"><?php echo e(__('Remove public from URL')); ?></label>
                                                                <button type="submit" class="btn btn-primary-rgba btn-block">
                                                                    <?php echo e(__("Click to Remove public")); ?>

                                                                </button>
                                                            </div>
                                                        </div><!-- row end -->
                                                    </div><!-- col end -->
                                                </div><!-- row end -->
                                            </div><!-- card body end -->
                                        </div><!-- card end -->
                                    </div><!-- col end -->
                                </div><!-- row end -->
                            </form>
                            <!-- form end -->
                        </div>
                        <?php endif; ?>
                   
                </div>
                <!-- =============================== -->
               
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
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/support/remove_public.blade.php ENDPATH**/ ?>