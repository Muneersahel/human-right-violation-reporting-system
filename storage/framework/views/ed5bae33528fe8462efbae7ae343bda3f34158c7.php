
<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title"><?php echo e(_('Dawasa New Staff Registration')); ?></h3>
                        </div>

                        <form  class=" form-horizontal" role="form" method="post" autocomplete="on" action="<?php echo e(route('create-staff')); ?>" enctype="multipart/form-data" >
                            <?php echo csrf_field(); ?>

                            <div class="mt-3">
                                <?php echo $__env->make('inc.massages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="first_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('First name')); ?></label>

                                            <div class="col-md-7">
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
                                            <div class="col-md-7">
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
                                            <div class="col-md-7">
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
                                            <div class="col-md-7">
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
                                            <div class="col-md-7">
                                                <select class="form-control<?php echo e($errors->has('gender') ? ' is-invalid' : ''); ?>"  name="gender" id="gender" required >
                                                    <option value=""><?php echo e(__('Gender')); ?></option>
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
                                            <label for="reg_no" class="col-md-4 col-form-label text-md-right"><?php echo e(__(' Staff Reg. no')); ?></label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control<?php echo e($errors->has('reg_no') ? ' is-invalid' : ''); ?>" name="reg_no" id="reg_no" value="<?php echo e(old('reg_no')); ?>" placeholder="Staff's reg no" required >

                                                <?php if($errors->has('reg_no')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('reg_no')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group row">
                                            <label for="dawasa_office" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Dawasa office')); ?></label>
                                            <div class="col-md-7">
                                                <select class="form-control<?php echo e($errors->has('dawasa_office') ? ' is-invalid' : ''); ?>" name="dawasa_office" id="dawasa_office" required >
                                                    <option value="" ><?php echo e(_('Choose staff\'s center')); ?></option>
                                                    <option value="Bagamoyo" id="Bagamoyo"><?php echo e(_('Bagamoyo')); ?></option>
                                                    <option value="Ilala" id="Ilala"><?php echo e(_('Ilala')); ?></option>
                                                    <option value="Kawe" id="Kawe"><?php echo e(_('Kawe')); ?></option>
                                                    <option value="Kibaha" id="Kibaha"><?php echo e(_('Kibaha')); ?></option>
                                                    <option value="Kinondoni" id="Kinondoni"><?php echo e(_('Kinondoni')); ?></option>
                                                    <option value="Magomeni" id="Magomeni"><?php echo e(_('Magomeni')); ?></option>
                                                    <option value="Tabata" id="Tabata"><?php echo e(_('Tabata')); ?></option>
                                                    <option value="Tegete" id="Tegete"><?php echo e(_('Tegete')); ?></option>
                                                    <option value="Temeke" id="Temeke"><?php echo e(_('Temeke')); ?></option>
                                                    <option value="Ubungo" id="Ubungo"><?php echo e(_('Ubungo')); ?></option>
                                                    <option value="Others" id="others"><?php echo e(_('Others')); ?></option>
                                                </select>

                                                <?php if($errors->has('dawasa_office')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('dawasa_office')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>  
                                        </div>

                                        <div class="form-group row">
                                            <label for="role" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Staff Role')); ?></label>
                                            <div class="col-md-7">
                                                <select class="form-control<?php echo e($errors->has('role') ? ' is-invalid' : ''); ?>" name="role" id="role" required >
                                                    <option value=""><?php echo e(__('Staff\'s Role')); ?></option>
                                                    <option value="Surveyor" id="VC"><?php echo e(__('Surveyor')); ?></option>
                                                    <option value="Constructor" id="DVCA"><?php echo e(__('Constructor')); ?></option>
                                                    <option value="Admin" id="Admin"><?php echo e(__('Administrator')); ?></option>
                                                </select>

                                                <?php if($errors->has('role')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('role')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Mobile number')); ?></label>
                                            <div class="col-md-7">
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
                                            <div class="col-md-7">
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

                                            <div class="col-md-7">
                                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" value="<?php echo e(old('password')); ?>"  required >

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
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="<?php echo e(old('password_confirmation')); ?>"  required >
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
                                    <button type="submit" class="btn btn-info"><i class="fa fa-user-plus"></i> <?php echo e(_('Register')); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\dawasa\resources\views/admin/create.blade.php ENDPATH**/ ?>