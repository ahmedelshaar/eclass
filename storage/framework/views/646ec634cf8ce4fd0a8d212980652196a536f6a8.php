
<?php $__env->startSection('title', 'My Courses'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- about-home start -->
<section id="wishlist-home" class="wishlist-home-main-block">
    <div class="container">
        <h1 class="wishlist-home-heading"><?php echo e(__('frontstaticword.MyCourses')); ?></h1>
    </div>
</section> 
<!-- about-home end -->

                

<?php
    $user_enrolled = App\Order::where('refunded', '0')->where('user_id', Auth::user()->id)->get();
?>

<?php $__currentLoopData = $user_enrolled; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enrolled): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<?php
    $bigbluemeeting = App\BBL::where('course_id','=',$enrolled->course_id)->where('is_ended','!=',1)->where('link_by','!=', NULL)->get();
    $zoommeeting = App\Meeting::where('course_id','=',$enrolled->course_id)->where('link_by','!=', NULL)->get();
?>

<?php if(count($bigbluemeeting) > 0): ?>
    <section id="learning-courses" class="learning-courses-main-block">
        <div class="container">
            <h4 class="student-heading"><?php echo e(__('frontstaticword.BigBlueMeetings')); ?></h4>
            <div class="row">
                <?php $__currentLoopData = $bigbluemeeting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bbl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <div class="col-lg-3 col-sm-6">
                        
                        <div class="view-block">
                            <div class="view-img">
                                <a href="<?php echo e(route('bbl.detail', $bbl->id)); ?>"><img src="<?php echo e(Avatar::create($bbl['meetingname'])->toBase64()); ?>" alt="course" class="img-fluid"></a>
                            </div>
                            <div class="view-dtl">
                                <div class="view-heading btm-10"><a href="<?php echo e(route('bbl.detail', $bbl->id)); ?>"><?php echo e(str_limit($bbl['meetingname'], $limit = 30, $end = '...')); ?></a></div>
                                <p class="btm-10"><a herf="#"><?php echo e(__('frontstaticword.by')); ?> <?php if(isset($bbl->user)): ?> <?php echo e($bbl->user['fname']); ?> <?php endif; ?> </a></p>

                                <?php if(isset($bbl['start_time'])): ?>

                                <p class="btm-10"><a herf="#">Start At: <?php echo e(date('d-m-Y | h:i:s A',strtotime($bbl['start_time']))); ?></a></p>

                                <?php endif; ?>
                              
                            </div>
                           
                        </div>
                    </div>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if(count($zoommeeting) > 0): ?>
    <section id="learning-courses" class="learning-courses-main-block">
        <div class="container">
            <h4 class="student-heading"><?php echo e(__('frontstaticword.ZoomMeetings')); ?></h4>
            <div class="row">
                <?php $__currentLoopData = $zoommeeting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meeting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <div class="col-lg-3 col-sm-6">
                        
                        <div class="view-block">
                            <div class="view-img">
                                <?php if($meeting['meeting_title'] !== NULL && $meeting['meeting_title'] !== ''): ?>
                                    <a href="<?php echo e(route('zoom.detail', $meeting->id)); ?>"><img src="<?php echo e(Avatar::create($meeting['meeting_title'])->toBase64()); ?>" alt="course" class="img-fluid"></a>
                                <?php endif; ?>
                            </div>
                            <div class="view-dtl">
                                <div class="view-heading btm-10"><?php echo e(str_limit($meeting->meeting_title, $limit = 30, $end = '...')); ?></div>
                                <p class="btm-10"><a herf="#"><?php echo e(__('frontstaticword.by')); ?> <?php if(isset($meeting->user)): ?> <?php echo e($meeting->user['fname']); ?> <?php endif; ?></a></p>

                                <?php if(isset($meeting['start_time'])): ?>

                                <p class="btm-10"><a herf="#">Start At: <?php echo e(date('d-m-Y | h:i:s A',strtotime($meeting['start_time']))); ?></a></p>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php
    $item = App\Order::where('refunded', '0')->where('user_id', Auth::User()->id)->get();
?>

<?php if(count($item) > 0): ?>
    <section id="learning-courses" class="learning-courses-main-block">
        <div class="container">
            <h4 class="student-heading"><?php echo e(__('frontstaticword.MyCourses')); ?></h4>
            <div class="row">
            	<?php $__currentLoopData = $enroll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enrol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($enrol->course_id != NULL): ?>
                        <?php if($enrol->status == 1): ?>
                        	<?php if($enrol->user_id == Auth::User()->id): ?>
                           
                        
                                <div class="col-lg-3 col-sm-6">
                                    
                                    <div class="view-block">
                                        <div class="view-img">
                                            <?php if($enrol->courses['preview_image'] !== NULL && $enrol->courses['preview_image'] !== ''): ?>
                                                <a href="<?php echo e(route('course.content',['id' => $enrol->courses->id, 'slug' => $enrol->courses->slug ])); ?>"><img src="<?php echo e(asset('images/course/'.$enrol->courses->preview_image)); ?>" class="img-fluid" alt="student">
                                                </a>
                                            <?php else: ?>
                                                <a href="<?php echo e(route('course.content',['id' => $enrol->courses->id, 'slug' => $enrol->courses->slug ])); ?>"><img src="<?php echo e(Avatar::create($enrol->courses->title)->toBase64()); ?>" class="img-fluid" alt="student"></a>
                                            <?php endif; ?>
                                        </div>
                                        <div class="view-dtl" style="height: 170px">
                                            <div class="view-heading btm-10"><a href="<?php echo e(route('course.content',['id' => $enrol->courses->id, 'slug' => $enrol->courses->slug ])); ?>"><?php echo e(str_limit($enrol->courses->title, $limit = 35, $end = '...')); ?></a>
                                            </div>
                                            <p class="btm-10"><a href="#">by <?php if(isset($enrol->courses->user)): ?> <?php echo e($enrol->courses->user->fname); ?> <?php endif; ?></a></p>
                                            <div class="rating">
                                                <ul>
                                                    <li>
                                                        <!-- star rating -->
                                                        <?php 
                                                        $learn = 0;
                                                        $price = 0;
                                                        $value = 0;
                                                        $sub_total = 0;
                                                        $sub_total = 0;
                                                        $reviews = App\ReviewRating::where('course_id',$enrol->courses->id)->where('status','1')->get();
                                                        ?> 
                                                        <?php if(!empty($reviews[0])): ?>
                                                            <?php
                                                            $count =  App\ReviewRating::where('course_id',$enrol->courses->id)->count();

                                                            foreach($reviews as $review){
                                                                $learn = $review->price*5;
                                                                $price = $review->price*5;
                                                                $value = $review->value*5;
                                                                $sub_total = $sub_total + $learn + $price + $value;
                                                            }

                                                            $count = ($count*3) * 5;
                                                            $rat = $sub_total/$count;
                                                            $ratings_var = ($rat*100)/5;
                                                            ?>
                                            
                                                            <div class="pull-left">
                                                                <div class="star-ratings-sprite"><span style="width:<?php echo $ratings_var; ?>%" class="star-ratings-sprite-rating"></span>
                                                                </div>
                                                            </div>
                                                        <?php else: ?>
                                                            <div class="pull-left">
                                                                <?php echo e(__('frontstaticword.NoRating')); ?>

                                                            </div>
                                                        <?php endif; ?>
                                                    </li>
                                                    <!-- overall rating -->
                                                    <?php
                                                    $reviews = App\ReviewRating::where('course_id' ,$enrol->courses->id)->get();
                                                    ?>
                                                    <?php 
                                                    $learn = 0;
                                                    $price = 0;
                                                    $value = 0;
                                                    $sub_total = 0;
                                                    $count =  count($reviews);
                                                    $onlyrev = array();

                                                    $reviewcount = App\ReviewRating::where('course_id', $enrol->courses->id)->where('status',"1")->WhereNotNull('review')->get();

                                                    foreach($reviewcount as $review){

                                                        $learn = $review->learn*5;
                                                        $price = $review->price*5;
                                                        $value = $review->value*5;
                                                        $sub_total = $sub_total + $learn + $price + $value;
                                                    }

                                                    $count = ($count*3) * 5;
                                                     
                                                    if($count != "")
                                                    {
                                                        $rat = $sub_total/$count;
                                                 
                                                        $ratings_var = ($rat*100)/5;
                                               
                                                        $overallrating = ($ratings_var/2)/10;
                                                    }
                                                     
                                                    ?>

                                                    <?php
                                                        $reviewsrating = App\ReviewRating::where('course_id', $enrol->courses->id)->first();
                                                    ?>
                                                    <?php if(!empty($reviewsrating)): ?>
                                                    <li>
                                                        <b><?php echo e(round($overallrating, 1)); ?></b>
                                                    </li>
                                                    <?php endif; ?>

                                                    <li>
                                                        (<?php
                                                            $data = App\Order::where('course_id', $enrol->courses->id)->get();
                                                            if(count($data)>0){

                                                                echo count($data);
                                                            }
                                                            else{

                                                                echo "0";
                                                            }
                                                        ?>)
                                                    </li> 
                                                </ul>
                                            </div>
                       

                                            <div class="mycourse-progress">

                                                <?php
                                                    $progress = App\CourseProgress::where('course_id', $enrol->course_id)->where('user_id', Auth::User()->id)->first();
                                                ?>
                                                <?php if(!empty($progress)): ?>
                                                        
                                                    <?php
                                                    
                                                    $total_class = $progress->all_chapter_id;
                                                    $total_count = count($total_class);

                                                    $total_per = 100;

                                                    $read_class = $progress->mark_chapter_id;
                                                    $read_count =  count($read_class);

                                                    $progres = ($read_count/$total_count) * 100;
                                                    ?>

                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: <?php echo $progres; ?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="complete"><?php echo $progres; ?>% <?php echo e(__('frontstaticword.Complete')); ?></div>
                                                <?php else: ?>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="complete"><?php echo e(__('frontstaticword.StartCourse')); ?></div>
                                                <?php endif; ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php else: ?>

                        <?php
                            $bundle_order = App\BundleCourse::where('id', $enrol->bundle_id)->first();
                        ?>

                        <?php $__currentLoopData = $bundle_order->course_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bundle_course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php

                            $coursess = App\Course::where('id', $bundle_course)->first();

                          ?>

                            <div class="col-lg-3 col-sm-6">
                                        
                                <div class="view-block">
                                    <div class="view-img">
                                        <?php if($coursess['preview_image'] !== NULL && $coursess['preview_image'] !== ''): ?>
                                            <a href="<?php echo e(route('course.content',['id' => $coursess->id, 'slug' => $coursess->slug ])); ?>"><img src="<?php echo e(asset('images/course/'.$coursess->preview_image)); ?>" class="img-fluid" alt="student">
                                            </a>
                                        <?php else: ?>
                                            <a href="<?php echo e(route('course.content',['id' => $coursess->id, 'slug' => $coursess->slug ])); ?>"><img src="<?php echo e(Avatar::create($coursess->title)->toBase64()); ?>" class="img-fluid" alt="student"></a>
                                        <?php endif; ?>
                                    </div>
                                    <div class="view-dtl" style="height: 170px">
                                        <div class="view-heading btm-10"><a href="<?php echo e(route('course.content',['id' => $coursess->id, 'slug' => $coursess->slug ])); ?>"><?php echo e(str_limit($coursess->title, $limit = 35, $end = '...')); ?></a></div>
                                        <p class="btm-10"><a href="#">by <?php if(isset($coursess->user)): ?> <?php echo e($coursess->user->fname); ?> <?php endif; ?></a></p>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <!-- star rating -->
                                                    <?php 
                                                    $learn = 0;
                                                    $price = 0;
                                                    $value = 0;
                                                    $sub_total = 0;
                                                    $sub_total = 0;
                                                    $reviews = App\ReviewRating::where('course_id',$coursess->id)->where('status','1')->get();
                                                    ?> 
                                                    <?php if(!empty($reviews[0])): ?>
                                                        <?php
                                                        $count =  App\ReviewRating::where('course_id',$coursess->id)->count();

                                                        foreach($reviews as $review){
                                                            $learn = $review->price*5;
                                                            $price = $review->price*5;
                                                            $value = $review->value*5;
                                                            $sub_total = $sub_total + $learn + $price + $value;
                                                        }

                                                        $count = ($count*3) * 5;
                                                        $rat = $sub_total/$count;
                                                        $ratings_var = ($rat*100)/5;
                                                        ?>
                                        
                                                        <div class="pull-left">
                                                            <div class="star-ratings-sprite"><span style="width:<?php echo $ratings_var; ?>%" class="star-ratings-sprite-rating"></span>
                                                            </div>
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="pull-left">
                                                            <?php echo e(__('frontstaticword.NoRating')); ?>

                                                        </div>
                                                    <?php endif; ?>
                                                </li>
                                                <!-- overall rating -->
                                                <?php
                                                $reviews = App\ReviewRating::where('course_id' ,$coursess->id)->get();
                                                ?>
                                                <?php 
                                                $learn = 0;
                                                $price = 0;
                                                $value = 0;
                                                $sub_total = 0;
                                                $count =  count($reviews);
                                                $onlyrev = array();

                                                $reviewcount = App\ReviewRating::where('course_id', $coursess->id)->where('status',"1")->WhereNotNull('review')->get();

                                                foreach($reviewcount as $review){

                                                    $learn = $review->learn*5;
                                                    $price = $review->price*5;
                                                    $value = $review->value*5;
                                                    $sub_total = $sub_total + $learn + $price + $value;
                                                }

                                                $count = ($count*3) * 5;
                                                 
                                                if($count != "")
                                                {
                                                    $rat = $sub_total/$count;
                                             
                                                    $ratings_var = ($rat*100)/5;
                                           
                                                    $overallrating = ($ratings_var/2)/10;
                                                }
                                                 
                                                ?>

                                                <?php
                                                    $reviewsrating = App\ReviewRating::where('course_id', $coursess->id)->first();
                                                ?>
                                                <?php if(!empty($reviewsrating)): ?>
                                                <li>
                                                    <b><?php echo e(round($overallrating, 1)); ?></b>
                                                </li>
                                                <?php endif; ?>

                                                <li>
                                                    (<?php
                                                        $data = App\Order::where('course_id', $coursess->id)->get();
                                                        if(count($data)>0){

                                                            echo count($data);
                                                        }
                                                        else{

                                                            echo "0";
                                                        }
                                                    ?>)
                                                </li> 
                                            </ul>
                                        </div>

                                        <div class="mycourse-progress">

                                            <?php
                                                $progress = App\CourseProgress::where('course_id', $coursess->id)->where('user_id', Auth::User()->id)->first();
                                            ?>
                                            <?php if(!empty($progress)): ?>
                                                    
                                                <?php
                                                
                                                $total_class = $progress->all_chapter_id;
                                                $total_count = count($total_class);

                                                $total_per = 100;

                                                $read_class = $progress->mark_chapter_id;
                                                $read_count =  count($read_class);

                                                $progres = ($read_count/$total_count) * 100;
                                                ?>

                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: <?php echo $progres; ?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="complete"><?php echo $progres; ?>% <?php echo e(__('frontstaticword.Complete')); ?></div>
                                            <?php else: ?>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <div class="complete"><?php echo e(__('frontstaticword.StartCourse')); ?></div>
                                            <?php endif; ?>

                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php endif; ?>




                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <section id="wishlist-home" class="wishlist-home-main-block">
        <div class="container">
            <h1 class="wishlist-home-heading text-white"><?php echo e(__('frontstaticword.MySubscribedCourses')); ?></h1>
        </div>
    </section>
    <section id="learning-courses" class="learning-courses-main-block">
        <div class="container">
            <div class="row">
                <?php
                $isSubscriptionCoursesFound = false;
                ?>
                <?php $__currentLoopData = $enroll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enrol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($enrol->status === 1 && $enrol->subscription_status==='active'): ?>
                        <?php
                        $bundle_order = App\BundleCourse::where('id', $enrol->bundle_id)->first();
                        ?>

                        <?php $__currentLoopData = $bundle_order->course_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bundle_course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php

                            $coursess = App\Course::where('id', $bundle_course)->first();

                            ?>

                            <div class="col-lg-3 col-sm-6">
                                <?php
                                $isSubscriptionCoursesFound = true;
                                ?>

                                <div class="view-block">
                                    <div class="view-img">
                                        <?php if($coursess['preview_image'] !== null && $coursess['preview_image'] !== ''): ?>
                                            <a href="<?php echo e(url('show/coursecontent', $coursess->id)); ?>"><img
                                                    src="<?php echo e(asset('images/course/' . $coursess->preview_image)); ?>"
                                                    class="img-fluid" alt="student">
                                            </a>
                                        <?php else: ?>
                                            <a href="<?php echo e(url('show/coursecontent', $coursess->id)); ?>"><img
                                                    src="<?php echo e(Avatar::create($coursess->title)->toBase64()); ?>"
                                                    class="img-fluid" alt="student"></a>
                                        <?php endif; ?>
                                    </div>
                                    <div class="view-dtl" style="height: 170px">
                                        <div class="view-heading btm-10"><a
                                                href="<?php echo e(url('show/coursecontent', $coursess->id)); ?>"><?php echo e(str_limit($coursess->title, $limit = 35, $end = '...')); ?></a>
                                        </div>
                                        <p class="btm-10"><a href="#">by <?php echo e($coursess->user->fname); ?></a></p>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <!-- star rating -->
                                                    <?php
                                                    $learn = 0;
                                                    $price = 0;
                                                    $value = 0;
                                                    $sub_total = 0;
                                                    $sub_total = 0;
                                                    $reviews = App\ReviewRating::where('course_id', $coursess->id)
                                                    ->where('status', '1')
                                                    ->get();
                                                    ?>
                                                    <?php if(!empty($reviews[0])): ?>
                                                        <?php
                                                        $count = App\ReviewRating::where('course_id',
                                                        $coursess->id)->count();

                                                        foreach ($reviews as $review) {
                                                        $learn = $review->price * 5;
                                                        $price = $review->price * 5;
                                                        $value = $review->value * 5;
                                                        $sub_total = $sub_total + $learn + $price + $value;
                                                        }

                                                        $count = $count * 3 * 5;
                                                        $rat = $sub_total / $count;
                                                        $ratings_var = ($rat * 100) / 5;
                                                        ?>

                                                        <div class="pull-left">
                                                            <div class="star-ratings-sprite"><span
                                                                    style="width:<?php echo $ratings_var; ?>%"
                                                                    class="star-ratings-sprite-rating"></span>
                                                            </div>
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="pull-left">
                                                            <?php echo e(__('frontstaticword.NoRating')); ?>

                                                        </div>
                                                    <?php endif; ?>
                                                </li>
                                                <!-- overall rating -->
                                                <?php
                                                $reviews = App\ReviewRating::where('course_id'
                                                ,$coursess->id)->get();
                                                ?>
                                                <?php
                                                $learn = 0;
                                                $price = 0;
                                                $value = 0;
                                                $sub_total = 0;
                                                $count = count($reviews);
                                                $onlyrev = [];

                                                $reviewcount = App\ReviewRating::where('course_id', $coursess->id)
                                                ->where('status', '1')
                                                ->WhereNotNull('review')
                                                ->get();

                                                foreach ($reviewcount as $review) {
                                                $learn = $review->learn * 5;
                                                $price = $review->price * 5;
                                                $value = $review->value * 5;
                                                $sub_total = $sub_total + $learn + $price + $value;
                                                }

                                                $count = $count * 3 * 5;

                                                if ($count != '') {
                                                $rat = $sub_total / $count;

                                                $ratings_var = ($rat * 100) / 5;

                                                $overallrating = $ratings_var / 2 / 10;
                                                }
                                                ?>

                                                <?php
                                                $reviewsrating = App\ReviewRating::where('course_id',
                                                $coursess->id)->first();
                                                ?>
                                                <?php if(!empty($reviewsrating)): ?>
                                                    <li>
                                                        <b><?php echo e(round($overallrating, 1)); ?></b>
                                                    </li>
                                                <?php endif; ?>

                                                <li>
                                                    (<?php
                                                    $data = App\Order::where('course_id', $coursess->id)->get();
                                                    if(count($data)>0){

                                                    echo count($data);
                                                    }
                                                    else{

                                                    echo "0";
                                                    }
                                                    ?>)
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="mycourse-progress">

                                            <?php $progress = App\CourseProgress::where('course_id',
                                            $coursess->id)
                                            ->where('user_id', Auth::User()->id)
                                            ->first(); ?>
                                            <?php if(!empty($progress)): ?>

                                                <?php
                                                $total_class = $progress->all_chapter_id;
                                                $total_count = count($total_class);

                                                $total_per = 100;

                                                $read_class = $progress->mark_chapter_id;
                                                $read_count = count($read_class);

                                                $progres = ($read_count / $total_count) * 100;
                                                ?>

                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-success"
                                                        role="progressbar"
                                                        style="width: <?php echo $progres; ?>%"
                                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <div class="complete"><?php echo $progres; ?>% <?php echo e(__('frontstaticword.Complete')); ?></div>
                                            <?php else: ?>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-success"
                                                        role="progressbar" style="width: 0%" aria-valuenow="100"
                                                        aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <div class="complete"><?php echo e(__('frontstaticword.StartCourse')); ?></div>
                                            <?php endif; ?>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <?php if(!$isSubscriptionCoursesFound): ?>
        <section id="no-result-block" class="no-result-block">
            <div class="container">
                <div class="no-result-courses"><?php echo e(__('frontstaticword.WhenSubscribe')); ?>&nbsp;<a
                        href="<?php echo e(url('/')); ?>"><b><?php echo e(__('frontstaticword.Browse')); ?></b></a></div>
            </div>
        </section>
    <?php endif; ?>
<?php else: ?>
    <section id="no-result-block" class="no-result-block">
        <div class="container">
            <div class="no-result-courses"><?php echo e(__('frontstaticword.whenenroll')); ?>&nbsp;<a href="<?php echo e(url('/')); ?>"><b><?php echo e(__('frontstaticword.Browse')); ?></b></a></div>
        </div>
    </section>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/front/my_course.blade.php ENDPATH**/ ?>