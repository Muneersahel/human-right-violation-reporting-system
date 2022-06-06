<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title"><?php echo e(_('LHRC CENTER MANAGEMENT')); ?>

                                <span class="float-right">
                                    <a class="btn btn-info btn-sm" href="<?php echo e(url('admin/create-center')); ?>"><i class="fa fa-plus"></i> Create center</a>
                                </span>
                            </h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h2>List of LHRC Center</h2>
                                </div>

                                <div class="float-right">
                                    <div class="card-tools">
                                     
                                    </div>
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
                                                <th>Center Name</th>
                                                <th>Center Director</th>
                                                <th>Center Email</th>
                                                <th>Center Phone#</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php if(count($centers) < 1): ?>
                                                <tr>
                                                    <td class="btn-default" colspan="7"><h3 class="text-center">No center records found<h3></td>
                                                </tr>
                                            <?php else: ?>
                                                <?php $__currentLoopData = $centers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $center): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr class="text-justify">
                                                        <td><?php echo e(++$i); ?></td>
                                                        <td><?php echo e(ucfirst($center->name)); ?></td>
                                                        <td><?php echo e(ucfirst($center->director)); ?></td>
                                                        <td><?php echo e($center->email); ?></td>
                                                        <td>+<?php echo e($center->mobile_no); ?></td>
                                                        <td>
                                                            <form action="<?php echo e(route('destroy-center', $center->id)); ?>" method="post" onsubmit="return window.confirm('Are you sure you want to delete this center...?') ">

                                                                <a class="btn btn-info btn-sm" href="<?php echo e(url('admin/show-center', $center->id)); ?>"><i class="fa fa-ellipsis-h"></i>&nbsp;<?php echo e(_('More')); ?></a>
                                                                <a class="btn btn-primary btn-sm" href="<?php echo e(url('admin/edit-center', $center->id)); ?>"><i class="fa fa-pencil"></i>&nbsp;<?php echo e(_('Edit')); ?></a>

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
                            <?php echo $centers->links(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\human\resources\views/center/index.blade.php ENDPATH**/ ?>