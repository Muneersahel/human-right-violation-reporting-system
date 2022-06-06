
<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title"><?php echo e(_('VICTIM\'S INCIDENT VALIDATION')); ?></h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h4><strong><?php echo e(_('Legal and Human Rights Centre')); ?></strong></h4>
                                    <img src="<?php echo e(asset('images/human/lhrc_logo.jpg')); ?>" class="d-block mx-auto img-responsive" alt="lhrc-logo" title="lhrc-logo" width="80px" height="80px"/>
                                    <h4 class="text-center" ><strong><?php echo e(_('Human Right Violations Reporting System')); ?></strong></h4>
                                    <h4 class="text-center" style="text-decoration: underline; text-decoration-color:lightslategray; text-underline-offset: 2px;" >
                                        <?php echo e(('VICTIM\'S INCIDENT VALIDATION FOR'.' '.strtoupper($incident->right_violated).' '.'VIOLANCE')); ?>

                                    </h4>
                                </div>
                            </div>

                            <form  class="form-horizontal mx-auto" role="form" method="post" autocomplete="on" action="" enctype="multipart/form-data" style="width: 85%; border: 1px solid lightslategray" >
                                <?php echo csrf_field(); ?>

                                <div class="mt-3"><?php echo $__env->make('inc.massages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
                                
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="assistance_required" class="col-md-5 col-form-label text-md-right"><?php echo e(_ ('LHRC Assistance required')); ?></label>
                                                <div class="col-md-6">
                                                    <select class="form-control<?php echo e($errors->has('assistance_required') ? ' is-invalid' : ''); ?>" name="assistance_required" id="assistance_required" required>
                                                        <option value=""><?php echo e(_ ('Choose advice given')); ?></option>
                                                        <option value="Guidance&Counseling"><span class="active"><?php echo e(_ ('Guidance & Counseling')); ?></span></option>
                                                        <option value="Legal Justice"><?php echo e(_ ('Legal Justice')); ?></option>
                                                        <option value="Human Support"><?php echo e(_ ('Human Support')); ?></option>
                                                        <option value="Others"><?php echo e(_('Others')); ?></option>
                                                    </select>

                                                    <?php if($errors->has('assistance_required')): ?>
                                                    <span class="invalid-feedback">
                                                    <strong><?php echo e($errors->first('assistance_required')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="follow_up" class="col-md-5 col-form-label text-md-right"><?php echo e(_('Follow up')); ?></label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control<?php echo e($errors->has('follow_up') ? ' is-invalid' : ''); ?>" id="follow_up" name="follow_up" value="<?php echo e(old('follow_up')); ?>" required >

                                                    <?php if($errors->has('follow_up')): ?>
                                                        <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('follow_up')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="Ways" class="col-md-5 col-form-label text-md-right"><?php echo e(_('Findings & Way Forward')); ?></label>
                                                <div class="form-group row">
                                                    <label for="way_findings" class="col-md-5 col-form-label text-md-right"><?php echo e(_('Findings')); ?></label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control<?php echo e($errors->has('way_findings') ? ' is-invalid' : ''); ?>" name="way_findings" id="way_findings" value="<?php echo e(old('way_findings')); ?>" required >
                                                    
                                                        <?php if($errors->has('way_findings')): ?>
                                                            <span class="invalid-feedback">
                                                                <strong><?php echo e($errors->first('way_findings')); ?></strong>
                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="way_forward" class="col-md-5 col-form-label text-md-right"><?php echo e(_('Forward')); ?></label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control<?php echo e($errors->has('way_forward') ? ' is-invalid' : ''); ?>" id="way_forward" name="way_forward" value="<?php echo e(old('way_forward')); ?>" required >
                                                        
                                                        <?php if($errors->has('way_forward')): ?>
                                                            <span class="invalid-feedback">
                                                                <strong><?php echo e($errors->first('way_forward')); ?></strong>
                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="validation_status" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Incident validation')); ?></label>
                                                <div class="col-md-6">
                                                    <select class="form-control<?php echo e($errors->has('validation_status') ? ' is-invalid' : ''); ?>"  name="validation_status" id="validation_status" required >
                                                        <option value=""><?php echo e(_('Choose incident validation')); ?></option>
                                                        <option value="Valid" id="Valid"><?php echo e(_('Valid')); ?></option>
                                                        <option value="Invalid" id="Invalid"><?php echo e(_('Invalid')); ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                        
                                            <div class="form-group row">
                                                <label for="operation" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Operation')); ?></label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control<?php echo e($errors->has('operation') ? ' is-invalid' : ''); ?>" id="operation" name="operation" value="<?php echo e(old('operation')); ?>" required >

                                                    <?php if($errors->has('operation')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('operation')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                        
                                            

                                            <div class="form-group row">
                                                <label for="validation_remarks" class="col-md-4 col-form-label text-md-right"><?php echo e(_('Validation Remarks')); ?></label>
                                                <div class="col-md-6">
                                                    <textarea rows="4" cols="5" class="form-control<?php echo e($errors->has('validation_remarks') ? ' is-invalid' : ''); ?>" name="validation_remarks" id="validation_remarks" maxlength="150"  placeholder="<?php echo e(_('Remarks if any:')); ?>" required ><?php echo e(old('validation_remarks')); ?></textarea>
                                                    <small class="form-text text-muted"><?php echo e(_('Validation remarks should not exceed 150 chars.')); ?></small>

                                                    <?php if($errors->has('validation_remarks')): ?>
                                                    <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('validation_remarks')); ?></strong>
                                                    </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="float-left">
                                        <a class="btn btn-info" href="<?php echo e(route('index-incident')); ?>">&laquo; <?php echo e(_('Back')); ?></a> 
                                    </div>
        
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-success" ><?php echo e(_('Validate')); ?> &raquo;</button>
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
<?php echo $__env->make('monitor.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\human\resources\views/monitor/create.blade.php ENDPATH**/ ?>