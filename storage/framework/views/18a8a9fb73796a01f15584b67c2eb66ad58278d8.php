
    <?php $__env->startSection('sidebar'); ?>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- User Role -->
            <a href="<?php echo e(url('survey/home')); ?>" class="brand-link">
                <img src="<?php echo e(asset('images/udom/AdminLogo.png')); ?>"
                    alt="survey_logo"
                    class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Survey Profile</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/storage/images/image/<?php echo e(Auth::user()->user_image); ?>" class="img-circle elevation-2" alt="Image">
                    </div>
                    <div class="info">
                        <a href="<?php echo e(url('survey/edit', Auth::user()->id )); ?>" class="d-block"><?php echo e(Auth::user()->first_name); ?>&nbsp;<?php echo e(Auth::user()->last_name); ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?php echo e(url('survey/home')); ?>" class="nav-link">
                                <i class="nav-icon fa fa-home"></i>
                                <p>
                                    <?php echo e(_('Survey Home')); ?>

                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo e(url('survey/show-applications')); ?>" class="nav-link">
                                <i class="nav-icon fa fa-book"></i>
                                <p>
                                    <?php echo e(_('Client Application')); ?>

                                    <span class="badge badge-info right">New</span>
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
                            <h3 class="card-title"><?php echo e(_('Service Line Application')); ?></h3>
                        </div>

                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 text-justify">
                                        <h3 class="mt-0"><?php echo e(_('SERVICE LINE SURVEY')); ?></h3>
                                        <ul>
                                            <li><?php echo ('If the Customer has paid all monies owing and met all other obligations stipulated in the Service Line Form, and if, where applicable, all instalments have been paid, the following time frames shall apply for provision of supply:'); ?></li>
                                            <li><?php echo ('Within 30 working days where the existing infrastructure can be used (within 30 meters from the nearest appropriate DAWASA existing infrastructure)'); ?></li>
                                            <li><?php echo ('Within 60 working days where lines extensions of not more than 100 meters (that is when the customer is located within 60 Meters to 100 meters from nearest DAWASA existing infrastructure).'); ?></li>
                                            <li><?php echo ('Within 90 working days where new networks have to be established or if High Voltage Lines extensions are required for industrial and commercial customers (that means if there is no nearby infrastructure to supply the applicant).'); ?></li>
                                        </ul>
                                        <dl>
                                            <dt><?php echo ('POWER INTERCONNECTIONS PRICES ARE AS FOLLOWS (INC. VAT)'); ?></dt>
                                            <div>
                                                <dt><?php echo ('SINGLE PHASE'); ?></dt>
                                                <ol>
                                                    <li><?php echo ('Rural Electrical connection at distances less than 30 Meters with nearest existing infrastructure facilities is TZS 177, 000.00.'); ?></li>
                                                    <li><?php echo ('Urban electrical connection at distance less than 30 Meters with nearest existing infrastructure facilities is TZS 320,960.00.'); ?></li>
                                                    <li><?php echo ('Rural Customers requiring water where DAWASA existing Infrastructure is located within 60 meters is TZS 337,740.00'); ?></li>
                                                    <li><?php echo ('Urban Customers requiring water where DAWASA existing Infrastructure is located within 60 meters is TZS 515,618.00'); ?></li>
                                                    <li><?php echo ('Rural Customers requiring water where DAWASA existing Infrastructure is located within 90 meters is TZS 454,654.00'); ?></li>
                                                    <li><?php echo ('Urban Customers requiring water where DAWASA existing Infrastructure is located within 90 meters is TZS 696,670.00'); ?></li>
                                                </ol>
                                            </div>

                                            <div>
                                                <dt><?php echo ('THREE PHASE'); ?></dt>
                                                <ol>
                                                    <li><?php echo ('Rural and Urban customers requiring water where DAWASA existing Infrastructure less than 30 Meters is TZS 912,014.00'); ?></li>
                                                    <li><?php echo ('Rural and Urban Customers requiring water where DAWASA existing Infrastructure is located within 60 Meters is TZS 1,249,385.00'); ?></li>
                                                    <li><?php echo ('Rural and Urban Customers requiring water where DAWASA existing Infrastructure is located within 90 Meters is TZS 1,639,156.00'); ?></li>
                                                </ol>
                                            </div>
                                        <dl>
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
<?php echo $__env->make('layouts.user_home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\dawasa\resources\views/survey/home.blade.php ENDPATH**/ ?>