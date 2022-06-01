
<?php $__env->startSection('title','Create a new bundle'); ?>
<?php $__env->startSection('breadcum'); ?>
<?php $__env->startComponent('components.breadcumb',['secondaryactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
<?php echo e(__('Bundle')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('menu1'); ?>
<?php echo e(__('Bundle')); ?>

<?php $__env->endSlot(); ?>

<?php $__env->slot('button'); ?>

<div class="col-md-4 col-lg-4">
  <div class="widgetbar">
    <a href="<?php echo e(url('bundle')); ?>" class="float-right btn btn-dark-rgba mr-2"><i
        class="feather icon-arrow-left mr-2"></i><?php echo e(__('Back')); ?></a> </div>
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
          <h5 class="card-box"><?php echo e(__('Add')); ?> <?php echo e(__('Bundle')); ?></h5>
        </div>
        <div class="card-body">
          <form action="<?php echo e(url('bundle/')); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>


            <input type="hidden" class="form-control" name="user_id" id="exampleInputTitle"
              value="<?php echo e(Auth::User()->id); ?>" required>
            <div class="row">
              <div class=" col-md-12">

                <div class="form-group">
                  <label for="exampleInputTit1e"><?php echo e(__('adminstaticword.Title')); ?>: <sup
                      class="text-danger">*</sup></label>
                  <input type="title" class="form-control" name="title" id="exampleInputTitle"
                    placeholder="<?php echo e(__('adminstaticword.Enter')); ?> <?php echo e(__('adminstaticword.Title')); ?>" value="" required>

                </div>

                <div class="form-group">
                  <label><?php echo e(__('adminstaticword.SelectCourse')); ?>: <span class="text-danger">*</span></label>
                  <select class="form-control select2" name="course_id[]" multiple="multiple" size="5" row="5"
                    placeholder="<?php echo e(__('adminstaticword.SelectCourse')); ?>">


                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($cat->status == 1): ?>
                    <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->title); ?>

                    </option>
                    <?php endif; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputTit1e"><?php echo e(__('adminstaticword.ShortDetail')); ?>: <sup
                      class="text-danger">*</sup></label>
                  <textarea id="short_detail" name="short_detail" rows="4" class="form-control"
                    placeholder="<?php echo e(__('adminstaticword.Enter')); ?> <?php echo e(__('adminstaticword.ShortDetail')); ?>"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputTit1e"><?php echo e(__('adminstaticword.Detail')); ?>: <sup
                      class="text-danger">*</sup></label>
                  <textarea id="detail" name="detail" rows="5" class="form-control"
                    placeholder="<?php echo e(__('adminstaticword.Enter')); ?> <?php echo e(__('adminstaticword.Detail')); ?>"></textarea>
                </div>
                <div class="form-group">
                  <label><?php echo e(__('adminstaticword.PreviewImage')); ?>:</label> - <p class="inline info"><?php echo e(__('size')); ?>: 250x150</p>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01"><?php echo e(__('Upload')); ?></span>
                    </div>
                    <div class="custom-file">
                      <input type="file" name="preview_image" class="custom-file-input" id="image"
                        aria-describedby="inputGroupFileAddon01">
                      <label class="custom-file-label" for="inputGroupFile01"><?php echo e(__('Choose file')); ?></label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="exampleInputDetails"><?php echo e(__('adminstaticword.Paid')); ?>:</label>
                        <input  id="cb111"  type="checkbox" class="custom_toggle" name="type"  />


                        

                        <br>
                        <div  class="form-group display-none " id="pricebox">
                          <label for="exampleInputSlug"><?php echo e(__('adminstaticword.Price')); ?>: <sup
                              class="text-danger">*</sup></label>
                          <input type="number" class="form-control" name="price" id="priceMain"
                            placeholder="<?php echo e(__('adminstaticword.Enter')); ?> <?php echo e(__('adminstaticword.Price')); ?>" value="">

                          <label for="exampleInputSlug"><?php echo e(__('adminstaticword.DiscountPrice')); ?>: </label>
                          <input type="number" class="form-control" name="discount_price" id="offerPrice"
                            placeholder="<?php echo e(__('adminstaticword.Enter')); ?> <?php echo e(__('adminstaticword.DiscountPrice')); ?>"
                            value="">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <?php if(Auth::User()->role == "admin"): ?>
                        <label for="exampleInputDetails"><?php echo e(__('adminstaticword.Featured')); ?>:</label>

                        <input id="status_toggle" type="checkbox" name="featured"  class="custom_toggle" id="cb1"  />


                       
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <?php if(Auth::User()->role == "admin"): ?>
                        <label for="exampleInputDetails"><?php echo e(__('adminstaticword.Status')); ?>:</label>
                        <input id="status_toggle" type="checkbox"  name="status" class="custom_toggle" id="cb3"  />


                      
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="col-md-3">
                            

                            
                      <div class="form-group">
                          <label for=""><?php echo e(__('adminstaticword.Duration')); ?>: </label>
                          <input id="duration1" type="checkbox" class="custom_toggle" name="duration_type"
                              checked/>

                          <label class="tgl-btn" data-tg-off="days" data-tg-on="month"
                              for="duration_type"></label>


                          <br>
                          <div class="form-group" id="duration">
                          <label for="exampleInputSlug"><?php echo e(__('adminstaticword.BundleExpireDuration')); ?> </label>
                          <input min="1" class="form-control" name="duration" type="number" 
                              
                              placeholder="<?php echo e(__('adminstaticword.Enter')); ?> Duration">
                      </div>
                    </div>
                              </div>
                 
                  </div>

                </div>
                <div class="form-group">
                  <label for="cbToggleSubscription"><?php echo e(__('adminstaticword.Subscription')); ?>:</label>
                  <input id="subscription1" type="checkbox" name="is_subscription_enabled" class="custom_toggle"
                     />
                     <br>
                  
                  <small class="text-info"><i class="fa fa-question-circle"></i> <?php echo e(__('Subscription
                      bundle works with stripe payment only')); ?>.</small><br>
                  <small class="text-info"> <?php echo e(__('Enable it only when you have setup stripe')); ?>.</small>

                
                  <br>
                  <div id="subscription" class="form-group display-none ">
                   

                    <div class="form-group">

                      <label><?php echo e(__('adminstaticword.BillingPeriod')); ?></label>
                      <select class="form-control select2" name="billing_interval">
                        <option value="day"><?php echo e(__('Daily')); ?></option>
                        <option value="week"><?php echo e(__('Weekly')); ?></option>
                        <option value="month"><?php echo e(__('Monthly')); ?></option>
                        <option value="year"><?php echo e(__('Yearly')); ?></option>
                      </select>
                    </div>
                  </div>
              </div>
              
                <div class="form-group">
                  <button type="reset" class="btn btn-danger-rgba"><i class="fa fa-ban"></i> <?php echo e(__('Reset')); ?></button>
                  <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                    <?php echo e(__('Create')); ?></button>
                </div>

                <div class="clear-both"></div>
              </div>




            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>


<script>
  (function ($) {
    "use strict";

    $(function () {
      $('.js-example-basic-single').select2();
    });

    $(function () {
      $('#cb1').change(function () {
        $('#j').val(+$(this).prop('checked'))
      })
    })

    $(function () {
      $('#cb3').change(function () {
        $('#test').val(+$(this).prop('checked'))
      })
    })

 
    $('#preview').on('change', function () {

      if ($('#preview').is(':checked')) {
        $('#document1').show('fast');
        $('#document2').hide('fast');
      } else {
        $('#document2').show('fast');
        $('#document1').hide('fast');
      }

    });

    $("#cb3").on('change', function () {
      if ($(this).is(':checked')) {
        $(this).attr('value', '1');
      } else {
        $(this).attr('value', '0');
      }
    });

    $(function () {

      $('#ms').change(function () {
        if ($('#ms').val() == 'yes') {
          $('#doabox').show();
        } else {
          $('#doabox').hide();
        }
      });

    });

    $(function () {

      $('#ms').change(function () {
        if ($('#ms').val() == 'yes') {
          $('#doaboxx').show();
        } else {
          $('#doaboxx').hide();
        }
      });

    });

    $(function () {

      $('#msd').change(function () {
        if ($('#msd').val() == 'yes') {
          $('#doa').show();
        } else {
          $('#doa').hide();
        }
      });

    });

    $(function () {
      var urlLike = '<?php echo e(url('
      admin / dropdown ')); ?>';
      $('#category_id').change(function () {
        var up = $('#upload_id').empty();
        var cat_id = $(this).val();
        if (cat_id) {
          $.ajax({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "GET",
            url: urlLike,
            data: {
              catId: cat_id
            },
            success: function (data) {
              console.log(data);
              up.append('<option value="0">Please Choose</option>');
              $.each(data, function (id, title) {
                up.append($('<option>', {
                  value: id,
                  text: title
                }));
              });
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
              console.log(XMLHttpRequest);
            }
          });
        }
      });
    });

    $(function () {
      var urlLike = '<?php echo e(url('
      admin / gcat ')); ?>';
      $('#upload_id').change(function () {
        var up = $('#grand').empty();
        var cat_id = $(this).val();
        if (cat_id) {
          $.ajax({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "GET",
            url: urlLike,
            data: {
              catId: cat_id
            },
            success: function (data) {
              console.log(data);
              up.append('<option value="0">Please Choose</option>');
              $.each(data, function (id, title) {
                up.append($('<option>', {
                  value: id,
                  text: title
                }));
              });
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
              console.log(XMLHttpRequest);
            }
          });
        }
      });
    });
  })(jQuery);
</script>

<script>
  (function($) {
    "use strict";
    $(function(){
        $('#cb111').change(function(){
          if($('#cb111').is(':checked')){
            $('#pricebox').show('fast');
          }else{
            $('#pricebox').hide('fast');
          }
        });
       
          
    });
  })(jQuery);
  </script>
  <script>
    (function($) {
      "use strict";
      $(function(){
          $('#duration1').change(function(){
            if($('#duration1').is(':checked')){
              $('#duration').show('fast');
            }else{
              $('#duration').hide('fast');
            }
          });
         
            
      });
    })(jQuery);
    </script>
  <script>
    (function($) {
      "use strict";
      $(function(){
          $('#subscription1').change(function(){
            if($('#subscription1').is(':checked')){
              $('#subscription').show('fast');
            }else{
              $('#subscription').hide('fast');
            }
          });
         
            
      });
    })(jQuery);
    </script>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/bundle/create.blade.php ENDPATH**/ ?>