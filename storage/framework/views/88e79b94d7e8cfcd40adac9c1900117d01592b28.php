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
                   
                    </div>
                    </div>
                </div>
                </div>
                <!-- to show add button end -->
                <!-- card body started -->
                <div class="card-body">
                <div class="table-responsive">

                        <!-- table to display language start -->
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                           
                            <th><?php echo e(__('adminstaticword.Course')); ?></th>
                            <th><?php echo e(__('adminstaticword.UsersEnrolled')); ?></th>
                            
                        </thead>
                       
                        <tbody>
                        <?php $i=0;?>
                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $i++;?>
                            <tr>
                            <td><?php echo $i;?></td>
                            
                            <td>
                            <p><b><?php echo e(__('adminstaticword.course')); ?>:</b> <?php echo e($course['title']); ?></p>
                          </td>
                          <td>
                          <a href="<?php echo e(route('enrolled.users',$course->id)); ?>" class="btn btn-primary"><?php echo e(__('adminstaticword.UsersEnrolled')); ?></a>
                          </td>
                                
                            </tr> 
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                       
                        </table>                  
                        <!-- table to display language data end -->                
                    </div><!-- table-responsive div end -->
                </div><!-- card body end -->
            </div><!-- card end -->
        </div><!-- col end -->
    </div><!-- row end --><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/attandance/index.blade.php ENDPATH**/ ?>