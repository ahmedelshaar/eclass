<!-- This will append in sidebar menu -->
<!-- li start-->
<li class="<?php echo e(Nav::isRoute('course.certificate')); ?>">
    <a href="javaScript:void();">
    <i class="feather icon-file-text text-secondary"></i><span><?php echo e(__('Manage Certificate')); ?></span>
        <i class="feather icon-chevron-right"></i>
    </a>
    <ul class="vertical-submenu">
        
        <li class="<?php echo e(Nav::isRoute('course.certificate')); ?>"><a href="<?php echo e(route('course.certificate')); ?>"><?php echo e(__('Certificate')); ?></a></li>
    
    </ul>
</li>
<!-- li end --><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\Modules/Certificate\Resources/views/admin/sidebar_menu.blade.php ENDPATH**/ ?>