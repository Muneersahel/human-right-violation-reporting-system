
<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title"><?php echo e(_('CUSTOMER\'S SURVEYED DATA')); ?></h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h4><strong><?php echo e(_('Dar es Salaam Water and Sanitation Authority')); ?></strong></h4>
                                </div>

                                <div class="mb-2">
                                    <img src="<?php echo e(asset('images/dawasa/dawasa_logo.png')); ?>" class="img-responsive d-block mx-auto" alt="Dawasa-logo" title="Dawasa-logo" width="115px" height="100px"/>
                                </div>

                                <div>
                                    <h4 class="text-center" ><strong><?php echo e(__('APPLICATION AND AGREEMENT FOR WATER SUPPLY')); ?></strong></h4>
                                </div>

                                <div class="lead">
                                    <h4 class="text-center" style="text-decoration: underline; text-decoration-color:lightslategray; text-underline-offset: 2px;">
                                        <?php echo e(('CUSTOMER\'S SURVEY INFORMATION FOR'.' '.strtoupper($application->service_required).' '.'SERVICES')); ?>

                                </div>
                            </div>
                        

                            <form  class="form-horizontal mx-auto" role="form" method="post" autocomplete="on" action="" enctype="multipart/form-data" style="width: 95%; border: 1px solid lightslategray" >
                                <?php echo csrf_field(); ?>

                                <div class="mt-3"><?php echo $__env->make('inc.massages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
                                
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="application_category" class="col-md-4 col-form-label text-md-right"><?php echo e(_ ('Job tittle')); ?>:</label>
                                                <div class="col-md-7">
                                                    <select class="form-control<?php echo e($errors->has('application_category') ? ' is-invalid' : ''); ?>" name="application_category" id="application_category" required>
                                                        <option value=""><?php echo e(_ ('Choose job tittle')); ?></option>
                                                        <option value="New Connection"><span class="active"><?php echo e(_ ('New connection')); ?></span></option>
                                                        <option value="Meter Separation"><?php echo e(_ ('Meter separation')); ?></option>
                                                        <option value="Meter Replacement"><?php echo e(_ ('Meter replacement')); ?></option>
                                                        <option value="Others"><?php echo e(_('Others')); ?></option>
                                                    </select>

                                                    <?php if($errors->has('application_category')): ?>
                                                    <span class="invalid-feedback">
                                                    <strong><?php echo e($errors->first('application_category')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="caba_code" class="col-md-4 col-form-label text-md-right"><?php echo e(_('CA/BA code')); ?></label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control<?php echo e($errors->has('caba_code') ? ' is-invalid' : ''); ?>" id="caba_code" name="caba_code" value="<?php echo e(old('caba_code')); ?>" required >

                                                    <?php if($errors->has('caba_code')): ?>
                                                        <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('caba_code')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="form-group row" >
                                                <label for="tariff" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Tariff')); ?></label>
                                                <div class="col-md-7">
                                                    <select class="form-control<?php echo e($errors->has('tariff') ? ' is-invalid' : ''); ?>"  name="tariff" id="tariff" required >
                                                        <option value=""><?php echo e(_('Choose tariff category')); ?></option>
                                                        <option value="MD" id="MD"><?php echo e(_('MD')); ?></option>
                                                        <option value="MC" id="MC"><?php echo e(_('MC')); ?></option>
                                                        <option value="MIS" id="MIS"><?php echo e(_('MIS')); ?></option>
                                                        <option value="MID" id="MID"><?php echo e(_('MID')); ?></option>
                                                        <option value="K" id="K"><?php echo e(_('K')); ?></option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="distance_main" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Distance from Main(m)')); ?></label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control<?php echo e($errors->has('distance_main') ? ' is-invalid' : ''); ?>" id="distance_main" name="distance_main" value="<?php echo e(old('distance_main')); ?>" required >

                                                    <?php if($errors->has('distance_main')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('distance_main')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="trench_depth" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Trench depth(m)')); ?></label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control<?php echo e($errors->has('trench_depth') ? ' is-invalid' : ''); ?>" id="trench_depth" name="trench_depth" value="<?php echo e(old('trench_depth')); ?>" required >

                                                    <?php if($errors->has('trench_depth')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('trench_depth')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="gps" class="col-md-4 col-form-label text-md-right"><?php echo e(_('GPS coordinates')); ?></label>
                                                <div class="form-group row">
                                                    <label for="tapping_latitude" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Latitude')); ?></label>
                                                    <div class="col-md-7">
                                                        <input type="text" class="form-control<?php echo e($errors->has('tapping_latitude') ? ' is-invalid' : ''); ?>" name="tapping_latitude" id="tapping_latitude" value="<?php echo e(old('tapping_latitude')); ?>" required >
                                                    
                                                        <?php if($errors->has('tapping_latitude')): ?>
                                                            <span class="invalid-feedback">
                                                                <strong><?php echo e($errors->first('tapping_latitude')); ?></strong>
                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="tapping_longitude" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Longitude')); ?></label>
                                                    <div class="col-md-7">
                                                        <input type="text" class="form-control<?php echo e($errors->has('tapping_longitude') ? ' is-invalid' : ''); ?>" id="tapping_longitude" name="tapping_longitude" value="<?php echo e(old('tapping_longitude')); ?>" required >
                                                        
                                                        <?php if($errors->has('tapping_longitude')): ?>
                                                            <span class="invalid-feedback">
                                                                <strong><?php echo e($errors->first('tapping_longitude')); ?></strong>
                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="infrastructure" class="col-md-5 col-form-label text-md-right"><?php echo e(_('Existing Dawasa')); ?></label>
                                                <div class="col-md-7">
                                                    <select class="form-control<?php echo e($errors->has('infrastructure') ? ' is-invalid' : ''); ?>"  name="infrastructure" id="infrastructure" required >
                                                        <option value=""><?php echo e(_('Is there existing Dawasa connection?')); ?></option>
                                                        <option value="YES" id="YES"><?php echo e(_('YES')); ?></option>
                                                        <option value="NO" id="NO"><?php echo e(_('NO')); ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row " id="account_number" style="display: none">
                                                <label for="account_number" class="col-md-5 col-form-label text-md-right"><?php echo e(_('Registered A/C#')); ?></label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control<?php echo e($errors->has('account_number') ? ' is-invalid' : ''); ?>" id="account_number" name="account_number" placeholder="Account Number" value="<?php echo e(old('account_number')); ?>" >

                                                    <?php if($errors->has('account_number')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('account_number')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        
                                            <div class="form-group row">
                                                <label for="service_line_cost" class="col-md-5 col-form-label text-md-right"><?php echo e(_('Total service cost')); ?></label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control<?php echo e($errors->has('service_line_cost') ? ' is-invalid' : ''); ?>" id="service_line_cost" name="service_line_cost" value="<?php echo e(old('service_line_cost')); ?>" required >

                                                    <?php if($errors->has('service_line_cost')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('service_line_cost')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                        
                                            <div class="form-group row">
                                                <label for="surveyor_name" class="col-md-5 col-form-label text-md-right"><?php echo e(_('Surveyor name')); ?></label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control<?php echo e($errors->has('surveyor_name') ? ' is-invalid' : ''); ?>" id="surveyor_name" name="surveyor_name" value="<?php echo e(old('surveyor_name')); ?>" required >

                                                    <?php if($errors->has('surveyor_name')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('surveyor_name')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                        
                                            <div class="form-group row" >
                                                <label for="approval_name" class="col-md-5 col-form-label text-md-right"><?php echo e(_('Approved by(name)')); ?></label>
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
                                                <label for="survey_remarks" class="col-md-5 col-form-label text-md-right"><?php echo e(_('Survey Remarks')); ?></label>
                                                <div class="col-md-7">
                                                    <textarea rows="5" cols="5" class="form-control<?php echo e($errors->has('survey_remarks') ? ' is-invalid' : ''); ?>" name="survey_remarks" id="survey_remarks" maxlength="150"  placeholder="<?php echo e(_('Remarks if any:')); ?>" required ><?php echo e(old('survey_remarks')); ?></textarea>
                                                    <small class="form-text text-muted"><?php echo e(_('Survey remarks should not exceed 150 chars.')); ?></small>

                                                    <?php if($errors->has('survey_remarks')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('survey_remarks')); ?></strong>
                                                    </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for="site_layout" class="col-md-2 col-form-label text-md-right"><?php echo e(_('Site Layout Sketch')); ?></label>
                                                <div class="col-md-10">
                                                    <input type="file" name="site_layout" id="site_layout" value="<?php echo e(old('site_layout')); ?>" style="width:100%" class="btn btn-default" aria-describedby="site_layout" required >
                                                    <small class="form-text text-muted"><?php echo e(_('Please upload a valid site layout sketch file. Size of the file should not be more than 1MB.')); ?></small>
                                                    
                                                    <?php if($errors->has('site_layout')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('site_layout')); ?></strong>
                                                    </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="float-left">
                                        <a class="btn btn-info" href="<?php echo e(route('survey-index')); ?>">&laquo; <?php echo e(_('Back')); ?></a> 
                                    </div>
        
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-success" ><?php echo e(_('Survey')); ?> &raquo;</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        $('#infrastructure').on('change',function(){
         var infrastructure = $(this).val();

         if(infrastructure === 'YES'){
            document.getElementById('account_number').style.display = "";
         }

         else{
           document.getElementById('account_number').style.display = "none";
         }
       });

      </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('survey.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\dawasa\resources\views/survey/create.blade.php ENDPATH**/ ?>