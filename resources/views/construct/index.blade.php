@extends('construct.home')
@section('main')
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title">{{ _( $constructor->dawasa_office.' '.'Customer Appplications') }}</h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h4>List of {{ $constructor->dawasa_office }} Surveyed Applications</h4>
                                </div>

                                {{-- <div class="float-right">
                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 200px;">
                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>

                        <div class="justify-content-center col-md-12">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                        </div>

                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="table-responsive col-md-12 col-sm-12 col-lg-12">
                                    <table  class="table table-bordered table-hover" role="grid" id="example2">
                                        <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>Customer Name</th>
                                                <th>Identity#</th>
                                                <th>Service_Request</th>
                                                <th>Application#</th>
                                                <th>App.date</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @if( isset($application) && (count($application) === 1))
                                                <tr role="row" class="odd">
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ ucfirst($application[0]->first_name) }}&nbsp;{{ ucfirst($application[0]->middle_name)}}&nbsp;{{ ucfirst($application[0]->last_name) }}</td>
                                                    <td>{{ $application[0]->identity_no }}</td>
                                                    <td>{{ $application[0]->service_required }}</td>
                                                    <td>{{ $application[0]->application_number }}</td>
                                                    <td>{{ Carbon\Carbon::parse($application[0]->application_date)->format('j F, Y') }}</td>
                                                    <td>
                                                        <a class="btn btn-info btn-sm" href="{{ url('constructor/application-details',$application[0]->application_id) }}">More</a>
                                                        <a class="btn btn-success btn-sm" href="{{ url('constructor/application-construct',$application[0]->application_id) }}">Construct</a>
                                                        <a class="btn btn-primary btn-sm" href="mailto:{{ $application[0]->email }}">Email</a>
                                                    </td>
                                                </tr>

                                            @elseif( isset($application) && (count($application) > 1))
                                                @foreach ($application as $applicant)
                                                    <tr role="row" class="odd">
                                                        <td>{{ ++$i }}</td>
                                                        <td>{{ ucfirst($applicant->first_name) }}&nbsp;{{ ucfirst($applicant->middle_name)}}&nbsp;{{ ucfirst($applicant->last_name) }}</td>
                                                        <td>{{ $applicant->identity_no }}</td>
                                                        <td>{{ $applicant->service_required }}</td>
                                                        <td>{{ $applicant->application_number }}</td>
                                                        <td>{{ Carbon\Carbon::parse($applicant->application_date)->format('j F, Y') }}</td>
                                                        <td>
                                                            <a class="btn btn-info btn-sm" href="{{ url('constructor/application-details', $applicant->application_id) }}">More</a>
                                                            <a class="btn btn-success btn-sm" href="{{ url('constructor/application-construct', $applicant->application_id) }}">Construct</a>
                                                            <a class="btn btn-primary btn-sm" href="mailto:{{ $applicant->email }}">Email</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td class="btn-default" colspan="8"><h3 class="text-center">No recent customer application<h3></td>
                                                </tr>

                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row mt-3 mb-3">
                                <div class="col-sm-4 col-md-4">
                                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to {{count($application)}} of {{count($application)}} entries</div>
                                </div>

                                <div class="col-md-8">
                                    <div class="offset-md-9" id="paginate">{!! $application->render() !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

   