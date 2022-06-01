
<?php $__env->startSection('title','All Bundle'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php $__env->startComponent('components.breadcumb',['secondaryactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
<?php echo e(__('Bundles')); ?>

<?php $__env->endSlot(); ?>

<?php $__env->slot('menu1'); ?>
<?php echo e(__('Bundles')); ?>

<?php $__env->endSlot(); ?>

<?php $__env->slot('button'); ?>

<div class="col-md-4 col-lg-4">
  <div class="widgetbar">
    <button type="button" class="float-right btn btn-danger-rgba mr-2 " data-toggle="modal"
      data-target="#bulk_delete"><i class="feather icon-trash mr-2"></i> <?php echo e(__('Delete Selected')); ?></button>
    <a href="<?php echo e(url('bundle/create')); ?>" class="float-right btn btn-primary-rgba mr-2"><i
        class="feather icon-plus mr-2"></i><?php echo e(__('Add Bundle')); ?></a>

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
          <h5 class="card-box"><?php echo e(__('All Bundles')); ?></h5>
        </div>
        <div class="card-body">

          <div class="table-responsive">
            <table id="datatable-buttons" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th> <input id="checkboxAll" type="checkbox" class="filled-in" name="checked[]" value="all" />
                    <label for="checkboxAll" class="material-checkbox"></label>#</th>
                  <th><?php echo e(__('adminstaticword.Image')); ?></th>
                  <th><?php echo e(__('adminstaticword.Title')); ?></th>
                  <th><?php echo e(__('adminstaticword.Instructor')); ?></th>
                  <th><?php echo e(__('adminstaticword.Slug')); ?></th>
                  <th><?php echo e(__('adminstaticword.Featured')); ?></th>
                  <th><?php echo e(__('adminstaticword.Subscription')); ?></th>
                  <th><?php echo e(__('adminstaticword.Status')); ?></th>
                  <th><?php echo e(__('adminstaticword.Action')); ?></th>
                </tr>
              </thead>

              <tbody>
                <?php $i=0;?>
                <?php if(Auth::User()->role == "admin"): ?>
                <?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $i++;?>
                <tr>
                  <td> <input type='checkbox' form='bulk_delete_form' class='check filled-in material-checkbox-input'
                      name='checked[]' value='<?php echo e($cat->id); ?>' id='checkbox<?php echo e($cat->id); ?>'>
                    <label for='checkbox<?php echo e($cat->id); ?>' class='material-checkbox'></label>
                    <?php echo $i; ?>
                    <div id="bulk_delete" class="delete-modal modal fade" role="dialog">
                      <div class="modal-dialog modal-sm">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="delete-icon"></div>
                          </div>
                          <div class="modal-body text-center">
                            <h4 class="modal-heading"><?php echo e(__('Are You Sure')); ?> ?</h4>
                            <p><?php echo e(__('Do you really want to delete selected item names here? This process
                                cannot be undone')); ?>.</p>
                          </div>
                          <div class="modal-footer">
                            <form id="bulk_delete_form" method="post" action="<?php echo e(route('bundlecourse.bulk_delete')); ?>">
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('POST'); ?>
                              <button type="reset" class="btn btn-gray translate-y-3"
                                data-dismiss="modal"><?php echo e(__('No')); ?></button>
                              <button type="submit" class="btn btn-danger"><?php echo e(__('Yes')); ?></button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <?php if($cat['preview_image'] !== NULL && $cat['preview_image'] !== ''): ?>
                    <img src="images/bundle/<?php echo $cat['preview_image'];  ?>" class="img-responsive img-circle"
                      width="150px" height="100px">
                    <?php else: ?>
                    <img src="<?php echo e(Avatar::create($cat->title)->toBase64()); ?>" class="img-responsive img-circle">
                    <?php endif; ?>
                  </td>
                  <td><?php echo e($cat->title); ?></td>
                  <td><?php echo e($cat->user['fname']); ?></td>
                  <td><?php echo e($cat->slug); ?></td>
                  <td>
                    <label class="switch">
                      <input class="featuredstatus" type="checkbox" data-id="<?php echo e($cat->id); ?>" name="status"
                        <?php echo e($cat->featured == '1' ? 'checked' : ''); ?>>
                      <span class="knob"></span>
                    </label>

                  </td>
                  <td>
                    <label class="switch">
                      <input class="subscriptionstatus" type="checkbox" data-id="<?php echo e($cat->id); ?>" name="status"
                        <?php echo e($cat->is_subscription_enabled== '1' ? 'checked' : ''); ?>>
                      <span class="knob"></span>
                    </label>
                  </td>

                  <td>
                    <label class="switch">
                      <input class="bundlestatus" type="checkbox" data-id="<?php echo e($cat->id); ?>" name="status"
                        <?php echo e($cat->status == '1' ? 'checked' : ''); ?>>
                      <span class="knob"></span>
                    </label>

                  </td>
                  <td>
                    <div class="dropdown">
                      <button class="btn btn-round btn-outline-primary" type="button" id="CustomdropdownMenuButton1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                          class="feather icon-more-vertical-"></i></button>
                      <div class="dropdown-menu" aria-labelledby="CustomdropdownMenuButton1">

                        <a class="dropdown-item" href="<?php echo e(route('bundle.show',$cat->id)); ?>"><i
                            class="feather icon-edit mr-2"></i><?php echo e(__('Edit')); ?></a>
                        <a class="dropdown-item btn btn-link" data-toggle="modal" data-target="#delete<?php echo e($cat->id); ?>">
                          <i class="feather icon-delete mr-2"></i><?php echo e(__("Delete")); ?></a>
                        </a>
                        <button type="button" class="dropdown-item" data-toggle="modal"
                          data-target="#exampleStandardModal<?php echo e($cat->id); ?>">
                          <i class="feather icon-eye mr-2"></i>View
                        </button>
                      </div>
                    </div>
                    <div class="modal fade bd-example-modal-sm" id="delete<?php echo e($cat->id); ?>" tabindex="-1" role="dialog"
                      aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleSmallModalLabel"><?php echo e(__('Delete')); ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p class="text-muted"><?php echo e(__('Do you really want to delete this Bundle ? This process cannot be
                              undone')); ?>.</p>
                          </div>
                          <div class="modal-footer">
                            <form method="post" action="<?php echo e(url('bundle/'.$cat->id)); ?>" class="pull-right">
                              <?php echo e(csrf_field()); ?>

                              <?php echo e(method_field("DELETE")); ?>


                              <button type="reset" class="btn btn-gray translate-y-3"
                                data-dismiss="modal"><?php echo e(__('adminstaticword.No')); ?></button>
                              <button type="submit" class="btn btn-danger"><?php echo e(__('adminstaticword.Yes')); ?></button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="exampleStandardModal<?php echo e($cat->id); ?>" tabindex="-1" role="dialog"
                      aria-labelledby="exampleStandardModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleStandardModalLabel">
                              <?php echo e($cat->title); ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                           </div>
                          <div class="modal-body">
                            <h5>Courses Include</h5>
                            <?php $__currentLoopData = $cat['course_id']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crew): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            $name = App\Course::where('id',$crew)->value('title');
                            ?>
                            <span class="badge badge-success"><?php echo e(ucfirst($name)); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </div>
                        </div>
                      </div>
                    </div>

                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>

                <?php
                $cors = App\Course::where('user_id', Auth::User()->id)->get();
                ?>
                <?php $__currentLoopData = $cors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $i++;?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td>
                    <?php if($cor['preview_image'] !== NULL && $cor['preview_image'] !== ''): ?>
                    <img src="images/course/<?php echo $cor['preview_image'];  ?>" class="img-responsive">
                    <?php else: ?>
                    <img src="<?php echo e(Avatar::create($cor->title)->toBase64()); ?>" class="img-responsive">
                    <?php endif; ?>
                  </td>
                  <td><?php echo e($cor->title); ?></td>
                  <td><?php echo e($cor->user['fname']); ?></td>
                  <td><?php echo e($cor->slug); ?></td>
                  <td>

                    <?php if($cor->featured ==1): ?>
                    <?php echo e(__('adminstaticword.Yes')); ?>

                    <?php else: ?>
                    <?php echo e(__('adminstaticword.No')); ?>

                    <?php endif; ?>

                  </td>

                  <td>

                    <?php if($cor->status ==1): ?>
                    <?php echo e(__('adminstaticword.Active')); ?>

                    <?php else: ?>
                    <?php echo e(__('adminstaticword.Deactive')); ?>

                    <?php endif; ?>

                  </td>
                  <td>
                    <a class="btn btn-primary btn-sm" href="<?php echo e(route('bundle.show',$cor->id)); ?>">
                      <i class="glyphicon glyphicon-pencil"></i></a>
                  </td>

                  <td>
                    <form method="post" action="<?php echo e(url('bundle/'.$cor->id)); ?>

                                      " data-parsley-validate class="form-horizontal form-label-left">
                      <?php echo e(csrf_field()); ?>

                      <?php echo e(method_field('DELETE')); ?>

                      <button onclick="return confirm('Are you sure you want to delete?')" type="submit"
                        class="btn btn-danger"><i class="fa fa-fw fa-trash-o"></i></button>
                    </form>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              </tbody>
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
<script>
  $(document).on("change", ".bundlestatus", function () {


    $.ajax({
      type: "GET",
      dataType: "json",
      url: 'bundlecourse/status',
      data: {
        'status': $(this).is(':checked') ? 1 : 0,
        'id': $(this).data('id')
      },
      success: function (data) {
        console.log(id)
      }
    });

  });


  $(document).on("change", ".subscriptionstatus", function () {

    $.ajax({
      type: "GET",
      dataType: "json",
      url: 'bundlecourse/subscription/status',
      data: {
        'is_subscription_enabled': $(this).is(':checked') ? 1 : 0,
        'id': $(this).data('id')
      },
      success: function (data) {
        console.log(id)
      }
    });

  });



  $(document).on("change", ".featuredstatus", function () {

    $.ajax({
      type: "GET",
      dataType: "json",
      url: 'bundlecourse/featured/status',
      data: {
        'featured': $(this).is(':checked') ? 1 : 0,
        'id': $(this).data('id')
      },
      success: function(data){
            var warning = new PNotify( {
                title: 'success', text:'Status Update Successfully', type: 'success', desktop: {
                desktop: true, icon: 'feather icon-thumbs-down'
                }
              });
              warning.get().click(function() {
                warning.remove();
              });
          }
    });

  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/bundle/index.blade.php ENDPATH**/ ?>