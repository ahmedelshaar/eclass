
<?php $__env->startSection('title', "$blog->heading"); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('meta_tags'); ?>
<?php
    $url =  URL::current();
?>

<meta name="title" content="<?php echo e($blog['heading']); ?>">
<meta name="description" content="<?php echo e(preg_replace("/\r\n|\r|\n/",'',strip_tags(html_entity_decode($blog['detail'])))); ?> ">
<meta name="author" content="elsecolor">
<meta property="og:title" content="<?php echo e($blog['heading']); ?> ">
<meta property="og:url" content="<?php echo e($url); ?>">
<meta property="og:description" content="<?php echo e(preg_replace("/\r\n|\r|\n/",'',strip_tags(html_entity_decode($blog['detail'])))); ?>">
<meta property="og:image" content="<?php echo e(asset('images/blog/'.$blog['image'])); ?>">
<meta itemprop="image" content="<?php echo e(asset('images/blog/'.$blog['image'])); ?>">
<meta property="og:type" content="website">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="<?php echo e(asset('images/blog/'.$blog['image'])); ?>">
<meta property="twitter:title" content="<?php echo e($blog['heading']); ?> ">
<meta property="twitter:description" content="<?php echo e(preg_replace("/\r\n|\r|\n/",'',strip_tags(html_entity_decode($blog['detail'])))); ?>">
<meta name="twitter:site" content="<?php echo e(url()->full()); ?>" />

<link rel="canonical" href="<?php echo e(url()->full()); ?>"/>
<meta name="robots" content="all">
<meta name="keywords" content="<?php echo e($gsetting->meta_data_keyword); ?>">
    

<?php $__env->stopSection(); ?>

<!-- blog-dtl start-->
<section id="blog-dtl" class="blog-dtl-main-block">
    <div class="container">
        <div class="blog-link btm-30"><a href="<?php echo e(route('blog.all')); ?>" title="back to blog"><i class="fa fa-chevron-left"></i><?php echo e(__('frontstaticword.BacktoBlog')); ?></a></div>
        <div class="blog-dtl-block-heading text-center btm-20"><?php echo e($blog->heading); ?></div>
        <div class="blog-dtl-heading-dtl text-center"><?php if($blog->created_at == !NULL): ?><?php echo e(date('jS F Y', strtotime($blog->created_at))); ?><?php endif; ?> By <a href="#" title="post of"><?php echo e($blog->user->fname); ?></a></div>
        <div class="blog-idea text-center btm-30"><a href="#" title="blog-idea"><?php echo e($blog->text); ?></a></div>
        <div class="blog-dtl-img text-center btm-30">
            <img src="<?php echo e(asset('images/blog/'.$blog->image)); ?>" class="img-fluid text-center" alt="blog"> 
        </div>
        <div class="blog-dtl-block">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="btm-20"><?php echo $blog->detail; ?></p>
                </div>
            </div>
        </div>
        
    </div>
</section>
<hr>
<!-- blog-dtl end-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/front/blog/blog_detail.blade.php ENDPATH**/ ?>