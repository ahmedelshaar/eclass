<?php $__env->startComponent('mail::message'); ?>
# User Enrolled

<?php echo e($order->user->fname); ?> <?php echo e($order->user->lname); ?> Enrolled in <?php echo e($order->courses->title); ?>


<?php $__env->startComponent('mail::button', ['url' => route('view.order', $order_id)]); ?>
See Order
<?php if (isset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e)): ?>
<?php $component = $__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e; ?>
<?php unset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/email/AdminMailOnOrder.blade.php ENDPATH**/ ?>