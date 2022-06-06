
<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title"><?php echo e(_('STAFF INFORMATION UPDATE')); ?></h3>
                        </div>

                        <form  class=" form-horizontal" role="form" method="post" autocomplete="on" action ="<?php echo e(route('update-constructor', $user->id)); ?>" enctype="multipart/form-data" >
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>

                            <div class="card-body">

                                <div> <?php echo $__env->make('inc.massages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>

                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group row">
                                            <label for="first_name" class="col-md-4 col-form-label text-md-right" ><?php echo e(__('First name')); ?></label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control<?php echo e($errors->has('first_name') ? ' is-invalid' : ''); ?>" name="first_name" id="first_name" value="<?php echo e($user->first_name); ?>" disabled >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label  for="middle_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Middle name')); ?></label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control<?php echo e($errors->has('middle_name') ? ' is-invalid' : ''); ?>" id="middle_name" name="middle_name"  value="<?php echo e($user->middle_name); ?>"  disabled >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="last_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Last name')); ?></label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control<?php echo e($errors->has('last_name') ? ' is-invalid' : ''); ?>" name="last_name"  value="<?php echo e($user->last_name); ?>" disabled >
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                                            <label for="birth_date" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Date of birth')); ?></label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control<?php echo e($errors->has('birth_date') ? ' is-invalid' : ''); ?>" name="birth_date" id="birth_date"  value="<?php echo e(Carbon\Carbon::parse($user->birth_date)->isoFormat('LL')); ?>" disabled >
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="gender" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Gender')); ?></label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control<?php echo e($errors->has('gender') ? ' is-invalid' : ''); ?>" name="gender" id="gender"  value="<?php echo e($user->gender); ?>" disabled >
                                            </div>  
                                        </div>

                                        <div class="form-group row">
                                            <label for="role" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Staff Role')); ?></label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control<?php echo e($errors->has('role') ? ' is-invalid' : ''); ?>" name="role" id="role"  value="<?php echo e($user->role.' '.$user->dawasa_office); ?>" disabled >
                                            </div>  
                                        </div>

                                        <div class="form-group row">
                                            <label for="reg_no" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Staff Reg. no')); ?></label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control<?php echo e($errors->has('reg_no') ? ' is-invalid' : ''); ?>" name="reg_no" id="reg_no"  value="<?php echo e($user->reg_no); ?>" disabled >
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6">

                                        <div class="form-group row">
                                            <label for="dawasa_office" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Dawasa office')); ?></label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control<?php echo e($errors->has('dawasa_office') ? ' is-invalid' : ''); ?>" name="dawasa_office" id="dawasa_office"  value="<?php echo e($user->dawasa_office); ?>" disabled >
                                            </div>  
                                        </div>

                                        <div class="form-group row">
                                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Mobile no')); ?></label>
                                            <div class="col-md-7">
                                                <input type="telephone" class="form-control<?php echo e($errors->has('mobile_no') ? ' is-invalid' : ''); ?>" name="mobile_no" id="mobile_no"  value="<?php echo e($user->mobile_no); ?>"  required autofocus >

                                                <?php if($errors->has('mobile_no')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('mobile_no')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail')); ?></label>
                                            <div class="col-md-7">
                                                <input type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" id="email" value="<?php echo e($user->email); ?>" required  >

                                                <?php if($errors->has('email')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                                            <div class="col-md-7">
                                                <input type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" id="password" required>

                                                <?php if($errors->has('password')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                                            <div class="col-md-7">
                                                <input type="password" class="form-control" name="password_confirmation" id="password-confirm" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="user_image" class="col-md-4 col-form-label text-md-right"><?php echo e(__($user->role.' '.'Image')); ?></label>
                                            <div class="col-md-7">
                                                <input type="file" class="form-control<?php echo e($errors->has('user_image') ? ' is-invalid' : ''); ?>" name="user_image" id="user_image" value="<?php echo e(old('user_image')); ?>" style="width: 100%" class="btn btn-default" required >
                                                <small id="user_image" class="form-text text-muted">Passport should have a white or blue background.</small>

                                                <?php if($errors->has('user_image')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('user_image')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="float-left">
                                    <a class="btn btn-info" href="<?php echo e(route('constructor/home')); ?>">&laquo; <?php echo e(_('Back')); ?></a> 
                                </div>

                                <div class="float-right">
                                    <button type="submit" class="btn btn-success" ><?php echo e(_('Update')); ?> &raquo;</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('construct.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\dawasa\resources\views/construct/edit.blade.php ENDPATH**/ ?>