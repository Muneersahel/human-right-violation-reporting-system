<div class="form-group row">
    <div class="justify-content-center col-md-11 mx-auto">
        
        <?php if($errors->any()): ?>
            <div class="row justify-content-center alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>

                <div><strong>Whoops!</strong> There were some problems with your inputs:
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="d-inline-block p-2 errorColor"><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>  
            </div>   
        <?php endif; ?>
    </div>

    <div class="justify-content-center col-md-12">
        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong><?php echo e($message); ?></strong>
            </div>
        <?php endif; ?>
    </div> 

    <div class="justify-content-center col-md-12">
        <?php if($message = Session::get('failure')): ?>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong><?php echo e($message); ?></strong>
            </div>
        <?php endif; ?>
    </div> 
</div>
    

<?php /**PATH D:\Project\human\resources\views/inc/massages.blade.php ENDPATH**/ ?>