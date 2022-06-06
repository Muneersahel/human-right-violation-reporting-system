
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
                            <h4><strong><?php echo e(_('Dar es Salaam Water and Sanitation Authority')); ?></strong></h4>
                        </div>

                        <div class="mt-2 mb-2">
                            <img src="<?php echo e(asset('images/dawasa/dawasa_logo.png')); ?>" class="offset-md-5" alt="Dawasa-logo" title="Dawasa-logo" width="100px" height="70px"/>
                        </div>

                        <div>
                            <h4 class="text-center" ><strong><?php echo e(_('APPLICATION AND AGREEMENT FOR WATER SUPPLY')); ?></strong></h4>
                        </div>

                        <div class="lead">
                            <h4 class="text-center" style="text-decoration: underline; text-decoration-color:lightslategray; text-underline-offset: 2px;" > 
                              <?php echo e(_('MAGOMENI, KINONDONI SOUTH-DAR ES SALAAM AND COAST ZONE')); ?>

                            </h4>
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
                            <input type="text" class="form-control<?php echo e($errors->has('first_name') ? ' is-invalid' : ''); ?>" id="first_name" name="first_name" value="<?php echo e(old('first_name')); ?>" required >

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
                              <input type="text" class="form-control<?php echo e($errors->has('middle_name') ? ' is-invalid' : ''); ?>" id="middle_name" name="middle_name" value="<?php echo e(old('middle_name')); ?>"   required>
                            
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
                              <input type="text" class="form-control<?php echo e($errors->has('last_name') ? ' is-invalid' : ''); ?>" name="last_name" id="last_name" value="<?php echo e(old('last_name')); ?>" required >
                              
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
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="identity_type" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Identity type')); ?></label>
                            <div class="col-md-7">
                              <select class="form-control<?php echo e($errors->has('identity_type') ? ' is-invalid' : ''); ?>" data-val="true" data-val-number="The field Permit Class must be a number." data-val-required="The Permit Class field is required." name="identity_type" id="identity_type" required >
                                <option value="" ><?php echo e(_('Choose identity type')); ?></option>
                                <option value="National" id="national"><?php echo e(_('National')); ?></option>
                                <option value="Voter" id="voter"><?php echo e(_('Voter')); ?></option>
                                <option value="Passport" id="passport"><?php echo e(_('Passport')); ?></option>
                                <option value="Diving licence" id="driving licence"><?php echo e(_('Driving licence')); ?></option>
                                <option value="Others" id="others"><?php echo e(_('Others')); ?></option>
                              </select>
                            </div>  
                          </div>

                          <div class="form-group row">
                            <label for="identity_no" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Identity card no')); ?></label>
                            <div class="col-md-7">
                              <input type="text" class="form-control<?php echo e($errors->has('identity_no') ? ' is-invalid' : ''); ?>" name="identity_no" value="<?php echo e(old('identity_no')); ?>" required >

                              <?php if($errors->has('identity_no')): ?>
                                <span class="invalid-feedback">
                                  <strong><?php echo e($errors->first('identity_no')); ?></strong>
                                </span>
                              <?php endif; ?>
                            </div>
                          </div>

                          

                          <div class="form-group row">
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Mobile no')); ?></label>
                            <div class="col-md-7">
                              <input type="text" class="form-control<?php echo e($errors->has('mobile_no') ? ' is-invalid' : ''); ?>" name="mobile_no" id="mobile_no" value="<?php echo e(old('mobile_no')); ?>" required >

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
                            <label for="dawasa_office" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Dawasa office')); ?></label>
                            <div class="col-md-7">
                              <select class="form-control<?php echo e($errors->has('dawasa_office') ? ' is-invalid' : ''); ?>" name="dawasa_office" id="dawasa_office" required >
                                <option value="" ><?php echo e(_('Choose nearby office')); ?></option>
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

                        <div class="col-md-6">
                          <div class="form-group row">
                              <label for="physical_name" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Physical name')); ?></label>
                              <div class="col-md-7">
                                <input type="text" class="form-control<?php echo e($errors->has('physical_name') ? ' is-invalid' : ''); ?>" name="physical_name" id="physical_name" value="<?php echo e(old('physical_name')); ?>" required >

                                <?php if($errors->has('physical_name')): ?>
                                  <span class="invalid-feedback">
                                      <strong><?php echo e($errors->first('physical_name')); ?></strong>
                                  </span>
                                <?php endif; ?>
                              </div>
                            </div>
        
                            <div class="form-group row">
                              <label for="area_name" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Ward/Area name')); ?></label>
                              <div class="col-md-7">
                                <input type="text" class="form-control<?php echo e($errors->has('area_name') ? ' is-invalid' : ''); ?>" name="area_name" id="area_name" value="<?php echo e(old('area_name')); ?>" required >

                                <?php if($errors->has('area_name')): ?>
                                  <span class="invalid-feedback">
                                      <strong><?php echo e($errors->first('area_name')); ?></strong>
                                  </span>
                                <?php endif; ?>
                              </div>
                            </div>
        
                            <div class="form-group row">
                              <label for="street_name" class="col-md-4 col-form-label text-md-right" ><?php echo e(_('Street/Road name')); ?></label>
                              <div class="col-md-7">
                                <input type="text" class="form-control<?php echo e($errors->has('street_name') ? ' is-invalid' : ''); ?>" name="street_name" id="street_name" value="<?php echo e(old('street_name')); ?>" required >

                                <?php if($errors->has('street_name')): ?>
                                  <span class="invalid-feedback">
                                      <strong><?php echo e($errors->first('street_name')); ?></strong>
                                  </span>
                                <?php endif; ?>
                              </div>
                            </div>
        
                            <div class="form-group row">
                              <label for="block_no" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Block number')); ?></label>
                              <div class="col-md-7">
                                  <input type="text" class="form-control<?php echo e($errors->has('block_no') ? ' is-invalid' : ''); ?>" placeholder="eg.Kitalu" name="block_no" id="block_no" value="<?php echo e(old('block_no')); ?>" required >

                                  <?php if($errors->has('block_no')): ?>
                                  <span class="invalid-feedback">
                                      <strong><?php echo e($errors->first('block_no')); ?></strong>
                                  </span>
                                <?php endif; ?>
                              </div>
                            </div>
        
                            <div class="form-group row">    
                                <label for="plot_no" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Plot number')); ?></label>
                                <div class="col-md-7">
                                  <input type="text" class="form-control<?php echo e($errors->has('plot_no') ? ' is-invalid' : ''); ?>" name="plot_no" id="plot_no" value="<?php echo e(old('plot_no')); ?>" placeholder="eg.361" required >
                                  
                                  <?php if($errors->has('plot_no')): ?>
                                  <span class="invalid-feedback">
                                      <strong><?php echo e($errors->first('plot_no')); ?></strong>
                                  </span>
                                <?php endif; ?>
                                </div>
                            </div>
        
                            <div class="form-group row">
                              <label for="house_no" class="col-md-4 col-form-label text-md-right" ><?php echo e(_('House number')); ?></label>
                              <div class="col-md-7">
                                  <input type="text" class="form-control<?php echo e($errors->has('house_no') ? ' is-invalid' : ''); ?>" name="house_no" id="house_no" value="<?php echo e(old('house_no')); ?>" placeholder="eg.361" required >
                                  
                                  <?php if($errors->has('house_no')): ?>
                                    <span class="invalid-feedback">
                                      <strong><?php echo e($errors->first('house_no')); ?></strong>
                                    </span>
                                  <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                              <div class="col-md-7">
                                  <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

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
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                              </div>
                          </div>

                            <div class="form-group row">
                              <label for="location_remark" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Location remark')); ?></label>
                              <div class="col-md-7">
                                <textarea rows="5" cols="0" class="form-control<?php echo e($errors->has('location_remark') ? ' is-invalid' : ''); ?>" name="location_remark" placeholder="<?php echo e(_('Any further information about your location')); ?>" required maxlength="150"><?php echo e(old('location_remark')); ?></textarea>
                                <small id="user_image" class="form-text text-muted">Location remarks should not exceed 150 chars.</small>

                                <?php if($errors->has('location_remark')): ?>
                                  <span class="invalid-feedback">
                                    <strong><?php echo e($errors->first('location_remark')); ?></strong>
                                  </span>
                                <?php endif; ?>
                              </div>
                            </div>
                        </div>
                      </div>
                  </div>

                  <div class="card-footer">
                    <div class="float-left mb-2">
                      <a class="btn btn-info" href="<?php echo e(route('login')); ?>" >&laquo;&nbsp;<?php echo e(_('Back')); ?></a>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Movies\dawasa\resources\views/customer/create.blade.php ENDPATH**/ ?>