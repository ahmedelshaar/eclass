
<?php $__env->startSection('title','All Returnpolicy'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php $__env->startComponent('components.breadcumb',['secondaryactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
   <?php echo e(__('Refund Policies ')); ?>

<?php $__env->endSlot(); ?>

<?php $__env->slot('menu1'); ?>
   <?php echo e(__('Refund Policy ')); ?>

<?php $__env->endSlot(); ?>

<?php $__env->slot('button'); ?>

<div class="col-md-4 col-lg-4">
    <div class="widgetbar">
        <button type="button" class="float-right btn btn-danger-rgba mr-2 " data-toggle="modal" data-target="#bulk_delete"><i
            class="feather icon-trash mr-2"></i> <?php echo e(__('Delete Selected')); ?></button>
        <a href="<?php echo e(url('refundpolicy/create')); ?>"  class="float-right btn btn-primary-rgba mr-2"><i class="feather icon-plus mr-2"></i><?php echo e(__('Add Refund Policy')); ?> </a>
        
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
      
      <div class="col-lg-12">
          <div class="card m-b-30">
              <div class="card-header">
                  <h5 class="box-title"><?php echo e(__('All Refund Policies')); ?> </h5>
              </div>
              <div class="card-body">
              
                  <div class="table-responsive">
                      <table id="datatable-buttons" class="table table-striped table-bordered">
                          <thead>
                          <tr>
                              <th>
                                  <input id="checkboxAll" type="checkbox" class="filled-in" name="checked[]"
                                  value="all" />
                              <label for="checkboxAll" class="material-checkbox"></label>   # 
                              </th>
                              <th><?php echo e(__('adminstaticword.Name')); ?></th>
                <th><?php echo e(__('adminstaticword.Days')); ?></th>
                <th><?php echo e(__('adminstaticword.Detail')); ?></th>
                <th><?php echo e(__('adminstaticword.Status')); ?></th>
                <th><?php echo e(__('adminstaticword.Action')); ?></th>
                
              </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $return; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$policy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td>
                                                     
                  <input type='checkbox' form='bulk_delete_form' class='check filled-in material-checkbox-input'
                      name='checked[]' value='<?php echo e($policy->id); ?>' id='checkbox<?php echo e($policy->id); ?>'>
                  <label for='checkbox<?php echo e($policy->id); ?>' class='material-checkbox'></label>
                  <?php echo e($key+1); ?>

              <div id="bulk_delete" class="delete-modal modal fade" role="dialog">
                  <div class="modal-dialog modal-sm">
                      <!-- Modal content-->
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <div class="delete-icon"></div>
                          </div>
                          <div class="modal-body text-center">
                              <h4 class="modal-heading"><?php echo e(__('Are You Sure')); ?> ?</h4>
                              <p><?php echo e(__('Do you really want to delete selected item names here? This process
                                  cannot be undone')); ?>.</p>
                          </div>
                          <div class="modal-footer">
                              <form id="bulk_delete_form" method="post"
                                  action="<?php echo e(route('refundpolicybulk.bulk_delete')); ?>">
                                  <?php echo csrf_field(); ?>
                                  <?php echo method_field('POST'); ?>
                                  <button type="reset" class="btn btn-gray translate-y-3"
                                      data-dismiss="modal"><?php echo e(__('No')); ?></button>
                                  <button type="submit" class="btn btn-danger"><?php echo e(__('Yes')); ?></button>
                              </form>
                          </div>
                      </div>
                  </div>
              </div></td>
              <td><?php echo e($policy->name); ?></td>
              <td><?php echo e($policy->days); ?></td>
              <td><?php echo str_limit($policy->detail, $limit = 40, $end = '...'); ?></td>
              <td>
                <label class="switch">
                  <input class="refund" type="checkbox"  data-id="<?php echo e($policy->id); ?>" name="status"    <?php echo e($policy->status ==1 ? 'checked' : ''); ?>>
                  <span class="knob"></span>
                </label>
                </td>
              
              
              <td>
                <div class="dropdown">
                    <button class="btn btn-round btn-outline-primary" type="button" id="CustomdropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                    <div class="dropdown-menu" aria-labelledby="CustomdropdownMenuButton1">
                        <a class="dropdown-item" href="<?php echo e(url('refundpolicy/'.$policy->id.'/edit')); ?>"><i class="feather icon-edit mr-2"></i><?php echo e(__('Edit')); ?></a>
                        <a class="dropdown-item btn btn-link" data-toggle="modal" data-target="#delete<?php echo e($policy->id); ?>" >
                            <i class="feather icon-delete mr-2"></i><?php echo e(__("Delete")); ?></a>
                        </a>
                    </div>
                </div>

                <!-- delete Modal start -->
                <div class="modal fade bd-example-modal-sm" id="delete<?php echo e($policy->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleSmallModalLabel"><?php echo e(__('Delete')); ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <h4><?php echo e(__('Are You Sure ?')); ?></h4>
                                    <p><?php echo e(__('Do you really want to delete')); ?> ? <?php echo e(__('This process cannot be undone.')); ?></p>
                            </div>
                            <div class="modal-footer">
                                <form method="post" action="<?php echo e(url('refundpolicy/'.$policy->id)); ?>}" class="pull-right">
                                    <?php echo e(csrf_field()); ?>

                                    <?php echo e(method_field("DELETE")); ?>

                                    <button type="reset" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('No')); ?></button>
                                    <button type="submit" class="btn btn-danger"><?php echo e(__('Yes')); ?></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
              </td>

              

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
      </div>
  </div>
</div>
</div>
<!-- End col -->
</div>
<!-- End row -->
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
    $("#checkboxAll").on('click', function () {
$('input.check').not(this).prop('checked', this.checked);
});
</script>


<script>

"use Strict";

$.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
$(document).on("change",".refund",function() {
        
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '<?php echo e(url("refundpolicystatus/status")); ?>',
            data: {'status': $(this).is(':checked') ? 1 : 0, 'id': $(this).data('id')},
            success: function(data){
                var warning = new PNotify( {
                title: 'success', text:'Status Update Successfully', type: 'success', desktop: {
                desktop: true, icon: 'feather icon-thumbs-down'
                }
            });
                warning.get().click(function() {
                    warning.remove();
                });
            }
        });
    })

  
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/return_policy/index.blade.php ENDPATH**/ ?>