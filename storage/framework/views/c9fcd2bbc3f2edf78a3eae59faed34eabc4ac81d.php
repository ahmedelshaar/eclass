
<?php $__env->startSection('title', 'Design Certificate'); ?>
<?php $__env->startSection('stylesheet'); ?>
<link rel="stylesheet" href="<?php echo e(Module::asset('certificate:css/custom_certificate.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('maincontent'); ?>
<?php $__env->startComponent('components.breadcumb',['fourthactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
<?php echo e(__('Design Certificate')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu1'); ?>
<?php echo e(__('Certificate')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('button'); ?>
<div class="col-md-4 col-lg-4">
  <div class="widgetbar">
    <a href="<?php echo e(route('create.certificate')); ?>" class="float-right btn btn-primary-rgba mr-2"><i
        class="feather icon-plus mr-2"></i><?php echo e(__('Create Certificate')); ?></a>
  </div>
</div>
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
        <p>
          <?php echo e($error); ?>

          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span class="text-red" aria-hidden="true">&times;</span></button>
        </p>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>

    <!-- row started -->
    <div class="col-lg-12">

      <div class="card m-b-30">
        <?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Card header will display you the heading -->

        <!-- card body started -->
        <div class="card-body">
          <!-- == certificate template start == -->
          <div class="container">
            <div class="row">
              <div class="col-lg-9">
                <div class="cirtificate-border-one text-center">
                  <div class="cirtificate-border-one-sub text-center">
                    <div class="cirtificate-border-two">
                      <div class="cirtificate-border-two-sub">
                        <div class="cirtificate-heading"> <?php echo e(__('frontstaticword.CertificateofCompletion')); ?>

                        </div>
                          <?php
                            $mytime = Carbon\Carbon::now();
                          ?>
                        <p class="cirtificate-detail font-30px">
                          <?php echo e(__('frontstaticword.Thisistocertifythat')); ?><b> <?php echo e(__("Admin Example")); ?> </b>
                          <?php echo e(__('frontstaticword.successfullycompleted')); ?> <b>
                            <?php echo e(__("The Complete Web Developer Bootcamp")); ?> </b>
                          <?php echo e(__('frontstaticword.onlinecourseon')); ?> <br>

                          <span class="font-25px">
                            <?php echo e(__("16th November 2020")); ?></span>

                        </p>

                        <span class="cirtificate-instructor"><?php echo e(__("Admin Example")); ?></span>
                        <br>
                        <span class="cirtificate-one"><?php echo e(__("Admin Example,")); ?>

                          <?php echo e(__('frontstaticword.Instructor')); ?></span>
                        <br>
                        <span><?php echo e(__("&")); ?></span>
                        <div class="cirtificate-logo">
                          <?php if($gsetting['logo_type'] == 'L'): ?>
                          <img src="<?php echo e(asset('images/logo/'.$gsetting['logo'])); ?>" class="img-fluid" alt="logo">
                          <?php else: ?>
                          <a href="#"><b>
                              <div class="logotext"><?php echo e(__("project_title")); ?></div>
                            </b></a>
                          <?php endif; ?>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
              </div>
            </div>
          </div>
          <!-- == certificate template end == -->
        </div>
        <!-- card body end -->

      </div><!-- col end -->
    </div>
  </div>
</div><!-- row end -->
<br><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\Modules/Certificate\Resources/views/admin/certificate/certificate.blade.php ENDPATH**/ ?>