
<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title push-right-7"><?php echo e(_('SmS Report')); ?></h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h4><strong><?php echo e(_('Legal and Human Rights Centre')); ?></strong></h4>
                                    <img src="<?php echo e(asset('images/human/lhrc_logo.jpg')); ?>" class="img-responsive d-block mx-auto" alt="lhrc-logo" title="lhrc-logo" width="90px" height="90px"/>
                                    <h4 class="text-center" ><strong><?php echo e(_('Human Right Violations Reporting System')); ?></strong></h4>
                                    <h4 class="text-center" style="text-decoration: underline; text-decoration-color:lightslategray; text-underline-offset: 2px;" > <?php echo e(_('LHRC RIGHT VIOLANCE VICTIM SMS REPORING FORM')); ?></h4>
                                </div>
                            </div>

                            <form  class=" form-horizontal mx-auto" role="form" method="post" autocomplete="on" action="<?php echo e(route('store-sms')); ?>" enctype="multipart/form-data" style="width: 85%; border: 1px solid lightslategray">
                                <?php echo csrf_field(); ?>

                                <div class="card-body">
                                    <?php echo $__env->make('inc.massages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    <div class="row">
                                        <div class="col-md-12"><h4 class="card-title push-right-7 h3">Incident Sms</h4></div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for="sms" class="col-md-2 col-form-label text-md-right"><?php echo e(_('Message')); ?></label>
                                                <div class="col-md-10">
                                                    <textarea rows="3" cols="5" class="form-control<?php echo e($errors->has('sms') ? ' is-invalid' : ''); ?>" name="sms" maxlength="250" placeholder="<?php echo e(_('Please explain in brief on how the incidents happen...')); ?>" required ><?php echo e(old('sms')); ?></textarea>
                                                    <small id="sms" class="form-text text-muted">Please do not exceed 250 characters.</small>

                                                    <?php if($errors->has('sms')): ?>
                                                        <span class="invalid-feedback">
                                                        <strong><?php echo e($errors->first('sms')); ?></strong>
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
<?php echo $__env->make('customer.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\human\resources\views/sms/create.blade.php ENDPATH**/ ?>