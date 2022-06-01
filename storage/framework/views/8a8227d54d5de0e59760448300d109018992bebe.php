
<?php $__env->startSection('title','All Quiz'); ?>
<?php $__env->startSection('maincontent'); ?>
<?php $__env->startComponent('components.breadcumb',['secondaryactive' => 'active']); ?>
<?php $__env->slot('heading'); ?>
   <?php echo e(__('Quiz')); ?>

<?php $__env->endSlot(); ?>

<?php $__env->slot('menu1'); ?>
   <?php echo e(__('Quiz')); ?>

<?php $__env->endSlot(); ?>
<?php $__env->slot('button'); ?>

<div class="col-md-4 col-lg-4">
    <div class="widgetbar">
      <?php if($topic->type == NULL): ?>
        <a href="<?php echo e(route('import.quiz')); ?>"  class="float-right btn btn-primary-rgba mr-2"><i class="feather icon-plus mr-2"></i><?php echo e(__('Import Quiz')); ?></a>
        <a data-toggle="modal" data-target="#myModalquiz" href="#"  class="float-right btn btn-primary-rgba mr-2"><i class="feather icon-plus mr-2"></i><?php echo e(__('Add Question')); ?></a>
      <?php endif; ?>

      <?php if($topic->type == '1'): ?>
        <a data-toggle="modal" data-target="#myModalquizsubject"  class="float-right btn btn-primary-rgba mr-2"><i class="feather icon-plus mr-2"></i><?php echo e(__('Add Question')); ?></a>
      <?php endif; ?>


      <a href="<?php echo e(url('course/create/'. $topic->courses->id)); ?>" class="float-right btn btn-primary-rgba mr-2"><i class="feather icon-arrow-left mr-2"></i><?php echo e(__('Back')); ?></a>
      
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
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
      <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
    <?php endif; ?>
      <div class="col-lg-12">
          <div class="card m-b-30">
              <div class="card-header">
                  <h5 class="box-title"><?php echo e(__('All Quiz')); ?></h5>
              </div>
              <div class="card-body">
              
                  <div class="table-responsive">
                      <table id="datatable-buttons" class="table table-striped table-bordered">
                          <thead>
                          <tr>
                        
                              <th>#</th>
                              <th><?php echo e(__('adminstaticword.Course')); ?></th>
                              <th><?php echo e(__('adminstaticword.Topic')); ?></th>
                              <th><?php echo e(__('adminstaticword.Question')); ?></th>
                              <?php if($topic->type == NULL): ?>
                              <th><?php echo e(__('adminstaticword.A')); ?></th>
                              <th><?php echo e(__('adminstaticword.B')); ?></th>
                              <th><?php echo e(__('adminstaticword.C')); ?></th>
                              <th><?php echo e(__('adminstaticword.D')); ?></th>
                              <th><?php echo e(__('adminstaticword.Answer')); ?></th>
                              <?php endif; ?>
                              
                              <th><?php echo e(__('adminstaticword.Action')); ?></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i=0;?>
                            <?php $__currentLoopData = $quizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $i++;?>
                            <tr>
                              <td><?php echo $i;?></td>
                              <td><?php echo e($quiz->courses->title); ?></td>
                              <td><?php echo e($quiz->topic->title); ?></td>
                              <td><?php echo e($quiz->question); ?></td>
                              <?php if($topic->type == NULL): ?>
                              <td><?php echo e($quiz->a); ?></td>
                              <td><?php echo e($quiz->b); ?></td>
                              <td><?php echo e($quiz->c); ?></td>
                              <td><?php echo e($quiz->d); ?></td>
                              <td><?php echo e($quiz->answer); ?></td>
                              <?php endif; ?>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-round btn-outline-primary" type="button" id="CustomdropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="CustomdropdownMenuButton1">
                                      <?php if($topic->type == NULL): ?>
                                        <a class="dropdown-item"  data-toggle="modal" data-target="#myModaledit<?php echo e($quiz->id); ?>" ><i class="feather icon-edit mr-2"></i><?php echo e(__('Edit')); ?></a>
                                        <?php endif; ?>
                                        <?php if($topic->type == '1'): ?>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#myModaleditsub<?php echo e($quiz->id); ?>" href="#"><i class="feather icon-edit mr-2"></i><?php echo e(__('Edit')); ?></a>
                                        <?php endif; ?>
                                        <a class="dropdown-item btn btn-link" data-toggle="modal" data-target="#delete<?php echo e($quiz->id); ?>" >
                                            <i class="feather icon-delete mr-2"></i><?php echo e(__("Delete")); ?></a>
                                        </a>
                                    </div>
                                </div>

                                <!-- delete Modal start -->
                                <div class="modal fade bd-example-modal-sm" id="delete<?php echo e($quiz->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleSmallModalLabel"><?php echo e(__('Delete')); ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                    <h4><?php echo e(__('Are You Sure ?')); ?></h4>
                                                    <p><?php echo e(__('Do you really want to delete')); ?> ? <?php echo e(__('This process cannot be undone.')); ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <form method="post" action="<?php echo e(url('admin/questions/'.$quiz->id)); ?>" class="pull-right">
                                                    <?php echo e(csrf_field()); ?>

                                                    <?php echo e(method_field("DELETE")); ?>

                                                    <button type="reset" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('No')); ?></button>
                                                    <button type="submit" class="btn btn-primary"><?php echo e(__('Yes')); ?></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- delete Model ended -->

                            </td>
                             
                          
                            </tr>
            
                            <!--Model for edit question-->
                            <div class="modal fade" id="myModaledit<?php echo e($quiz->id); ?>" tabindex="-1" role="dialog"
                              aria-labelledby="myModalLabel">
                              <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="my-modal-title">
                                      <b><?php echo e(__('Add Quiz')); ?></b>
                                  </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                   
                                  </div>
                                  <div class="box box-primary">
                                    <div class="panel panel-sum">
                                      <div class="modal-body">
                                        <form id="demo-form2" method="POST" action="<?php echo e(route('questions.update', $quiz->id)); ?>"
                                          data-parsley-validate class="form-horizontal form-label-left"
                                          enctype="multipart/form-data">
                                          <?php echo e(csrf_field()); ?>

                                          <?php echo e(method_field('PUT')); ?>

            
                                          <input type="hidden" name="course_id" value="<?php echo e($topic->course_id); ?>" />
            
                                          <input type="hidden" name="topic_id" value="<?php echo e($topic->id); ?>" />
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="col-md-12">
                                                <label for="exampleInputTit1e"><?php echo e(__('adminstaticword.Question')); ?></label>
                                              <textarea name="question" rows="6" class="form-control"
                                                placeholder="Enter Your Question"><?php echo e($quiz->question); ?></textarea>
                                                <br>
                                              </div>
                                              <div class="col-md-12">
                                                <label for="exampleInputDetails"><?php echo e(__('adminstaticword.Answer')); ?>:<sup
                                                  class="redstar">*</sup></label>
                                              <select style="width: 100%" name="answer"
                                                class="form-control select2">
                                                <option <?php echo e($quiz->answer == 'A' ? 'selected' : ''); ?> value="A">
                                                  <?php echo e(__('adminstaticword.A')); ?></option>
                                                <option <?php echo e($quiz->answer == 'B' ? 'selected' : ''); ?> value="B">
                                                  <?php echo e(__('adminstaticword.B')); ?></option>
                                                <option <?php echo e($quiz->answer == 'C' ? 'selected' : ''); ?> value="C">
                                                  <?php echo e(__('adminstaticword.C')); ?></option>
                                                <option <?php echo e($quiz->answer == 'D' ? 'selected' : ''); ?> value="D">
                                                  <?php echo e(__('adminstaticword.D')); ?></option>
                                              </select> 
                                              </div>
                                              <br>
                                              <h4 class="extras-heading"><?php echo e(__('Video And Image For Question')); ?></h4>
                                            <div class="form-group<?php echo e($errors->has('question_video_link') ? ' has-error' : ''); ?>">
                                          
                                          
                                              <label for="exampleInputDetails"><?php echo e(__('Add Video To Question')); ?> :<sup class="redstar">*</sup></label>
                                              <input type="text" name="question_video_link" class="form-control"
                                                placeholder="https://myvideolink.com/embed/.." />
                                              <small class="text-danger"><?php echo e($errors->first('question_video_link')); ?></small>
                                              <small class="text-muted text-info"> <i class="text-dark feather icon-help-circle"></i> <?php echo e(__('YouTube And Vimeo Video Support (Only Embed Code Link)')); ?></small>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="col-md-12">
            
                                                <label for="exampleInputDetails"><?php echo e(__('adminstaticword.AOption')); ?> :<sup
                                                    class="redstar">*</sup></label>
                                                <input type="text" name="a" value="<?php echo e($quiz->a); ?>" class="form-control"
                                                  placeholder="Enter Option A">
                                              </div>
              
                                              <div class="col-md-12">
                                                <label for="exampleInputDetails"><?php echo e(__('adminstaticword.BOption')); ?> :<sup
                                                    class="redstar">*</sup></label>
                                                <input type="text" name="b" value="<?php echo e($quiz->b); ?>" class="form-control"
                                                  placeholder="Enter Option B" />
                                              </div>
              
                                              <div class="col-md-12">
              
                                                <label for="exampleInputDetails"><?php echo e(__('adminstaticword.COption')); ?> :<sup
                                                    class="redstar">*</sup></label>
                                                <input type="text" name="c" value="<?php echo e($quiz->c); ?>" class="form-control"
                                                  placeholder="Enter Option C" />
                                              </div>
              
                                              <div class="col-md-12">
              
                                                <label for="exampleInputDetails"><?php echo e(__('adminstaticword.DOption')); ?> :<sup
                                                    class="redstar">*</sup></label>
                                                <input type="text" name="d" value="<?php echo e($quiz->d); ?>" class="form-control"
                                                  placeholder="Enter Option D" />
                                              </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                              <label class="text-dark" for="exampleInputSlug"><?php echo e(__('adminstaticword.Image')); ?>: </label>
                                        
                                              <div class="input-group mb-3">
                                        
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="inputGroupFileAddon01"><?php echo e(__('Upload')); ?></span>
                                                </div>
                                        
                                        
                                                <div class="custom-file">
                                        
                                                  <input type="file" name="question_img" class="custom-file-input" id="question_img"
                                                    aria-describedby="inputGroupFileAddon01">
                                                  <label class="custom-file-label" for="inputGroupFile01"><?php echo e(__('Choose file')); ?></label>
                                                </div>
                                              </div>
                                              
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <button type="reset" class="btn btn-danger-rgba"><i class="fa fa-ban"></i>
                                              <?php echo e(__('Reset')); ?></button>
                                            <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                                              <?php echo e(__('Update')); ?></button>
                                          </div>
                          
                                          <div class="clear-both"></div>
            
                                       
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!--Model close -->
            
                            <!--Model for edit question-->
                            <div class="modal fade" id="myModaleditsub<?php echo e($quiz->id); ?>" tabindex="-1" role="dialog"
                              aria-labelledby="myModalLabel">
                              <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                      <?php echo e(__('adminstaticword.Question')); ?></h4>
                                  </div>
                                  <div class="box box-primary">
                                    <div class="panel panel-sum">
                                      <div class="modal-body">
                                        <form id="demo-form2" method="POST" action="<?php echo e(route('questions.update', $quiz->id)); ?>"
                                          data-parsley-validate class="form-horizontal form-label-left"
                                          enctype="multipart/form-data">
                                          <?php echo e(csrf_field()); ?>

                                          <?php echo e(method_field('PUT')); ?>

            
                                          <input type="hidden" name="course_id" value="<?php echo e($topic->course_id); ?>" />
            
                                          <input type="hidden" name="topic_id" value="<?php echo e($topic->id); ?>" />
            
                                          <input type="hidden" name="type" value="1" />
           
                                          <div class="row">
                                            <div class="col-md-12">
                                              <label for="exampleInputTit1e"><?php echo e(__('adminstaticword.Question')); ?></label>
                                              <textarea name="question" rows="6" class="form-control" 
                                                placeholder="Enter Your Question"><?php echo e($quiz->question); ?></textarea>
                                              <br>
                                            </div>
            
            
                                          </div>
                                          <br>
            
            
            
                                          <div class="col-md-12">
                                            <div class="extras-block">
                                              <h4 class="extras-heading"><?php echo e(__('Images And Video For Question')); ?></h4>
                                              <div class="row">
                                                <div class="col-md-6">
                                                  <div
                                                    class="form-group<?php echo e($errors->has('question_video_link') ? ' has-error' : ''); ?>">
            
            
                                                    <label for="exampleInputDetails"><?php echo e(__('Add Video To Question')); ?> :<sup
                                                        class="redstar">*</sup></label>
                                                    <input type="text" name="question_video_link"
                                                      value="<?php echo e($quiz->question_video_link); ?>" class="form-control"
                                                      placeholder="https://myvideolink.com/embed/.." />
            
                                                    <small class="text-danger"><?php echo e($errors->first('question_video_link')); ?></small>
                                                    <small class="text-muted text-info"> <i class="text-dark feather icon-help-circle"></i><?php echo e(__('YouTube And Vimeo Video Support (Only Embed Code LinkG')); ?></small>

                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="form-group<?php echo e($errors->has('question_img') ? ' has-error' : ''); ?>">
            
            
                                                    <label for="exampleInputDetails"><?php echo e(__('Add Image To Question')); ?> :<sup
                                                        class="redstar">*</sup></label>
                                                    <input type="file" name="question_img" class="form-control" />
            
            
                                                    <small class="text-danger"><?php echo e($errors->first('question_img')); ?></small>
                                                    <small class="text-muted text-info"> <i class="text-dark feather icon-help-circle"></i> <?php echo e(__('Please Choose Only .JPG, .JPEG and .PNG')); ?></small>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
            
            
                                          <div class="form-group">
                                            <button type="reset" class="btn btn-danger"><i class="fa fa-ban"></i>
                                             <?php echo e(__('Reset')); ?> </button>
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i>
                                              <?php echo e(__('Update')); ?></button>
                                          </div>
                          
                                          <div class="clear-both"></div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!--Model close -->
            
            
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="modal fade" id="myModalquiz" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"> <?php echo e(__('adminstaticword.Add')); ?> <?php echo e(__('adminstaticword.Question')); ?>

          </h4>
        </div>
        <div class="box box-primary">
          <div class="panel panel-sum">
            <div class="modal-body">
              <form id="demo-form2" method="post" action="<?php echo e(route('questions.store')); ?>" data-parsley-validate
                class="form-horizontal form-label-left" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

  
                <input type="hidden" name="course_id" value="<?php echo e($topic->course_id); ?>" />
  
                <input type="hidden" name="topic_id" value="<?php echo e($topic->id); ?>" />
  <div class="row">
    <div class="col-md-6">
      <div class="col-md-12">
        <label for="exampleInputTit1e"><?php echo e(__('adminstaticword.Question')); ?></label>
        <textarea name="question" rows="6" class="form-control" placeholder="Enter Your Question"></textarea>
        <br>
      </div>
      <div class="col-md-12">
        <label for="exampleInputDetails"><?php echo e(__('adminstaticword.Answer')); ?>:<sup
            class="redstar">*</sup></label>
        <select style="width: 100%" name="answer" class="form-control select2">
          <option value="none" selected disabled hidden>
            <?php echo e(__('adminstaticword.SelectanOption')); ?>

          </option>
          <option value="A"><?php echo e(__('adminstaticword.A')); ?></option>
          <option value="B"><?php echo e(__('adminstaticword.B')); ?></option>
          <option value="C"><?php echo e(__('adminstaticword.C')); ?></option>
          <option value="D"><?php echo e(__('adminstaticword.D')); ?></option>
        </select>
      </div>
      <br>
      <h4 class="extras-heading"><?php echo e(__('Video And Image For Question')); ?></h4>
    <div class="form-group<?php echo e($errors->has('question_video_link') ? ' has-error' : ''); ?>">
  
  
      <label for="exampleInputDetails"><?php echo e(__('Add Video To Question')); ?> :<sup class="redstar">*</sup></label>
      <input type="text" name="question_video_link" class="form-control"
        placeholder="https://myvideolink.com/embed/.." />
      <small class="text-danger"><?php echo e($errors->first('question_video_link')); ?></small>
      <small class="text-muted text-info"> <i class="text-dark feather icon-help-circle"></i> <?php echo e(__('Back')); ?>YouTube And Vimeo Video Support (Only Embed Code Link)</small>
    </div>
    </div>
    <div class="col-md-6">
      <div class="col-md-6">
  
        <label for="exampleInputDetails"><?php echo e(__('adminstaticword.AOption')); ?> :<sup
            class="redstar">*</sup></label>
        <input type="text" name="a" class="form-control" placeholder="Enter Option A">
      </div>

      <div class="col-md-6">
        <label for="exampleInputDetails"><?php echo e(__('adminstaticword.BOption')); ?> :<sup
            class="redstar">*</sup></label>
        <input type="text" name="b" class="form-control" placeholder="Enter Option B" />
      </div>

      <div class="col-md-6">

        <label for="exampleInputDetails"><?php echo e(__('adminstaticword.COption')); ?> :<sup
            class="redstar">*</sup></label>
        <input type="text" name="c" class="form-control" placeholder="Enter Option C" />
      </div>

      <div class="col-md-6">

        <label for="exampleInputDetails"><?php echo e(__('adminstaticword.DOption')); ?> :<sup
            class="redstar">*</sup></label>
        <input type="text" name="d" class="form-control" placeholder="Enter Option D" />
      </div>
    </div>
    <div class="form-group col-md-6">
      <label class="text-dark" for="exampleInputSlug"><?php echo e(__('adminstaticword.Image')); ?>: </label>

      <div class="input-group mb-3">

        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupFileAddon01"><?php echo e(__('Back')); ?>Upload</span>
        </div>


        <div class="custom-file">

          <input type="file" name="question_img" class="custom-file-input" id="question_img"
            aria-describedby="inputGroupFileAddon01">
          <label class="custom-file-label" for="inputGroupFile01"><?php echo e(__('Back')); ?>Choose file</label>
        </div>
      </div>
      
    </div>
  </div>
 
  <div class="form-group">
    <button type="reset" class="btn btn-danger"><i class="fa fa-ban"></i> <?php echo e(__('Back')); ?>Reset</button>
    <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i>
      <?php echo e(__('Back')); ?>Create</button>
  </div>

  <div class="clear-both"></div>
 
  
              
               
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Model close -->
  
  
  <!--Model for add question -->
  <div class="modal fade" id="myModalquizsubject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
        </div>
        <div class="box box-primary">
          <div class="panel panel-sum">
            <div class="modal-body">
              <form id="demo-form2" method="post" action="<?php echo e(route('questions.store')); ?>" data-parsley-validate
                class="form-horizontal form-label-left" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

  
                <input type="hidden" name="course_id" value="<?php echo e($topic->course_id); ?>" />
  
                <input type="hidden" name="topic_id" value="<?php echo e($topic->id); ?>" />
  
  
                <input type="hidden" name="type" value="1" />
  
                <div class="row">
                  <div class="col-md-12">
                    <label for="exampleInputTit1e"><?php echo e(__('adminstaticword.Question')); ?></label>
                    <textarea name="question" rows="6" class="form-control" placeholder="Enter Your Question"></textarea>
                    <br>
                  </div>
  
  
                </div>
                <br>
  
  
                <div class="col-md-12">
                  <div class="extras-block">
                    <h4 class="extras-heading"><?php echo e(__('Back')); ?>Video And Image For Question</h4>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group<?php echo e($errors->has('question_video_link') ? ' has-error' : ''); ?>">
  
  
                          <label for="exampleInputDetails"><?php echo e(__('Back')); ?>Add Video To Question :<sup class="redstar">*</sup></label>
                          <input type="text" name="question_video_link" class="form-control"
                            placeholder="https://myvideolink.com/embed/.." />
                          <small class="text-danger"><?php echo e($errors->first('question_video_link')); ?></small>
                          <small class="text-muted text-info"> <i class="text-dark feather icon-help-circle"></i> <?php echo e(__('Back')); ?>YouTube And Vimeo Video Support (Only Embed Code Link)</small>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group<?php echo e($errors->has('question_img') ? ' has-error' : ''); ?>">
  
                          <label for="exampleInputDetails"><?php echo e(__('Back')); ?>Add Image To Question :<sup class="redstar">*</sup></label>
                          <input type="file" name="question_img" class="form-control" />
                          <small class="text-danger"><?php echo e($errors->first('question_img')); ?></small>
                          <small class="text-muted text-info"> <i class="text-dark feather icon-help-circle"></i> <?php echo e(__('Back')); ?>Please Choose Only .JPG, .JPEG and .PNG</small>

         
                        </div>
                      </div>
                      <br>
  
                      <br>
                    </div>
                  </div>
                </div>
  
  
                <div class="form-group">
                  <button type="reset" class="btn btn-danger"><i class="fa fa-ban"></i> <?php echo e(__('Back')); ?>Reset</button>
                  <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i>
                    <?php echo e(__('Back')); ?>Create</button>
                </div>
    
                <div class="clear-both"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/admin/course/quiz/index.blade.php ENDPATH**/ ?>