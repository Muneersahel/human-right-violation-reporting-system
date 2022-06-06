
<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title push-right-7"><?php echo e(_('New Water Application Payment')); ?></h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h4><strong><?php echo e(_('Dar es salaam Water and Sanitation Suthority')); ?></strong></h4>
                                </div>

                                <div class="mt-2 mb-2">
                                    <img src="<?php echo e(asset('images/dawasa/dawasa_logo.png')); ?>" class="offset-md-5" alt="Dawasa-logo" title="Dawasa-logo" width="115px" height="100px"/>
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

                            <form  class=" form-horizontal mx-auto" role="form" method="post" autocomplete="on" action="<?php echo e(route('payment-store')); ?>" enctype="multipart/form-data" style="width: 85%; border: 1px solid lightslategray">
                                <?php echo csrf_field(); ?>

                                <div class="card-body">
                                   <div><?php echo $__env->make('inc.massages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div> 

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group row">
                                                <label for="transaction_id" class="col-md-5 col-form-label text-md-right"><?php echo e(_ ('Transaction_ID')); ?>:</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control<?php echo e($errors->has('transaction_id') ? ' is-invalid' : ''); ?>" name="transaction_id" id="transaction_id" value="<?php echo e(old('transaction_id')); ?>" required >
                                                    
                                                    <?php if($errors->has('transaction_id')): ?>
                                                    <span class="invalid-feedback">
                                                      <strong><?php echo e($errors->first('transaction_id')); ?></strong>
                                                    </span>
                                                  <?php endif; ?>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="amount" class="col-md-5 col-form-label text-md-right"><?php echo e(_ ('Amount')); ?></label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control<?php echo e($errors->has('amount') ? ' is-invalid' : ''); ?>" name="amount" id="amount" value="<?php echo e(old('amount')); ?>" required >

                                                    <?php if($errors->has('amount')): ?>
                                                    <span class="invalid-feedback">
                                                      <strong><?php echo e($errors->first('amount')); ?></strong>
                                                    </span>
                                                  <?php endif; ?>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="name" class="col-md-5 col-form-label text-md-right"><?php echo e(_ ('Customer Name')); ?></label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" id="name" value="<?php echo e(old('name')); ?>" required >

                                                    <?php if($errors->has('name')): ?>
                                                    <span class="invalid-feedback">
                                                      <strong><?php echo e($errors->first('name')); ?></strong>
                                                    </span>
                                                  <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="mobile_no" class="col-md-5 col-form-label text-md-right" ><?php echo e(_ ('Mobile Number')); ?></label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control<?php echo e($errors->has('mobile_no') ? ' is-invalid' : ''); ?>" name="mobile_no" id="mobile_no" value="<?php echo e(old('mobile_no')); ?>" required >
                                                    
                                                    <?php if($errors->has('mobile_no')): ?>
                                                        <span class="invalid-feedback">
                                                            <strong><?php echo e($errors->first('mobile_no')); ?></strong>
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
<?php echo $__env->make('survey.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\dawasa\resources\views/payment/create.blade.php ENDPATH**/ ?>