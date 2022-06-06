
<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title"><?php echo e(_('CUSTOMER APPLICATION  PROGRESS')); ?></h3>
                        </div>

                         <div class="card-body">
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

                            <div class="row justify-content-center">
                                <div class="col-lg-12 margin-tb">
                                    <div class="pull-left">
                                        <?php if( isset($application) && (count($application) === 1)): ?>
                                            <h2><?php echo e($application[0]->service_required); ?> application progress</h2>

                                        <?php elseif( isset($application) && (count($application) > 1)): ?>
                                            <h2><?php echo ('Customer\'s application progressess'); ?></h2>
                                        <?php else: ?>
                                            <h2>No application progress found</h2>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="table-responsive col-md-12 col-sm-12 col-lg-12">
                                    <table  class="table table-bordered table-hover " role="grid" id="example2">
                                        <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>Customer_Name</th>
                                                <th>Service_Request</th>
                                                <th>Application#</th>
                                                <th>Application_date</th>
                                                <th>Total_Cost(Tsh)</th>
                                                <th>Amount_Paid(Tsh)</th>
                                                <th>Application_Status</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php if( isset($application) && (count($application) === 1)): ?>
                                                <tr role="row" class="odd">
                                                    <td><?php echo e(++$i); ?></td>
                                                    <td><?php echo e(ucfirst($application[0]->first_name)); ?>&nbsp;<?php echo e(ucfirst($application[0]->middle_name)); ?>&nbsp;<?php echo e(ucfirst($application[0]->last_name)); ?></td>
                                                    <td class="text-right"><?php echo e($application[0]->service_required); ?></td>
                                                    <td><?php echo e($application[0]->application_number); ?></td>
                                                    <td class="text-center"><?php echo e(Carbon\Carbon::parse($application[0]->application_date)->format('j F, Y')); ?></td>
                                                    <td class="text-right"><?php echo e(number_format($application[0]->service_line_cost, 2, '.', ',')); ?></td>
                                                    <?php if(($application[0]->state) < 3): ?>
                                                        <td td class="text-right"><?php echo e('0.00'); ?></td>
                                                    <?php else: ?>
                                                        <td class="text-right"><?php echo e(number_format($application[0]->amount, 2, '.', ',')); ?></td>
                                                    <?php endif; ?>
                                                    <td class="text-center"><span class="right badge badge-info"><h6><?php echo e($application[0]->application_state); ?></h6></span></td>
                                                </tr>

                                            <?php elseif( isset($application) && (count($application) > 1)): ?>
                                                <?php $__currentLoopData = $application; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $applicant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr role="row" class="odd">
                                                        <td><?php echo e(++$i); ?></td>
                                                        <td><?php echo e(ucfirst($applicant->first_name)); ?>&nbsp;<?php echo e(ucfirst($applicant->middle_name)); ?>&nbsp;<?php echo e(ucfirst($applicant->last_name)); ?></td>
                                                        <td class="text-right"><?php echo e($applicant->service_required); ?></td>
                                                        <td><?php echo e($applicant->application_number); ?></td>
                                                        <td class="text-center"><?php echo e(Carbon\Carbon::parse($applicant->application_date)->format('j F, Y')); ?></td>
                                                        <td class="text-right"><?php echo e(number_format($applicant->service_line_cost, 2, '.', ',')); ?></td>
                                                        <?php if(($applicant->state) < 3): ?>
                                                            <td td class="text-right"><?php echo e('0.00'); ?></td>
                                                        <?php else: ?>
                                                            <td class="text-right"><?php echo e(number_format($applicant->amount, 2, '.', ',')); ?></td>
                                                        <?php endif; ?>
                                                        <td class="text-center"><span class="right badge badge-info"><h6><?php echo e($applicant->application_state); ?></h6></span></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <tr>
                                                    <td class="btn-default" colspan="10"><h3 class="text-center text-muted">Please apply first to see the progress<h3></td>
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

<?php echo $__env->make('customer.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\dawasa\resources\views/application/show.blade.php ENDPATH**/ ?>