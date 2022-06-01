
<?php $__env->startSection('title', "Course Completion Certificate"); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section id="cirtificate" class="course-cirtificate">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">

                <?php if(Module::has('Certificate') && Module::find('Certificate')->isEnabled()): ?>
                    <?php echo $__env->make('certificate::front.certificate_view', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php else: ?>
                <div class="cirtificate-border-one text-center">
                    <div class="cirtificate-border-two">
                       <div class="cirtificate-heading" style=""> <?php echo e(__('frontstaticword.CertificateofCompletion')); ?></div>
                        <?php
                            $mytime = Carbon\Carbon::now();
                        ?>
                       <p class="cirtificate-detail" style="font-size:30px"> <?php echo e(__('frontstaticword.Thisistocertifythat')); ?><b>&nbsp;<?php echo e($progress->user['fname']); ?>&nbsp;<?php echo e($progress->user['lname']); ?></b>  <?php echo e(__('frontstaticword.successfullycompleted')); ?> <b><?php echo e($course['title']); ?></b> <?php echo e(__('frontstaticword.onlinecourseon')); ?> <br>
                       
                        <span style="font-size:25px"><?php echo e(date('jS F Y', strtotime($progress['updated_at']))); ?></span>
                        
                        </p>

                       <span class="cirtificate-instructor"><?php echo e(($course->user['fname'])); ?> <?php echo e(($course->user['lname'])); ?></span>
                       <br>
                       <span class="cirtificate-one"><?php echo e(($course->user['fname'])); ?> <?php echo e(($course->user['lname'])); ?>, <?php echo e(__('frontstaticword.Instructor')); ?></span>
                       <br>
                       <span>&</span>
                        <div class="cirtificate-logo">
                        <?php if($gsetting['logo_type'] == 'L'): ?>
                            <img src="<?php echo e(asset('images/logo/'.$gsetting['logo'])); ?>" class="img-fluid" alt="logo">
                        <?php else: ?>
                            <a href="<?php echo e(url('/')); ?>"><b><div class="logotext"><?php echo e($gsetting['project_title']); ?></div></b></a>
                        <?php endif; ?>
                        </div>
                        

                        <div class="cirtificate-serial">Certificate no. :<?php echo e($serial_no); ?></div>
                        <div class="cirtificate-serial">Certificate url. :<?php echo e(url()->full()); ?></div>
                      
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-3">
                <h4><?php echo e(__('frontstaticword.CertificateRecipient')); ?>:</h4>
                <div class="recipient-block">
                    <div class="row">
                        <div class="col-md-4">

                            <?php if($progress->user->user_img != null || $progress->user->user_img !=''): ?>
                                <img src="<?php echo e(asset('images/user_img/'.$progress->user->user_img)); ?>" alt="user" class="img-fluid img-circle">
                            <?php else: ?>
                                <img src="<?php echo e(asset('images/default/user.jpg')); ?>" alt="user" class="img-fluid img-circle">
                            <?php endif; ?>
                        </div>
                        <div class="col-md-8">
                            <?php echo e($progress->user->fname); ?>

                        </div>
                    </div>
                </div>

                <h4><?php echo e(__('frontstaticword.AbouttheCourse')); ?>:</h4>
                <div class="view-block btm-20">
                    <div class="view-img">
                        <?php if($course['preview_image'] !== NULL && $course['preview_image'] !== ''): ?>
                            <a href="<?php echo e(route('user.course.show',['id' => $course->id, 'slug' => $course->slug ])); ?>"><img src="<?php echo e(asset('images/course/'.$course['preview_image'])); ?>" alt="course" class="img-fluid"></a>
                        <?php else: ?>
                            <a href="<?php echo e(route('user.course.show',['id' => $course->id, 'slug' => $course->slug ])); ?>"><img src="<?php echo e(Avatar::create($course->title)->toBase64()); ?>" alt="course" class="img-fluid"></a>
                        <?php endif; ?>
                    </div>
                    <div class="view-dtl">
                        <div class="view-heading btm-10"><a href="<?php echo e(route('user.course.show',['id' => $course->id, 'slug' => $course->slug ])); ?>"><?php echo e($course->title); ?></a></div>
                        <p class="btm-10"><a herf="#"><?php echo e(__('frontstaticword.by')); ?> <?php echo e($course->user['fname']); ?></a></p>
                        <div class="rating">
                            <ul>
                                <li>
                                    <?php 
                                    $learn = 0;
                                    $price = 0;
                                    $value = 0;
                                    $sub_total = 0;
                                    $sub_total = 0;
                                    $reviews = App\ReviewRating::where('course_id',$course->id)->get();
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

                                $reviewcount = App\ReviewRating::where('course_id', $course->id)->WhereNotNull('review')->get();

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
                                    $reviewsrating = App\ReviewRating::where('course_id', $course->id)->first();
                                ?>
                                <?php if(!empty($reviewsrating)): ?>
                                <li>
                                    <b><?php echo e(round($overallrating, 1)); ?></b>
                                </li>
                                <?php endif; ?>
                              <li>(<?php echo e($course->order->count()); ?>)</li> 
                            </ul>
                        </div>
                        <?php if( $course->type == 1): ?>
                            <div class="rate text-right">
                                <ul>

                                    <?php if($course->discount_price == !NULL): ?>
                                       
                                        <li><a><b><?php echo e(currency($course->discount_price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></b></a></li>&nbsp;
                                        <li><a><b><strike><?php echo e(currency($course->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></strike></b></a></li>
                                        
                                    <?php else: ?>
                                        
                                        <li><a><b><?php echo e(currency($course->price, $from = $currency->code, $to = Session::has('changed_currency') ? Session::get('changed_currency') : $currency->code, $format = true)); ?></b></a></li>
                                        
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
                <div class="download-btn btm-20">
                    <?php
                            
                        $parameter= Crypt::encrypt($course->id);
                    ?>

                    <?php
                    $random = $progress->id.'CR-'.uniqid();
                    ?>

                    <?php if(Module::has('Certificate') && Module::find('Certificate')->isEnabled()): ?>
                        <?php echo $__env->make('certificate::front.download_link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php else: ?>

                        <a href="<?php echo e(route('certificate.download',$random)); ?>" target="_blank"  class="btn btn-secondary"><?php echo e(__('frontstaticword.CertificateDownload')); ?></a>

                    <?php endif; ?>
                </div>
                <?php if(auth()->guard()->check()): ?>
                <p><a href="#" data-toggle="modal" data-target="#myModalCirtificate" title="report"><?php echo e(__('frontstaticword.Updateyourcertificate')); ?></a> <?php echo e(__('frontstaticword.withyourcorrectname')); ?>.</p>
                <div class="modal fade" id="myModalCirtificate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel"><?php echo e(__('frontstaticword.UpdateYourCertificate')); ?></h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        
                        <div class="box box-primary">
                          <div class="panel panel-sum">
                            <div class="modal-body">
                                 <?php echo e(__('frontstaticword.Confirmyournameis')); ?> <b><?php echo e(Auth::User()->fname); ?></b>
                                <br>

                                 <?php echo e(__('frontstaticword.Incorrect')); ?>? <a href="<?php echo e(route('profile.show',Auth::User()->id)); ?>"><?php echo e(__('frontstaticword.Updateyourprofilename')); ?></a>.
                           
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
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/front/certificate/certificate.blade.php ENDPATH**/ ?>