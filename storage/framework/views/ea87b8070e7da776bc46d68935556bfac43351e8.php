
    <?php $__env->startSection('main'); ?>
        <div class="content-wrapper">
            <section class="content">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-info text-white">
                                <h3 class="card-title"><?php echo e(_('Dawasa Staff Management')); ?>

                                    <span class="float-right">
                                        <a class="btn btn-info btn-sm" href="<?php echo e(url('admin/create-staff')); ?>"><i class="fa fa-user-plus"></i> Create New Staff</a>
                                    </span>
                                </h3>
                            </div>

                            <div class="card-body">
                                <div class="col-lg-12 margin-tb">
                                    <div class="pull-left">
                                        <h4>List of Dawasa Staff</h4>
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
                                                    <th>Staff Name</th>
                                                    <th>Staff Role</th>
                                                    <th>D'Center</th>
                                                    <th>Email Address</th>
                                                    <th>Mobile #</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php if(count($users) < 1): ?>
                                                    <tr>
                                                        <td class="btn-default" colspan="7"><h3 class="text-center">No staff records found<h3></td>
                                                    </tr>
                                                <?php else: ?>
                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr class="text-justify">
                                                            <td><?php echo e(++$i); ?></td>
                                                            <td><?php echo e(ucfirst($user->first_name)); ?>&nbsp;<?php echo e(ucfirst($user->middle_name)); ?>&nbsp;<?php echo e(ucfirst($user->last_name)); ?></td>
                                                            <td><?php echo e(ucfirst($user->role)); ?></td>
                                                            <td><?php echo e(ucfirst($user->dawasa_office)); ?></td>
                                                            <td><?php echo e($user->email); ?></td>
                                                            <td>+<?php echo e($user->mobile_no); ?></td>
                                                            <td>
                                                                <form action="<?php echo e(route('destroy-staff', $user->id)); ?>" method="post" onsubmit="return confirm('Are you sure you want to delete this staff...?') ">

                                                                    <a class="btn btn-primary btn-sm" href="<?php echo e(url('admin/edit-staff', $user->id)); ?>"><i class="fa fa-pencil"></i>&nbsp;<?php echo e(_('Edit')); ?></a>

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
                                    <?php echo $users->links(); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\dawasa\resources\views/admin/index.blade.php ENDPATH**/ ?>