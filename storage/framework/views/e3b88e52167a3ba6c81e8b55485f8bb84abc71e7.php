<?php $__env->startSection('content'); ?>
    <div class="error-page text-center">
        <h1 class="headline text-info">419</h1>
        <div class="error-content">
            <h2 class="text-warning"><i class="fa fa-warning"></i> Oops! Page Expired.</h2>
            <p><h2>The page has been Expired</h2></p>
        </div>
        <div class="user-home">
            <a class="btn btn-info" href="<?php echo e(url('/')); ?>"><?php echo e(__('Back to HomePage')); ?></a></button>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\human\resources\views/errors/419.blade.php ENDPATH**/ ?>