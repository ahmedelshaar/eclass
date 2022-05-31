<!-- This will append in sidebar menu -->
<!-- li start-->
<li class="{{ Nav::isRoute('course.certificate') }}">
    <a href="javaScript:void();">
    <i class="feather icon-file-text text-secondary"></i><span>{{ __('Manage Certificate') }}</span>
        <i class="feather icon-chevron-right"></i>
    </a>
    <ul class="vertical-submenu">
        
        <li class="{{ Nav::isRoute('course.certificate') }}"><a href="{{route('course.certificate')}}">{{ __('Certificate') }}</a></li>
    
    </ul>
</li>
<!-- li end -->