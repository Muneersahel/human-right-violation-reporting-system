
<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title"><?php echo e(_('CUSTOMER\'S APPLICATION & SURVEY DETAILS')); ?>

                              
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

                                    <tr><th colspan=4 style="background:silver">SURVEY DETAILS</th></tr>
                                        <tr>
                                            <td>Job Tittle</td>
                                            <td><?php echo e($survey->application_category); ?></td>
                                            <td>CA/BA Code</td>
                                            <td><?php echo e($survey->caba_code); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Infrastructure Existing</td>
                                            <td><?php echo e($survey->infrastructure); ?></td>
                                            <td>Registered Dawasa#</td>
                                            <td><?php echo e($survey->account_number); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tariff Category</td>
                                            <td><?php echo e($survey->tariff); ?></td>
                                            <td>Distance from Main</td>
                                            <td><?php echo e($survey->distance_main); ?>m</td>
                                        </tr>
                                        <tr>
                                            <td>Tapping Lat & Long</td>
                                            <td><?php echo e($survey->tapping_latitude); ?>,&nbsp;<?php echo e($survey->tapping_longitude); ?></td>
                                            <td>Trench Depth</td>
                                            <td><?php echo e($survey->trench_depth); ?>m</td>
                                        </tr>

                                        <tr>
                                            <td>Total Service Cost</td>
                                            <td><?php echo e(number_format($survey->service_line_cost, 2, '.', ',')); ?>/=Tsh</td>
                                            <td>Surveyor Name</td>
                                            <td><?php echo e($survey->surveyor_name); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Total Amount Payed</td>
                                            <td><?php echo e(number_format($survey->service_line_cost, 2, '.', ',')); ?>/=Tsh</td>
                                            <td>Approval Name</td>
                                            <td><?php echo e($survey->approval_name); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Transaction ID#</td>
                                            <td><?php echo e($application->application_number); ?></td>
                                            <td>Surveyed Date</td>
                                            <td><?php echo e(Carbon\Carbon::parse($survey->created_at)->isoFormat('LLLL')); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Survey Description</td>
                                            <td colspan="3"><?php echo e($survey->survey_remarks); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Survey Sketch Layout</td>
                                            <td colspan="3" style="background:silver">
                                                <a class="btn btn-sm btn-success float-right" href="<?php echo e(route('download', $application->id)); ?>"><i class="fa fa-download"></i> <?php echo e(_('Download site layout sketch')); ?></a>
                                            </td>
                                        </tr>
                                </table>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="float-left">
                                <a class="btn btn-info" href="<?php echo e(route('constructor-index')); ?>">&laquo;&nbsp;<?php echo e(_('Prev')); ?></a>
                            </div>

                            <div class="float-right">
                                <a class="btn btn-success" href="<?php echo e(route('constructor-create', $application->id)); ?>"><?php echo e(_('Construct')); ?>&nbsp;&raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('construct.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\dawasa\resources\views/construct/show.blade.php ENDPATH**/ ?>