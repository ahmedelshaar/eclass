<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ __("Certicficate view") }}</title>
</head>

<body>

  @php
  
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

  <style>
    .cirtificate-border-one {
      <?php if( !empty($certificate->border_one_enable)) {
        ?>border: {
            {
            $certificate->border_one
          }
        }

        px groove {
            {
            $certificate->border_one_color
          }
        }

         !important;


        <?php
      }

      ?><?php if(empty($certificate->border_one_enable)) {
        ?>border: none !important;


        <?php
      }

      ?>
    }

    .cirtificate-border-two {
      <?php if( !empty($certificate->border_two_enable)) {
        ?>border: {
            {
            $certificate->border_two
          }
        }

        px groove {
            {
            $certificate->border_two_color
          }
        }

         !important;
        <?php
      }

      ?><?php if(empty($certificate->border_two_enable)) {
        ?>border: none !important;


        <?php
      }

      ?>
    }

    .cirtificate-border-one-sub {
      <?php if( !empty($certificate->background_image)) {
        ?>background-image: url('{{ asset('images/certificate/background/'.$certificate->background_image ) }}');
        <?php
      }

      ?>background-repeat: no-repeat;
      background-size: cover;

    }

    .cirtificate-signature img {
      <?php if(isset($certificate)) {
        ?>width: {
            {
            $certificate->signature_width
          }
        }

        px;

        height: {
            {
            $certificate->signature_height
          }
        }

        px;
        <?php
      }

      ?>
    }


    .cirtificate-logo {
      <?php if(isset($certificate)) {
        ?>text-align: {
            {
            $certificate->logo_position
          }
        }

         !important;

        width: {
            {
            $certificate->logo_width
          }
        }

        px;

        height: {
            {
            $certificate->logo_height
          }
        }

        px;
        <?php
      }

      ?>
    }

    .cirtificate-heading {
      <?php if(isset($certificate)) {
        ?>font-size: {
            {
            $certificate->title_font_size
          }
        }

        px !important;

        color: {
            {
            $certificate->title_font_color
          }
        }

         !important;

        text-align: {
            {
            $certificate->title_position
          }
        }

         !important;
        <?php
      }

      ?>
    }

    .cirtificate-detail {
      <?php if(isset($certificate)) {
        ?>font-size: {
            {
            $certificate->body_font_size
          }
        }

        px !important;

        color: {
            {
            $certificate->body_font_color
          }
        }

         !important;

        text-align: {
            {
            $certificate->title_position
          }
        }

         !important;
        <?php
      }

      ?>
    }


    .cirtificate-date {
      <?php if(isset($certificate)) {
        ?>font-size: {
            {
            $certificate->date_font_size
          }
        }

        px !important;

        color: {
            {
            $certificate->date_font_color
          }
        }

         !important;

        text-align: {
            {
            $certificate->date_position
          }
        }

         !important;
        <?php
      }

      ?>
    }


    .cirtificate-one {
      <?php if(isset($certificate)) {
        ?>font-size: {
            {
            $certificate->name_font_size
          }
        }

        px !important;

        color: {
            {
            $certificate->date_font_color
          }
        }

         !important;

        text-align: {
            {
            $certificate->name_font_color
          }
        }

         !important;
        <?php
      }

      ?>
    }
  </style>

  @if( isset($certificate))
  <div class="cirtificate-border-one">
    <div class="cirtificate-border-one-sub">
      <div class="cirtificate-border-two">


        <div class="cirtificate-heading"> {{ optional($certificate)->title }} </div>
        @php
        $mytime = Carbon\Carbon::now();
        @endphp
        <p class="cirtificate-detail font-30px"> @if(!empty($body)) {{ $body }} @endif
          <br>


          @if($certificate->date_enable == 1)
          <span class="font-25px">{{ date('jS F Y', strtotime($progress['updated_at'])) }}</span>
          @endif

        </p>

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
          @if(!empty($certificate->logo_image) && $certificate->logo_enable == 1)
          <img src="{{ asset('images/certificate/logo/'.$certificate->logo_image ) }}" class="img-fluid" alt="logo">

          @endif
        </div>

      </div>
    </div>
  </div>

  @endif



</body>

</html>