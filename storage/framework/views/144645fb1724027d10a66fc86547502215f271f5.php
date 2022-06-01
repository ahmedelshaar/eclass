
<?php $__env->startSection('title', 'Truested Slider - Admin'); ?>
<?php $__env->startSection('maincontent'); ?>
 

<?php $__env->startComponent('components.breadcumb',['thirdactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
   <?php echo e(__('Truested Slider')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu1'); ?>
   <?php echo e(__('Front Settings')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu2'); ?>
   <?php echo e(__('Truested Slider')); ?>

<?php $__env->endSlot(); ?>

<?php $__env->slot('button'); ?>
<div class="col-md-4 col-lg-4">
  <div class="widgetbar">
      <a   href="<?php echo e(url('trusted/create')); ?>" class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i><?php echo e(__("Add Trustedslider")); ?></a>
      
  <a href="page-product-detail.html" class="btn btn-danger-rgba"  data-toggle="modal" data-target=".bd-example-modal-sm1"><i class="feather icon-trash mr-2"></i><?php echo e(__('Delete Selected')); ?></a>
                                
  <div class="modal fade bd-example-modal-sm1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-sm">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleSmallModalLabel"><?php echo e(__('Delete')); ?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body text-center">
                  <p class="text-muted"><?php echo e(__("Do you really want to delete these records? This process cannot be undone.")); ?></p>
              </div>
              <div class="modal-footer">
                <form method="post" action="<?php echo e(action('BulkdeleteController@trustsliderdeleteAll')); ?>

                " id="bulk_delete_form" data-parsley-validate class="form-horizontal form-label-left">
                <?php echo e(csrf_field()); ?>


                
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__("No")); ?></button>
                  <button type="submit" class="btn btn-danger"><?php echo e(__("Yes")); ?></button>
              </form>
              </div>
          </div>
      </div>
  </div>


  </div>                        
</div>
<?php $__env->endSlot(); ?>
<?php if (isset($__componentOriginaleb2335b938fad9aa8fe68ad102cc16a90a88d3d2)): ?>
<?php $component = $__componentOriginaleb2335b938fad9aa8fe68ad102cc16a90a88d3d2; ?>
<?php unset($__componentOriginaleb2335b938fad9aa8fe68ad102cc16a90a88d3d2); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<div class="contentbar">                
  <!-- Start row -->
  <div class="row">
  
      <div class="col-lg-12">
          <div class="card m-b-30">
              <div class="card-header">
                  <h5 class="box-title"><?php echo e(__('Truested Slider')); ?></h5>
              </div>
              <div class="card-body">
               
                  <div class="table-responsive">
                      <table id="datatable-buttons" class="table table-striped table-bordered">
                          <thead>
                          <tr>
                            <th> <input id="checkboxAll" type="checkbox" class="filled-in" name="checked[]" value="all" id="checkboxAll">
                                <label for="checkboxAll" class="material-checkbox"></label> 
                            #</th>
                            <th><?php echo e(__('adminstaticword.Image')); ?></th>
                            <th><?php echo e(__('adminstaticword.URL')); ?></th>
                            <th><?php echo e(__('adminstaticword.Status')); ?></th>
                            <th><?php echo e(__('adminstaticword.Action')); ?></th>
                          
                          </tr>
                          </thead>
                          <tbody>
                            <?php $i=0;?>
                            <?php $__currentLoopData = $trusted; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trusted): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $i++;?>
                            <tr>
                              <td> <input type="checkbox" form="bulk_delete_form" class="filled-in material-checkbox-input" name="checked[]" value="<?php echo e($trusted->id); ?>" id="checkbox<?php echo e($trusted->id); ?>">
                                <label for="checkbox<?php echo e($trusted->id); ?>" class="material-checkbox"></label> 
                                <?php echo $i;?></td>
                              <td>
                                <img src="images/trusted/<?php echo $trusted['image'];  ?>" class="img-circle">
                              </td>
                              <td><?php echo e($trusted->url); ?></td>
                              <td>
                                <label class="switch">
                                  <input class="trustedslider" type="checkbox"  data-id="<?php echo e($trusted->id); ?>" name="status" <?php echo e($trusted->status == '1' ? 'checked' : ''); ?>>
                                  <span class="knob"></span>
                                </label>
                              </td>
                              
                              
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-round btn-primary-rgba" type="button" id="CustomdropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="CustomdropdownMenuButton3">
                                        <a class="dropdown-item"  href="<?php echo e(url('trusted/'.$trusted->id)); ?>" ><i class="feather icon-edit mr-2"></i><?php echo e(__("Edit")); ?></a>
                                        <a class="dropdown-item" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="feather icon-delete mr-2"></i><?php echo e(__("Delete")); ?></a>
                                      
                                    </div>
                                </div>
                              </td>
                             
                               
                                
                                <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleSmallModalLabel"><?php echo e(__('Delete')); ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-muted"><?php echo e(__("Do you really want to delete these records? This process cannot be undone.")); ?></p>
                                            </div>
                                            <div class="modal-footer">
                                              <form  method="post" action="<?php echo e(url('trusted/'.$trusted->id)); ?>

                                                "data-parsley-validate class="form-horizontal form-label-left">
                                                <?php echo e(csrf_field()); ?>

                                                <?php echo e(method_field('DELETE')); ?>

                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__("No")); ?></button>
                                                <button type="submit" class="btn btn-danger"><?php echo e(__("Yes")); ?></button>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
                            
                            </tr>
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


<?php $__env->startSection('scripts'); ?>

  <script>

"use Strict";

$.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
$(document).on("change",".trustedslider",function() {
        
        $.ajax({
            type: "POST",
            dataType: "json",
            url: '<?php echo e(url("quickupdate/truested")); ?>',
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
              
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/trusted/index.blade.php ENDPATH**/ ?>