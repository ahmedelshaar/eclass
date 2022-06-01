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
                        <table class="table table-striped table-bordered">
                        <thead>
                           
                        <th>#</th>
                        <th><?php echo e(__('adminstaticword.User')); ?></th>
                        <th><?php echo e(__('Class')); ?></th>
                        <th><?php echo e(__('adminstaticword.UsersEnrolled')); ?></th>
                            
                        </thead>
                       
                        <tbody>
                        <?php $i=0;?>
                          <?php $__currentLoopData = $live_attandance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $i++;?>
                            <tr>
                            <td><?php echo $i;?></td>

                              <td>
                                <p><b></b> <?php echo e($course->user['fname']); ?></p>
                              
                              </td>

                              <td>
                                <?php if($course->zoom_id != NULL): ?>
                                <p><b></b> <?php echo e(optional($course->zoom)['meeting_title']); ?></p>
                                <?php endif; ?>
                                <?php if($course->bbl_id != NULL): ?>
                                <p><b></b> <?php echo e(optional($course->bbl)['meetingname']); ?></p>
                                <?php endif; ?>
                                <?php if($course->jitsi_id != NULL): ?>
                                <p><b></b> <?php echo e(optional($course->jitsi)['meeting_title']); ?></p>
                                <?php endif; ?>
                                <?php if($course->google_id != NULL): ?>
                                <p><b></b> <?php echo e(optional($course->google)['meeting_title']); ?></p>
                                <?php endif; ?>
                              
                              </td>
                              <td>
                                <p><b><?php echo e(__('adminstaticword.Attandance')); ?>: </b><?php echo e(date('d-m-Y', strtotime($course->date))); ?> </p>
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
    </div><!-- row end --><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/attandance/liveclass.blade.php ENDPATH**/ ?>