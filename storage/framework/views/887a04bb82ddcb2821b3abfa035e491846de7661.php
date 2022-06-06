
<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title"><?php echo e(_('STAFF INFORMATION UPDATE')); ?></h3>
                        </div>

                        <form  class=" form-horizontal" role="form" method="post" autocomplete="on" action ="<?php echo e(route('update-staff', $user->id)); ?>" enctype="multipart/form-data" >
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>

                            <div class="card-body">

                                <div class="mt-3"><?php echo $__env->make('inc.massages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>

                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group row">
                                            <label for="first_name" class="col-md-4 col-form-label text-md-right" ><?php echo e(__('First name')); ?></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('first_name') ? ' is-invalid' : ''); ?>" name="first_name" id="first_name" value="<?php echo e($user->first_name); ?>" required >

                                                <?php if($errors->has('first_name')): ?>
                                                    <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('first_name')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label  for="middle_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Middle name')); ?></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('middle_name') ? ' is-invalid' : ''); ?>" id="middle_name" name="middle_name"  value="<?php echo e($user->middle_name); ?>"  required >

                                                <?php if($errors->has('middle_name')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('middle_name')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="last_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Last name')); ?></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('last_name') ? ' is-invalid' : ''); ?>" name="last_name" id="last_name" value="<?php echo e($user->last_name); ?>" required >
                                                
                                                <?php if($errors->has('last_name')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('last_name')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="birth_date" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Date of birth')); ?></label>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control<?php echo e($errors->has('birth_date') ? ' is-invalid' : ''); ?>" name="birth_date" id="birth_date"  value="<?php echo e($user->birth_date); ?>" required >

                                                <?php if($errors->has('birth_date')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('birth_date')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="gender" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Gender')); ?></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('gender') ? ' is-invalid' : ''); ?>" name="gender" id="gender"  value="<?php echo e($user->gender); ?>" required >

                                                <?php if($errors->has('gender')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('gender')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>  
                                        </div>

                                        <div class="form-group row">
                                            <label for="tribe" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Tribe')); ?></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('tribe') ? ' is-invalid' : ''); ?>" name="tribe" id="tribe"  value="<?php echo e($user->tribe); ?>" required >

                                                <?php if($errors->has('tribe')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('tribe')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="religion" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Religion')); ?></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('religion') ? ' is-invalid' : ''); ?>" name="religion" id="religion"  value="<?php echo e($user->religion); ?>" required >

                                                <?php if($errors->has('religion')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('religion')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="merital_status" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Merital Status')); ?></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('merital_status') ? ' is-invalid' : ''); ?>" name="merital_status" id="merital_status"  value="<?php echo e($user->merital_status); ?>" required >

                                                <?php if($errors->has('merital_status')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('merital_status')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="reg_no" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Staff Reg. no')); ?></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('reg_no') ? ' is-invalid' : ''); ?>" name="reg_no" id="reg_no"  value="<?php echo e($user->reg_no); ?>" required >

                                                <?php if($errors->has('reg_no')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('reg_no')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="role" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Staff Role')); ?></label>
                                            <div class="col-md-6">
                                                <select class="form-control<?php echo e($errors->has('role') ? ' is-invalid' : ''); ?>" name="role" id="role" required >
                                                    <option value=""><?php echo e(__('Staff\'s role')); ?></option>
                                                    <option value="Administrator" id="VC"><?php echo e(__('Administrator')); ?></option>
                                                    <option value="HRM" id="HRM"><?php echo e(__('HRM')); ?></option>
                                                    <option value="Operator" id="Operator"><?php echo e(__('Operator')); ?></option>
                                                    <option value="Zonal Leader" id="Zonal Leader"><?php echo e(__('Zonal Leader')); ?></option>
                                                    <option value="Journalist" id="Journalist"><?php echo e(__('Journalist')); ?></option>
                                                </select>

                                                <?php if($errors->has('role')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('role')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="center_code" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Lhrc center')); ?></label>
                                            <div class="col-md-6">
                                                <select class="form-control<?php echo e($errors->has('center_code') ? ' is-invalid' : ''); ?>" name="center_code" id="center_code" required >
                                                    <option value="" ><?php echo e(_('Choose staff\'s center')); ?></option>
                                                    <?php $__currentLoopData = $center; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>

                                                <?php if($errors->has('center_code')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('center_code')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>  
                                        </div>

                                        <div class="form-group row">
                                            <label for="region" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Region')); ?></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('region') ? ' is-invalid' : ''); ?>" name="region" id="region"  value="<?php echo e($user->region); ?>" required >
                                                

                                                <?php if($errors->has('region')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('region')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="district" class="col-md-4 col-form-label text-md-right"><?php echo e(__('District')); ?></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('district') ? ' is-invalid' : ''); ?>" name="district" id="district"  value="<?php echo e($user->district); ?>" required >
                                                

                                                <?php if($errors->has('district')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('district')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="ward" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Ward/Area')); ?></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('ward') ? ' is-invalid' : ''); ?>" name="ward" value="<?php echo e($user->ward); ?>" id="ward" required >
                                            
                                                <?php if($errors->has('ward')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('ward')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="street" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Street/Road')); ?></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('street') ? ' is-invalid' : ''); ?>" name="street" value="<?php echo e($user->street); ?>" id="street" required >

                                                <?php if($errors->has('street')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('street')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Mobile no')); ?></label>
                                            <div class="col-md-6">
                                                <input type="tel" class="form-control<?php echo e($errors->has('mobile_no') ? ' is-invalid' : ''); ?>" name="mobile_no" id="mobile_no"  value="<?php echo e($user->mobile_no); ?>"  required autofocus >

                                                <?php if($errors->has('mobile_no')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('mobile_no')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail')); ?></label>
                                            <div class="col-md-6">
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

                                            <div class="col-md-6">
                                                <input type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" id="password" placeholder="Enter password" required>

                                                <?php if($errors->has('password')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                                            <div class="col-md-6">
                                                <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="Repeat password" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="user_image" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Staff Passport')); ?></label>
                                            <div class="col-md-6">
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
                                    <a class="btn btn-info" href="<?php echo e(route('staff-management')); ?>">&laquo; <?php echo e(_('Back')); ?></a> 
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
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\human\resources\views/admin/edit.blade.php ENDPATH**/ ?>