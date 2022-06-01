
<?php $__env->startSection('title', "Gift Course"); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- course detail header start -->

<section id="gift-block" class="gift-main-block btm-60">
	<div class="container">
		<div class="panel-body">
			<h1 class="student-heading text-center top-30 btm-60"><?php echo e(__('frontstaticword.Giftacourse')); ?></h1>
			<div class="row">
				<div class="col-lg-6">
					<?php if($course['preview_image'] !== NULL && $course['preview_image'] !== ''): ?>
          	<a href="<?php echo e(route('user.course.show',['id' => $course->id, 'slug' => $course->slug ])); ?>"><img src="<?php echo e(asset('images/course/'. $course->preview_image)); ?>" class="img-fluid" alt="course"></a>
          <?php else: ?>
          	<a href="<?php echo e(route('user.course.show',['id' => $course->id, 'slug' => $course->slug ])); ?>"><img src="<?php echo e(Avatar::create($course->title)->toBase64()); ?>" class="img-fluid" alt="course"></a>
          <?php endif; ?>
          <br>
          <br>
          <h3 class="text-center">
              <a href="<?php echo e(route('user.course.show',['id' => $course->id, 'slug' => $course->slug ])); ?>"><?php echo e($course->title); ?></a>
          </h3>

                    
				</div>

				<div class="col-lg-6">
					<form id="demo-form2" method="post" action="<?php echo e(route('gift.checkout')); ?>" data-parsley-validate 
                  class="form-horizontal form-label-left" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>


                    <input type="hidden" name="course_id"  value="<?php echo e($course->id); ?>" />
                      
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="fname"><?php echo e(__('frontstaticword.FirstName')); ?>:<sup class="redstar">*</sup></label>
                          <input type="text" class="form-control" name="fname" id="title" placeholder="  <?php echo e(__('frontstaticword.EnterFirstName')); ?>" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="lname"><?php echo e(__('frontstaticword.LastName')); ?>:<sup class="redstar">*</sup></label>
                          <input type="text" class="form-control" name="lname" id="title" placeholder="  <?php echo e(__('frontstaticword.EnterLastName')); ?>"  required>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="email"><?php echo e(__('frontstaticword.Email')); ?>:<sup class="redstar">*</sup></label>
                          <input type="email" value="" class="form-control" name="email" id="title" placeholder="Enter <?php echo e(__('frontstaticword.Email')); ?>" value="" required>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="detail"><?php echo e(__('Your message')); ?>(<?php echo e(__('optional')); ?>):</label>
                          <textarea name="detail" rows="5"  class="form-control" placeholder="" ></textarea>
                        </div>
                      </div>
                      
                    </div>
                    <br>
                    <div class="box-footer text-center">
                     <button type="submit" class="btn btn-lg btn-primary"><?php echo e(__('frontstaticword.ProceedtoCheckout')); ?></button>
                    </div>
                </form>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- course detail end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/front/gift/gift.blade.php ENDPATH**/ ?>