
<?php $__env->startSection('title','All Students'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php $__env->startComponent('components.breadcumb',['secondaryactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
<?php echo e(__('Students')); ?>

<?php $__env->endSlot(); ?>

<?php $__env->slot('menu1'); ?>
<?php echo e(__('Students')); ?>

<?php $__env->endSlot(); ?>

<?php $__env->slot('button'); ?>

<div class="col-md-4 col-lg-4">
    <div class="widgetbar">
        <button type="button" class="float-right btn btn-danger-rgba mr-2 " data-toggle="modal"
            data-target="#bulk_delete"><i class="feather icon-trash mr-2"></i> <?php echo e(__('Delete Selected')); ?></button>
        <a href="<?php echo e(route('alluser.add')); ?>" class="float-right btn btn-primary-rgba mr-2"><i
                class="feather icon-plus mr-2"></i><?php echo e(__('Add Student')); ?></a>

    </div>
</div>

<?php $__env->endSlot(); ?>
<?php if (isset($__componentOriginaleb2335b938fad9aa8fe68ad102cc16a90a88d3d2)): ?>
<?php $component = $__componentOriginaleb2335b938fad9aa8fe68ad102cc16a90a88d3d2; ?>
<?php unset($__componentOriginaleb2335b938fad9aa8fe68ad102cc16a90a88d3d2); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<div class="contentbar">
    <div class="row">

        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="box-title"><?php echo e(__('All Students')); ?></h5>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        <input id="checkboxAll" type="checkbox" class="filled-in" name="checked[]"
                                            value="all" />
                                        <label for="checkboxAll" class="material-checkbox"></label> #
                                    </th>
                                    <th><?php echo e(__('adminstaticword.Image')); ?></th>
                                    <th><?php echo e(__('adminstaticword.Users')); ?></th>
                                    <th><?php echo e(__('adminstaticword.Role')); ?></th>
                                    <th><?php echo e(__('adminstaticword.Country')); ?></th>
                                    <th><?php echo e(__('adminstaticword.Status')); ?></th>
                                    <th><?php echo e(__('adminstaticword.Action')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0;?>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($user->id != Auth::User()->id): ?>
                                <?php $i++;?>
                                <tr>
                                    <td>
                                        <input type='checkbox' form='bulk_delete_form'
                                            class='check filled-in material-checkbox-input' name='checked[]'
                                            value="<?php echo e($user->id); ?>" id='checkbox<?php echo e($user->id); ?>'>
                                        <label for='checkbox<?php echo e($user->id); ?>' class='material-checkbox'></label>
                                        <?php echo $i; ?>
                                        <div id="bulk_delete" class="delete-modal modal fade" role="dialog">
                                            <div class="modal-dialog modal-sm">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                        <div class="delete-icon"></div>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <h4 class="modal-heading"><?php echo e(__('Are You Sure')); ?> ?</h4>
                                                        <p><?php echo e(__('Do you really want to delete selected item names here? This process
                                                                    cannot be undone')); ?>.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form id="bulk_delete_form" method="post"
                                                            action="<?php echo e(route('user.bulk_delete')); ?>">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('POST'); ?>
                                                            <button type="reset" class="btn btn-gray translate-y-3"
                                                                data-dismiss="modal"><?php echo e(__('No')); ?></button>
                                                            <button type="submit"
                                                                class="btn btn-danger"><?php echo e(__('Yes')); ?></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <?php if($image = @file_get_contents('../public/images/user_img/'.$user->user_img)): ?>
                                    <td>

                                            <img <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                src="<?php echo e(url('images/user_img/'.$user->user_img)); ?>" alt="profilephoto"
                                                class="img-responsive img-circle" data-toggle="modal"
                                                data-target="#exampleStandardModal<?php echo e($user->id); ?>">
                                    </td>
                                    <?php else: ?> <td> <img <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                src="<?php echo e(Avatar::create($user->fname)->toBase64()); ?>" alt="profilephoto"
                                                class="img-responsive img-circle" class="dropdown-item" data-toggle="modal"
                                                data-target="#exampleStandardModal<?php echo e($user->id); ?>">
                                       
                                    </td>
                                    <?php endif; ?>
                                    <td>
                                        <p><b><?php echo e(__('Name')); ?></b>: <?php echo e($user['fname']); ?> <?php echo e($user['lname']); ?></p>
                                        <p><b><?php echo e(__('Email')); ?></b>: <?php echo e($user['email']); ?></p>

                                        <p><b><?php echo e(__('Mobile')); ?></b>: <?php if(isset($user->mobile)): ?>
                                            <?php echo e($user->mobile); ?>

                                            <?php endif; ?></p>
                                    </td>
                                    <td><?php echo e($user->role); ?></td>
                                    <td>
                                        <?php if(isset($user->country)): ?>
                                        <?php echo e($user->country->nicename); ?>

                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <form action="<?php echo e(route('user.quick',$user->id)); ?>" method="POST">
                                            <?php echo e(csrf_field()); ?>

                                            <label class="switch">
                                                <input class="user" type="checkbox" data-id="<?php echo e($user->id); ?>"
                                                    name="status" <?php echo e($user->status == '1' ? 'checked' : ''); ?>>
                                                <span class="knob"></span>
                                            </label>


                                        </form>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-round btn-outline-primary" type="button"
                                                id="CustomdropdownMenuButton1" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><i
                                                    class="feather icon-more-vertical-"></i></button>
                                            <div class="dropdown-menu" aria-labelledby="CustomdropdownMenuButton1">
                                                <a class="dropdown-item" href="<?php echo e(route('alluser.edit',$user->id)); ?>"><i
                                                        class="feather icon-edit mr-2"></i><?php echo e(__('Edit')); ?></a>
                                                <a class="dropdown-item btn btn-link" data-toggle="modal"
                                                    data-target="#delete<?php echo e($user->id); ?>">
                                                    <i class="feather icon-delete mr-2"></i><?php echo e(__("Delete")); ?></a>
                                                </a>
                                                <button type="button" class="dropdown-item" data-toggle="modal"
                                                    data-target="#exampleStandardModal<?php echo e($user->id); ?>">
                                                    <i class="feather icon-eye mr-2"></i>View
                                                </button>
                                            </div>
                                        </div>
                                        <!-- delete Modal start -->
                                        <div class="modal fade bd-example-modal-sm" id="delete<?php echo e($user->id); ?>"
                                            tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleSmallModalLabel">
                                                            <?php echo e(__('Delete')); ?></h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4><?php echo e(__('Are You Sure ?')); ?></h4>
                                                        <p><?php echo e(__('Do you really want to delete')); ?>

                                                            <b><?php echo e($user->fname); ?></b>?
                                                            <?php echo e(__('This process cannot be undone.')); ?></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form method="post"
                                                            action="<?php echo e(route('user.delete',$user->id)); ?>"
                                                            class="pull-right">
                                                            <?php echo e(csrf_field()); ?>

                                                            <?php echo e(method_field("DELETE")); ?>

                                                            <button type="reset" class="btn btn-secondary"
                                                                data-dismiss="modal"><?php echo e(__('No')); ?></button>
                                                            <button type="submit"
                                                                class="btn btn-primary"><?php echo e(__('Yes')); ?></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- delete Model ended -->
                                        <div class="modal fade" id="exampleStandardModal<?php echo e($user->id); ?>" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleStandardModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleStandardModalLabel">
                                                            <?php echo e($user->fname); ?></h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="col-lg-12">
                                                            <div class="card m-b-30">
                                                                <div class="card-body py-5">
                                                                    <div class="row">
                                                                        <div class="user-modal">
                                                                            <?php if($image =
                                                                            @file_get_contents('../public/images/user_img/'.$user->user_img)): ?>
                                                                            <img <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                                src="<?php echo e(url('images/user_img/'.$user->user_img)); ?>"
                                                                                alt="profilephoto"
                                                                                class="img-responsive img-circle">
                                                                            <?php else: ?>
                                                                            <img <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                                src="<?php echo e(Avatar::create($user->fname)->toBase64()); ?>"
                                                                                alt="profilephoto"
                                                                                class="img-responsive img-circle">
                                                                            <?php endif; ?>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <h4 class="text-center">
                                                                                <?php echo e($user->fname); ?><?php echo e($user->lname); ?>

                                                                            </h4>
                                                                            <div class="button-list mt-4 mb-3">
                                                                                <button type="button"
                                                                                    class="btn btn-primary-rgba"><i
                                                                                        class="feather icon-email mr-2"></i><?php echo e($user->email); ?></button>
                                                                                <button type="button"
                                                                                    class="btn btn-success-rgba"><i
                                                                                        class="feather icon-phone mr-2"></i><?php echo e($user->mobile); ?></button>
                                                                            </div>
                                                                            <div class="table-responsive">
                                                                                <table
                                                                                    class="table table-borderless mb-0 user-table">
                                                                                    <tbody>
                                                                                        <?php if(isset($user->dob)): ?>

                                                                                        <tr>
                                                                                            <th scope="row" class="p-1">
                                                                                                Date Of Birth :</th>
                                                                                            <td class="p-1">
                                                                                                <?php echo e($user->dob); ?></td>
                                                                                        </tr>
                                                                                        <?php endif; ?>
                                                                                        <?php if(isset($user->address)): ?>

                                                                                        <tr>
                                                                                            <th scope="row" class="p-1">
                                                                                                Address :</th>
                                                                                            <td class="p-1">
                                                                                                <?php echo e($user->address); ?></td>
                                                                                        </tr>
                                                                                        <?php endif; ?>
                                                                                        <?php if(isset($user->gender)): ?>

                                                                                        <tr>
                                                                                            <th scope="row" class="p-1">
                                                                                                Gender :</th>
                                                                                            <td class="p-1">
                                                                                                <?php echo e($user->gender); ?></td>
                                                                                        </tr>
                                                                                        <?php endif; ?>

                                                                                        <tr>
                                                                                            <th scope="row" class="p-1">
                                                                                                Role :</th>
                                                                                            <td class="p-1">
                                                                                                <?php echo e($user->role); ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th scope="row" class="p-1">
                                                                                                Country-State-City</th>
                                                                                            <td class="p-1">
                                                                                                <?php echo e(optional($user->country)->name); ?>-<?php echo e(optional($user->state)->name); ?>-<?php echo e(optional($user->city)->name); ?>

                                                                                            </td>
                                                                                        </tr>
                                                                                        <?php if(isset($user->youtube_url)): ?>

                                                                                        <tr>
                                                                                            <th scope="row" class="p-1">
                                                                                                Youtube Url</th>
                                                                                            <td class="p-1">
                                                                                                <a
                                                                                                    href="<?php echo e($user->youtube_url); ?>"><?php echo e(str_limit($user->youtube_url, '30')); ?></a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <?php endif; ?>

                                                                                        <?php if(isset($user->fb_url)): ?>

                                                                                        <tr>
                                                                                            <th scope="row" class="p-1">
                                                                                                Facebook Url</th>
                                                                                            <td class="p-1">
                                                                                                <a
                                                                                                    href="<?php echo e($user->fb_url); ?>"><?php echo e(str_limit($user->fb_url, '30')); ?></a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <?php endif; ?>

                                                                                        <?php if(isset($user->twitter_url)): ?>

                                                                                        <tr>
                                                                                            <th scope="row" class="p-1">
                                                                                                Twitter Url</th>
                                                                                            <td class="p-1">
                                                                                                <a
                                                                                                    href="<?php echo e($user->twitter_url); ?>"><?php echo e(str_limit($user->twitter_url, '30')); ?></a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <?php endif; ?>

                                                                                        <?php if(isset($user->linkedin_url)): ?>

                                                                                        <tr>
                                                                                            <th scope="row" class="p-1">
                                                                                                Linkedin Url</th>
                                                                                            <td class="p-1">
                                                                                                <a
                                                                                                    href="<?php echo e($user->linkedin_url); ?>"><?php echo e(str_limit($user->linkedin_url, '30')); ?></a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <?php endif; ?>

                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- script for datatable start -->
<script>
    $(function () {
        $('#example1').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': true
        })
    })
</script>
<script>
    $(document).on("change", ".user", function () {
        $.ajax({
            type: "GET",
            dataType: "json",
            url: 'user/status',
            data: {
                'status': $(this).is(':checked') ? 1 : 0,
                'id': $(this).data('id')
            },
            success: function(data){
                var warning = new PNotify( {
                title: 'success', text:'Status Update Successfully', type: 'primary', desktop: {
                desktop: true, icon: 'feather icon-thumbs-down'
                }
            });
                warning.get().click(function() {
                    warning.remove();
                });
            }
        });
    })
</script>
<script>
    $("#checkboxAll").on('click', function () {
        $('input.check').not(this).prop('checked', this.checked);
    });
</script>
<!-- script for datatable end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/alluser/index.blade.php ENDPATH**/ ?>