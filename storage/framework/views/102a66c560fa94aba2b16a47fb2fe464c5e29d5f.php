<div class="leftbar">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <!-- Start Navigationbar -->

        <div class="navigationbar">

            <div class="vertical-menu-detail">

                <div class="tab-content" id="v-pills-tabContent">

                    <div class="tab-pane fade active show" id="v-pills-dashboard" role="tabpanel"
                        aria-labelledby="v-pills-dashboard">
                        <?php if(Auth::User()->role == "admin"): ?>
                        <ul class="vertical-menu">
                            <div class="logobar">
                                <a href="<?php echo e(url('/')); ?>" class="logo logo-large">
                                    <img style="object-fit:scale-down;" src="<?php echo e(url('images/logo/'.$gsetting->logo)); ?>"
                                        class="img-fluid" alt="logo">
                                </a>
                            </div>


                            <li class="<?php echo e(Nav::isRoute('admin.index')); ?>">
                                <a class="nav-link" href="<?php echo e(route('admin.index')); ?>">
                                    <i class="feather icon-pie-chart text-secondary"></i>
                                    <span><?php echo e(__('adminstaticword.Dashboard')); ?></span>
                                </a>
                            </li>

                            <li class="<?php echo e(Nav::isRoute('market.index')); ?>">
                                <a class="nav-link" href="<?php echo e(route('market.index')); ?>">
                                    <i class="feather icon-pie-chart text-secondary"></i>
                                    <span><?php echo e(__('Marketing Dashboard')); ?></span>
                                </a>
                            </li>

                            <!-- dashboard end -->
                            <li class="header"><?php echo e(__('Users')); ?></li>

                            <!-- user start  -->
                            <li
                                class="<?php echo e(Nav::isRoute('user.index')); ?> <?php echo e(Nav::isRoute('user.add')); ?> <?php echo e(Nav::isRoute('user.edit')); ?><?php echo e(Nav::isRoute('alluser.index')); ?> <?php echo e(Nav::isRoute('alluser.add')); ?> <?php echo e(Nav::isRoute('alluser.edit')); ?><?php echo e(Nav::isRoute('allinstructor.index')); ?> <?php echo e(Nav::isRoute('allinstructor.add')); ?> <?php echo e(Nav::isRoute('allinstructor.edit')); ?>">
                                <a href="javaScript:void();">
                                    <i class="feather icon-users text-secondary"></i><span><?php echo e(__('Users')); ?></span><i
                                        class="feather icon-chevron-right"></i>
                                </a>
                                <ul class="vertical-submenu">

                                    <li>
                                        <a class="<?php echo e(Nav::isResource('user')); ?>"
                                            href="<?php echo e(route('user.index')); ?>"><?php echo e(__('All Users')); ?></a>
                                    </li>

                                    <li>
                                        <a class="<?php echo e(Nav::isResource('allusers')); ?>"
                                            href="<?php echo e(route('allusers.index')); ?>"><?php echo e(__('All Students')); ?></a>
                                    </li>
                                    <li>
                                        <a class="<?php echo e(Nav::isResource('allinstructor')); ?>"
                                            href="<?php echo e(route('allinstructor.index')); ?>"><?php echo e(__('All Instructors')); ?></a>
                                    </li>

                                </ul>
                            </li>
                            <li
                                class="<?php echo e(Nav::isResource('plan/subscribe/settings')); ?> <?php echo e(Nav::isResource('subscription/plan')); ?> <?php echo e(Nav::isResource('orders/subscription')); ?> <?php echo e(Nav::isRoute('all.instructor')); ?> <?php echo e(Nav::isResource('requestinstructor')); ?>">
                                <a href="javaScript:void();">
                                    <i
                                        class="feather icon-user text-secondary"></i><span><?php echo e(__('adminstaticword.Instructors')); ?></span><i
                                        class="feather icon-chevron-right"></i>
                                </a>
                                <ul class="vertical-submenu">
                                    <li class="<?php echo e(Nav::isRoute('all.instructor')); ?>"><a
                                            href="<?php echo e(route('all.instructor')); ?>"><?php echo e(__('adminstaticword.All')); ?>

                                            <?php echo e(__('adminstaticword.InstructorRequest')); ?></a></li>
                                    <li class="<?php echo e(Nav::isResource('requestinstructor')); ?>"><a
                                            href="<?php echo e(url('requestinstructor')); ?>"><?php echo e(__('adminstaticword.Pending')); ?>

                                            <?php echo e(__('Request')); ?></a></li>
                                    <li class="<?php echo e(Nav::isResource('plan/subscribe/settings')); ?>"><a
                                            href="<?php echo e(url('plan/subscribe/settings')); ?>"><?php echo e(__('adminstaticword.InstructorPlan')); ?>

                                            <?php echo e(__('adminstaticword.Setting')); ?></a></li>
                                    <?php if(env('ENABLE_INSTRUCTOR_SUBS_SYSTEM') == 1): ?>
                                    <li class="<?php echo e(Nav::isResource('subscription/plan')); ?>"><a
                                            href="<?php echo e(url('subscription/plan')); ?>"><?php echo e(__('adminstaticword.InstructorPlan')); ?></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isResource('orders/subscription')); ?>"><a
                                            href="<?php echo e(url('orders/subscription')); ?>"><?php echo e(__('adminstaticword.SubscribedInstructors')); ?></a>
                                    </li>
                                    <?php endif; ?>
                                    <!-- MultipleInstructor start  -->
                                    <li
                                        class="<?php echo e(Nav::isRoute('allrequestinvolve')); ?> <?php echo e(Nav::isRoute('involve.request.index')); ?> <?php echo e(Nav::isRoute('involve.request')); ?>">
                                        <a href="javaScript:void();">
                                            <i class=""></i> <span><?php echo e(__('adminstaticword.MultipleInstructor')); ?></span>
                                        </a>
                                        <ul class="vertical-submenu">

                                            <li class="<?php echo e(Nav::isRoute('allrequestinvolve')); ?>"><a
                                                    href="<?php echo e(route('allrequestinvolve')); ?>"><?php echo e(__('adminstaticword.RequestToInvolve')); ?></a>
                                            </li>
                                            <li class="<?php echo e(Nav::isRoute('involve.request.index')); ?>"><a
                                                    href="<?php echo e(route('involve.request.index')); ?>"><?php echo e(__('adminstaticword.InvolvementRequests')); ?></a>
                                            </li>
                                            <li class="<?php echo e(Nav::isRoute('involve.request')); ?>"><a
                                                    href="<?php echo e(route('involve.request')); ?>"><?php echo e(__('adminstaticword.InvolvedInCourse')); ?></a>
                                            </li>

                                        </ul>
                                    </li>
                                    <!-- MultipleInstructor end  -->
                                    <!-- InstructorPayout start  -->
                                    <li
                                        class="<?php echo e(Nav::isRoute('instructor.settings')); ?> <?php echo e(Nav::isRoute('admin.instructor')); ?> <?php echo e(Nav::isRoute('admin.completed')); ?>">
                                        <a href="javaScript:void();">
                                            <i class=""></i> <span><?php echo e(__('adminstaticword.InstructorPayout')); ?></span>
                                        </a>
                                        <ul class="vertical-submenu">

                                            <li class="<?php echo e(Nav::isRoute('instructor.settings')); ?>"><a
                                                    href="<?php echo e(route('instructor.settings')); ?>"><?php echo e(__('adminstaticword.PayoutSettings')); ?></a>
                                            </li>
                                            <li class="<?php echo e(Nav::isRoute('admin.instructor')); ?>"><a
                                                    href="<?php echo e(route('admin.instructor')); ?>"><?php echo e(__('adminstaticword.PendingPayout')); ?></a>
                                            </li>
                                            <li class="<?php echo e(Nav::isRoute('admin.completed')); ?>"><a
                                                    href="<?php echo e(route('admin.completed')); ?>"><?php echo e(__('adminstaticword.CompletedPayout')); ?></a>
                                            </li>


                                        </ul>
                                    </li>
                                    <!-- InstructorPayout end  -->
                                </ul>
                            </li>
                            <!-- user end -->
                            <li class="header"><?php echo e(__('Education')); ?></li>
                            <!-- ====================Course start======================== -->
                            <li
                                class="<?php echo e(Nav::isResource('category')); ?> <?php echo e(Nav::isResource('subcategory')); ?> <?php echo e(Nav::isResource('childcategory')); ?> <?php echo e(Nav::isResource('course')); ?> <?php echo e(Nav::isResource('bundle')); ?> <?php echo e(Nav::isResource('courselang')); ?> <?php echo e(Nav::isResource('coursereview')); ?> <?php echo e(Nav::isRoute('assignment.view')); ?> <?php echo e(Nav::isResource('refundpolicy')); ?> <?php echo e(Nav::isResource('batch')); ?> <?php echo e(Nav::isRoute('quiz.review')); ?> <?php echo e(Nav::isResource('private-course')); ?>">
                                <a href="javaScript:void();">
                                    <i
                                        class="feather icon-book text-secondary"></i><span><?php echo e(__('adminstaticword.Course')); ?></span><i
                                        class="feather icon-chevron-right"></i>
                                </a>
                                <ul class="vertical-submenu">
                                    <!-- Category start  -->
                                    <li
                                        class="<?php echo e(Nav::isResource('category')); ?> <?php echo e(Nav::isResource('subcategory')); ?> <?php echo e(Nav::isResource('childcategory')); ?>">
                                        <a href="javaScript:void();">
                                            <i class=""></i> <span><?php echo e(__('adminstaticword.Category')); ?></span><i
                                                class="feather icon-chevron-right"></i>
                                        </a>
                                        <ul class="vertical-submenu">

                                            <li class="<?php echo e(Nav::isResource('category')); ?>"><a
                                                    href="<?php echo e(url('category')); ?>"><?php echo e(__('adminstaticword.Category')); ?></a>
                                            </li>
                                            <li class="<?php echo e(Nav::isResource('subcategory')); ?>"><a
                                                    href="<?php echo e(url('subcategory')); ?>"><?php echo e(__('adminstaticword.SubCategory')); ?></a>
                                            </li>
                                            <li class="<?php echo e(Nav::isResource('childcategory')); ?>"><a
                                                    href="<?php echo e(url('childcategory')); ?>"><?php echo e(__('adminstaticword.ChildCategory')); ?></a>
                                            </li>

                                        </ul>
                                    </li>


                                    <!-- Category end  -->
                                    <li class="<?php echo e(Nav::isResource('course')); ?>"><a
                                            href="<?php echo e(url('course')); ?>"><span><?php echo e(__('adminstaticword.Courses')); ?></span></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isResource('bundle')); ?>"><a
                                            href="<?php echo e(url('bundle')); ?>"><span><?php echo e(__('adminstaticword.BundleCourse')); ?></span></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isResource('courselang')); ?>"><a
                                            href="<?php echo e(url('courselang')); ?>"><span><?php echo e(__('adminstaticword.CourseLanguage')); ?></span></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isResource('coursereview')); ?>"><a
                                            href="<?php echo e(url('coursereview')); ?>"><span><?php echo e(__('adminstaticword.CourseReview')); ?></span></a>
                                    </li>
                                    <?php if($gsetting->assignment_enable == 1): ?>
                                    <li class="<?php echo e(Nav::isRoute('assignment.view')); ?>"><a
                                            href="<?php echo e(route('assignment.view')); ?>"><span><?php echo e(__('adminstaticword.Assignment')); ?></span></a>
                                    </li>
                                    <?php endif; ?>
                                    <li class="<?php echo e(Nav::isResource('refundpolicy')); ?>"><a
                                            href="<?php echo e(url('refundpolicy')); ?>"><span><?php echo e(__('adminstaticword.RefundPolicy')); ?></span></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isResource('batch')); ?>"><a
                                            href="<?php echo e(url('batch')); ?>"><span><?php echo e(__('adminstaticword.Batch')); ?></span></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isRoute('quiz.review')); ?>"><a
                                            href="<?php echo e(route('quiz.review')); ?>"><span><?php echo e(__('adminstaticword.QuizReview')); ?></span></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isResource('private-course')); ?>"><a
                                            href="<?php echo e(url('private-course')); ?>"><span><?php echo e(__('adminstaticword.PrivateCourse')); ?></span></a>
                                    </li>
                                </ul>
                            </li>
                            <!--=================== Course end====================================  -->
                            <!-- ====================Meetings start======================== -->
                            <li
                                class="<?php echo e(Nav::isRoute('meeting.create')); ?> <?php echo e(Nav::isRoute('zoom.show')); ?> <?php echo e(Nav::isRoute('zoom.edit')); ?> <?php echo e(Nav::isRoute('zoom.setting')); ?> <?php echo e(Nav::isRoute('zoom.index')); ?> <?php echo e(Nav::isRoute('meeting.show')); ?> <?php echo e(Nav::isRoute('bbl.setting')); ?> <?php echo e(Nav::isRoute('bbl.all.meeting')); ?> <?php echo e(Nav::isRoute('download.meeting')); ?> <?php echo e(Nav::isRoute('googlemeet.setting')); ?> <?php echo e(Nav::isRoute('googlemeet.index')); ?> <?php echo e(Nav::isRoute('googlemeet.allgooglemeeting')); ?> <?php echo e(Nav::isRoute('jitsi.dashboard')); ?> <?php echo e(Nav::isRoute('jitsi.create')); ?> <?php echo e(Nav::isResource('meeting-recordings')); ?>">
                                <a href="javaScript:void();">
                                    <i class="feather icon-clock text-secondary"></i>
                                    <span><?php echo e(__('adminstaticword.Meetings')); ?></span><i
                                        class="feather icon-chevron-right"></i>
                                </a>
                                <ul class="vertical-submenu">
                                    <!-- ZoomLiveMeetings start  -->
                                    <?php if(isset($zoom_enable) && $zoom_enable == 1): ?>
                                    <li
                                        class="<?php echo e(Nav::isRoute('meeting.create')); ?> <?php echo e(Nav::isRoute('zoom.show')); ?> <?php echo e(Nav::isRoute('zoom.edit')); ?> <?php echo e(Nav::isRoute('zoom.setting')); ?> <?php echo e(Nav::isRoute('zoom.index')); ?> <?php echo e(Nav::isRoute('meeting.show')); ?>">
                                        <a href="javaScript:void();">
                                            <i class=""></i> <span><?php echo e(__('Zoom Live')); ?></span><i
                                                class="feather icon-chevron-right"></i>
                                        </a>
                                        <ul class="vertical-submenu">
                                            <li class="<?php echo e(Nav::isRoute('zoom.setting')); ?>"><a
                                                    href="<?php echo e(route('zoom.setting')); ?>"><?php echo e(__('adminstaticword.ZoomSettings')); ?></a>
                                            </li>
                                            <li
                                                class="<?php echo e(Nav::isRoute('zoom.index')); ?> <?php echo e(Nav::isRoute('zoom.show')); ?> <?php echo e(Nav::isRoute('zoom.edit')); ?> <?php echo e(Nav::isRoute('meeting.create')); ?>">
                                                <a
                                                    href="<?php echo e(route('zoom.index')); ?>"><?php echo e(__('adminstaticword.ZoomDashboard')); ?></a>
                                            </li>
                                            <li class="<?php echo e(Nav::isRoute('meeting.show')); ?>"><a
                                                    href="<?php echo e(route('meeting.show')); ?>"><?php echo e(__('adminstaticword.AllMeetings')); ?></a>
                                            </li>

                                        </ul>
                                    </li>
                                    <?php endif; ?>
                                    <!-- ZoomLiveMeetings end  -->
                                    <!-- BigBlueMeetings start  -->
                                    <?php if(isset($gsetting) && $gsetting->bbl_enable == 1): ?>
                                    <li
                                        class="<?php echo e(Nav::isRoute('bbl.setting')); ?> <?php echo e(Nav::isRoute('bbl.all.meeting')); ?> <?php echo e(Nav::isRoute('download.meeting')); ?>">
                                        <a href="javaScript:void();">
                                            <i class=""></i> <span><?php echo e(__('Big Blue')); ?></span><i
                                                class="feather icon-chevron-right"></i>
                                        </a>
                                        <ul class="vertical-submenu">

                                            <li class="<?php echo e(Nav::isRoute('bbl.setting')); ?>"><a
                                                    href="<?php echo e(route('bbl.setting')); ?>"><?php echo e(__('BBB Settings')); ?></a>
                                            </li>
                                            <li class="<?php echo e(Nav::isRoute('bbl.all.meeting')); ?>"><a
                                                    href="<?php echo e(route('bbl.all.meeting')); ?>"><?php echo e(__('adminstaticword.ListMeetings')); ?></a>
                                            </li>
                                            <li class="<?php echo e(Nav::isRoute('download.meeting')); ?>"><a
                                                    href="<?php echo e(route('download.meeting')); ?>"><?php echo e(__('adminstaticword.MeetingRecordings')); ?></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <?php endif; ?>
                                    <!-- BigBlueMeetings end  -->

                                    <!-- Google Meet Meeting start  -->
                                    <?php if(isset($gsetting) && $gsetting->googlemeet_enable == 1): ?>
                                    <li
                                        class="<?php echo e(Nav::isRoute('googlemeet.setting')); ?> <?php echo e(Nav::isRoute('googlemeet.index')); ?> <?php echo e(Nav::isRoute('googlemeet.allgooglemeeting')); ?>">
                                        <a href="javaScript:void();">
                                            <i class=""></i> <span><?php echo e(__('Google Meet')); ?></span><i
                                                class="feather icon-chevron-right"></i>
                                        </a>
                                        <ul class="vertical-submenu">

                                            <li class="<?php echo e(Nav::isRoute('googlemeet.setting')); ?>"><a
                                                    href="<?php echo e(route('googlemeet.setting')); ?>"><?php echo e(__('GM Settings')); ?></a>
                                            </li>
                                            <li class="<?php echo e(Nav::isRoute('googlemeet.index')); ?>"><a
                                                    href="<?php echo e(route('googlemeet.index')); ?>"><?php echo e(__('GM Dashboard')); ?></a>
                                            </li>
                                            <li class="<?php echo e(Nav::isRoute('googlemeet.allgooglemeeting')); ?>"><a
                                                    href="<?php echo e(route('googlemeet.allgooglemeeting')); ?>"><?php echo e(__('adminstaticword.AllMeetings')); ?></a>
                                            </li>

                                        </ul>
                                    </li>
                                    <?php endif; ?>
                                    <!-- Google Meet Meeting end  -->

                                    <!-- Jitsi Meeting start -->
                                    <?php if(isset($gsetting) && $gsetting->jitsimeet_enable == 1): ?>
                                    <li
                                        class="<?php echo e(Nav::isRoute('jitsi.dashboard')); ?> <?php echo e(Nav::isRoute('jitsi.create')); ?>">
                                        <a href="javaScript:void();">
                                            <i class=""></i> <span><?php echo e(__('Jitsi Meeting')); ?></span><i
                                                class="feather icon-chevron-right"></i>
                                        </a>
                                        <ul class="vertical-submenu">
                                            <li class="<?php echo e(Nav::isRoute('jitsi.dashboard')); ?>"><a
                                                    href="<?php echo e(route('jitsi.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
                                        </ul>
                                    </li>
                                    <?php endif; ?>

                                    <?php if(Module::find('Googleclassroom') && Module::find('googleclassroom')->isEnabled()): ?>
                                    <?php echo $__env->make('googleclassroom::layouts.admin_sidebar_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php endif; ?>
                                    <!-- Jitsi Meeting end -->
                                    <li class="<?php echo e(Nav::isResource('meeting-recordings')); ?>"><a
                                            href="<?php echo e(url('meeting-recordings')); ?>"><span><?php echo e(__('adminstaticword.MeetingRecordings')); ?></span></a>
                                    </li>

                                </ul>
                            </li>
                            <li><a href="<?php echo e(url('institute')); ?>"><i
                                        class="feather icon-grid text-secondary"></i><span><?php echo e(__('Institute')); ?></span></a>
                            </li>
                            <?php if(Module::has('Certificate') && Module::find('Certificate')->isEnabled()): ?>
                            <?php echo $__env->make('certificate::admin.sidebar_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>

                            <?php if(Module::has('Blizzard') && Module::find('Blizzard')->isEnabled()): ?>
                            <li class="<?php echo e(Nav::isRoute('themesettings.index')); ?>"><a
                                    href="<?php echo e(route('themesettings.index')); ?>"><i
                                        class="feather icon-airplay text-secondary"></i><span><?php echo e(__('adminstaticword.Themes')); ?></span></a>
                            </li>
                            <?php endif; ?>

                            <!--===================meeting end====================================  -->
                            <!-- ====================instructor start======================== -->

                            <!--===================instructor end====================================  -->
                            <li class="header"><?php echo e(__('Marketing')); ?></li>
                            <li class="<?php echo e(Nav::isResource('coupon')); ?>"><a href="<?php echo e(url('coupon')); ?>"><i
                                        class="feather icon-award text-secondary"></i><span><?php echo e(__('adminstaticword.Coupon')); ?></span></a>
                            </li>
                            <li class="<?php echo e(Nav::isRoute('follower.view')); ?>"><a href="<?php echo e(route('follower.view')); ?>"><i
                                        class="feather icon-help-circle text-secondary"></i><span><?php echo e(__('Followers')); ?></span></a>
                            </li>

                            <li
                                class="<?php echo e(Nav::isRoute('save.affiliates')); ?> <?php echo e(Nav::isRoute('wallet.settings')); ?> <?php echo e(Nav::isRoute('wallet.transactions')); ?>">
                                <a href="javaScript:void();">
                                    <i
                                        class="feather icon-dollar-sign text-secondary"></i><span><?php echo e(__('adminstaticword.Affiliate&Wallet')); ?></span><i
                                        class="feather icon-chevron-right"></i>
                                </a>
                                <ul class="vertical-submenu">

                                    <li class="<?php echo e(Nav::isRoute('save.affiliates')); ?>">
                                        <a href="<?php echo e(route('save.affiliates')); ?>"><?php echo e(__('adminstaticword.Affiliate')); ?></a>
                                    </li>

                                    <li
                                        class="<?php echo e(Nav::isRoute('wallet.settings')); ?> <?php echo e(Nav::isRoute('wallet.transactions')); ?>">
                                        <a href="javaScript:void();">

                                            <span><?php echo e(__('adminstaticword.Wallet')); ?></span>

                                        </a>
                                        <ul class="vertical-submenu">
                                            <li class="<?php echo e(Nav::isRoute('wallet.settings')); ?>"><a
                                                    href="<?php echo e(route('wallet.settings')); ?>"><?php echo e(__('adminstaticword.Wallet')); ?>

                                                    <?php echo e(__('adminstaticword.Setting')); ?></a></li>
                                            <li class="<?php echo e(Nav::isRoute('wallet.transactions')); ?>"><a
                                                    href="<?php echo e(route('wallet.transactions')); ?>"><?php echo e(__('adminstaticword.Wallet')); ?>

                                                    <?php echo e(__('adminstaticword.Transactions')); ?></a></li>

                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <!-- PushNotification -->
                            <li class="<?php echo e(Nav::isRoute('onesignal.settings')); ?>"><a
                                    href="<?php echo e(route('onesignal.settings')); ?>"><i
                                        class="feather icon-navigation text-secondary"></i><span><?php echo e(__('adminstaticword.PushNotification')); ?></span></a>
                            </li>



                            <li class="<?php echo e(Nav::isResource('admin/flash-sales')); ?>"><a
                                    href="<?php echo e(url('admin/flash-sales')); ?>"><i
                                        class="feather icon-clock text-secondary"></i>
                                    <span><?php echo e(__('Flash Deals')); ?></span></a>
                            </li>



                            <!-- attandance -->
                            <?php if(isset($gsetting) && $gsetting->attandance_enable == 1): ?>
                            <li class="<?php echo e(Nav::isResource('attandance')); ?>"><a href="<?php echo e(url('attandance')); ?>"><i
                                        class="feather icon-user text-secondary"></i><span><?php echo e(__('adminstaticword.Attandance')); ?></span></a>
                            </li>
                            <?php endif; ?>

                            <!-- coupon -->

                            <li class="header"><?php echo e(__('Financial')); ?></li>

                            <!-- order -->
                            <li class="<?php echo e(Nav::isResource('order')); ?>"><a href="<?php echo e(url('order')); ?>"><i
                                        class="feather icon-shopping-cart text-secondary"></i><span><?php echo e(__('adminstaticword.Order')); ?></span></a>
                            </li>

                            <!-- order -->


                            <li class="header"><?php echo e(__('Content')); ?></li>




                            <!-- report start  -->
                            <li
                                class="<?php echo e(Nav::isResource('user/course/report')); ?> <?php echo e(Nav::isResource('user/question/report')); ?><?php echo e(url('show/progress/report')); ?> <?php echo e(Nav::isResource('show/quiz/report')); ?>">
                                <a href="javaScript:void();">
                                    <i
                                        class="feather icon-file-text text-secondary"></i><span><?php echo e(__('adminstaticword.Report')); ?></span><i
                                        class="feather icon-chevron-right"></i>
                                </a>
                                <ul class="vertical-submenu">


                                    <li class="<?php echo e(Nav::isResource('show/quiz/report')); ?>">
                                        <a href="<?php echo e(url('show/quiz/report')); ?>"><?php echo e(__('Quiz')); ?> <?php echo e(__('Report')); ?> </a>
                                    </li>
                                    <li class="<?php echo e(Nav::isResource('show/progress/report')); ?>">
                                        <a href="<?php echo e(url('show/progress/report')); ?>"><?php echo e(__('Progress')); ?>

                                            <?php echo e(__('Report')); ?></a>
                                    </li>

                                    <!-- revenue report start  -->
                                    <li
                                        class="<?php echo e(Nav::isRoute('admin.revenue.report')); ?> <?php echo e(Nav::isRoute('instructor.revenue.report')); ?><?php echo e(Nav::isResource('device-logs')); ?>">
                                        <a href="javaScript:void();"><span><?php echo e(__('adminstaticword.Revenue')); ?>

                                                <?php echo e(__('adminstaticword.Report')); ?></span><i
                                                class="feather icon-chevron-right"></i>
                                        </a>
                                        <ul class="vertical-submenu">

                                            <li class="<?php echo e(Nav::isRoute('admin.revenue.report')); ?>">
                                                <a
                                                    href="<?php echo e(route('admin.revenue.report')); ?>"><?php echo e(__('adminstaticword.AdminRevenue')); ?></a>
                                            </li>

                                            <li class="<?php echo e(Nav::isRoute('instructor.revenue.report')); ?>">
                                                <a
                                                    href="<?php echo e(route('instructor.revenue.report')); ?>"><?php echo e(__('adminstaticword.InstructorRevenue')); ?></a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="<?php echo e(Nav::isResource('admin/report/view')); ?>">
                                        <a href="<?php echo e(url('admin/report/view')); ?>"><?php echo e(__('adminstaticword.Reported')); ?>

                                            <?php echo e(__('Course')); ?>

                                        </a>
                                    </li>

                                    <li class="<?php echo e(Nav::isResource('admin/report/view')); ?>">
                                        <a href="<?php echo e(route('order.report')); ?>">
                                            <?php echo e(__('Financial reports')); ?> </a>
                                    </li>

                                    <li class="<?php echo e(Nav::isResource('user/question/report')); ?>">
                                        <a href="<?php echo e(url('user/question/report')); ?>"><?php echo e(__('adminstaticword.Reported')); ?>

                                            <?php echo e(__('Question')); ?></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isResource('device-logs')); ?>">
                                        <a href="<?php echo e(url('device-logs')); ?>"><?php echo e(__('Device History')); ?> </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- report end -->


                            <!-- forum -->
                            <?php if(Module::find('forum') && Module::find('forum')->isEnabled()): ?>
                            <?php echo $__env->make('forum::layouts.admin_sidebar_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                            <li class="<?php echo e(Nav::isRoute('about.page')); ?>">
                                <a href="<?php echo e(route('about.page')); ?>"><i
                                        class="feather icon-external-link text-secondary"></i><?php echo e(__('adminstaticword.About')); ?></a>
                            </li>
                            <!-- faq start  -->
                            <li class="<?php echo e(Nav::isResource('faq')); ?> <?php echo e(Nav::isResource('faqinstructor')); ?>">
                                <a href="javaScript:void();">
                                    <i
                                        class="feather icon-help-circle text-secondary"></i><span><?php echo e(__('adminstaticword.Faq')); ?></span><i
                                        class="feather icon-chevron-right"></i>
                                </a>
                                <ul class="vertical-submenu">

                                    <li class="<?php echo e(Nav::isResource('faq')); ?>">
                                        <a href="<?php echo e(url('faq')); ?>"><?php echo e(__('adminstaticword.FaqStudent')); ?></a>
                                    </li>

                                    <li class="<?php echo e(Nav::isResource('faqinstructor')); ?>">
                                        <a href="<?php echo e(url('faqinstructor')); ?>"><?php echo e(__('adminstaticword.FaqInstructor')); ?></a>
                                    </li>

                                </ul>
                            </li>
                            <li class="<?php echo e(Nav::isRoute('careers.page')); ?>">
                                <a href="<?php echo e(route('careers.page')); ?>"><i
                                        class="feather icon-sidebar text-secondary"></i><?php echo e(__('adminstaticword.Career')); ?></a>
                            </li>
                            <!-- faq end -->

                            <!-- location start -->
                            <li
                                class="<?php echo e(Nav::isResource('admin/country')); ?> <?php echo e(Nav::isResource('admin/state')); ?> <?php echo e(Nav::isResource('admin/city')); ?>">
                                <a href="javaScript:void();">
                                    <i class="fa fa-map-marker text-secondary"></i><span><?php echo e(__('Locations')); ?></span><i
                                        class="feather icon-chevron-right"></i>
                                </a>
                                <ul class="vertical-submenu">

                                    <li class="<?php echo e(Nav::isResource('admin/country')); ?>"><a
                                            href="<?php echo e(url('admin/country')); ?>"><?php echo e(__('adminstaticword.Country')); ?></a></li>
                                    <li class="<?php echo e(Nav::isResource('admin/state')); ?>"><a
                                            href="<?php echo e(url('admin/state')); ?>"><?php echo e(__('adminstaticword.State')); ?></a></li>
                                    <li class="<?php echo e(Nav::isResource('admin/city')); ?>"><a
                                            href="<?php echo e(url('admin/city')); ?>"><?php echo e(__('adminstaticword.City')); ?></a></li>

                                </ul>
                            </li>

                            <li class="<?php echo e(Nav::isRoute('certificate.index')); ?>"><a
                                    href="<?php echo e(route('certificate.index')); ?>">
                                    <i
                                        class="feather icon-help-circle text-secondary"></i><span><?php echo e(__('CertificateVerification')); ?></span>
                                </a></li>
                            <!-- contact us start -->
                            <li class="<?php echo e(Nav::isResource('usermessage')); ?>"><a href="<?php echo e(url('usermessage')); ?>"><i
                                        class="feather icon-phone-call text-secondary"></i><span><?php echo e(__('adminstaticword.ContactUs')); ?></span>
                                </a>
                            </li>
                            <?php if(Module::has('Resume') && Module::find('Resume')->isEnabled()): ?>
                            <?php echo $__env->make('resume::front.job.admin.icon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                            <!-- contact us end -->
                            <!-- location end -->
                            <li class="header"><?php echo e(__('Setting')); ?></li>
                            <li class="<?php echo e(Nav::isRoute('currency.index')); ?>"><a href="<?php echo e(route('currency.index')); ?>"><i
                                        class="feather icon-dollar-sign text-secondary"></i><span><?php echo e(__('adminstaticword.Currency')); ?></span></a>
                            </li>
                            <!-- front setting start  -->
                            <li
                                class="<?php echo e(Nav::isResource('testimonial')); ?> <?php echo e(Nav::isResource('advertisement')); ?> <?php echo e(Nav::isResource('slider')); ?> <?php echo e(Nav::isResource('facts')); ?> <?php echo e(Nav::isRoute('category.slider')); ?> <?php echo e(Nav::isResource('blog')); ?> <?php echo e(Nav::isResource('getstarted')); ?> <?php echo e(Nav::isResource('trusted')); ?> <?php echo e(Nav::isRoute('widget.setting')); ?> <?php echo e(Nav::isRoute('terms')); ?> <?php echo e(Nav::isResource('directory')); ?>">
                                <a href="javaScript:void();">
                                    <i
                                        class="feather icon-monitor text-secondary"></i><span><?php echo e(__('adminstaticword.FrontSetting')); ?></span><i
                                        class="feather icon-chevron-right"></i>
                                </a>
                                <ul class="vertical-submenu">
                                    <li class="<?php echo e(Nav::isResource('testimonial')); ?>"><a
                                            href="<?php echo e(url('testimonial')); ?>"><span><?php echo e(__('adminstaticword.Testimonial')); ?></span></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isResource('advertisement')); ?>"><a
                                            href="<?php echo e(url('advertisement')); ?>"><span><?php echo e(__('adminstaticword.Advertisement')); ?></span></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isResource('slider')); ?>"><a
                                            href="<?php echo e(url('slider')); ?>"><span><?php echo e(__('adminstaticword.Slider')); ?></span></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isResource('facts')); ?>"><a
                                            href="<?php echo e(url('facts')); ?>"><span><?php echo e(__('Fact Slider')); ?></span></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isRoute('category.slider')); ?>"><a
                                            href="<?php echo e(route('category.slider')); ?>"><span><?php echo e(__('adminstaticword.CategorySlider')); ?></span></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isResource('blog')); ?>">
                                        <a href="<?php echo e(url('blog')); ?>"><?php echo e(__('adminstaticword.Blog')); ?></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isResource('getstarted')); ?>"><a
                                            href="<?php echo e(url('getstarted')); ?>"><?php echo e(__('adminstaticword.GetStarted')); ?></a></li>
                                    <li class="<?php echo e(Nav::isResource('trusted')); ?>"><a
                                            href="<?php echo e(url('trusted')); ?>"><span><?php echo e(__('adminstaticword.TrustedSlider')); ?></span></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isRoute('widget.setting')); ?>"><a
                                            href="<?php echo e(route('widget.setting')); ?>"><?php echo e(__('Widget')); ?></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isResource('directory')); ?>"><a
                                            href="<?php echo e(url('directory')); ?>"><span><?php echo e(__('adminstaticword.Seo')); ?>

                                                <?php echo e(__('adminstaticword.Directory')); ?></span></a></li>
                                    <!-- pages start -->
                                    <li class="<?php echo e(Nav::isResource('page')); ?>"><a
                                            href="<?php echo e(url('page')); ?>"><span><?php echo e(__('Pages')); ?></span></a> </li>
                                    <!-- pages end -->
                                    <li class="<?php echo e(Nav::isRoute('comingsoon.page')); ?>">
                                        <a
                                            href="<?php echo e(route('comingsoon.page')); ?>"><?php echo e(__('adminstaticword.ComingSoon')); ?></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isRoute('termscondition')); ?>">
                                        <a href="<?php echo e(route('termscondition')); ?>"><?php echo e(__('adminstaticword.Terms&Condition')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(Nav::isRoute('policy')); ?>">
                                        <a href="<?php echo e(route('policy')); ?>"><?php echo e(__('adminstaticword.PrivacyPolicy')); ?></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isRoute('coloroption.view')); ?>">
                                        <a href="<?php echo e(url('admin/coloroption')); ?>"><?php echo e(__('Color')); ?></a>
                                    </li>

                                    <li class="<?php echo e(Nav::isRoute('invoice/settings')); ?>">
                                        <a href="<?php echo e(url('invoice/settings')); ?>"><?php echo e(__('Invoice')); ?><?php echo e(__('')); ?></a>
                                    </li>

                                </ul>
                            </li>

                            <!-- front setting end -->
                            <!-- site setting start  -->
                            <li
                                class="<?php echo e(Nav::isRoute('gen.set')); ?> <?php echo e(Nav::isRoute('careers.page')); ?>  <?php echo e(Nav::isRoute('termscondition')); ?> <?php echo e(Nav::isRoute('policy')); ?>  <?php echo e(Nav::isRoute('show.pwa')); ?> <?php echo e(Nav::isRoute('adsense')); ?> <?php echo e(Nav::isRoute('ipblock.view')); ?> <?php echo e(Nav::isRoute('whatsapp.button')); ?>  <?php echo e(Nav::isRoute('twilio.settings')); ?> <?php echo e(Nav::isRoute('show.sitemap')); ?> <?php echo e(Nav::isRoute('get.api.key')); ?> <?php echo e(Nav::isRoute('show.lang')); ?>">
                                <a href="javaScript:void();">
                                    <i
                                        class="feather icon-settings text-secondary"></i><span><?php echo e(__('adminstaticword.SiteSetting')); ?></span><i
                                        class="feather icon-chevron-right"></i>
                                </a>
                                <ul class="vertical-submenu">

                                    <li class="<?php echo e(Nav::isRoute('gen.set')); ?>">
                                        <a href="<?php echo e(route('gen.set')); ?>"><?php echo e(__('adminstaticword.Setting')); ?></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isRoute('show.pwa')); ?>">
                                        <a href="<?php echo e(route('show.pwa')); ?>"><?php echo e(__('PWA')); ?></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isRoute('adsense')); ?>">
                                        <a href="<?php echo e(url('/admin/adsensesetting')); ?>"><?php echo e(__('Adsense')); ?></a>
                                    </li>
                                    <?php if(isset($gsetting) && $gsetting->ipblock_enable == 1): ?>
                                    <li class="<?php echo e(Nav::isRoute('ipblock.view')); ?>">
                                        <a
                                            href="<?php echo e(url('admin/ipblock')); ?>"><?php echo e(__('adminstaticword.IPBlockSettings')); ?></a>
                                    </li>
                                    <?php endif; ?>
                                    <li class="<?php echo e(Nav::isRoute('whatsapp.button')); ?>">
                                        <a href="<?php echo e(route('whatsapp.button')); ?>"><?php echo e(__('Whatsapp Chat')); ?></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isRoute('twilio.settings')); ?>">
                                        <a href="<?php echo e(route('twilio.settings')); ?>"><?php echo e(__('Twilio')); ?></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isRoute('show.sitemap')); ?>">
                                        <a href="<?php echo e(route('show.sitemap')); ?>"><?php echo e(__('adminstaticword.SiteMap')); ?></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isRoute('get.api.key')); ?>">
                                        <a href="<?php echo e(route('get.api.key')); ?>"><?php echo e(__('adminstaticword.GetAPIKeys')); ?></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isRoute('show.lang')); ?>">
                                        <a href="<?php echo e(route('show.lang')); ?>"><?php echo e(__('adminstaticword.Language')); ?></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isRoute('maileclipse/mailables')); ?>">
                                        <a href="<?php echo e(url('maileclipse/mailables')); ?>"><?php echo e(__('Email')); ?><?php echo e(__('')); ?></a>
                                    </li>


                                </ul>
                            </li>
                            <!-- site setting end -->
                            <!-- payment setting start -->
                            <li class=" <?php echo e(Nav::isRoute('api.setApiView')); ?> ">
                                <a href="javaScript:void();">
                                    <i
                                        class="feather icon-dollar-sign text-secondary"></i><span><?php echo e(__('Payment Setting')); ?></span><i
                                        class="feather icon-chevron-right"></i>
                                </a>
                                <ul class="vertical-submenu">

                                    <li class="<?php echo e(Nav::isRoute('api.setApiView')); ?>">
                                        <a
                                            href="<?php echo e(route('api.setApiView')); ?><?php echo e(Nav::isRoute('bank.transfer')); ?><?php echo e(Nav::isResource('manualpayment')); ?>"><?php echo e(__('adminstaticword.APISetting')); ?></a>
                                    </li>

                                    <?php if(Module::has('MPesa') && Module::find('MPesa')->isEnabled()): ?>
                                    <?php echo $__env->make('mpesa::admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php endif; ?>

                                    <li class="<?php echo e(Nav::isRoute('bank.transfer')); ?>">
                                        <a href="<?php echo e(route('bank.transfer')); ?>"><?php echo e(__('adminstaticword.BankDetails')); ?></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isResource('manualpayment')); ?>">
                                        <a href="<?php echo e(url('manualpayment')); ?>"><?php echo e(__('Manual Payment')); ?></a>
                                    </li>
                                </ul>
                            </li>
                            <!-- payment setting start end -->
                            <!-- player setting start -->
                            <li
                                class="<?php echo e(Nav::isRoute('player.set')); ?> <?php echo e(Nav::isRoute('ads')); ?> <?php echo e(Nav::isRoute('ad.setting')); ?>">
                                <a href="javaScript:void();">
                                    <i
                                        class="feather icon-play-circle text-secondary"></i><span><?php echo e(__('adminstaticword.PlayerSettings')); ?></span><i
                                        class="feather icon-chevron-right"></i>
                                </a>
                                <ul class="vertical-submenu">

                                    <li class="<?php echo e(Nav::isRoute('player.set')); ?>"><a
                                            href="<?php echo e(route('player.set')); ?>"><?php echo e(__('adminstaticword.PlayerCustomization')); ?></a>
                                    </li>

                                    <li class="<?php echo e(Nav::isRoute('ads')); ?>"><a href="<?php echo e(url('admin/ads')); ?>"
                                            title="Create ad"><?php echo e(__('adminstaticword.Advertise')); ?></a></li>
                                    <?php $ads = App\Ads::all(); ?>
                                    <?php if($ads->count()>0): ?>
                                    <li class="<?php echo e(Nav::isRoute('ad.setting')); ?>"><a href="<?php echo e(url('admin/ads/setting')); ?>"
                                            title="Ad Settings"><?php echo e(__('adminstaticword.AdvertiseSettings')); ?></a></li>
                                    <?php endif; ?>

                                </ul>
                            </li>
                            <!-- player setting start end -->
                            <?php if(isset($gsetting) && $gsetting->activity_enable == '1'): ?>

                            <li class="<?php echo e(Nav::isRoute('activity.index')); ?>"><a href="<?php echo e(route('activity.index')); ?>">
                                    <i
                                        class="feather icon-help-circle text-secondary"></i><span><?php echo e(__('adminstaticword.ActivityLog')); ?></span>
                                </a></li>

                            <?php endif; ?>
                             <li class="header"><?php echo e(__('Support')); ?></li>
                             <!-- help & support start  -->
                            <li
                                class="<?php echo e(Nav::isRoute('import.view')); ?> <?php echo e(Nav::isRoute('database.backup')); ?> <?php echo e(Nav::isRoute('update.process')); ?> <?php echo e(Nav::isRoute('quick.update')); ?>">
                                <a href="javaScript:void();">
                                    <i
                                        class="feather icon-help-circle text-secondary"></i><span><?php echo e(__('adminstaticword.Help&Support')); ?></span><i
                                        class="feather icon-chevron-right"></i>
                                </a>
                                <ul class="vertical-submenu">

                                    <li class="<?php echo e(Nav::isRoute('import.view')); ?>">
                                        <a href="<?php echo e(route('import.view')); ?>"><?php echo e(__('adminstaticword.ImportDemo')); ?></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isRoute('database.backup')); ?>">
                                        <a
                                            href="<?php echo e(route('database.backup')); ?>"><?php echo e(__('adminstaticword.DatabaseBackup')); ?></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isRoute('update.process')); ?>">
                                        <a
                                            href="<?php echo e(route('update.process')); ?>"><?php echo e(__('adminstaticword.UpdateProcess')); ?></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isRoute('quick.update')); ?>">
                                        <a href="<?php echo e(route('quick.update')); ?>"><?php echo e(__('adminstaticword.QuickUpdate')); ?></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isRoute('remove.public')); ?>">
                                        <a
                                            href="<?php echo e(route('remove.public')); ?>"><?php echo e(__('adminstaticword.RemovePublic')); ?></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isRoute('clear-cache')); ?>">
                                        <a href="<?php echo e(url('clear-cache')); ?>"><?php echo e(__('adminstaticword.ClearCache')); ?></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isResource('admin-addon')); ?>">
                                        <a href="<?php echo e(url('admin/addon')); ?>"><?php echo e(__('adminstaticword.Addon')); ?>

                                            <?php echo e(__('adminstaticword.Manager')); ?></a>
                                    </li>

                                </ul>
                            </li>
                            <!-- help & support end -->



                            </li>
                        </ul>
                        </li>


                        </ul>
                        <?php endif; ?>
                    </div>

                </div>

            </div>
        </div>
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>