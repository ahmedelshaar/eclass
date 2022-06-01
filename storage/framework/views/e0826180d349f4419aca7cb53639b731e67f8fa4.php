<form class="form" action="<?php echo e(route('setting.store')); ?>" method="POST" novalidate enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="row">

        <div class="col-md-12">
            <div class="form-group">
                <label class="text-dark" for="status"><?php echo e(__('adminstaticword.TextLogo')); ?> :</label><br>
                <input type="checkbox" class="custom_toggle" id="customSwitch1" name="project_logo" <?php echo e($gsetting->logo_type == 'L' ? 'checked' : ''); ?>/>
                <input type="hidden" name="free" value="0" for="customSwitch1" id="customSwitch1">
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-group">
                <label class="text-dark"><?php echo e(__('adminstaticword.ProjectTitle')); ?>:</label>
                <input name="project_title" autofocus="" type="text"
                    class="<?php echo e($errors->has('project_title') ? ' is-invalid' : ''); ?> form-control"
                    placeholder="Enter project title" value="<?php echo e($setting->project_title); ?>" required="">
                <div class="invalid-feedback">
                    <?php echo e(__('Please enter Project Title !')); ?>.
                </div>
            </div>
        </div>
        <!-- ============ Project Title end =========================-->
        <!-- ============ APP URL start =============================-->
        <div class="col-md-6">
            <div class="form-group">
                <label class="text-dark"><?php echo e(__('adminstaticword.APPURL')); ?>:</label>
                <input name="APP_URL" autofocus="" type="text"
                    class="<?php echo e($errors->has('APP_URL') ? ' is-invalid' : ''); ?> form-control"
                    placeholder="http://localhost/" value="<?php echo e($env_files['APP_URL']); ?>" required="">
                <div class="invalid-feedback">
                    <?php echo e(__('Please Enter APP URL !')); ?>.
                </div>
            </div>
        </div>
        <!-- ============ APP URL end =============================-->
        <!-- ============ Contact start =============================-->
        <div class="col-md-6">
            <div class="form-group">
                <label class="text-dark" for="phone"><?php echo e(__('adminstaticword.Contact')); ?> : <span
                        class="text-danger">*</span></label>
                <input value="<?php echo e($setting->default_phone); ?>" name="default_phone" placeholder="Enter contact no."
                    type="text" class="<?php echo e($errors->has('default_phone') ? ' is-invalid' : ''); ?> form-control" required>
                <div class="invalid-feedback">
                    <?php echo e(__('Please Enter Contact !')); ?>.
                </div>
            </div>
        </div>
        <!-- ============ Contact end =============================-->
        <!-- ============ email start =============================-->
        <div class="col-md-6">
            <div class="form-group">
                <label class="text-dark" for="wel_email"><?php echo e(__('adminstaticword.Email')); ?> : <span
                        class="text-danger">*</span></label>
                <input value="<?php echo e($setting->wel_email); ?>" name="wel_email" placeholder="Enter your email" type="text"
                    class="<?php echo e($errors->has('wel_email') ? ' is-invalid' : ''); ?> form-control" required>
                <div class="invalid-feedback">
                    <?php echo e(__('Please Enter Email !')); ?>.
                </div>
            </div>
        </div>
        <!-- ============ email end =============================-->
        <!-- ============ Copyright Text start ==================-->
        <div class="col-md-6">
            <div class="form-group">
                <label class="text-dark" for="cpy_txt"><?php echo e(__('adminstaticword.CopyrightText')); ?> : <span
                        class="text-danger">*</span></label>
                <input value="<?php echo e($setting->cpy_txt); ?>" name="cpy_txt" placeholder="Enter Copyright Text" type="text"
                    required class="<?php echo e($errors->has('cpy_txt') ? ' is-invalid' : ''); ?> form-control">
                <div class="invalid-feedback">
                    <?php echo e(__('Please Enter Copy right Text !')); ?>.
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="text-dark" for="feature_amount"><?php echo e(__('Amount to feature a course')); ?> </label>
                <input min="1" class="form-control" name="feature_amount" type="number"
                    value="<?php echo e($setting->feature_amount); ?>" id="duration"
                    placeholder="Enter amount to feature course ex: 100"
                    class="<?php echo e($errors->has('feature_amount') ? ' is-invalid' : ''); ?> form-control">
                <small><?php echo e(__('(Instructor can feature its course, by paying this amount)')); ?></small>
            </div>
        </div>
        <!-- ============ Address start =========-->
        <div class="col-md-12">
            <div class="form-group">
                <label class="text-dark" for="exampleInputDetails"><?php echo e(__('adminstaticword.Address')); ?> : <span
                        class="text-danger">*</span></label>
                <textarea name="default_address" rows="2" class="form-control" placeholder="Enter your address"
                    required><?php echo e($setting->default_address); ?></textarea>
            </div>
        </div>
        <!-- ============ Address end =========-->
        <!-- ============ MapCoordinates start =========-->
        <div class="bg-info-rgba col-md-12 ml-3 mr-3 mb-3">
            <h4 class="mt-3 mb-3"><i class="feather icon-settings" aria-hidden="true"></i> MapCoordinates Settings</h4>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="text-dark" for="map_lat"><?php echo e(__('adminstaticword.MapEnable')); ?>:</label><br>
                    <input type="checkbox" class="custom_toggle" id="customSwitch2" name="map_enable"
                        <?php echo e($gsetting->map_enable == 'map' ? 'checked' : ''); ?> />
                    <input type="hidden" name="free" value="0" for="customSwitch2" id="customSwitch2">
                    <div>
                        <small><?php echo e(__('(Enable Map on contact page)')); ?></small>
                    </div>
                </div>
            </div>
            <!-- ============ MapCoordinates end =========-->
            <!-- contact page start -->
            <div class="col-md-12">
                <div class="row" style="<?php echo e($setting['map_enable'] == 'image' ? '' : 'display:none'); ?>" id="sec_one">
                    <div class="col-md-12">
                        <label class="text-dark"><?php echo e(__('adminstaticword.ContactPageImage')); ?> :</label>
                        <small><?php echo e(__('(Note - Size : 300x90)')); ?></small>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01"><?php echo e(__('Upload')); ?></span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" name="contact_image"
                                    aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01"><?php echo e(__('Choose file')); ?></label>
                            </div>
                        </div>
                        <?php if($image = @file_get_contents('../public/images/contact/'.$setting->contact_image)): ?>
                        <img src="<?php echo e(url('/images/contact/'.$setting->contact_image)); ?>" class="image_size" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- contact page end -->
            <div class="col-md-12">
                <div class="row" style="<?php echo e($setting['map_enable'] == 'map' ? '' : 'display:none'); ?>" id="sec1_one">
                    <div class="col-md-4">
                        <label class="text-dark" for="map_lat"><?php echo e(__('adminstaticword.MapLatitude')); ?>:</label>
                        <input value="<?php echo e($setting->map_lat); ?>" name="map_lat" placeholder="Enter Latitude" type="text"
                            class="<?php echo e($errors->has('map_lat') ? ' is-invalid' : ''); ?> form-control">
                    </div>
                    <div class="col-md-4">
                        <label class="text-dark" for="map_long"><?php echo e(__('adminstaticword.MapLongitude')); ?>:</label>
                        <input value="<?php echo e($setting->map_long); ?>" name="map_long" placeholder="Enter Longitude"
                            type="text" class="<?php echo e($errors->has('map_long') ? ' is-invalid' : ''); ?> form-control">
                    </div>
                    <div class="col-md-4">
                        <label class="text-dark" for="map_api"><?php echo e(__('adminstaticword.MapApiKey')); ?>:</label>
                        <input value="<?php echo e($setting->map_api); ?>" name="map_api" placeholder="Enter Map Api" type="text"
                            class="<?php echo e($errors->has('map_api') ? ' is-invalid' : ''); ?> form-control">
                    </div>
                </div>
            </div>
            <br>
        </div>
        <div class="bg-info-rgba col-md-12 ml-3 mr-3 mb-3">

            <h4 class="mt-3 mb-3"><i class="feather icon-server"
                    aria-hidden="true"></i><?php echo e(__('adminstaticword.PromoBar')); ?></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="text-dark" for="promo_enable"><?php echo e(__('adminstaticword.PromoEnable')); ?>

                            :</label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch3" name="promo_enable"
                            <?php echo e($gsetting->promo_enable == 1 ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch3" id="customSwitch3">
                        <div>
                            <small><?php echo e(__('(Enable Promobar on site)')); ?></small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================ -->
            <div class="row" style="<?php echo e($setting['promo_enable'] == 1 ? '' : 'display:none'); ?>" id="sec2_one">
                <div class="col-md-6">
                    <label for="promo_text"><?php echo e(__('adminstaticword.PromoText')); ?>:</label>
                    <input value="<?php echo e($setting->promo_text); ?>" name="promo_text" placeholder="Enter Promo Text"
                        type="text" class="<?php echo e($errors->has('promo_text') ? ' is-invalid' : ''); ?> form-control">
                </div>
                <div class="col-md-6">
                    <label for="promo_link"><?php echo e(__('adminstaticword.PromoLink')); ?>:</label>
                    <input value="<?php echo e($setting->promo_link); ?>" name="promo_link" placeholder="Enter Promo Text Link"
                        type="text" class="<?php echo e($errors->has('promo_link') ? ' is-invalid' : ''); ?> form-control">
                </div>
            </div>
            <br>
        </div>
        <div class="bg-info-rgba col-md-12 ml-3 mr-3 mb-3">
            <h4 class="mt-3 mb-3"><i class="feather icon-message-circle" aria-hidden="true"></i>Chat Bubble Setting</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="text-dark"
                            for="promo_text"><?php echo e(__('adminstaticword.FacebookChatBubble')); ?>:</label>
                        <input value="<?php echo e($setting->chat_bubble); ?>" name="chat_bubble"
                            placeholder="https://app.respond.io/facebook/chat/plugin/XXXX/XXXXXXXXXX" type="text"
                            class="<?php echo e($errors->has('chat_bubble') ? ' is-invalid' : ''); ?> form-control">
                        <small><?php echo e(__('Facebook Bubble Chat will not work on localhost (eg. xampp & wampp)')); ?></small>
                        <br>
                        <small><a target="__blank"
                                href="https://app.respond.io/"><?php echo e(__('Get URL For Facebook Messenger Chat Bubble')); ?></a></small>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-info-rgba col-md-12 ml-3 mr-3 mb-3">
            <h4 class="mt-3 mb-3"><i class="feather icon-settings" aria-hidden="true"></i> App Settings</h4>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="text-dark" for="status"><?php echo e(__('App Store')); ?></label>
                        <br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch4" name="app_download"
                            <?php echo e($gsetting->app_download == '1' ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch4" id="customSwitch4">
                    </div>
                </div>

                <div class="col-md-10">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('Link:')); ?></label>
                        <input name="app_link" autofocus="" type="text"
                            class="<?php echo e($errors->has('app_link') ? ' is-invalid' : ''); ?> form-control"
                            placeholder="Please Enter Link" value="<?php echo e($setting->app_link); ?>">
                        <div class="invalid-feedback">
                            <?php echo e(__('Please Enter Link !')); ?>.
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('Play Store')); ?></label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch5" name="play_download"
                            <?php echo e($setting->play_download == '1' ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch5" id="customSwitch5">
                    </div>
                </div>

                <div class="col-md-10">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('Link:')); ?></label>
                        <input name="play_link" autofocus="" type="text" class="form-control"
                            placeholder="Please Enter Link" value="<?php echo e($setting->play_link); ?>">
                        <div class="invalid-feedback">
                            <?php echo e(__('Please Enter Link !')); ?>.
                        </div>
                    </div>
                </div>
            </div>
            <!-- ======= Donation link start ========== -->
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('Donation link')); ?>: </label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch6" name="donation_enable"
                            <?php echo e($setting->donation_enable == '1' ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch6" id="customSwitch6">
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('adminstaticword.Link')); ?> :</label>
                        <input name="donation_link" autofocus="" type="text" class="form-control"
                            placeholder="Please Enter Link" value="<?php echo e($setting->donation_link); ?>">
                        <small><?php echo e(__('Get Donation link by register on ')); ?><a target="__blank"
                                href="https://www.paypal.com/in/webapps/mpp/paypal-me"> Paypal.me</a></small>
                        <div class="invalid-feedback">
                            <?php echo e(__('Please Enter Link !')); ?>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-info-rgba col-md-12 ml-3 mr-3 mb-3">
            <h4 class="mt-3 mb-3"><i class="feather icon-loader" aria-hidden="true"></i> Miscellaneous Settings
            </h4>
            <!-- ======= Donation link end ========== -->
            <!-- ======= section 1 start ========== -->
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('adminstaticword.RightClick')); ?> :</label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch7" name="rightclick"
                            <?php echo e($gsetting->rightclick == '0' ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch7" id="customSwitch7">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('adminstaticword.InspectElement')); ?> :</label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch8" name="inspect"
                            <?php echo e($setting->inspect == '0' ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch8" id="customSwitch8">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('adminstaticword.PreloaderEnable')); ?> :</label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch9" name="preloader_enable"
                            <?php echo e($gsetting->preloader_enable == '1' ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch9" id="customSwitch9">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('adminstaticword.APPDebug')); ?> :</label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch10" name="APP_DEBUG"
                            <?php echo e(env('APP_DEBUG') == true ? "checked" : ""); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch10" id="customSwitch10">
                    </div>
                </div>

            </div>

            <!-- ======= section 1 end ========== -->
            <!-- ======= section 2 start ========== -->
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('adminstaticword.WelcomeEmail')); ?> : </label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch11" name="w_email_enable"
                            <?php echo e($gsetting->w_email_enable == '1' ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch11" id="customSwitch11">
                        <div>
                            <small><?php echo e(__('(If you enable it, a welcome email will be sent to user\'s register email id,<br> make sure you updated your mail setting in Site Setting >> Mail Settings before enable it.)')); ?></small>
                            <small class="text-danger"><?php echo e($errors->first('color')); ?></small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('adminstaticword.VerifyEmail')); ?> : </label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch12" name="verify_enable"
                            <?php echo e($gsetting->verify_enable == '1' ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch12" id="customSwitch12">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('adminstaticword.BecomeAnInstructor')); ?>: </label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch13" name="instructor_enable"
                            <?php echo e($gsetting->instructor_enable == '1' ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch13" id="customSwitch13">
                        <div>
                            <small><?php echo e(__('(Enable Become an instructor option for users)')); ?></small>
                            <small class="text-danger"><?php echo e($errors->first('color')); ?></small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('adminstaticword.CategoryMenu')); ?> :</label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch14" name="cat_enable"
                            <?php echo e($gsetting->cat_enable == '1' ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch14" id="customSwitch14">
                        <div>
                            <small><?php echo e(__('(If you enable it, Category menu will show on instructor Dashboard)')); ?></small>
                            <small class="text-danger"><?php echo e($errors->first('color')); ?></small>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ======= section 2 end ========== -->
            <!-- ======= section 3 start ========== -->
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('Mobile no. on SignUp')); ?> : </label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch15" name="mobile_enable"
                            <?php echo e($gsetting->mobile_enable == 1 ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch15" id="customSwitch15">
                        <div>
                            <small><?php echo e(__('(Enable mobile no. on SignUp)')); ?></small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('adminstaticword.DeviceControl')); ?> :</label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch16" name="device_enable"
                            <?php echo e($gsetting->device_control == 1 ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch16" id="customSwitch16">
                        <div>
                            <small><?php echo e(__('(Enable Device Control on Courses)')); ?></small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('adminstaticword.CookieNotice')); ?> :</label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch17" name="cookie_enable"
                            <?php echo e($gsetting->cookie_enable == 1 ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch17" id="customSwitch17">
                        <div>
                            <small><?php echo e(__('(Enable Cookie Notice on Site)')); ?></small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('adminstaticword.IPBlock')); ?> :</label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch18" name="ipblock_enable"
                            <?php echo e($gsetting->ipblock_enable == 1 ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch18" id="customSwitch18">
                        <div>
                            <small><?php echo e(__('(Enable Ip block on portal)')); ?></small>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ======= section 3 end ========== -->
            <!-- ======= section 4 start ========== -->
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('adminstaticword.ActivityLog')); ?> :</label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch19" name="activity_enable"
                            <?php echo e($gsetting->activity_enable == 1 ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch19" id="customSwitch19">
                        <div>
                            <small><?php echo e(__('(Enable Users Activity Logs on Login/Register)')); ?></small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('adminstaticword.Assignment')); ?> :</label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch20" name="assignment_enable"
                            <?php echo e($gsetting->assignment_enable == 1 ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch20" id="customSwitch20">
                        <div>
                            <small><?php echo e(__('(Enable Assignment on Course)')); ?></small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('adminstaticword.Appointment')); ?> :</label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch21" name="appointment_enable"
                            <?php echo e($gsetting->appointment_enable == 1 ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch21" id="customSwitch21">
                        <div>
                            <small><?php echo e(__('(Enable Appointment on Course)')); ?></small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('adminstaticword.CertificateEnable')); ?> :</label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch22" name="certificate_enable"
                            <?php echo e($gsetting->certificate_enable == 1 ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch22" id="customSwitch22">
                        <div>
                            <small><?php echo e(__('(Enable Ip block on portal)')); ?></small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ======= section 4 end ========== -->
            <!-- ======= section 5 start ========== -->

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('adminstaticword.HideIdentity')); ?> :</label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch23" name="hide_identity"
                            <?php echo e($gsetting->hide_identity == 1 ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch23" id="customSwitch23">
                        <div>
                            <small><?php echo e(__('(Hide User Indentity from Instructor)')); ?></small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('adminstaticword.CourseHover')); ?> :</label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch24" name="course_hover"
                            <?php echo e($gsetting->course_hover == 1 ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch24" id="customSwitch24">
                        <div>
                            <small><?php echo e(__('(Enable/Disable Hover from home sliders)')); ?></small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-none">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('Currency Swipe')); ?> : </label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch25" name="currency_swipe"
                            <?php echo e($gsetting->currency_swipe == 1 ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch25" id="customSwitch25">
                        <div>
                            <small><?php echo e(__('(Swipe currency before/after icon)')); ?></small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('Attandance')); ?> :</label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch26" name="attandance_enable"
                            <?php echo e($gsetting->attandance_enable == 1 ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch26" id="customSwitch26">
                        <div>
                            <small><?php echo e(__('(Enable Attandance on Courses)')); ?></small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('Guest Login')); ?> :</label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch26" name="guest_enable"
                            <?php echo e($gsetting->guest_enable == 1 ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch26" id="customSwitch26">
                        <div>
                            <small><?php echo e(__('(Enable Guest checkout on portal)')); ?></small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ======= section 5 end ========== -->
            <!-- ======= section 6 start ========== -->

        </div>
        <div class="bg-info-rgba col-md-12 ml-3 mr-3 mb-3">
            <h4 class="mt-3 mb-3"><i class="feather icon-loader" aria-hidden="true"></i> Meeting Settings
            </h4>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('Enable Zoom On Portal')); ?> :</label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch27" name="zoom_enable"
                            <?php echo e($gsetting->zoom_enable == 1 ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch27" id="customSwitch27">
                        <div>
                            <small><?php echo e(__('( Enable Live zoom meetings on portal )')); ?></small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('Enable Big Blue Meetings')); ?> : </label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch28" name="bbl_enable"
                            <?php echo e($gsetting->bbl_enable == 1 ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch28" id="customSwitch28">
                        <div>
                            <small><?php echo e(__('(Enable Big Blue meetings on portal)')); ?></small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('adminstaticword.GoogleMeet')); ?> :</label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch29" name="googlemeet_enable"
                            <?php echo e($gsetting->googlemeet_enable == 1 ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch29" id="customSwitch29">
                        <div>
                            <small><?php echo e(__('(Enable Google Meet on portal)')); ?></small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="text-dark"><?php echo e(__('adminstaticword.JitsiMeeting')); ?> :</label><br>
                        <input type="checkbox" class="custom_toggle" id="customSwitch30" name="jitsimeet_enable"
                            <?php echo e($gsetting->jitsimeet_enable == 1 ? 'checked' : ''); ?> />
                        <input type="hidden" name="free" value="0" for="customSwitch30" id="customSwitch30">
                        <div>
                            <small><?php echo e(__('(Enable Jitsi Meeting on Portal)')); ?></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group ml-3">
            <div class="row">
                <div class="form-group col-md-6">
                    <label class="text-dark"><?php echo e(__('adminstaticword.Logo')); ?> :</label>
                    <small><?php echo e(__('(Note - Size : 300x90)')); ?></small>


                    <div class="input-group">

                        <input required readonly id="image" for="logo" name="logo" type="text" class="form-control">
                        <div class="input-group-append">
                            <span data-input="image"
                                class="bg-primary text-light midia-toggle input-group-text"><?php echo e(__('Browse')); ?></span>
                        </div>
                    </div>

                    <img src="<?php echo e(url('/images/logo/'.$setting->logo)); ?>" class="image_size" />
                </div>


                <!-- ============ footer logo start =============================-->

                <div class="form-group col-md-6">
                    <label class="text-dark"><?php echo e(__('adminstaticword.footerlogo')); ?> :</label>
                    <small><?php echo e(__('(Note - Size : 300x90)')); ?></small>


                    <div class="input-group">

                        <input required readonly id="footer_logo" for="footer_logo" name="footer_logo" type="text"
                            class="form-control">
                        <div class="input-group-append">
                            <span data-input="footer_logo"
                                class="bg-primary text-light midia-toggle input-group-text"><?php echo e(__('Browse')); ?></span>
                        </div>
                    </div>
                    <?php if($image = @file_get_contents('../public/images/logo/'.$setting->footer_logo)): ?>
                    <img src="<?php echo e(url('/images/logo/'.$setting->footer_logo)); ?>" class="image_size" />
                    <?php endif; ?>
                </div>
                <!-- ============ Favicon end =========================== -->
                <div class="form-group col-md-6">
                    <label class="text-dark"><?php echo e(__('adminstaticword.Favicon')); ?> :</label>
                    <small><?php echo e(__('(Note - Size : 35x35)')); ?></small>


                    <div class="input-group">

                        <input required readonly id="favicon" for="favicon" name="favicon" type="text"
                            class="form-control">
                        <div class="input-group-append">
                            <span data-input="favicon"
                                class="bg-primary text-light midia-toggle2 input-group-text"><?php echo e(__('Browse')); ?></span>
                        </div>
                    </div>

                    <?php if($image = @file_get_contents('../public/images/favicon/'.$setting->favicon)): ?>
                    <img src="<?php echo e(url('/images/favicon/'.$setting->favicon)); ?>" class="image_size" />
                    <?php endif; ?>
                </div>
                <!-- ============ Favicon end =============================-->
                <!-- ============ Preloader logo start =========================== -->
                <div class="form-group col-md-6">
                    <label class="text-dark"><?php echo e(__('adminstaticword.Preloaderlogo')); ?> :</label>
                    <small><?php echo e(__('(Note - Size : 300x90)')); ?></small>


                    <div class="input-group">

                        <input required readonly id="preloader_logo" for="preloader_logo" name="preloader_logo"
                            type="text" class="form-control">
                        <div class="input-group-append">
                            <span data-input="preloader_logo"
                                class="bg-primary text-light midia-toggle input-group-text"><?php echo e(__('Browse')); ?></span>
                        </div>
                    </div>

                    <?php if($image = @file_get_contents('../public/images/logo/'.$setting->preloader_logo)): ?>
                    <img src="<?php echo e(url('/images/logo/'.$setting->preloader_logo)); ?>" class="image_size" />
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group">
                <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i>
                    <?php echo e(__("Reset")); ?></button>
                <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                    <?php echo e(__("Update")); ?></button>
            </div>
    </div>
</div>
</form>
<style>
    .image_size {
        height: 80px;
        width: 200px;
    }
</style><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/setting/genral.blade.php ENDPATH**/ ?>