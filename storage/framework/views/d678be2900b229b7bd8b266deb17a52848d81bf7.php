<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title"><?php echo e(_('LHRC CENTER INFORMATION')); ?>

                                <span class="float-right"></span>
                            </h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="mx-auto">
                                    <h4 class="text-center"><strong><?php echo e(_('Legal and Human Rights Centre')); ?></strong></h4>
                                    <img src="<?php echo e(asset('images/human/lhrc_logo.jpg')); ?>" class="mx-auto d-block img-responsive" alt="lhrc-logo" title="lhrc-logo" width="80px" height="80px"/>
                                    <h4 class="text-center" ><strong><?php echo e($center->code); ?>:&nbsp;<?php echo e($center->name); ?></strong></h4>
                                    <h4 class="text-center" style="text-decoration: underline; text-decoration-color:lightslategray; text-underline-offset: 2px;" >
                                        <?php echo e($center->address); ?>,&nbsp;Phone# +<?php echo e($center->mobile_no); ?>,&nbsp;Email: <?php echo e($center->email); ?>

                                    </h4> 
                                </div>
                            </div>
                        

                            <div class="card-body offset-md-2">
                                <div class="table-responsive col-md-10">
                                    <table  class="table table-bordered table-hover">
                                        <tr>
                                            <td><strong>Center Code</strong></td>
                                            <td><?php echo e($center->code); ?></td>
                                            <td><strong>Physical address</strong></td>
                                            <td><?php echo e($center->address); ?></td>
                                        </tr>

                                        <tr>
                                            <td><strong>Center Name</strong></td>
                                            <td><?php echo e($center->name); ?></td>
                                            <td><strong>Center Region</strong></td>
                                            <td><?php echo e($center->region); ?></td>
                                        </tr>

                                        <tr>
                                            <td><strong>Director Name</strong></td>
                                            <td><?php echo e($center->director); ?></td>
                                            <td><strong>Center District</strong></td>
                                            <td><?php echo e($center->district); ?></td>
                                        </tr>

                                        <tr>
                                            <td><strong>Center Mobile#</strong></td>
                                            <td>+<?php echo e($center->mobile_no); ?></td>
                                            <td><strong>Center Ward</strong></td>
                                            <td><?php echo e($center->ward); ?></td>
                                        </tr>

                                        <tr>
                                            <td><strong>Center Fax#</strong></td>
                                            <td>+<?php echo e($center->fax_no); ?></td>
                                            <td><strong>Center Street</strong></td>
                                            <td><?php echo e($center->street); ?></td>
                                        </tr>

                                        <tr>
                                            <td><strong>Center Email</strong></td>
                                            <td><?php echo e($center->email); ?></td>
                                            <td rowspan="3"><strong>Center Remark</strong></td>
                                            <td><?php echo e(substr($center->remarks ,0,30).'...'); ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="float-left">
                                <a class="btn btn-info" href="<?php echo e(url('admin/center-management')); ?>">&laquo;&nbsp;<?php echo e(_('Prev')); ?></a>
                            </div>

                            <div class="float-right">
                                <a class="btn btn-info" href="<?php echo e(url('admin/edit-center', $center->id)); ?>"><?php echo e(_('Edit')); ?>&nbsp;&raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\human\resources\views/center/show.blade.php ENDPATH**/ ?>