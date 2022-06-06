
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="content-wrapper">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white" ><?php echo e(__('Customer Registration Form')); ?></div>
                  
                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h4><strong><?php echo e(_('Legal and Human Rights Centre')); ?></strong></h4>
                                    <img src="<?php echo e(asset('images/app/lhrc_logo.jpg')); ?>" class="d-block mx-auto img-responsive" alt="lhrc-logo" title="lhrc-logo" width="70px" height="70px"/>
                                    <h4 class="text-center" ><strong><?php echo e(_('Human Right Violations Reporting System')); ?></strong></h4>
                                    <h4 class="text-center" style="text-decoration: underline; text-decoration-color:lightslategray; text-underline-offset: 2px;" > <?php echo e(_('APPLICATION AND AGREEMENT FOR MEMBERSHIP')); ?></h4>
                                </div>
                            </div>

                            <form  class="form-horizontal" role="form" method="post" autocomplete="on" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data" >
                                <?php echo csrf_field(); ?>
                                <?php echo $__env->make('inc.massages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="first_name" class="col-md-4 col-form-label text-md-right"><?php echo e(_('First name')); ?></label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control<?php echo e($errors->has('first_name') ? ' is-invalid' : ''); ?>" id="first_name" name="first_name" value="<?php echo e(old('first_name')); ?>" placeholder="first_name" required >
                    
                                                <?php if($errors->has('first_name')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('first_name')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label  for="middle_name" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Middle name')); ?></label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control<?php echo e($errors->has('middle_name') ? ' is-invalid' : ''); ?>" id="middle_name" name="middle_name" value="<?php echo e(old('middle_name')); ?>" placeholder="middle_name" required>
                                                
                                                <?php if($errors->has('middle_name')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('middle_name')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="last_name" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Last name')); ?></label>
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
                                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Email Address')); ?></label>
                                            <div class="col-md-7">
                                                <input type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" id="email" value="<?php echo e(old('email')); ?>" placeholder="E-Mail Address" required>
                
                                                <?php if($errors->has('email')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Mobile no')); ?></label>
                                            <div class="col-md-7">
                                                <input type="tel" class="form-control<?php echo e($errors->has('mobile_no') ? ' is-invalid' : ''); ?>" name="mobile_no" id="mobile_no" value="<?php echo e(old('mobile_no')); ?>" placeholder="enter 12 digits number" required >
                
                                                <?php if($errors->has('mobile_no')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('mobile_no')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="gender" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Gender')); ?></label>
                                            <div class="col-md-7">
                                                <select class="form-control<?php echo e($errors->has('gender') ? ' is-invalid' : ''); ?>"  name="gender" id="gender" required >
                                                    <option value=""><?php echo e(_('Choose gender')); ?></option>
                                                    <option value="Male"><?php echo e(_('Male')); ?></option>
                                                    <option value="Female"><?php echo e(_('Female')); ?></option>
                                                </select>
                                            </div>  
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="birth_date" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Date of birth')); ?></label>
                                            <div class="col-md-7">
                                                <input type="date" class="form-control<?php echo e($errors->has('birth_date') ? ' is-invalid' : ''); ?>" name="birth_date" id="birth_date" value="<?php echo e(old('birth_date')); ?>" required>
                    
                                                <?php if($errors->has('birth_date')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('birth_date')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="tribe" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Tribe')); ?></label>
                                            <div class="col-md-7">
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
                                            <div class="col-md-7">
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
                                            <div class="col-md-7">
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
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="region" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Region')); ?></label>
                                            <div class="col-md-7">
                                                <select class="form-control<?php echo e($errors->has('region') ? ' is-invalid' : ''); ?>" name="region" id="region" required >
                                                    <option value=""><?php echo e(__('Choose region')); ?></option>
                                                    <option value="Dar es Salaaam" id="Dar es Salaaam"><span class="active"><?php echo e(__('Dar es Salaaam')); ?></span></option>
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
                                            <div class="col-md-7">
                                                <select class="form-control<?php echo e($errors->has('district') ? ' is-invalid' : ''); ?>" name="district" id="district" required >
                                                    <option value=""><?php echo e(__('Choose district')); ?></option>
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
                                            <div class="col-md-7">
                                                <input type="text" class="form-control<?php echo e($errors->has('ward') ? ' is-invalid' : ''); ?>" name="ward" id="ward" value="<?php echo e(old('ward')); ?>" placeholder="Enter ward" required >
                
                                                
                
                                                <?php if($errors->has('ward')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('ward')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="street" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Street/Village')); ?></label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control<?php echo e($errors->has('street') ? ' is-invalid' : ''); ?>" name="street" id="street" value="<?php echo e(old('street')); ?>" placeholder="Enter street" required>
                                                    
                                                <?php if($errors->has('street')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('street')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>
                                            <div class="col-md-7">
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
                                            <div class="col-md-7">
                                                <input type="password" class="form-control<?php echo e($errors->has('password-confirm') ? ' is-invalid' : ''); ?>" name="password_confirmation" id="password-confirm"  placeholder="Repeat password" required>

                                                <?php if($errors->has('password-confirm')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('password-confirm')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="location_remark" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Location remarks')); ?></label>
                                            <div class="col-md-7">
                                                <textarea rows="3" cols="0" class="form-control<?php echo e($errors->has('location_remarks') ? ' is-invalid' : ''); ?>" name="location_remarks" placeholder="<?php echo e(_('Any further information about your location')); ?>" required maxlength="150"><?php echo e(old('location_remarks')); ?></textarea>
                                                <small id="location_remarks" class="form-text text-muted">Location remarks should not exceed 150 chars.</small>
                    
                                                <?php if($errors->has('location_remarks')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('location_remarks')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="user_image" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Customer Image')); ?></label>
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
                                <div class="float-left mb-2">
                                    <a class="btn btn-info" href="javascript:;" onclick = "history.back() ">&laquo;&nbsp;<?php echo e(_('Back')); ?></a>
                                </div>
                                <div class="float-right mb-2">
                                    <button type="submit" class="btn btn-success" ><?php echo e(_('Register')); ?>&nbsp;&raquo;</button>
                                </div>
                            </div>  
                        </form>
                    </div>
                </div>
            </div>
         </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/munir/Documents/HR/human/resources/views/customer/create.blade.php ENDPATH**/ ?>