
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
                                    <img src="<?php echo e(asset('images/dawasa/dawasa_logo.png')); ?>" class="mx-auto d-block img-responsive" alt="Dawasa-logo" title="Dawasa-logo" width="115px" height="100px"/>
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
                                            <td>Application Remark</td>
                                            <td colspan="3"><?php echo e($application->application_description); ?></td>
                                        </tr>
                        
                                    <?php if( isset($survey)): ?>
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
                                                <?php if(isset($survey->account_number)): ?>
                                                    <td><?php echo e($survey->account_number); ?></td>
                                                <?php else: ?>
                                                    <td><?php echo e("No Account Registered"); ?></td>
                                                <?php endif; ?>   
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
                                            <td><?php echo e(number_format($survey->service_line_cost, 2, '.', ',')); ?> Tsh</td>
                                            <td>Surveyor Name</td>
                                            <td><?php echo e($survey->surveyor_name); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Engineer/Approval Name</td>
                                            <td><?php echo e($survey->approval_name); ?></td>
                                            <td>Surveyed Date</td>
                                            <td><?php echo e(Carbon\Carbon::parse($survey->created_at)->isoFormat('LLLL')); ?></td>
                                        </tr>
                
                                        <tr>
                                            <td>Survey Remark</td>
                                            <td colspan="3"><?php echo e($survey->survey_remarks); ?></td>
                                        </tr>

                                        <?php if( isset($payment) && ($payment->amount >= $application->service_line_cost)): ?>
                                            <tr><th colspan=4 style="background:silver">PAYMENT DETAILS</th></tr>
                                            <tr>
                                                <td>Transaction ID#</td>
                                                <td><?php echo e($payment->transaction_id); ?></td>
                                                <td>Payment For</td>
                                                <td><?php echo e($application->service_required.' '.'Services'); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Total Amount Paid</td>
                                                <td><?php echo e(number_format($payment->amount, 2, '.', ',')); ?> Tsh</td>
                                                <td>Paid By</td>
                                                <td><?php echo e($payment->name); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Payment Mobile No</td>
                                                <td>+<?php echo e($payment->mobile_no); ?></td>
                                                <td>Payment Date</td>
                                                <td><?php echo e(Carbon\Carbon::parse($payment->payment_date)->isoFormat('LLLL')); ?></td>
                                            </tr>
                                
                                            <?php if(isset($construct)): ?>
                                                <tr><th colspan=4 style="background:silver">INSTALLATION DETAILS</th></tr>
                                                <tr>
                                                    <td>Service Installed</td>
                                                    <td><?php echo e($construct->service_installed); ?></td>
                                                    <td>Sequence Number</td>
                                                    <td><?php echo e($construct->meter_sequence_no); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Meter Number</td>
                                                    <td><?php echo e($construct->meter_number); ?></td>
                                                    <td>Initial Reading</td>
                                                    <td><?php echo e($construct->initial_reading); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Meter Size</td>
                                                    <td><?php echo e($construct->meter_size); ?></td>
                                                    <td>Estimated Consuption</td>
                                                    <td><?php echo e($construct->meter_consuption); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Meter Digits</td>
                                                    <td><?php echo e($construct->meter_digits); ?></td>
                                                    <td>Meter Installer Name</td>
                                                    <td><?php echo e($construct->meter_installer); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Meter Latitude</td>
                                                    <td><?php echo e($construct->meter_latitude); ?></td>
                                                    <td>Engineer/Approval Name</td>
                                                    <td><?php echo e($construct->approval_name); ?></td>
                                                </tr>

                                                <tr>
                                                    <td>Meter Longitude</td>
                                                    <td><?php echo e($construct->meter_longitude); ?></td>
                                                    <td>Installed Date</td>
                                                    <td><?php echo e(Carbon\Carbon::parse($construct->created_at)->isoFormat('LLLL')); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Installation Remarks</td>
                                                    <td colspan="3"><?php echo e($construct->installation_remarks); ?></td>
                                                </tr>
                                            <?php else: ?>
                                                <tr>
                                                    <td>Application Status</td>
                                                    <td class="btn-default" colspan="3"><h5 class=" text-muted"><?php echo e($state->application_state); ?><h5></td>
                                                </tr>
                                            <?php endif; ?>

                                            <?php else: ?>
                                            <tr>
                                                <td>Application Status</td>
                                                <td class="btn-default" colspan="3"><h5 class=" text-muted"><?php echo e($state->application_state); ?><h5></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td>Application Status</td>
                                            <td class="btn-default" colspan="3"><h5 class=" text-muted"><?php echo e($state->application_state); ?><h5></td>
                                        </tr>
                                    <?php endif; ?>
                                </table>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="float-left">
                                <a class="btn btn-info" href="<?php echo e(route('index-application')); ?>">&laquo;&nbsp;<?php echo e(_('Prev')); ?></a>
                            </div>

                            <div class="float-right">
                                <a class="btn btn-info" href="<?php echo e(route('index-application')); ?>"><?php echo e(_('Back')); ?>&nbsp;&raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dawasa.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\dawasa\resources\views/dawasa/show.blade.php ENDPATH**/ ?>