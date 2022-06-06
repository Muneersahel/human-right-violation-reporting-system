@extends('admin.home')
    @section('main')
        <div class="content-wrapper">
            <section class="content">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-info text-white">
                                <h3 class="card-title">{{ _( $user->center_code.' '.'SmS MANAGEMENT') }}</h3>
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

                            <div class="modal fade" id="modal-default">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Sms Center Assignment</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>

                                        @foreach ($sms as $message)
                                            <form action="{{ route('update-sms', $message->id) }}"  method="post" enctype="multipart/form-data">@endforeach
                                                @csrf
                                                @method('put')

                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class=" col-md-12">
                                                            <div class="form-group row">
                                                                <label for="sms_center" class="col-md-3 col-form-label text-md-right">{{_ ('LHRC Center') }}</label>
                                                                <div class="col-md-8">
                                                                    <select class="form-control select2{{ $errors->has('sms_center') ? ' is-invalid' : '' }}" name="sms_center" id="sms_center" required>
                                                                        {{-- <option value="" >{{ _('Choose lhrc\'s center') }}</option> --}}
                                                                        @foreach ($center as $code=>$name)
                                                                            <option value="{{ $code }}" @selected(old('sms_center') == $name)>{{ $name }}</option>
                                                                        @endforeach
                                                                    </select>
                
                                                                    @if ($errors->has('sms_center'))
                                                                        <span class="invalid-feedback">
                                                                            <strong>{{ $errors->first('sms_center') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        {{-- @endforeach --}}
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="table-responsive col-md-12 col-sm-12 col-lg-12">
                                        <table class="table table-bordered table-hover display">
                                            <thead>
                                                <tr class="text-left">
                                                    <th style="width: 2%">#</th>
                                                    <th style="width: 16%">Received_Date</th>
                                                    <th style="width: 2%">From</th>
                                                    <th style="width: 65%">Message</th>
                                                    <th style="width: 15%">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @if(count($sms) < 1)
                                                    <tr>
                                                        <td class="btn-default" colspan="7"><h3 class="text-center">No new sms has received yet<h3></td>
                                                    </tr>
                                                @else
                                                    @foreach ($sms as $message)
                                                        <tr class="text-justify">
                                                            <td>{{ ++$i }}</td>
                                                            <td>{{ Carbon\Carbon::parse($message->received_date)->format('j F, Y h:i A') }}</td>
                                                            <td>{{'+'.$message->mobile_no }}</td>
                                                            <td class="text-left">{{ $message->sms }}</td>
                                                            {{-- <td class="text-left">{{ substr($message->sms,0,96).'...' }}</td> --}}
                                                            <td>
                                                                <form action="{{ route('destroy-sms', $message->id) }}"  method="post" onsubmit="return confirm('Are you sure you want to delete this message...?') ">
                                                                    <div class="justify-content-between">
                                                                        
                                                                        {{-- <a class="btn btn-success btn-sm" href="{{ route('edit-sms', $message->id) }}"><i class="fa fa-pencil"></i>&nbsp;{{ _('Assign') }}</a> --}}
                                                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-default"><i class="fa fa-pencil"></i>&nbsp;{{ _('Assign') }}</button>
    
                                                                        @csrf
                                                                        @method('delete')
    
                                                                        <button type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"></i>&nbsp;{{ _('Delete') }}</button>
                                                                    </div>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- /.card-body -->

                            <div class="card-footer">
                                <div class="col-sm-12 col-md-12" role="status" aria-live="polite">
                                    <span> Showing {{ $sms->firstItem() }} to {{ $sms->lastItem() }} of {{ $sms->total() }} results</span>
                                    <span class="pull-right" id="paginate">{!! $sms->links() !!}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Javascript -->
        <script src="{{ asset('js/select/select2.full.min.js') }}"></script>
        <script>
            //Initialize Select2 Elements
            $('.select2').select2()
            $('.select2bs4').select2({
            theme: 'bootstrap4'
            })
            
            $('#modal-default').modal({
                keyboard: false
            })

            $('.swalDefaultSuccess').click(function() {
                Toast.fire({
                icon: 'success',
                title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
        </script>
    @endsection
