@extends('monitor.home')
@section('main')
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title">{{ _( $monitor->center_code.' '.'Victim Incidents') }}</h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h4>List of {{ $monitor->center_code}} Reported Incidents</h4>
                                </div>

                                {{-- <div class="float-right">
                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 200px;">
                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                            <input class="form-control button" type="search" placeholder="Search" aria-label="Search">

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
                                                <th>Victim Name</th>
                                                <th>Mobile#</th>
                                                <th>Right_Violated</th>
                                                <th>Incident#</th>
                                                <th>Incident_date</th>
                                                <th>Reported_date</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @if( isset($incident) && (count($incident) === 1))
                                                <tr role="row" class="odd">
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ ucfirst($incident[0]->first_name) }}&nbsp;{{ ucfirst($incident[0]->middle_name)}}&nbsp;{{ ucfirst($incident[0]->last_name) }}</td>
                                                    <td>{{ '+'.$incident[0]->mobile_no }}</td>
                                                    <td>{{ $incident[0]->right_violated }}</td>
                                                    <td>{{ $incident[0]->incident_number }}</td>
                                                    <td>{{ Carbon\Carbon::parse($incident[0]->date_time)->isoFormat('LLLL')}}</td>
                                                    <td>{{ Carbon\Carbon::parse($incident[0]->reported_date)->isoFormat('LLLL')}}</td>
                                                    <td>
                                                        <a class="btn btn-info btn-sm" href="{{ url('monitor/incident-details',$incident[0]->incident_id) }}"><i class="fa fa-ellipsis-v"></i> More</a>
                                                        <a class="btn btn-success btn-sm" href="{{ url('monitor/incident-validation',$incident[0]->incident_id) }}"><i class="fa fa-pencil"></i> Validate</a>
                                                        <a class="btn btn-primary btn-sm" href="mailto:{{ $incident[0]->email }}"><i class="fa fa-envelope-o"></i> Email</a>
                                                    </td>
                                                </tr>

                                            @elseif( isset($incident) && (count($incident) > 1))
                                                @foreach ($incident as $victim)
                                                    <tr role="row" class="odd">
                                                        <td>{{ ++$i }}</td>
                                                        <td>{{ ucfirst($victim->first_name) }}&nbsp;{{ ucfirst($victim->middle_name)}}&nbsp;{{ ucfirst($victim->last_name) }}</td>
                                                        <td>{{ '+'.$victim->mobile_no }}</td>
                                                        <td>{{ $victim->right_violated }}</td>
                                                        <td>{{ $victim->incident_number }}</td>
                                                        <td>{{ Carbon\Carbon::parse($victim->date_time)->format('j F, Y h:i A') }}</td>
                                                        <td>{{ Carbon\Carbon::parse($victim->reported_date)->format('j F, Y h:i A') }}</td>
                                                        {{-- <td>{{ Carbon\Carbon::parse($victim->date_time)->isoFormat('LLLL')}}</td> --}}
                                                        {{-- <td>{{ Carbon\Carbon::parse($victim->reported_date)->isoFormat('LLLL')}}</td> --}}
                                                        <td>
                                                            <form action="{{ route('destroy-incident', $victim->incident_id) }}"  method="post" onsubmit="return confirm('Are you sure you want to delete this incident...?') ">

                                                                <a class="btn btn-info btn-sm" href="{{ url('monitor/incident-details', $victim->incident_id) }}"><i class="fa fa-ellipsis-v"></i> More</a>
                                                                <a class="btn btn-success btn-sm" href="{{ url('monitor/incident-validation', $victim->incident_id) }}"><i class="fa fa-pencil"></i> Validate</a>

                                                                @csrf
                                                                @method('delete')

                                                                <button type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"></i>&nbsp;{{ _('Delete') }}</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td class="btn-default" colspan="8"><h3 class="text-center">No recent victim incident's found<h3></td>
                                                </tr>

                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="col-sm-4 col-md-12">
                                <div class="dataTables_info"  role="status" aria-live="polite"> {!! __('Showing') !!}
                                    <span class="font-medium">{{ $incident->firstItem() }}</span> {!! __('to') !!}
                                    <span class="font-medium">{{ $incident->lastItem() }}</span> {!! __('of') !!}
                                    <span class="font-medium">{{ $incident->total() }}</span> {!! __('results') !!}
                                    <span class="float-right" id="paginate">{{ $incident->links('vendor.pagination.bootstrap-4') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
