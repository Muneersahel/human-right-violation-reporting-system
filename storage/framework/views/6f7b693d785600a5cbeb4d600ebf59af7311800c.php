    
        <?php $__env->startSection('content'); ?>
            <div class="container">
                <div class="content-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card">

                                <div class="card-header bg-info text-white" ><?php echo e(__('User Login')); ?></div>

                                <div class="card-body">
                                    

                                    <form method="POST" action="<?php echo e(route('login')); ?>" autocomplete="on">
                                        <?php echo csrf_field(); ?>

                                        <div class="form-group row">
                                            <div class="justify-content-center col-md-10 mx-auto">
                                                <?php if(Session::has('failure')): ?>
                                                    <div class="alert alert-danger" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                        <strong> <?php echo e(Session::get('failure')); ?></strong>
                                                    </div>
                                                <?php endif; ?>

                                                <?php if(Session::has('success')): ?>
                                                    <div class="alert alert-success" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                        <strong> <?php echo e(Session::get('success')); ?></strong>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('User Email')); ?></label>
                                            <div class="col-md-6">
                                                <input id="email" type="text" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                                                

                                                <?php if($errors->has('email')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required />
                                                

                                                <?php if($errors->has('password')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> <?php echo e(__('Remember Me')); ?>

                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-info">
                                                    <?php echo e(__('Login')); ?>

                                                </button>

                                                <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                                    <?php echo e(__('Forgot Your Password?')); ?>

                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).on('click', '.toggle-password', function() {
                    $(this).toggleClass("fa-eye fa-eye-slash");
                    var input = $("#password");
                    input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
                });
            </script>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Movies\dawasa\resources\views/auth/login.blade.php ENDPATH**/ ?>