<?php if($errors->any()): ?>
<div class="alert alert-danger">
  <ul>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($error); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>
</div>
<?php endif; ?>
         
<div class="modal fade" id="myModal7" z-index="1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleSmallModalLabel"><?php echo e(__('Add Subcategory')); ?></h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
          <form action="<?php echo e(route('child.store')); ?>" method="POST">
          <?php echo e(csrf_field()); ?>


          <label for="exampleInputTit1e"><?php echo e(__('adminstaticword.Category')); ?></label>
          <div class="row">
            <div class="col-sm-12">
                <select name="categories" class="form-control select2">
                  <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($cate->id); ?>"><?php echo e($cate->title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <br>
          </div>
          <br>
                
          <div class="row">
            <div class="col-sm-12">
              <label for="exampleInputTit1e"><?php echo e(__('adminstaticword.SubCategory')); ?>:<sup class="redstar">*</sup></label>
              <input type="text" class="form-control" name="title" id="exampleInputTitle" placeholder="Enter Your subcategory" value="">
            </div>
            <br>
          </div>
          <br>

          <div class="row">
            <div class="col-sm-12">
              <label for="exampleInputTit1e"><?php echo e(__('adminstaticword.Slug')); ?>:<sup class="redstar">*</sup></label>
              <input pattern="[/^\S*$/]+" type="text" class="form-control" name="slug" id="exampleInputTitle" placeholder="Enter slug" value="">
            </div>
            <br>
          </div>
          <br>

          <div class="row">
            <div class="col-md-12">
              <label for="exampleInputTit1e"><?php echo e(__('adminstaticword.Icon')); ?>:<sup class="redstar">*</sup></label>
              <input type="text" class="form-control icp-auto icp" name="icon" id="exampleInputTitle" placeholder="Enter your icon" value="">
            </div>
            <br>
            <div class="col-md-12 form-group">
              <label for="exampleInputDetails"><?php echo e(__('adminstaticword.Status')); ?>:</label>
              <br>
               
                <input id="c101"   class="custom_toggle" name="status" type="checkbox" checked/>
                <label class="tgl-btn" data-tg-off="Deactive" data-tg-on="Active" for="c101"></label>
                
               
                <input type="hidden" name="status" value="0" id="t101">
            </div>
          </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary-rgba"><?php echo e(__('adminstaticword.Save')); ?></button>
              </div>
             
            </form>
          </div>
          <!-- /.box -->
 
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
</section> 



<?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/category/childcategory/child.blade.php ENDPATH**/ ?>