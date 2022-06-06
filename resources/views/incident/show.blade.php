@extends('customer.home')
@section('main')
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title">{{ _('VICTIM INCIDENT\'S  PROGRESS') }}</h3>
                        </div>

                         <div class="card-body">
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

                            <div class="row justify-content-center">
                                <div class="col-lg-12 margin-tb">
                                    <div class="pull-left">
                                        @if ( isset($incident) && (count($incident) === 1))
                                            <h2>{{ $incident[0]->right_violated }}&nbsp;{!! ('incident progress') !!}</h2>

                                        @elseif( isset($incident) && (count($incident) > 1))
                                            <h2>{!! ('Victim\'s incident progressess') !!}</h2>
                                        @else
                                            <h2>{!! ('No incident progress found') !!}</h2>
                                        @endif
                                    </div>
                                </div>

                                <div class="table-responsive col-md-12 col-sm-12 col-lg-12">
                                    <table  class="table table-bordered table-hover " role="grid" id="example2">
                                        <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>Victim_Name</th>
                                                <th>Right_Violated</th>
                                                <th>Incident_Number</th>
                                                <th>Incident_Date</th>
                                                <th>Repoted_Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @if( isset($incident) && (count($incident) === 1))
                                                <tr role="row" class="odd">
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ ucfirst($incident[0]->first_name) }}&nbsp;{{ ucfirst($incident[0]->middle_name) }}&nbsp;{{ ucfirst($incident[0]->last_name)}}</td>
                                                    <td>{{ $incident[0]->right_violated }}</td>
                                                    <td>{{ $incident[0]->incident_number }}</td>
                                                    <td>{{ Carbon\Carbon::parse($incident[0]->date_time)->isoFormat('LLLL')}}</td>
                                                    <td>{{ Carbon\Carbon::parse($incident[0]->reported_date)->isoFormat('LLLL')}}</td>
                                                    <td><span class="badge badge-info"><h6>{{ ($incident[0]->incident_status) }}</h6></span></td>
                                                </tr>

                                            @elseif( isset($incident) && (count($incident) > 1))
                                                @foreach ($incident as $victim)
                                                    <tr role="row" class="odd">
                                                        <td>{{ ++$i }}</td>
                                                        <td>{{ ucfirst($victim->first_name) }}&nbsp;{{ ucfirst($victim->middle_name) }}&nbsp;{{ ucfirst($victim->last_name)}}</td>
                                                        <td>{{ $victim->right_violated}}</td>
                                                        <td>{{ $victim->incident_number }}</td>
                                                        <td>{{ Carbon\Carbon::parse($victim->date_time)->isoFormat('LLLL')}}</td>
                                                        <td>{{ Carbon\Carbon::parse($victim->reported_date)->isoFormat('LLLL')}}</td>
                                                        <td><span class="badge badge-info"><h6>{{ $victim->incident_status }}</h6></span></td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td class="btn-default" colspan="10"><h3 class="text-center text-muted">{!!'Please report the incident to see the progress'!!}<h3></td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-12" role="status" aria-live="polite">
                                    <span> Showing {{ $incident->firstItem() }} to {{ $incident->lastItem() }} of {{ $incident->total() }} entries</span>
                                    <span class="pull-right" id="paginate">{!! $incident->render() !!}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
