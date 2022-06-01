
<?php $__env->startSection('title', 'Flash Deals'); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- about-home start -->
<section id="wishlist-home" class="wishlist-home-main-block">
    <div class="container">
        <h1 class="wishlist-home-heading text-white"><?php echo e(__('Flash Deals')); ?></h1>
    </div>
</section> 


<?php if($deals!= NULL): ?>
<section id="learning-courses" class="learning-courses-main-block">
    <div class="container">
        <div class="row">
        	<?php $__currentLoopData = $deals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($deal->status == '1'): ?>
        	
                <div class="col-lg-3 col-sm-6 col-md-4">
                    <div class="view-block">
                        <div class="view-img">
                            <?php if($deal['background_image'] !== NULL && $deal['background_image'] !== ''): ?>
                                <a href="<?php echo e(route('deal.items',$deal->id)); ?>"><img src="<?php echo e(asset('images/flashdeals/'.$deal->background_image)); ?>" class="img-fluid" alt="course">
                            <?php else: ?>
                                <a href="<?php echo e(route('deal.items',$deal->id)); ?>"><img src="<?php echo e(Avatar::create($deal->title)->toBase64()); ?>" class="img-fluid" alt="course">
                            <?php endif; ?>
                            </a>
                        </div>
                        
                        <div class="view-dtl">
                            <div class="view-heading btm-10"><a href="<?php echo e(route('deal.items', $deal->id)); ?>"><?php echo e($deal->title); ?></a></div>
                            <p class="btm-10"><a href="#"><?php echo e(__('Sale Start Date')); ?>: <?php echo e(date('jS F Y', strtotime($deal->start_date))); ?></a></p>

                            <p class="btm-10"><a href="#"><?php echo e(__('Sale End Date')); ?>: <?php echo e(date('jS F Y', strtotime($deal->end_date))); ?></a></p>
                          
                            
                        </div>
                    </div>
                    <div class="wishlist-action">
                        <div class="row">
                        	<div class="col-md-12 col-12">
                        		<div class="flash-button">
                               		<a href="<?php echo e(route('deal.items',$deal->id)); ?>" class="btn btn-primary"><?php echo e(__('View Deal')); ?></a>
                               	</div>
                              
                        	</div>
                        	
                        </div>
                    </div>
                </div>
           
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    
</section>
<?php else: ?>
    <section id="search-block" class="search-main-block search-block-no-result text-center">
        <div class="container">
            <div class="no-result-courses btm-10"><?php echo e(__('No Deals Found')); ?></div>
            <div class="recommendation-btn text-white text-center">
                <a href="<?php echo e(url('/')); ?>" class="btn btn-primary" title="search"><b><?php echo e(__('frontstaticword.Browse')); ?></b></a>
            </div> 
        </div>
    </section>
<?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\eclass42n\eclass\resources\views/front/flashdeal/deals.blade.php ENDPATH**/ ?>