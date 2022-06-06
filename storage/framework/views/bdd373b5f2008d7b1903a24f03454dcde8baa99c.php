
<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title"><?php echo e(_('CUSTOMER\'S CONSTRUCTION WORKS')); ?></h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h4><strong><?php echo e(_('Dar es Salaam Water and Sanitation Authority')); ?></strong></h4>
                                </div>

                                <div class="mb-2">
                                    <img src="<?php echo e(asset('images/dawasa/dawasa_logo.png')); ?>" class="mx-auto d-block img-responsive" alt="Dawasa-logo" title="Dawasa-logo" width="115px" height="100px"/>
                                </div>

                                <div>
                                    <h4 class="text-center" ><strong><?php echo e(__('APPLICATION AND AGREEMENT FOR WATER SUPPLY')); ?></strong></h4>
                                </div>

                                <div class="lead pb-1">
                                    <h4 class="text-center" style="text-decoration: underline; text-decoration-color:lightslategray; text-underline-offset: 2px;">
                                        <?php echo e(('CUSTOMER\'S CONSTRUCTION WORKS FOR'.' '.strtoupper($application->service_required).' '.'SERVICES')); ?>

                                </div>
                            </div>

                            <form  class="form-horizontal mx-auto" style="width: 95%; border: 1px solid lightslategray" id="demo-modal" role="form" method="post" autocomplete="on" action="" enctype="multipart/form-data" >
                                <?php echo csrf_field(); ?>

                                <div class="pt-3"><?php echo $__env->make('inc.massages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="service_installed" class="col-md-5 col-form-label text-md-right"><?php echo e(_ ('Service Installed')); ?>:</label>
                                                <div class="col-md-7">
                                                    <select class="form-control<?php echo e($errors->has('service_installed') ? ' is-invalid' : ''); ?>" name="service_installed" id="service_installed" required>
                                                        <option value=""><?php echo e(_ ('Choose service installed')); ?></option>
                                                        <option value="Water"> <?php echo e(_ ('Water')); ?> </option>
                                                        <option value="Sewerage only"> <?php echo e(_ ('Sewerage only')); ?>  </option>
                                                        <option value="Water & Sewerage"> <?php echo e(_ ('Water & Sewerage')); ?>  </option>
                                                        <option value="Others"> <?php echo e(_ ('Others')); ?>  </option>
                                                    </select>

                                                    <?php if($errors->has('service_installed')): ?>
                                                    <span class="invalid-feedback">
                                                    <strong><?php echo e($errors->first('service_installed')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="meter_number" class="col-md-5 col-form-label text-md-right"><?php echo e(_('Meter Number')); ?></label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control<?php echo e($errors->has('meter_number') ? ' is-invalid' : ''); ?>" id="meter_number" name="meter_number" value="<?php echo e(old('meter_number')); ?>" required >

                                                    <?php if($errors->has('meter_number')): ?>
                                                        <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('meter_number')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="meter_digits" class="col-md-5 col-form-label text-md-right"><?php echo e(_('Meter Digits')); ?></label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control<?php echo e($errors->has('meter_digits') ? ' is-invalid' : ''); ?>" id="meter_digits" name="meter_digits" value="<?php echo e(old('meter_digits')); ?>" required >

                                                    <?php if($errors->has('meter_digits')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('meter_digits')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="meter_size" class="col-md-5 col-form-label text-md-right"><?php echo e(_('Meter Size')); ?></label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control<?php echo e($errors->has('meter_size') ? ' is-invalid' : ''); ?>" id="meter_size" name="meter_size" value="<?php echo e(old('meter_size')); ?>" required >

                                                    <?php if($errors->has('meter_size')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('meter_size')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="meter_gps" class="col-md-6 col-form-label text-md-right"><?php echo e(_('Meter coordinate(UTM84)')); ?></label>
                                                <div class="form-group row">
                                                    <label for="meter_latitude" class="col-md-5 col-form-label text-md-right"><?php echo e(_('Latitude')); ?></label>
                                                    <div class="col-md-7">
                                                        <input type="text" class="form-control<?php echo e($errors->has('meter_latitude') ? ' is-invalid' : ''); ?>" name="meter_latitude" id="meter_latitude" value="<?php echo e(old('meter_latitude')); ?>" required >
                                                    
                                                        <?php if($errors->has('meter_latitude')): ?>
                                                            <span class="invalid-feedback">
                                                                <strong><?php echo e($errors->first('meter_latitude')); ?></strong>
                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="meter_longitude" class="col-md-5 col-form-label text-md-right"><?php echo e(_('Longitude')); ?></label>
                                                    <div class="col-md-7">
                                                        <input type="text" class="form-control<?php echo e($errors->has('meter_longitude') ? ' is-invalid' : ''); ?>" id="meter_longitude" name="meter_longitude" value="<?php echo e(old('meter_longitude')); ?>" required >
                                                        
                                                        <?php if($errors->has('meter_longitude')): ?>
                                                            <span class="invalid-feedback">
                                                                <strong><?php echo e($errors->first('meter_longitude')); ?></strong>
                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="meter_consuption" class="col-md-5 col-form-label text-md-right"><?php echo e(_('Estimated Consuption')); ?></label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control<?php echo e($errors->has('meter_consuption') ? ' is-invalid' : ''); ?>" id="meter_consuption" name="meter_consuption" value="<?php echo e(old('meter_consuption')); ?>" required >
    
                                                    <?php if($errors->has('meter_consuption')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('meter_consuption')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="initial_reading" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Initial Reading')); ?></label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control<?php echo e($errors->has('initial_reading') ? ' is-invalid' : ''); ?>" id="initial_reading" name="initial_reading" value="<?php echo e(old('initial_reading')); ?>" required >
    
                                                    <?php if($errors->has('initial_reading')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('initial_reading')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        
                                            <div class="form-group row">
                                                <label for="meter_sequence_no" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Sequence Number')); ?></label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control<?php echo e($errors->has('meter_sequence_no') ? ' is-invalid' : ''); ?>" id="meter_sequence_no" name="meter_sequence_no" value="<?php echo e(old('meter_sequence_no')); ?>" required >

                                                    <?php if($errors->has('meter_sequence_no')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('meter_sequence_no')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                        
                                            <div class="form-group row">
                                                <label for="meter_installer" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Meter Installer name')); ?></label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control<?php echo e($errors->has('meter_installer') ? ' is-invalid' : ''); ?>" id="meter_installer" name="meter_installer" value="<?php echo e(old('meter_installer')); ?>" required >

                                                    <?php if($errors->has('meter_installer')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('meter_installer')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                        
                                            <div class="form-group row" >
                                                <label for="approval_name" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Approved by(name)')); ?></label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control<?php echo e($errors->has('approval_name') ? ' is-invalid' : ''); ?>" id="approval_name" name="approval_name" value="<?php echo e(old('approval_name')); ?>" required/>

                                                    <?php if($errors->has('approval_name')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('approval_name')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="installation_remarks" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Installation Remark')); ?></label>
                                                <div class="col-md-7">
                                                    <textarea rows="5" cols="5" class="form-control<?php echo e($errors->has('installation_remarks') ? ' is-invalid' : ''); ?>" name="installation_remarks" id="installation_remarks" maxlength="150"  placeholder="<?php echo e(_('Any installation remarks')); ?>" required ><?php echo e(old('installation_remarks')); ?></textarea>
                                                    <small id="installation_remarks" class="form-text text-muted">Installation remarks should not exceed 150 chars.</small>

                                                    <?php if($errors->has('installation_remarks')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('installation_remarks')); ?></strong>
                                                    </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                

                                <div class="card-footer">
                                    <div class="float-left">
                                        <a class="btn btn-info" href="<?php echo e(route('constructor-index')); ?>">&laquo; <?php echo e(_('Back')); ?></a> 
                                    </div>
        
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-success" ><?php echo e(_('Construct')); ?> &raquo;</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('construct.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\dawasa\resources\views/construct/create.blade.php ENDPATH**/ ?>