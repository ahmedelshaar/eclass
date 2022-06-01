
<?php $__env->startSection('title','All Course Language'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php $__env->startComponent('components.breadcumb',['secondaryactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
   <?php echo e(__('Course Languages')); ?>

<?php $__env->endSlot(); ?>

<?php $__env->slot('menu1'); ?>
   <?php echo e(__('Course Languages')); ?>

<?php $__env->endSlot(); ?>

<?php $__env->slot('button'); ?>

<div class="col-md-4 col-lg-4">
    <div class="widgetbar">
      <a href="page-product-detail.html" class="btn btn-danger-rgba"  data-toggle="modal" data-target=".bd-example-modal-sm1"><i class="feather icon-trash mr-2"></i><?php echo e(__('Back')); ?>Delete Selected</a>

        <div class="modal fade bd-example-modal-sm1" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-sm">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5  class="modal-title"><?php echo e(__('Back')); ?>Delete</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body text-center">
                      <p class="text-muted"><?php echo e(__("Do you really want to delete these records? This process cannot be undone.")); ?></p>
                  </div>
                  <div class="modal-footer">
                    
                    
                      <form method="post" action="<?php echo e(action('CourseLanguageController@bulk_delete')); ?>

                      " id="bulk_delete_form" data-parsley-validate class="form-horizontal form-label-left">
                      <?php echo e(csrf_field()); ?>

                    
                      <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__("No")); ?></button>
                      <button type="submit" class="btn btn-danger"><?php echo e(__("Yes")); ?></button>
                   </form>
                  </div>
              </div>
          </div>
      </div>

        <a data-toggle="modal" data-target="#myModaljjh" href="#" class="btn btn-primary-rgba mr-2" ><i class="feather icon-plus mr-2"></i><?php echo e(__('Add Language')); ?></a>
     
        
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
                  <h5 class="card-box"><?php echo e(__('Back')); ?>All Courselanguages</h5>
              </div>
              <div class="card-body">
              
                  <div class="table-responsive">
                      <table id="datatable-buttons" class="table table-striped table-bordered">
                          <thead>
                          <tr>
                            <th><input id="checkboxAll" type="checkbox" class="filled-in" name="checked[]" value="all" />
                          <label for="checkboxAll" class="material-checkbox"></label> #</th>
                            <th><?php echo e(__('adminstaticword.Language')); ?></th>
                            <th><?php echo e(__('adminstaticword.Status')); ?></th>
                            <?php if(Auth::user()->role == "admin"): ?>
                            <th><?php echo e(__('adminstaticword.Action')); ?></th>
                            <?php endif; ?>
                           
                          </tr>
                          </thead>
          
                          <tbody>
                            <?php $i=0;?>
                            <?php $__currentLoopData = $language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php $i++;?>
                              <tr>
                                <td>  <input type='checkbox' form='bulk_delete_form' class='check filled-in material-checkbox-input'
                                  name='checked[]' value='<?php echo e($cat->id); ?>' id='checkbox<?php echo e($cat->id); ?>'>
                              <label for='checkbox<?php echo e($cat->id); ?>' class='material-checkbox'></label>
                              <?php echo $i; ?>
                              </td>
                                <td><?php echo e($cat->name); ?></td>
                                <td>
                                  <label class="switch">
                                    <input class="courselanguage" type="checkbox"  data-id="<?php echo e($cat->id); ?>" name="status"     <?php echo e($cat->status ==1 ? 'checked' : ''); ?>>
                                    <span class="knob"></span>
                                  </label>
                                  </td>

                                  
                                <td>
                                  <?php if(Auth::user()->role == "admin"): ?>
                                  <div class="dropdown">
                                    <button class="btn btn-round btn-outline-primary" type="button" id="CustomdropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="CustomdropdownMenuButton1">
                                     
                                        <a class="dropdown-item"data-toggle="modal" data-target="#edit<?php echo e($cat->id); ?>"><i class="feather icon-edit mr-2"></i><?php echo e(__('Back')); ?>Edit</a>
                                        <a class="dropdown-item btn btn-link" data-toggle="modal" data-target="#delete<?php echo e($cat->id); ?>" >
                                            <i class="feather icon-delete mr-2"></i><?php echo e(__("Delete")); ?></a>
                                        </a>
                                       
                                    </div>
                                </div>
                                <div class="modal fade bd-example-modal-sm" id="edit<?php echo e($cat->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="exampleSmallModalLabel"><?php echo e(__('Back')); ?>Edit CourseLanguage</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                            <form id="demo-form" method="post" action="<?php echo e(url('courselang/'.$cat->id)); ?>

                                              "data-parsley-validate class="form-horizontal form-label-left">
                                          <?php echo e(csrf_field()); ?>

                                          <?php echo e(method_field('PUT')); ?>

                                          
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                <label for="exampleInputSlug"><?php echo e(__('adminstaticword.Name')); ?>: <sup class="redstar">*</sup></label>
                                                <input type="text" class="form-control" name="name" value="<?php echo e($cat->name); ?>" id="exampleInputPassword1" placeholder="<?php echo e(__('adminstaticword.Please')); ?>  <?php echo e(__('adminstaticword.Enter')); ?> <?php echo e(__('adminstaticword.Language')); ?>">
                                              </div>
                                             
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="exampleInputTit1e"><?php echo e(__('adminstaticword.Status')); ?>:</label>
                                                <input type="checkbox" class="custom_toggle" name="status"
                                                <?php echo e($cat->status==1 ? 'checked' : ''); ?>/>
                                  
                                              </div>
                                            </div>
                                  
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <button type="reset" class="btn btn-danger"><i class="fa fa-ban"></i>
                                                <?php echo e(__('Back')); ?>Reset</button>
                                              <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i>
                                                <?php echo e(__('Back')); ?>Update</button>
                                            </div>
                                  
                                            <div class="clear-both"></div>
                                          </div>
                                            </form>
                                          </div>
                                          
                                      </div>
                                  </div>
                              </div> 
                                <!-- delete Modal start -->
                                <div class="modal fade bd-example-modal-sm" id="delete<?php echo e($cat->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleSmallModalLabel">Delete</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                    <h4><?php echo e(__('Are You Sure ?')); ?></h4>
                                                    <p><?php echo e(__('Do you really want to delete')); ?> ? <?php echo e(__('This process cannot be undone.')); ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <form method="post" action="<?php echo e(url('courselang/'.$cat->id)); ?>" class="pull-right">
                                                    <?php echo e(csrf_field()); ?>

                                                    <?php echo e(method_field("DELETE")); ?>

                                                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                    <button type="submit" class="btn btn-danger">Yes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <?php endif; ?>
                                </td>       
                              
          
                               
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



  !--Model for add city -->
<div class="modal fade" id="myModaljjh"  tabindex="-1" role="dialog" aria-labelledby="exampleStandardModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleStandardModalLabel">Add Language</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="demo-form2" method="post" action="<?php echo e(route('courselang.store')); ?>" data-parsley-validate class="form-horizontal form-label-left">
          <?php echo e(csrf_field()); ?>

                  
  
          <div class="row">
            <div class="col-md-12">
              <label for="exampleInputSlug"><?php echo e(__('adminstaticword.Name')); ?>:<sup class="redstar">*</sup></label>
              <input type="text" class="form-control" name="name" id="exampleInputPassword1" placeholder="<?php echo e(__('adminstaticword.Please')); ?> <?php echo e(__('adminstaticword.Enter')); ?> <?php echo e(__('adminstaticword.Language')); ?>" value="">
            </div>
            <br>
            <div class="col-md-12 mt-3">
              <label for="exampleInputDetails"><?php echo e(__('adminstaticword.Status')); ?>:</label>
              <input  class="custom_toggle" id="welmail" type="checkbox" name="status"  checked />

                
              
            </div>
          
          <br>
          <div class="form-group col-md-12 mt-3">
            <button type="reset" class="btn btn-danger-rgba"><i class="fa fa-ban"></i> Reset</button>
            <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                Create</button>
        </div>
              </div>
            </form>
          </div>
           
        </div>
      </div>
    </div>

           
    
  
         
        
          




<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>

      $(document).on("change",".courselanguage",function() { 
        $.ajax({
            type: "GET",
            dataType: "json",
            url: 'courselanguage/status',
            data:   {'status': $(this).is(':checked') ? 1 : 0, 'id': $(this).data('id')},
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
<script>
  $("#checkboxAll").on('click', function () {
$('input.check').not(this).prop('checked', this.checked);
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/course_language/index.blade.php ENDPATH**/ ?>