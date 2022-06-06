<?php $__env->startSection('content'); ?>
    <div class="error-page text-center">
        <h1 class="headline text-info">404</h1>
        <div class="error-content">
            <h2 class="text-warning"><i class="fa fa-warning"></i> Oops! Page not found.</h2>
            <p><h2>That page can’t be found.</h2></p>
        </div>
        <div class="user-home">
            
            <a class="btn btn-info" href="javascript:;" onclick = "history.back() "><i class="fa fa fa-angle-left" aria-hidden="true"></i>&nbsp;<?php echo e(__('Back to Previous')); ?></a></button>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\human\resources\views/errors/404.blade.php ENDPATH**/ ?>