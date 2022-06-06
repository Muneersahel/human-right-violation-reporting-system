
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">LHRC Center Registration</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <form action="<?php echo e(route('store-center')); ?>" method="post" enctype="multipart/form-data" class="form-horizontal" autocomplete="on">
        <?php echo csrf_field(); ?>

        <div class="mt-3"><?php echo $__env->make('inc.massages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>

        <div class="modal-body">
            <section class="content">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="code" class="col-md-3 col-form-label text-md-right"><?php echo e(__('Code')); ?></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control<?php echo e($errors->has('code') ? ' is-invalid' : ''); ?>" name="code" id="code" value="<?php echo e(old('code')); ?>" placeholder="eg.HQ" pattern="[a-zA-Z]*" title="Code only contains the first letters..." required >

                                        <?php if($errors->has('code')): ?>
                                            <span class="invalid-feedback">
                                                <strong><?php echo e($errors->first('code')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-3 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" id="name" value="<?php echo e(old('name')); ?>" placeholder="Enter center name" pattern="[a-zA-Z\s]*" title="Center name should only contain letters" required>

                                        <?php if($errors->has('name')): ?>
                                            <span class="invalid-feedback">
                                                <strong><?php echo e($errors->first('name')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="director" class="col-md-3 col-form-label text-md-right"><?php echo e(__('Director')); ?></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control<?php echo e($errors->has('director') ? ' is-invalid' : ''); ?>" name="director" id="director" value="<?php echo e(old('director')); ?>" placeholder="Enter director name" pattern="[a-zA-Z\s]*" title="Director name should only contain letters" required >

                                        <?php if($errors->has('director')): ?>
                                            <span class="invalid-feedback">
                                                <strong><?php echo e($errors->first('director')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address" class="col-md-3 col-form-label text-md-right"><?php echo e(__('Address#')); ?></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control<?php echo e($errors->has('address') ? ' is-invalid' : ''); ?>" name="address" id="address"  value="<?php echo e(old('address')); ?>" placeholder="Enter postal number" pattern="[1-9](\d+)" title="Postal number should only be digits" required >

                                        <?php if($errors->has('address')): ?>
                                            <span class="invalid-feedback">
                                                <strong><?php echo e($errors->first('address')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="mobile_no" class="col-md-3 col-form-label text-md-right"><?php echo e(__('Mobile#')); ?></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control<?php echo e($errors->has('mobile_no') ? ' is-invalid' : ''); ?>" name="mobile_no" id="mobile_no"  value="<?php echo e(old('mobile_no')); ?>" placeholder="eg. 255222773038" pattern="255[1-9](\d{8})" title="Mobile number should be 12 digits starts 255.." required>

                                        <?php if($errors->has('mobile_no')): ?>
                                            <span class="invalid-feedback">
                                                <strong><?php echo e($errors->first('mobile_no')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label  for="fax_no" class="col-md-3 col-form-label text-md-right"><?php echo e(__('Fax#')); ?></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control<?php echo e($errors->has('fax_no') ? ' is-invalid' : ''); ?>" name="fax_no" id="fax_no" value="<?php echo e(old('fax_no')); ?>" placeholder="eg. 255222773048" pattern="255[1-9](\d{8})" title="Fax number should be 12 digits starts 255.." required>

                                        <?php if($errors->has('fax_no')): ?>
                                            <span class="invalid-feedback">
                                                <strong><?php echo e($errors->first('fax_no')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label text-md-right"><?php echo e(__('Email')); ?></label>
                                    <div class="col-md-9">
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
                                    <label for="region" class="col-md-3 col-form-label text-md-right"><?php echo e(__('Region')); ?></label>
                                    <div class="col-md-9">
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
                                    <label for="district" class="col-md-3 col-form-label text-md-right"><?php echo e(__('District')); ?></label>
                                    <div class="col-md-9">
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
                                    <label for="ward" class="col-md-3 col-form-label text-md-right"><?php echo e(__('Ward')); ?></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control<?php echo e($errors->has('ward') ? ' is-invalid' : ''); ?>" name="ward" value="<?php echo e(old('ward')); ?>" placeholder="eg.Kijitonyama" id="ward" required >
                                        
                                        <?php if($errors->has('ward')): ?>
                                            <span class="invalid-feedback">
                                                <strong><?php echo e($errors->first('ward')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="street" class="col-md-3 col-form-label text-md-right"><?php echo e(__('Street')); ?></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control<?php echo e($errors->has('street') ? ' is-invalid' : ''); ?>" name="street" value="<?php echo e(old('street')); ?>" placeholder="eg.Science" id="street" required >

                                        <?php if($errors->has('street')): ?>
                                            <span class="invalid-feedback">
                                                <strong><?php echo e($errors->first('street')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="remarks" class="col-md-3 col-form-label text-md-right"><?php echo e(_('Remark')); ?></label>
                                    
                                    <div class="col-md-9">
                                        <textarea rows="5" cols="0" class="form-control<?php echo e($errors->has('remarks') ? ' is-invalid' : ''); ?>" name="remarks" placeholder="<?php echo e(_('Any further information about the center')); ?>" required maxlength="150"><?php echo e(old('remarks')); ?></textarea>
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
                </div>
            </section>
        </div>

        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(_('Cancel')); ?></button>
            <button type="submit" class="btn btn-primary"><?php echo e(_('Create')); ?></button>
        </div>
    </form>
</div>
<?php /**PATH H:\human\resources\views/center/create.blade.php ENDPATH**/ ?>