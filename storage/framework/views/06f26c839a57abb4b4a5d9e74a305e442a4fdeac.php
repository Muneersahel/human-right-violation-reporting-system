<?php $__env->startSection('content'); ?>
    <div class="error-page text-center">
        <h1 class="headline text-info">503</h1>
        <div class="error-content">
            <h2 class="text-warning"><i class="fa fa-warning"></i> Oops! Service Unavailable.</h2>
            <p><h2>Service is Currently Unavailable </h2></p>
        </div>
        <div class="user-home">
            <a class="btn btn-info" href="<?php echo e(route('login')); ?>"><?php echo e(__('Back to HomePage')); ?></a></button>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\human\resources\views/errors/503.blade.php ENDPATH**/ ?>