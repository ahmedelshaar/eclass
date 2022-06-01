
<?php $__env->startSection('title','Create a new childcategories'); ?>
<?php $__env->startSection('breadcum'); ?>
<?php $__env->startComponent('components.breadcumb',['secondaryactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
   <?php echo e(__('ChildCategories')); ?>

<?php $__env->endSlot(); ?>

<?php $__env->slot('menu1'); ?>
   <?php echo e(__('ChildCategories')); ?>

<?php $__env->endSlot(); ?>

<?php $__env->slot('button'); ?>

<div class="col-md-4 col-lg-4">
    <div class="widgetbar">
      <button type="button" class="float-right btn btn-danger-rgba mr-2 " data-toggle="modal" data-target="#bulk_delete"><i
        class="feather icon-trash mr-2"></i> <?php echo e(__('Delete Selected')); ?></button>
        <button type="button" class="float-right btn btn-primary-rgba mr-2" data-toggle="modal" data-target="#create">
          <i class="feather icon-plus mr-2"></i><?php echo e(__("Add Childcategory")); ?></button>


              
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
                  <h5 class="card-box"><?php echo e(__('All Childcategories')); ?></h5>
              </div>
              <div class="card-body">
              
                  <div class="table-responsive">
                      <table id="datatable-buttons" class="table table-striped table-bordered">
                          <thead>
                          <tr>
                              <th>
                                <input id="checkboxAll" type="checkbox" class="filled-in" name="checked[]"
                                value="all" />
                            <label for="checkboxAll" class="material-checkbox"></label>  #</th>
                  <th><?php echo e(__('adminstaticword.SubCategory')); ?></th>
                  <th><?php echo e(__('adminstaticword.ChildCategory')); ?></th>
                  <th><?php echo e(__('adminstaticword.Icon')); ?></th>
                  <th><?php echo e(__('adminstaticword.Status')); ?></th>
                  <th><?php echo e(__('adminstaticword.Action')); ?></th>
    
                </tr>
              </thead>
              <tbody>
                <?php $i=0;?>
                <?php $__currentLoopData = $childcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $i++;?>
                <tr>
                  <td>  <input type='checkbox' form='bulk_delete_form' class='check filled-in material-checkbox-input'
                    name='checked[]' value='<?php echo e($cat->id); ?>' id='checkbox<?php echo e($cat->id); ?>'>
                <label for='checkbox<?php echo e($cat->id); ?>' class='material-checkbox'></label>
                <?php echo $i; ?>
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
                                action="<?php echo e(route('childcategories.bulk_delete')); ?>">
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
                  <td><?php if(isset($cat->subcategory)): ?><?php echo e($cat->subcategory->title); ?><?php endif; ?></td>
                  <td><?php echo e($cat->title); ?></td>
                  <td>
                    <div class="index-image">
                      <i class="fa <?php echo e($cat->icon); ?>"></i>
                    </div>
                  </td>
                  <td>
                    <form action="<?php echo e(route('childcategory.quick',$cat->id)); ?>" method="POST">
                      <?php echo e(csrf_field()); ?>

                      <label class="switch">
                        <input class="childcategory" type="checkbox"  data-id="<?php echo e($cat->id); ?>" name="status" <?php echo e($cat->status == '1' ? 'checked' : ''); ?>>
                        <span class="knob"></span>
                      </label>
                    
                    </form>
                  </td>
                  <td>
                    <div class="dropdown">
                        <button class="btn btn-round btn-outline-primary" type="button" id="CustomdropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                        <div class="dropdown-menu" aria-labelledby="CustomdropdownMenuButton1">
                            <a class="dropdown-item" data-toggle="modal" data-target="#edit<?php echo e($cat->id); ?>"><i class="feather icon-edit mr-2"></i><?php echo e(__('Edit')); ?></a>
                            <a class="dropdown-item btn btn-link" data-toggle="modal" data-target="#delete<?php echo e($cat->id); ?>" >
                                <i class="feather icon-delete mr-2"></i><?php echo e(__("Delete")); ?></a>
                            </a>
                        </div>
                    </div>
                    <div class="modal fade bd-example-modal-sm" id="edit<?php echo e($cat->id); ?>" role="dialog" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleSmallModalLabel"><?php echo e(__('Edit ChildCategories')); ?></h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                <form id="demo-form" method="post" action="<?php echo e(action('ChildcategoryController@update', $cat->id)); ?>" data-parsley-validate class="form-horizontal form-label-left" autocomplete="off">
                                  <?php echo e(csrf_field()); ?>

                                  <?php echo e(method_field('PUT')); ?>

                      
                                  <div class="row">
                                    <div class="col-md-12">
                                      <label for="exampleInputSlug"><?php echo e(__('adminstaticword.SelectCategory')); ?></label>
                                      <select name="category_id" id="category_id" class="form-control select2">
                                        <?php
                                          $category = App\Categories::all();
                                        ?>  
                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option <?php echo e($cat->category_id == $caat->id ? 'selected' : ""); ?> value="<?php echo e($caat->id); ?>"><?php echo e($caat->title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                      </select>
                                    </div>
                                  </div>
                                  <br>
                      
                                  <div class="row">
                                    <div class="col-md-12">
                                      <label for="exampleInputSlug"><?php echo e(__('adminstaticword.SelectSubCategory')); ?></label>
                                      <select name="subcategory_id" id="upload_id" class="form-control select2">
                                        <?php
                                          $subcategory = App\SubCategory::all();
                                        ?>  
                                        <?php $__currentLoopData = $subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option <?php echo e($cat->subcategory_id == $caat->id ? 'selected' : ""); ?> value="<?php echo e($caat->id); ?>"><?php echo e($caat->title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                      </select>
                                    </div>
                                  </div>
                                  <br>
                      
                                  <div class="row">
                                    <div class="col-md-12">
                                      <label for="title"><?php echo e(__('adminstaticword.Title')); ?>:<span class="redstar">*</span></label>
                                      <input type="text" class="form-control" name="title" id="exampleInputTitle" value="<?php echo e($cat->title); ?>">
                                    </div>
                                  </div>
                                  <br>
                      
                                  <div class="row">
                                    <div class="col-md-12">
                                      <label for="slug"><?php echo e(__('adminstaticword.Slug')); ?>:<span class="redstar">*</span></label>
                                      <input pattern="[/^\S*$/]+" type="text" class="form-control" name="slug" id="exampleInputTitle" value="<?php echo e($cat->slug); ?>">
                                    </div>
                                  </div>
                                  <br>
                      
                                  <div class="row">
                                    <div class="col-md-12">
                                      <label for="icon"><?php echo e(__('adminstaticword.Icon')); ?>:<span class="redstar">*</span></label>
                                      <div class="input-group">
                                        <input type="text" class="form-control iconvalue" name="icon" value="<?php echo e($cat->icon); ?>">
                                        <span class="input-group-append">
                                            <button  type="button" class="btnicon btn btn-outline-secondary" role="iconpicker"></button>
                                        </span>
                                    </div>
                                    </div>
                                  </div>
                                  <br>
                                  
                                  <div class="row">
                                    <div class="col-md-12">
                                      <label for="exampleInputDetails"><?php echo e(__('adminstaticword.Status')); ?>:<sup
                                        class="redstar text-danger">*</sup></label><br>
                                    <input id="status" type="checkbox" class="custom_toggle" name="status" <?php echo e($cat->status == '1' ? 'checked' : ''); ?> />
                                    <input type="hidden" name="free" value="0" for="status" id="status">
                                      
                                    </div>
                                  </div>
                                  <br>
                      
                                  
                              <div class="form-group">
                                <button type="reset" class="btn btn-danger"><i class="fa fa-ban"></i>
                                  <?php echo e(__('Reset')); ?></button>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i>
                                  <?php echo e(__('Update')); ?></button>
                              </div>
                         
                        <div class="clear-both"></div>
                                  </div>

                                </form>
                          </div>
                      </div>
                  </div>

                    
                    <!-- delete Modal start -->
                    <div class="modal fade bd-example-modal-sm" id="delete<?php echo e($cat->id); ?>" role="dialog" aria-hidden="true">
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
                                    <form method="post" action="<?php echo e(action('ChildcategoryController@destroy', $cat->id)); ?>" class="pull-right">
                                        <?php echo e(csrf_field()); ?>

                                        <?php echo e(method_field("DELETE")); ?>

                                        <button type="reset" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('No')); ?></button>
                                        <button type="submit" class="btn btn-primary"><?php echo e(__('Yes')); ?></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- delete Model ended -->

                </td>
    
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
          
          
           <div class="modal fade bd-example-modal-sm" id="create" role="dialog" aria-hidden="true">
            <div class="modal-dialog col-md">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleSmallModalLabel"><?php echo e(__('Add Childcategory')); ?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form id="demo-form2" method="post" action="<?php echo e(url('childcategory')); ?>" data-parsley-validate class="form-horizontal form-label-left" autocomplete="off">
                    <?php echo e(csrf_field()); ?>

                      <div class="row">
                   <div class="col-md-12">
                        <label for="exampleInputTit1e"><?php echo e(__('adminstaticword.Category')); ?></label>
                        <select name="category_id" id="category_id" class="form-control select2">
                          <option value="0"><?php echo e(__('adminstaticword.PleaseSelect')); ?> <?php echo e(__('adminstaticword.Category')); ?></option>
                          <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->title); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                    </div>
                      <div class="row">
                      <div class="col-md-10">
                        <label for="exampleInputTit1e"><?php echo e(__('adminstaticword.SubCategory')); ?></label>
                        <select name="subcategories"  mt-6name="subcategories" id="upload_id" class="form-control select2">
                          <option value="0"><?php echo e(__('adminstaticword.PleaseSelect')); ?> <?php echo e(__('adminstaticword.SubCategory')); ?></option>
                          <?php $__currentLoopData = $subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->title); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
        
                      <div class="col-md-2">
                        <br>
                        <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#myModal7" title="AddCategory" class="btn btn-md btn-primary">+</button>
                      </div>
                    </div>
                    <br>       
                           
                    <div class="row">
                      <div class="col-md-12">
                        <label for="exampleInputTit1e"><?php echo e(__('adminstaticword.Title')); ?>:<sup class="redstar">*</sup></label>
                        <input type="text" class="form-control" name="titlec" id="exampleInputTitle" placeholder="Please Enter your childcategory" value="">
                      </div>
        
        
                      <div class="col-md-12">
                        <label for="exampleInputTit1e"><?php echo e(__('adminstaticword.Slug')); ?>:<sup class="redstar">*</sup></label>
                        <input pattern="[/^\S*$/]+" type="text" class="form-control" name="slugc" id="exampleInputTitle" placeholder="Please Enter slug" value="">
                      </div>
                 
                    
                     
                    </div>
                    <br>
        
                    <div class="row">
        
                       <div class="col-md-12">
                        <label for="exampleInputTit1e"><?php echo e(__('adminstaticword.Icon')); ?>:<sup class="redstar">*</sup></label>
                        
                        <div class="input-group">
                          <input type="text" class="form-control iconvalue" name="iconc" value="Choose icon">
                          <span class="input-group-append">
                              <button  type="button" class="btnicon btn btn-outline-secondary" role="iconpicker"></button>
                          </span>
                      </div>
                      </div>
        
        
                      <div class="col-md-6">
                        <label for="exampleInputDetails"><?php echo e(__('adminstaticword.Status')); ?>:</label>
                        <br>
                        <input class="custom_toggle"  type="checkbox" name="status"  checked />
        
                           
                          <label class="tgl-btn" data-tg-off="Disable" data-tg-on="Enable" for="status"></label>
                        
                        <input type="hidden"  name="free" value="0" for="status" id="status">
                      </div>
                    </div>
                    <br>
        
                    <div class="box-footer">
                      <button type="submit" class="btn btn-lg col-md-3 btn-primary"><?php echo e(__('adminstaticword.Save')); ?></button>
                    </div>
              
                </div>

              </div>
            </div>
        </div>

          

      </div>
  </div>
</div>
<!-- End col -->
</div>
<!-- End row -->
</div>
<?php echo $__env->make('admin.category.childcategory.child', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
 
      $(document).on("change",".childcategory",function() { 
        $.ajax({
            type: "GET",
            dataType: "json",
            url: 'childcategories/status',
            data:{'status': $(this).is(':checked') ? 1 : 0, 'id': $(this).data('id')},
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
<script>
  (function($) {
    "use strict";
  
    $(function() {
      var urlLike = '<?php echo e(url('admin/dropdown')); ?>';
      $('#category_id').change(function() {
        var up = $('#upload_id').empty();
        var cat_id = $(this).val();    
        if(cat_id){
          $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:"GET",
            url: urlLike,
            data: {catId: cat_id},
            success:function(data){   
              console.log(data);
              up.append('<option value="0">Please Choose</option>');
              $.each(data, function(id, title) {
                up.append($('<option>', {value:id, text:title}));
              });
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
              console.log(XMLHttpRequest);
            }
          });
        }
      });
    });
  
  })(jQuery);
  </script> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/category/childcategory/index.blade.php ENDPATH**/ ?>