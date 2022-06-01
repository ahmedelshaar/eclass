

<?php $__env->startSection('title','Player Customization  - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>
 

<?php $__env->startComponent('components.breadcumb',['thirdactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
   <?php echo e(__('Player Setting')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu1'); ?>
   <?php echo e(__('Player Setting')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu2'); ?>
   <?php echo e(__('Player Customization')); ?>

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
          <h5 class="card-title"><?php echo e(__("Player Customization")); ?> </h5>
        </div>
        <div class="card-body">
          
          <form action="<?php echo e(route('player.update')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

          
          <div class="row">
         
            
            <div class="form-group col-md-12">
              <label for="exampleInputDetails"><?php echo e(__('adminstaticword.LogoEnable')); ?>:</label><br>
              <input  class="custom_toggle"   type="checkbox" name="logo_enable"  <?php echo e(optional($ps)->logo_enable == '1' ? 'checked' : ''); ?> />
               
                <input type="hidden" name="free" value="0" for="cb4" id="cb4"> 
                
              
            </div>
            <div class="form-group col-md-6">
              <label for="exampleInputDetails"><?php echo e(__('adminstaticword.PlayerLogo')); ?> <small  class="inline info"> - <?php echo e(__('Dimension')); ?>: 104 x 36</small></label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupFileAddon01"><?php echo e(__('Back')); ?><?php echo e(__('Upload')); ?></span>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input"name="logo" value="<?php echo e(optional($ps)['logo']); ?>" id="logo" class="<?php echo e($errors->has('logo') ? ' is-invalid' : ''); ?> inputfile inputfile-1" aria-describedby="inputGroupFileAddon01">
                  <label class="custom-file-label" for="inputGroupFile01"><?php echo e(__('Choose file')); ?></label>
                </div>
              </div>
              
              
             
              <span class="text-danger invalid-feedback" role="alert"></span>
              
            </div>
            <div class="form-group col-md-12">
              <?php if(optional($ps)['logo'] !=""): ?>
                <div class="logo-settings">
                  <img src="<?php echo e(url('content/minimal_skin_dark/'.$ps['logo'])); ?>" alt="<?php echo e(optional($ps)['logo']); ?>" class="img-responsive image_size">
                </div>
              <?php else: ?>
                <div class="alert alert-danger">
                  <?php echo e(__('adminstaticword.Nologofound')); ?>

                </div>
              <?php endif; ?>
            </div>
            <div class="form-group col-md-4">
              <label for="exampleInputDetails"><?php echo e(__('adminstaticword.ShareEnable')); ?>:</label><br>
              <input  class="custom_toggle"   type="checkbox" name="share_enable" <?php echo e(optional($ps)['share_enable'] == '1' ? 'checked' : ''); ?>/>
              <input type="hidden"  name="free" value="0" for="cb3" id="cb3"> 
            </div>
            <div class="form-group col-md-4">
              <label for="exampleInputDetails"><?php echo e(__('adminstaticword.AutoPlay')); ?>:</label><br>
              <input  class="custom_toggle"   type="checkbox" name="autoplay"  <?php echo e(optional($ps)['autoplay'] == '1' ? 'checked' : ''); ?>/>
              <input type="hidden"  name="free" value="0" for="cb6" id="cb6"> 
            </div>
            <div class="form-group col-md-4">
              <label for="exampleInputDetails"><?php echo e(__("Video Downlaod Enable:")); ?></label><br>
              <input  class="custom_toggle"   type="checkbox" name="download" <?php echo e(optional($ps)['download'] == '1' ? 'checked' : ''); ?>/>
              <input type="hidden"  name="free" value="0" for="cb7" id="cb7"> 
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6">
              <div class="form-group">
                  <label class="text-dark" ><?php echo e(__('Subtitle Font Size')); ?> : </label>
                  <input min="1" name="subtitle_font_size" class="form-control" type="number" value="<?php echo e(optional($ps)['subtitle_font_size']); ?>"/>
              </div>
            </div>

            <div class="form-group col-md-6">
              <div class="form-group">
                  <label class="text-dark" ><?php echo e(__('Subtitle Color')); ?> : </label>
                  <input name="subtitle_color" class="form-control" type="color" value="<?php echo e(optional($ps)['subtitle_color']); ?>"/>
              </div>
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


<?php $__env->startSection('script'); ?>
  <script>
    $(function() {
        $('#logo_chk').change(function() {
          $('#status').val(+ $(this).prop('checked'))
          var st = $('#status').val();
          if(st==1)
          {
            $('#logo_upl').show();
            $('#logo_pre').show();
          }
          else
          {
            $('#logo_upl').hide();
            $('#logo_pre').hide();
          }
        })
      })

      $(function() {
        $('#share_chk').change(function() {
          $('#share_opt').val(+ $(this).prop('checked'))
        })
      })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/playersetting/edit.blade.php ENDPATH**/ ?>