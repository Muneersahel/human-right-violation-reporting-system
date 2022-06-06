
    <?php $__env->startSection('main'); ?>
        <div class="content-wrapper">
            <section class="content">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-info text-white">
                                <h3 class="card-title"><?php echo e(($user->dawasa_office)); ?> Payment Management
                                    <span class="float-right">
                                        <a class="btn btn-info btn-sm" href="<?php echo e(url('survey/create-payment')); ?>"><i class="fa fa-user-plus"></i> Create Payment</a>
                                    </span>
                                </h3>
                            </div>

                            <div class="card-body">
                                <div class="col-lg-12 margin-tb">
                                    <div class="pull-left">
                                        <h4>List of <?php echo e($user->dawasa_office); ?> Payment</h4>
                                    </div>
    
                                    
                                </div>
                            </div><!-- /.card-body -->

                            <div class="justify-content-center col-md-12">
                                <?php if($message = Session::get('success')): ?>
                                    <div class="alert alert-success">

                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>

                                        <strong><?php echo e($message); ?></strong>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="table-responsive col-md-12 col-sm-12 col-lg-12">
                                        <table id="example" class="table table-bordered table-hover display">
                                            <thead>
                                                <tr class="text-left">
                                                    <th>#</th>
                                                    <th>Transaction_Id</th>
                                                    <th>Amount</th>
                                                    <th>Name</th>
                                                    <th>Mobile_no</th>
                                                    <th>Payment_date</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php if(count($payments) < 1): ?>
                                                    <tr>
                                                        <td class="btn-default" colspan="7"><h3 class="text-center">No staff records found<h3></td>
                                                    </tr>
                                                <?php else: ?>
                                                    <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr class="text-justify">
                                                            <td><?php echo e(++$i); ?></td>
                                                            <td><?php echo e(ucfirst($payment->transaction_id)); ?></td>
                                                            <td><?php echo e(ucfirst($payment->amount)); ?></td>
                                                            <td><?php echo e($payment->name); ?></td>
                                                            <td>+<?php echo e($payment->mobile_no); ?></td>
                                                            <td><?php echo e($payment->payment_date); ?></td>
                                                            
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- /.card-body -->

                            <div class="card-footer">
                                <div class="offset-md-10">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <?php $__env->stopSection(); ?>
                                  
<?php echo $__env->make('survey.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\dawasa\resources\views/payment/index.blade.php ENDPATH**/ ?>