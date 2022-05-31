@extends('admin.layouts.master')
@section('title', 'Design Certificate')
@section('maincontent')
@component('components.breadcumb',['fourthactive' => 'active'])
@section('stylesheets')
<link rel="stylesheet" href="{{ Module::asset('Certificate:css/custom_certificate.css') }}">
@endsection
@slot('heading')
{{ __('Design Certificate') }}
@endslot
@slot('menu1')
{{ __('Design Certificate') }}
@endslot
@slot('button')
<div class="col-md-4 col-lg-4">
  <div class="widgetbar">
    <a href="{{route('course.certificate')}}" class="btn btn-primary-rgba"><i
        class="feather icon-arrow-left mr-2"></i>{{ __("Back")}}</a>
  </div>
</div>
@endslot
@endcomponent
<div class="contentbar">
  <div class="row">
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
      @foreach($errors->all() as $error)
      <p>{{ $error}}<button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span class="text-red" aria-hidden="true">&times;</span></button></p>
      @endforeach
    </div>
    @endif
    <div class="col-lg-12">
      <div class="card m-b-30">
        <div class="card-header">
          <h5 class="box-title">{{ __('Create Certificate') }}</h5>
        </div>
        <div class="card-body ml-2">
          <!-- main content start -->
          <div class="row">
            <div class="col-lg-5 col-xl-3">

              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <a class="nav-link mb-2 active" id="v-pills-Logo-tab" data-toggle="pill" href="#v-pills-Logo" role="tab"
                  aria-controls="v-pills-Logo" aria-selected="false"> {{ __('adminstaticword.Add') }}
                  {{ __('adminstaticword.Logo') }}</a>

                <a class="nav-link mb-2" id="v-pills-Content-tab" data-toggle="pill" href="#v-pills-Content" role="tab"
                  aria-controls="v-pills-Content" aria-selected="false"> {{ __('adminstaticword.Content') }}</a>

                <a class="nav-link mb-2" id="v-pills-BackgroundImage-tab" data-toggle="pill"
                  href="#v-pills-BackgroundImage" role="tab" aria-controls="v-pills-BackgroundImage"
                  aria-selected="false"> {{ __('adminstaticword.BackgroundImage') }}</a>

                <a class="nav-link mb-2" id="v-pills-OuterBorder-tab" data-toggle="pill" href="#v-pills-OuterBorder"
                  role="tab" aria-controls="v-pills-OuterBorder" aria-selected="false">
                  {{ __('adminstaticword.OuterBorder') }}</a>

                <a class="nav-link mb-2" id="v-pills-InnerBorder-tab" data-toggle="pill" href="#v-pills-InnerBorder"
                  role="tab" aria-controls="v-pills-InnerBorder" aria-selected="false">
                  {{ __('adminstaticword.InnerBorder') }}</a>

                <a class="nav-link mb-2" id="v-pills-Signature-tab" data-toggle="pill" href="#v-pills-Signature"
                  role="tab" aria-controls="v-pills-Signature" aria-selected="false">
                  {{ __('adminstaticword.Signature') }}</a>

                <a class="nav-link mb-2" id="v-pills-Date-tab" data-toggle="pill" href="#v-pills-Date" role="tab"
                  aria-controls="v-pills-Date" aria-selected="false"> {{ __('adminstaticword.Date') }}</a>

              </div>

            </div>
            <div class="col-lg-7 col-xl-9">

              <div class="tab-content" id="v-pills-tabContent">

                <!-- logo start -->
                <div class="tab-pane fade show active" id="v-pills-Logo" role="tabpanel"
                  aria-labelledby="v-pills-Logo-tab">
                  <!-- <div class="tab-pane fade show active" id="v-pills-Logo-tab"> -->
                  <!-- logo form start -->
                  <form action="{{ route('insertlogo.certificate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="logo_enable">{{ __('adminstaticword.LogoEnable') }}: </label><br>
                    <!-- ============== -->
                    <label class="switch">
                      <input class="slider" type="checkbox" id="logo_enable" name="logo_enable"
                        {{ optional($certificate)->logo_enable == 1 ? 'checked' : '' }} />
                      <span class="knob"></span>
                    </label>
                    <!-- ============== -->
                    <div style="{{ optional($certificate)->logo_enable == 1 ? '' : 'display:none' }}" id="logo_one">

                      <div class="form-group">
                        <label class="text-dark" for="">{{ __('adminstaticword.Logo') }}: <span
                            class="text-danger">*</span></label>
                        <!-- -------------- -->
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                          </div>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="logo_image"
                              value="{{ optional($certificate)->logo_image }}" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                          </div>
                        </div>
                        @if(isset($certificate->logo_image))
                        <img src="{{ url('/images/certificate/logo/'.optional($certificate)->logo_image) }}" width="200"
                          height="150" />
                        @endif
                        <!-- -------------- -->

                      </div>

                      <div class="form-group">
                        <label for="exampleInputSlug">{{ __('Title Text Position') }}</label>
                        <select class="form-control select2" name="logo_position">
                          <option value="none" selected disabled hidden>
                            {{ __('adminstaticword.SelectanOption') }}
                          </option>
                          <option {{ optional($certificate)->logo_position == 'center' ? 'selected' : ''}}
                            value="center">Center</option>
                          <option {{ optional($certificate)->logo_position == 'left' ? 'selected' : ''}} value="left">
                            Left</option>
                          <option {{ optional($certificate)->logo_position == 'right' ? 'selected' : ''}} value="right">
                            Right</option>
                        </select>

                      </div>

                      <div class="form-group">
                        <label for="">{{ __('Logo Width') }}: <span class="text-danger">*</span></label>
                        <input type="number" min="10" placeholder="" class="form-control" required name="logo_width"
                          value="{{ optional($certificate)->logo_width }}">
                      </div>

                      <div class="form-group">
                        <label for="">{{ __('Logo Height') }}: <span class="text-danger">*</span></label>
                        <input type="number" min="10" placeholder="" class="form-control" required name="logo_height"
                          value="{{ optional($certificate)->logo_height }}">
                      </div>

                    </div>
                    <br>
                    <br>

                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Save</button>
                    </div>
                  </form>
                  <!-- logo form end -->
                </div>
                <!-- logo end -->

                <!-- content start -->
                <div class="tab-pane fade" id="v-pills-Content" role="tabpanel" aria-labelledby="v-pills-Content-tab">
                  <!-- content form start  -->
                  <form action="{{ route('insertcontent.certificate') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="">{{ __('adminstaticword.Title') }}: <span class="text-danger">*</span></label>
                      <input placeholder="" type="text" class="form-control" required name="title"
                        value="{{ optional($certificate)->title }}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputSlug">{{ __('Title Font Size') }}</label>
                      <select class="form-control select2" name="title_font_size">
                        <option value="none" selected disabled hidden>
                          {{ __('adminstaticword.SelectanOption') }}
                        </option>

                        <option {{ optional($certificate)->title_font_size == '30' ? 'selected' : ''}} value="30">30px
                        </option>
                        <option {{ optional($certificate)->title_font_size == '35' ? 'selected' : ''}} value="35">35px
                        </option>
                        <option {{ optional($certificate)->title_font_size == '40' ? 'selected' : ''}} value="40">40px
                        </option>
                        <option {{ optional($certificate)->title_font_size == '45' ? 'selected' : ''}} value="45">45px
                        </option>
                        <option {{ optional($certificate)->title_font_size == '50' ? 'selected' : ''}} value="50">50px
                        </option>
                        <option {{ optional($certificate)->title_font_size == '55' ? 'selected' : ''}} value="55">55px
                        </option>
                        <option {{ optional($certificate)->title_font_size == '60' ? 'selected' : ''}} value="60">60px
                        </option>
                        <option {{ optional($certificate)->title_font_size == '65' ? 'selected' : ''}} value="65">65px
                        </option>

                      </select>

                    </div>


                    <div class="form-group">
                      <label for="title_font_color">{{ __('Font Color') }}:</label>
                      <div class="input-group my-colorpicker2">
                        <input type="color" name="title_font_color"
                          value="{{ optional($certificate)->title_font_color }}" class="form-control"
                          placeholder="Choose color" required>

                        <div class="input-group-addon">
                          <i></i>
                        </div>
                      </div>
                    </div>


                    <div class="form-group">
                      <label for="exampleInputSlug">{{ __('Title Text Position') }}</label>
                      <select class="form-control select2" name="title_position">
                        <option value="none" selected disabled hidden>
                          {{ __('adminstaticword.SelectanOption') }}
                        </option>
                        <option {{ optional($certificate)->title_position == 'center' ? 'selected' : ''}}
                          value="center">Center</option>
                        <option {{ optional($certificate)->title_position == 'left' ? 'selected' : ''}} value="left">
                          Left</option>
                        <option {{ optional($certificate)->title_position == 'right' ? 'selected' : ''}} value="right">
                          Right</option>
                      </select>

                    </div>

                    <hr>


                    <div class="form-group">
                      <label for="exampleInputDetails">{{ __('adminstaticword.Content') }}:<sup
                          class="redstar">*</sup></label>
                      <textarea name="body" rows="3" class="form-control"
                        required>{{ optional($certificate)->body }}</textarea>

                      <small> • use <b>[user]</b> to display enrolled user name<br>• use <b>[course]</b> to display
                        course name on certificate.</small>
                    </div>
                    <br>

                    <div class="form-group">
                      <label for="exampleInputSlug">{{ __('Body Font Size') }}</label>
                      <select class="form-control select2" name="body_font_size">
                        <option value="none" selected disabled hidden>
                          {{ __('adminstaticword.SelectanOption') }}
                        </option>

                        <option {{ optional($certificate)->body_font_size == '8' ? 'selected' : ''}} value="8">8px
                        </option>

                        <option {{ optional($certificate)->body_font_size == '9' ? 'selected' : ''}} value="9">9px
                        </option>

                        <option {{ optional($certificate)->body_font_size == '10' ? 'selected' : ''}} value="10">10px
                        </option>

                        <option {{ optional($certificate)->body_font_size == '11' ? 'selected' : ''}} value="11">11px
                        </option>

                        <option {{ optional($certificate)->body_font_size == '12' ? 'selected' : ''}} value="12">12px
                        </option>

                        <option {{ optional($certificate)->body_font_size == '13' ? 'selected' : ''}} value="13">13px
                        </option>

                        <option {{ optional($certificate)->body_font_size == '14' ? 'selected' : ''}} value="14">14px
                        </option>

                        <option {{ optional($certificate)->body_font_size == '15' ? 'selected' : ''}} value="15">15px
                        </option>

                      </select>

                    </div>


                    <div class="form-group">
                      <label for="body_font_color">{{ __('Body Font Color') }}:</label>
                      <div class="input-group my-colorpicker2">
                        <input type="color" name="body_font_color" value="{{ optional($certificate)->body_font_color }}"
                          class="form-control" placeholder="Choose color" required>

                        <div class="input-group-addon">
                          <i></i>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputSlug">{{ __('Title Text Position') }}</label>
                      <select class="form-control select2" name="body_position">
                        <option value="none" selected disabled hidden>
                          {{ __('adminstaticword.SelectanOption') }}
                        </option>

                        <option {{ optional($certificate)->body_position == 'center' ? 'selected' : ''}} value="center">
                          Center</option>

                        <option {{ optional($certificate)->body_position == 'left' ? 'selected' : ''}} value="left">Left
                        </option>

                        <option {{ optional($certificate)->body_position == 'right' ? 'selected' : ''}} value="right">
                          Right</option>


                      </select>

                    </div>


                    <div class="form-group">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Save</button>
                    </div>

                  </form>
                  <!-- content form end -->
                </div>
                <!-- content end -->

                <!-- background image start -->
                <div class="tab-pane fade" id="v-pills-BackgroundImage" role="tabpanel"
                  aria-labelledby="v-pills-BackgroundImage-tab">
                  <!-- background form start -->
                  <form action="{{ route('insertcertificatebackground.certificate') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <label for="background_image_enable">{{ __('adminstaticword.BackgroundImage') }}: </label><br>
                    <!-- ============== -->
                    <label class="switch">
                      <input class="slider" type="checkbox" id="background_image_enable" name="background_image_enable"
                        {{ optional($certificate)->background_image_enable == 1 ? 'checked' : '' }} />
                      <span class="knob"></span>
                    </label>
                    <!-- ============== -->
                    <br>

                    <div style="{{ optional($certificate)->background_image_enable == 1 ? '' : 'display:none' }}"
                      id="background_one">

                      <div class="form-group">
                        <label for="">{{ __('adminstaticword.BackgroundImage') }}: <span
                            class="text-danger">*</span></label>
                        <!-- -------------- -->
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                          </div>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="background_image"
                              value="{{ optional($certificate)->background_image }}"
                              aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                          </div>
                        </div>
                        @if(isset($certificate->background_image))
                        <img src="{{ url('/images/certificate/background/'.optional($certificate)->background_image) }}"
                          class="img-responsive" />
                        @endif
                        <!-- -------------- -->
                      </div>
                    </div>

                    <br>
                    <br>

                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Save</button>
                    </div>
                  </form>
                  <!-- background form end -->
                </div>
                <!-- background image end -->


                <!-- OuterBorder Start -->
                <div class="tab-pane fade" id="v-pills-OuterBorder" role="tabpanel"
                  aria-labelledby="v-pills-OuterBorder-tab">
                  <!-- outerborder form start -->
                  <form action="{{ route('insertouterborder.certificate') }}" method="POST">
                    @csrf
                    <label for="border_one_enable">{{ __('Enable Outer Border') }}: </label><br>
                    <!-- ============== -->
                    <label class="switch">
                      <input class="slider" type="checkbox" id="border_one_enable" name="border_one_enable"
                        {{ optional($certificate)->border_one_enable == 1 ? 'checked' : '' }} />
                      <span class="knob"></span>
                    </label>
                    <!-- ============== -->
                    <br>

                    <div class="form-group">
                      <label for="exampleInputSlug">{{ __('Outer Border width') }}</label>
                      <select class="form-control select2" name="border_one">

                        <option value="none" selected disabled hidden>
                          {{ __('adminstaticword.SelectanOption') }}
                        </option>
                        <option {{ optional($certificate)->border_one == '10' ? 'selected' : ''}} value="10">10px
                        </option>
                        <option {{ optional($certificate)->border_one == '11' ? 'selected' : ''}} value="11">11px
                        </option>
                        <option {{ optional($certificate)->border_one == '12' ? 'selected' : ''}} value="12">12px
                        </option>
                        <option {{ optional($certificate)->border_one == '13' ? 'selected' : ''}} value="13">13px
                        </option>
                        <option {{ optional($certificate)->border_one == '14' ? 'selected' : ''}} value="14">14px
                        </option>
                        <option {{ optional($certificate)->border_one == '15' ? 'selected' : ''}} value="15">15px
                        </option>

                      </select>

                    </div>

                    <div class="form-group">
                      <label for="title_font_color">{{ __('Outer Border Color') }}:</label>
                      <div class="input-group my-colorpicker2">
                        <input type="color" name="border_one_color"
                          value="{{ optional($certificate)->border_one_color }}" class="form-control"
                          placeholder="Choose color" required>

                        <div class="input-group-addon">
                          <i></i>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Save</button>
                    </div>
                  </form>
                  <!-- outerborder form end -->
                </div>
                <!-- OuterBorder End -->

                <!-- InnerBorder Start -->
                <div class="tab-pane fade" id="v-pills-InnerBorder" role="tabpanel"
                  aria-labelledby="v-pills-InnerBorder-tab">
                  <!-- innerborder form start -->
                  <form action="{{ route('insertinnerborder.certificate') }}" method="POST">
                    @csrf
                    <label for="border_two_enable">{{ __('Enable Inner Border') }}: </label><br>
                    <!-- ============== -->
                    <label class="switch">
                      <input class="slider" type="checkbox" id="border_two_enable" name="border_two_enable"
                        {{ optional($certificate)->border_two_enable == 1 ? 'checked' : '' }} />
                      <span class="knob"></span>
                    </label>
                    <!-- ============== -->
                    <br>

                    <div class="form-group">
                      <label for="exampleInputSlug">{{ __('Inner Border width') }}</label>
                      <select class="form-control select2" name="border_two">
                        <option value="none" selected disabled hidden>
                          {{ __('adminstaticword.SelectanOption') }}
                        </option>

                        <option {{ optional($certificate)->border_two == '10' ? 'selected' : ''}} value="10">10px
                        </option>

                        <option {{ optional($certificate)->border_two == '11' ? 'selected' : ''}} value="11">11px
                        </option>

                        <option {{ optional($certificate)->border_two == '12' ? 'selected' : ''}} value="12">12px
                        </option>

                        <option {{ optional($certificate)->border_two == '13' ? 'selected' : ''}} value="13">13px
                        </option>

                        <option {{ optional($certificate)->border_two == '14' ? 'selected' : ''}} value="14">14px
                        </option>

                        <option {{ optional($certificate)->border_two == '15' ? 'selected' : ''}} value="15">15px
                        </option>

                      </select>

                    </div>

                    <div class="form-group">
                      <label for="title_font_color">{{ __('Inner Border Color') }}:</label>
                      <div class="input-group my-colorpicker2">
                        <input type="color" name="border_two_color"
                          value="{{ optional($certificate)->border_two_color }}" class="form-control"
                          placeholder="Choose color" required>

                        <div class="input-group-addon">
                          <i></i>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Save</button>
                    </div>
                  </form>
                  <!-- innerborder form end -->
                </div>
                <!-- InnerBorder End -->

                <!-- Signature Start -->
                <div class="tab-pane fade" id="v-pills-Signature" role="tabpanel"
                  aria-labelledby="v-pills-Signature-tab">
                  <!--signature form start  -->
                  <form action="{{ route('insertsignature.certificate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="">{{ __('Signature Image') }}: <span class="text-danger">*</span></label><br>
                      <!-- -------------- -->
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01" name="signature_image"
                            value="{{ optional($certificate)->logo_image }}" aria-describedby="inputGroupFileAddon01">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                      </div>
                      @if(isset($certificate->signature_image))
                      <img src="{{ url('/images/certificate/signature/'.optional($certificate)->signature_image) }}"
                        width="200" height="150" />
                      @endif
                      <!-- -------------- -->


                    </div>

                    <div class="form-group">

                      <label for="exampleInputSlug">{{ __('Signature Image Position') }}</label>
                      <select class="form-control select2" name="logo_position">

                        <option value="none" selected disabled hidden>
                          {{ __('adminstaticword.SelectanOption') }}
                        </option>
                        <option {{ optional($certificate)->logo_position == 'center' ? 'selected' : ''}} value="center">
                          Center</option>
                        <option {{ optional($certificate)->logo_position == 'left' ? 'selected' : ''}} value="left">Left
                        </option>
                        <option {{ optional($certificate)->logo_position == 'right' ? 'selected' : ''}} value="right">
                          Right</option>

                      </select>
                    </div>

                    <div class="form-group">
                      <label for="">{{ __('Signature Width') }}: <span class="text-danger">*</span></label>
                      <input type="number" min="10" placeholder="" class="form-control" required name="signature_width"
                        value="{{ optional($certificate)->signature_width }}">
                    </div>

                    <div class="form-group">
                      <label for="">{{ __('Signature Height') }}: <span class="text-danger">*</span></label>
                      <input type="number" min="10" placeholder="" class="form-control" required name="signature_height"
                        value="{{ optional($certificate)->signature_height }}">
                    </div>

                    <hr>

                    <div class="form-group">
                      <label for="">{{ __('Name After Signature') }}: <span class="text-danger">*</span></label>
                      <input placeholder="" type="text" class="form-control" required name="name"
                        value="{{ optional($certificate)->name }}">

                    </div>

                    <div class="form-group">
                      <label for="exampleInputSlug">{{ __('Name Font Size') }}</label>
                      <select class="form-control select2" name="name_font_size">
                        <option value="none" selected disabled hidden>
                          {{ __('adminstaticword.SelectanOption') }}
                        </option>

                        <option {{ optional($certificate)->name_font_size == '8' ? 'selected' : ''}} value="8">8px
                        </option>

                        <option {{ optional($certificate)->name_font_size == '9' ? 'selected' : ''}} value="9">9px
                        </option>

                        <option {{ optional($certificate)->name_font_size == '10' ? 'selected' : ''}} value="10">10px
                        </option>

                        <option {{ optional($certificate)->name_font_size == '11' ? 'selected' : ''}} value="11">11px
                        </option>

                        <option {{ optional($certificate)->name_font_size == '12' ? 'selected' : ''}} value="12">12px
                        </option>

                        <option {{ optional($certificate)->name_font_size == '13' ? 'selected' : ''}} value="13">13px
                        </option>

                        <option {{ optional($certificate)->name_font_size == '14' ? 'selected' : ''}} value="14">14px
                        </option>

                        <option {{ optional($certificate)->name_font_size == '15' ? 'selected' : ''}} value="15">15px
                        </option>

                      </select>

                    </div>


                    <div class="form-group">
                      <label for="name_font_color">{{ __('Name Font Color') }}:</label>
                      <div class="input-group my-colorpicker2">
                        <input type="color" name="name_font_color" value="{{ optional($certificate)->name_font_color }}"
                          class="form-control" placeholder="Choose color" required>

                        <div class="input-group-addon">
                          <i></i>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Save</button>
                    </div>
                  </form>
                  <!--signature form end  -->
                </div>
                <!-- Signature End -->

                <!-- Date Start -->
                <div class="tab-pane fade" id="v-pills-Date" role="tabpanel" aria-labelledby="v-pills-Date-tab">
                  <!-- date form start -->
                  <form action="{{ route('insertdate.certificate') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <label for="date_enable">{{ __('adminstaticword.Date') }} {{ __('adminstaticword.Enable') }}:
                    </label><br>
                    <!-- ============== -->
                    <label class="switch">
                      <input class="slider" type="checkbox" id="date_enable" name="date_enable"
                        {{ optional($certificate)->date_enable == 1 ? 'checked' : '' }} />
                      <span class="knob"></span>
                    </label>
                    <!-- ============== -->
                    <br>
                    <div style="{{ optional($certificate)->date_enable == 1 ? '' : 'display:none' }}" id="date_one">

                      <div class="form-group">
                        <label for="exampleInputSlug">{{ __('Date Font Size') }}</label>
                        <select class="form-control select2" name="date_font_size">

                          <option value="none" selected disabled hidden>
                            {{ __('adminstaticword.SelectanOption') }}
                          </option>
                          <option {{ optional($certificate)->date_font_size == '8' ? 'selected' : ''}} value="8">8px
                          </option>
                          <option {{ optional($certificate)->date_font_size == '9' ? 'selected' : ''}} value="9">9px
                          </option>
                          <option {{ optional($certificate)->date_font_size == '10' ? 'selected' : ''}} value="10">10px
                          </option>
                          <option {{ optional($certificate)->date_font_size == '11' ? 'selected' : ''}} value="11">11px
                          </option>
                          <option {{ optional($certificate)->date_font_size == '12' ? 'selected' : ''}} value="12">12px
                          </option>
                          <option {{ optional($certificate)->date_font_size == '13' ? 'selected' : ''}} value="13">13px
                          </option>
                          <option {{ optional($certificate)->date_font_size == '14' ? 'selected' : ''}} value="14">14px
                          </option>
                          <option {{ optional($certificate)->date_font_size == '15' ? 'selected' : ''}} value="15">15px
                          </option>

                        </select>

                      </div>

                      <div class="form-group">
                        <label for="date_font_color">{{ __('Date Font Color') }}:</label>
                        <div class="input-group my-colorpicker2">
                          <input type="color" name="date_font_color"
                            value="{{ optional($certificate)->date_font_color }}" class="form-control"
                            placeholder="Choose color" required>

                          <div class="input-group-addon">
                            <i></i>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputSlug">{{ __('Date Text Position') }}</label>
                        <select class="form-control select2" name="logo_position">

                          <option value="none" selected disabled hidden>
                            {{ __('adminstaticword.SelectanOption') }}
                          </option>
                          <option {{ optional($certificate)->logo_position == 'center' ? 'selected' : ''}}
                            value="center">Center</option>
                          <option {{ optional($certificate)->logo_position == 'left' ? 'selected' : ''}} value="left">
                            Left</option>
                          <option {{ optional($certificate)->logo_position == 'right' ? 'selected' : ''}} value="right">
                            Right</option>

                        </select>

                      </div>

                    </div>
                    <br>
                    <br>

                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Save</button>
                    </div>
                  </form>
                  <!-- date form end -->
                </div>
                <!-- Date End -->

              </div>
            </div>
          </div>

          <!-- main content end -->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
  <script src="{{ Module::asset('certificate:js/certificate.js') }}"></script>
@endsection