
<?php $__env->startSection('title', 'Online Courses'); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- about-home start -->
<section id="wishlist-home" class="wishlist-home-main-block">
    <div class="container">
        <h4 class="wishlist-home-heading text-white"><i class="fa fa-home"></i>&nbsp;/&nbsp;<?php echo e(__('frontstaticword.Courses')); ?></h4>
    </div>
</section> 
<!-- about-home end -->

<!-- search start -->
<?php if(count($search_data) > 0): ?>
    <section id="search-block" class="search-main-block">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-9">

                    <div class ="prod grid-view">
                     <div class ="view">
                      <i class= "fa fa-list " data-view ="list-view"></i>
                      <i class="selected fa fa-th" data-view ="grid-view"></i>
                     </div>
                    
                    <?php $__currentLoopData = $search_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if($course->status == 1): ?>
                     
                    <div class="item first">
                      <div class="course-bought-section protip" data-pt-placement="outside" data-pt-interactive="false" data-pt-title="#prime-next-item-description-block<?php echo e($course->id); ?>">

                        <div class="view-img">

                            <?php if($course['preview_image'] !== NULL && $course['preview_image'] !== ''): ?>
                              <a href="<?php echo e(route('user.course.show',['id' => $course->id, 'slug' => $course->slug ])); ?>"><img src ="<?php echo e(asset('images/course/'.$course->preview_image)); ?>" alt="" class="img-fluid"></a>
                            <?php else: ?>
                              <a href="<?php echo e(route('user.course.show',['id' => $course->id, 'slug' => $course->slug ])); ?>"><img src="<?php echo e(Avatar::create($course->title)->toBase64()); ?>" alt="course" class="img-fluid"></a>
                            <?php endif; ?>
                        </div>
                    

                        <?php if($course['level_tags'] == !NULL): ?>
                            <div class="best-seller best-seller-one"><?php echo e($course['level_tags']); ?></div>
                        <?php endif; ?>





                       <div class="view-heading btm-10"><a href="<?php echo e(route('user.course.show',['id' => $course->id, 'slug' => $course->slug ])); ?>"><?php echo e(str_limit($course->title, $limit = 30, $end = '...')); ?></a></div>
                      
                       <div class="categories-popularity-dtl">
                            <ul>
                                <li>
                                    <?php
                                        $data = App\CourseClass::where('course_id', $course->id)->get();
                                        if(count($data)>0){

                                            echo count($data);
                                        }
                                        else{

                                            echo "0";
                                        }
                                    ?> <?php echo e(__('frontstaticword.Classes')); ?> 
                                </li>
                            </ul>
                            <p><?php echo e(str_limit($course->short_detail, $limit = 60, $end = '..')); ?></p>
                        </div>
                        <div class="rate-grid ">
                            <ul>
                                
                                <?php if($course->type == 1): ?>
                                    <?php if($course->discount_price == !NULL): ?>
                                        <li class="rate-r"><s>
                                            <?php echo e(currency($course->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?>


                                            </s>&nbsp;    
                                        
                                            <?php echo e(currency($course->discount_price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?>

                                        
                                        </li>
                                            
                                            
                                    <?php else: ?>

                                        <li class="rate-r"><?php echo e(currency($course->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></li>
                                    <?php endif; ?>

                                <?php else: ?>
                                    <li class="rate-r"><?php echo e(__('frontstaticword.Free')); ?></li>
                                <?php endif; ?>
                            </ul>
                            <div class="rating">
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
                                        <div ><p><?php echo e(__('frontstaticword.NoRating')); ?></p></div>
                                    <?php endif; ?>
                                  </li>
                                    
                                  

                                </ul>
                            </div>
                            <ul>
                                <li>
                                    (<?php
                                        $data = App\ReviewRating::where('course_id', $course->id)->get();
                                        if(count($data)>0){

                                            echo count($data);
                                        }
                                        else{

                                            echo "0";
                                        }
                                    ?> ratings)
                                </li> 
                            </ul>
                        </div>

                        <?php if($course['whatlearns']->isNotEmpty()): ?>
                        <div id="prime-next-item-description-block<?php echo e($course->id); ?>" class="prime-description-block">
                        <div class="prime-description-under-block">
                            <div class="prime-description-under-block">
                                <h6 >What you will learn</h6>
                                
                                <?php $__currentLoopData = $course['whatlearns']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($wl->status ==1): ?>
                                    <div class="product-learn-dtl protip-whatlearn">
                                        <ul>
                                            <li><i class="fa fa-check"></i><?php echo e(str_limit($wl['detail'], $limit = 120, $end = '...')); ?></li>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </div>
                        </div>
                        </div>
                        <?php endif; ?>
                      </div>
                    </div>

                     
                    <?php endif; ?>
                    

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     
                    </div>


                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <section id="search-block" class="search-main-block search-block-no-result">
        <div class="container">
          <h2><?php echo e(__('frontstaticword.Nosearch')); ?> "<?php echo e($searchTerm); ?>"</h2>
        </div>
    </section>
<?php endif; ?>
<!-- search end -->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('custom-script'); ?>
<script type="text/javascript">
      $('.item i').on('click', function(){
      $(this).toggleClass('fa-plus fa-minus').next().slideToggle()
    })
    /* list or grid item*/
    $(".view i").click(function(){

      $('.prod').removeClass('grid-view list-view').addClass($(this).data('view'));

    })
    $(".view i").click(function(){

      $(this).addClass('selected').siblings().removeClass('selected');

    })
</script>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/front/search.blade.php ENDPATH**/ ?>