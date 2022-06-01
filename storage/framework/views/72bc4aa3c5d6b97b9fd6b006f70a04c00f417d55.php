
<?php $__env->startSection('title','Edit Courseinclude'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php $__env->startComponent('components.breadcumb',['thirdactive' => 'active']); ?>

<?php $__env->slot('heading'); ?>
<?php echo e(__('Home')); ?>

<?php $__env->endSlot(); ?>

<?php $__env->slot('menu1'); ?>
<?php echo e(__('Admin')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu2'); ?>
<?php echo e(__(' Edit Course Include')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('button'); ?>

<div class="col-md-4 col-lg-4">
  <a href="<?php echo e(url('course/create/'. $cate->courses->id)); ?>" class="float-right btn btn-primary-rgba"><i class="feather icon-arrow-left mr-2"></i><?php echo e(__('Back')); ?></a>
</div>
<?php $__env->endSlot(); ?>

<?php if (isset($__componentOriginaleb2335b938fad9aa8fe68ad102cc16a90a88d3d2)): ?>
<?php $component = $__componentOriginaleb2335b938fad9aa8fe68ad102cc16a90a88d3d2; ?>
<?php unset($__componentOriginaleb2335b938fad9aa8fe68ad102cc16a90a88d3d2); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<div class="contentbar">
  <div class="row">
    <div class="col-lg-12">
      <div class="card m-b-30">
        <div class="card-header">
          <h5 class="card-box"><?php echo e(__('adminstaticword.Edit')); ?> <?php echo e(__('Course Include')); ?></h5>
        </div>
        <div class="card-body ml-2">
         <!-- form start -->
         <form id="demo-form" method="post" action="<?php echo e(url('courseinclude/'.$cate->id)); ?>"data-parsley-validate class="form-horizontal form-label-left">
              <?php echo e(csrf_field()); ?>

              <?php echo e(method_field('PUT')); ?>

                        <input  type="hidden" class="form-control" name="user_id" value="<?php echo e(Auth::User()->id); ?>" >
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
                                                    
                                                     <!-- SelectCourse -->
                                                     <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="text-dark"><?php echo e(__('adminstaticword.SelectCourse')); ?> :</label>
                                                            <select name="course_id" class="select2 form-control">
                                                              <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cou): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option  value="<?php echo e($cou->id); ?>" <?php echo e($cate->courses->id == $cou->id  ? 'selected' : ''); ?>><?php echo e($cou->title); ?></option>
                                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- SelectCourse -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="text-dark"><?php echo e(__('adminstaticword.Icon')); ?> : <span class="text-danger">*</span></label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control iconvalue" name="icon" value="<?php echo e($cate->icon); ?>">
                                                                <span class="input-group-append">
                                                                    <button  type="button" class="btnicon btn btn-outline-secondary" role="iconpicker"></button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                      <!-- Detail -->
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="text-dark"><?php echo e(__('adminstaticword.Detail')); ?> : <span class="text-danger">*</span></label>
                                                            <textarea rows="1" name="detail" class="form-control" ><?php echo $cate->detail; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <!-- status -->
                                                    <div class="form-group col-md-3">
                                                      <label class="text-dark" for="exampleInputDetails"><?php echo e(__('adminstaticword.Status')); ?> :</label><br>
                                                      <label class="switch">
                                                        <input class="slider" type="checkbox" name="status" <?php echo e($cate->status == '1' ? 'checked' : ''); ?> />
                                                        <span class="knob"></span>
                                                      </label>
                                                    </div>
                                                   
                                                                      
                                                    <!-- create and close button -->
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> <?php echo e(__("Reset")); ?></button>
                                                            <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                                            <?php echo e(__("Update")); ?></button>
                                                        </div>
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
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/course/courseinclude/edit.blade.php ENDPATH**/ ?>