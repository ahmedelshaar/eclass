<footer id="footer" class="footer-main-block">
    <div class="container">
        <div class="footer-block">
            <div class="row">
                <?php
                    $widgets = App\WidgetSetting::first();
                ?>
                <div class="col-lg-4 col-md-6 col-12">
                   
                    <div class="footer-logo">
                        <?php if($gsetting->logo_type == 'L'): ?>
                            <?php if($gsetting->footer_logo != NULL): ?>
                            <a href="<?php echo e(url('/')); ?>" title="logo"><img src="<?php echo e(asset('images/logo/'.$gsetting->footer_logo)); ?>" alt="logo" class="img-fluid" ></a>
                            <?php endif; ?>
                        <?php else: ?>
                            <a href="<?php echo e(url('/')); ?>"><b><?php echo e($gsetting->project_title); ?></b></a>
                        <?php endif; ?>
                    </div>

                    

                    <div class="mobile-btn">
                        <?php if($gsetting->play_download == '1'): ?>
                            <a href="<?php echo e($gsetting->play_link); ?>" title=""><img src="<?php echo e(url('images/icons/download-google-play.png')); ?>" alt="logo"></a>
                        <?php endif; ?>
                        <?php if($gsetting->app_download == '1'): ?>
                            <a href="<?php echo e($gsetting->app_link); ?>" title=""><img src="<?php echo e(url('images/icons/app-download-ios.png')); ?>" alt="logo"></a>
                        <?php endif; ?>
                    </div>


                </div>
                <?php if(isset($widgets) && $widgets->widget_enable == 1): ?>

                <div class="col-lg-2 col-md-6 col-4">
                    <div class="widget"><b><?php echo e($widgets->widget_one); ?></b></div>
                    <div class="footer-link">
                        <ul>
                            <?php if($gsetting->instructor_enable == 1): ?>
                                <?php if(Auth::check()): ?>
                                    <?php if(Auth::User()->role == "user"): ?>
                                    <li><a href="#" data-toggle="modal" data-target="#myModalinstructor" title="Become An Instructor"><?php echo e(__('frontstaticword.BecomeAnInstructor')); ?></a></li>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <li><a href="<?php echo e(route('login')); ?>" title="Become an instructor"><?php echo e(__('frontstaticword.BecomeAnInstructor')); ?></a></li>
                                <?php endif; ?>
                            <?php endif; ?>

                            <?php if(isset($widgets) && $widgets->about_enable == 1): ?>
                            <li><a href="<?php echo e(route('about.show')); ?>" title="About Us"><?php echo e(__('frontstaticword.Aboutus')); ?></a></li>
                            <?php endif; ?>
                            
                            <?php if(isset($widgets) && $widgets->contact_enable == 1): ?>
                            <li><a href="<?php echo e(url('user_contact')); ?>" title="Contact Us"><?php echo e(__('frontstaticword.Contactus')); ?></a></li>
                            <?php endif; ?>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-4">
                    <div class="widget"><b><?php echo e($widgets->widget_two); ?></b></div>
                    <div class="footer-link">
                        <ul>
                            <?php if(isset($widgets) && $widgets->career_enable == 1): ?>
                            <li><a href="<?php echo e(route('careers.show')); ?>" title="Careers"><?php echo e(__('frontstaticword.Careers')); ?></a></li>
                            <?php endif; ?>

                            <?php if(isset($widgets) && $widgets->blog_enable == 1): ?>
                            <li><a href="<?php echo e(route('blog.all')); ?>" title="Blog"><?php echo e(__('frontstaticword.Blog')); ?></a></li>
                            <?php endif; ?>

                            <?php if(isset($widgets) && $widgets->help_enable == 1): ?>
                            <li><a href="<?php echo e(route('help.show')); ?>" title="Help"><?php echo e(__('frontstaticword.Help&Support')); ?></a></li>
                            <?php endif; ?>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-4">
                    <div class="widget"><b><?php echo e($widgets->widget_three); ?></b></div>
                    <div class="footer-link">
                        <ul>
                            
                            <?php
                                $pages = App\Page::get();
                            ?>
                            
                            <?php if(isset($pages)): ?>
                            <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($page->status == 1): ?>
                                <li><a href="<?php echo e(route('page.show', $page->slug)); ?>" title="<?php echo e($page->title); ?>"><?php echo e($page->title); ?></a></li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            
                        </ul>
                    </div>
                </div>

                <?php endif; ?>

                <div class="col-lg-2 col-md-6">

                    <?php
                        $languages = App\Language::get(); 
                    ?>
                    <?php if(isset($languages) && count($languages) > 0): ?>
                    <div class="footer-dropdown">
                        <a href="#" class="a" data-toggle="dropdown"><i data-feather="globe"></i><?php echo e(Session::has('changed_language') ? ucfirst(Session::get('changed_language')) : ''); ?><i class="fa fa-angle-up lft-10"></i></a>
                        
                       
                        <ul class="dropdown-menu">
                          
                            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('languageSwitch', $language->local)); ?>"><li><?php echo e($language->name); ?></li></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <?php endif; ?>


                    <?php
                        $currencies = DB::table('currencies')->get(); 
                    ?>
                    <?php if(isset($currencies) && count($currencies) > 0): ?>
                    <div class="footer-dropdown footer-dropdown-two">
                        <a href="#" class="a" data-toggle="dropdown"><i data-feather="credit-card"></i> <?php echo e(Session::has('changed_currency') ? ucfirst(Session::get('changed_currency')) : $currency->code); ?><i class="fa fa-angle-up lft-10"></i></a>
                        
                       
                        <ul class="dropdown-menu">
                          
                            <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('CurrencySwitch', $currency->code)); ?>"><li><?php echo e($currency->code); ?></li></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <?php endif; ?>

                </div>
                
                
            </div>
        </div>
    </div>
    <hr>
    <div class="tiny-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="logo-footer">
                        <ul>

                            <li><?php echo e($gsetting->cpy_txt); ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="copyright-social">
                        <ul>
                            <li><a href="<?php echo e(url('terms_condition')); ?>" title="Terms"><?php echo e(__('frontstaticword.Terms&Condition')); ?></a></li> 
                            <li><a href="<?php echo e(url('privacy_policy')); ?>" title="Policy"><?php echo e(__('frontstaticword.PrivacyPolicy')); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<?php echo $__env->make('instructormodel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/theme/footer.blade.php ENDPATH**/ ?>