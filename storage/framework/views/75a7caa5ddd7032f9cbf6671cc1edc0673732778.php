
    <?php $__env->startSection('sidebar'); ?>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- User Role -->
            <a href="<?php echo e(url('monitor/home')); ?>" class="brand-link">
                <img src="<?php echo e(asset('images/app/lhrc_logo-2.png')); ?>"
                    alt="lhrc_logo"
                    class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">HR Monitor Profile</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/storage/images/<?php echo e(Auth::user()->user_image); ?>" class="img-circle elevation-2" alt="Image">
                    </div>
                    <div class="info">
                        <a href="<?php echo e(url('monitor/edit', Auth::user()->id )); ?>" class="d-block"><?php echo e(Auth::user()->first_name); ?>&nbsp;<?php echo e(substr(Auth::user()->middle_name, 0,1).'.'); ?>&nbsp;<?php echo e(Auth::user()->last_name); ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?php echo e(url('monitor/home')); ?>" class="nav-link">
                                <i class="nav-icon fa fa-home"></i>
                                <p>
                                    <?php echo e(_('HR Monitor Home')); ?>

                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo e(url('monitor/show-incidents')); ?>" class="nav-link">
                                <i class="nav-icon fa fa-file-text"></i>
                                <p>
                                    <?php echo e(_('Form Incidents')); ?>

                                    <span class="badge badge-info right">new</span>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo e(url('monitor/sms-management')); ?>" class="nav-link">
                                <i class="nav-icon fa fa-commenting"></i>
                                <p>
                                    <?php echo e(_('SmS Incidents')); ?>

                                    <span class="badge badge-info right">sms</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-white bg-info">
                            <h3 class="card-title"><?php echo e(_('Human Right Monitoring')); ?></h3>
                        </div>

                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 text-justify">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\human\resources\views/monitor/home.blade.php ENDPATH**/ ?>