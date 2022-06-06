@extends('dawasa.home')
@section('main')
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title">{{ _('CUSTOMER\'S APPLICATION DETAILS') }}
                              
                            </h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h4><strong>{{ _('Dar es Salaam Water and Sanitation Authority') }}</strong></h4>
                                </div>

                                <div class="mx-auto">
                                    <img src="{{ asset('images/dawasa/dawasa_logo.png')}}" class="mx-auto d-block img-responsive" alt="Dawasa-logo" title="Dawasa-logo" width="115px" height="100px"/>
                                </div>

                                <div>
                                    <h4 class="text-center" ><strong>{{ __('APPLICATION AND AGREEMENT FOR WATER SUPPLY') }}</strong></h4>
                                </div>

                                <div class="lead pb-0">
                                    <h4 class="text-center" style="text-decoration: underline; text-decoration-color:lightslategray; text-underline-offset: 2px;" >
                                        {{ ('CUSTOMER\'S APPLICATION INFORMATION FOR'.' '.strtoupper($application->service_required).' '.'SERVICES')}}
                                    </h4> 
                                </div>
                            </div>

                            <div class="col-lg-12 margin-tb table-responsive">
                                <table  class="table table-bordered table-hover">
                                    <tr><th colspan=4 style="background:silver">CUSTOMER APPLICATION DETAILS</th></tr>
                                        <tr>
                                            <td>Customer Name</td>
                                            <td>{{ ucfirst($user->first_name) }}&nbsp;{{ ucfirst($user->middle_name) }}&nbsp;{{ ucfirst($user->last_name) }}</td>
                                            <td>Customer ID#</td>
                                            <td>{{ $user->identity_no }}</td>
                                        </tr>
                                        <tr>
                                            <td>Customer ID</td>
                                            <td>{{$user->identity_type}}</td>
                                            <td>Gender</td>
                                            <td>{{$user->gender}}</td>
                                        </tr>
                                        <tr>
                                            <td>Date of Birth</td>
                                            <td>{{ Carbon\Carbon::parse($user->birth_date)->format('j F, Y') }}</td>
                                            <td>Mobile Number</td>
                                            <td>+{{$user->mobile_no}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email Adrress</td>
                                            <td>{{$user->email}}</td>
                                            <td>Telephone Number</td>
                                            <td>+{{$user->mobile_no}}</td>
                                        </tr>

                                    <tr><th colspan=4 style="background:silver">LOCATION DETAILS</th></tr>
                                        <tr>
                                            <td>Physical Name</td>
                                            <td>{{$customer->physical_name}}</td>
                                            <td>Plot Number</td>
                                            <td>{{$customer->plot_no}}</td>
                                        </tr>
                                        <tr>
                                            <td>Area Name</td>
                                            <td>{{$customer->area_name}}</td>
                                            <td>Block Number</td>
                                            <td>{{$customer->block_no}}</td>
                                        </tr>
                                        <tr>
                                            <td>Street Name</td>
                                            <td>{{$customer->street_name}}</td>
                                            <td>House Number</td>
                                            <td>{{$customer->house_no}}</td>
                                        </tr>
                                        <tr>
                                            <td>Location Remark</td>
                                            <td colspan="3">{{$customer->location_remark}}</td>
                                        </tr>

                                    <tr><th colspan=4 style="background:silver">APPLICATION DETAILS</th></tr>
                                        <tr>
                                            <td>Application Number</td>
                                            <td>{{$application->application_number}}</td>
                                            <td>Nearest Dawasa</td>
                                            <td>{{$application->nearest_office}}</td>
                                        </tr>
                                        <tr>
                                            <td>Application Category</td>
                                            <td>{{ $application->application_category}}</td>
                                            <td>Service Required</td>
                                            <td>{{$application->service_required}}</td>
                                        </tr>
                                        <tr>
                                            <td>Customer Category</td>
                                            <td>{{ $application->customer_category}}</td>
                                            <td>Property Ownership</td>
                                            <td>{{$application->property_ownership}}</td>
                                        </tr>

                                        <tr>
                                            <td>Propert Reference#</td>
                                            <td>{{$application->property_reference}}</td>
                                            <td>Application Date</td>
                                            <td>{{ Carbon\Carbon::parse($application->created_at)->isoFormat('LLLL') }}</td>
                                        </tr>

                                        <tr>
                                            <td>Application Remark</td>
                                            <td colspan="3">{{  $application->application_description }}</td>
                                        </tr>
                        
                                    @if( isset($survey))
                                        <tr><th colspan=4 style="background:silver">SURVEY DETAILS</th></tr>
                                        <tr>
                                            <td>Job Tittle</td>
                                            <td>{{$survey->application_category}}</td>
                                            <td>CA/BA Code</td>
                                            <td>{{$survey->caba_code}}</td>
                                        </tr>
                                        <tr>
                                            <td>Infrastructure Existing</td>
                                            <td>{{$survey->infrastructure}}</td>
                                            <td>Registered Dawasa#</td>
                                                @if (isset($survey->account_number))
                                                    <td>{{$survey->account_number}}</td>
                                                @else
                                                    <td>{{"No Account Registered"}}</td>
                                                @endif   
                                        </tr>
                                        <tr>
                                            <td>Tariff Category</td>
                                            <td>{{$survey->tariff }}</td>
                                            <td>Distance from Main</td>
                                            <td>{{$survey->distance_main}}m</td>
                                        </tr>
                                        <tr>
                                            <td>Tapping Lat & Long</td>
                                            <td>{{ $survey->tapping_latitude}},&nbsp;{{ $survey->tapping_longitude}}</td>
                                            <td>Trench Depth</td>
                                            <td>{{$survey->trench_depth}}m</td>
                                        </tr>

                                        <tr>
                                            <td>Total Service Cost</td>
                                            <td>{{number_format($survey->service_line_cost, 2, '.', ',')}} Tsh</td>
                                            <td>Surveyor Name</td>
                                            <td>{{$survey->surveyor_name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Engineer/Approval Name</td>
                                            <td>{{$survey->approval_name}}</td>
                                            <td>Surveyed Date</td>
                                            <td>{{ Carbon\Carbon::parse($survey->created_at)->isoFormat('LLLL') }}</td>
                                        </tr>
                
                                        <tr>
                                            <td>Survey Remark</td>
                                            <td colspan="3">{{  $survey->survey_remarks}}</td>
                                        </tr>

                                        @if( isset($payment) && ($payment->amount >= $application->service_line_cost))
                                            <tr><th colspan=4 style="background:silver">PAYMENT DETAILS</th></tr>
                                            <tr>
                                                <td>Transaction ID#</td>
                                                <td>{{$payment->transaction_id}}</td>
                                                <td>Payment For</td>
                                                <td>{{$application->service_required.' '.'Services'}}</td>
                                            </tr>
                                            <tr>
                                                <td>Total Amount Paid</td>
                                                <td>{{number_format($payment->amount, 2, '.', ',')}} Tsh</td>
                                                <td>Paid By</td>
                                                <td>{{$payment->name}}</td>
                                            </tr>
                                            <tr>
                                                <td>Payment Mobile No</td>
                                                <td>+{{$payment->mobile_no}}</td>
                                                <td>Payment Date</td>
                                                <td>{{ Carbon\Carbon::parse($payment->payment_date)->isoFormat('LLLL') }}</td>
                                            </tr>
                                
                                            @if (isset($construct))
                                                <tr><th colspan=4 style="background:silver">INSTALLATION DETAILS</th></tr>
                                                <tr>
                                                    <td>Service Installed</td>
                                                    <td>{{$construct->service_installed}}</td>
                                                    <td>Sequence Number</td>
                                                    <td>{{$construct->meter_sequence_no}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Meter Number</td>
                                                    <td>{{$construct->meter_number}}</td>
                                                    <td>Initial Reading</td>
                                                    <td>{{$construct->initial_reading}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Meter Size</td>
                                                    <td>{{$construct->meter_size}}</td>
                                                    <td>Estimated Consuption</td>
                                                    <td>{{$construct->meter_consuption}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Meter Digits</td>
                                                    <td>{{$construct->meter_digits}}</td>
                                                    <td>Meter Installer Name</td>
                                                    <td>{{$construct->meter_installer}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Meter Latitude</td>
                                                    <td>{{ $construct->meter_latitude}}</td>
                                                    <td>Engineer/Approval Name</td>
                                                    <td>{{$construct->approval_name}}</td>
                                                </tr>

                                                <tr>
                                                    <td>Meter Longitude</td>
                                                    <td>{{ $construct->meter_longitude}}</td>
                                                    <td>Installed Date</td>
                                                    <td>{{ Carbon\Carbon::parse($construct->created_at)->isoFormat('LLLL') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Installation Remarks</td>
                                                    <td colspan="3">{{ $construct->installation_remarks}}</td>
                                                </tr>
                                            @else
                                                <tr>
                                                    <td>Application Status</td>
                                                    <td class="btn-default" colspan="3"><h5 class=" text-muted">{{ $state->application_state}}<h5></td>
                                                </tr>
                                            @endif

                                            @else
                                            <tr>
                                                <td>Application Status</td>
                                                <td class="btn-default" colspan="3"><h5 class=" text-muted">{{ $state->application_state}}<h5></td>
                                            </tr>
                                        @endif
                                    @else
                                        <tr>
                                            <td>Application Status</td>
                                            <td class="btn-default" colspan="3"><h5 class=" text-muted">{{ $state->application_state}}<h5></td>
                                        </tr>
                                    @endif
                                </table>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="float-left">
                                <a class="btn btn-info" href="{{ route('index-application') }}">&laquo;&nbsp;{{ _('Prev') }}</a>
                            </div>

                            <div class="float-right">
                                <a class="btn btn-info" href="{{ route('index-application') }}">{{ _('Back') }}&nbsp;&raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection