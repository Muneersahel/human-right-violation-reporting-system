
    <?php $__env->startSection('sidebar'); ?>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- User Role -->
            <a href="<?php echo e(url('customer/home')); ?>" class="brand-link">
                <img src="<?php echo e(asset('images/app/lhrc_logo-2.png')); ?>"
                    alt="customer_logo"
                    class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Customer Profile</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/storage/images/<?php echo e(Auth::user()->user_image); ?>" class="img-circle elevation-2" alt="Image">
                    </div>
                    <div class="info">
                        <a href="<?php echo e(url('customer/edit-customer', Auth::user()->id )); ?>" class="d-block"><?php echo e(Auth::user()->first_name); ?>&nbsp;<?php echo e(substr(Auth::user()->middle_name, 0,1).'.'); ?>&nbsp;<?php echo e(Auth::user()->last_name); ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?php echo e(url('customer/home')); ?>" class="nav-link">
                                <i class="nav-icon fa fa-home"></i>
                                <p>
                                <?php echo e(_('Customer Home')); ?>

                                
                                </p>
                            </a>
                        </li>

                        
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-file-text"></i>
                                    <p>Form Reporting<i class="fa fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo e(url('customer/create-incident')); ?>" class="nav-link" onclick="return confirm('Do you really want to report the incident..?') ">
                                            <i class="nav-icon fa fa-circle"></i>
                                            <p>Report Incident</p>
                                        </a>
                                    </li>

                                    <li class="nav-item" id="progress">
                                        <a href="<?php echo e(url('customer/show-incident')); ?>" class="nav-link">
                                            <i class="nav-icon fa fa-circle"></i>
                                            <p>Incident Progress</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo e(url('customer/create-sms')); ?>" class="nav-link">
                                    <i class="nav-icon fa fa-commenting" aria-hidden="true"></i>
                                    <p>
                                        <?php echo e(_('Sms Reporting')); ?>

                                        <span class="badge badge-info right">sms</span>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo e(url('customer/create-voice')); ?>" class="nav-link">
                                    <i class=" nav-icon fa fa-file-audio-o" aria-hidden="true"></i>
                                    <p>
                                        <?php echo e(_('Voice Reporting')); ?>

                                        <span class="badge badge-info right">audio</span>
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
                            <strong style="padding:0; margin:0;" class="card-title">Logged:&nbsp; <?php echo e(Auth::user()->first_name); ?>&nbsp;<?php echo e(substr(Auth::user()->middle_name,0,1).'.'); ?>&nbsp;<?php echo e(Auth::user()->last_name); ?>&nbsp;</strong>
                        </div>
                        
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 margin-tb">
                                        <div class="text-center">
                                            <img src="<?php echo e(asset('images/app/lhrc_logo.jpg')); ?>" class="d-block mx-auto img-responsive" alt="lhrc-logo" title="lhrc-logo" width="90px" height="90px"/>
                                            <h4><strong><?php echo e(_('Legal and Human Rights Centre')); ?></strong></h4>
                                        </div>

                                    <div class="col-md-10 offset-md-2">
                                        <h3 class="text-justify"><?php echo e(_('Human Right Violations Reporting System')); ?></h3>
                                        <ul class="text-justify">
                                            <li><?php echo e(_('Human rights protection is your duty.')); ?></li>
                                            <li><?php echo e(_('Report about human rights violation.')); ?></li>
                                            <li><?php echo e(_('The protection of human rights is your responsibility.')); ?>

                                            <li><?php echo e(_('Report human rights violations at any time and wherever you are.')); ?></li>
                                            <li><?php echo e(_('Confidentiality and non-disclosure are strictly observed.')); ?></li>
                                            <li><?php echo e(_('Your information and identity will be kept confidential.')); ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script>
            if (isset($reported) && (count($reported) >= 1)) {
                document.getElementById('progress').style.display = "";
            } else {
                document.getElementById('progress').style.display = "none";
            }
      </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\human\resources\views/customer/home.blade.php ENDPATH**/ ?>