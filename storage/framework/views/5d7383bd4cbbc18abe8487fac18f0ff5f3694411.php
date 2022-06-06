
    <?php $__env->startSection('main'); ?>
        <div class="content-wrapper">
            <section class="content">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-info text-white">
                                <h3 class="card-title"><?php echo e(_( $user->center_code.' '.'SmS ASSIGNED')); ?></h3>
                            </div>

                            <div class="card-body">
                                <div class="col-lg-12 margin-tb">
                                    <div class="pull-left">
                                        <h4><?php echo e(_( 'List of'.' '.$user->center_code.' '.'SmS Received')); ?></h4>
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
                                        <table class="table table-bordered table-hover display">
                                            <thead>
                                                <tr class="text-left">
                                                    <th style="width: 2% !important;">#</th>
                                                    <th style="width: 16%">Received_Date</th>
                                                    <th style="width: 2%">From</th>
                                                    <th style="width: 75%">Message</th>
                                                    <th style="width: 5%">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php if(count($sms) < 1): ?>
                                                    <tr>
                                                        <td class="btn-default" colspan="7"><h3 class="text-center">No new sms has been assigned for <?php echo e(strtoupper($user->center_code)); ?> center<h3></td>
                                                    </tr>
                                                <?php else: ?>
                                                    <?php $__currentLoopData = $sms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr class="text-justify">
                                                            <td><?php echo e(++$i); ?></td>
                                                            <td><?php echo e(Carbon\Carbon::parse($message->received_date)->format('j F, Y h:i A')); ?></td>
                                                            <td><?php echo e('+'.$message->mobile_no); ?></td>
                                                            <td class="text-left"><?php echo e($message->sms); ?></td>
                                                            
                                                            <td><a class="btn btn-info btn-sm" href="<?php echo e(route('create-victim', $message->id)); ?>" ><i class="fa fa-plus-square"></i>&nbsp;<?php echo e(_('Attend')); ?></a></td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- /.card-body -->

                            <div class="card-footer">
                                <div class="col-sm-4 col-md-12">
                                    
                                    <div class="dataTables_info"  role="status" aria-live="polite"> <?php echo __('Showing'); ?>

                                        <span class="font-medium"><?php echo e($sms->firstItem()); ?></span> <?php echo __('to'); ?>

                                        <span class="font-medium"><?php echo e($sms->lastItem()); ?></span> <?php echo __('of'); ?>

                                        <span class="font-medium"><?php echo e($sms->total()); ?></span> <?php echo __('results'); ?>

                                        <span class="float-right" id="paginate"><?php echo $sms->render(); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('monitor.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\human\resources\views/monitor/index.blade.php ENDPATH**/ ?>