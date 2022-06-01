
<?php $__env->startSection('title','Create a  user'); ?>
<?php $__env->startSection('breadcum'); ?>
<?php $__env->startComponent('components.breadcumb',['secondaryactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
   <?php echo e(__('User')); ?>

<?php $__env->endSlot(); ?>

<?php $__env->slot('menu1'); ?>
   <?php echo e(__('User')); ?>

<?php $__env->endSlot(); ?>

<?php $__env->slot('button'); ?>

<div class="col-md-4 col-lg-4">
  <div class="widgetbar">
    <a href="<?php echo e(url('order')); ?>" class="float-right btn btn-dark-rgba mr-2"><i
      class="feather icon-arrow-left mr-2"></i><?php echo e(__('Back')); ?></a>  </div>                        
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
            <div class="box-body">
                <div class="form-group">
                    <form id="demo-form2" method="post" action="<?php echo e(route('order.store')); ?>" data-parsley-validate
                        class="form-horizontal form-label-left" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="row">
                            <div class="col-md-4">
                                <label><?php echo e(__('User')); ?><span class="redstar">*</span></label>

                                <input type="hidden" id="enrollUserViewRoute"
                                    value="<?php echo e(route('order.enrolluserview', '')); ?>">
                                <select name="user_id" id="user_id" class="form-control select2"
                                    required>
                                    <option value=""><?php echo e(__('adminstaticword.SelectanOption')); ?></option>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            <?php echo e(isset($selectedUser) && $user->id === $selectedUser->id ? 'selected' : ''); ?>

                                            value="<?php echo e($user->id); ?>"><?php echo e($user->fname); ?> <?php echo e($user->lname); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label><?php echo e(__('Courses')); ?> </label>
                                <select name="course_id" id="course_id"
                                    class="form-control select2">
                                    <option value=""><?php echo e(__('adminstaticword.SelectanOption')); ?></option>
                                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($course->id); ?>"><?php echo e($course->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label><?php echo e(__('Bundles')); ?></label>
                                <select name="bundle_id" id="bundle_id"
                                    class="form-control select2">
                                    <option value=""><?php echo e(__('adminstaticword.SelectanOption')); ?></option>
                                    <?php $__currentLoopData = $bundles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bundle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($bundle->id); ?>"><?php echo e($bundle->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <label>Amount</label>
                                    <input class="form-control" type="number" value="" name="amount">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="box-footer">
                            <button type="submit" value="Add Slider" class="btn btn-md col-md-2 btn-primary"><?php echo e(__('Enrol
                                User')); ?></button>
                        </div>

                    </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php if(isset($enrolledCourses)  ): ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-header">
                        <div class="card-header">
                            <h5 class="card-box"><?php echo e(__('Enrolled courses')); ?></h5>
                            <div class="box-body">

                                <?php $__currentLoopData = $enrolledCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enrolledCourse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <?php echo e($enrolledCourse['title']); ?>

                                        </div>

                                    </div>
                                    <br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if(isset($enrolledBundles)  ): ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-header">
                        <div class="card-header">
                            <h5 class="card-box"><?php echo e(__('Enrolled bundles')); ?></h5>
                            <div class="box-body">

                                <?php $__currentLoopData = $enrolledBundles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enrolledBundle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <?php echo e($enrolledBundle->title); ?>

                                        </div>

                                    </div>
                                    <br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <script>
        $(function() {
            $('#user_id').on('change', function(e) {
                var userId = this.value;
                var link = $('#enrollUserViewRoute').val() + '/' + userId;

                top.location.href = link;
            });
        })

    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/order/create.blade.php ENDPATH**/ ?>