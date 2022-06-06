
<?php $__env->startSection('main'); ?>

    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title"><?php echo e(_( $admin->dawasa_office.' '.'Client Appplications')); ?></h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h4>List of <?php echo e($admin->dawasa_office); ?> Applications</h4>
                                </div>

                                
                            </div>
                        </div>

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
                                    <table  class="table table-bordered table-hover" role="grid" id="example2">
                                        <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>Customer Name</th>
                                                <th>Mobile#</th>
                                                <th>Service_Request</th>
                                                <th>Application#</th>
                                                <th>Application_Status</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php if( isset($application) && (count($application) === 1)): ?>
                                                <tr role="row" class="odd">
                                                    <td><?php echo e(++$i); ?></td>
                                                    <td><?php echo e(ucfirst($application[0]->first_name)); ?>&nbsp;<?php echo e(ucfirst(substr($application[0]->middle_name, 0,1))); ?>.&nbsp;<?php echo e(ucfirst($application[0]->last_name)); ?></td>
                                                    <td>+<?php echo e($application[0]->mobile_no); ?></td>
                                                    <td class="text-right"><?php echo e($application[0]->service_required); ?></td>
                                                    <td><?php echo e($application[0]->application_number); ?></td>
                                                    <td class="text-center"><span class="right badge badge-info"><h6><?php echo e($application[0]->application_state); ?></h6></span>
                                                    <td>
                                                        <form action="<?php echo e(route('destroy-application', $application[0]->application_id)); ?>" method="post" onsubmit="return confirm('Are you sure you want to delete this application...?') ">
                                                                    
                                                            <a class="btn btn-info btn-sm" href="<?php echo e(route('manage-application',$application[0]->application_id)); ?>"><i class="fa fa-eye"></i>&nbsp;<?php echo e(_('More')); ?></a>
                                                            <a class="btn btn-primary btn-sm" href="mailto:<?php echo e($application[0]->email); ?>"><i class="fa fa-envelope-o"></i>&nbsp;<?php echo e(_('Email')); ?></a>

                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('delete'); ?>

                                                            <button type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"></i>&nbsp;<?php echo e(_('Delete')); ?></button>
                                                        </form>
                                                    </td>
                                                </tr>

                                            <?php elseif( isset($application) && (count($application) > 1)): ?>
                                                <?php $__currentLoopData = $application; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $applicant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr role="row" class="odd">
                                                        <td><?php echo e(++$i); ?></td>
                                                        <td><?php echo e(ucfirst($applicant->first_name)); ?>&nbsp;<?php echo e(ucfirst(substr($applicant->middle_name, 0,1))); ?>.&nbsp;<?php echo e(ucfirst($applicant->last_name)); ?></td>
                                                        <td>+<?php echo e($applicant->mobile_no); ?></td>
                                                        <td class="text-right"><?php echo e($applicant->service_required); ?></td>
                                                        <td><?php echo e($applicant->application_number); ?></td>
                                                        <td class="text-center"><span class="right badge badge-info"><h6><?php echo e($applicant->application_state); ?></h6></span>
                                                        <td>
                                                            <form action="<?php echo e(route('destroy-application', $applicant->application_id)); ?>" method="post" onsubmit="return confirm('Are you sure you want to delete this application...?') ">
                                                                    
                                                                <a class="btn btn-info btn-sm" href="<?php echo e(route('manage-application',$applicant->application_id)); ?>"><i class="fa fa-eye"></i>&nbsp;<?php echo e(_('More')); ?></a>
                                                                <a class="btn btn-primary btn-sm" href="mailto:<?php echo e($applicant->email); ?>"><i class="fa fa-envelope-o"></i>&nbsp;<?php echo e(_('Email')); ?></a>
    
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('delete'); ?>
    
                                                                <button type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"></i>&nbsp;<?php echo e(_('Delete')); ?></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <tr>
                                                    <td class="btn-default" colspan="8"><h3 class="text-center">No recent customer application<h3></td>
                                                </tr>

                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row mt-3 mb-3">
                                <div class="col-sm-4 col-md-4">
                                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to <?php echo e(count($application)); ?> of <?php echo e(count($application)); ?> entries</div>
                                </div>

                                <div class="col-md-8">
                                    <div class="offset-md-9" id="paginate"><?php echo $application->render(); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dawasa.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Movies\dawasa\resources\views/application/index.blade.php ENDPATH**/ ?>