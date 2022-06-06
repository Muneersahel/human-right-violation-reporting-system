
<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title"><?php echo e(_('CUSTOMER\'S APPLICATION DETAILS')); ?>

                              
                            </h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h4><strong><?php echo e(_('Dar es Salaam Water and Sanitation Authority')); ?></strong></h4>
                                </div>

                                <div class="mx-auto">
                                    <img src="<?php echo e(asset('images/dawasa/dawasa_logo.png')); ?>" class="img-responsive offset-md-5 offset-sm-5 offset-xs-5" alt="Dawasa-logo" title="Dawasa-logo" width="115px" height="100px"/>
                                </div>

                                <div>
                                    <h4 class="text-center" ><strong><?php echo e(__('APPLICATION AND AGREEMENT FOR WATER SUPPLY')); ?></strong></h4>
                                </div>

                                <div class="lead pb-0">
                                    <h4 class="text-center" style="text-decoration: underline; text-decoration-color:lightslategray; text-underline-offset: 2px;" >
                                        <?php echo e(('CUSTOMER\'S APPLICATION INFORMATION FOR'.' '.strtoupper($application->service_required).' '.'SERVICES')); ?>

                                    </h4> 
                                </div>
                            </div>

                            <div class="col-lg-12 margin-tb table-responsive">
                                <table  class="table table-bordered table-hover">
                                    <tr><th colspan=4 style="background:silver">CUSTOMER APPLICATION DETAILS</th></tr>
                                        <tr>
                                            <td>Customer Name</td>
                                            <td><?php echo e(ucfirst($user->first_name)); ?>&nbsp;<?php echo e(ucfirst($user->middle_name)); ?>&nbsp;<?php echo e(ucfirst($user->last_name)); ?></td>
                                            <td>Customer ID#</td>
                                            <td><?php echo e($user->identity_no); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Customer ID</td>
                                            <td><?php echo e($user->identity_type); ?></td>
                                            <td>Gender</td>
                                            <td><?php echo e($user->gender); ?></td>
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

                                        <tr><th colspan=4 style="background:silver">LOCATION DETAILS</th></tr>
                                        <tr>
                                            <td>Physical Name</td>
                                            <td><?php echo e($customer->physical_name); ?></td>
                                            <td>Plot Number</td>
                                            <td><?php echo e($customer->plot_no); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Area Name</td>
                                            <td><?php echo e($customer->area_name); ?></td>
                                            <td>Block Number</td>
                                            <td><?php echo e($customer->block_no); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Street Name</td>
                                            <td><?php echo e($customer->street_name); ?></td>
                                            <td>House Number</td>
                                            <td><?php echo e($customer->house_no); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Location Remark</td>
                                            <td colspan="3"><?php echo e($customer->location_remark); ?></td>
                                        </tr>

                                        <tr><th colspan=4 style="background:silver">APPLICATION DETAILS</th></tr>
                                        <tr>
                                            <td>Application Number</td>
                                            <td><?php echo e($application->application_number); ?></td>
                                            <td>Nearest Dawasa</td>
                                            <td><?php echo e($application->nearest_office); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Application Category</td>
                                            <td><?php echo e($application->application_category); ?></td>
                                            <td>Service Required</td>
                                            <td><?php echo e($application->service_required); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Customer Category</td>
                                            <td><?php echo e($application->customer_category); ?></td>
                                            <td>Property Ownership</td>
                                            <td><?php echo e($application->property_ownership); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Propert Reference#</td>
                                            <td><?php echo e($application->property_reference); ?></td>
                                            <td>Application Date</td>
                                            <td><?php echo e(Carbon\Carbon::parse($application->created_at)->isoFormat('LLLL')); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Application Description</td>
                                            <td colspan="3"><?php echo e($application->application_description); ?></td>
                                        </tr>
                                </table>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="float-left">
                                <a class="btn btn-info" href="<?php echo e(route('new-application')); ?>">&laquo;&nbsp;<?php echo e(_('Prev')); ?></a>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dawasa.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\dawasa\resources\views/management/show_new.blade.php ENDPATH**/ ?>