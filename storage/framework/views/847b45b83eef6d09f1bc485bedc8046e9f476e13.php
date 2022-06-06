
    <?php $__env->startSection('main'); ?>
        <div class="content-wrapper">
            <section class="content">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-info text-white">
                                <h3 class="card-title"><?php echo ('CUSTOMER PAYMENT INFORMATION'); ?>

                                    <span class="float-right">
                                        <?php if(isset($application)): ?>
                                            <a class="btn btn-info btn-sm" href="<?php echo e(url('customer/confirm-payment')); ?>"><i class="fa fa-user-plus"></i> confirm Payment</a> 
                                        <?php endif; ?>
                                    </span>
                                </h3>
                            </div>

                            <div class="justify-content-center col-md-12 mt-3">
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
                                                    <th>Amount_Paid</th>
                                                    <th>Customer_Name</th>
                                                    <th>Mobile_Number</th>
                                                    <th>Payment_Date</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php if(isset($payment)): ?>
                                                    <tr class="text-justify">
                                                        <td><?php echo e(++$i); ?></td>
                                                        <td><?php echo e($payment->transaction_id); ?></td>
                                                        <td><?php echo e(number_format($payment->amount, 2, '.', ',')); ?></td>
                                                        <td><?php echo e(strtoupper($payment->name)); ?></td>
                                                        <td>+<?php echo e($payment->mobile_no); ?></td>
                                                        <td><?php echo e(Carbon\Carbon::parse($payment->payment_date)->isoFormat('LLLL')); ?></td>
                                                    </tr>
                                                <?php else: ?>
                                                    <tr>
                                                        <td class="btn-default" colspan="6"><h3 class="text-center text-muted">No payment confirmation records found<h3></td>
                                                    </tr>
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
                                  
<?php echo $__env->make('customer.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\dawasa\resources\views/payment/index1.blade.php ENDPATH**/ ?>