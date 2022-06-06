
<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title"><?php echo e(_('LHRC Staff Registration')); ?></h3>
                        </div>

                        <form  class=" form-horizontal" role="form" method="post" autocomplete="on" action="<?php echo e(route('create-staff')); ?>" enctype="multipart/form-data" >
                            <?php echo csrf_field(); ?>

                            <div class="py-3">
                                <?php echo $__env->make('inc.massages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="first_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('First name')); ?></label>

                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('first_name') ? ' is-invalid' : ''); ?>" name="first_name" value="<?php echo e(old('first_name')); ?>" placeholder="first_name" id="first_name" required >

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
                                                <input type="text" class="form-control<?php echo e($errors->has('middle_name') ? ' is-invalid' : ''); ?>" id="middle_name" name="middle_name" value="<?php echo e(old('middle_name')); ?>" placeholder="middle_name"  required >

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
                                                <input type="text" class="form-control<?php echo e($errors->has('last_name') ? ' is-invalid' : ''); ?>" name="last_name" id="last_name" value="<?php echo e(old('last_name')); ?>" placeholder="last_name" required >

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
                                                <input type="date" class="form-control<?php echo e($errors->has('birth_date') ? ' is-invalid' : ''); ?>" name="birth_date" id="birth_date" value="<?php echo e(old('birth_date')); ?>" required >

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
                                                <select class="form-control<?php echo e($errors->has('gender') ? ' is-invalid' : ''); ?>"  name="gender" id="gender" required >
                                                    <option value=""><?php echo e(__('Choose gender')); ?></option>
                                                    <option id="male" value="Male"><?php echo e(__('Male')); ?></option>
                                                    <option id="female" value="Female"><?php echo e(__('Female')); ?></option>
                                                </select>

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
                                                <select class="form-control<?php echo e($errors->has('tribe') ? ' is-invalid' : ''); ?>"  name="tribe" id="tribe" required >
                                                    <option value=""><?php echo e(__('Choose tribe')); ?></option>
                                                    <option id="Haya" value="Haya"><?php echo e(__('Haya')); ?></option>
                                                    <option id="Sukuma" value="Sukuma"><?php echo e(__('Sukuma')); ?></option>
                                                    <option id="Chaga" value="Chaga"><?php echo e(__('Chaga')); ?></option>
                                                    <option id="Nyamwezi" value="Nyamwezi"><?php echo e(__('Nyamwezi')); ?></option>
                                                </select>

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
                                                <select class="form-control<?php echo e($errors->has('religion') ? ' is-invalid' : ''); ?>"  name="religion" id="religion" required >
                                                    <option value=""><?php echo e(__('Choose religion')); ?></option>
                                                    <option id="Christian" value="Christian"><?php echo e(__('Christian')); ?></option>
                                                    <option id="Muslim" value="Muslim"><?php echo e(__('Muslim')); ?></option>
                                                    <option id="Others" value="Others"><?php echo e(__('Others')); ?></option>
                                                </select>

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
                                                <select class="form-control<?php echo e($errors->has('merital_status') ? ' is-invalid' : ''); ?>"  name="merital_status" id="merital_status" required >
                                                    <option value=""><?php echo e(__('Merital status')); ?></option>
                                                    <option value="Single"><?php echo e(_ ('Single')); ?></option>
                                                    <option value="Marriage"><?php echo e(_ ('Marriage')); ?></option>
                                                    <option value="Divorced"><?php echo e(_ ('Divorced')); ?></option>
                                                    <option value="Widowed"><?php echo e(_ ('Widowed')); ?></option>
                                                    <option value="Others"><?php echo e(_ ('Others')); ?></option>
                                                </select>

                                                <?php if($errors->has('merital_status')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('merital_status')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="reg_no" class="col-md-4 col-form-label text-md-right"><?php echo e(__(' Staff Reg. no')); ?></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('reg_no') ? ' is-invalid' : ''); ?>" name="reg_no" id="reg_no" value="<?php echo e(old('reg_no')); ?>" placeholder="Staff's reg no" required >

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

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="center_code" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Lhrc center')); ?></label>
                                            <div class="col-md-6">
                                                <select class="form-control<?php echo e($errors->has('center_code') ? ' is-invalid' : ''); ?>" name="center_code" id="center_code" required >
                                                    <option value="" ><?php echo e(_('Choose staff\'s center')); ?></option>
                                                    <?php $__currentLoopData = $center; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($code); ?>"><?php echo e($name); ?></option>
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
                                                <select class="form-control<?php echo e($errors->has('region') ? ' is-invalid' : ''); ?>" name="region" id="region" required >
                                                    <option value=""><?php echo e(__('Staff\'s region')); ?></option>
                                                    <option value="Dar es Salaaam" id="Dar es Salaaam"><?php echo e(__('Dar es Salaaam')); ?></option>
                                                    
                                                </select>

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
                                                <select class="form-control<?php echo e($errors->has('district') ? ' is-invalid' : ''); ?>" name="district" id="district" required >
                                                    <option value=""><?php echo e(__('Staff\'s district')); ?></option>
                                                    <option value="Ilala" id="Ilala"><?php echo e(__('Ilala')); ?></option>
                                                    <option value="Kinondoni" id="Kinondoni"><?php echo e(__('Kinondoni')); ?></option>
                                                    <option value="Ubungo" id="Ubungo"><?php echo e(__('Ubungo')); ?></option>
                                                    <option value="Temeke" id="Temeke"><?php echo e(__('Temeke')); ?></option>
                                                    <option value="Kigamboni" id="Kigamboni"><?php echo e(__('Kigamboni')); ?></option>
                                                </select>

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
                                                <input type="text" class="form-control<?php echo e($errors->has('ward') ? ' is-invalid' : ''); ?>" name="ward" value="<?php echo e(old('ward')); ?>" placeholder="Enter ward name" id="ward" required >
                                                

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
                                                <input type="text" class="form-control<?php echo e($errors->has('street') ? ' is-invalid' : ''); ?>" name="street" value="<?php echo e(old('street')); ?>" placeholder="Enter street name" id="street" required >
                                                

                                                <?php if($errors->has('street')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('street')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Mobile number')); ?></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('mobile_no') ? ' is-invalid' : ''); ?>" name="mobile_no" id="mobile_no"  value="<?php echo e(old('mobile_no')); ?>" placeholder="eg 255799123456"  required >

                                                <?php if($errors->has('mobile_no')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('mobile_no')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Email Address')); ?></label>
                                            <div class="col-md-6">
                                                <input type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" id="email" value="<?php echo e(old('email')); ?>" placeholder="eg email@gmail.com" required >

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
                                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" value="<?php echo e(old('password')); ?>" placeholder="Enter password" required >

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
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="<?php echo e(old('password_confirmation')); ?>" placeholder="Repeat password" required >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="location_remark" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Location remarks')); ?></label>
                                            <div class="col-md-6">
                                                <textarea rows="3" cols="0" class="form-control<?php echo e($errors->has('location_remarks') ? ' is-invalid' : ''); ?>" name="location_remarks" placeholder="<?php echo e(_('Any further information about your staff location')); ?>" required maxlength="150"><?php echo e(old('location_remarks')); ?></textarea>
                                                <small id="location_remarks" class="form-text text-muted">Location remarks should not exceed 150 chars.</small>
                    
                                                <?php if($errors->has('location_remarks')): ?>
                                                    <span class="invalid-feedback">
                                                    <strong><?php echo e($errors->first('location_remarks')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="float-left">
                                    <a class="btn btn-info" href="<?php echo e(route('staff-management')); ?>"> &laquo; <?php echo e(_('Back')); ?></a>
                                </div>

                                <div class="float-right">
                                    <button type="submit" class="btn btn-info"><?php echo e(_('Register')); ?> &raquo;</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\human\resources\views/admin/create.blade.php ENDPATH**/ ?>