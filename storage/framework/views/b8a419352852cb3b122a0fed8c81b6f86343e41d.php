
<?php $__env->startSection('title', "$user->fname"); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section id="instructor-block" class="instructor-main-block instructor-profile">
	 <div class="container">
	 	<div class="row">
	 		<div class="col-xl-8 col-lg-8 col-md-8">
	 			<div class="instructor-block">
	 				<div class="instructor-small-heading"><?php echo e(__('frontstaticword.Instructor')); ?></div>
	 				<h1><?php echo e($user['fname']); ?> <?php echo e($user['lname']); ?></h1>
	 				<?php if(auth()->guard()->check()): ?>
	 				<div class="sub-heading"><?php echo e($user['email']); ?></div>
	 				<?php endif; ?>
	 				<div class="instructor-business-block d-none">
		 				<div class="instructor-student">
		 					<div class="total-students"><?php echo e(__('frontstaticword.Totalstudents')); ?></div>
		 					<div class="total-number">
		 						<?php
	                                $data = App\Order::where('instructor_id', $user->id)->count();
	                                if($data > 0){

	                                    echo $data;
	                                }
	                                else{

	                                    echo "0";
	                                }
	                            ?>
                        	</div>
		 				</div>
		 				
		 			</div>
		 			<div class="about-content-sidebar instructor-sidebar d-none">
	                    <div class="row">
	                    	
		                    <div class="col-lg-12">
		                    	<div class="row">
		                    		<div class="col-lg-8 col-12">
				                    	<div class="instructor-content-block">
					                        <h5 class="about-content-heading"><?php echo e($user['fname']); ?> <?php echo e($user['lname']); ?></h5>

					                        

					                        <?php

					                		$followers = App\Followers::where('user_id', '!=', $user->id)->where('follower_id', $user->id)->count();

					                		$followings = App\Followers::where('user_id', $user->id)->where('follower_id','!=', $user->id)->count();

					                		?>
					                       
					                        <div class="instructor-follower">
				                        		<div class="followers-status">
					                                <span class="followers-value"><?php echo e($followers); ?></span>
					                                <span class="followers-heading">Followers</span>
					                            </div>
				                        		<div class="following-status">
					                                <span class="followers-value"><?php echo e($followings); ?></span>
					                                <span class="followers-heading">Following</span>
					                            </div>
					                        </div>

					                        <?php
			                    			$year = Carbon\Carbon::parse($user->created_at)->year;
			                    			$course_count = App\Course::where('user_id', $user->id)->count();
			                    			?>
					                        
					                        <div class="about-reward-badges">
					                            <img src="<?php echo e(url('images/badges/1.png')); ?>" class="img-fluid" alt="" data-toggle="tooltip" data-placement="bottom" title="Member Since <?php echo e($year); ?>">
					                            <?php if($course_count >= 5): ?>
					                            <img src="<?php echo e(url('images/badges/2.png')); ?>" class="img-fluid" alt="" data-toggle="tooltip" data-placement="bottom" title="Has <?php echo e($course_count); ?> courses">
					                            <?php endif; ?>
					                            <img src="<?php echo e(url('images/badges/3.png')); ?>" class="img-fluid" alt="" data-toggle="tooltip" data-placement="bottom" title="rating from 4 to 5">
					                            <img src="<?php echo e(url('images/badges/4.png')); ?>" class="img-fluid" alt="" data-toggle="tooltip" data-placement="bottom" title=" <?php echo e($data); ?> users has enrolled">
					                            <img src="<?php echo e(url('images/badges/5.png')); ?>" class="img-fluid" alt="" data-toggle="tooltip" data-placement="bottom" title="Live classes <?php echo e($live_class); ?>">
					                        </div>
					                    </div>
					                </div>
					                <div class="col-lg-4 col-12">
					                	<div class="instructor-btn">

					                		<?php if(auth()->guard()->check()): ?>

					                		<?php

					                		$follow = App\Followers::where('follower_id', $user->id)->first();

					                		?>

					                		<?php if($follow == NULL): ?>


					                		<form id="demo-form2" method="post" action="<?php echo e(route('follow')); ?>"
                                                data-parsley-validate class="form-horizontal form-label-left">
                                                    <?php echo e(csrf_field()); ?>


                                                <input type="hidden" name="follower_id"  value="<?php echo e($user->id); ?>" />

                                               
                                                 <button type="submit" class="btn btn-primary">&nbsp;Follow</button>
                                            </form>
					                		

                                            <?php else: ?>
                                            
					                		<form id="demo-form2" method="post" action="<?php echo e(route('unfollow')); ?>"
                                                data-parsley-validate class="form-horizontal form-label-left">
                                                    <?php echo e(csrf_field()); ?>


                                                <input type="hidden" name="user_id"value="<?php echo e($user->id); ?>" />
                                                <input type="hidden" name="instructor_id"  value="<?php echo e($user->id); ?>" />

                                                
                                                 <button type="submit" class="btn btn-secondary">&nbsp;Unfollow</button>
                                            </form>

                                            <?php endif; ?>

                                            <?php endif; ?>

                                            

					                	</div>
					                </div>
				                </div>
		                    </div>
	                    </div>
	                </div>
		 			<div class="instructor-tabs mt-3">
            			<ul class="nav nav-tabs" id="tabs-tab" role="tablist">
			                <li class="nav-item">
			                    <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true"><?php echo e(__('frontstaticword.Aboutme')); ?></a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" id="classes-tab" data-toggle="tab" href="#classes" role="tab" aria-controls="classes" aria-selected="false"><?php echo e(__('frontstaticword.MyCourses')); ?></a>
			                </li>
			                <li class="nav-item d-none">
			                    <a class="nav-link" id="badges-tab" data-toggle="tab" href="#badges" role="tab" aria-controls="badges" aria-selected="false">Badges</a>
			                </li>
			            </ul>
			            <div class="tab-content" id="nav-tabContent">
			                <div class="tab-pane active show" id="about" role="tabpanel" aria-labelledby="about-tab">
			                	<div class="instructor-tabs-content">
			                		<?php echo $user['detail']; ?>

			                	</div>
                			</div>
			                <div class="tab-pane fade" id="classes" role="tabpanel" aria-labelledby="classes-tab">
			                	<div class="about-instructor">
							        <div class="row">
					 					<?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					              <?php if($c->status == 1): ?>
					                <div class="col-lg-6 col-sm-6">
					                	<div class="student-view-block">
					                        <div class="view-block">
					                            <div class="view-img">
					                                <?php if($c['preview_image'] !== NULL && $c['preview_image'] !== ''): ?>
					                                    <a href="<?php echo e(route('user.course.show',['id' => $c->id, 'slug' => $c->slug ])); ?>"><img src="<?php echo e(asset('images/course/'.$c['preview_image'])); ?>" alt="course" class="img-fluid"></a>
					                                <?php else: ?>
					                                    <a href="<?php echo e(route('user.course.show',['id' => $c->id, 'slug' => $c->slug ])); ?>"><img src="<?php echo e(Avatar::create($c->title)->toBase64()); ?>" alt="course" class="img-fluid"></a>
					                                <?php endif; ?>
					                            </div>
					                            <div class="view-dtl">
					                                <div class="view-heading btm-10"><a href="<?php echo e(route('user.course.show',['id' => $c->id, 'slug' => $c->slug ])); ?>"><?php echo e($c->title); ?></a></div>
					                                <p class="btm-10"><a herf="#">by <?php echo e($c->user['fname']); ?></a></p>
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
					                                        <li>
					                                            <b><?php echo e(round($overallrating, 1)); ?></b>
					                                        </li>
					                                        <?php endif; ?>
					                                      <li>(<?php echo e($c->order->count()); ?>)</li> 
					                                    </ul>
					                                </div>
					                                <?php if( $c->type == 1): ?>
					                                    <div class="rate text-right">
					                                        <ul>
					                                            <?php
					                                                $currency = App\Currency::first();
					                                            ?>

					                                            <?php if($c->discount_price == !NULL): ?>

					                                                <li><a><b><i class="<?php echo e($currency->icon); ?>"></i><?php echo e($c->discount_price); ?></b></a></li>&nbsp;
					                                                <li><a><b><strike><i class="<?php echo e($currency->icon); ?>"></i><?php echo e($c->price); ?></strike></b></a></li>
					                                                
					                                            <?php else: ?>
					                                                <li><a><b><i class="<?php echo e($currency->icon); ?>"></i><?php echo e($c->price); ?></b></a></li>
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
					              <?php endif; ?>
					            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							        </div>
									<div class="pull-right"><?php echo e($course->links()); ?></div>
		 						</div>
	                		</div>
	                		<div class="tab-pane fade d-none" id="badges" role="tabpanel" aria-labelledby="badges-tab">
	                    		<div class="tab-reward-badges">

	                    		
	                    			<div class="row">
							            <div class="col-lg-6">
							                <div class="tab-badges-block text-center">
							                    <img src="<?php echo e(url('images/badges/1.png')); ?>" class="img-fluid" alt="">
							                    <div class="tab-badges-heading">Trusted User</div>
							                    <p>Member since <?php echo e($year); ?></p>
							                </div>
							            </div>
							            <?php if($course_count >= 5): ?>
							            <div class="col-lg-6">
							                <div class="tab-badges-block text-center">
							                    <img src="<?php echo e(url('images/badges/2.png')); ?>" class="img-fluid" alt="">
							                    <div class="tab-badges-heading">Senior Instructor</div>
							                    <p>Has <?php echo e($course_count); ?> Courses</p>
							                </div>
							            </div>
							            <?php endif; ?>
							            <div class="col-lg-6">
							                <div class="tab-badges-block text-center">
							                    <img src="<?php echo e(url('images/badges/3.png')); ?>" class="img-fluid" alt="">
							                    <div class="tab-badges-heading">Golden Courses</div>
							                    <p>Courses Rating from 4 to 5</p>
							                </div>
							            </div>
							            <div class="col-lg-6">
							                <div class="tab-badges-block text-center">
							                    <img src="<?php echo e(url('images/badges/4.png')); ?>" class="img-fluid" alt="">
							                    <div class="tab-badges-heading">Best Seller</div>
							                    <p><?php echo e($data); ?> Courses Sales</p>
							                </div>
							            </div>
							            <div class="col-lg-6">
							                <div class="tab-badges-block text-center">
							                    <img src="<?php echo e(url('images/badges/5.png')); ?>" class="img-fluid" alt="">
							                    <div class="tab-badges-heading">Active Classes </div>
							                    <p>Live classes <?php echo e($live_class); ?></p>
							                </div>
							            </div>
							        </div>
	    						</div>
	                		</div>
	                	</div>
        			</div>
			 	</div>
	 		</div>
	 		<div class="col-xl-4 col-lg-4 col-md-4">
	 			<div class="instructor-img">
	 				<?php if($user['user_img'] != null || $user['user_img'] !=''): ?>
	 					<img src="<?php echo e(asset('images/user_img/'.$user['user_img'])); ?>" alt="img" class="img-fluid">
	 				<?php else: ?>
	 					<img src="<?php echo e(asset('images/default/user.jpg')); ?>" alt="img" class="img-fluid">
                    <?php endif; ?>

	 			</div>
	 			<div class="instructor-link">
	 				<ul>
	 					<?php if($user->linkedin_url != NULL): ?>
	 						<a href="<?php echo e($user->linkedin_url); ?>" target="_blank"><li><i class="fab fa-linkedin-in"></i><?php echo e(__('frontstaticword.LinkedIn')); ?></li></a>
	 					<?php endif; ?>
	 					<?php if($user->twitter_url != NULL): ?>
	 						<a href="<?php echo e($user->twitter_url); ?>" target="_blank"><li><i class="fa fa-twitter"></i><?php echo e(__('frontstaticword.Twitter')); ?></li></a>
	 					<?php endif; ?>
	 					<?php if($user->fb_url != NULL): ?>
	 						<a href="<?php echo e($user->fb_url); ?>" target="_blank"><li><i class="fa fa-facebook-f"></i><?php echo e(__('frontstaticword.Facebook')); ?></li></a>
	 					<?php endif; ?>
	 					<?php if($user->youtube_url != NULL): ?>
	 						<a href="<?php echo e($user->youtube_url); ?>" target="_blank"><li><i class="fa fa-youtube"></i><?php echo e(__('frontstaticword.Youtube')); ?></li></a>
	 					<?php endif; ?>
	 				</ul>
	 			</div>
	 		</div>
		</div>
	 </div>
</section>
<hr>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/front/instructor.blade.php ENDPATH**/ ?>