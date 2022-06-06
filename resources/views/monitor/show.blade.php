@extends('monitor.home')
@section('main')
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title">{{ _('VICTIM\'S INCIDENT DETAILS') }}</h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h4><strong>{{ _('Legal and Human Rights Centre') }}</strong></h4>
                                    <img src="{{ asset('images/app/lhrc_logo.jpg') }}" class="d-block mx-auto img-responsive" alt="lhrc-logo" title="lhrc-logo" width="70px" height="70px"/>
                                    <h4 class="text-center" ><strong>{{ _('Human Right Violations Reporting System') }}</strong></h4>
                                    <h4 class="text-center" style="text-decoration: underline; text-decoration-color:lightslategray; text-underline-offset: 2px;" >
                                        {{ ('VICTIM\'S INCIDENT INFORMATION FOR'.' '.strtoupper($incident->right_violated).' '.'VIOLANCE')}}
                                    </h4>
                                </div>
                            </div>

                            <div class="col-lg-12 margin-tb table-responsive">
                                <table  class="table table-bordered table-hover">
                                    <tr><th colspan=4 style="background:silver">VICTIM'S INCIDENT DETAILS</th></tr>
                                        <tr>
                                            <td>Victim Name</td>
                                            <td>{{ ucfirst($user->first_name) }}&nbsp;{{ ucfirst($user->middle_name) }}&nbsp;{{ ucfirst($user->last_name) }}</td>
                                            <td>Gender/Sex</td>
                                            <td>{{$user->gender}}</td>
                                            {{-- <td>Victim ID#</td>
                                            <td>{{ $user->identity_no }}</td> --}}
                                        </tr>
                                        <tr>
                                            {{-- <td>Victim ID</td>
                                            <td>{{$user->identity_type}}</td> --}}
                                            {{-- <td>Gender</td>
                                            <td>{{$user->gender}}</td> --}}
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

                                        <tr><th colspan=4 style="background:silver">INCIDENT LOCATION DETAILS</th></tr>
                                        <tr>
                                            <td>Region</td>
                                            <td>{{$incident->region}}</td>
                                            <td>District</td>
                                            <td>{{$incident->district}}</td>
                                        </tr>
                                        <tr>
                                            <td>Ward/Area Name</td>
                                            <td>{{$incident->ward}}</td>
                                            <td>Street Name</td>
                                            <td>{{$incident->street}}</td>
                                        </tr>
                                        {{-- <tr>
                                            <td>Street Name</td>
                                            <td>{{$suspect->street_name}}</td>
                                            <td>House Number</td>
                                            <td>{{$suspect->house_no}}</td>
                                        </tr> --}}
                                        <tr>
                                            <td>Incident Remarks</td>
                                            <td colspan="3">{{$incident->incident_remarks}}</td>
                                        </tr>

                                        <tr><th colspan=4 style="background:silver">SUSPECT'S INCIDENT DETAILS</th></tr>
                                        <tr>
                                            <td>Incident Number</td>
                                            <td>{{$incident->incident_number}}</td>
                                            <td>Suspect Name</td>
                                            <td>{{$suspect->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Gender/Sex</td>
                                            <td>{{ $suspect->gender}}</td>
                                            <td>Appr. Age</td>
                                            <td>{{$suspect->age.' '.'years'}}</td>
                                        </tr>
                                        <tr>
                                            <td>Tribe</td>
                                            <td>{{ $suspect->tribe}}</td>
                                            <td>Religion</td>
                                            <td>{{$suspect->religion}}</td>
                                        </tr>
                                        <tr>
                                            <td>Merital Status</td>
                                            <td>{{$suspect->merital_status}}</td>
                                            <td>Incident Date</td>
                                            <td>{{ Carbon\Carbon::parse($incident->created_at)->isoFormat('LLLL') }}</td>
                                        </tr>

                                        <tr>
                                            <td>Suspect Description</td>
                                            <td colspan="3">{{  $suspect->suspect_remarks}}</td>
                                            {{-- <td>{{ Carbon\Carbon::parse($incident->created_at)->format('l jS  F Y h:i:s A') }}</td> --}}
                                            {{-- <td>{{ Carbon\Carbon::parse($incident->created_at)->format('j F, Y') }}</td> --}}
                                        </tr>

                                        <tr>
                                            <td>Incident Photos & Videos</td>
                                            <td colspan="3" style="background:white">
                                                <a class="btn float-left" href="{{ route('photos', $incident->id) }}" style="background:silver"><i class="fa fa-file-image-o" aria-hidden="true"></i> {{ _($incident->photos) }} <i class="fa fa-download" aria-hidden="true"></i></a>
                                                <a class="btn float-right" href="{{ route('videos', $incident->id) }}" style="background:silver" ><i class="fa fa-file-video-o" aria-hidden="true"></i> {{ ($incident->video) }} <i class="fa fa-download" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                </table>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="float-left">
                                <a class="btn btn-info" href="{{ route('index-incident') }}">&laquo;&nbsp;{{ _('Prev') }}</a>
                            </div>

                            <div class="float-right">
                                <a class="btn btn-success" href="{{ route('monitor-create', $incident->id) }}">{{ _('Validate') }}&nbsp;&raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
