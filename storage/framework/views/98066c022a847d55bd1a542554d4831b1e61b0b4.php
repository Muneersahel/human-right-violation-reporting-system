
    <?php $__env->startSection('sidebar'); ?>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- User Role -->
            <a href="<?php echo e(url('admin/home')); ?>" class="brand-link">
                <img src="<?php echo e(asset('images/app/lhrc_logo-2.png')); ?>"
                    alt="admin_logo"
                    class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Admin Profile</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/storage/images/<?php echo e(Auth::user()->user_image); ?>" class="img-circle elevation-2" alt="Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo e(Auth::user()->first_name); ?>&nbsp;<?php echo e(substr(Auth::user()->middle_name, 0,1).'.'); ?>&nbsp;<?php echo e(Auth::user()->last_name); ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?php echo e(url('admin/home')); ?>" class="nav-link">
                                <i class="nav-icon fa fa-home"></i>
                                <p><?php echo e(_('Admin Home')); ?></p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo e(url('admin/staff-management')); ?>" class="nav-link">
                                <i class="nav-icon fa fa-users"></i>
                                <p><?php echo e(_('Staff Management')); ?></p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo e(url('admin/center-management')); ?>" class="nav-link">
                                <i class="nav-icon fa fa-building" aria-hidden="true"></i>
                                <p><?php echo e(_('Center Management')); ?></p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo e(url('admin/sms-management')); ?>" class="nav-link">
                                <i class="nav-icon fa fa-commenting"></i>
                                <p><?php echo e(_('Sms Management')); ?></p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo e(url('admin/voice-management')); ?>" class="nav-link">
                                <i class="nav-icon fa fa-file-audio-o" aria-hidden="true"></i>
                                <p><?php echo e(_('Voice Management')); ?></p>
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
                                <h3 class="card-title"><?php echo e(_('System Administrator Quidlines')); ?></h3>
                            </div>
                            
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 text-justify">
                                            
                                           
                                            <h2 class="mt-0">General responsibilty of System Administrator</h2>
                                            <dd>
                                                <dl>Responsible to ensure reported victim incidents are processed on time after they have reported to LHRC Center</dl>
                                                <dt>Management of the System involves the activities like.</dt>
                                                <ul>
                                                    <li>Manage users account informations</li>  
                                                    <li>Registering of Human Right Monitors that are Responsible for validation of reported incidents</li>
                                                    <li>Registering of Operators that performs the preliminary and vulnability of human right violance</li>
                                                    <li>Registering of Zonal Leader that corresponds to management of Hunan Right Zonal Offices</li>
                                                    <li>Registering and Management of Human Righr Centers around the Country</li>
                                                </ul>
                                            </dd>
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

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\human\resources\views/admin/home.blade.php ENDPATH**/ ?>