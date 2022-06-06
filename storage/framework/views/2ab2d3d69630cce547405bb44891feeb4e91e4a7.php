
<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title"><?php echo e(_('VICTIM INCIDENT\'S  PROGRESS')); ?></h3>
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
                                        <?php if( isset($incident) && (count($incident) === 1)): ?>
                                            <h2><?php echo e($incident[0]->right_violated); ?> incident progress</h2>

                                        <?php elseif( isset($incident) && (count($incident) > 1)): ?>
                                            <h2><?php echo ('Victim\'s incident progressess'); ?></h2>
                                        <?php else: ?>
                                            <h2>No incident progress found</h2>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="table-responsive col-md-12 col-sm-12 col-lg-12">
                                    <table  class="table table-bordered table-hover " role="grid" id="example2">
                                        <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>Victim_Name</th>
                                                <th>Right_Violated</th>
                                                <th>Incident_Number</th>
                                                <th>Incident_Date</th>
                                                <th>Repoted_Date</th>
                                                <th>Incident_Status</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php if( isset($incident) && (count($incident) === 1)): ?>
                                                <tr role="row" class="odd">
                                                    <td><?php echo e(++$i); ?></td>
                                                    <td><?php echo e(ucfirst($incident[0]->first_name)); ?>&nbsp;<?php echo e(ucfirst($incident[0]->middle_name)); ?>&nbsp;<?php echo e(ucfirst($incident[0]->last_name)); ?></td>
                                                    <td><?php echo e($incident[0]->right_violated); ?></td>
                                                    <td><?php echo e($incident[0]->incident_number); ?></td>
                                                    <td><?php echo e(Carbon\Carbon::parse($incident[0]->date_time)->isoFormat('LLLL')); ?></td>
                                                    <td><?php echo e(Carbon\Carbon::parse($incident[0]->reported_date)->isoFormat('LLLL')); ?></td>
                                                    <td><span class="right badge badge-info"><h6><?php echo e(($incident[0]->incident_status)); ?></h6></span></td>
                                                </tr>

                                            <?php elseif( isset($incident) && (count($incident) > 1)): ?>
                                                <?php $__currentLoopData = $incident; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $victim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr role="row" class="odd">
                                                        <td><?php echo e(++$i); ?></td>
                                                        <td><?php echo e(ucfirst($victim->first_name)); ?>&nbsp;<?php echo e(ucfirst($victim->middle_name)); ?>&nbsp;<?php echo e(ucfirst($victim->last_name)); ?></td>
                                                        <td><?php echo e($victim->right_violated); ?></td>
                                                        <td><?php echo e($victim->incident_number); ?></td>
                                                        <td><?php echo e(Carbon\Carbon::parse($victim->date_time)->isoFormat('LLLL')); ?></td>
                                                        <td><?php echo e(Carbon\Carbon::parse($victim->reported_date)->isoFormat('LLLL')); ?></td>
                                                        <td><span class="right badge badge-info"><h6><?php echo e($victim->incident_status); ?></h6></span></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <tr>
                                                    <td class="btn-default" colspan="10"><h3 class="text-center text-muted">Please report the incident to see the progress<h3></td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row mt-3 mb-3">
                                <div class="col-sm-4 col-md-4">
                                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to <?php echo e(count($incident)); ?> of <?php echo e(count($incident)); ?> entries</div>
                                </div>

                                <div class="col-md-8">
                                    <div class="offset-md-9" id="paginate"><?php echo $incident->render(); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\human\resources\views/incident/show.blade.php ENDPATH**/ ?>