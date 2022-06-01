<?php $__env->startSection('title', 'Sign Up'); ?>
<?php echo $__env->make('theme.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- end head -->
<!-- body start-->
<body>
<section id="nav-bar" class="nav-bar-main-block nav-bar-main-block-one">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-4">
                <div class="nav-bar-btn">
                    <a href="<?php echo e(url('/')); ?>" class="btn btn-secondary" title="Home"><i class="fa fa-chevron-left"></i><?php echo e(__('frontstaticword.Backtohome')); ?></a>
                </div>
            </div>
            <div class="col-lg-4 col-4">
                <div class="logo text-center">
                    
                    <?php if($gsetting->logo_type == 'L'): ?>
                        <a href="<?php echo e(url('/')); ?>" title="logo"><img src="<?php echo e(asset('images/logo/'.$gsetting->logo)); ?>" class="img-fluid" alt="logo"></a>
                    <?php else: ?>
                        <a href="<?php echo e(url('/')); ?>"><b><div class="logotext"><?php echo e($gsetting->project_title); ?></div></b></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-4 col-4">
                <div class="Login-btn txt-rgt">
                    <a href="<?php echo e(route('login')); ?>" class="btn btn-secondary" title="login"><?php echo e(__('frontstaticword.Login')); ?></a>
                </div> 
            </div>
        </div>
    </div>
</section>
<section id="signup" class="signup-block-main-block">
    <div class="container">
        <div class="col-lg-6 col-md-6 offset-md-3">
            <div class="signup-heading">
               <?php echo e(__('frontstaticword.StartLearning')); ?>!
            </div>

            <div class="signup-block">
                <div class="row">
                    <?php if($gsetting->fb_login_enable == 1): ?>
                    <div class="col-lg-6"> 
                        <div class="signin-link">
                            <a href="<?php echo e(url('/auth/facebook')); ?>" target="_blank" title="facebook" class="btn btn-info btm-10" title="Facebook"><i class="fa fa-facebook"></i><?php echo e(__('frontstaticword.ContinuewithFacebook')); ?></a>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <?php if($gsetting->google_login_enable == 1): ?>
                    <div class="col-lg-6"> 
                        <div class="signin-link google">
                            <a href="<?php echo e(url('/auth/google')); ?>" target="_blank" title="google" class="btn btn-white btm-10" title="google"><i class="fab fa-google-plus-g"></i><?php echo e(__('frontstaticword.ContinuewithGoogle')); ?></a>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if($gsetting->amazon_enable == 1): ?>
                    <div class="col-lg-6"> 
                        <div class="signin-link amazon-button">
                            <a href="<?php echo e(url('/auth/amazon')); ?>" target="_blank" title="amazon" class="btn btn-info btm-10" title="Amazon"><i class="fab fa-amazon"></i><?php echo e(__('frontstaticword.ContinuewithAmazon')); ?></a>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if($gsetting->linkedin_enable == 1): ?>
                    <div class="col-lg-6"> 
                        <div class="signin-link linkedin-button">
                            <a href="<?php echo e(url('/auth/linkedin')); ?>" target="_blank" title="linkedin" class="btn btn-info btm-10" title="Linkedin"><i class="fab fa-linkedin"></i><?php echo e(__('frontstaticword.ContinuewithLinkedin')); ?></a>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if($gsetting->twitter_enable == 1): ?>
                    <div class="col-lg-6"> 
                        <div class="signin-link twitter-button">
                            <a href="<?php echo e(url('/auth/twitter')); ?>" target="_blank" title="twitter" class="btn btn-info btm-10" title="Twitter"><i class="fab fa-twitter"></i><?php echo e(__('frontstaticword.ContinuewithTwitter')); ?></a>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if($gsetting->gitlab_login_enable == 1): ?>
                    <div class="col-lg-6"> 
                        <div class="signin-link btm-10">
                            <a href="<?php echo e(url('/auth/gitlab')); ?>" target="_blank" title="gitlab" class="btn btn-white" title="gitlab"><i class="fab fa-gitlab"></i><?php echo e(__('frontstaticword.ContinuewithGitLab')); ?></a>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <form class="signup-form" method="POST" action="<?php echo e(route('register')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" class="form-control<?php echo e($errors->has('fname') ? ' is-invalid' : ''); ?>" name="fname" value="<?php echo e(old('fname')); ?>" id="fname" placeholder="First Name">
                        <?php if($errors->has('fname')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('fname')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" class="form-control<?php echo e($errors->has('lname') ? ' is-invalid' : ''); ?>" name="lname" value="<?php echo e(old('lname')); ?>" id="lname" placeholder="Last Name">
                        <?php if($errors->has('lname')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('lname')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" id="email" placeholder="Email">
                        <?php if($errors->has('email')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <?php if($gsetting->mobile_enable == 1): ?>
                    <div class="form-group">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="text" class="form-control<?php echo e($errors->has('mobile') ? ' is-invalid' : ''); ?>" name="mobile" value="<?php echo e(old('mobile')); ?>" id="mobile" placeholder="Mobile">
                        <?php if($errors->has('mobile')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('mobile')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" id="password" placeholder="Password">
                        <?php if($errors->has('password')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <i class="fa fa-lock" aria-hidden="true"></i> 
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                    </div>



                    
                    <?php if($gsetting->captcha_enable == 1): ?>


                    <div class="<?php echo e($errors->has('g-recaptcha-response') ? ' has-error' : ''); ?>">

                        <div class="text-center">

                            <?php echo app('captcha')->display(); ?>

                            <?php if($errors->has('g-recaptcha-response')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('g-recaptcha-response')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    <br>
                    <br>
                    <?php endif; ?>
                    
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="term" id="term" required>

                            <label class="form-check-label" for="term">
                                <div class="signin-link text-center btm-20">
                                    <b><?php echo e(__('I agree to ')); ?><a href="<?php echo e(url('terms_condition')); ?>" title="Policy"><?php echo e(__('frontstaticword.Terms&Condition')); ?> </a>, <a href="<?php echo e(url('privacy_policy')); ?>" title="Policy"><?php echo e(__('frontstaticword.PrivacyPolicy')); ?>.</a></b>
                                </div>
                            </label>

                           
                        </div>
                    </div>
                    

                    
                    <button type="submit" title="Sign Up" class="btn btn-primary btm-20"><?php echo e(__('frontstaticword.Signup')); ?></button> 

                   
                    <hr>
                    <div class="sign-up text-center"><?php echo e(__('frontstaticword.Alreadyhaveanaccount')); ?>?<a href="<?php echo e(route('login')); ?>" title="sign-up"> <?php echo e(__('frontstaticword.Login')); ?></a>
                    </div>
                </form>




            </div>
        </div>
    </div>
</section>


<?php echo $__env->make('theme.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- end jquery -->
</body>
<!-- body end -->
</html> 
<?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/auth/register.blade.php ENDPATH**/ ?>