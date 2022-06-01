<script src="<?php echo e(url('js/jquery-2.min.js')); ?>"></script> <!-- jquery library js -->
<script src="<?php echo e(url('js/colorbox.js')); ?>"></script> <!-- colorbox js -->
<script src="<?php echo e(url('js/bootstrap.bundle.js')); ?>"></script> <!-- bootstrap js -->
<script src="<?php echo e(url('vendor/counter/waypoints.min.js')); ?>"></script> <!-- facts count js required for jquery.counterup.js file -->
<script src="<?php echo e(url('vendor/counter/jquery.counterup.js')); ?>"></script> <!-- facts count js-->
<?php
$language = Session::get('changed_language'); //or 'english' //set the system language
$rtl = array('ar','he','ur', 'arc', 'az', 'dv', 'ku', 'fa'); //make a list of rtl languages
?>
<?php if(in_array($language,$rtl)): ?>
<script src="<?php echo e(url('vendor/owl/js/owl.carouselrtl.min.js')); ?>"></script> <!-- owl carousel js -->	
<?php else: ?>
<script src="<?php echo e(url('vendor/owl/js/owl.carousel.min.js')); ?>"></script> <!-- owl carousel js -->	
<?php endif; ?>
<script src="<?php echo e(url('vendor/smoothscroll/smooth-scroll.js')); ?>"></script> <!-- smooth scroll js -->
<script src="<?php echo e(url('vendor/popup/jquery.magnific-popup.min.js')); ?>"></script> <!-- popup js-->
<script src="<?php echo e(url('vendor/navigation/menumaker.js')); ?>"></script> <!-- navigation js--> 
<script src="<?php echo e(url('vendor/mailchimp/jquery.ajaxchimp.js')); ?>"></script> <!-- mail chimp js --> 
<script src="<?php echo e(url('vendor/protip/protip.js')); ?>"></script> <!-- protip js -->
<script src="<?php echo e(url('js/theme.js')); ?>"></script> <!-- custom js -->
<script src="<?php echo e(url('js/FWDUVPlayer.js')); ?>"></script> <!-- player js --> 
<script src="<?php echo e(url('js/jquery.owl-filter.js')); ?>"></script> <!-- filter js --> 
<script src="<?php echo e(url('js/fontawesome-iconpicker.js')); ?>"></script><!-- iconpicker js -->
<script src="<?php echo e(url('js/tinymce.min.js')); ?>"></script>
<script src="<?php echo e(url('js/protip.js')); ?>"></script> <!-- protip js -->
<script src="<?php echo e(url('js/select2.min.js')); ?>"></script> <!-- select2 -->
<script src="<?php echo e(URL::asset('js/pace.min.js')); ?>"></script>
<script src="<?php echo e(url('js/custom-js.js')); ?>"></script>
<script src="<?php echo e(url('js/jquery.lazy.min.js')); ?>"></script>
<script src="<?php echo e(url('js/jquery.lazy.plugins.min.js')); ?>"></script>
<script src="<?php echo e(url('js/jquery-ui.js')); ?>"></script>
<script>var sendurl = <?php echo json_encode(route('autocomplete.fetch'), 15, 512) ?>;</script>
<script src="<?php echo e(url('js/search.js')); ?>"></script>


<script src="<?php echo e(asset('js/share.js')); ?>"></script>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="<?php echo e(url('js/sweetalert2@9.js')); ?>"></script>

<script src="<?php echo e(asset('js/venom-button.min.js')); ?>"></script>

<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>

<script>
  feather.replace()
</script>



<script>
  $(function(){

    "use strict";

    $('.lazy').lazy({

        effect: "fadeIn",
        effectTime: 1000,
        scrollDirection: 'both',
        threshold: 0

    });

  });
</script>


<?php if(isset($gsetting->chat_bubble)): ?>
<script src="<?php echo e($gsetting->chat_bubble); ?>" async></script>
<?php endif; ?>

<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e($gsetting->google_ana); ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo e($gsetting->google_ana); ?>');
</script>


<?php if(isset($gsetting->fb_pixel)): ?>
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '<?php echo e($gsetting->fb_pixel); ?>');
  fbq('track', 'PageView');
</script>

<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
<noscript>
  <img style="display:none" src="https://www.facebook.com/tr?id=<?php echo e($gsetting->fb_pixel); ?>&ev=PageView&noscript=1"/>
</noscript>
<?php endif; ?>


<?php if($gsetting->rightclick=='1'): ?>
	<script>
		(function($) {
  		"use strict";
		    $(function() {
			    $(document).on("contextmenu",function(e) {
			       return false;
			    });
			});
	    })(jQuery);
	</script>
<?php endif; ?>
<?php if($gsetting->inspect=='1'): ?>
    <script>
      	(function($) {
  		"use strict";
	         document.onkeydown = function(e) {
	        if(event.keyCode == 123) {
	           return false;
	        }
	        if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
	           return false;
	        }
	        if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
	           return false;
	        }
	        if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
	           return false;
	        }
	        if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
	           return false;
	        }
	      }
      })(jQuery);
    </script>
<?php endif; ?>



<script>
    $('.prime-cat').on('click',function(){

        var url = $(this).data('url');

        location.href = url;

    });

    $('.sub-cate').on('click',function(){

        var url = $(this).data('url');

        location.href = url;

    });

    $('.child-cate').on('click',function(){

        var url = $(this).data('url');

        location.href = url;

    });
</script>


<?php if($gsetting->wapp_enable=='1'): ?>
<script type="text/javascript">

    $('#myButton').venomButton({
        phone: '<?php echo e($gsetting->wapp_phone); ?>',
        popupMessage: '<?php echo e($gsetting->wapp_popup_msg); ?>',
        message: "",
        showPopup: true,
        position: "<?php echo e($gsetting->wapp_position); ?>",
        linkButton: false,
        showOnIE: false,
        headerTitle: '<?php echo e($gsetting->wapp_title); ?>',
        headerColor: '<?php echo e($gsetting->wapp_color); ?>',
        backgroundColor: '#25d366',
        zIndex: 999999999999,
        buttonImage: '<img src="<?php echo e(asset('images/icons/whatsapp.svg')); ?>" />',
        size:'60px',
    });

</script>
<?php endif; ?>


<?php if(strlen( env('ONESIGNAL_APP_ID',""))>4): ?>

<script  src="<?php echo e(url('js/OneSignalSDK.js')); ?>"></script>

<script>
  var ONESIGNAL_APP_ID = <?php echo json_encode(env('ONESIGNAL_APP_ID'), 15, 512) ?>;
  var USER_ID = '<?php echo e(auth()->user()?auth()->user()->id:""); ?>';
</script>
<script  src="<?php echo e(url('js/onesignal.js')); ?>"></script>

<?php endif; ?>


<?php echo $__env->yieldContent('custom-script'); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/theme/scripts.blade.php ENDPATH**/ ?>