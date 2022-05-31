<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->
<?php
$language = Session::get('changed_language'); //or 'english' //set the system language
$rtl = array('ar','he','ur', 'arc', 'az', 'dv', 'ku', 'fa'); //make a list of rtl languages
?>

<html lang="en" @if (in_array($language,$rtl)) dir="rtl" @endif>
<!-- <![endif]-->
<!-- head -->
<!-- theme styles -->

@php
if(Schema::hasTable('color_options')){
  $color = App\ColorOption::first();
}

    $certificate = Modules\Certificate\Models\CertificateDesign::first();
    $courses = $course->title;
    $fullname = Auth::user()->fname. " " .Auth::user()->lname;

    if(isset($certificate))
    {

      $body = $certificate->body;
      $body = str_replace("[user]",$fullname, $body);
      $body = str_replace("[course]",$courses, $body);

    }

@endphp
@if(isset($color))
<head>
<style type="text/css">
  
  .cirtificate-border-one { 
     
    border: 15px groove {{ $color['blue_bg'] }}; 
    padding:20px;
    background-color: var(--background-white-bg-color);

  }
  .cirtificate-border-two {  
    border: 5px double {{ $color['blue_bg'] }};
    padding:20px;
  }
</style>

@else

<style type="text/css">
 .cirtificate-border-one { 
    
    border: 15px groove #0284A2;
    padding:20px;
    background-color: var(--background-white-bg-color);

  }
  .cirtificate-border-two {  
    border: 5px double #0284A2;
    padding:20px;
  }

</style>

@endif

<style type="text/css">
    @page { margin: 0px; }
    body{
        margin: 0;
        padding: 0;
    }
    @font-face {
        font-family: "Times New Roman", Times, serif;
        src: url('{{ public_path('times new roman bold italic.ttf') }}') format("ttf");
        font-weight: bold;
        font-style: italic;
    }
  * {
      font-family: "Times New Roman", Times, serif;
      font-weight: bold;
      font-style: italic;
  }

  .course-cirtificate {
    text-align: center;
  }

 .cirtificate-heading {
     font-family: "Times New Roman", Times, serif;
     font-weight: bold;
     font-style: italic;
    margin-bottom: 20px;
  }
  


  .course-cirtificate {

    padding: 10px 0;
    background: #F7F8FA;
  }
  .cirtificate-heading {

    color: #29303B;
  }

  .cirtificate-border-one {
      height: 741px;
      min-height: 741px;
      max-height: 741px;
  <?php if(!empty($certificate->border_one_enable)){ ?>
      border: {{ $certificate->border_one }}px groove {{ $certificate->border_one_color }} !important;


    <?php } ?>

    <?php if(empty($certificate->border_one_enable)){ ?>
      border: none!important;


    <?php } ?>
  
  }

  .cirtificate-border-two {  
    <?php if(!empty($certificate->border_two_enable)){ ?>
    border: {{ $certificate->border_two }}px groove {{ $certificate->border_two_color }} !important;
    <?php } ?>

    <?php if(empty($certificate->border_two_enable)){ ?>
      border: none !important;


    <?php } ?>
  }

  .cirtificate-border-one-sub { 
    <?php if(!empty($certificate->background_image)){ ?>
    background-image: url('{{ asset('images/certificate/background/'.$certificate->background_image ) }}');
    <?php } ?>
    background-repeat: no-repeat;
    background-size: cover;
  
  }

  .cirtificate-signature img {
    <?php if(isset($certificate)){ ?>
    width: {{ $certificate->signature_width }}px !important;
  
    height: {{ $certificate->signature_height }}px !important;
    text-align: {{ $certificate->signature_position }} !important;
    <?php } ?>
  }


  .cirtificate-logo {
    <?php if(isset($certificate)){ ?>
    text-align: {{ $certificate->logo_position }} !important;
    width: {{ $certificate->logo_width }}px;
    height: {{ $certificate->logo_height }}px;
    <?php } ?>
    margin-top: 50px;
  }

  .cirtificate-heading {
      margin-top: 50px;
    <?php if(isset($certificate)){ ?>
    font-size: {{ $certificate->title_font_size + 20 }}px !important;
    color: {{ $certificate->title_font_color }} !important;
    text-align: {{ $certificate->title_position }} !important;
    <?php } ?>

  }

  .cirtificate-detail {
    <?php if(isset($certificate)){ ?>
    font-size: {{ $certificate->body_font_size + 15 }}px !important;
    color: {{ $certificate->body_font_color }} !important;
    text-align: {{ $certificate->title_position }} !important;
      font-family: "Times New Roman", Times, serif;
      font-style: italic;
    <?php } ?>

  }


  .cirtificate-date {
    <?php if(isset($certificate)){ ?>
    font-size: {{ $certificate->date_font_size }}px !important;
    color: {{ $certificate->date_font_color }} !important;
    text-align: {{ $certificate->date_position }} !important;
    font-family: "Times New Roman", Times, serif;
    font-style: normal;
      margin-top: -10px;

  <?php } ?>
}


  .cirtificate-one {
    <?php if(isset($certificate)){ ?>
    font-size: {{ $certificate->name_font_size }}px !important;
    color: {{ $certificate->date_font_color }} !important;
    text-align: {{ $certificate->name_font_color }} !important;
    <?php } ?>
  }

  

</style>




</head>

<body>


<section id="cirtificate" class="course-cirtificate">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="cirtificate-border-one text-center">
                  <div class="cirtificate-border-one-sub">
                    <div class="cirtificate-border-two">
                       <div class="cirtificate-heading" style="">{{ optional($certificate)->title }}</div>
                        @php
                            $mytime = Carbon\Carbon::now();
                        @endphp
                        <p class="cirtificate-detail" >@if(!empty($body)) {!! $body !!}  @endif  </p>

                        @if(optional($certificate)->date_enable == 1)
                            <p class="cirtificate-date"  >{{ date('jS F Y', strtotime($progress['updated_at'])) }}</p>
                        @endif

                        <div class="cirtificate-signature">
                          @if(!empty($certificate->signature_image))
                          <img src="{{ asset('images/certificate/signature/'.$certificate->signature_image ) }}" class="img-fluid" alt="logo">
                          @endif
                        </div>

                      

                        @if(!empty($certificate->name))
                         <span class="cirtificate-one">{{$certificate->name }}, {{ __('frontstaticword.Instructor') }}</span>
                        @endif
                        <br>
                      

                         <div class="cirtificate-logo">
                           @if(!empty($certificate->logo_image) &&  $certificate->logo_enable == 1)
                              <img src="{{ asset('images/certificate/logo/'.$certificate->logo_image ) }}" class="img-fluid" alt="logo">
                          @else
                              <a href="{{ url('/') }}"><b><div class="logotext">{{ $gsetting['project_title'] }}</div></b></a>
                          @endif
                      </div>
                      
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- footer start -->

<!-- footer end -->
<!-- jquery -->
<script src="{{ url('js/jquery-2.min.js') }}"></script> <!-- jquery library js -->
<script src="{{ url('js/bootstrap.bundle.js') }}"></script> <!-- bootstrap js -->
<!-- end jquery -->
</body>
<!-- body end -->
</html> 





