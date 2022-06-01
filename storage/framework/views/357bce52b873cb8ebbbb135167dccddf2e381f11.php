<?php if($cats->courses_count >= 4): ?>
<div class="view-button txt-rgt">
    <a href="<?php echo e(route('category.page',['id' => $cats->id, 'category' => $cats->title])); ?>" class="btn btn-secondary" title="View More"><?php echo e(__('frontstaticword.ViewMore')); ?>

    </a>
</div>
<?php endif; ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/btntab.blade.php ENDPATH**/ ?>