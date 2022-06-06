
<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title"><?php echo e(_('VICTIM\'S INCIDENT DETAILS')); ?></h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h4><strong><?php echo e(_('Legal and Human Rights Centre')); ?></strong></h4>
                                    <img src="<?php echo e(asset('images/human/lhrc_logo.jpg')); ?>" class="d-block mx-auto img-responsive" alt="lhrc-logo" title="lhrc-logo" width="80px" height="80px"/>
                                    <h4 class="text-center" ><strong><?php echo e(_('Human Right Violations Reporting System')); ?></strong></h4>
                                    <h4 class="text-center" style="text-decoration: underline; text-decoration-color:lightslategray; text-underline-offset: 2px;" >
                                        <?php echo e(('VICTIM\'S INCIDENT INFORMATION FOR'.' '.strtoupper($incident->right_violated).' '.'VIOLANCE')); ?>

                                    </h4>
                                </div>
                            </div>

                            <div class="col-lg-12 margin-tb table-responsive">
                                <table  class="table table-bordered table-hover">
                                    <tr><th colspan=4 style="background:silver">VICTIM'S INCIDENT DETAILS</th></tr>
                                        <tr>
                                            <td>Victim Name</td>
                                            <td><?php echo e(ucfirst($user->first_name)); ?>&nbsp;<?php echo e(ucfirst($user->middle_name)); ?>&nbsp;<?php echo e(ucfirst($user->last_name)); ?></td>
                                            <td>Gender/Sex</td>
                                            <td><?php echo e($user->gender); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            
                                            
                                        </tr>
                                        <tr>
                                            <td>Date of Birth</td>
                                            <td><?php echo e(Carbon\Carbon::parse($user->birth_date)->format('j F, Y')); ?></td>
                                            <td>Mobile Number</td>
                                            <td>+<?php echo e($user->mobile_no); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email Adrress</td>
                                            <td><?php echo e($user->email); ?></td>
                                            <td>Telephone Number</td>
                                            <td>+<?php echo e($user->mobile_no); ?></td>
                                        </tr>

                                        <tr><th colspan=4 style="background:silver">INCIDENT LOCATION DETAILS</th></tr>
                                        <tr>
                                            <td>Region</td>
                                            <td><?php echo e($incident->region); ?></td>
                                            <td>District</td>
                                            <td><?php echo e($incident->district); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Ward/Area Name</td>
                                            <td><?php echo e($incident->ward); ?></td>
                                            <td>Street Name</td>
                                            <td><?php echo e($incident->street); ?></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Incident Remarks</td>
                                            <td colspan="3"><?php echo e($incident->incident_remarks); ?></td>
                                        </tr>

                                        <tr><th colspan=4 style="background:silver">Incident DETAILS</th></tr>
                                        <tr>
                                            <td>Incident Number</td>
                                            <td><?php echo e($incident->incident_number); ?></td>
                                            <td>Suspect Name</td>
                                            <td><?php echo e($suspect->name); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Gender/Sex</td>
                                            <td><?php echo e($suspect->gender); ?></td>
                                            <td>Appr. Age</td>
                                            <td><?php echo e($suspect->age.' '.'years'); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tribe</td>
                                            <td><?php echo e($suspect->tribe); ?></td>
                                            <td>Religion</td>
                                            <td><?php echo e($suspect->religion); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Merital Status</td>
                                            <td><?php echo e($suspect->merital_status); ?></td>
                                            <td>Incident Date</td>
                                            <td><?php echo e(Carbon\Carbon::parse($incident->created_at)->isoFormat('LLLL')); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Suspect Description</td>
                                            <td colspan="3"><?php echo e($suspect->suspect_remarks); ?></td>
                                            
                                            
                                        </tr>
                                </table>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="float-left">
                                <a class="btn btn-info" href="<?php echo e(route('index-incident')); ?>">&laquo;&nbsp;<?php echo e(_('Prev')); ?></a>
                            </div>

                            <div class="float-right">
                                <a class="btn btn-success" href="<?php echo e(route('monitor-create', $incident->id)); ?>"><?php echo e(_('Validate')); ?>&nbsp;&raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('monitor.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\human\resources\views/monitor/show.blade.php ENDPATH**/ ?>