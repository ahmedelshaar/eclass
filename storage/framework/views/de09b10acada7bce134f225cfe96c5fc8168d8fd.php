
<?php $__env->startSection('title','All Batch'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php $__env->startComponent('components.breadcumb',['secondaryactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
   <?php echo e(__('Batches')); ?>

<?php $__env->endSlot(); ?>

<?php $__env->slot('menu1'); ?>
   <?php echo e(__('Batch')); ?>

<?php $__env->endSlot(); ?>

<?php $__env->slot('button'); ?>

<div class="col-md-4 col-lg-4">
    <div class="widgetbar">
   
        <a href="<?php echo e(route('batch.create')); ?>"  class="float-right btn btn-primary-rgba mr-2"><i class="feather icon-plus mr-2"></i><?php echo e(__('Add Batch')); ?></a>
        <a href="page-product-detail.html" class="btn btn-danger-rgba mr-2"  data-toggle="modal" data-target=".bd-example-modal-sm1"><i class="feather icon-trash mr-2"></i><?php echo e(__('Delete Selected')); ?></a>
                                
        <div class="modal fade bd-example-modal-sm1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5  class="modal-title"><?php echo e(__('Delete')); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <p class="text-muted"><?php echo e(__("Do you really want to delete these records? This process cannot be undone.")); ?></p>
                    </div>
                    <div class="modal-footer">
                      
                      <form method="post" action="<?php echo e(action('BatchController@batchdeleteAll')); ?>

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
  <div class="row">
      
      <div class="col-lg-12">
          <div class="card m-b-30">
              <div class="card-header">
                  <h5 class="card-box"><?php echo e(__('All Batches')); ?></h5>
              </div>
              <div class="card-body">
              
                  <div class="table-responsive">
                      <table id="datatable-buttons" class="table table-striped table-bordered">
                          <thead>
                          <tr>
                            <th> <input id="checkboxAll" type="checkbox" class="filled-in" name="checked[]"
                              value="all" />
                          <label for="checkboxAll" class="material-checkbox"></label>#</th>
                            <th><?php echo e(__('adminstaticword.Image')); ?></th>
                            <th><?php echo e(__('adminstaticword.Title')); ?></th>
                            <th><?php echo e(__('adminstaticword.Instructor')); ?></th>
                            <th><?php echo e(__('adminstaticword.Slug')); ?></th>
                            <th><?php echo e(__('adminstaticword.Featured')); ?></th>
                            <th><?php echo e(__('adminstaticword.Status')); ?></th>
                            <th><?php echo e(__('adminstaticword.Action')); ?></th>
                            
                        </thead>
          
                        <tbody>
                          <?php $i=0;?>
                            <?php if(Auth::User()->role == "admin"): ?>
                              <?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $i++;?>
                                <tr>
                                  <td>
                                    <input type='checkbox' form='bulk_delete_form' class='check filled-in material-checkbox-input'
                                    name='checked[]' value='<?php echo e($cat->id); ?>' id='checkbox<?php echo e($cat->id); ?>'>
                                   <label for='checkbox<?php echo e($cat->id); ?>' class='material-checkbox'></label>
                                   <?php echo $i; ?>
                                
                            
                                  </td>
                                  <td>
                                    <?php if($cat['preview_image'] !== NULL && $cat['preview_image'] !== ''): ?>
                                        <img src="images/batch/<?php echo $cat['preview_image'];  ?>" class="img-circle" >
                                    <?php else: ?>
                                        <img src="<?php echo e(Avatar::create($cat->title)->toBase64()); ?>" class="img-circle" >
                                    <?php endif; ?>
                                  </td>
                                  <td><?php echo e($cat->title); ?></td>
                                  <td><?php if(isset($cat->user)): ?><?php echo e($cat->user['fname']); ?> <?php endif; ?></td>
                                  <td><?php echo e($cat->slug); ?></td>
                                  <td>
                                    <label class="switch">
                                      <input class="batchfeatured" type="checkbox"  data-id="<?php echo e($cat->id); ?>" name="status"  <?php echo e($cat['featured'] ==1 ? 'checked' : ''); ?>>
                                      <span class="knob"></span>
                                    </label>
                                    </td>

                                    <td>
                                      <label class="switch">
                                        <input class="batchstatus" type="checkbox"  data-id="<?php echo e($cat->id); ?>"    <?php echo e($cat->status ==1 ? 'checked' : ''); ?>>
                                        <span class="knob"></span>
                                      </label>
                                      </td>


                                 
                                  <td>
                                    <div class="dropdown">
                                        <button class="btn btn-round btn-outline-primary" type="button" id="CustomdropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                        <div class="dropdown-menu" aria-labelledby="CustomdropdownMenuButton1">
                                            <a class="dropdown-item" href="<?php echo e(route('batch.show',$cat->id)); ?>"><i class="feather icon-edit mr-2"></i><?php echo e(__('Edit')); ?></a>
                                            <a class="dropdown-item btn btn-link" data-toggle="modal" data-target="#delete<?php echo e($cat->id); ?>" >
                                                <i class="feather icon-delete mr-2"></i><?php echo e(__("Delete")); ?></a>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- delete Modal start -->
                                    <div class="modal fade bd-example-modal-sm" id="delete<?php echo e($cat->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                    <form method="post" action="<?php echo e(url('batch/'.$cat->id)); ?>" class="pull-right">
                                                        <?php echo e(csrf_field()); ?>

                                                        <?php echo e(method_field("DELETE")); ?>

                                                        <button type="reset" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('No')); ?></button>
                                                        <button type="submit" class="btn btn-danger"><?php echo e(__('Yes')); ?></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- delete Model ended -->

                                  </td>

                                       
                                     
                                 
                                </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            
                              <?php
                                $cors = App\Batch::where('user_id', Auth::User()->id)->get();
                              ?>
                              <?php $__currentLoopData = $cors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $i++;?>
                                <tr>
                                  <td><?php echo $i;?></td>
                                  <td>
                                    <?php if($cor['preview_image'] !== NULL && $cor['preview_image'] !== ''): ?>
                                        <img src="images/course/<?php echo $cor['preview_image'];  ?>" class="img-circle">
                                    <?php else: ?>
                                        <img src="<?php echo e(Avatar::create($cor->title)->toBase64()); ?>" class="img-circle" >
                                    <?php endif; ?>
                                  </td>
                                  <td><?php echo e($cor->title); ?></td>
                                  <td><?php echo e($cor->user['fname']); ?></td>
                                  <td><?php echo e($cor->slug); ?></td>

                                  <td>
                                    <label class="switch">
                                      <input class="batchfeatured" type="checkbox"  data-id="<?php echo e($cat->id); ?>" name="status"  <?php echo e($cat['featured'] ==1 ? 'checked' : ''); ?>>
                                      <span class="knob"></span>
                                    </label>
                                    </td>

                                    <td>
                                      <label class="switch">
                                        <input class="batchstatus" type="checkbox"  data-id="<?php echo e($cat->id); ?>" name="status"   <?php echo e($cat->status ==1 ? 'checked' : ''); ?>>
                                        <span class="knob"></span>
                                      </label>
                                      </td>

                                 
                                  <td>
                                  
                                  <div class="dropdown">
                                      <button class="btn btn-round btn-outline-primary" type="button" id="CustomdropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                      <div class="dropdown-menu" aria-labelledby="CustomdropdownMenuButton1">
                                          <a class="dropdown-item" href="<?php echo e(route('bundle.show',$cor->id)); ?>"><i class="feather icon-edit mr-2"></i><?php echo e(__('Edit')); ?></a>
                                          <a class="dropdown-item btn btn-link" data-toggle="modal" data-target="#delete<?php echo e($cor->id); ?>" >
                                              <i class="feather icon-delete mr-2"></i><?php echo e(__("Delete")); ?></a>
                                          </a>
                                      </div>
                                  </div>

                                  <!-- delete Modal start -->
                                  <div class="modal fade bd-example-modal-sm" id="delete<?php echo e($cor->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                  <form method="post" action="<?php echo e(url('bundle/'.$cor->id)); ?>" class="pull-right">
                                                      <?php echo e(csrf_field()); ?>

                                                      <?php echo e(method_field("DELETE")); ?>

                                                      <button type="reset" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('No')); ?></button>
                                                      <button type="submit" class="btn btn-danger"><?php echo e(__('Yes')); ?></button>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- delete Model ended -->

                                 </td>
          
                                  
                                </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
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

 
      $(document).on("change",".batchstatus",function() {
        
        $.ajax({
            type: "POST",
            dataType: "json",
            url:"<?php echo e(url('batch/status')); ?>",
            data:{'status': $(this).is(':checked') ? 1 : 0, 'id': $(this).data('id')},
            success: function(data){
              console.log(data)
            }
        });
   
  })

  

$.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

      $(document).on("change",".batchfeatured",function() {
        $.ajax({
            type: "POST",
            dataType: "json",
            url:"<?php echo e(url('batch/features')); ?>",
            data:{'features': $(this).is(':checked') ? 1 : 0, 'id': $(this).data('id')},
            success: function(data){
              console.log(data)
            }
        });
      })
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/batch/index.blade.php ENDPATH**/ ?>