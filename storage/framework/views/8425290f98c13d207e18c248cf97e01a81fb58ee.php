
    <?php $__env->startSection('main'); ?>
        <div class="content-wrapper">
            <section class="content">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-info text-white">
                                <h3 class="card-title"><?php echo e(($user->dawasa_office)); ?> Customer Management</h3>
                            </div>

                            <div class="card-body">
                                <div class="col-lg-12 margin-tb">
                                    <div class="pull-left">
                                        <h4>List of <?php echo e($user->dawasa_office); ?> Customers</h4>
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
                                                    <th>Customer Name</th>
                                                    <th>ID_Type</th>
                                                    <th>TIN/ID#</th>
                                                    <th>Mobile #</th>
                                                    <th>Email Address</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php if(count($customers) < 1): ?>
                                                    <tr>
                                                        <td class="btn-default" colspan="7"><h3 class="text-center">No customer records found<h3></td>
                                                    </tr>
                                                <?php else: ?>
                                                    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr class="text-justify">
                                                            <td><?php echo e(++$i); ?></td>
                                                            <td><?php echo e(ucfirst($customer->first_name)); ?>&nbsp;<?php echo e(ucfirst($customer->middle_name)); ?>&nbsp;<?php echo e(ucfirst($customer->last_name)); ?></td>
                                                            <td><?php echo e(ucfirst($customer->identity_type)); ?></td>
                                                            <td><?php echo e(ucfirst($customer->identity_no)); ?></td>
                                                            <td>+<?php echo e($customer->mobile_no); ?></td>
                                                            <td><?php echo e($customer->email); ?></td>
                                                            <td>
                                                                <form action="<?php echo e(route('destroy-staff', $customer->id)); ?>" method="post" onsubmit="return confirm('Are you sure you want to delete this staff...?') ">
                                                                    
                                                                    <a class="btn btn-info btn-sm" href="mailto::<?php echo e($customer->email); ?>"><i class="fa fa-envelope-o"></i>&nbsp;<?php echo e(_('Email')); ?></a>
                                                                    

                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('delete'); ?>

                                                                    <button type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"></i>&nbsp;<?php echo e(_('Delete')); ?></button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- /.card-body -->

                            <div class="card-footer">
                                <div class="offset-md-10">
                                    <?php echo $customers->links(); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('dawasa.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\dawasa\resources\views/customer/index.blade.php ENDPATH**/ ?>