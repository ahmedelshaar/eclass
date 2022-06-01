
<?php $__env->startSection('title', "$course->title"); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('meta_tags'); ?>

<?php
    $url =  URL::current();
?>

<meta name="title" content="<?php echo e($course['title']); ?>">
<meta name="description" content="<?php echo e($course['short_detail']); ?> ">
<meta property="og:title" content="<?php echo e($course['title']); ?> ">
<meta property="og:url" content="<?php echo e($url); ?>">
<meta property="og:description" content="<?php echo e($course['short_detail']); ?>">
<meta property="og:image" content="<?php echo e(asset('images/course/'.$course['preview_image'])); ?>">
<meta itemprop="image" content="<?php echo e(asset('images/course/'.$course['preview_image'])); ?>">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="<?php echo e(asset('images/course/'.$course['preview_image'])); ?>">
<meta property="twitter:title" content="<?php echo e($course['title']); ?> ">
<meta property="twitter:description" content="<?php echo e($course['short_detail']); ?>">
<meta name="twitter:site" content="<?php echo e(url()->full()); ?>" />
<link rel="canonical" href="<?php echo e(url()->full()); ?>"/>
<meta name="robots" content="all">
<meta name="keywords" content="<?php echo e($gsetting->meta_data_keyword); ?>">
    
<?php $__env->stopSection(); ?>

<section id="about-bar-fixed">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="about-home-heading"><?php echo e($course['title']); ?></h1>
                <ul>
                    <li>
                        <?php
                        $learn = 0;
                        $price = 0;
                        $value = 0;
                        $sub_total = 0;
                        $sub_total = 0;
                        $reviews = App\ReviewRating::where('course_id',$course->id)->where('status','1')->get();
                        ?>
                        <?php if(!empty($reviews[0])): ?>
                            <?php
                            $count =  App\ReviewRating::where('course_id',$course->id)->count();

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
                            <div class="no-rating">
                                <?php echo e(__('frontstaticword.NoRating')); ?>

                            </div>
                        <?php endif; ?>
                    </li>

                    <?php
                        $learn = 0;
                        $price = 0;
                        $value = 0;
                        $sub_total = 0;
                        $count =  count($reviews);
                        $onlyrev = array();

                        $reviewcount = App\ReviewRating::where('course_id', $course->id)->where('status',"1")->WhereNotNull('review')->get();

                    foreach($reviews as $review){

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


                    <?php if(! $reviews->isEmpty()): ?>
                    <li>
                        <?php echo e(round($overallrating, 1)); ?> <?php echo e(__('frontstaticword.rating')); ?>

                    </li>
                    <?php endif; ?>
                    <li>
                        (<?php
                            $data = App\ReviewRating::where('course_id', $course->id)->count();
                            if(($data)>0){

                                echo $data;
                            }
                            else{

                                echo "0";
                            }
                        ?> <?php echo e(__('frontstaticword.Reviews')); ?>)
                    </li>
                    <li>
                        <?php
                            $data = App\Order::where('course_id', $course->id)->count();
                            if(($data)>50){

                                echo $data;
                            }
                            else{

                                echo "+50";
                            }
                        ?>
                        <?php echo e(__('frontstaticword.studentsenrolled')); ?>

                    </li>
                </ul>
            </div>
            <div class="col-lg-4">
            </div>
        </div>
    </div>
</section>
<!-- course detail header start -->
<section id="about-home" class="about-home-main-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="about-home-block">
                    <h1 class="about-home-heading"><?php echo e($course['title']); ?></h1>
                    <p><?php echo e($course['short_detail']); ?></p>
                    <ul>
                        <li>
                            <?php
                            $learn = 0;
                            $price = 0;
                            $value = 0;
                            $sub_total = 0;
                            $sub_total = 0;
                            $reviews = App\ReviewRating::where('course_id',$course->id)->where('status','1')->get();
                            ?>
                            <?php if(!empty($reviews[0])): ?>
                                <?php
                                $count =  App\ReviewRating::where('course_id',$course->id)->count();

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
                                <div class="no-rating">
                                    <?php echo e(__('frontstaticword.NoRating')); ?>

                                </div>
                            <?php endif; ?>
                        </li>

                        <?php
                            $learn = 0;
                            $price = 0;
                            $value = 0;
                            $sub_total = 0;
                            $count =  count($reviews);
                            $onlyrev = array();

                            $reviewcount = App\ReviewRating::where('course_id', $course->id)->where('status',"1")->WhereNotNull('review')->get();

                        foreach($reviews as $review){

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


                        <?php if(! $reviews->isEmpty()): ?>
                        <li>
                            <?php echo e(round($overallrating, 1)); ?> <?php echo e(__('frontstaticword.rating')); ?>

                        </li>
                        <?php endif; ?>
                        <li>
                            (<?php
                                $data = App\ReviewRating::where('course_id', $course->id)->get();
                                if(count($data)>0){

                                    echo count($data);
                                }
                                else{

                                    echo "0";
                                }
                            ?> <?php echo e(__('frontstaticword.Reviews')); ?>)
                        </li>
                        <li>
                            <?php
                                $data = App\Order::where('course_id', $course->id)->get();
                                if(count($data)>100){

                                    echo count($data);
                                }
                                else{

                                    echo "+50";
                                }
                            ?>
                            <?php echo e(__('frontstaticword.studentsenrolled')); ?>

                        </li>
                    </ul>
                    <ul>

                        <?php
                            $fullname = isset($course->user['fname']) . ' ' . isset($course->user['lname']);
                            $fullname = preg_replace('/\s+/', '', $fullname);
                        ?>

                        <li><a href="#" title="about"><?php echo e(__('frontstaticword.Created')); ?>: <?php if(isset($course->user)): ?> <a class="font-weight-bold" href="#instructor" title="instructor"> <?php echo e($course->user['fname']); ?> <?php echo e($course->user['lname']); ?> </a> <?php endif; ?></a></li>
                        <li><a href="#" title="about"><?php echo e(__('frontstaticword.LastUpdated')); ?>: <?php echo e(date('jS F Y', strtotime($course['updated_at']))); ?></a></li>
                        <?php if($course['language_id'] == !NULL): ?>
                        <?php if(isset($course->language)): ?>
                        <li><a href="#" title="about"><i class="fa fa-comment"></i></a> <?php echo e($course->language['name']); ?></li>
                        <?php endif; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <!-- course preview -->
            <div class="col-lg-4">
                
                <div class="about-home-product">
                    <div class="video-item hidden-xs">
                        <script type="text/javascript">
                        <?php if($course->video !=""): ?>
                        var video_url = '<iframe src="<?php echo e(asset('video/preview/'.$course['video'])); ?>" frameborder="0" allowfullscreen></iframe>';
                        <?php endif; ?>
                        <?php if($course->url !=""): ?>
                        var video_url = '<iframe src="<?php echo e(str_replace('watch?v=','embed/',$course['url'])); ?>" frameborder="0" allowfullscreen></iframe>';
                        <?php endif; ?>
                        </script>

                        <div class="video-device">
                            <?php if($course['preview_image'] !== NULL && $course['preview_image'] !== ''): ?>
                                <img src="<?php echo e(asset('images/course/'.$course['preview_image'])); ?>" class="bg_img img-fluid" alt="Background">
                            <?php else: ?>
                                <img src="<?php echo e(Avatar::create($course->title)->toBase64()); ?>" class="bg_img img-fluid" alt="Background">
                            <?php endif; ?>
                            <?php if($course->video !="" || $course->url !=""): ?>
                            <div class="video-preview">
                                <a href="javascript:void(0);" class="btn-video-play"><i class="fa fa-play"></i></a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div id="bar-fixed">
                        <div class="about-home-dtl-training">
                            <div class="about-home-dtl-block btm-10">
                            <?php if($course->type == 1): ?>
                                <div class="about-home-rate">
                                    <ul>

                                        <?php if($course->discount_price == !NULL): ?>
                                           
                                            <li><?php echo e(currency($course->discount_price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></li>
                                            <li><span><s><?php echo e(currency($course->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></s></span></li>

                                        <?php else: ?>
                                            <?php if($course->price == !NULL): ?>
                                            <li><span><s><?php echo e(currency($course->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></s></span></li>
                                            <?php endif; ?>
                                        <?php endif; ?>

                                    </ul>
                                </div>


                                <?php if(Auth::check()): ?>

                                    <?php if(Auth::User()->role == "admin"): ?>
                                        <div class="about-home-btn btm-20">
                                            <a href="<?php echo e(route('course.content',['id' => $course->id, 'slug' => $course->slug ])); ?>" class="btn btn-secondary" title="course"><?php echo e(__('frontstaticword.GoToCourse')); ?></a>
                                        </div>
                                    <?php else: ?>
                                        <?php if(isset($course->duration)): ?>
                                            <?php if($course->duration_type == "m"): ?>
                                            <div class="course-duration btm-10"><?php echo e(__('frontstaticword.EnrollDuration')); ?>: <?php echo e($course->duration); ?> Months</div>
                                            <?php else: ?>
                                            <div class="course-duration btm-10"><?php echo e(__('frontstaticword.EnrollDuration')); ?>: <?php echo e($course->duration); ?> Days</div>
                                            <?php endif; ?>
                                        <?php endif; ?>


                                        <?php if(!empty($order) && $order->status == 1): ?>

                                            <div class="about-home-btn btm-20">
                                                <a href="<?php echo e(route('course.content',['id' => $course->id, 'slug' => $course->slug ])); ?>" class="btn btn-secondary" title="course"><?php echo e(__('frontstaticword.GoToCourse')); ?></a>
                                            </div>

                                        <?php elseif(isset($course_id) && in_array($course->id, $course_id)): ?>
                                            <div class="about-home-btn btm-20">
                                                <a href="<?php echo e(route('course.content',['id' => $course->id, 'slug' => $course->slug ])); ?>" class="btn btn-secondary" title="course"><?php echo e(__('frontstaticword.GoToCourse')); ?></a>
                                            </div>





                                        <?php elseif(!empty($instruct_course->id) && $instruct_course->id == $course->id): ?>

                                            <div class="about-home-btn btm-20">
                                                <a href="<?php echo e(route('course.content',['id' => $course->id, 'slug' => $course->slug ])); ?>" class="btn btn-secondary" title="course"><?php echo e(__('frontstaticword.GoToCourse')); ?></a>
                                            </div>


                                        <?php else: ?>

                                            <?php if(!empty($cart)): ?>
                                                <div class="about-home-btn btm-20">
                                                    <form id="demo-form2" method="post" action="<?php echo e(route('remove.item.cart',$cart->id)); ?>">
                                                        <?php echo e(csrf_field()); ?>


                                                        <div class="box-footer">
                                                         <button type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;<?php echo e(__('frontstaticword.RemoveFromCart')); ?></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            <?php else: ?>
                                                <div class="about-home-btn btm-20">
                                                    <form id="demo-form2" method="post" action="<?php echo e(route('addtocart',['course_id' => $course->id, 'price' => $course->price, 'discount_price' => $course->discount_price ])); ?>"
                                                        data-parsley-validate class="form-horizontal form-label-left">
                                                            <?php echo e(csrf_field()); ?>


                                                        <input type="hidden" name="category_id"  value="<?php echo e($course->category->id); ?>" />

                                                        <div class="box-footer">
                                                         <button type="submit" class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;<?php echo e(__('frontstaticword.AddToCart')); ?></button>
                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="about-home-btn btm-20">
                                                    <form id="demo-form2" method="post" action="<?php echo e(route('buynow')); ?>"
                                                        data-parsley-validate class="form-horizontal form-label-left">
                                                            <?php echo e(csrf_field()); ?>


                                                        <input type="hidden" name="category_id"  value="<?php echo e($course->category->id); ?>" />
                                                        <input type="hidden" name="user_id"  value="<?php echo e(Auth::user()->id); ?>" />

                                                        <input type="hidden" name="course_id"  value="<?php echo e($course->id); ?>" />

                                                        <div class="box-footer">
                                                         <button type="submit" class="btn btn-primary">&nbsp;<?php echo e(__('BUY NOW')); ?></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            <?php endif; ?>

                                        <?php endif; ?>


                                    <?php endif; ?>
                                <?php else: ?>
                                    <div class="about-home-btn btm-20">
                                        <?php if($gsetting->guest_enable == 1): ?>

                                        <form id="demo-form2" method="post" action="<?php echo e(route('guest.addtocart', $course->id)); ?>"
                                            data-parsley-validate class="form-horizontal form-label-left">
                                                <?php echo e(csrf_field()); ?>



                                            <div class="box-footer">
                                             <button type="submit" class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;<?php echo e(__('frontstaticword.AddToCart')); ?></button>
                                            </div>
                                        </form>
                                        <?php else: ?>

                                        <a href="<?php echo e(route('login')); ?>" class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;<?php echo e(__('frontstaticword.AddToCart')); ?></a>

                                        <?php endif; ?>

                                    </div>
                                <?php endif; ?>

                            <?php else: ?>
                                <div class="about-home-rate">
                                    <ul>
                                        <li><?php echo e(__('frontstaticword.Free')); ?></li>
                                    </ul>
                                </div>
                                <?php if(Auth::check()): ?>
                                    <?php if(Auth::User()->role == "admin"): ?>
                                        <div class="about-home-btn btm-20">
                                            <a href="<?php echo e(route('course.content',['id' => $course->id, 'slug' => $course->slug ])); ?>" class="btn btn-secondary" title="course"><?php echo e(__('frontstaticword.GoToCourse')); ?></a>
                                        </div>
                                    <?php else: ?>
                                        <?php
                                            $enroll = App\Order::where('user_id', Auth::User()->id)->where('course_id', $course->id)->first();
                                        ?>
                                        <?php if($enroll == NULL): ?>
                                            <div class="about-home-btn btm-20">
                                                <a href="<?php echo e(url('enroll/show',$course->id)); ?>" class="btn btn-primary" title="Enroll Now"><?php echo e(__('frontstaticword.EnrollNow')); ?></a>
                                            </div>
                                        <?php else: ?>
                                            <div class="about-home-btn btm-20">
                                                <a href="<?php echo e(route('course.content',['id' => $course->id, 'slug' => $course->slug ])); ?>" class="btn btn-secondary" title="Cart"><?php echo e(__('frontstaticword.GoToCourse')); ?></a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <div class="about-home-btn btm-20">
                                        <a href="<?php echo e(route('login')); ?>" class="btn btn-primary" title="Enroll Now"><?php echo e(__('frontstaticword.EnrollNow')); ?></a>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>



                            <?php if(isset($course->refund_policy_id)): ?>
                                <div class="refund-policy-block">
                                    <?php if(isset($course->policy)): ?>
                                        <?php
                                        
                                            $days = $course->policy->days;

                                            $detail = $course->policy->detail;
                                        ?>
                                        <div class="money-back-days"><?php echo e($days); ?>-Day Money-Back Guarantee
                                            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" data-html="true" title="<?php echo $detail; ?>"><i class="fas fa-info-circle"></i></button>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            <?php endif; ?>


                            <div class="about-home-includes-list btm-40">
                                <ul class="btm-40">
                                    <?php if($courseinclude->isNotEmpty()): ?>
                                        <li><span><?php echo e(__('frontstaticword.CourseIncludes')); ?></span></li>
                                        <?php $__currentLoopData = $course->include; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($in->status ==1): ?>
                                                <li><i class="fa <?php echo e($in->icon); ?>"></i><?php echo e(str_limit($in->detail, $limit = 50, $end = '...')); ?></li>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </ul>
                               
                                <div class="about-tags">
                                    <?php if($course['course_tags'] == !NULL): ?>
                                    <span><i data-feather="tag"></i> <?php echo e(__('Tags')); ?>:</span>
                                    <br>
                                    <?php
                                        $tags = $course['course_tags'];
                                    ?> 
                                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="#">
                                        <span class="badge badge-secondary">

                                        <div class="badge-button">   
                                        <form method="GET" id="searchform" action="<?php echo e(route('search')); ?>">
                                          
                                            <input  name="searchTerm" value="<?php echo e($tag); ?>" type="hidden"/>

                                            <button type="submit"><?php echo e($tag); ?></button>

                                        </form>
                                        </div>

                                        </span>
                                    </a>


                                  
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <hr>


                            <div class="row">
                                <div class="col-3">
                                    <div class="about-home-share text-center">
                                        <a href="https://calendar.google.com/calendar/r/eventedit?text=<?php echo e($course['title']); ?>" target="__blank"><i data-feather="calendar"></i></a>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="about-home-share text-center">
                                        <a href="#" data-toggle="modal" data-target="#myModalshare" title="share" data-dismiss="modal"><i data-feather="share"></i></a>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="about-home-share text-center">
                                        <?php if(auth()->guard()->check()): ?>
                                            <?php if($course->type == 1): ?>
                                            
                                            <div><a href="<?php echo e(route('gift.view',['id' => $course->id, 'slug' => $course->slug ])); ?>" title="gift"><i data-feather="gift"></i></a></div>
                                            <?php endif; ?>

                                        <?php endif; ?>
                                        <?php if(auth()->guard()->guest()): ?>
                                            <?php if($course->type == 1): ?>
                                            
                                            <div><a href="<?php echo e(route('login')); ?>" title="gift"><i data-feather="gift"></i></a></div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="about-home-share text-center">
                                        <?php if(Auth::check()): ?>

                                            <?php if($wish == NULL): ?>
                                                <div class="about-icon-one">
                                                    <form id="demo-form2" method="post" action="<?php echo e(url('show/wishlist', $course->id)); ?>" data-parsley-validate
                                                        class="form-horizontal form-label-left">
                                                        <?php echo csrf_field(); ?>

                                                        <input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />
                                                        <input type="hidden" name="course_id"  value="<?php echo e($course->id); ?>" />

                                                        <button class="wishlisht-btn" title="Add to wishlist" type="submit"><i data-feather="heart"></i></button>
                                                    </form>
                                                </div>
                                            <?php else: ?>
                                                <div class="about-icon-two">
                                                    <form id="demo-form2" method="post" action="<?php echo e(url('remove/wishlist', $course->id)); ?>" data-parsley-validate
                                                        class="form-horizontal form-label-left">
                                                        <?php echo csrf_field(); ?>

                                                        <input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />
                                                        <input type="hidden" name="course_id"  value="<?php echo e($course->id); ?>" />

                                                        <button class="wishlisht-btn" title="Remove from Wishlist" type="submit"><i data-feather="heart"></i></button>
                                                    </form>
                                                </div>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <div class="about-icon-one"><a href="<?php echo e(route('login')); ?>" title="heart"><i data-feather="heart"></i></a></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            

                            

                            <!--Model start-->
                            <div class="modal fade" data-backdrop="" style="z-index: 1050;" id="myModalshare" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">

                                      <h4 class="modal-title" id="myModalLabel"><?php echo e(__('frontstaticword.Sharethiscourse')); ?></h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="box box-primary">
                                      <div class="panel panel-sum">
                                        <div class="modal-body">

                                            <?php
                                            $url=  URL::current();
                                            ?>

                                            <!-- The text field -->

                                            <div class="nav-search">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="myInput"  value="<?php echo e($url); ?>">
                                                </div>
                                                <button onclick="myFunction()" class="btn btn-primary"><?php echo e(__('CopyText')); ?></button>
                                            </div>

                                            <div class="social-icon">

                                            <?php

                                            echo Share::currentPage('', [], '<div class="row">')
                                                ->facebook()
                                                ->twitter()
                                                ->linkedin('Extra linkedin summary can be passed here')
                                                ->whatsapp()
                                                ->telegram();

                                            ?>

                                            </div>

                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <!--Model close -->
                        </div>


                        <div class="container-fluid" id="adsense">
                            <!-- google adsense code -->
                            <?php
                              if (isset($ad)) {
                               if ($ad->isdetail==1 && $ad->status==1) {
                                  $code = $ad->code;
                                  echo html_entity_decode($code);
                               }
                              }
                            ?>
                        </div>
                    </div>
                </div>
                <?php if(false): ?>
                <br>
                <div class="about-content-sidebar">
                    <div class="container">
                        <div class="about-content-img">
                            <img src="<?php echo e(asset('images/user_img/'.$course->user['user_img'])); ?>" class="img-fluid" alt="">
                            <h5 class="about-content-heading"><?php echo e(optional($course->user)['fname']); ?> <?php echo e(optional($course->user)['lname']); ?></h5>
                            
                        </div>
                        <div class="ratings">
                            <?php
                                $enrolled = App\Order::where('instructor_id', $course->user->id)->count();
                            ?>
                           
                          
                            <div class="star-rating">Users Enrolled <?php echo e($enrolled); ?>

                            </div>
                        </div>

                        <?php
                        $year = Carbon\Carbon::parse($course->user->created_at)->year;
                        $course_count = App\Course::where('user_id', $course->user->id)->count();
                        $enroll_count = App\Order::where('instructor_id', $course->user->id)->count();
                        $live_1 = App\Meeting::where('user_id','=',$course->user->id)->count();
                        $live_2 = App\Googlemeet::where('user_id','=',$course->user->id)->count();
                        $live_3 = App\JitsiMeeting::where('user_id','=',$course->user->id)->count();
                        $live_4 = App\BBL::where('instructor_id','=',$course->user->id)->count();

                        $live_class = $live_1 + $live_2 + $live_3 + $live_4;
                        ?>

                        <div class="about-reward-badges">
                            <img src="<?php echo e(url('images/badges/1.png')); ?>" class="img-fluid" alt="" data-toggle="tooltip" data-placement="bottom" title="Member Since <?php echo e($year); ?>">
                            <?php if($course_count >= 5): ?>
                            <img src="<?php echo e(url('images/badges/2.png')); ?>" class="img-fluid" alt="" data-toggle="tooltip" data-placement="bottom" title="Has <?php echo e($course_count); ?> courses">
                            <?php endif; ?>
                            <img src="<?php echo e(url('images/badges/3.png')); ?>" class="img-fluid" alt="" data-toggle="tooltip" data-placement="bottom" title="rating from 4 to 5">
                            <img src="<?php echo e(url('images/badges/4.png')); ?>" class="img-fluid" alt="" data-toggle="tooltip" data-placement="bottom" title="<?php echo e($enroll_count); ?> users has enrolled">
                            <img src="<?php echo e(url('images/badges/5.png')); ?>" class="img-fluid" alt="" data-toggle="tooltip" data-placement="bottom" title="Live classes <?php echo e($live_class); ?>">
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="<?php echo e(route('instructor.profile', ['id' => $course->user->id, 'name' => $fullname] )); ?>" class="btn btn-primary" title="course">Profile</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($course->institude_id): ?>
                <div class="about-content-sidebar mt-md-4">
                    <div class="container">
                        <?php
                            $insti = App\Institute::where('id',$course->institude_id)->first();
                        ?>
      
                        <div class="about-content-img">
                            <img src="<?php echo e(asset('files/institute/'.$insti->image)); ?>" class="img-fluid" alt="">
                            <h5 class="about-content-heading"><?php echo e($insti->title); ?></h5>
                           
                            
                        </div>
                        

                        <?php
                        $year = Carbon\Carbon::parse($course->user->created_at)->year;
                        $course_count = App\Course::where('user_id', $course->user->id)->count();
                        $enroll_count = App\Order::where('instructor_id', $course->user->id)->count();
                        $live_1 = App\Meeting::where('user_id','=',$course->user->id)->count();
                        $live_2 = App\Googlemeet::where('user_id','=',$course->user->id)->count();
                        $live_3 = App\JitsiMeeting::where('user_id','=',$course->user->id)->count();
                        $live_4 = App\BBL::where('instructor_id','=',$course->user->id)->count();

                        $live_class = $live_1 + $live_2 + $live_3 + $live_4;
                        ?>

                        <div class="about-reward-badges">
                            <img src="<?php echo e(url('images/badges/1.png')); ?>" class="img-fluid" alt="" data-toggle="tooltip" data-placement="bottom" title="Member Since <?php echo e($year); ?>">
                            <?php if($course_count >= 5): ?>
                            <img src="<?php echo e(url('images/badges/2.png')); ?>" class="img-fluid" alt="" data-toggle="tooltip" data-placement="bottom" title="Has <?php echo e($course_count); ?> courses">
                            <?php endif; ?>
                            <img src="<?php echo e(url('images/badges/3.png')); ?>" class="img-fluid" alt="" data-toggle="tooltip" data-placement="bottom" title="rating from 4 to 5">
                            <img src="<?php echo e(url('images/badges/4.png')); ?>" class="img-fluid" alt="" data-toggle="tooltip" data-placement="bottom" title="<?php echo e($enroll_count); ?> users has enrolled">
                            <img src="<?php echo e(url('images/badges/5.png')); ?>" class="img-fluid" alt="" data-toggle="tooltip" data-placement="bottom" title="Live classes <?php echo e($live_class); ?>">
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="<?php echo e(route('institute.view', ['id' => $insti->id,'cour' => $course->id ] )); ?>" class="btn btn-primary" title="course">Profile</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<!-- course header end -->
<!-- course detail start -->
<section id="about-product" class="about-product-main-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php if($whatlearns->isNotEmpty()): ?>

                    <div class="product-learn-block">
                        <h3 class="product-learn-heading"><?php echo e(__('frontstaticword.Whatlearn')); ?></h3>
                        <div class="row">
                            <?php $__currentLoopData = $course['whatlearns']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($wl->status ==1): ?>
                            <div class="col-lg-6 col-md-6">
                                <div class="product-learn-dtl">
                                    <ul>
                                        <li class="align-items-center d-flex">
                                            <i data-feather="check-circle"></i>
                                            <?php echo e(str_limit($wl['detail'], $limit = 120, $end = '...')); ?>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endif; ?>


                <?php if($coursechapters->isNotEmpty()): ?>
                <div class="course-content-block btm-30 top-20">

                    <div class="row">
                        <div class="col-lg-8 col-8">
                            <h3><?php echo e(__('frontstaticword.CourseContent')); ?></h3>
                        </div>
                        <!--
                        FSMS commenting below div in order to show course length correctly.  
                        <div class="col-lg-4 col-6">
                            <div class="chapter-total-time">
                                <?php
                                $classtwo =  App\CourseClass::where('course_id', $course->id)->sum("duration");

                                echo $duration_round2 = round($classtwo,2);
                                ?>
                                <?php echo e(__('frontstaticword.min')); ?>

                            </div>
                        </div>
                        -->
                    </div>
                    <!-- FSMS -->
                    <div class="row" style="padding-bottom:10px">
                        <div class="col-lg-9 col-12"  >
                           <?php
                                // FSMS
                                function convertToHoursMins($time, $format = '%02dh %02dm') {
                                    if ($time < 1) {
                                        return;
                                    }
                                    $hours = floor($time / 60);
                                    $minutes = ($time % 60);
                                    if($format = '%02dh %02dm'){
                                        return sprintf($format, $hours, $minutes);
                                    }
                                    if($hours == 0){
                                        return sprintf($format, $minutes);
                                    }
                                    return sprintf($format, $hours, $minutes);
                                }
                                $classtwo =  App\CourseClass::where('course_id', $course->id)->sum("duration");

                                // echo $duration_round2 = round($classtwo,2);

                                $chapterCount = $coursechapters->count();
                                $classesCount = count(App\CourseClass::where('course_id', $course->id)->get());
                                $courseDuration = convertToHoursMins($classtwo, '%02dh %02dm total length');
                                // FSMS
                            ?>

                            <small><?php echo e($chapterCount . " sections • " .$classesCount . " lectures • " . $courseDuration); ?></small>

                        </div>

                        <div class="col-lg-3 col-12 d-none">
                            <button type="button" onclick="toggleAllSections()" class="btn btn-link courseToggle"><span style="color:#0384a3"><?php echo e(__('Expand all sections')); ?></span></button>
                            <button type="button" onclick="toggleAllSections()" class="btn btn-link courseToggle" style="display:none"><span style="color:#0384a3"><?php echo e(__('Collapse all sections')); ?></span></button>
                        </div>
                    </div>
                    <!-- FSMS -->

                    <div class="faq-block">
                        <div class="faq-dtl">
                            <div id="accordion" class="second-accordion">
                                <?php $__currentLoopData = $coursechapters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chapter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($chapter->status == 1 and $chapter->count() > 0 ): ?>

                                <div class="card">
                                    <div class="card-header" id="headingTwo<?php echo e($chapter->id); ?>">
                                        <div class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo<?php echo e($chapter->id); ?>" aria-expanded="false" aria-controls="collapseTwo">

                                                <div class="row">
                                                <div class="col-lg-8 col-6">
                                                    <?php echo e($chapter['chapter_name']); ?>

                                                    






                                                </div>
                                                <div class="col-lg-2 col-4">
                                                    <div class="text-right">
                                                        <?php
                                                            $classone = App\CourseClass::where('coursechapter_id', $chapter->id)->orderBy('position','ASC')->get();
                                                            if(count($classone)>0){

                                                                echo count($classone);
                                                            }
                                                            else{

                                                                echo "0";
                                                            }
                                                        ?>
                                                        <?php echo e(__('frontstaticword.Classes')); ?>

                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-2">
                                                    <div class="chapter-total-time">
                                                        <?php
                                                        $classtwo =  App\CourseClass::where('coursechapter_id', $chapter->id)->sum("duration");
                                                        if($classtwo >= 60){
                                                            echo convertToHoursMins($classtwo, '%02dH %02dM');
                                                        }else if($classtwo > 0){
                                                            echo convertToHoursMins($classtwo, '%02d');
                                                        }
                                                        ?>
                                                    </div>
                                                </div>

                                            </div>

                                            </button>
                                        </div>

                                    </div>

                                    <div id="collapseTwo<?php echo e($chapter->id); ?>" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">

                                        <div class="card-body">
                                            <table class="table">
                                                <tbody>
                                                    <?php $__currentLoopData = $courseclass; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($class->status == 1): ?>
                                                    <?php if($class->coursechapter_id == $chapter->id): ?>
                                                    <tr>
                                                        <th class="class-icon">
                                                        <?php if($class->type =='video' ): ?>
                                                        <a href="#" title="Course"><i class="fa fa-play-circle"></i></a>
                                                        <?php endif; ?>
                                                        <?php if($class->type =='audio' ): ?>
                                                        <a href="#" title="Course"><i class="fas fa-play"></i></a>
                                                        <?php endif; ?>
                                                        <?php if($class->type =='image' ): ?>
                                                        <a href="#" title="Course"><i class="fas fa-image"></i></a>
                                                        <?php endif; ?>
                                                        <?php if($class->type =='pdf' ): ?>
                                                        <a href="#" title="Course"><i class="fas fa-file-pdf"></i></a>
                                                        <?php endif; ?>
                                                        <?php if($class->type =='zip' ): ?>
                                                        <a href="#" title="Course"><i class="far fa-file-archive"></i></a>
                                                        <?php endif; ?>
                                                        </th>

                                                        <td>

                                                            <div class="koh-tab-content">
                                                              <div class="koh-tab-content-body">
                                                                <div class="koh-faq">
                                                                  <div class="koh-faq-question">

                                                                    <span class="koh-faq-question-span"> <?php echo e($class['title']); ?> </span>

                                                                    <?php if($class->date_time != NULL): ?>
                                                                       <div class="live-class">Live at: <?php echo e($class->date_time); ?></div>
                                                                    <?php endif; ?>



                                                                  </div>



                                                                </div>
                                                              </div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <?php if($class->preview_url != NULL || $class->preview_video != NULL ): ?>

                                                            <a href="<?php echo e(route('lightbox',$class->id)); ?>" class="iframe" style="display: block;"><?php echo e(__('frontstaticword.preview')); ?></a>

                                                            <?php endif; ?>

                                                        </td>

                                                        <td class="txt-rgt">
                                                        <?php if($class->type =='video'): ?>
                                                        <?php echo e($class['duration']); ?><?php echo e(__('frontstaticword.min')); ?>

                                                        <?php else: ?>
                                                        <?php echo e($class['size']); ?>mb
                                                        <?php endif; ?>



                                                    </tr>
                                                    <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>


                <?php if(auth()->guard()->check()): ?>

                <?php
                $user_enrolled = App\Order::where('course_id', $course->id)->where('user_id', Auth::user()->id) ->first();

                $bundle = App\Order::where('user_id', Auth::User()->id)->where('bundle_id', '!=', NULL)->get();

                $course_id = array();
                  

                foreach($bundle as $b)
                {
                 $bundle = App\BundleCourse::where('id', $b->bundle_id)->first();
                  array_push($course_id, $bundle->course_id);
                }

                $course_id = array_values(array_filter($course_id));

                $course_id = array_flatten($course_id);

                ?>


                <?php if( $user_enrolled != NULL || Auth::user()->role == 'admin' || isset($course_id) || in_array($course->id, $course_id)): ?>

                <?php if( ! $bigblue->isEmpty() ): ?>

                <div class="course-content-block btm-30">
                    <h5><?php echo e(__('frontstaticword.BigBlueMeetings')); ?></h5>
                    <div class="faq-block">
                        <div class="faq-dtl">
                            <div id="accordion" class="second-accordion">

                            <?php $__currentLoopData = $bigblue; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bbl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($bbl->is_ended != 1): ?>

                            <div class="card">
                                <div class="card-header" id="headingThree<?php echo e($bbl->id); ?>">
                                    <div class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree<?php echo e($bbl->id); ?>" aria-expanded="false" aria-controls="collapseThree">

                                            <?php echo e($bbl['meetingname']); ?>


                                        </button>
                                    </div>

                                </div>
                                <div id="collapseThree<?php echo e($bbl->id); ?>" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">

                                <div class="card-body">
                                    <table class="table">
                                    <tbody>
                                        <td>
                                          <ul>
                                            <li><a href="#" title="about"><?php echo e(__('frontstaticword.Created')); ?>: <?php if(isset($bbl->user)): ?> <?php echo e($bbl->user['fname']); ?> <?php echo e($bbl->user['lname']); ?> <?php endif; ?></a></li>
                                            <li><a href="#" title="about"><?php echo e(__('frontstaticword.StartAt')); ?>: <?php echo e(date('d-m-Y | h:i:s A',strtotime($bbl['start_time']))); ?></a></li>
                                            <li class="comment more">
                                               <?php echo $bbl->detail; ?>

                                            </li>

                                            <li>
                                                <a href="" data-toggle="modal" data-target="#myModalBBL" title="join" class="btn btn-light" title="course"><?php echo e(__('frontstaticword.JoinMeeting')); ?></a>
                                            </li>

                                            <div class="modal fade" id="myModalBBL" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog modal-lg" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header">

                                                      <h4 class="modal-title" id="myModalLabel"><?php echo e(__('frontstaticword.JoinMeeting')); ?></h4>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="box box-primary">
                                                      <div class="panel panel-sum">
                                                        <div class="modal-body">

                                                            <form action="<?php echo e(route('bbl.api.join')); ?>" method="POST">
                                                                <?php echo csrf_field(); ?>

                                                                <div class="form-group">
                                                                    <label>Meeting ID:</label>
                                                                    <input readonly="" type="text" name="meetingid" value="<?php echo e($bbl['meetingid']); ?>" class="form-control">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Your Name:</label>
                                                                    <input value="<?php echo e(old('name')); ?>" type="text" required="" name="name" placeholder="enter your name" class="form-control">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Meeting Password:</label>
                                                                    <input type="password" name="password" placeholder="enter meeting password" class="form-control" required="">
                                                                </div>

                                                                <button type="submit" class="btn btn-sm btn-primary">
                                                                    <?php echo e(__('frontstaticword.JoinMeeting')); ?>

                                                                </button>

                                                            </form>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>

                                          </ul>
                                        </td>

                                    </tbody>
                                    </table>
                                </div>
                               </div>
                            </div>

                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if( ! $meetings->isEmpty() ): ?>

                <div class="course-content-block btm-30">
                    <h5><?php echo e(__('frontstaticword.ZoomMeetings')); ?></h5>
                    <div class="faq-block">
                        <div class="faq-dtl">
                            <div id="accordion" class="second-accordion">


                            <?php $__currentLoopData = $meetings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meeting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="card">
                                <div class="card-header" id="headingFour<?php echo e($meeting->id); ?>">
                                    <div class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour<?php echo e($meeting->id); ?>" aria-expanded="false" aria-controls="collapseFour">

                                            <?php echo e($meeting['meeting_title']); ?>


                                        </button>
                                    </div>

                                </div>
                                <div id="collapseFour<?php echo e($meeting->id); ?>" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">

                                <div class="card-body">
                                    <table class="table">
                                    <tbody>
                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="#" title="about"><?php echo e(__('frontstaticword.Created')); ?>: <?php if(isset($meeting->user)): ?> <?php echo e($meeting->user['fname']); ?> <?php echo e($meeting->user['lname']); ?> <?php endif; ?> </a>

                                                </li>
                                                <li>
                                                   <p>Meeting Owner: <?php echo e($meeting->owner_id); ?></p>
                                                </li>
                                                <li>
                                                   <p class="btm-10"><a herf="#"><?php echo e(__('frontstaticword.StartAt')); ?>: <?php echo e(date('d-m-Y | h:i:s A',strtotime($meeting['start_time']))); ?></a></p>
                                                </li>
                                                <li>
                                                     <a href="<?php echo e($meeting->zoom_url); ?>" target="_blank" class="btn btn-light"><?php echo e(__('frontstaticword.JoinMeeting')); ?></a>
                                                </li>
                                            </ul>

                                        </td>
                                    </tbody>
                                    </table>
                                </div>
                               </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>


                
                <?php if($gsetting->googlemeet_enable == '1'): ?>
                <?php if( ! $googlemeetmeetings->isEmpty() ): ?>

                <div class="course-content-block btm-30">
                    <h5> Google Meetings</h5>
                    <div class="faq-block">
                        <div class="faq-dtl">
                            <div id="accordion" class="second-accordion">


                            <?php $__currentLoopData = $googlemeetmeetings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meeting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="card">
                                <div class="card-header" id="headingFour<?php echo e($meeting->id); ?>">
                                    <div class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour<?php echo e($meeting->id); ?>" aria-expanded="false" aria-controls="collapseFour">

                                            <?php echo e($meeting['meeting_title']); ?>


                                        </button>
                                    </div>

                                </div>
                                <div id="collapseFour<?php echo e($meeting->id); ?>" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">

                                <div class="card-body">
                                    <table class="table">
                                    <tbody>
                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="#" title="about"><?php echo e(__('frontstaticword.Created')); ?>: <?php if(isset($meeting->user)): ?> <?php echo e($meeting->user['fname']); ?> <?php echo e($meeting->user['lname']); ?> <?php endif; ?> </a>

                                                </li>
                                                <li>
                                                   <p>Meeting Owner: <?php echo e($meeting->owner_id); ?></p>
                                                </li>
                                                <li>
                                                   <p class="btm-10"><a herf="#"><?php echo e(__('frontstaticword.StartAt')); ?>: <?php echo e(date('d-m-Y | h:i:s A',strtotime($meeting['start_time']))); ?></a></p>
                                                </li>
                                                <li>
                                                     <a href="<?php echo e($meeting->meet_url); ?>" target="_blank" class="btn btn-light"><?php echo e(__('frontstaticword.JoinMeeting')); ?></a>
                                                </li>
                                            </ul>

                                        </td>
                                    </tbody>
                                    </table>
                                </div>
                               </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endif; ?>
                

                
                <?php if($gsetting->jitsimeet_enable == '1'): ?>
                <?php if( ! $jitsimeetings->isEmpty() ): ?>
                <div class="course-content-block btm-30">
                    <h5> Jitsi Meetings</h5>
                    <div class="faq-block">
                        <div class="faq-dtl">
                            <div id="accordion" class="second-accordion">


                            <?php $__currentLoopData = $jitsimeetings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meeting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="card">
                                <div class="card-header" id="headingFour<?php echo e($meeting->id); ?>">
                                    <div class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour<?php echo e($meeting->id); ?>" aria-expanded="false" aria-controls="collapseFour">

                                            <?php echo e($meeting['meeting_title']); ?>


                                        </button>
                                    </div>

                                </div>
                                <div id="collapseFour<?php echo e($meeting->id); ?>" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">

                                <div class="card-body">
                                    <table class="table">
                                    <tbody>
                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="#" title="about"><?php echo e(__('frontstaticword.Created')); ?>: <?php if(isset($meeting->user)): ?> <?php echo e($meeting->user['fname']); ?> <?php echo e($meeting->user['lname']); ?> <?php endif; ?> </a>

                                                </li>
                                                <li>
                                                   <p>Meeting Owner: <?php echo e($meeting->owner_id); ?></p>
                                                </li>
                                                <li>
                                                   <p class="btm-10"><a herf="#"><?php echo e(__('frontstaticword.StartAt')); ?>: <?php echo e(date('d-m-Y | h:i:s A',strtotime($meeting['start_time']))); ?></a></p>
                                                </li>
                                                <li>
                                                     <a href="<?php echo e(url('meetup-conferencing/'.$meeting->meeting_id)); ?>" target="_blank" class="btn btn-light"><?php echo e(__('frontstaticword.JoinMeeting')); ?></a>
                                                </li>
                                            </ul>

                                        </td>
                                    </tbody>
                                    </table>
                                </div>
                               </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php endif; ?>
                


                <?php endif; ?>

                <?php endif; ?>




                <div class="requirements">
                    <h3><?php echo e(__('frontstaticword.Requirements')); ?></h3>
                    <ul>
                        <li class="comment more">
                            <?php if(strlen($course->requirement) > 400): ?>
                            <?php echo e(substr($course->requirement,0,400)); ?>

                            <span class="read-more-show hide_content"><br>+&nbsp;See More</span>
                            <span class="read-more-content"> <?php echo e(substr($course->requirement,400,strlen($course->requirement))); ?>

                            <span class="read-more-hide hide_content"><br>-&nbsp;See Less</span> </span>
                            <?php else: ?>
                            <?php echo e($course->requirement); ?>

                            <?php endif; ?>
                        </li>

                    </ul>
                </div>
                <div class="description-block btm-30">
                    <h3><?php echo e(__('frontstaticword.Description')); ?></h3>

                    <p><?php echo $course->detail; ?></p>

                </div>


               <?php
                    $alreadyrated = App\ReviewRating::where('course_id', $course->id)->limit(1)->first();
                ?>
                <?php if($alreadyrated == !NULL): ?>
                <?php if($alreadyrated->featured == 1): ?>
                    <div class="featured-review btm-40">
                        <h3><?php echo e(__('frontstaticword.FeaturedReview')); ?></h3>
                        <?php

                            $user_count = count([$alreadyrated]);
                            $user_sub_total = 0;
                            $user_learn_t = $alreadyrated->learn * 5;
                            $user_price_t = $alreadyrated->price * 5;
                            $user_value_t = $alreadyrated->value * 5;
                            $user_sub_total = $user_sub_total + $user_learn_t + $user_price_t + $user_value_t;

                            $user_count = ($user_count * 3) * 5;
                            $rat1 = $user_sub_total / $user_count;
                            $ratings_var1 = ($rat1 * 100) / 5;

                        ?>
                        <?php if(isset($alreadyrated)): ?>
                        
                        <?php $__currentLoopData = $coursereviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($rating->review == !null && $rating->featured == 1): ?>
                        <div class="featured-review-block">
                            <div class="row">
                                <div class="col-lg-1 col-4">
                                    <div class="featured-review-img">
                                        <div class="review-img text-white">

                                        <?php echo e(str_limit($rating->user->fname, $limit = 1, $end = '')); ?><?php echo e(str_limit($rating->user->lname, $limit = 1, $end = '')); ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-11 col-8">
                                    <div class="featured-review-img-dtl">
                                        <div class="review-img-name"><span> <?php if(isset($rating->user)): ?> <?php echo e($rating->user['fname']); ?> <?php echo e($rating->user['lname']); ?> <?php endif; ?></span></div>
                                        <div class="pull-left">
                                            <div class="star-ratings-sprite"><span style="width:<?php echo $ratings_var1; ?>%" class="star-ratings-sprite-rating"></span>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="year btm-20"><?php echo e(date('jS F Y', strtotime($rating['created_at']))); ?></div>
                                    </div>
                                </div>
                            </div>
                            <p class="btm-20"><?php echo e($rating['review']); ?></p>

                            <?php if(auth()->guard()->check()): ?>
                            <div class="review"><?php echo e(__('frontstaticword.helpful')); ?>?
                                <?php
                                $help = App\ReviewHelpful::where('user_id', Auth::User()->id)->where('review_id', $rating->id)->first();
                                ?>

                                
                              
                                <?php if(isset($help['review_like']) == '1'): ?>
                                    <div class="helpful">
                                       
                                        <form  method="post" action="<?php echo e(route('helpful', $course->id)); ?>" data-parsley-validate class="form-horizontal form-label-left">
                                        <?php echo e(csrf_field()); ?>


                                        <input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />

                                        <input type="hidden" name="review_id"  value="<?php echo e($rating->id); ?>" />

                                        <input type="hidden" name="helpful"  value="yes" />
                                        <input type="hidden" name="review_like"  value="0" />
                                        
                                          <button type="submit" class="btn btn-link lft-7 rgt-10 "><i class="fa fa-check"></i> <?php echo e(__('frontstaticword.Yes')); ?></button>
                                        </form>
                                    </div>
                                <?php else: ?>
                                    <div class="helpful">
                                        <form  method="post" action="<?php echo e(route('helpful', $course->id)); ?>" data-parsley-validate class="form-horizontal form-label-left">
                                        <?php echo e(csrf_field()); ?>


                                        <input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />

                                        <input type="hidden" name="review_id"  value="<?php echo e($rating->id); ?>" />

                                        <input type="hidden" name="helpful"  value="yes" />
                                        <input type="hidden" name="review_like"  value="1" />
                                        
                                          <button type="submit" class="btn btn-link lft-7 rgt-10 "><?php echo e(__('frontstaticword.Yes')); ?></button>
                                        </form>
                                    </div>
                                <?php endif; ?>



                                <?php if(isset($help['review_dislike']) == '1'): ?>
                                    <div class="helpful">
                                       

                                        <form  method="post" action="<?php echo e(route('helpful', $course->id)); ?>" data-parsley-validate class="form-horizontal form-label-left">
                                        <?php echo e(csrf_field()); ?>


                                        <input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />

                                        <input type="hidden" name="review_id"  value="<?php echo e($rating->id); ?>" />

                                        <input type="hidden" name="helpful"  value="yes" />
                                        <input type="hidden" name="review_dislike"  value="0" />
                                        
                                          <button type="submit" class="btn btn-link lft-7 rgt-10 "><i class="fa fa-check"></i><?php echo e(__('frontstaticword.No')); ?></button>
                                        </form>
                                    </div>
                                <?php else: ?>
                                    <div class="helpful">
                                        <form  method="post" action="<?php echo e(route('helpful', $course->id)); ?>" data-parsley-validate class="form-horizontal form-label-left">
                                        <?php echo e(csrf_field()); ?>


                                        <input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />

                                        <input type="hidden" name="review_id"  value="<?php echo e($rating->id); ?>" />

                                        <input type="hidden" name="helpful"  value="yes" />
                                        <input type="hidden" name="review_dislike"  value="1" />
                                        
                                          <button type="submit" class="btn btn-link lft-7 rgt-10 "><?php echo e(__('frontstaticword.No')); ?></button>
                                        </form>
                                    </div>
                                <?php endif; ?>

                                

                                <a href="#" data-toggle="modal" data-target="#myModalreport"  title="report"><?php echo e(__('frontstaticword.Report')); ?></a>

                            </div>

                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php endif; ?>



                

                <div class="students-bought btm-30">
                    <h3><?php echo e(__('frontstaticword.RecentCourses')); ?></h3>
                    <?php
                        $items = App\Course::orderBy('created_at','desc')->limit(5)->get()
                    ?>
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($item->status == 1): ?>
                    <div class="course-bought-block">
                        <div class="row">
                            <div class="col-lg-7 col-md-6 col-12">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-4 col-5">
                                        <div class="course-bought-img">
                                            <?php if($item->preview_image !== NULL && $item->preview_image !== ''): ?>
                                                <a href="<?php echo e(route('user.course.show',['id' => $item->id, 'slug' => $item->slug ])); ?>"><img src="<?php echo e(asset('images/course/'.$item['preview_image'])); ?>" class="img-fluid" alt="blog"></a>
                                            <?php else: ?>
                                                <a href="<?php echo e(route('user.course.show',['id' => $item->id, 'slug' => $item->slug ])); ?>"><img src="<?php echo e(Avatar::create($item->title)->toBase64()); ?>" class="img-fluid" alt="blog"></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-8 col-7">
                                        <div class="course-name"><a href="<?php echo e(route('user.course.show',['id' => $item->id, 'slug' => $item->slug ])); ?>"><?php echo e(str_limit($item['title'], $limit = 35, $end = '...')); ?></a></div>
                                        <div class="course-update"><?php echo e(__('frontstaticword.LastUpdated')); ?> <?php echo e(date('jS F Y', strtotime($item['updated_at']))); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-1 col-4">
                                <div class="course-user">
                                    <ul>
                                        <li><i data-feather="user"></i></li>
                                        <li><?php echo e($item->order->count() < 50 ? "+50" : $item->order->count()); ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4">
                                <?php if($item->type==1): ?>

                                    <?php if($item->discount_price == !NULL): ?>
                                        <div class="course-currency txt-rgt">
                                            <ul>
                                                
                                                <li class="rate"><?php echo e(currency($item->discount_price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></li>

                                                <li class="rate"><s><?php echo e(currency($item->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></s></li>


                                            </ul>
                                        </div>
                                    <?php else: ?>
                                        <div class="course-currency txt-rgt">
                                            <ul>
                                                <?php if($item->price == !NULL): ?>
                                                
                                                <li><?php echo e(currency($item->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></li>
                                                <?php endif; ?>
                                               
                                            </ul>
                                        </div>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <div class="course-currency txt-rgt">
                                        <ul>
                                            <li><?php echo e(__('frontstaticword.Free')); ?></li>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-lg-1 col-md-2 col-4">
                                <div class="course-rate txt-rgt">
                                    <ul>
                                        <li>
                                        <?php if(Auth::check()): ?>
                                        <?php
                                            $wishtt = App\Wishlist::where('user_id', Auth::User()->id)->where('course_id', $item->id)->first();
                                        ?>
                                        <?php if($wishtt == NULL): ?>
                                            <div class="heart">
                                                <form id="demo-form2" method="post" action="<?php echo e(url('show/wishlist', $item->id)); ?>" data-parsley-validate
                                                    class="form-horizontal form-label-left">
                                                    <?php echo e(csrf_field()); ?>


                                                    <input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />
                                                    <input type="hidden" name="course_id"  value="<?php echo e($item->id); ?>" />

                                                    <button class="wishlisht-btn heart" title="Add to wishlist" type="submit"><i data-feather="heart"></i></button>
                                                </form>
                                            </div>
                                        <?php else: ?>
                                            <div class="heart-two">
                                                <form id="demo-form2" method="post" action="<?php echo e(url('remove/wishlist', $item->id)); ?>" data-parsley-validate
                                                    class="form-horizontal form-label-left">
                                                    <?php echo e(csrf_field()); ?>


                                                    <input type="hidden" name="user_id"  value="<?php echo e(Auth::user()->id); ?>" />
                                                    <input type="hidden" name="course_id"  value="<?php echo e($item->id); ?>" />

                                                    <button class="wishlisht-btn heart"  title="Remove from Wishlist" type="submit"><i data-feather="heart"></i></button>
                                                </form>
                                            </div>
                                        <?php endif; ?>
                                        <?php else: ?>
                                            <div class="heart"><a href="<?php echo e(route('login')); ?>" title="heart"><i data-feather="heart"></i></a></div>
                                        <?php endif; ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                    <div class="about-instructor-block">
                        <h3><?php echo e(__('frontstaticword.AboutInstructor')); ?></h3>
                        <?php
                        $fullname = isset($course->user['fname']) . ' ' . isset($course->user['lname']);
                        $fullname = preg_replace('/\s+/', '', $fullname);
                        ?>

                        <div class="about-instructor btm-40">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="instructor-img btm-30">

                                        <?php if($course->user->user_img != null || $course->user->user_img !=''): ?>

                                              <img src="<?php echo e(asset('images/user_img/'.$course->user['user_img'])); ?>" class="img-fluid" alt="instructor">

                                        <?php else: ?>
                                          <img src="<?php echo e(asset('images/default/user.jpg')); ?>" class="img-fluid" alt="instructor">
                                        <?php endif; ?>

                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="instructor-block">
                                        <div id="instructor" class="instructor-name btm-10 h4">

                                                <?php if(isset($course->user)): ?> <?php echo e($course->user['fname']); ?> <?php echo e($course->user['lname']); ?> <?php endif; ?>

                                        </div>
                                        <div class="instructor-post btm-5"><?php echo e(__('frontstaticword.AboutInstructor')); ?></div>
                                        <p><?php echo $course->user['detail']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php if(false): ?>

                    <?php if(! $reviews->isEmpty()): ?>
                    <div class="student-feedback btm-40">
                        <h3 class="student-feedback-heading"><?php echo e(__('frontstaticword.StudentFeedback')); ?></h3>
                        <div class="student-feedback-block">

                            <div class="rating">
                                <?php
                                    $learn = 0;
                                    $price = 0;
                                    $value = 0;
                                    $sub_total = 0;
                                    $count =  count($reviews);
                                    $onlyrev = array();

                                    $reviewcount = App\ReviewRating::where('course_id',1)->where('status',"1")->WhereNotNull('review')->get();

                                foreach($reviews as $review){

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

                                <div class="rating-num"><?php echo e(round($overallrating, 1)); ?></div>

                                <?php
                                $learn = 0;
                                $price = 0;
                                $value = 0;
                                $sub_total = 0;
                                $sub_total = 0;
                                $reviews = App\ReviewRating::where('course_id',$course->id)->where('status','1')->get();
                                ?>
                                <?php if(!empty($reviews[0])): ?>
                                    <?php
                                    $count =  App\ReviewRating::where('course_id',$course->id)->count();

                                    foreach($reviews as $review){
                                        $learn = $review->learn*5;
                                        $price = $review->price*5;
                                        $value = $review->value*5;
                                        $sub_total = $sub_total + $learn + $price + $value;
                                    }

                                    $count = ($count*3) * 5;
                                    $rat = $sub_total/$count;
                                    $ratings_var = ($rat*100)/5;
                                    ?>
                                    <div class="pull-left">
                                        <div class="star-ratings-sprite star-ratings-center"><span style="width:<?php echo $ratings_var; ?>%" class="star-ratings-sprite-rating"></span>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="pull-left">
                                        <div class="star-ratings-sprite star-ratings-center"><span class="star-ratings-sprite-rating"></span>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="rating-users"><?php echo e(__('frontstaticword.CourseRating')); ?></div>
                            </div>
                            <div class="histo">
                                <div class="three histo-rate">
                                    <span class="histo-star">
                                        <?php
                                        $learn = 0;
                                        $total = 0;
                                        $reviews = App\ReviewRating::where('course_id',$course->id)->where('status','1')->get();
                                        ?>
                                        <?php if(!empty($reviews[0])): ?>
                                            <?php
                                            $count =  App\ReviewRating::where('course_id',$course->id)->count();

                                            foreach($reviews as $review){
                                                $learn = $review->learn*5;
                                                $total = $total + $learn;
                                            }

                                            $count = ($count*1) * 5;
                                            $rat = $total/$count;
                                            $ratings_var = ($rat*100)/5;
                                            ?>

                                            <div class="pull-left">
                                                <div class="star-ratings-sprite star-ratings-center"><span style="width:<?php echo $ratings_var; ?>%" class="star-ratings-sprite-rating"></span>
                                                </div>
                                            </div>

                                        <?php else: ?>
                                            <div class="pull-left">
                                                <div class="star-ratings-sprite star-ratings-center"><span style="width:%" class="star-ratings-sprite-rating"></span>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </span>
                                    <span class="histo-percent">
                                        <a href="#" title="rate"><?php echo e(round($ratings_var)); ?>%</a>
                                    </span>
                                    <span class="bar-block">
                                        <span id="bar-three" style=" width:<?php echo e($ratings_var); ?>%;" class="bar bar-clr bar-radius">&nbsp;</span>
                                    </span>
                                </div>
                                <div class="two histo-rate">
                                    <span class="histo-star">
                                        <?php
                                        $price = 0;
                                        $total = 0;
                                        $reviews = App\ReviewRating::where('course_id',$course->id)->where('status','1')->get();
                                        ?>
                                        <?php if(!empty($reviews[0])): ?>
                                            <?php
                                            $count =  App\ReviewRating::where('course_id',$course->id)->count();

                                            foreach($reviews as $review){
                                                $price = $review->price*5;
                                                $total = $total + $price;
                                            }

                                            $count = ($count*1) * 5;
                                            $rat = $total/$count;
                                            $ratings_var = ($rat*100)/5;
                                            ?>

                                            <div class="pull-left">
                                                <div class="star-ratings-sprite star-ratings-center"><span style="width:<?php echo $ratings_var; ?>%" class="star-ratings-sprite-rating"></span>
                                                </div>
                                            </div>

                                        <?php else: ?>
                                            <div class="pull-left">
                                                <div class="star-ratings-sprite star-ratings-center"><span style="width:%" class="star-ratings-sprite-rating"></span>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </span>
                                    <span class="histo-percent">
                                        <a href="#" title="rate"><?php echo e(round($ratings_var)); ?>%</a>
                                    </span>
                                    <span class="bar-block">
                                        <span id="bar-two" style="width: <?php echo e($ratings_var); ?>%" class="bar bar-clr bar-radius">&nbsp;</span>
                                    </span>
                                </div>
                                <div class="one histo-rate">
                                    <span class="histo-star">
                                        <?php
                                        $value = 0;
                                        $total = 0;
                                        $reviews = App\ReviewRating::where('course_id',$course->id)->where('status','1')->get();
                                        ?>
                                        <?php if(!empty($reviews[0])): ?>
                                            <?php
                                            $count =  App\ReviewRating::where('course_id',$course->id)->count();

                                            foreach($reviews as $review){
                                                $value = $review->value*5;
                                                $total = $total + $value;
                                            }

                                            $count = ($count*1) * 5;
                                            $rat = $total/$count;
                                            $ratings_var = ($rat*100)/5;
                                            ?>

                                            <div class="pull-left">
                                                <div class="star-ratings-sprite star-ratings-center"><span style="width:<?php echo $ratings_var; ?>%" class="star-ratings-sprite-rating"></span>
                                                </div>
                                            </div>

                                        <?php else: ?>
                                            <div class="pull-left">
                                                <div class="star-ratings-sprite star-ratings-center"><span style="width:%" class="star-ratings-sprite-rating"></span>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </span>
                                    <span class="histo-percent">
                                        <a href="#" title="rate"><?php echo e(round($ratings_var)); ?>%</a>
                                    </span>
                                    <span class="bar-block">
                                        <span id="bar-one" style="width: <?php echo e($ratings_var); ?>%" class="bar bar-clr bar-radius">&nbsp;</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <?php endif; ?>

                   <div class="learning-review btm-40">

                    <?php if(auth()->guard()->check()): ?>
                    


                    <?php
                        $user_enrolled = App\Order::where('course_id', $course->id)->where('user_id', Auth::user()->id) ->first();

                        $bundle = App\Order::where('user_id', Auth::User()->id)->where('bundle_id', '!=', NULL)->get();

                        $course_id = array();


                        foreach($bundle as $b)
                        {
                         $bundle = App\BundleCourse::where('id', $b->bundle_id)->first();
                          array_push($course_id, $bundle->course_id);
                        }

                        $course_id = array_values(array_filter($course_id));

                        $course_id = array_flatten($course_id);

                    ?>


                    <?php if( $user_enrolled != NULL || Auth::user()->role == 'admin' || isset($course_id) || in_array($course->id, $course_id)): ?>

                        <div class="review-block">
                            <div class="row">
                                <div class="col-lg-2">
                                    <h3 class="top-20"><?php echo e(__('frontstaticword.Reviews')); ?></h3>
                                </div>
                                <div class="col-lg-10 col-12">
                                    <form id="demo-form2" method="post" action="<?php echo e(route('course.rating',$course->id)); ?>" data-parsley-validate class="form-horizontal form-label-left">
                                        <?php echo e(csrf_field()); ?>

                                        <div class="review-table top-20">
                                            <table class="table">
                                              <thead>
                                                <tr>
                                                  <th scope="col"></th>
                                                  <!-- <th scope="col">1 <?php echo e(__('frontstaticword.Star')); ?></th>
                                                  <th scope="col">2 <?php echo e(__('frontstaticword.Star')); ?></th>
                                                  <th scope="col">3 <?php echo e(__('frontstaticword.Star')); ?></th>
                                                  <th scope="col">4 <?php echo e(__('frontstaticword.Star')); ?></th>
                                                  <th scope="col">5 <?php echo e(__('frontstaticword.Star')); ?></th> -->
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <th scope="row"><?php echo e(__('frontstaticword.Learn')); ?></th>
                                                  <td>
                                                    <div class="star-rating">
                                                        <input id="option1" type="radio" name="learn" value="1" />
                                                        <label for="option1" title="5 stars">
                                                        <i class="active fa fa-star mrg-lft" aria-hidden="true"></i>
                                                        </label>
                                                        <input id="option2" type="radio" name="learn" value="2" />
                                                        <label for="option2" title="4 stars">
                                                        <i class="active fa fa-star mrg-lft" aria-hidden="true"></i>
                                                        </label>
                                                        <input id="option3" type="radio" name="learn" value="3" />
                                                        <label for="option3" title="3 stars">
                                                        <i class="active fa fa-star mrg-lft" aria-hidden="true"></i>
                                                        </label>
                                                        <input id="option4" type="radio" name="learn" value="4" />
                                                        <label for="option4" title="2 stars">
                                                        <i class="active fa fa-star mrg-lft" aria-hidden="true"></i>
                                                        </label>
                                                        <input id="option5" type="radio" name="learn" value="5" />
                                                        <label for="option5" title="1 star">
                                                        <i class="active fa fa-star mrg-lft" aria-hidden="true"></i>
                                                        </label>
                                                    </div>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <th scope="row"><?php echo e(__('frontstaticword.Price')); ?></th>
                                                  <td>
                                                    <div class="star-rating">
                                                        <input id="option6" type="radio" name="price" value="1" />
                                                        <label for="option6" title="5 stars">
                                                        <i class="active fa fa-star mrg-lft" aria-hidden="true"></i>
                                                        </label>
                                                        <input id="option7" type="radio" name="price" value="2" />
                                                        <label for="option7" title="4 stars">
                                                        <i class="active fa fa-star mrg-lft" aria-hidden="true"></i>
                                                        </label>
                                                        <input id="option8" type="radio" name="price" value="3" />
                                                        <label for="option8" title="3 stars">
                                                        <i class="active fa fa-star mrg-lft" aria-hidden="true"></i>
                                                        </label>
                                                        <input id="option9" type="radio" name="price" value="4" />
                                                        <label for="option9" title="2 stars">
                                                        <i class="active fa fa-star mrg-lft" aria-hidden="true"></i>
                                                        </label>
                                                        <input id="option10" type="radio" name="price" value="5" />
                                                        <label for="option10" title="1 star">
                                                        <i class="active fa fa-star mrg-lft" aria-hidden="true"></i>
                                                        </label>
                                                    </div>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <th scope="row"><?php echo e(__('frontstaticword.Value')); ?></th>
                                                  <td>
                                                    <div class="star-rating">
                                                        <input id="option11" type="radio" name="value" value="1" />
                                                        <label for="option11" title="5 stars">
                                                        <i class="active fa fa-star mrg-lft" aria-hidden="true"></i>
                                                        </label>
                                                        <input id="option12" type="radio" name="value" value="2" />
                                                        <label for="option12" title="4 stars">
                                                        <i class="active fa fa-star mrg-lft" aria-hidden="true"></i>
                                                        </label>
                                                        <input id="option13" type="radio" name="value" value="3" />
                                                        <label for="option13" title="3 stars">
                                                        <i class="active fa fa-star mrg-lft" aria-hidden="true"></i>
                                                        </label>
                                                        <input id="option14" type="radio" name="value" value="4" />
                                                        <label for="option14" title="2 stars">
                                                        <i class="active fa fa-star mrg-lft" aria-hidden="true"></i>
                                                        </label>
                                                        <input id="option15" type="radio" name="value" value="5" />
                                                        <label for="option15" title="1 star">
                                                        <i class="active fa fa-star mrg-lft" aria-hidden="true"></i>
                                                        </label>
                                                    </div>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <div class="review-text btm-30">
                                                <label for="review"><?php echo e(__('frontstaticword.Writereview')); ?>:</label>
                                                <textarea name="review" rows="4" class="form-control" placeholder=""></textarea>
                                            </div>
                                            <div class="review-rating-btn text-right">
                                                <button type="submit" class="btn btn-success" title="Review"><?php echo e(__('frontstaticword.Submit')); ?></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <hr>

                    <?php endif; ?>
                    <?php endif; ?>


                    <?php
                        $alreadyrated = App\ReviewRating::where('course_id', $course->id)->first();
                    ?>
                    <?php if($alreadyrated == !NULL): ?>

                    <div class="review-dtl">

                        <?php if(isset($alreadyrated)): ?>
                        <?php $__currentLoopData = $course->review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php

                            $user_count = count([$rating]);
                            $user_sub_total = 0;
                            $user_learn_t = $rating->learn * 5;
                            $user_price_t = $rating->price * 5;
                            $user_value_t = $rating->value * 5;
                            $user_sub_total = $user_sub_total + $user_learn_t + $user_price_t + $user_value_t;

                            $user_count = ($user_count * 3) * 5;
                            $rat1 = $user_sub_total / $user_count;
                            $ratings_var7 = ($rat1 * 100) / 5;

                        ?>

                        <?php if($rating->review == !null && $rating->status == 1 && $rating->approved == 1): ?>
                        <div class="row btm-20">
                            <div class="col-lg-4">
                                <div class="review-img text-white">
                                    <?php echo e(str_limit($rating->user->fname, $limit = 1, $end = '')); ?><?php echo e(str_limit($rating->user->lname, $limit = 1, $end = '')); ?>

                                </div>
                                <div class="review-img-block">
                                    <div class="review-month"><?php echo e(date('d-m-Y', strtotime($rating['created_at']))); ?></div>
                                    <div class="review-name"><?php echo e($rating->user['fname']); ?> <?php echo e($rating->user['lname']); ?></div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="review-rating">
                                    <div class="pull-left-review">
                                        <div class="star-ratings-sprite"><span style="width:<?php echo $ratings_var7; ?>%" class="star-ratings-sprite-rating"></span>
                                        </div>
                                    </div>
                                    <div class="review-text">
                                        <p><?php echo e($rating['review']); ?><p>
                                    </div>

                                    <?php if(auth()->guard()->check()): ?>

                                    <div class="review"><?php echo e(__('frontstaticword.helpful')); ?>?
                                <?php
                                $help = App\ReviewHelpful::where('user_id', Auth::User()->id)->where('review_id', $rating->id)->first();
                                ?>



                                <?php if(isset($help['review_like']) == '1'): ?>
                                    <div class="helpful">

                                        <form  method="post" action="<?php echo e(route('helpful', $course->id)); ?>" data-parsley-validate class="form-horizontal form-label-left">
                                        <?php echo e(csrf_field()); ?>


                                        <input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />

                                        <input type="hidden" name="review_id"  value="<?php echo e($rating->id); ?>" />

                                        <input type="hidden" name="helpful"  value="yes" />
                                        <input type="hidden" name="review_like"  value="0" />

                                          <button type="submit" class="btn btn-link lft-7 rgt-10 "><i class="fa fa-check"></i> <?php echo e(__('frontstaticword.Yes')); ?></button>
                                        </form>
                                    </div>
                                <?php else: ?>
                                    <div class="helpful">
                                        <form  method="post" action="<?php echo e(route('helpful', $course->id)); ?>" data-parsley-validate class="form-horizontal form-label-left">
                                        <?php echo e(csrf_field()); ?>


                                        <input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />

                                        <input type="hidden" name="review_id"  value="<?php echo e($rating->id); ?>" />

                                        <input type="hidden" name="helpful"  value="yes" />
                                        <input type="hidden" name="review_like"  value="1" />

                                          <button type="submit" class="btn btn-link lft-7 rgt-10 "><?php echo e(__('frontstaticword.Yes')); ?></button>
                                        </form>
                                    </div>
                                <?php endif; ?>



                                <?php if(isset($help['review_dislike']) == '1'): ?>
                                    <div class="helpful">


                                        <form  method="post" action="<?php echo e(route('helpful', $course->id)); ?>" data-parsley-validate class="form-horizontal form-label-left">
                                        <?php echo e(csrf_field()); ?>


                                        <input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />

                                        <input type="hidden" name="review_id"  value="<?php echo e($rating->id); ?>" />

                                        <input type="hidden" name="helpful"  value="yes" />
                                        <input type="hidden" name="review_dislike"  value="0" />

                                          <button type="submit" class="btn btn-link lft-7 rgt-10 "><i class="fa fa-check"></i><?php echo e(__('frontstaticword.No')); ?></button>
                                        </form>
                                    </div>
                                <?php else: ?>
                                    <div class="helpful">
                                        <form  method="post" action="<?php echo e(route('helpful', $course->id)); ?>" data-parsley-validate class="form-horizontal form-label-left">
                                        <?php echo e(csrf_field()); ?>


                                        <input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />

                                        <input type="hidden" name="review_id"  value="<?php echo e($rating->id); ?>" />

                                        <input type="hidden" name="helpful"  value="yes" />
                                        <input type="hidden" name="review_dislike"  value="1" />

                                          <button type="submit" class="btn btn-link lft-7 rgt-10 "><?php echo e(__('frontstaticword.No')); ?></button>
                                        </form>
                                    </div>
                                <?php endif; ?>


                                        
                                        <a href="#" data-toggle="modal" data-target="#myModalreport"  title="report"><?php echo e(__('frontstaticword.Report')); ?></a>
                                        <div class="modal fade" id="myModalreport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog modal-lg" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h4 class="modal-title" id="myModalLabel"><?php echo e(__('frontstaticword.Report')); ?></h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="box box-primary">
                                                  <div class="panel panel-sum">
                                                    <div class="modal-body">
                                                        <?php
                                                            $courses = App\Course::first();
                                                        ?>
                                                        <form id="demo-form2" method="post" action="<?php echo e(route('report.review', $course->id)); ?>"              data-parsley-validate class="form-horizontal form-label-left">
                                                            <?php echo e(csrf_field()); ?>


                                                            <input type="hidden" name="review_id"  value="<?php echo e($rating->id); ?>" />

                                                            <div class="row">
                                                              <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="title"><?php echo e(__('frontstaticword.Title')); ?>:<sup class="redstar">*</sup></label>
                                                                    <input type="text" class="form-control" name="title" id="title" placeholder="Please Enter Title" value="">
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="email"><?php echo e(__('frontstaticword.Email')); ?>:<sup class="redstar">*</sup></label>
                                                                    <input type="email" class="form-control" name="email" id="title" placeholder="Please Enter Email" value="<?php echo e(Auth::User()->email); ?>" required>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="row">
                                                              <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="detail"><?php echo e(__('frontstaticword.Detail')); ?>:<sup class="redstar">*</sup></label>
                                                                    <textarea name="detail" rows="4"  class="form-control" placeholder=""></textarea>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <br>
                                                            <div class="box-footer">
                                                             <button type="submit" class="btn btn-lg col-md-3 btn-primary"><?php echo e(__('frontstaticword.Submit')); ?></button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php endif; ?>


                                </div>
                            </div>
                        </div>
                        <hr>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>

                </div>

                <?php endif; ?>

                <?php if(!$relatedcourse->isEmpty()): ?>
                <div class="more-courses btm-30">
                    <h2 class="more-courses-heading"><?php echo e(__('frontstaticword.RelatedCourses')); ?></h2>
                    <div class="row">
                        <?php $__currentLoopData = $relatedcourse; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(optional($rel->courses)->status == 1): ?>
                        <div class="col-lg-6 col-sm-6">
                            <div class="together-img">
                                <div class="student-view-block">
                                    <div class="view-block">
                                        <div class="view-img">
                                            <?php if($rel->courses['preview_image'] !== NULL && $rel->courses['preview_image'] !== ''): ?>
                                                <a href="<?php echo e(route('user.course.show',['id' => $rel->course_id, 'slug' => $rel->courses->slug ])); ?>"><img src="<?php echo e(asset('images/course/'.$rel->courses->preview_image)); ?>" alt="student">
                                                </a>
                                            <?php else: ?>
                                                <a href="<?php echo e(route('user.course.show',['id' => $rel->course_id, 'slug' => $rel->courses->slug ])); ?>"><img src="<?php echo e(Avatar::create($rel->courses->title)->toBase64()); ?>" alt="student">
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                        
                                        <?php if(Auth::check()): ?>
                                        <?php
                                            $wishtt = App\Wishlist::where('user_id', Auth::User()->id)->where('course_id', $rel->course_id)->first();
                                        ?>
                                        <?php if($wishtt == NULL): ?>
                                            <div class="heart">
                                                <form id="demo-form2" method="post" action="<?php echo e(url('show/wishlist', $rel->course_id)); ?>" data-parsley-validate
                                                    class="form-horizontal form-label-left">
                                                    <?php echo e(csrf_field()); ?>


                                                    <input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />
                                                    <input type="hidden" name="course_id"  value="<?php echo e($rel->course_id); ?>" />

                                                    <button class="wishlisht-btn heart" title="Add to wishlist" type="submit"><i class="fa fa-heart rgt-10"></i></button>
                                                </form>
                                            </div>
                                        <?php else: ?>
                                            <div class="heart-two">
                                                <form id="demo-form2" method="post" action="<?php echo e(url('remove/wishlist', $rel->course_id)); ?>" data-parsley-validate
                                                    class="form-horizontal form-label-left">
                                                    <?php echo e(csrf_field()); ?>


                                                    <input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />
                                                    <input type="hidden" name="course_id"  value="<?php echo e($rel->course_id); ?>" />

                                                    <button class="wishlisht-btn heart"  title="Remove from Wishlist" type="submit"><i class="fa fa-heart rgt-10"></i></button>
                                                </form>
                                            </div>
                                        <?php endif; ?>
                                        <?php else: ?>
                                            <div class="heart">
                                                <a href="<?php echo e(route('login')); ?>" title="heart"><i class="fa fa-heart rgt-10"></i></a>
                                            </div>
                                        <?php endif; ?>
                                        

                                        <div class="view-dtl">
                                            <div class="view-heading btm-10"><a href="<?php echo e(route('user.course.show',['id' => $rel->course_id, 'slug' => $rel->courses->slug ])); ?>"><?php echo e($rel->courses['title']); ?></a></div>
                                            <p class="btm-10"><a herf="#">by  <?php echo e($rel->courses->user['fname']); ?></a></p>
                                            <div class="rating">
                                                <ul>
                                                    <li>
                                                    <?php
                                                    $learn = 0;
                                                    $price = 0;
                                                    $value = 0;
                                                    $sub_total = 0;
                                                    $sub_total = 0;
                                                    $reviews = App\ReviewRating::where('course_id',$rel->course_id)->where('status','1')->get();
                                                    ?>
                                                    <?php if(!empty($reviews[0])): ?>
                                                    <?php
                                                    $count =  App\ReviewRating::where('course_id',$rel->course_id)->count();

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
                                                        <div class="pull-left no-rating">
                                                            <?php echo e(__('frontstaticword.NoRating')); ?>

                                                        </div>
                                                    <?php endif; ?>
                                                    </li>

                                                    <?php
                                                    $learn = 0;
                                                    $price = 0;
                                                    $value = 0;
                                                    $sub_total = 0;
                                                    $count =  count($reviews);
                                                    $onlyrev = array();

                                                    $reviewcount = App\ReviewRating::where('course_id', $course->id)->where('status',"1")->WhereNotNull('review')->get();

                                                    foreach($reviews as $review){

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
                                                        $reviewsrating = App\ReviewRating::where('course_id', $rel->course_id)->first();
                                                    ?>
                                                    <?php if(!empty($reviewsrating)): ?>
                                                    <li>
                                                        <b>(<?php echo e(round($overallrating, 1)); ?>)</b>
                                                    </li>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                            <?php if( $rel->courses->type == 1): ?>

                                                <?php if($rel->courses->discount_price == !NULL): ?>
                                                    <div class="rate text-right">
                                                        <ul>
                                                            

                                                            <li><a><b><?php echo e(currency($rel->courses->discount_price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></b></a></li>&nbsp;

                                                            <li><a><b><strike><?php echo e(currency($rel->courses->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></strike></b></a></li>

                                                           
                                                            
                                                        </ul>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="rate text-right">
                                                        <ul>
                                                            
                                                            <li><a><b><?php echo e(currency($rel->courses->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></b></a></li>
                                                            
                                                        </ul>
                                                    </div>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <div class="rate text-right">
                                                    <ul>
                                                        <li><a><b><?php echo e(__('frontstaticword.Free')); ?></b></a></li>
                                                    </ul>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php if(Auth::check()): ?>
                    <div class="report-abuse text-center btm-20">
                        <a href="#" data-toggle="modal" data-target="#myModalCourse" title="report"><i data-feather="flag"></i><?php echo e(__('frontstaticword.Report')); ?></a>
                    </div>
                <?php else: ?>
                    <div class="report-abuse text-center btm-20">
                        <a href="<?php echo e(route('login')); ?>" title="report"><i data-feather="flag"></i><?php echo e(__('frontstaticword.Report')); ?></a>
                    </div>
                <?php endif; ?>

                <!--Model start-->
                <?php if(auth()->guard()->check()): ?>
                <div class="modal fade" id="myModalCourse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">

                          <h4 class="modal-title" id="myModalLabel"><?php echo e(__('frontstaticword.Report')); ?></h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="box box-primary">
                          <div class="panel panel-sum">
                            <div class="modal-body">

                            <form id="demo-form2" method="post" action="<?php echo e(route('course.report', $course->id)); ?>"
                                data-parsley-validate class="form-horizontal form-label-left">
                                    <?php echo e(csrf_field()); ?>


                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title"><?php echo e(__('frontstaticword.Title')); ?>:<sup class="redstar">*</sup></label>
                                        <input type="text" class="form-control" name="title" id="title" placeholder="Please Enter Title" value="" required>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email"><?php echo e(__('frontstaticword.Email')); ?>:<sup class="redstar">*</sup></label>
                                        <input type="email" class="form-control" name="email" id="title" placeholder="Please Enter Email" value="<?php echo e(Auth::user()->email); ?>" required>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="detail"><?php echo e(__('frontstaticword.Detail')); ?>:<sup class="redstar">*</sup></label>
                                        <textarea name="detail" rows="4"  class="form-control" placeholder="Enter Detail" required></textarea>
                                    </div>
                                  </div>
                                </div>
                                <br>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-lg col-md-3 btn-primary"><?php echo e(__('frontstaticword.Submit')); ?></button>
                                </div>
                            </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <?php endif; ?>
                <!--Model close -->
            </div>

        </div>
    </div>
</section>
<!-- course detail end -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('custom-script'); ?>


<script>
// Hide the extra content initially, using JS so that if JS is disabled, no problemo:
    $('.read-more-content').addClass('hide_content')
    $('.read-more-show, .read-more-hide').removeClass('hide_content')

    // Set up the toggle effect:
    $('.read-more-show').on('click', function(e) {
      $(this).next('.read-more-content').removeClass('hide_content');
      $(this).addClass('hide_content');
      e.preventDefault();
    });

    // Changes contributed by @diego-rzg
    $('.read-more-hide').on('click', function(e) {
      var p = $(this).parent('.read-more-content');
      p.addClass('hide_content');
      p.prev('.read-more-show').removeClass('hide_content'); // Hide only the preceding "Read More"
      e.preventDefault();
    });
</script>

<script>
(function($) {
  "use strict";
  $(document).ready(function(){

    $(".group1").colorbox({rel:'group1'});
    $(".group2").colorbox({rel:'group2', transition:"fade"});
    $(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
    $(".group4").colorbox({rel:'group4', slideshow:true});
    $(".ajax").colorbox();
    $(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
    $(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
    $(".iframe").colorbox({iframe:true, width:"50%", height:"50%"});
    $(".inline").colorbox({inline:true, width:"50%"});
    $(".callbacks").colorbox({
      onOpen:function(){ alert('onOpen: colorbox is about to open'); },
      onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
      onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
      onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
      onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
    });

    $('.non-retina').colorbox({rel:'group5', transition:'none'})
    $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});


    $("#click").click(function(){
      $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
      return false;
    });
  });
})(jQuery);
</script>

<script>
    /* it seems javascript..*/
    var topLimit = $('#about-bar-fixed').offset().top;
    var topLimit = $('#bar-fixed').offset().top;
    $(window).scroll(function() {
      //console.log(topLimit <= $(window).scrollTop())
      if (topLimit <= $(window).scrollTop()) {
        $('#about-bar-fixed').addClass('stickIt')
        // $('#bar-fixed').addClass('stickIt')
      } else {
        $('#about-bar-fixed').removeClass('stickIt')
        // $('#bar-fixed').removeClass('stickIt')
      }
    })
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $(this).on("click", ".koh-faq-question", function() {
        $(this).parent().find(".koh-faq-answer").toggle();
        $(this).find(".fa").toggleClass('active');
    });
});
</script>


<?php $__env->stopSection(); ?>


<style type="text/css">
    .read-more-show{
      cursor:pointer;
      color: #0284A2;
    }
    .read-more-hide{
      cursor:pointer;
      color: #0284A2;
    }

    .hide_content{
      display: none;
    }
</style>

<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/front/course_detail.blade.php ENDPATH**/ ?>