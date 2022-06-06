
    <?php $__env->startSection('sidebar'); ?>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- User Role -->
            <a href="<?php echo e(url('customer/home')); ?>" class="brand-link">
                <img src="<?php echo e(asset('images/dawasa/app_logo.png')); ?>"
                    alt="customer_logo"
                    class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Customer Profile</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/storage/images/image/<?php echo e(Auth::user()->user_image); ?>" class="img-circle elevation-2" alt="Image">
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
                                <i class="nav-icon fa fa-book"></i>
                                <p>Service Applications<i class="fa fa-angle-left right"></i></p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo e(url('customer/create-application')); ?>" class="nav-link">
                                        <i class="nav-icon fa fa-circle"></i>
                                        <p>Send Applications</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(url('customer/show-application')); ?>" class="nav-link">
                                        <i class="nav-icon fa fa-circle"></i>
                                        <p>Application Progress</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo e(url('customer/payment-details')); ?>" class="nav-link">
                                <i class="nav-icon fa fa-credit-card"></i>
                                <p>
                                    <?php echo e(_('Confirm Payment')); ?>

                                    <span class="badge badge-info right">Mpesa</span>
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
                            <strong style="padding:0; margin:0;" class="card-title">Logged in as:&nbsp; <?php echo e(Auth::user()->first_name); ?>&nbsp;<?php echo e(Auth::user()->last_name); ?>&nbsp;</strong>
                        </div>

                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 text-justify mb-3">
                                            <h3 class="mt-0"><?php echo e(_('Customer Application Procedures')); ?></h3>
                                        </div>
                                        <ul>
                                            <li><?php echo e(_('The Customer is required to fill in all necessary details on application form (free) for water supply which from nearby DAWASA\'s office across the country. A customer supposed to have recognized identity including Driving License/Vote ID/National ID/Passport in order to have application form.!')); ?></li>
                                            <li><?php echo e(_('DAWASA will undertake Water Connection Survey within Seven Days from the date when the Customer returns Water Connection Application Form properly filled in and with all necessary attachments')); ?></li>
                                            <li><?php echo e(_('If the Customer has filled in the Water Connection Application Form and has provided all necessary attachments (one photograph of the customer and wiring diagram of the House/ Building properly drawn and rubberstamped by the registered Water Contractor who undertook the construction), the Customer shall be given a quotation:')); ?>

                                                <ul>
                                                    <li><?php echo e(_('Within 7 working days where the Water Connection does not exceed 30 Meters from the nearest pipe.')); ?></li>
                                                    <li><?php echo e(_('Within 10 working days where line extension is required (of not more than 100 Meters).')); ?></li>
                                                    <li><?php echo e(_('Within 14 working days where new networks have to be established or if supply is required for Industrial and Commercial Customers.')); ?></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user_home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\dawasa\resources\views/customer/home.blade.php ENDPATH**/ ?>