@extends('monitor.home')
    @section('main')
        <div class="content-wrapper">
            <section class="content">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-info text-white">
                                <h3 class="card-title">{{ _( $user->center_code.' '.'SmS ASSIGNED') }}</h3>
                            </div>

                            <div class="card-body">
                                <div class="col-lg-12 margin-tb">
                                    <div class="pull-left">
                                        <h4>{{ _( 'List of'.' '.$user->center_code.' '.'SmS Received') }}</h4>
                                    </div>

                                    <div class="float-right">
                                        <div class="card-tools">
                                            {{-- <div class="input-group input-group-sm" style="width: 200px;">
                                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
    
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.card-body -->
                            
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
                                        <table class="table table-bordered table-hover display">
                                            <thead>
                                                <tr class="text-left">
                                                    <th style="width: 2% !important;">#</th>
                                                    <th style="width: 16%">Received_Date</th>
                                                    <th style="width: 2%">From</th>
                                                    <th style="width: 75%">Message</th>
                                                    <th style="width: 5%">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @if(count($sms) < 1)
                                                    <tr>
                                                        <td class="btn-default" colspan="7"><h3 class="text-center">No new sms has been assigned for {{ strtoupper($user->center_code) }} center<h3></td>
                                                    </tr>
                                                @else
                                                    @foreach ($sms as $message)
                                                        <tr class="text-justify">
                                                            <td>{{ ++$i }}</td>
                                                            <td>{{ Carbon\Carbon::parse($message->received_date)->format('j F, Y h:i A') }}</td>
                                                            <td>{{'+'.$message->mobile_no }}</td>
                                                            <td class="text-left">{{ $message->sms }}</td>
                                                            {{-- <td class="text-left">{{ substr($message->sms,0,96).'...' }}</td> --}}
                                                            <td><a class="btn btn-info btn-sm" href="{{ route('create-victim', $message->id) }}" ><i class="fa fa-plus-square"></i>&nbsp;{{ _('Attend') }}</a></td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- /.card-body -->

                            <div class="card-footer">
                                <div class="col-sm-4 col-md-12">
                                    {{-- <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing {{ $sms->firstItem() }} to {{ $sms->lastItem() }} of {{ $sms->total() }} entries --}}
                                    <div class="dataTables_info"  role="status" aria-live="polite"> {!! __('Showing') !!}
                                        <span class="font-medium">{{ $sms->firstItem() }}</span> {!! __('to') !!}
                                        <span class="font-medium">{{ $sms->lastItem() }}</span> {!! __('of') !!}
                                        <span class="font-medium">{{ $sms->total() }}</span> {!! __('results') !!}
                                        <span class="float-right" id="paginate">{!! $sms->render() !!}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endsection
