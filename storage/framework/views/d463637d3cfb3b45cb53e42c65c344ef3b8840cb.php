
<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title"><?php echo e(_('LHRC STAFF INFORMATION')); ?>

                                <span class="float-right"></span>
                            </h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="mx-auto">
                                    <h4 class="text-center"><strong><?php echo e(_('Legal and Human Rights Centre')); ?></strong></h4>
                                    <img src="<?php echo e(asset('images/human/lhrc_logo.jpg')); ?>" class="mx-auto d-block img-responsive" alt="lhrc-logo" title="lhrc-logo" width="80px" height="80px"/>
                                    
                                </div>
                            </div>
                        

                            <div class="card-body offset-md-2">
                                <div class="table-responsive col-md-10">
                                <h2 class="text-center">This page is temporary unavailable</h2>

                                    
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="float-left">
                                <a class="btn btn-info" href="<?php echo e(url('admin/staff-management')); ?>">&laquo;&nbsp;<?php echo e(_('Prev')); ?></a>
                            </div>

                            <div class="float-right">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\human\resources\views/admin/show.blade.php ENDPATH**/ ?>