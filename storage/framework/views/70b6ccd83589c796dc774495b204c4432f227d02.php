
<?php $__env->startSection('title','Create a new Coupan'); ?>
<?php $__env->startSection('breadcum'); ?>
<div class="breadcrumbbar">
  <div class="row align-items-center">
    <div class="col-md-8 col-lg-8">
      <h4 class="page-title">All Coupan</h4>
      <div class="breadcrumb-list">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></li>
          <li class="breadcrumb-item"><a href="<?php echo e(url('/admins')); ?>"><?php echo e(__('Dashboard')); ?></a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            <?php echo e(__('Add Coupan')); ?>

          </li>
        </ol>
      </div>
    </div>

    <div class="col-md-4 col-lg-4">

      <div class="widgetbar">
        <a title="Back" href="<?php echo e(url('coupon')); ?>" class="btn btn-primary-rgba"><i
            class="feather icon-arrow-left mr-2"></i>Back</a>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('maincontent'); ?>
<div class="contentbar">
    <div class="row">
      <div class="col-lg-12">
        <div class="card m-b-30">
          <div class="card-header">
            <h5 class="card-box"><?php echo e(__('adminstaticword.Add')); ?> <?php echo e(__('Coupan')); ?></h5>
          </div>
          <div class="card-body">
            <form action="<?php echo e(route('coupon.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <label class="text-dark"><?php echo e(__('adminstaticword.CouponCode')); ?>: <span class="text-danger">*</span></label>
                          <input required="" type="text" class="form-control" name="code">
                      </div>
                    </div>

                    <div class="col-md-6">
                     <div class="form-group">
                          <label class="text-dark"><?php echo e(__('adminstaticword.DiscountType')); ?>: <span class="text-danger">*</span></label>
                          <select required="" name="distype" id="distype" class="form-control select2">
                              <option value="fix"><?php echo e(__('adminstaticword.FixAmount')); ?></option>
                              <option value="per">% <?php echo e(__('adminstaticword.Percentage')); ?></option>
                          </select>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                          <label class="text-dark"><?php echo e(__('adminstaticword.Amount')); ?>: <span class="text-danger">*</span></label>
                          <input required="" type="number"  type="text" class="form-control" name="amount">
      
                      </div>
                    </div>
                    
                    <div class="col-md-6"> 
                      <div id="probox" class="form-group" style="display: none;">
                          <label class="text-dark"><?php echo e(__('adminstaticword.SelectCourse')); ?>: <span class="text-danger">*</span> </label>
                          <br>
                          <select style="width: 100%" id="pro_id" name="course_id"
                              class="form-control select2">
                              <option value="none" selected disabled hidden>
                                  <?php echo e(__('adminstaticword.SelectanOption')); ?>

                              </option>
                              <?php $__currentLoopData = App\Course::where('status', '1')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <?php if($product->type == 1): ?>
      
                                      <option value="<?php echo e($product->id); ?>"><?php echo e($product['title']); ?>

                                          - <?php echo e($product->discount_price); ?><i
                                              class="<?php echo e($currency->icon); ?>"><?php echo e($currency->currency); ?></i>
                                      </option>
                                  <?php endif; ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div id="bundlebox" class="form-group" style="display: none;">
                          <label class="text-dark"><?php echo e(__('adminstaticword.SelectBundle')); ?>: <span class="text-danger">*</span> </label>
                          <br>
                          <select style="width: 100%" id="bundle_id" name="bundle_id"
                              class="form-control select2">
                              <option value="none" selected disabled hidden>
                                  <?php echo e(__('adminstaticword.SelectanOption')); ?>

                              </option>
                              <?php $__currentLoopData = App\BundleCourse::where('status', '1')->get()->sortByDesc('updated_at'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <?php if($product->type == 1): ?>
                                      <option value="<?php echo e($product->id); ?>"><?php echo e($product['title']); ?>

                                          <?php if(isset($product->billing_interval)): ?>
                                              - <?php echo e($product->discount_price); ?> <i
                                                  class="<?php echo e($currency->icon); ?>"><?php echo e($currency->currency); ?></i> /
                                              <?php echo e($product->billing_interval); ?>

                                          <?php endif; ?>
                                      </option>
                                  <?php endif; ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div id="minAmount" class="form-group">
                          <label class="text-dark"><?php echo e(__('adminstaticword.MinAmount')); ?>: </label>
                          <div class="input-group">
                              
                              <input type="number" min="0.0" value="0.00" step="0.1" class="form-control"
                                  name="minamount">
                                  <span class="input-group-text" id="basic-addon2"><i class="<?php echo e($currency->icon); ?>"></i></span>
      
                          </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                          <label class="text-dark"><?php echo e(__('adminstaticword.ExpiryDate')); ?>: </label>
                             
                          <div class="input-group">                                  
                            <input type="text" id="default-date" class="datepicker-here form-control"  name="expirydate" placeholder="dd/mm/yyyy" aria-describedby="basic-addon2"/>
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2"><i class="feather icon-calendar"></i></span>
                              </div>
                          </div>
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                          <label class="text-dark"><?php echo e(__('adminstaticword.Linkedto')); ?>: <span class="text-danger">*</span></label>
      
                          <select required="" name="link_by" id="link_by"
                              class="form-control select2">
                              <option value="none" selected disabled hidden>
                                  <?php echo e(__('adminstaticword.SelectanOption')); ?>

                              </option>
                              <option value="course"><?php echo e(__('adminstaticword.LinktoCourse')); ?></option>
                              <option value="cart"><?php echo e(__('adminstaticword.LinktoCart')); ?></option>
                              <option value="category"><?php echo e(__('adminstaticword.LinktoCategory')); ?></option>
                              <option value="bundle"><?php echo e(__('adminstaticword.LinktoBundle')); ?></option>
                          </select>
      
                      </div>
                    </div>

                    <div class="col-md-6">

                      <div id="catbox" class="form-group" style="display: none;">
                          <label class="text-dark"><?php echo e(__('adminstaticword.SelectCategories')); ?>: <span class="text-danger">*</span>
                          </label>
                          <br>
                          <select style="width: 100%" id="cat_id" name="category_id"
                              class="form-control select2">
                              <option value="none" selected disabled hidden>
                                  <?php echo e(__('adminstaticword.SelectanOption')); ?>

                              </option>
                              <?php $__currentLoopData = App\Categories::where('status', '1')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($category->id); ?>"><?php echo e($category['title']); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                      </div>
                    </div>

                    <div class="col-md-6">

                      <div class="form-group">
                          <label class="text-dark"><?php echo e(__('Max Usage Limit')); ?>: <span class="text-danger">*</span></label>
                          <input required="" type="number" min="1" class="form-control" name="maxusage">
                      </div>

                    </div>

                    <div class="col-md-6">

                      <div class="form-group">
                          <label for="exampleInputDetails"><?php echo e(__('
                          Coupon Coded is play on front')); ?>:<sup class="text-danger">*</sup></label><br>
                          <input  class="custom_toggle"  type="checkbox" name="show_to_users"  checked />
                          <input type="hidden"  name="show_to_users" value="0" for="frees" id="frees">
                          <small class="txt-desc">(If Choose Yes then Coupon Code shows to all users) </small>
      
                      </div>
                     
                    </div>
                     
                    <br>
                    <div class="form-group col-md-6 mt-5">
                        <button type="reset" class="btn btn-danger-rgba"><i class="fa fa-ban"></i> Reset</button>
                        <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                            Create</button>
                    </div>
                  
                  <div class="clear-both"></div>
                  </div>
                  </div>
                </div>
        </div>
    </div>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        (function($) {
            "use strict";

            $('#link_by').on('change', function() {
                var opt = $(this).val();

                if (opt == 'course') {
                    $('#minAmount').hide();
                    $('#probox').show();
                    $('#bundlebox').hide();
                    $('#pro_id').attr('required', 'required');
                } else if (opt === 'bundle') {
                    $('#minAmount').hide();
                    $('#probox').hide();
                    $('#bundlebox').show();
                    $('#bundle_id').attr('required', 'required');
                } else {
                    $('#minAmount').show();
                    $('#probox').hide();
                    $('#bundlebox').hide();
                    $('#pro_id').removeAttr('required');
                }
            });

            $('#link_by').on('change', function() {
                var opt = $(this).val();

                if (opt == 'category') {
                    $('#catbox').show();
                    $('#pro_id').attr('required', 'required');
                } else {
                    $('#catbox').hide();
                    $('#pro_id').removeAttr('required');
                }
            });

            $(function() {
                $("#expirydate").datepicker({
                    dateFormat: 'yy-m-d'
                });
            });

        })(jQuery);

    </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/coupan/add.blade.php ENDPATH**/ ?>