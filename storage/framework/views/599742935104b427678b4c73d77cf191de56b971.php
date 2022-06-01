<?php $__env->startSection('title', 'Online Courses'); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('meta_tags'); ?>

<meta name="title" content="<?php echo e($gsetting['project_title']); ?>">
<meta name="description" content="<?php echo e($gsetting['meta_data_desc']); ?> ">
<meta property="og:title" content="<?php echo e($gsetting['project_title']); ?> ">
<meta property="og:url" content="<?php echo e(url()->full()); ?>">
<meta property="og:description" content="<?php echo e($gsetting['meta_data_desc']); ?>">
<meta property="og:image" content="<?php echo e(asset('images/logo/'.$gsetting['logo'])); ?>">
<meta itemprop="image" content="<?php echo e(asset('images/logo/'.$gsetting['logo'])); ?>">
<meta property="og:type" content="website">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="<?php echo e(asset('images/logo/'.$gsetting['logo'])); ?>">
<meta property="twitter:title" content="<?php echo e($gsetting['project_title']); ?> ">
<meta property="twitter:description" content="<?php echo e($gsetting['meta_data_desc']); ?>">
<meta name="twitter:site" content="<?php echo e(url()->full()); ?>" />

<link rel="canonical" href="<?php echo e(url()->full()); ?>"/>
<meta name="robots" content="all">
<meta name="keywords" content="<?php echo e($gsetting->meta_data_keyword); ?>">
    
<?php $__env->stopSection(); ?>

<!-- categories-tab start-->

<section id="categories-tab" class="categories-tab-main-block d-none">
    <div class="container">
        <div id="categories-tab-slider" class="categories-tab-block owl-carousel">
           
            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($cat->status == 1): ?>
                <div class="item categories-tab-dtl">
                    <a href="<?php echo e(route('category.page',['id' => $cat->id, 'category' => str_slug(str_replace('-','&',$cat->slug))])); ?>" title="<?php echo e($cat->title); ?>"><i class="fa <?php echo e($cat->icon); ?>"></i><?php echo e($cat->title); ?></a>
                </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<!-- categories-tab end-->

<?php if(isset($sliders)): ?>
<section id="home-background-slider" class="background-slider-block owl-carousel">
    <div class="lazy item home-slider-img">
        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php if($slider->status == 1): ?>
        <div id="home" class="home-main-block" style="background-image: url('<?php echo e(asset('images/slider/'.$slider['image'])); ?>')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 <?php echo e($slider['left'] == 1 ? 'col-md-offset-6 col-sm-offset-6 col-sm-6 col-md-6 text-right' : ''); ?>">
                        <div class="home-dtl">
                            <div class="home-heading"><?php echo e($slider['heading']); ?></div>
                            <p class="btm-10"><?php echo e($slider['sub_heading']); ?></p>
                            <p class="btm-20"><?php echo e($slider['detail']); ?></div>

                            <?php if($slider->search_enable == 1): ?>
                                <div class="home-search">
                                    <form method="GET" id="searchform" action="<?php echo e(route('search')); ?>">
                                        <div class="search">
                                        
                                          <input type="text" name="searchTerm" class="searchTerm" placeholder="What do you want to learn?">
                                          <button type="submit" class="searchButton">
                                            <i class="fa fa-search"></i>
                                         </button>

                                        </div>
                                    </form> 
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
</section>
<?php endif; ?>
<!-- home end -->
<!-- learning-work start -->
<?php if(isset($facts)): ?>
<section id="learning-work" class="learning-work-main-block">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $facts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-sm-6">
                <div class="learning-work-block">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="learning-work-icon">
                                <i class="fa <?php echo e($fact['icon']); ?>"></i>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="learning-work-dtl">
                                <div class="work-heading"><?php echo e($fact['heading']); ?></div>
                                <p><?php echo e($fact['sub_heading']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- learning-work end -->

<!-- Advertisement -->
<?php if(isset($advs)): ?>
<?php $__currentLoopData = $advs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($adv->position == 'belowslider'): ?>
<br>  
<section id="student" class="student-main-block top-40">
 <div class="container">
<a href="<?php echo e($adv->url1); ?>" title="<?php echo e(__('Click to visit')); ?>">
<img class="lazy img-fluid advertisement-img-one" data-src="<?php echo e(url('images/advertisement/'.$adv->image1)); ?>"
  alt="<?php echo e($adv->image1); ?>">
</a>
</div>
</section>

<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<!-- Student start -->

<?php if(Auth::check()): ?>
<?php if( isset($recent_course_id)  && isset($recent_course) && optional($recent_course)->status == 1): ?>
<section id="student" class="student-main-block top-40">
    <div class="container">
        
        <?php if($total_count >= '0'): ?>
        <h4 class="student-heading"><?php echo e(__('Recently Viewed Courses')); ?></h4>
        <div id="recent-courses-slider" class="student-view-slider-main-block owl-carousel">
            <?php $__currentLoopData = $recent_course_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
        
            $recent_course = App\Course::where('id', $view)->with('user')->first();

            ?>
            <?php if(isset($recent_course)): ?>

              <?php if($recent_course->status == 1): ?>
                <div class="item student-view-block student-view-block-1">
                    <div class="genre-slide-image">
                        <div class="view-block">
                            <div class="view-img">
                                <?php if($recent_course['preview_image'] !== NULL && $recent_course['preview_image'] !== ''): ?>
                                    <a href="<?php echo e(route('user.course.show',['id' => $recent_course->id, 'slug' => $recent_course->slug ])); ?>"><img data-src="<?php echo e(asset('images/course/'.$recent_course['preview_image'])); ?>" alt="course" class="img-fluid owl-lazy"></a>
                                <?php else: ?>
                                    <a href="<?php echo e(route('user.course.show',['id' => $recent_course->id, 'slug' => $recent_course->slug ])); ?>"><img data-src="<?php echo e(Avatar::create($recent_course->title)->toBase64()); ?>" alt="course" class="img-fluid owl-lazy"></a>
                                <?php endif; ?>
                            </div>
                            <div class="advance-badge">
                                <?php if($recent_course['level_tags'] == !NULL): ?>
                                <span class="badge bg-primary"><?php echo e($recent_course['level_tags']); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="view-user-img">

                                <?php if($recent_course->user['user_img'] !== NULL && $recent_course->user['user_img'] !== ''): ?>
                                    <a href="" title=""><img src="<?php echo e(asset('images/user_img/'.$recent_course->user['user_img'])); ?>" class="img-fluid user-img-one" alt=""></a>
                                <?php else: ?>
                                    <a href="" title=""><img src="<?php echo e(asset('images/default/user.png')); ?>" class="img-fluid user-img-one" alt=""></a>
                                <?php endif; ?>
                            </div>
                            <div class="view-dtl">
                                <div class="view-heading"><a href="<?php echo e(route('user.course.show',['id' => $recent_course->id, 'slug' => $recent_course->slug ])); ?>"><?php echo e($recent_course->title); ?></a></div>
                                <div class="user-name">
                                    <h6>By <span><?php echo e(optional($recent_course->user)['fname']); ?></span></h6>
                                </div>
                                <div class="rating">
                                    <ul>
                                        <li>
                                            <?php 
                                            $learn = 0;
                                            $price = 0;
                                            $value = 0;
                                            $sub_total = 0;
                                            $sub_total = 0;
                                            $reviews = App\ReviewRating::where('course_id',$recent_course->id)->get();
                                            ?> 
                                            <?php if(!empty($reviews[0])): ?>
                                            <?php
                                            $count =  App\ReviewRating::where('course_id',$recent_course->id)->count();

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
                                                <div class="pull-left"><?php echo e(__('frontstaticword.NoRating')); ?></div>
                                            <?php endif; ?>
                                        </li>
                                        <!-- overall rating-->
                                        <?php 
                                        $learn = 0;
                                        $price = 0;
                                        $value = 0;
                                        $sub_total = 0;
                                        $count =  count($reviews);
                                        $onlyrev = array();

                                        $reviewcount = App\ReviewRating::where('course_id', $recent_course->id)->WhereNotNull('review')->get();

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
                                            $reviewsrating = App\ReviewRating::where('course_id', $recent_course->id)->first();
                                        ?>
                                        <!-- <?php if(!empty($reviewsrating)): ?>
                                        <li>
                                            <b><?php echo e(round($overallrating, 1)); ?></b>
                                        </li>
                                        <?php endif; ?> -->
                                      
                                        <li class="reviews">
                                            (<?php
                                                $data = App\ReviewRating::where('course_id', $recent_course->id)->count();
                                                if($data>0){

                                                    echo $data;
                                                }
                                                else{

                                                    echo "0";
                                                }
                                            ?> Reviews)
                                        </li> 
                                    </ul>
                                </div>
                                <div class="view-footer">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="count-user">
                                                <i data-feather="user"></i><span>
                                                <?php
                                                    $data = App\Order::where('course_id', $recent_course->id)->count();
                                                    if(($data)>50){

                                                        echo $data;
                                                    }
                                                    else{

                                                        echo "+50";
                                                    }
                                                ?></span>
                                            </div>      
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6"> 
                                            <?php if( $recent_course->type == 1): ?>
                                                <div class="rate text-right">
                                                    <ul>

                                                        <?php if($recent_course->discount_price == !NULL): ?>

                                                            <li><a><b><?php echo e(currency($recent_course->discount_price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></b></a></li>

                                                            <li><a><b><strike><?php echo e(currency($recent_course->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></strike></b></a></li>
                                                            
                                                            
                                                        <?php else: ?>
                                                            <li><a><b>
                                                                <?php echo e(currency($recent_course->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></b></a></li>
                                                           
                                                            
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>
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
                                <div class="img-wishlist">
                                    <div class="protip-wishlist">
                                        <ul>
                                            <?php if(Auth::check()): ?>
                                                <?php
                                                    $wish = App\Wishlist::where('user_id', auth()->user()->id)->where('course_id', $recent_course->id)->first();
                                                ?>
                                                <?php if($wish == NULL): ?>
                                                    <li class="protip-wish-btn">
                                                        <form id="demo-form2" method="post" action="<?php echo e(url('show/wishlist', $recent_course->id)); ?>" data-parsley-validate 
                                                            class="form-horizontal form-label-left">
                                                            <?php echo e(csrf_field()); ?>


                                                            <input type="hidden" name="user_id"  value="<?php echo e(auth()->user()->id); ?>" />
                                                            <input type="hidden" name="course_id"  value="<?php echo e($recent_course->id); ?>" />

                                                            <button class="wishlisht-btn" title="Add to wishlist" type="submit"><i data-feather="heart" class="rgt-10"></i></button>
                                                        </form>
                                                    </li>
                                                <?php else: ?>
                                                    <li class="protip-wish-btn-two">
                                                        <form id="demo-form2" method="post" action="<?php echo e(url('remove/wishlist', $recent_course->id)); ?>" data-parsley-validate 
                                                            class="form-horizontal form-label-left">
                                                            <?php echo e(csrf_field()); ?>


                                                            <input type="hidden" name="user_id"  value="<?php echo e(auth()->user()->id); ?>" />
                                                            <input type="hidden" name="course_id"  value="<?php echo e($recent_course->id); ?>" />

                                                            <button class="wishlisht-btn" title="Remove from Wishlist" type="submit"><i data-feather="heart" class="rgt-10"></i></button>
                                                        </form>
                                                    </li>
                                                <?php endif; ?> 
                                            <?php else: ?>
                                                <li class="protip-wish-btn"><a href="<?php echo e(route('login')); ?>" title="heart"><i data-feather="heart" class="rgt-10"></i></a></li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div> 
              <?php endif; ?>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
        
    </div>
</section>
<?php endif; ?>
<?php endif; ?>
<!-- Students end -->

<!-- Student start -->
<?php if(Auth::check()): ?>
<?php
if(Schema::hasColumn('orders', 'refunded')){
    $enroll = App\Order::where('refunded', '0')->where('user_id', auth()->user()->id)->where('status', '1')->with('courses')->with(['user','courses.user'] )->get();
}
else{
    $enroll = NULL;
}
?>
<?php if( isset($enroll) ): ?>
<section id="student" class="student-main-block top-40">
    <div class="container">
       
        <?php if(count($enroll) > 0): ?>
        <h4 class="student-heading"><?php echo e(__('My Purchased Courses')); ?></h4>
        <div id="my-courses-slider" class="student-view-slider-main-block owl-carousel">
            <?php $__currentLoopData = $enroll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enrol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php if(isset($enrol->courses) && $enrol->courses['status'] == 1 ): ?>
                <div class="item student-view-block student-view-block-1">
                    <div class="genre-slide-image">
                        <div class="view-block">
                            <div class="view-img">
                                <?php if($enrol->courses['preview_image'] !== NULL && $enrol->courses['preview_image'] !== ''): ?>
                                    <a href="<?php echo e(route('course.content',['id' => $enrol->courses->id, 'slug' => $enrol->courses->slug ])); ?>"><img data-src="<?php echo e(asset('images/course/'.$enrol->courses['preview_image'])); ?>" alt="course" class="img-fluid owl-lazy"></a>
                                <?php else: ?>
                                    <a href="<?php echo e(route('course.content',['id' => $enrol->courses->id, 'slug' => $enrol->courses->slug ])); ?>"><img data-src="<?php echo e(Avatar::create($enrol->courses->title)->toBase64()); ?>" alt="course" class="img-fluid owl-lazy"></a>
                                <?php endif; ?>
                            </div>

                            <div class="view-dtl">
                                <div class="view-heading"><a href="<?php echo e(route('course.content',['id' => $enrol->courses->id, 'slug' => $enrol->courses->slug ])); ?>"><?php echo e($enrol->courses->title); ?></a></div>

                                <div class="img-wishlist">
                                    <div class="protip-wishlist">
                                        <ul>
                                            <?php if(Auth::check()): ?>
                                                <?php
                                                    $wish = App\Wishlist::where('user_id', Auth::User()->id)->where('course_id', $enrol->courses->id)->first();
                                                ?>
                                                <?php if($wish == NULL): ?>
                                                    <li class="protip-wish-btn">
                                                        <form id="demo-form2" method="post" action="<?php echo e(url('show/wishlist', $enrol->courses->id)); ?>" data-parsley-validate 
                                                            class="form-horizontal form-label-left">
                                                            <?php echo e(csrf_field()); ?>


                                                            <input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />
                                                            <input type="hidden" name="course_id"  value="<?php echo e($enrol->courses->id); ?>" />

                                                            <button class="wishlisht-btn" title="Add to wishlist" type="submit"><i data-feather="heart" class="rgt-10"></i></button>
                                                        </form>
                                                    </li>
                                                <?php else: ?>
                                                    <li class="protip-wish-btn-two">
                                                        <form id="demo-form2" method="post" action="<?php echo e(url('remove/wishlist', $enrol->courses->id)); ?>" data-parsley-validate 
                                                            class="form-horizontal form-label-left">
                                                            <?php echo e(csrf_field()); ?>


                                                            <input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />
                                                            <input type="hidden" name="course_id"  value="<?php echo e($enrol->courses->id); ?>" />

                                                            <button class="wishlisht-btn" title="Remove from Wishlist" type="submit"><i data-feather="heart" class="rgt-10"></i></button>
                                                        </form>
                                                    </li>
                                                <?php endif; ?> 
                                            <?php else: ?>
                                                <li class="protip-wish-btn"><a href="<?php echo e(route('login')); ?>" title="heart"><i data-feather="heart" class="rgt-10"></i></a></li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div> 
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
        
    </div>
</section>
<?php endif; ?>
<?php endif; ?>
<!-- Students end -->

<!-- learning-courses start -->
<?php if(isset($categories)): ?>
<section id="learning-courses" class="learning-courses-main-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <h4 class="student-heading"><?php echo e(__('frontstaticword.RecentCourses')); ?></h4>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="btn_more float-right">
           
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-12">
                <div class="learning-courses">
                    <?php if(isset($categories)): ?>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cats): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                            <li class="btn nav-item" ><a class="nav-item nav-link" id="home-tab" data-toggle="tab" href="#content-tabs" role="tab" aria-controls="home" onclick="showtab('<?php echo e($cats->id); ?>')" aria-selected="true"><?php echo e($cats['title']); ?></a></li>
                        
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <div class="tab-content" id="myTabContent">
                    <?php if(!empty($categories)): ?>
                    
                    
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="tab-pane fade show active" id="content-tabs" role="tabpanel" aria-labelledby="home-tab">
                                
                                <div id="tabShow">
                                    
                                </div>
                                
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- learning-courses end -->


<!-- Advertisement -->
<?php if(isset($advs)): ?>
<?php $__currentLoopData = $advs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($adv->position == 'belowrecent'): ?>
<br>  
<section id="student" class="student-main-block btm-40">
 <div class="container">
<a href="<?php echo e($adv->url1); ?>" title="<?php echo e(__('Click to visit')); ?>">
<img class="lazy img-fluid advertisement-img-one" data-src="<?php echo e(url('images/advertisement/'.$adv->image1)); ?>"
  alt="<?php echo e($adv->image1); ?>">
</a>
</div>
</section>
<?php endif; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php endif; ?>
<!-- Advertisement -->
<!-- Student start -->

<?php if( ! $cors->isEmpty() ): ?>
<section id="student" class="student-main-block">
    <div class="container">
        <h4 class="student-heading"><?php echo e(__('frontstaticword.FeaturedCourses')); ?></h4>
        <div id="student-view-slider" class="student-view-slider-main-block owl-carousel">
            <?php $__currentLoopData = $cors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            
              <?php if($c->status == 1 && $c->featured == 1): ?>
                <div class="item student-view-block student-view-block-1">
                    <div class="genre-slide-image <?php if($gsetting['course_hover'] == 1): ?> protip <?php endif; ?>" data-pt-placement="outside" data-pt-interactive="false" data-pt-title="#prime-next-item-description-block<?php echo e($c->id); ?>">
                        <div class="view-block">
                            <div class="view-img">
                                <?php if($c['preview_image'] !== NULL && $c['preview_image'] !== ''): ?>
                                    <a href="<?php echo e(route('user.course.show',['id' => $c->id, 'slug' => $c->slug ])); ?>"><img data-src="<?php echo e(asset('images/course/'.$c['preview_image'])); ?>" alt="course" class="img-fluid owl-lazy"></a>
                                <?php else: ?>
                                    <a href="<?php echo e(route('user.course.show',['id' => $c->id, 'slug' => $c->slug ])); ?>"><img data-src="<?php echo e(Avatar::create($c->title)->toBase64()); ?>" alt="course" class="img-fluid owl-lazy"></a>
                                <?php endif; ?>
                            </div>
                            <div class="advance-badge">
                                <?php if($c['level_tags'] == !NULL): ?>
                                <span class="badge bg-primary"><?php echo e($c['level_tags']); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="view-user-img">

                                <?php if(isset($c->user['user_img']) && $c->user['user_img'] !== ''): ?>
                                    <a href="" title=""><img src="<?php echo e(asset('images/user_img/'.$c->user['user_img'])); ?>" class="img-fluid user-img-one" alt=""></a>
                                <?php else: ?>
                                    <a href="" title=""><img src="<?php echo e(asset('images/default/user.png')); ?>" class="img-fluid user-img-one" alt=""></a>
                                <?php endif; ?>

                               
                            </div>
                            
                            <div class="view-dtl">
                                <div class="view-heading"><a href="<?php echo e(route('user.course.show',['id' => $c->id, 'slug' => $c->slug ])); ?>"><?php echo e($c->title); ?></a></div>
                                <div class="user-name">
                                    <h6>By <span><?php echo e(optional($c->user)['fname']); ?></span></h6>
                                </div>
                                <div class="rating">
                                    <ul>
                                        <li>
                                            <?php 
                                            $learn = 0;
                                            $price = 0;
                                            $value = 0;
                                            $sub_total = 0;
                                            $sub_total = 0;
                                            $reviews = App\ReviewRating::where('course_id',$c->id)->get();
                                            ?> 
                                            <?php if(!empty($reviews[0])): ?>
                                            <?php
                                            $count =  App\ReviewRating::where('course_id',$c->id)->count();

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
                                                <div class="pull-left"><?php echo e(__('frontstaticword.NoRating')); ?></div>
                                            <?php endif; ?>
                                        </li>
                                        <!-- overall rating-->
                                        <?php 
                                        $learn = 0;
                                        $price = 0;
                                        $value = 0;
                                        $sub_total = 0;
                                        $count =  count($reviews);
                                        $onlyrev = array();

                                        $reviewcount = App\ReviewRating::where('course_id', $c->id)->WhereNotNull('review')->get();

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
                                            $reviewsrating = App\ReviewRating::where('course_id', $c->id)->first();
                                        ?>
                                        <?php if(!empty($reviewsrating)): ?>
                                        <!-- <li>
                                            <b><?php echo e(round($overallrating, 1)); ?></b>
                                        </li> -->
                                        <?php endif; ?>
                                        <li class="reviews">
                                            (<?php
                                                $data = App\ReviewRating::where('course_id', $c->id)->count();
                                                if($data>0){

                                                    echo $data;
                                                }
                                                else{

                                                    echo "0";
                                                }
                                            ?> Reviews)
                                        </li> 
                                        
                                    </ul>
                                </div>
                                <div class="view-footer">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="count-user">
                                                <i data-feather="user"></i><span>
                                                    <?php
                                                    $data = App\Order::where('course_id', $c->id)->count();
                                                    if(($data)>50){

                                                        echo $data;
                                                    }
                                                    else{

                                                        echo "+50";
                                                    }
                                                ?></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6"> 
                                             <?php if( $c->type == 1): ?>
                                                <div class="rate text-right">
                                                    <ul>
                                                        

                                                        <?php if($c->discount_price == !NULL): ?>
                                                           
                                                            <li><a><b><?php echo e(currency($c['discount_price'], $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></b></a></li>

                                                            <li><a><b><strike><?php echo e(currency($c['price'], $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></strike></b></a></li>
                                                           
                                                            
                                                        <?php else: ?>

                                                            <?php if($c->price == !NULL): ?> 
                                                            <li><a><b><?php echo e(currency($c['price'], $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></b></a></li>
                                                            <?php endif; ?>
                                                          
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>
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
                            
                            

                                <div class="img-wishlist">
                                    <div class="protip-wishlist">
                                        <ul>

                                            <li class="protip-wish-btn"><a href="https://calendar.google.com/calendar/r/eventedit?text=<?php echo e($c['title']); ?>" target="__blank" title="reminder"><i data-feather="bell"></i></a></li>
                                            
                                            <?php if(Auth::check()): ?>

                                                <li class="protip-wish-btn"><a class="compare" data-id="<?php echo e(filter_var($c->id)); ?>" title="compare"><i data-feather="bar-chart"></i></a></li>
                                                
                                                <?php
                                                    $wish = App\Wishlist::where('user_id', Auth::User()->id)->where('course_id', $c->id)->first();
                                                ?>
                                                <?php if($wish == NULL): ?>
                                                    <li class="protip-wish-btn">
                                                        <form id="demo-form2" method="post" action="<?php echo e(url('show/wishlist', $c->id)); ?>" data-parsley-validate 
                                                            class="form-horizontal form-label-left">
                                                            <?php echo e(csrf_field()); ?>


                                                            <input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />
                                                            <input type="hidden" name="course_id"  value="<?php echo e($c->id); ?>" />

                                                            <button class="wishlisht-btn" title="Add to wishlist" type="submit"><i data-feather="heart"></i></button>
                                                        </form>
                                                    </li>
                                                <?php else: ?>
                                                    <li class="protip-wish-btn-two">
                                                        <form id="demo-form2" method="post" action="<?php echo e(url('remove/wishlist', $c->id)); ?>" data-parsley-validate 
                                                            class="form-horizontal form-label-left">
                                                            <?php echo e(csrf_field()); ?>


                                                            <input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />
                                                            <input type="hidden" name="course_id"  value="<?php echo e($c->id); ?>" />

                                                            <button class="wishlisht-btn" title="Remove from Wishlist" type="submit"><i data-feather="heart"></i></button>
                                                        </form>
                                                    </li>
                                                <?php endif; ?> 
                                            <?php else: ?>
                                                <li class="protip-wish-btn"><a href="<?php echo e(route('login')); ?>" title="heart"><i data-feather="heart"></i></a></li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                    <div id="prime-next-item-description-block<?php echo e($c->id); ?>" class="prime-description-block">
                        <div class="prime-description-under-block">
                            <div class="prime-description-under-block">
                                <div class="main-des">
                                    <p>Last Updated: <?php echo e(date('jS F Y', strtotime($c->updated_at))); ?></p>
                                </div>

                                <h5 class="description-heading"><?php echo e($c['title']); ?></h5>
                              

                                <ul class="description-list">
                                    <li>
                                        <i data-feather="play-circle"></i>
                                        <div class="class-des"> 
                                            <?php echo e(__('frontstaticword.Classes')); ?>: 
                                            <?php
                                                $data = App\CourseClass::where('course_id', $c->id)->count();
                                                if($data > 0){

                                                    echo $data;
                                                }
                                                else{

                                                    echo "0";
                                                }
                                            ?>
                                        </div>
                                    </li>
                                    &nbsp;
                                    <li>
                                        <div>
                                            <div class="time-des">
                                                <span class="">
                                                    <i data-feather="clock"></i>
                                                     <?php

                                                $classtwo =  App\CourseClass::where('course_id', $c->id)->sum("duration");

                                                ?>
                                                <?php echo e($classtwo); ?> Minutes 
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="lang-des">
                                            <?php if($c['language_id'] == !NULL): ?>
                                                <?php if(isset($c->language)): ?>
                                                    <i data-feather="globe"></i> <?php echo e($c->language['name']); ?>

                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </li>
                                
                                </ul>

                                <div class="product-main-des">
                                    <p><?php echo e($c->short_detail); ?></p>
                                </div>
                                <div>
                                    <?php if($c->whatlearns->isNotEmpty()): ?>
                                        <?php $__currentLoopData = $c->whatlearns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($wl->status ==1): ?>
                                            <div class="product-learn-dtl">
                                                <ul>
                                                    <li><i data-feather="check-circle"></i><?php echo e(str_limit($wl['detail'], $limit = 120, $end = '...')); ?></li>
                                                </ul>
                                            </div>
                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="des-btn-block">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <?php if($c->type == 1): ?>
                                                <?php if(Auth::check()): ?>
                                                    <?php if(Auth::User()->role == "admin"): ?>
                                                        <div class="protip-btn">
                                                            <a href="<?php echo e(route('course.content',['id' => $c->id, 'slug' => $c->slug ])); ?>" class="btn btn-secondary" title="course"><?php echo e(__('frontstaticword.GoToCourse')); ?></a>
                                                        </div>
                                                    <?php else: ?>
                                                        <?php
                                                            $order = App\Order::where('user_id', Auth::User()->id)->where('course_id', $c->id)->first();
                                                        ?>
                                                        <?php if(!empty($order) && $order->status == 1): ?>
                                                            <div class="protip-btn">
                                                                <a href="<?php echo e(route('course.content',['id' => $c->id, 'slug' => $c->slug ])); ?>" class="btn btn-secondary" title="course"><?php echo e(__('frontstaticword.GoToCourse')); ?></a>
                                                            </div>
                                                        <?php else: ?>
                                                            <?php
                                                                $cart = App\Cart::where('user_id', Auth::User()->id)->where('course_id', $c->id)->first();
                                                            ?>
                                                            <?php if(!empty($cart)): ?>
                                                                <div class="protip-btn">
                                                                    <form id="demo-form2" method="post" action="<?php echo e(route('remove.item.cart',$cart->id)); ?>">
                                                                        <?php echo e(csrf_field()); ?>

                                                                                
                                                                        <div class="box-footer">
                                                                         <button type="submit" class="btn btn-primary"><?php echo e(__('frontstaticword.RemoveFromCart')); ?></button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            <?php else: ?>
                                                                <div class="protip-btn">
                                                                    <form id="demo-form2" method="post" action="<?php echo e(route('addtocart',['course_id' => $c->id, 'price' => $c->price, 'discount_price' => $c->discount_price ])); ?>"
                                                                        data-parsley-validate class="form-horizontal form-label-left">
                                                                            <?php echo e(csrf_field()); ?>


                                                                        <input type="hidden" name="category_id"  value="<?php echo e($c->category['id']); ?>" />
                                                                                
                                                                        <div class="box-footer">
                                                                         <button type="submit" class="btn btn-primary"><?php echo e(__('frontstaticword.AddToCart')); ?></button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    <?php if($gsetting->guest_enable == 1): ?>
                                                    <form id="demo-form2" method="post" action="<?php echo e(route('guest.addtocart', $c->id)); ?>" data-parsley-validate class="form-horizontal form-label-left">
                                                            <?php echo e(csrf_field()); ?>



                                                        <div class="box-footer">
                                                         <button type="submit" class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;<?php echo e(__('frontstaticword.AddToCart')); ?></button>
                                                        </div>
                                                    </form>

                                                    <?php else: ?>

                                                    <div class="protip-btn">
                                                        <a href="<?php echo e(route('login')); ?>" class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;<?php echo e(__('frontstaticword.AddToCart')); ?></a>
                                                    </div>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                 <?php if(Auth::check()): ?>
                                                    <?php if(Auth::User()->role == "admin"): ?>
                                                        <div class="protip-btn">
                                                            <a href="<?php echo e(route('course.content',['id' => $c->id, 'slug' => $c->slug ])); ?>" class="btn btn-secondary" title="course"><?php echo e(__('frontstaticword.GoToCourse')); ?></a>
                                                        </div>
                                                    <?php else: ?>
                                                        <?php
                                                            $enroll = App\Order::where('user_id', Auth::User()->id)->where('course_id', $c->id)->first();
                                                        ?>
                                                        <?php if($enroll == NULL): ?>
                                                            <div class="protip-btn">
                                                                <a href="<?php echo e(url('enroll/show',$c->id)); ?>" class="btn btn-primary" title="Enroll Now"><?php echo e(__('frontstaticword.EnrollNow')); ?></a>
                                                            </div>
                                                        <?php else: ?>
                                                            <div class="protip-btn">
                                                                <a href="<?php echo e(route('course.content',['id' => $c->id, 'slug' => $c->slug ])); ?>" class="btn btn-secondary" title="Cart"><?php echo e(__('frontstaticword.GoToCourse')); ?></a>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    <div class="protip-btn">
                                                        <a href="<?php echo e(route('login')); ?>" class="btn btn-primary" title="Enroll Now"><?php echo e(__('frontstaticword.EnrollNow')); ?></a>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="img-wishlist">
                                                <div class="protip-wishlist">
                                                    <ul>
                                                        <?php if(Auth::check()): ?>
                                                            
                                                            <?php
                                                                $wish = App\Wishlist::where('user_id', Auth::User()->id)->where('course_id', $c->id)->first();
                                                            ?>
                                                            <?php if($wish == NULL): ?>
                                                                <li class="protip-wish-btn">
                                                                    <form id="demo-form2" method="post" action="<?php echo e(url('show/wishlist', $c->id)); ?>" data-parsley-validate 
                                                                        class="form-horizontal form-label-left">
                                                                        <?php echo e(csrf_field()); ?>


                                                                        <input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />
                                                                        <input type="hidden" name="course_id"  value="<?php echo e($c->id); ?>" />

                                                                        <button class="wishlisht-btn" title="Add to wishlist" type="submit"><i data-feather="heart"></i></button>
                                                                    </form>
                                                                </li>
                                                            <?php else: ?>
                                                                <li class="protip-wish-btn-two">
                                                                    <form id="demo-form2" method="post" action="<?php echo e(url('remove/wishlist', $c->id)); ?>" data-parsley-validate 
                                                                        class="form-horizontal form-label-left">
                                                                        <?php echo e(csrf_field()); ?>


                                                                        <input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />
                                                                        <input type="hidden" name="course_id"  value="<?php echo e($c->id); ?>" />

                                                                        <button class="wishlisht-btn" title="Remove from Wishlist" type="submit"><i data-feather="heart"></i></button>
                                                                    </form>
                                                                </li>
                                                            <?php endif; ?> 
                                                        <?php else: ?>
                                                            <li class="protip-wish-btn"><a href="<?php echo e(route('login')); ?>" title="heart"><i data-feather="heart"></i></a></li>
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        
    </div>
</section>
<?php endif; ?>
<!-- Students end -->


<!-- Subscription Bundle start -->
<section id="subscription" class="student-main-block">
    <div class="container">
        <?php if(isset($subscriptionBundles) && !$subscriptionBundles->isEmpty()): ?>
            <h4 class="student-heading"><?php echo e(__('frontstaticword.SubscriptionBundles')); ?></h4>
            <div id="subscription-bundle-view-slider" class="student-view-slider-main-block owl-carousel">
                <?php $__currentLoopData = $subscriptionBundles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bundle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($bundle->status == 1 && $bundle->is_subscription_enabled == 1): ?>

                        <div class="item student-view-block student-view-block-1">
                            <div class="genre-slide-image protip" data-pt-placement="outside"
                                data-pt-interactive="false"
                                data-pt-title="#prime-next-item-description-block-3<?php echo e($bundle->id); ?>">
                                <div class="view-block">
                                    <div class="view-img">
                                        <?php if($bundle['preview_image'] !== null && $bundle['preview_image'] !== ''): ?>
                                            <a href="<?php echo e(route('bundle.detail', $bundle->id)); ?>"><img data-src="<?php echo e(asset('images/bundle/' . $bundle['preview_image'])); ?>" alt="course" class="img-fluid owl-lazy"></a>
                                        <?php else: ?>
                                            <a href="<?php echo e(route('bundle.detail', $bundle->id)); ?>"><img data-src="<?php echo e(Avatar::create($bundle->title)->toBase64()); ?>" alt="course" class="img-fluid owl-lazy"></a>
                                        <?php endif; ?>
                                    </div>
                                    <div class="view-dtl">
                                        <div class="view-heading btm-10"><a href="<?php echo e(route('bundle.detail', $bundle->id)); ?>"><?php echo e($bundle->title); ?></a>
                                        </div>
                                        <p class="btm-10"><a herf="#"><?php echo e(__('frontstaticword.by')); ?> <?php if(isset($bundle->user)): ?> <?php echo e($bundle->user['fname']); ?> <?php echo e($bundle->user['lname']); ?> <?php endif; ?></a></p>

                                        <p class="btm-10"><a herf="#">Created At:
                                                <?php echo e(date('d-m-Y', strtotime($bundle['created_at']))); ?></a></p>

                                        <?php if($bundle->type == 1): ?>
                                            <div class="rate text-right">
                                                <ul>
                                                   

                                                    <?php if($bundle->discount_price == !null): ?>
                                                       
                                                        <li><a><b><?php echo e(currency($bundle->discount_price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></b></a></li>

                                                        <li><a><b><strike><?php echo e(currency($bundle->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></strike></b></a></li>
                                                        

                                                    <?php else: ?>

                                                        <li><a><b>
                                                            <?php echo e(currency($bundle->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></b></a></li>
                                                        
                                                        
                                                    <?php endif; ?>
                                                </ul>
                                            </div>

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
                            <div id="prime-next-item-description-block-3<?php echo e($bundle->id); ?>"
                                class="prime-description-block">
                                <div class="prime-description-under-block">
                                    <div class="prime-description-under-block">
                                        <h5 class="description-heading"><?php echo e($bundle['title']); ?></h5>
                                        <div class="protip-img">
                                            <?php if($bundle['preview_image'] !== null && $bundle['preview_image'] !== ''): ?>
                                                <a href="<?php echo e(route('bundle.detail', $bundle->id)); ?>"><img src="<?php echo e(asset('images/bundle/' . $bundle['preview_image'])); ?>"
                                                        alt="student" class="img-fluid">
                                                </a>
                                            <?php else: ?>
                                                <a href="<?php echo e(route('bundle.detail', $bundle->id)); ?>"><img src="<?php echo e(Avatar::create($bundle->title)->toBase64()); ?>" alt="student" class="img-fluid">
                                                </a>
                                            <?php endif; ?>
                                        </div>



                                        <div class="main-des">
                                            <?php if($bundle['short_detail'] != NUll): ?>

                                            <p><?php echo e(str_limit($bundle['short_detail'], $limit = 200, $end = '...')); ?></p>
                                            <?php else: ?>
                                            <p><?php echo e(str_limit($bundle['detail'], $limit = 200, $end = '...')); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="des-btn-block">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <?php if($bundle->type == 1): ?>
                                                        <?php if(Auth::check()): ?>
                                                            <?php if(Auth::User()->role == 'admin'): ?>
                                                                <div class="protip-btn">
                                                                    <a href="" class="btn btn-secondary"
                                                                        title="course"><?php echo e(__('frontstaticword.Purchased')); ?></a>
                                                                </div>
                                                            <?php else: ?>
                                                                <?php
                                                                $order = App\Order::where('user_id',
                                                                Auth::User()->id)->where('bundle_id',
                                                                $bundle->id)->first();
                                                                ?>
                                                                <?php if(!empty($order) && $order->status == 1): ?>
                                                                    <div class="protip-btn">
                                                                        <a href="" class="btn btn-secondary"
                                                                            title="course"><?php echo e(__('frontstaticword.Purchased')); ?></a>
                                                                    </div>
                                                                <?php else: ?>
                                                                    <?php
                                                                    $cart = App\Cart::where('user_id',
                                                                    Auth::User()->id)->where('bundle_id',
                                                                    $bundle->id)->first();
                                                                    ?>
                                                                    <?php if(!empty($cart)): ?>
                                                                        <div class="protip-btn">
                                                                            <form id="demo-form2" method="post"
                                                                                action="<?php echo e(route('remove.item.cart', $cart->id)); ?>">
                                                                                <?php echo e(csrf_field()); ?>


                                                                                <div class="box-footer">
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary"><?php echo e(__('frontstaticword.RemoveFromCart')); ?></button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    <?php else: ?>
                                                                        <div class="protip-btn">
                                                                            <form id="demo-form2" method="post"
                                                                                action="<?php echo e(route('bundlecart', $bundle->id)); ?>"
                                                                                data-parsley-validate
                                                                                class="form-horizontal form-label-left">
                                                                                <?php echo e(csrf_field()); ?>


                                                                                <input type="hidden" name="user_id"
                                                                                    value="<?php echo e(Auth::User()->id); ?>" />
                                                                                <input type="hidden" name="bundle_id"
                                                                                    value="<?php echo e($bundle->id); ?>" />

                                                                                <div class="box-footer">
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary"><?php echo e(__('frontstaticword.SubscribeNow')); ?></button>
                                                                                </div>


                                                                            </form>
                                                                        </div>
                                                                    <?php endif; ?>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php else: ?>
                                                            <div class="protip-btn">

                                                                <a href="<?php echo e(route('login')); ?>"
                                                                    class="btn btn-primary"><i class="fa fa-cart-plus"
                                                                        aria-hidden="true"></i>&nbsp;<?php echo e(__('frontstaticword.SubscribeNow')); ?></a>

                                                            </div>
                                                        <?php endif; ?>
                                                    <?php else: ?>
                                                        <?php if(Auth::check()): ?>
                                                            <?php if(Auth::User()->role == 'admin'): ?>
                                                                <div class="protip-btn">
                                                                    <a href="" class="btn btn-secondary"
                                                                        title="course"><?php echo e(__('frontstaticword.Purchased')); ?></a>
                                                                </div>
                                                            <?php else: ?>
                                                                <?php
                                                                $enroll = App\Order::where('user_id',
                                                                Auth::User()->id)->where('course_id', $c->id)->first();
                                                                ?>
                                                                <?php if($enroll == null): ?>
                                                                    <div class="protip-btn">
                                                                        <a href="<?php echo e(url('enroll/show', $bundle->id)); ?>"
                                                                            class="btn btn-primary"
                                                                            title="Enroll Now"><?php echo e(__('frontstaticword.SubscribeNow')); ?></a>
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div class="protip-btn">
                                                                        <a href="" class="btn btn-secondary"
                                                                            title="Cart"><?php echo e(__('frontstaticword.Purchased')); ?></a>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php else: ?>
                                                            <div class="protip-btn">
                                                                <a href="<?php echo e(route('login')); ?>" class="btn btn-primary"
                                                                    title="Enroll Now"><?php echo e(__('frontstaticword.SubscribeNow')); ?></a>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- Subscription Bundle end -->

<!-- Bundle start -->
<?php if(isset($bundles)): ?>
<section id="bundle-block" class="student-main-block">
    <div class="container">
        <?php if(count($bundles) > 0): ?>
        <h4 class="student-heading"><?php echo e(__('frontstaticword.BundleCourses')); ?></h4>

        <div id="bundle-view-slider" class="student-view-slider-main-block owl-carousel">
            <?php $__currentLoopData = $bundles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bundle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($bundle->status == 1): ?>
             
                <div class="item student-view-block student-view-block-1">
                    <div class="genre-slide-image <?php if($gsetting['course_hover'] == 1): ?> protip <?php endif; ?>" data-pt-placement="outside" data-pt-interactive="false" data-pt-title="#prime-next-item-description-block-4<?php echo e($bundle->id); ?>">
                        <div class="view-block">
                            <div class="view-img">
                                <?php if($bundle['preview_image'] !== NULL && $bundle['preview_image'] !== ''): ?>
                                    <a href="<?php echo e(route('bundle.detail', $bundle->id)); ?>"><img data-src="<?php echo e(asset('images/bundle/'.$bundle['preview_image'])); ?>" alt="course" class="img-fluid owl-lazy"></a>
                                <?php else: ?>
                                    <a href="<?php echo e(route('bundle.detail', $bundle->id)); ?>"><img data-src="<?php echo e(Avatar::create($bundle->title)->toBase64()); ?>" alt="course" class="img-fluid owl-lazy"></a>
                                <?php endif; ?>
                            </div>

                            <div class="view-dtl">
                                <div class="view-heading"><a href="<?php echo e(route('bundle.detail', $bundle->id)); ?>"><?php echo e($bundle->title); ?></a></div>
                                <div class="user-name">
                                    <h6>By <span><?php echo e(optional($c->user)['fname']); ?></span></h6>
                                </div>
                                <!-- <p class="btm-10"><a herf="#"><?php echo e(__('frontstaticword.by')); ?> <?php if(isset($bundle->user)): ?> <?php echo e($bundle->user['fname']); ?> <?php echo e($bundle->user['lname']); ?> <?php endif; ?></a></p> -->

                                <div class="view-footer">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                            <p class="view-date"><a herf="#"><i data-feather="calendar"></i> <?php echo e(date('d-m-Y',strtotime($bundle['created_at']))); ?></a></p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6"> 
                                            <?php if($bundle->type == 1): ?>
                                                <div class="rate text-right">
                                                    <ul>

                                                        <?php if($bundle->discount_price == !NULL): ?>

                                                            <li><a><b><?php echo e(currency($bundle->discount_price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></b></a></li>

                                                            <li><a><b><strike><?php echo e(currency($bundle->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></strike></b></a></li>
                                                            
                                                            
                                                        <?php else: ?>
                                                            <li><a><b>
                                                                <?php echo e(currency($bundle->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></b></a></li>
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>
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
                    </div>
                    <div id="prime-next-item-description-block-4<?php echo e($bundle->id); ?>" class="prime-description-block">
                        <div class="prime-description-under-block">
                            <div class="prime-description-under-block">
                                <h5 class="description-heading"><?php echo e($bundle['title']); ?></h5>

                               <div class="product-main-des">
                                    <p><?php echo e(strip_tags(str_limit($bundle['detail'], $limit = 200, $end = '...'))); ?></p>
                                </div>
                                <div>
                                    <div class="product-learn-dtl">
                                        <ul>

                                            <?php $__currentLoopData = $bundle->course_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bundles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <?php
                                            $course = App\Course::where('id', $bundles)->first();
                                            ?>

                                            <li><i data-feather="check-circle"></i> 
                                                <a href="#"><?php echo e($course['title']); ?></a>
                                            </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="des-btn-block">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <?php if($bundle->type == 1): ?>
                                                <?php if(Auth::check()): ?>
                                                    <?php if(Auth::User()->role == "admin"): ?>
                                                        <div class="protip-btn">
                                                            <a href="" class="btn btn-secondary" title="course"><?php echo e(__('frontstaticword.Purchased')); ?></a>
                                                        </div>
                                                    <?php else: ?>
                                                        <?php
                                                            $order = App\Order::where('user_id', Auth::User()->id)->where('bundle_id', $bundle->id)->first();
                                                        ?>
                                                        <?php if(!empty($order) && $order->status == 1): ?>
                                                            <div class="protip-btn">
                                                                <a href="" class="btn btn-secondary" title="course"><?php echo e(__('frontstaticword.Purchased')); ?></a>
                                                            </div>
                                                        <?php else: ?>
                                                            <?php
                                                                $cart = App\Cart::where('user_id', Auth::User()->id)->where('bundle_id', $bundle->id)->first();
                                                            ?>
                                                            <?php if(!empty($cart)): ?>
                                                                <div class="protip-btn">
                                                                    <form id="demo-form2" method="post" action="<?php echo e(route('remove.item.cart',$cart->id)); ?>">
                                                                        <?php echo e(csrf_field()); ?>

                                                                                
                                                                        <div class="box-footer">
                                                                         <button type="submit" class="btn btn-primary"><?php echo e(__('frontstaticword.RemoveFromCart')); ?></button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            <?php else: ?>
                                                                <div class="protip-btn">
                                                                    <form id="demo-form2" method="post" action="<?php echo e(route('bundlecart', $bundle->id)); ?>"
                                                                        data-parsley-validate class="form-horizontal form-label-left">
                                                                            <?php echo e(csrf_field()); ?>


                                                                        <input type="hidden" name="user_id"  value="<?php echo e(Auth::User()->id); ?>" />
                                                                        <input type="hidden" name="bundle_id"  value="<?php echo e($bundle->id); ?>" />
                                                                                
                                                                        <div class="box-footer">
                                                                         <button type="submit" class="btn btn-primary"><?php echo e(__('frontstaticword.AddToCart')); ?></button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    <div class="protip-btn">
                                                        <a href="<?php echo e(route('login')); ?>" class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;<?php echo e(__('frontstaticword.AddToCart')); ?></a>
                                                    </div>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                 <?php if(Auth::check()): ?>
                                                    <?php if(Auth::User()->role == "admin"): ?>
                                                        <div class="protip-btn">
                                                            <a href="" class="btn btn-secondary" title="course"><?php echo e(__('frontstaticword.Purchased')); ?></a>
                                                        </div>
                                                    <?php else: ?>
                                                        <?php
                                                            $enroll = App\Order::where('user_id', Auth::User()->id)->where('bundle_id', $bundle->id)->first();
                                                        ?>
                                                        <?php if($enroll == NULL): ?>
                                                            <div class="protip-btn">
                                                                <a href="<?php echo e(url('enroll/show',$bundle->id)); ?>" class="btn btn-primary" title="Enroll Now"><?php echo e(__('frontstaticword.EnrollNow')); ?></a>
                                                            </div>
                                                        <?php else: ?>
                                                            <div class="protip-btn">
                                                                <a href="" class="btn btn-secondary" title="Cart"><?php echo e(__('frontstaticword.Purchased')); ?></a>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    <div class="protip-btn">
                                                        <a href="<?php echo e(route('login')); ?>" class="btn btn-primary" title="Enroll Now"><?php echo e(__('frontstaticword.EnrollNow')); ?></a>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div> 

                <?php endif; ?>
             
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
        
    </div>
</section>
<?php endif; ?>
<!-- Bundle end -->

<!-- Advertisement -->
<?php if(isset($advs)): ?>
<?php $__currentLoopData = $advs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($adv->position == 'belowbundle'): ?>
<br>  
<section id="student" class="student-main-block btm-40">
 <div class="container">
<a href="<?php echo e($adv->url1); ?>" title="<?php echo e(__('Click to visit')); ?>">
<img class="lazy img-fluid advertisement-img-one" data-src="<?php echo e(url('images/advertisement/'.$adv->image1)); ?>"
  alt="<?php echo e($adv->image1); ?>">
</a>
</div>
</section>
<?php endif; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php endif; ?>


<!-- Batch start -->
<?php if(isset($batches)): ?>

<section id="batch-block" class="student-main-block">
    <div class="container">
        <?php if(count($batches) > 0): ?>
        <h4 class="student-heading"><?php echo e(__('frontstaticword.Batches')); ?></h4>
        
        <div id="batch-view-slider" class="student-view-slider-main-block owl-carousel">
            <?php $__currentLoopData = $batches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $batch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($batch->status == 1): ?>
             
                <div class="item student-view-block student-view-block-1">
                    <div class="genre-slide-image <?php if($gsetting['course_hover'] == 1): ?> protip <?php endif; ?>" data-pt-placement="outside" data-pt-interactive="false" data-pt-title="#prime-next-item-description-block-5<?php echo e($batch->id); ?>">
                        <div class="view-block">
                            <div class="view-img">
                                <?php if($batch['preview_image'] !== NULL && $batch['preview_image'] !== ''): ?>
                                    <a href="<?php echo e(route('batch.detail', $batch->id)); ?>"><img data-src="<?php echo e(asset('images/batch/'.$batch['preview_image'])); ?>" alt="course" class="img-fluid owl-lazy"></a>
                                <?php else: ?>
                                    <a href="<?php echo e(route('batch.detail', $batch->id)); ?>"><img data-src="<?php echo e(Avatar::create($batch->title)->toBase64()); ?>" alt="course" class="img-fluid owl-lazy"></a>
                                <?php endif; ?>
                            </div>
                            <div class="view-dtl">
                                <div class="view-heading btm-10"><a href="<?php echo e(route('batch.detail', $batch->id)); ?>"><?php echo e($bundle->title); ?></a></div>
                                <div class="user-name">
                                    <h6>By <span><?php echo e(optional($c->user)['fname']); ?></span></h6>
                                </div>
                                <!-- <p class="btm-10"><a herf="#"><?php echo e(__('frontstaticword.by')); ?> <?php if(isset($batch->user)): ?> <?php echo e($batch->user['fname']); ?> <?php echo e($batch->user['lname']); ?> <?php endif; ?></a></p> -->

                                <p class="btm-10"><a herf="#">Created At: <?php echo e(date('d-m-Y',strtotime($batch['created_at']))); ?></a></p>
                              
                            </div>
                           
                        </div>
                    </div>
                    <div id="prime-next-item-description-block-5<?php echo e($batch->id); ?>" class="prime-description-block">
                        <div class="prime-description-under-block">
                            <div class="prime-description-under-block">
                                <h5 class="description-heading"><?php echo e($batch['title']); ?></h5>
                                <div class="protip-img">
                                    <?php if($batch['preview_image'] !== NULL && $batch['preview_image'] !== ''): ?>
                                        <a href="<?php echo e(route('batch.detail', $batch->id)); ?>"><img src="<?php echo e(asset('images/batch/'.$batch['preview_image'])); ?>" alt="student" class="img-fluid">
                                        </a>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('batch.detail', $batch->id)); ?>"><img src="<?php echo e(Avatar::create($batch->title)->toBase64()); ?>" alt="course" class="img-fluid"></a>
                                    <?php endif; ?>
                                </div>

                                

                                <div class="main-des">
                                    <p><?php echo str_limit($batch['detail'], $limit = 200, $end = '...'); ?></p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    
                </div> 

                <?php endif; ?>
             
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <?php endif; ?>
        
    </div>
</section>

<?php endif; ?>
<!-- Batch end -->

<!-- Zoom start -->
<?php if($gsetting->zoom_enable == '1' || $gsetting->bbl_enable == '1' || $gsetting->googlemeet_enable == '1' || $gsetting->jitsimeet_enable == '1'): ?>
<section id="student" class="student-main-block">
    <div class="container">
        <?php
            $mytime = Carbon\Carbon::now();
        ?>
        <?php if( ! $meetings->isEmpty() || ! $bigblue->isEmpty() || isset($allgooglemeet) ||  ! $jitsimeeting->isEmpty() ): ?>
        <h4 class="student-heading"><?php echo e(__('frontstaticword.LiveMeetings')); ?></h4>
        <div id="zoom-view-slider" class="student-view-slider-main-block owl-carousel">

            <?php if( ! $meetings->isEmpty() ): ?>
                <?php $__currentLoopData = $meetings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meeting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item student-view-block student-view-block-1">
                        <div class="genre-slide-image <?php if($gsetting['course_hover'] == 1): ?> protip <?php endif; ?>" data-pt-placement="outside" data-pt-interactive="false" data-pt-title="#prime-next-item-description-block-6<?php echo e($meeting->id); ?>">
                            <div class="view-block">
                                <div class="view-img">

                                    <?php if($meeting['image'] !== NULL && $meeting['image'] !== ''): ?>
                                        <a href="<?php echo e(route('zoom.detail', $meeting->id)); ?>"><img data-src="<?php echo e(asset('images/zoom/'.$meeting['image'])); ?>" alt="course" class="img-fluid owl-lazy"></a>
                                    <?php else: ?>
                                       <a href="<?php echo e(route('zoom.detail', $meeting->id)); ?>"><img data-src="<?php echo e(Avatar::create($meeting['meeting_title'])->toBase64()); ?>" alt="course" class="img-fluid owl-lazy"></a>
                                    <?php endif; ?>

                                   
                                </div>

                                <?php if(asset('images/meeting_icons/zoom.png') == !NULL): ?>
                                <div class="meeting-icon"><img src="<?php echo e(asset('images/meeting_icons/zoom.png')); ?>" class="img-circle" alt=""></div>
                                <?php endif; ?>


                                <div class="view-dtl">
                                    <div class="view-heading"><a href="#"> <?php echo e($meeting->meeting_title); ?></a></div>
                                    <div class="user-name">
                                        <h6>By <span><?php echo e(optional($c->user)['fname']); ?></span></h6>
                                    </div>
                                    <div class="view-footer">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="view-date">
                                                    <a href="#"><i data-feather="calendar"></i> <?php echo e(date('d-m-Y',strtotime($meeting['start_time']))); ?></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="view-time">
                                                    <a href="#"><i data-feather="clock"></i> <?php echo e(date('h:i:s A',strtotime($meeting['start_time']))); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="prime-next-item-description-block-6<?php echo e($meeting->id); ?>" class="prime-description-block">
                            <div class="prime-description-under-block">
                                <div class="prime-description-under-block">
                                    <h5 class="description-heading"><a href="<?php echo e(route('zoom.detail', $meeting->id)); ?>"><?php echo e($meeting['meeting_title']); ?></a></h5>
                                    <div class="protip-img">
                                        <h3 class="description-heading"><?php echo e(__('frontstaticword.by')); ?> <?php if(isset($meeting->user)): ?> <?php echo e($meeting->user['fname']); ?> <?php endif; ?></h>
                                        <p class="meeting-owner btm-10"><a herf="#">Meeting Owner: <?php echo e($meeting->owner_id); ?></a></p>
                                    </div>
                                    <div class="main-des">
                                        <p class="btm-10"><a herf="#">Start At: <?php echo e(date('d-m-Y | h:i:s A',strtotime($meeting['start_time']))); ?></a></p>
                                    </div>
                                    <div class="des-btn-block">
                                        <a href="<?php echo e($meeting->zoom_url); ?>" class="iframe btn btn-light">Join Meeting</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

            <?php if( ! $bigblue->isEmpty() ): ?>
                <?php $__currentLoopData = $bigblue; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bbl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                 
                    <div class="item student-view-block student-view-block-1">
                        <div class="genre-slide-image <?php if($gsetting['course_hover'] == 1): ?> protip <?php endif; ?>" data-pt-placement="outside" data-pt-interactive="false" data-pt-title="#prime-next-item-description-block-7<?php echo e($bbl->id); ?>">
                            <div class="view-block">
                                <div class="view-img">
                                    <a href="<?php echo e(route('bbl.detail', $bbl->id)); ?>"><img data-src="<?php echo e(Avatar::create($bbl['meetingname'])->toBase64()); ?>" alt="course" class="img-fluid owl-lazy"></a>
                                </div>

                                <?php if(asset('images/meeting_icons/bigblue.png') == !NULL): ?>
                                <div class="meeting-icon"><img src="<?php echo e(asset('images/meeting_icons/bigblue.png')); ?>" class="img-circle" alt=""></div>
                                <?php endif; ?>

                                <div class="view-dtl">
                                    <div class="view-heading"><a href="<?php echo e(route('bbl.detail', $bbl->id)); ?>"><?php echo e(str_limit($bbl['meetingname'], $limit = 30, $end = '...')); ?></a></div>
                                    <div class="user-name">
                                        <h6>By <span><?php echo e(optional($c->user)['fname']); ?></span></h6>
                                    </div>
                                    <div class="view-footer">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="view-date">
                                                    <a href="#"><i data-feather="calendar"></i> <?php echo e(date('d-m-Y',strtotime($bbl['start_time']))); ?></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="view-time">
                                                    <a href="#"><i data-feather="clock"></i> <?php echo e(date('h:i:s A',strtotime($bbl['start_time']))); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div id="prime-next-item-description-block-7<?php echo e($bbl->id); ?>" class="prime-description-block">
                            <div class="prime-description-under-block">
                                <div class="prime-description-under-block">
                                    <h5 class="description-heading"><?php echo e($bbl['meetingname']); ?></h5>
                                    <div class="protip-img">
                                        <a href="<?php echo e(route('bbl.detail', $bbl->id)); ?>"><img src="<?php echo e(Avatar::create($bbl['meetingname'])->toBase64()); ?>" alt="course" class="img-fluid"></a>
                                    </div>

                                    <div class="main-des">
                                        <p><?php echo $bbl['detail']; ?></p>
                                    </div>
                                    <div class="des-btn-block">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

            <?php if( isset($allgooglemeet) ): ?>
                <?php $__currentLoopData = $allgooglemeet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meeting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item student-view-block student-view-block-1">
                        <div class="genre-slide-image <?php if($gsetting['course_hover'] == 1): ?> protip <?php endif; ?>" data-pt-placement="outside" data-pt-interactive="false" data-pt-title="#prime-next-item-description-block-6<?php echo e($meeting['meeting_id']); ?>">
                            <div class="view-block">
                                <div class="view-img">

                                    <?php if($meeting['image'] !== NULL && $meeting['image'] !== ''): ?>
                                        <a href="<?php echo e(route('googlemeetdetailpage.detail', $meeting['id'])); ?>"><img data-src="<?php echo e(asset('images/googlemeet/profile_image/'.$meeting['image'])); ?>" alt="course" class="img-fluid owl-lazy"></a>
                                    <?php else: ?>
                                       <a href="<?php echo e(route('googlemeetdetailpage.detail', $meeting['id'])); ?>"><img data-src="<?php echo e(Avatar::create($meeting['meeting_title'])->toBase64()); ?>" alt="course" class="img-fluid owl-lazy"></a>
                                    <?php endif; ?>

                                   
                                </div>

                                <?php if(asset('images/meeting_icons/google.png') == !NULL): ?>
                                <div class="meeting-icon"><img src="<?php echo e(asset('images/meeting_icons/google.png')); ?>" class="img-circle" alt=""></div>
                                <?php endif; ?>

                                <div class="view-dtl">
                                    <div class="view-heading"><a href="#"> <?php echo e($meeting->meeting_title); ?></a></div>
                                    <div class="user-name">
                                        <h6>By <span><?php echo e(optional($c->user)['fname']); ?></span></h6>
                                    </div>
                                    <div class="view-footer">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="view-date">
                                                    <a href="#"><i data-feather="calendar"></i> <?php echo e(date('d-m-Y',strtotime($meeting['start_time']))); ?></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="view-time">
                                                    <a href="#"><i data-feather="clock"></i> <?php echo e(date('h:i:s A',strtotime($meeting['start_time']))); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="prime-next-item-description-block-6<?php echo e($meeting['meeting_id']); ?>" class="prime-description-block">
                            <div class="prime-description-under-block">
                                <div class="prime-description-under-block">
                                    <h5 class="description-heading"><a href="<?php echo e(route('zoom.detail', $meeting->id)); ?>"><?php echo e($meeting['meeting_title']); ?></a></h5>
                                    <div class="protip-img">
                                        <h3 class="description-heading"><?php echo e(__('frontstaticword.by')); ?> <?php if(isset($meeting->user)): ?> <?php echo e($meeting->user['fname']); ?> <?php endif; ?></h>
                                        <p class="meeting-owner btm-10"><a herf="#">Meeting Owner: <?php echo e($meeting->owner_id); ?></a></p>
                                    </div>
                                    <div class="main-des">
                                        <p class="btm-10"><a herf="#">Start At: <?php echo e(date('d-m-Y | h:i:s A',strtotime($meeting['start_time']))); ?></a></p>
                                    </div>
                                    <div class="main-des">
                                        <p class="btm-10"><a herf="#">End At: <?php echo e(date('d-m-Y | h:i:s A',strtotime($meeting['end_time']))); ?></a></p>
                                    </div>
                                    <div class="des-btn-block">
                                        <a href="<?php echo e($meeting->meet_url); ?>" target="_blank" class="btn btn-light">Join Meeting</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

            <?php if( ! $jitsimeeting->isEmpty() ): ?>
                <?php $__currentLoopData = $jitsimeeting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meeting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item student-view-block student-view-block-1">
                        <div class="genre-slide-image <?php if($gsetting['course_hover'] == 1): ?> protip <?php endif; ?>" data-pt-placement="outside" data-pt-interactive="false" data-pt-title="#prime-next-item-description-block-6<?php echo e($meeting['meeting_id']); ?>">
                            <div class="view-block">
                                <div class="view-img">

                                    <?php if($meeting['image'] !== NULL && $meeting['image'] !== ''): ?>
                                        <a href="<?php echo e(route('jitsipage.detail', $meeting['id'])); ?>"><img data-src="<?php echo e(asset('images/jitsimeet/'.$meeting['image'])); ?>" alt="course" class="img-fluid owl-lazy"></a>
                                    <?php else: ?>
                                       <a href="<?php echo e(route('jitsipage.detail', $meeting['id'])); ?>"><img data-src="<?php echo e(Avatar::create($meeting['meeting_title'])->toBase64()); ?>" alt="course" class="img-fluid owl-lazy"></a>
                                    <?php endif; ?>

                                   
                                </div>

                                <?php if(asset('images/meeting_icons/jitsi.png') == !NULL): ?>
                                <div class="meeting-icon"><img src="<?php echo e(asset('images/meeting_icons/jitsi.png')); ?>" class="img-circle" alt=""></div>
                                <?php endif; ?>

                                <div class="view-dtl">
                                    <div class="view-heading"><a href="#"> <?php echo e($meeting->meeting_title); ?></a></div>
                                    <div class="user-name">
                                        <h6>By <span><?php echo e(optional($c->user)['fname']); ?></span></h6>
                                    </div>
                                    <div class="view-footer">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="view-date">
                                                    <a href="#"><i data-feather="calendar"></i> <?php echo e(date('d-m-Y',strtotime($meeting['start_time']))); ?></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="view-time">
                                                    <a href="#"><i data-feather="clock"></i> <?php echo e(date('h:i:s A',strtotime($meeting['start_time']))); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="prime-next-item-description-block-6<?php echo e($meeting['meeting_id']); ?>" class="prime-description-block">
                            <div class="prime-description-under-block">
                                <div class="prime-description-under-block">
                                    <h5 class="description-heading"><a href="<?php echo e(route('zoom.detail', $meeting->id)); ?>"><?php echo e($meeting['meeting_title']); ?></a></h5>
                                    <div class="protip-img">
                                        <h3 class="description-heading"><?php echo e(__('frontstaticword.by')); ?> <?php if(isset($meeting->user)): ?> <?php echo e($meeting->user['fname']); ?> <?php endif; ?></h>
                                        <p class="meeting-owner btm-10"><a herf="#">Meeting Owner: <?php echo e($meeting->owner_id); ?></a></p>
                                    </div>
                                    <div class="main-des">
                                        <p class="btm-10"><a herf="#">Start At: <?php echo e(date('d-m-Y | h:i:s A',strtotime($meeting['start_time']))); ?></a></p>
                                    </div>
                                    <div class="main-des">
                                        <p class="btm-10"><a herf="#">End At: <?php echo e(date('d-m-Y | h:i:s A',strtotime($meeting['end_time']))); ?></a></p>
                                    </div>
                                    <div class="des-btn-block">
                                        <a href="<?php echo e(url('meetup-conferencing/'.$meeting->meeting_id)); ?>" target="_blank" class="btn btn-light">Join Meeting</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>


        </div>

        <?php endif; ?>
        
    </div>
</section>
<?php endif; ?>
<!-- Zoom end -->

<!-- google class room start -->
<?php if(Schema::hasTable('googleclassrooms') && Module::has('Googleclassroom') && Module::find('Googleclassroom')->isEnabled()): ?>

<?php echo $__env->make('googleclassroom::frontend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endif; ?>

<!-- google class room end -->

<!-- Bundle start -->
<?php if( ! $blogs->isEmpty() ): ?>
<section id="student" class="student-main-block">
    <div class="container">
        
        <h4 class="student-heading"><?php echo e(__('frontstaticword.RecentBlogs')); ?></h4>
        <div id="blog-post-slider" class="student-view-slider-main-block owl-carousel">
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
             
                <div class="item student-view-block student-view-block-1">
                    <div class="genre-slide-image <?php if($gsetting['course_hover'] == 1): ?> protip <?php endif; ?>" data-pt-placement="outside" data-pt-interactive="false" data-pt-title="#prime-next-item-description-block-8<?php echo e($blog->id); ?>">
                        <div class="view-block">
                            <div class="view-img">
                                <?php if($blog['image'] !== NULL && $blog['image'] !== ''): ?>
                                    <?php if($blog->slug != NULL): ?>
                                        <a href="<?php echo e(route('blog.detail', ['id' => $blog->id, 'slug' => $blog->slug ])); ?>">
                                    <?php else: ?>
                                         <a href="<?php echo e(route('blog.detail', ['id' => $blog->id, 'slug' => str_slug(str_replace('-','&',$blog->heading)) ])); ?>">
                                    <?php endif; ?>

                                        <img data-src="<?php echo e(asset('images/blog/'.$blog['image'])); ?>" alt="course" class="img-fluid owl-lazy">
                                    </a>
                                <?php else: ?>
                                    <?php if($blog->slug != NULL): ?>
                                        <a href="<?php echo e(route('blog.detail', ['id' => $blog->id, 'slug' => $blog->slug ])); ?>">
                                    <?php else: ?>
                                        <a href="<?php echo e(route('blog.detail', ['id' => $blog->id, 'slug' => str_slug(str_replace('-','&',$blog->heading)) ])); ?>">
                                    <?php endif; ?>
                                        <img data-src="<?php echo e(Avatar::create($blog->heading)->toBase64()); ?>" alt="course" class="img-fluid owl-lazy">
                                    </a>
                                <?php endif; ?>

                                
                            </div>
                            <div class="view-dtl">
                                <div class="view-heading">
                                     <?php if($blog->slug != NULL): ?>
                                        <a href="<?php echo e(route('blog.detail', ['id' => $blog->id, 'slug' => $blog->slug ])); ?>">
                                            <?php echo e(str_limit($blog['heading'], $limit = 25, $end = '...')); ?>

                                    <?php else: ?>
                                        <a href="<?php echo e(route('blog.detail', ['id' => $blog->id, 'slug' => str_slug(str_replace('-','&',$blog->heading)) ])); ?>">

                                            <?php echo e(str_limit($blog['heading'], $limit = 25, $end = '...')); ?>

                                    <?php endif; ?>
                                    </a>
                                </div>
                                <div class="user-name">
                                    <h6>By <span><?php echo e(optional($blog->user)['fname']); ?></span></h6>
                                </div>
                                <div class="view-footer">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="view-date">
                                                <a href="#"><i data-feather="calendar"></i> <?php echo e(date('d-m-Y',strtotime($blog['start_time']))); ?></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="view-time">
                                                <a href="#"><i data-feather="clock"></i> <?php echo e(date('h:i:s A',strtotime($blog['start_time']))); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div id="prime-next-item-description-block-8<?php echo e($blog->id); ?>" class="prime-description-block">
                        <div class="prime-description-under-block">
                            <div class="prime-description-under-block">
                                <h5 class="description-heading"><?php echo e($blog['heading']); ?></h5>
                                <div class="protip-img">
                                    <?php if($blog['image'] !== NULL && $blog['image'] !== ''): ?>
                                        <?php if($blog->slug != NULL): ?>
                                            <a href="<?php echo e(route('blog.detail', ['id' => $blog->id, 'slug' => $blog->slug ])); ?>">
                                        <?php else: ?>
                                             <a href="<?php echo e(route('blog.detail', ['id' => $blog->id, 'slug' => str_slug(str_replace('-','&',$blog->heading)) ])); ?>">
                                        <?php endif; ?>
                                            <img src="<?php echo e(asset('images/blog/'.$blog['image'])); ?>" alt="course" class="img-fluid">
                                        </a>
                                    <?php else: ?>
                                        
                                        <?php if($blog->slug != NULL): ?>
                                            <a href="<?php echo e(route('blog.detail', ['id' => $blog->id, 'slug' => $blog->slug ])); ?>">
                                        <?php else: ?>
                                             <a href="<?php echo e(route('blog.detail', ['id' => $blog->id, 'slug' => str_slug(str_replace('-','&',$blog->heading)) ])); ?>">
                                        <?php endif; ?>
                                            <img src="<?php echo e(Avatar::create($blog->heading)->toBase64()); ?>" alt="course" class="img-fluid">
                                        </a>
                                    <?php endif; ?>
                                </div>

                                <div class="main-des">
                                    <p><?php echo e(substr(preg_replace("/\r\n|\r|\n/",'',strip_tags(html_entity_decode($blog->detail))), 0, 400)); ?></p>
                                </div>
                                <div class="des-btn-block">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        
    </div>
</section>
<?php endif; ?>
<!-- Bundle end -->
<!-- recommendations start -->
<section id="border-recommendation" class="border-recommendation">
    <?php
        $gets = App\GetStarted::first();
    ?>
    <?php if(isset($gets)): ?> 
    <div class="top-border"></div>
    <div class="recommendation-main-block  text-center" style="background-image: url('<?php echo e(asset('images/getstarted/'.$gets['image'])); ?>')">
        <div class="container">
            <h3 class="text-white"><?php echo e($gets['heading']); ?></h3>
            <p class="text-white btm-20"><?php echo e($gets['sub_heading']); ?></p>
            <?php if($gets->button_txt == !NULL): ?>
            <div class="recommendation-btn text-white">
                <a href="<?php echo e($gets['link']); ?>" class="btn btn-primary" title="search"><?php echo e($gets['button_txt']); ?></a>
            </div>
            <?php endif; ?> 
        </div>
    </div>
    <?php endif; ?>
</section>
<!-- recommendations end -->
<!-- categories start -->

<?php if(!$category->isEmpty() && count($category) > 1): ?>

<section id="categories" class="categories-main-block">
    <div class="container">
        <h3 class="categories-heading btm-30"><?php echo e(__('frontstaticword.FeaturedCategories')); ?></h3>
        <div class="row">

            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($t->status == 1 && $t->featured == 1): ?>

            <div class="col-lg-2 col-md-2 col-sm-6 col-6">

                <div class="image-container btm-20">
                <a href="<?php echo e(route('category.page',['id' => $t->id, 'category' => str_slug(str_replace('-','&',$t->slug))])); ?>">

                  <div class="image-overlay">
                    <i class="fa <?php echo e($t['icon']); ?>"></i><?php echo e($t['title']); ?>

                  </div>

                  <?php if($t['cat_image'] == !NULL): ?>
                    <img src="<?php echo e(asset('images/category/'.$t['cat_image'])); ?>">
                  <?php else: ?>
                    <img src="<?php echo e(Avatar::create($t->title)->toBase64()); ?>">
                  <?php endif; ?>
                </a>
                </div>
                
            </div>

            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<?php endif; ?>

<!-- categories end -->
<!-- testimonial start -->

<?php if( ! $testi->isEmpty() ): ?>
<section id="testimonial" class="testimonial-main-block">
    <div class="container">
        <h3 class="btm-30"><?php echo e(__('frontstaticword.HomeTestimonial')); ?></h3>
        <div id="testimonial-slider" class="testimonial-slider-main-block owl-carousel">
            <?php $__currentLoopData = $testi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item testimonial-block">
                <ul>
                    <li><img data-src="<?php echo e(asset('images/testimonial/'.$tes['image'])); ?>" alt="blog" class="img-fluid owl-lazy"></li>
                    <li><h5 class="testimonial-heading"><?php echo e($tes['client_name']); ?></h5>
                        <?php for($i = 1; $i <= 5; $i++): ?> <?php if($i<=$tes->rating): ?>
                        <i class='fa fa-star' style='color:orange'></i>
                        <?php else: ?>
                        <i class='fa fa-star' style='color:#ccc'></i>
                        <?php endif; ?>
                        <?php endfor; ?>
                        <h6><?php echo e($tes['designation']); ?></h6>
                    </li>
                 </ul>
                <p><?php echo e(str_limit(preg_replace("/\r\n|\r|\n/",'',strip_tags(html_entity_decode($tes->details))) , $limit = 300, $end = '...')); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- testimonial end -->


<!-- Advertisement -->
<?php if(isset($advs)): ?>
<?php $__currentLoopData = $advs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($adv->position == 'belowtestimonial'): ?>
<br>  
<section id="student" class="student-main-block btm-40">
 <div class="container">
<a href="<?php echo e($adv->url1); ?>" title="<?php echo e(__('Click to visit')); ?>">
<img class="lazy img-fluid advertisement-img-one" data-src="<?php echo e(url('images/advertisement/'.$adv->image1)); ?>"
  alt="<?php echo e($adv->image1); ?>">
</a>
</div>
</section>

<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>


<?php if( !$trusted->isEmpty()): ?>
<section id="trusted" class="trusted-main-block">
    <div class="container">
        <div class="patners-block">
            
            <h6 class="patners-heading text-center btm-40"><?php echo e(__('frontstaticword.Trusted')); ?></h6>
            <div id="patners-slider" class="patners-slider owl-carousel">
                <?php $__currentLoopData = $trusted; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trust): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item-patners-img">
                        <a href="<?php echo e($trust['url']); ?>" target="_blank"><img data-src="<?php echo e(asset('images/trusted/'.$trust['image'])); ?>" class="img-fluid owl-lazy" alt="patners-1"></a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    
</section>

<section id="trusted" class="trusted-main-block">
    <!-- google adsense code -->
    <div class="container-fluid" id="adsense">
        <?php
            $ad = App\Adsense::first();
        ?>
        <?php
            if (isset($ad) ) {
             if ($ad->ishome==1 && $ad->status==1) {
                $code = $ad->code;
                echo html_entity_decode($code);
             }
            }
        ?>
    </div>
</section>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom-script'); ?>
<script>
    (function($) {
      "use strict";
        $(function() {
           $( "#home-tab" ).trigger( "click" );
        });
    })(jQuery);

    function showtab(id){
        $.ajax({
            type : 'GET',
            url  : '<?php echo e(url('/tabcontent')); ?>/'+id,
            dataType  : 'json',
            success : function(data){

                $('.btn_more').html(data.btn_view);
                $('#tabShow').html(data.tabview);

            }
        });
    }
</script>

<script src="<?php echo e(url('js/colorbox-script.js')); ?>"></script>


<script>
    "use Strict";
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
$(function () {
    $('.compare').on('click', function (e) {
        var id = $(this).data('id');
        $.ajax({
        type: "POST",
        dataType: "json",
        url:'compare/dataput',
        data: {
            id: id
            },
            success: function (data) {
            }
        });
    });
});
</script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/home.blade.php ENDPATH**/ ?>