
<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title push-right-7"><?php echo e(_('New Water Connection Application')); ?></h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h4><strong><?php echo e(_('Dar es salaam Water and Sanitation Suthority')); ?></strong></h4>
                                </div>

                                <div class="mt-2 mb-2">
                                    <img src="<?php echo e(asset('images/dawasa/dawasa_logo.png')); ?>" class="img-responsive d-block mx-auto" alt="Dawasa-logo" title="Dawasa-logo" width="115px" height="90px"/>
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

                            <form  class=" form-horizontal mx-auto" role="form" method="post" autocomplete="on" action="<?php echo e(route('store-application')); ?>" enctype="multipart/form-data" style="width: 85%; border: 1px solid lightslategray">
                                <?php echo csrf_field(); ?>

                                <div class="card-body">
                                    <?php echo $__env->make('inc.massages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group row">
                                                <label for="application_category" class="col-md-5 col-form-label text-md-right"><?php echo e(_ ('Application category')); ?>:</label>
                                                <div class="col-md-7">
                                                    <select class="form-control<?php echo e($errors->has('application_category') ? ' is-invalid' : ''); ?>" name="application_category" id="application_category" required>
                                                        <option value=""><?php echo e(_ ('Choose application category')); ?></option>
                                                        <option value="New connection"><span class="active"><?php echo e(_ ('New connection')); ?></span></option>
                                                        <option value="Meter separation"><?php echo e(_ ('Meter separation')); ?></option>
                                                        <option value="Meter replacement"><?php echo e(_ ('Meter replacement')); ?></option>
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
                                                <label for="service_required" class="col-md-5 col-form-label text-md-right"><?php echo e(_ ('Service required')); ?></label>
                                                <div class="col-md-7">
                                                    <select class="form-control<?php echo e($errors->has('service_required') ? ' is-invalid' : ''); ?>" name="service_required" id="service_required" required >
                                                        <option value=""> <?php echo e(_ ('Choose service required')); ?> </option>
                                                        <option value="Water"> <?php echo e(_ ('Water')); ?> </option>
                                                        <option value="Sewerage only"> <?php echo e(_ ('Sewerage only')); ?>  </option>
                                                        <option value="Water & Sewerage"> <?php echo e(_ ('Water & Sewerage')); ?>  </option>
                                                        <option value="Others"> <?php echo e(_ ('Others')); ?>  </option>
                                                    </select>

                                                    <?php if($errors->has('service_required')): ?>
                                                    <span class="invalid-feedback">
                                                      <strong><?php echo e($errors->first('service_required')); ?></strong>
                                                    </span>
                                                  <?php endif; ?>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="customer_category" class="col-md-5 col-form-label text-md-right"><?php echo e(_ ('Customer category')); ?></label>
                                                <div class="col-md-7">
                                                    <select class="form-control<?php echo e($errors->has('customer_category') ? ' is-invalid' : ''); ?>" name="customer_category" id="customer_category" required >
                                                        <option value=""><?php echo e(_ ('Choose customer category')); ?></option>
                                                        <option value="Domestic"><?php echo e(_ ('Domestic')); ?></option>
                                                        <option value="Commercial"><?php echo e(_ ('Commercial')); ?></option>
                                                        <option value="Industrial"><?php echo e(_ ('Industrial')); ?></option>
                                                        <option value="Government Institution"><?php echo e(_ ('Government Institution')); ?></option>
                                                        <option value="Other Institution"><?php echo e(_ ('Other Institution')); ?></option>
                                                        <option value="Kiosk"><?php echo e(_ ('Kiosk')); ?></option>
                                                        <option value="Tanker/Dumper"><?php echo e(_ ('Tanker/Dumper')); ?></option>
                                                        <option value="Others"><?php echo e(_ ('Others')); ?></option>
                                                    </select>

                                                    <?php if($errors->has('customer_category')): ?>
                                                    <span class="invalid-feedback">
                                                      <strong><?php echo e($errors->first('customer_category')); ?></strong>
                                                    </span>
                                                  <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="property_ownership" class="col-md-5 col-form-label text-md-right" ><?php echo e(_ ('Property ownership')); ?></label>
                                                <div class="col-md-7">
                                                    <select class="form-control<?php echo e($errors->has('property_ownership') ? ' is-invalid' : ''); ?>" name="property_ownership" id="property_ownership" required >
                                                        <option value="" ><?php echo e(_ ('Choose property ownership')); ?></option>
                                                        <option value="Owner" ><?php echo e(_ ('Owner')); ?></option>
                                                        <option value="Tenant"><?php echo e(_ ('Tenant')); ?></option>
                                                    </select>
                                                    
                                                    <?php if($errors->has('property_ownership')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('property_ownership')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>   
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="property_reference" class="col-md-5 col-form-label text-md-right" ><?php echo e(_ ('Property reference')); ?> <span style="color: red"><strong>*</strong></span></label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control<?php echo e($errors->has('property_reference') ? ' is-invalid' : ''); ?>" name="property_reference" id="property_reference" value="<?php echo e(old('property_reference')); ?>" placeholder="Enter reg_number" required >
            
                                                    <?php if($errors->has('property_reference')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('property_reference')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="nearest_office" class="col-md-5 col-form-label text-md-right"><?php echo e(_('Nearest Dawasa')); ?></label>
                                                <div class="col-md-7">
                                                    <select class="form-control<?php echo e($errors->has('nearest_office') ? ' is-invalid' : ''); ?>" name="nearest_office" id="nearest_office" required >
                                                        <option value=""><?php echo e(_('Choose nearby dawasa office')); ?></option>
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

                                                    <?php if($errors->has('nearest_office')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('nearest_office')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>  
                                            </div>
            
                                            <div class="form-group row">
                                                <label for="application_description" class="col-md-5 col-form-label text-md-right"><?php echo e(_('Application remark')); ?></label>
                                                <div class="col-md-7">
                                                  <textarea rows="3" cols="3" class="form-control<?php echo e($errors->has('application_description') ? ' is-invalid' : ''); ?>" name="application_description" placeholder="<?php echo e(_('Any further information about your application')); ?>" required ><?php echo e(old('application_description')); ?></textarea>
                  
                                                  <?php if($errors->has('application_description')): ?>
                                                    <span class="invalid-feedback">
                                                      <strong><?php echo e($errors->first('application_description')); ?></strong>
                                                    </span>
                                                  <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="float-left">
                                        <a class="btn btn-info" href="<?php echo e(route('customer/home')); ?>">&laquo; <?php echo e(_('Back')); ?></a> 
                                    </div>
    
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-info" ><?php echo e(_('Submit')); ?> &raquo;</button>
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
<?php echo $__env->make('customer.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\dawasa\resources\views/application/create.blade.php ENDPATH**/ ?>