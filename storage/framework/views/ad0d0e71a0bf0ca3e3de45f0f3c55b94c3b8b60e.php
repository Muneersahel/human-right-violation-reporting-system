
<?php $__env->startSection('main'); ?>

    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title"><?php echo e(_( $survey->dawasa_office.' '.'New Customer Appplications')); ?></h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h4>List of <?php echo e($survey->dawasa_office); ?> Applications</h4>
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
                                                <th>TIN/Identity#</th>
                                                <th>Service_Request</th>
                                                <th>Application#</th>
                                                <th>Applied_date</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php if( isset($application) && (count($application) === 1)): ?>
                                                <tr role="row" class="odd">
                                                    <td><?php echo e(++$i); ?></td>
                                                    <td><?php echo e(ucfirst($application[0]->first_name)); ?>&nbsp;<?php echo e(ucfirst($application[0]->middle_name)); ?>&nbsp;<?php echo e(ucfirst($application[0]->last_name)); ?></td>
                                                    <td><?php echo e($application[0]->identity_no); ?></td>
                                                    <td class="text-right"><?php echo e($application[0]->service_required); ?></td>
                                                    <td><?php echo e($application[0]->application_number); ?></td>
                                                    <td><?php echo e(Carbon\Carbon::parse($application[0]->application_date)->format('j F, Y')); ?></td>
                                                    <td>
                                                        <a class="btn btn-info btn-sm" href="<?php echo e(url('survey/application-details',$application[0]->application_id)); ?>">More</a>
                                                        <a class="btn btn-success btn-sm" href="<?php echo e(url('survey/application-survey',$application[0]->application_id)); ?>">Survey</a>
                                                        <a class="btn btn-primary btn-sm" href="mailto:<?php echo e($application[0]->email); ?>">Email</a>
                                                    </td>
                                                </tr>

                                            <?php elseif( isset($application) && (count($application) > 1)): ?>
                                                <?php $__currentLoopData = $application; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $applicant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr role="row" class="odd">
                                                        <td><?php echo e(++$i); ?></td>
                                                        <td><?php echo e(ucfirst($applicant->first_name)); ?>&nbsp;<?php echo e(ucfirst($applicant->middle_name)); ?>&nbsp;<?php echo e(ucfirst($applicant->last_name)); ?></td>
                                                        <td><?php echo e($applicant->identity_no); ?></td>
                                                        <td class="text-right"><?php echo e($applicant->service_required); ?></td>
                                                        <td><?php echo e($applicant->application_number); ?></td>
                                                        <td><?php echo e(Carbon\Carbon::parse($applicant->application_date)->format('j F, Y')); ?></td>
                                                        <td>
                                                            <a class="btn btn-info btn-sm" href="<?php echo e(url('survey/application-details', $applicant->application_id)); ?>">More</a>
                                                            <a class="btn btn-success btn-sm" href="<?php echo e(url('survey/application-survey', $applicant->application_id)); ?>">Survey</a>
                                                            <a class="btn btn-primary btn-sm" href="mailto:<?php echo e($applicant->email); ?>">Email</a>
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

<?php echo $__env->make('survey.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\dawasa\resources\views/survey/index.blade.php ENDPATH**/ ?>