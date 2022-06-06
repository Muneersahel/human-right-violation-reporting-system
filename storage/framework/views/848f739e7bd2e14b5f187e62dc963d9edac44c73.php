
<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title"><?php echo e(_( $monitor->center_code.' '.'Victim Incidents')); ?></h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h4>List of <?php echo e($monitor->center_code); ?> Reported Incidents</h4>
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
                                                <th>Victim Name</th>
                                                <th>Mobile#</th>
                                                <th>Right_Violated</th>
                                                <th>Incident#</th>
                                                <th>Incident_date</th>
                                                <th>Reported_date</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php if( isset($incident) && (count($incident) === 1)): ?>
                                                <tr role="row" class="odd">
                                                    <td><?php echo e(++$i); ?></td>
                                                    <td><?php echo e(ucfirst($incident[0]->first_name)); ?>&nbsp;<?php echo e(ucfirst($incident[0]->middle_name)); ?>&nbsp;<?php echo e(ucfirst($incident[0]->last_name)); ?></td>
                                                    <td><?php echo e('+'.$incident[0]->mobile_no); ?></td>
                                                    <td><?php echo e($incident[0]->right_violated); ?></td>
                                                    <td><?php echo e($incident[0]->incident_number); ?></td>
                                                    <td><?php echo e(Carbon\Carbon::parse($incident[0]->date_time)->isoFormat('LLLL')); ?></td>
                                                    <td><?php echo e(Carbon\Carbon::parse($incident[0]->reported_date)->isoFormat('LLLL')); ?></td>
                                                    <td>
                                                        <a class="btn btn-info btn-sm" href="<?php echo e(url('monitor/incident-details',$incident[0]->incident_id)); ?>"><i class="fa fa-ellipsis-v"></i> More</a>
                                                        <a class="btn btn-success btn-sm" href="<?php echo e(url('monitor/incident-validation',$incident[0]->incident_id)); ?>"><i class="fa fa-pencil"></i> Validate</a>
                                                        <a class="btn btn-primary btn-sm" href="mailto:<?php echo e($incident[0]->email); ?>"><i class="fa fa-envelope-o"></i> Email</a>
                                                    </td>
                                                </tr>

                                            <?php elseif( isset($incident) && (count($incident) > 1)): ?>
                                                <?php $__currentLoopData = $incident; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $victim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr role="row" class="odd">
                                                        <td><?php echo e(++$i); ?></td>
                                                        <td><?php echo e(ucfirst($victim->first_name)); ?>&nbsp;<?php echo e(ucfirst($victim->middle_name)); ?>&nbsp;<?php echo e(ucfirst($victim->last_name)); ?></td>
                                                        <td><?php echo e('+'.$victim->mobile_no); ?></td>
                                                        <td><?php echo e($victim->right_violated); ?></td>
                                                        <td><?php echo e($victim->incident_number); ?></td>
                                                        <td><?php echo e(Carbon\Carbon::parse($victim->date_time)->format('j F, Y h:i A')); ?></td>
                                                        <td><?php echo e(Carbon\Carbon::parse($victim->reported_date)->format('j F, Y h:i A')); ?></td>
                                                        
                                                        
                                                        <td>
                                                            <form action="<?php echo e(route('destroy-incident', $victim->incident_id)); ?>"  method="post" onsubmit="return confirm('Are you sure you want to delete this incident...?') ">

                                                                <a class="btn btn-info btn-sm" href="<?php echo e(url('monitor/incident-details', $victim->incident_id)); ?>"><i class="fa fa-ellipsis-v"></i> More</a>
                                                                <a class="btn btn-success btn-sm" href="<?php echo e(url('monitor/incident-validation', $victim->incident_id)); ?>"><i class="fa fa-pencil"></i> Validate</a>

                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('delete'); ?>

                                                                <button type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"></i>&nbsp;<?php echo e(_('Delete')); ?></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <tr>
                                                    <td class="btn-default" colspan="8"><h3 class="text-center">No recent victim incident's found<h3></td>
                                                </tr>

                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="col-sm-4 col-md-12">
                                <div class="dataTables_info"  role="status" aria-live="polite"> <?php echo __('Showing'); ?>

                                    <span class="font-medium"><?php echo e($incident->firstItem()); ?></span> <?php echo __('to'); ?>

                                    <span class="font-medium"><?php echo e($incident->lastItem()); ?></span> <?php echo __('of'); ?>

                                    <span class="font-medium"><?php echo e($incident->total()); ?></span> <?php echo __('results'); ?>

                                    <span class="float-right" id="paginate"><?php echo e($incident->links('vendor.pagination.bootstrap-4')); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('monitor.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\human\resources\views/incident/index.blade.php ENDPATH**/ ?>