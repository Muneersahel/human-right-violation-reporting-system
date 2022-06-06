<?php $__env->startSection('content'); ?>
    <div class="error-page text-center">
        <h2 class="headline text-info">404</h2>
        <div class="error-content">
            <h2><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h2>
            <p><h2> We could not find the page you were looking for.</h2></p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\dawasa\resources\views/errors/404.blade.php ENDPATH**/ ?>