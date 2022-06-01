<div class="card btm-10">
    <div class="card-header" id="headingChapter<?php echo e($coursechapter->id); ?>">
        <div class="mb-0">
            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseChapter<?php echo e($coursechapter->id); ?>" aria-expanded="true" aria-controls="collapseChapter">
                <div class="course-check-table">
                <table class="table">  
                    <tbody>
                        <tr>
                        <td width="10px">
                            <div class="form-check">
                                <input class="form-check-input filled-in material-checkbox-input" type="checkbox" name="checked[]" value="<?php echo e($coursechapter->id); ?>" id="checkbox<?php echo e($coursechapter->id); ?>"  <?php echo e(isset($progress->mark_chapter_id) && in_array($coursechapter->id, $progress->mark_chapter_id) ? "checked" : ""); ?> >
                                <label class="form-check-label" for="invalidCheck">
                                </label>
                            </div>
                        </td>
                        
                        <td>
                            <div class="row">
                                <div class="col-lg-6 col-6">
                                    <div class="section"><?php echo e(__('frontstaticword.Section')); ?>: <?php echo $i;?></div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="section-dividation text-right">
                                        <?php
                                            $classone = App\CourseClass::where('coursechapter_id', $coursechapter->id)->count();
                                            if($classone>0){

                                                echo $classone;
                                            }
                                            else{

                                                echo "0";
                                            }
                                        ?>
                                        <?php echo e(__('frontstaticword.Classes')); ?>

                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-8">
                                    <div class="profile-heading"><?php echo e($coursechapter->chapter_name); ?>

                                    </div>
                                </div>
                                <div class="col-lg-2 col-4">
                                    <div class="text-right">
                                        <?php
                                        $classtwo =  App\CourseClass::where('coursechapter_id', $coursechapter->id)->sum("duration");
                                        echo $duration_round2 = round($classtwo,2);
                                        ?>
                                        
                                        <?php echo e(__('frontstaticword.min')); ?>


                                        <?php if($coursechapter->file != NULL): ?>
                                        <a href="<?php echo e(asset('files/material/'.$coursechapter->file)); ?>" download="<?php echo e($coursechapter->file); ?>" title="Learning Material"><i class="fa fa-download"></i></a>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                        </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </button>
        </div>
    </div>
    <div id="collapseChapter<?php echo e($coursechapter->id); ?>" class="collapse" aria-labelledby="headingChapter" data-parent="#accordion">

        <?php

            $mytime = Carbon\Carbon::now();
        ?>
        <?php $__currentLoopData = $coursechapter->courseclass->sortBy('position'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <?php if(Auth::user()->role == "user" && $course->drip_enable == 1 && $class->drip_type != NULL): ?>

                <?php if($class->drip_type == 'date' && $class->drip_date != NULL): ?>

                    <?php if($today >= $class->drip_date): ?>

                        <?php echo $__env->make('include.course_class', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php endif; ?>

                <?php elseif($class->drip_type == 'days' && $class->drip_days != NULL): ?>

                    <?php
                        $order = App\Order::where('status', '1')->where('user_id', Auth::User()->id)->where('course_id', $course->id)->first();
                        $days = $class->drip_days;
                        
                        $orderDate = optional($order)['created_at'];


                        $bundle = App\Order::where('user_id', Auth::User()->id)->where('bundle_id', '!=', NULL)->get();

                        $course_id = array();

                        foreach($bundle as $b)
                        {
                           $bundle = App\BundleCourse::where('id', $b->bundle_id)->first();
                            array_push($course_id, $bundle->course_id);
                        }

                        $course_id = array_values(array_filter($course_id));
                        $course_id = array_flatten($course_id);

                        if($orderDate != NULL){
                            $startDate = date("Y-m-d", strtotime("$orderDate +$days days"));
                        }
                        elseif(isset($course_id) && in_array($course->id, $course_id)){
                            $startDate = date("Y-m-d", strtotime("$bundle->created_at +$days days"));
                        }
                    ?>

                    <?php if($today >= $startDate): ?>

                        <?php echo $__env->make('include.course_class', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php endif; ?>

                <?php endif; ?>
            <?php else: ?>

                <?php echo $__env->make('include.course_class', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php endif; ?>


        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/include/course_chapter.blade.php ENDPATH**/ ?>