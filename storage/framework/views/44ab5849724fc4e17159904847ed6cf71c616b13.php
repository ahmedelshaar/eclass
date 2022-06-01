
<?php $__env->startSection('title', 'Compare'); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>
    .compare-image{
        height:150px;
        width:150px;
    }
</style>
<!-- about-home start -->
<section id="blog-home" class="blog-home-main-block">
    <div class="container">
        <h1 class="blog-home-heading"><?php echo e(__('Course Compare')); ?></h1>
    </div>
</section> 

<section id="blog" class="blog-main-block">
    <div class="container">
       
      <div class="row">
          <div class="col-md-12">
            <div class="card-body">
                <!-- Start table div -->
                <div class="table-responsive">
                    <!-- Start table-->
                    <table  class="table table-striped table-bordered">
                       
                        
                        <tbody class="bg-white">
                            <tr>
                                <td>
                                    
                                </td>
                                <?php $__currentLoopData = $compare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                $c = App\Course::where('id', $cour->course_id)->first();
                                ?>
                                <td>
                                    <img src="<?php echo e(asset('images/course/'.$c->preview_image)); ?>" alt="course" class="img-fluid compare-image">
                                <h5 class="text-info mt-2"><?php echo e($c->title); ?></h5>

                                </td>
                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                            </tr>
                        </tbody>
                        <tbody>
                            <tr class="bg-white">
                                <td>
                                  <h5>Price</h5> 
                                </td>
                                <?php $__currentLoopData = $compare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                    $c = App\Course::where('id', $cour->course_id)->first();
                                    ?>
                                    <td><?php echo e($c->price); ?></td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>
                                 <h5>Discount Price</h5>  
                                </td>
                                <?php $__currentLoopData = $compare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                    $c = App\Course::where('id', $cour->course_id)->first();
                                    ?>
                                    <td><?php if($c->discount_price): ?>
                                        <?php echo e($c->discount_price); ?>

                                        <?php else: ?>
                                        <i class="fa fa-times text-danger" aria-hidden="true"></i>
                                        <?php endif; ?>
                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                            </tr>
                        </tbody >
                        <tbody>
                            <tr class="bg-white">
                                <td>
                                  <h5>Language</h5>  
                                </td>
                                <?php $__currentLoopData = $compare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                $c = App\Course::where('id', $cour->course_id)->first();
                                ?>
                                <?php
                                $lang = App\Language::where('id', $c->language_id)->first();
                                ?>
                               <td>
                               <p><?php echo e($lang->name); ?></p>
                               </td>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>
                                 <h5>Last updated at</h5>   
                                </td>
                                <?php $__currentLoopData = $compare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                $c = App\Course::where('id', $cour->course_id)->first();
                                ?>
                               
                               <td>
                               <p><?php echo e(date('d-M-Y', strtotime($c->updated_at))); ?></p>
                               </td>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        </tbody>
                        <tbody >
                            <tr class="bg-white">
                                <td>
                                    <h5>Duration end time</h5>
                                    
                                </td>
                                <?php $__currentLoopData = $compare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                $c = App\Course::where('id', $cour->course_id)->first();
                                ?>
                               
                               <td>
                                <p><?php if($c->duration && $c->duration_type): ?>
                                    <?php echo e($c->duration); ?>  <?php echo e($c->duration_type); ?>

                                    <?php else: ?>
                                    <span class="badge badge-pill badge-primary">Life time </span>
                                 <?php endif; ?>

                                </p>
                                </td>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>
                                   <h5>Requirements</h5> 
                                </td>
                                <?php $__currentLoopData = $compare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                $c = App\Course::where('id', $cour->course_id)->first();
                                ?>
                               
                               <td>
                                <p><?php echo e($c->requirement); ?></p>
                                </td>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr class="bg-white">
                                <td>
                                 <h5>Short Detail</h5>   
                                </td>
                                <?php $__currentLoopData = $compare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                $c = App\Course::where('id', $cour->course_id)->first();
                                ?>
                               
                               <td>
                                <p><?php echo e($c->short_detail); ?></p>
                                </td>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>
                                   <h5>Category</h5> 
                                </td>
                                <?php $__currentLoopData = $compare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $c = App\Course::where('id', $cour->course_id)->first();
                                ?>
                                <?php
                                    $cate = App\Categories::where('id', $c->category_id)->first();
                                ?>
                               <td>
                                <p><?php echo e($cate->title); ?></p>
                                </td>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr class="bg-white">
                                <td>
                                  <h5>Sub Category</h5>  
                                </td>
                                <?php $__currentLoopData = $compare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $c = App\Course::where('id', $cour->course_id)->first();
                                ?>
                                <?php
                                    $subcate = App\SubCategory::where('id', $c->subcategory_id)->first();
                                ?>
                               <td>
                                <p><?php echo e($subcate->title); ?></p>
                                </td>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>
                                   <h5>Certificate</h5> 
                                </td>
                                <?php $__currentLoopData = $compare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $c = App\Course::where('id', $cour->course_id)->first();
                                ?>
                               
                               <td>
                                <p><?php if($c->certificate_enable == 1): ?></p>
                                <i class="fa fa-check-circle text-success" aria-hidden="true"></i>
                                  <?php else: ?>
                                  <i class="fa fa-times text-danger" aria-hidden="true"></i>
                                  <?php endif; ?>

                                </td>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr class="bg-white">
                                <td>
                                   <h5>Appointment</h5> 
                                </td>
                                <?php $__currentLoopData = $compare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $c = App\Course::where('id', $cour->course_id)->first();
                                ?>
                               
                               <td>
                                <p><?php if($c->appointment_enable == 1): ?></p>
                                <i class="fa fa-check-circle text-success" aria-hidden="true"></i>
                                  <?php else: ?>
                                  <i class="fa fa-times text-danger" aria-hidden="true"></i>
                                  <?php endif; ?>

                                </td>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>
                                   <h5>Assignment</h5> 
                                </td>
                                <?php $__currentLoopData = $compare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $c = App\Course::where('id', $cour->course_id)->first();
                                ?>
                               
                               <td>
                                <p><?php if($c->assignment_enable == 1): ?></p>
                                <i class="fa fa-check-circle text-success" aria-hidden="true"></i>
                                  <?php else: ?>
                                  <i class="fa fa-times text-danger" aria-hidden="true"></i>
                                  <?php endif; ?>

                                </td>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr class="bg-white">
                                <td>
                                    
                                </td>
                                <?php $__currentLoopData = $compare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               
                               
                               <td>
                               <a href="<?php echo e(route('compare.remove',['id' => $cour->id])); ?>"><span class="badge badge-danger"><?php echo e(__("Remove")); ?></span></a> 

                                </td>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        </tbody>
                    </table>
                    <!-- end table -->
                </div>
                <!-- end table div -->
            </div>
          </div>
      </div>
                   
                      
                        

    </div>
    <hr>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/front/compare/index.blade.php ENDPATH**/ ?>