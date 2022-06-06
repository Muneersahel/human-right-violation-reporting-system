<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title"><?php echo e(_('CENTER INFORMATION EDIT')); ?></h3>
                        </div>

                        <form  class=" form-horizontal" role="form" method="post" autocomplete="on" action="<?php echo e(route('update-center', $center->id)); ?>" enctype="multipart/form-data" >
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>

                            <div class="mt-3"><?php echo $__env->make('inc.massages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 justify-content-center">
                                        <div class="form-group row">
                                            <label for="code" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Center code')); ?></label>

                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('code') ? ' is-invalid' : ''); ?>" name="code" value="<?php echo e($center->code); ?>" id="code" required aria-required="true" >

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
                                                <input type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" id="name" value="<?php echo e($center->name); ?>" required aria-required="true" >

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
                                                <input type="text" class="form-control<?php echo e($errors->has('director') ? ' is-invalid' : ''); ?>" name="director" id="director" value="<?php echo e($center->director); ?>" required aria-required="true" >

                                                <?php if($errors->has('director')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('director')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="address" class="col-md-4 col-form-label text-md-right"><?php echo e(__(' center Address')); ?></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('address') ? ' is-invalid' : ''); ?>" name="address" id="address"  value="<?php echo e($center->address); ?>" required aria-required="true" >

                                                <?php if($errors->has('address')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('address')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right"><?php echo e(__('center Mobile#')); ?></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('mobile_no') ? ' is-invalid' : ''); ?>" name="mobile_no" id="mobile_no"  value="<?php echo e($center->mobile_no); ?>" required autofocus >

                                                <?php if($errors->has('mobile_no')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('mobile_no')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label  for="fax_no" class="col-md-4 col-form-label text-md-right"><?php echo e(__('center Fax#')); ?></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control<?php echo e($errors->has('fax_no') ? ' is-invalid' : ''); ?>" id="fax_no" name="fax_no" value="<?php echo e($center->fax_no); ?>" required aria-required="true">

                                                <?php if($errors->has('fax_no')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('fax_no')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('center Email')); ?></label>
                                            <div class="col-md-6">
                                                <input type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" id="email" value="<?php echo e($center->email); ?>" required aria-required="true"  >

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
                                                    <?php if(isset($center->region)): ?>
                                                        <option selected value="<?php echo e($center->region); ?>"><?php echo e(__($center->region)); ?></option>
                                                    <?php else: ?>
                                                        <?php $__currentLoopData = $center; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($region->region); ?>"><?php echo e(__($region->region)); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
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
                                                    <?php if(isset($center->district)): ?>
                                                        <option selected value="<?php echo e($center->district); ?>"><?php echo e(__($center->district)); ?></option>
                                                    <?php else: ?>
                                                        <?php $__currentLoopData = $center; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($district->district); ?>"><?php echo e(__($district->district)); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
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
                                                <input type="text" class="form-control<?php echo e($errors->has('ward') ? ' is-invalid' : ''); ?>" name="ward" value="<?php echo e($center->ward); ?>"id="ward" required >
                                                

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
                                                <input type="text" class="form-control<?php echo e($errors->has('street') ? ' is-invalid' : ''); ?>" name="street" value="<?php echo e($center->street); ?>" id="street" required >
                                                

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
                                                <textarea rows="4" cols="0" class="form-control<?php echo e($errors->has('remarks') ? ' is-invalid' : ''); ?>" name="remarks" required maxlength="150"><?php echo e($center->remarks); ?></textarea>
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
                                    <button type="submit" class="btn btn-info"><?php echo e(_('Edit')); ?> &raquo; </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\human\resources\views/center/edit.blade.php ENDPATH**/ ?>