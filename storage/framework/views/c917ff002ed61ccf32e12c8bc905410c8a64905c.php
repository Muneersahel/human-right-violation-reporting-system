<div class="form-group row">
    <div class="justify-content-center col-md-11 mx-auto">
        <?php if(count($errors) > 0): ?>
            <div class="row justify-content-center alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>

                <div><strong>Whoops!</strong> There were some problems with your inputs:
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>  
            </div>   
        <?php endif; ?>

        <?php if($message = Session::get('success')): ?>
            <div class="content-wrapper alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong><?php echo e($message); ?></strong>
            </div>
        <?php endif; ?>
    </div>
</div>
    

<?php /**PATH D:\Movies\dawasa\resources\views/inc/massages.blade.php ENDPATH**/ ?>