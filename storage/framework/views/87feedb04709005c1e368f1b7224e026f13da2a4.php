<?php $__env->startComponent('mail::message'); ?>
# Order Confirmed
Hi <?php echo e($order->user->fname); ?> !!
<br>
You are successfully enrolled in a course.
<br>
You can see invoice below.



<?php $__env->startComponent('mail::button', ['url' => route('invoice.show', $order_id)]); ?>
Invoice
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
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/email/orderslip.blade.php ENDPATH**/ ?>