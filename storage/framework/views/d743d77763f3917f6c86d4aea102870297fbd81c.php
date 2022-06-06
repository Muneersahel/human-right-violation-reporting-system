<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title"><?php echo e(_('LHRC CENTER REGISTRATION')); ?></h3>
                        </div>
                        
                        <form  class=" form-horizontal" role="form" method="post" autocomplete="on" action="create-center" enctype="multipart/form-data" >
                            <?php echo csrf_field(); ?>

                            <div class="mt-3">
                                <?php echo $__env->make('inc.massages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="code" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Center Code')); ?></label>

                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('code') ? ' is-invalid' : ''); ?>" name="code" value="<?php echo e(old('code')); ?>" placeholder="eg.HQ" id="code" required >

                                                <?php if($errors->has('code')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('code')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Center Name')); ?></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" id="name" value="<?php echo e(old('name')); ?>" placeholder="eg. Justice Lugakingira House" required>

                                                <?php if($errors->has('name')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="director" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Center Director')); ?></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('director') ? ' is-invalid' : ''); ?>" name="director" id="director" value="<?php echo e(old('director')); ?>" placeholder="eg. Ms. Anna Aloys Henga" required >

                                                <?php if($errors->has('director')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('director')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="address" class="col-md-4 col-form-label text-md-right"><?php echo e(__(' Center Address')); ?></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('address') ? ' is-invalid' : ''); ?>" name="address" id="address"  value="<?php echo e(old('address')); ?>" placeholder="eg. P.O.Box 75254, Kijitonyama" required >

                                                <?php if($errors->has('address')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('address')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Center Mobile#')); ?></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('mobile_no') ? ' is-invalid' : ''); ?>" name="mobile_no" id="mobile_no"  value="<?php echo e(old('mobile_no')); ?>" placeholder="eg. 255 22 2773038" required autofocus >

                                                <?php if($errors->has('mobile_no')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('mobile_no')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label  for="fax_no" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Center Fax#')); ?></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('fax_no') ? ' is-invalid' : ''); ?>" id="fax_no" name="fax_no" value="<?php echo e(old('fax_no')); ?>" placeholder="eg. 255 22 2773048" required>

                                                <?php if($errors->has('fax_no')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('fax_no')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Center Email')); ?></label>
                                            <div class="col-md-6">
                                                <input type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" id="email" value="<?php echo e(old('email')); ?>" placeholder="eg. info@lhrc.org.tz" required  >

                                                <?php if($errors->has('email')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="region" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Region')); ?></label>
                                            <div class="col-md-6">
                                                <select class="form-control<?php echo e($errors->has('region') ? ' is-invalid' : ''); ?>" name="region" id="region" required >
                                                    <option value=""><?php echo e(__('Center\'s region')); ?></option>
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
                                                    <option value=""><?php echo e(__('Center\'s district')); ?></option>
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
                                                <input type="text" class="form-control<?php echo e($errors->has('ward') ? ' is-invalid' : ''); ?>" name="ward" value="<?php echo e(old('ward')); ?>" placeholder="eg.Kijitonyama" id="ward" required >
                                                

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
                                                <input type="text" class="form-control<?php echo e($errors->has('street') ? ' is-invalid' : ''); ?>" name="street" value="<?php echo e(old('street')); ?>" placeholder="eg.Science" id="street" required >
                                                

                                                <?php if($errors->has('street')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('street')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="remarks" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Center remark')); ?></label>
                                            
                                            <div class="col-md-6">
                                                <textarea rows="4" cols="0" class="form-control<?php echo e($errors->has('remarks') ? ' is-invalid' : ''); ?>" name="remarks" placeholder="<?php echo e(_('Any further information about your LHRC center')); ?>" required maxlength="150"><?php echo e(old('remarks')); ?></textarea>
                                                <small id="remarks" class="form-text text-muted">Center remarks should not exceed 150 chars.</small>
              
                                                <?php if($errors->has('remarks')): ?>
                                                    <span class="invalid-feedback">
                                                    <strong><?php echo e($errors->first('remarks')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="float-left">
                                    <a class="btn btn-info" href="<?php echo e(route('center-management')); ?>"> &laquo; <?php echo e(_('Back')); ?></a>
                                </div>

                                <div class="float-right">
                                    <button type="submit" class="btn btn-info"><?php echo e(_('Create')); ?>&nbsp;&raquo;</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\human\resources\views/center/create.blade.php ENDPATH**/ ?>