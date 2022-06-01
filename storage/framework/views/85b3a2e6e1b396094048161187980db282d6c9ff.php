<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo e(__("Certicficate view")); ?></title>
</head>

<body>

  <?php
  
  $certificate = Modules\Certificate\Models\CertificateDesign::first();
  $courses = $course->title;

  $fullname = Auth::user()->fname. " " .Auth::user()->lname;

  if(isset($certificate))
  {

    $body = $certificate->body;
    $body = str_replace("[user]",$fullname, $body);
    $body = str_replace("[course]",$courses, $body);

  }



  ?>

  <style>
    .cirtificate-border-one {
      <?php
          if( !empty($certificate->border_one_enable)) {
        ?>
         border: <?php echo e($certificate->border_one); ?>px groove <?php echo e($certificate->border_one_color); ?> !important;

        <?php
      }
      ?>
      
<?php if(empty($certificate->border_one_enable)) {
        ?>border: none !important;


        <?php
      }

      ?>
    }

    .cirtificate-border-two {
      <?php if( !empty($certificate->border_two_enable)) {
        ?>
          border: <?php echo e($certificate->border_two); ?>px groove <?php echo e($certificate->border_two_color); ?>!important;
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
        ?>background-image: url('<?php echo e(asset('images/certificate/background/'.$certificate->background_image )); ?>');
        <?php
      }

      ?>background-repeat: no-repeat;
      background-size: cover;

    }

    .cirtificate-signature img {
      <?php if(isset($certificate)) {
        ?>width: <?php echo e($certificate->signature_width); ?>px;
          height: <?php echo e($certificate->signature_height); ?>px;
        <?php
      }

      ?>
    }


    .cirtificate-logo {
      <?php if(isset($certificate)) {
        ?>text-align: <?php echo e($certificate->logo_position); ?> !important;

        width: <?php echo e($certificate->logo_width); ?>px;

        height: <?php echo e($certificate->logo_height); ?>px;
        <?php
      }

      ?>
    }

    .cirtificate-heading {
      <?php if(isset($certificate)) {
        ?>font-size: <?php echo e($certificate->title_font_size); ?>px !important;
color: <?php echo e($certificate->title_font_color); ?>

 !important;
text-align: <?php echo e($certificate->title_position); ?>


         !important;
        <?php
      }

      ?>
    }

    .cirtificate-detail {
      <?php if(isset($certificate)) {
        ?>
        font-size: <?php echo e($certificate->body_font_size); ?>px !important;
        color: <?php echo e($certificate->body_font_color); ?> !important;
        text-align: <?php echo e($certificate->title_position); ?> !important;
        <?php
      }

      ?>
    }


    .cirtificate-date {
      <?php if(isset($certificate)) {
        ?>font-size: <?php echo e($certificate->date_font_size); ?>px !important;

        color: <?php echo e($certificate->date_font_color); ?>


         !important;

        text-align: <?php echo e($certificate->date_position); ?>


         !important;
        <?php
      }

      ?>
    }


    .cirtificate-one {
      <?php if(isset($certificate)) {
        ?>font-size: <?php echo e($certificate->name_font_size); ?>px !important;

        color: <?php echo e($certificate->date_font_color); ?>


         !important;

        text-align: <?php echo e($certificate->name_font_color); ?>


         !important;
        <?php
      }

      ?>
    }
  </style>

  <?php if( isset($certificate)): ?>
  <div class="cirtificate-border-one">
    <div class="cirtificate-border-one-sub">
      <div class="cirtificate-border-two">


        <div class="cirtificate-heading"> <?php echo e(optional($certificate)->title); ?> </div>
        <?php
        $mytime = Carbon\Carbon::now();
        ?>
        <p class="cirtificate-detail font-30px"> <?php if(!empty($body)): ?> <?php echo $body; ?> <?php endif; ?>
          <br>


          <?php if($certificate->date_enable == 1): ?>
          <span class="cirtificate-date"><?php echo e(date('jS F Y', strtotime($progress['updated_at']))); ?></span>
          <?php endif; ?>

        </p>

        <div class="cirtificate-signature">
          <?php if(!empty($certificate->signature_image)): ?>
          <img src="<?php echo e(asset('images/certificate/signature/'.$certificate->signature_image )); ?>" class="img-fluid" alt="logo">
          <?php endif; ?>
        </div>


        <?php if(!empty($certificate->name)): ?>
        <span class="cirtificate-one"><?php echo e($certificate->name); ?>, <?php echo e(__('frontstaticword.Instructor')); ?></span>
        <?php endif; ?>

        <br>



        <div class="cirtificate-logo">
          <?php if(!empty($certificate->logo_image) && $certificate->logo_enable == 1): ?>
          <img src="<?php echo e(asset('images/certificate/logo/'.$certificate->logo_image )); ?>" class="img-fluid" alt="logo">
          <?php endif; ?>
        </div>

      </div>
    </div>
  </div>

  <?php endif; ?>



</body>

</html><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\Modules/Certificate\Resources/views/front/certificate_view.blade.php ENDPATH**/ ?>