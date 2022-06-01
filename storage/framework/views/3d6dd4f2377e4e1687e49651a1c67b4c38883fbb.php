
<?php $__env->startSection('title', 'Adsense Setting - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php $__env->startComponent('components.breadcumb',['fourthactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
   <?php echo e(__('Adsense Settings')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu1'); ?>
<?php echo e(__('Adsense Settings')); ?>

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
                    <h5 class="card-box"><?php echo e(__('adminstaticword.AdsenseSetting')); ?></h5>
                </div> 
               
                <!-- card body started -->
                <div class="card-body">
                <!-- form start -->
				<form action="<?php echo e(action('AdsenseController@update')); ?>" method="POST" enctype="multipart/form-data">
		                <?php echo e(csrf_field()); ?>

		                <?php echo e(method_field('PUT')); ?>

		                <div class="form-group">
			                <label class="text-dark" for="policy"><?php echo e(__('adminstaticword.EnterYourAdsenseScript')); ?> :<span class="text-danger">*</span></label>
                            <textarea class="form-control" name="code" id="inputTextarea" rows="3" placeholder="Textarea text"><?php echo e(optional($ad)->code); ?></textarea>
			            </div>
			            <br>

			            <div class="row">
                            <div class="form-group col-md-4">
                                <label class="text-dark" for="exampleInputDetails"><?php echo e(__('adminstaticword.Status')); ?> :</label><br>
                                <input type="checkbox" class="custom_toggle" name="status" <?php echo e(optional($ad)->status == 1 ? 'checked' : ''); ?> />
                                <input type="hidden"  name="free" value="0" for="status" id="status">
                            </div>
    						
                            <div class="form-group col-md-4">
                                <label class="text-dark" for="exampleInputDetails"><?php echo e(__('adminstaticword.VisibleonHome')); ?> :</label><br>
                                <input type="checkbox" class="custom_toggle" name="ishome"  <?php echo e(optional($ad)->ishome == 1 ? 'checked' : ''); ?> />
                                <input type="hidden"  name="free" value="0" for="status" id="status">
                            </div>
    						
                            <div class="form-group col-md-4">
                                <label class="text-dark" for="exampleInputDetails"><?php echo e(__('adminstaticword.VisibleonCart')); ?> :</label><br>
                                <input type="checkbox" class="custom_toggle" name="iscart"  <?php echo e(optional($ad)->iscart == 1 ? 'checked' : ''); ?> />
                                <input type="hidden"  name="free" value="0" for="status" id="status">
                            </div>
    						
                            <div class="form-group col-md-4">
                                <label class="text-dark" for="exampleInputDetails"><?php echo e(__('adminstaticword.VisibleonWishlist')); ?> :</label><br>
                                <input type="checkbox" class="custom_toggle" name="iswishlist"  <?php echo e(optional($ad)->iswishlist == 1 ? 'checked' : ''); ?> />
                                <input type="hidden"  name="free" value="0" for="status" id="status">
                            </div>
    						
                            <div class="form-group col-md-4">
                                <label class="text-dark" for="exampleInputDetails"><?php echo e(__('adminstaticword.VisibleonDetail')); ?> :</label><br>
                                <input type="checkbox" class="custom_toggle" name="isdetail"  <?php echo e(optional($ad)->isdetail == 1 ? 'checked' : ''); ?> />
                                <input type="hidden"  name="free" value="0" for="status" id="status">
                            </div>
    						
                            <div class="form-group col-md-4">
                                <label class="text-dark" for="exampleInputDetails"><?php echo e(__('adminstaticword.VisibleonAll')); ?> :</label><br>
                                <input type="checkbox" class="custom_toggle" name="isviewall"  <?php echo e(optional($ad)->isviewall == 1 ? 'checked' : ''); ?> />
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
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/adsense/edit.blade.php ENDPATH**/ ?>