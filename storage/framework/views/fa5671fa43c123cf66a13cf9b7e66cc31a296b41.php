
    <?php $__env->startSection('main'); ?>
        <div class="content-wrapper">
            <section class="content">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-info text-white">
                                <h3 class="card-title"><?php echo e(_( $user->center_code.' '.'SmS MANAGEMENT')); ?></h3>
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

                            <div class="modal fade" id="modal-default">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Sms Center Assignment</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>

                                        <?php $__currentLoopData = $sms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <form action="<?php echo e(route('update-sms', $message->id)); ?>"  method="post" enctype="multipart/form-data"><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('put'); ?>

                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class=" col-md-12">
                                                            <div class="form-group row">
                                                                <label for="sms_center" class="col-md-3 col-form-label text-md-right"><?php echo e(_ ('LHRC Center')); ?></label>
                                                                <div class="col-md-8">
                                                                    <select class="form-control select2<?php echo e($errors->has('sms_center') ? ' is-invalid' : ''); ?>" name="sms_center" id="sms_center" required>
                                                                        
                                                                        <?php $__currentLoopData = $center; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code=>$name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e($code); ?>" @selected(old('sms_center') == $name)><?php echo e($name); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                
                                                                    <?php if($errors->has('sms_center')): ?>
                                                                        <span class="invalid-feedback">
                                                                            <strong><?php echo e($errors->first('sms_center')); ?></strong>
                                                                        </span>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="table-responsive col-md-12 col-sm-12 col-lg-12">
                                        <table class="table table-bordered table-hover display">
                                            <thead>
                                                <tr class="text-left">
                                                    <th style="width: 2%">#</th>
                                                    <th style="width: 16%">Received_Date</th>
                                                    <th style="width: 2%">From</th>
                                                    <th style="width: 65%">Message</th>
                                                    <th style="width: 15%">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php if(count($sms) < 1): ?>
                                                    <tr>
                                                        <td class="btn-default" colspan="7"><h3 class="text-center">No new sms has received yet<h3></td>
                                                    </tr>
                                                <?php else: ?>
                                                    <?php $__currentLoopData = $sms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr class="text-justify">
                                                            <td><?php echo e(++$i); ?></td>
                                                            <td><?php echo e(Carbon\Carbon::parse($message->received_date)->format('j F, Y h:i A')); ?></td>
                                                            <td><?php echo e('+'.$message->mobile_no); ?></td>
                                                            <td class="text-left"><?php echo e($message->sms); ?></td>
                                                            
                                                            <td>
                                                                <form action="<?php echo e(route('destroy-sms', $message->id)); ?>"  method="post" onsubmit="return confirm('Are you sure you want to delete this message...?') ">
                                                                    <div class="justify-content-between">
                                                                        
                                                                        
                                                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-default"><i class="fa fa-pencil"></i>&nbsp;<?php echo e(_('Assign')); ?></button>
    
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('delete'); ?>
    
                                                                        <button type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"></i>&nbsp;<?php echo e(_('Delete')); ?></button>
                                                                    </div>
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
                                <div class="col-sm-12 col-md-12" role="status" aria-live="polite">
                                    <span> Showing <?php echo e($sms->firstItem()); ?> to <?php echo e($sms->lastItem()); ?> of <?php echo e($sms->total()); ?> results</span>
                                    <span class="pull-right" id="paginate"><?php echo $sms->links(); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Javascript -->
        <script src="<?php echo e(asset('js/select/select2.full.min.js')); ?>"></script>
        <script>
            //Initialize Select2 Elements
            $('.select2').select2()
            $('.select2bs4').select2({
            theme: 'bootstrap4'
            })
            
            $('#modal-default').modal({
                keyboard: false
            })

            $('.swalDefaultSuccess').click(function() {
                Toast.fire({
                icon: 'success',
                title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\human\resources\views/sms/index.blade.php ENDPATH**/ ?>