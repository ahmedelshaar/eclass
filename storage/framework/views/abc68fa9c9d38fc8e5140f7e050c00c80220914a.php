
<?php $__env->startSection('title', 'Create SiteMap - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php $__env->startComponent('components.breadcumb',['fourthactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
   <?php echo e(__('Site Map')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu1'); ?>
<?php echo e(__('Site Map')); ?>

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
                    <h5 class="card-box"><?php echo e(__('adminstaticword.GenerateSitemap')); ?></h5>
                </div> 
               
                <!-- card body started -->
                <div class="card-body">
                <!-- form start -->
                <div class="row">
                    <div class="col-md-12">

                     <!-- form start -->
                     <form action="<?php echo e(action('SiteMapController@sitemap')); ?>" class="form" method="POST" novalidate enctype="multipart/form-data">
				  		        <?php echo e(csrf_field()); ?>

				              <?php echo e(method_field('POST')); ?>

			                     <div class="form-group">
                              <button type="submit" class="btn btn-primary-rgba btn-lg btn-block"><i class="fa fa-check-circle"></i>
                              <?php echo e(__('adminstaticword.GenerateSitemap')); ?></button>
		                        </div>
			               </form>
                    <!-- form end -->
                    </div>


                    <?php
                      $path = 'sitemap.xml';
                    ?>



                  <?php if(file_exists(public_path().'/'.$path)): ?>


                    <div class="col-md-12">
                         <!-- form start -->
                        <form action="<?php echo e(action('SiteMapController@download')); ?>" method="POST" enctype="multipart/form-data">
				                <?php echo e(csrf_field()); ?>

				                <?php echo e(method_field('POST')); ?>

                            <div class="form-group">
                            <button type="submit" class="float-left btn btn-primary-rgba"><i class="feather icon-download"></i> <?php echo e(__('adminstaticword.DownloadSitemap')); ?></button>
                            </div>
			                 </form>

                        <!-- form end -->
                    </div>


                  <?php endif; ?>
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
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/sitemap/edit.blade.php ENDPATH**/ ?>