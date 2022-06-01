<div class="row">
        <div class="col-md-12">
            <!-- card started -->
            <div class="card">
              <!-- ========= -->
                <!-- to show add button start -->
                <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-md-7">
                    <!-- <div class="card-header">
                        <h5 class="card-title"><?php echo e(__('adminstaticword.Language')); ?></h5>
                    </div>  -->
                    </div> 
                    <div class="col-md-5">
                    <div class="widgetbar">
                    <a href="<?php echo e(action('LanguageController@create')); ?>" class="float-right btn btn-primary-rgba mr-2"><i class="feather icon-plus mr-2"></i><?php echo e(__('Add Language')); ?></a>
                    </div>
                    </div>
                </div>
                </div>
                <!-- to show add button end -->
                <!-- card body started -->
                <div class="card-body">
                <div class="table-responsive">
                          <!-- table to display faq start -->
                          <table id="datatable-buttons1" class="table table-striped table-bordered">
                              <thead>
                                    <th>
                                     # 
                                    </th>
                                  <th><?php echo e(__('adminstaticword.Name')); ?></th>
                                  <th><?php echo e(__('adminstaticword.Local')); ?></th>
                                  <th><?php echo e(__('adminstaticword.Default')); ?></th>
                                  <th><?php echo e(__('adminstaticword.Action')); ?></th>
                              </thead>
                              <?php if($languages): ?>
                              <tbody>
                                  <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr>
                                  <td><?php echo e($key+1); ?></td>
                                  <td><?php echo e($language->name); ?></td>
                                  <td><?php echo e($language->local); ?></td>
                                  <td align="left">
                                    <?php if($language->def ==1): ?>
                                      <i class="text-success fa fa-check"></i>
                                    <?php else: ?>
                                      <i class="text-danger fa fa-times"></i>
                                    <?php endif; ?>
                                  </td>
                                  <td>
                                      <div class="dropdown">
                                          <button class="btn btn-round btn-outline-primary" type="button" id="CustomdropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                          <div class="dropdown-menu" aria-labelledby="CustomdropdownMenuButton1">
                                              

                                              <a class="dropdown-item" href="<?php echo e(url('admin/languages/'. $language->local.'/translations')); ?>"><i class="feather icon-edit mr-2"></i>Edit</a>
                                          </div>
                                      </div>
                                  </td>
                                      
                                  </tr> 
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </tbody>
                              <?php endif; ?>
                          </table>                  
                          <!-- table to display faq data end -->                
                    </div><!-- table-responsive div end -->
                </div><!-- card body end -->
            </div><!-- card end -->
        </div><!-- col end -->
    </div><!-- row end -->
<script>
    $("#checkboxAll").on('click', function () {
$('input.check').not(this).prop('checked', this.checked);
});
</script><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/language/frontstatic/index.blade.php ENDPATH**/ ?>