
<?php $__env->startSection('title', 'Whatsapp Button Settings - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php $__env->startComponent('components.breadcumb',['fourthactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
   <?php echo e(__('Whatsapp Chat Button Setting')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu1'); ?>
<?php echo e(__('Whatsapp')); ?>

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
                    <h5 class="card-box"><?php echo e(__('Whatsapp Chat Button Setting')); ?></h5>
                </div> 
               
                <!-- card body started -->
                <div class="card-body">
                <form class="form" action="<?php echo e(action('WhatsappButtonController@update')); ?>" method="POST" novalidate enctype="multipart/form-data">
						<?php echo e(csrf_field()); ?>

		                <?php echo e(method_field('POST')); ?>


                        <div class="row">
                            <div class="col-md-6">            
                                <div class="form-group">
                                    <label class="text-dark"><?php echo e(__('adminstaticword.HeaderTitle')); ?> : </label>
                                    <input name="wapp_title" autofocus="" type="text" class="form-control" placeholder="Header Title"  value="<?php echo e($setting['wapp_title']); ?>">
                                    <div class="invalid-feedback">
                                        <?php echo e(__('Please Enter Header Title !')); ?>.
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">            
                                <div class="form-group">
                                    <label class="text-dark"><?php echo e(__('adminstaticword.WhatasppPhoneNo')); ?> <?php echo e(__('(with country code)')); ?>:</label>
                                    <input name="wapp_phone" autofocus="" type="text" class="form-control" placeholder="Please Enter Whatsapp Phone Number" value="<?php echo e($setting['wapp_phone']); ?>">
                                    <div class="invalid-feedback">
                                        <?php echo e(__('Please Enter Whatsapp Phone Number !')); ?>.
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                            <div class="form-group">
                                    <label class="text-dark"><?php echo e(__('adminstaticword.WhatasppPopUpMsg')); ?> :</label>
                                    <input name="wapp_popup_msg" autofocus="" type="text" class="form-control" placeholder="PopUp Message"  value="<?php echo e($setting['wapp_popup_msg']); ?>">
                                    <div class="invalid-feedback">
                                        <?php echo e(__('Please Enter Whataspp PopUp Message !')); ?>.
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">            
                                <div class="form-group">
			                        <label class="text-dark" for="number"><?php echo e(__('adminstaticword.whatsappcolor')); ?> :</label>
			                        <input name="wapp_color" autofocus="" type="color" class="form-control my-colorpicker1" placeholder="Choose color" value="<?php echo e($setting['wapp_color']); ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-dark"><?php echo e(__('adminstaticword.ButtonPosition')); ?> :</label><br>
                                    <input  class="custom_toggle"  type="checkbox" name="wapp_position"  <?php echo e($setting['wapp_position'] == 'left' ? 'checked' : ''); ?> />
                                    <input type="hidden"  name="free" value="0" for="left" id="left">
                                  
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="text-dark" for="exampleInputDetails"><?php echo e(__('adminstaticword.EnableWhatsappChatButton')); ?> :</label><br>
                                <input type="checkbox" class="custom_toggle" name="wapp_enable" <?php echo e($setting['wapp_enable'] == '1' ? 'checked' : ''); ?> />
                                <input type="hidden"  name="free" value="0" for="status" id="status">
                            </div>

                        </div>

                        <div class="form-group">
                            <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                            <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                <?php echo e(__("Update")); ?></button>
                        </div>
                        
                    </form>

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
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/setting/whatsapp_setting.blade.php ENDPATH**/ ?>