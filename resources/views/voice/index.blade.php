@extends('admin.home')
    @section('main')
        <div class="content-wrapper">
            <section class="content">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-info text-white">
                                <h3 class="card-title">{{ _( $user->center_code.' '.'VOICES MANAGEMENT') }}</h3>
                            </div>

                            <div class="card-body">
                                <div class="col-lg-12 margin-tb">
                                    <div class="pull-left">
                                        <h4>{{ _( 'List of'.' '.$user->center_code.' '.'Voices Received') }}</h4>
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
                                            <h4 class="modal-title">Voice Center Assignment</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>

                                        @foreach ($voices as $voice)
                                        <form action="{{ route('update-voice', $voice->voice_id) }}"  method="post" enctype="multipart/form-data">@endforeach
                                            @csrf
                                            @method('put')

                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class=" col-md-12">
                                                        <div class="form-group row">
                                                            <label for="voice_center" class="col-md-3 col-form-label text-md-right">{{_ ('LHRC Center') }}</label>
                                                            <div class="col-md-8">
                                                                <select class="form-control select2{{ $errors->has('voice_center') ? ' is-invalid' : '' }}" name="voice_center" id="voice_center" required>
                                                                    @foreach ($center as $code=>$name)
                                                                        <option value="{{ $code }}" @selected(old('voice_center') == $name)>{{ $name }}</option>
                                                                    @endforeach
                                                                </select>
            
                                                                @if ($errors->has('voice_center'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('voice_center') }}</strong>
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
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="table-responsive col-md-12 col-sm-12 col-lg-12">
                                        <table class="table table-bordered table-hover display">
                                            <thead>
                                                <tr class="text-left">
                                                    <th style="width: 3%">#</th>
                                                    <th style="width: 20%">Victim_Name</th>
                                                    <th style="width: 12%">Mobile_Number</th>
                                                    <th style="width: 15%">E-Address</th>
                                                    <th style="width: 15%">Birth_Date&Sex</th>
                                                    <th style="width: 15%">Voice_Received..</th>
                                                    <th style="width: 20%" class="text-center">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @if(count($voices) < 1)
                                                    <tr>
                                                        <td class="btn-default" colspan="7"><h3 class="text-center">No new voice has received<h3></td>
                                                    </tr>
                                                @else
                                                    @foreach ($voices as $voice)
                                                        <tr class="text-justify">
                                                            <td>{{ ++$i }}</td>
                                                            <td>{{ ucfirst($voice->first_name) }}&nbsp;{{ ucfirst($voice->middle_name)}}&nbsp;{{ ucfirst($voice->last_name) }}</td>
                                                            <td>{{'+'.$voice->mobile_no }}</td>
                                                            <td>{{ $voice->email }}</td>
                                                            <td>{{ Carbon\Carbon::parse($voice->birth_date)->format('j F, Y').', '.$voice->gender }}</td>
                                                            <td>{{ Carbon\Carbon::parse($voice->received_date)->format('j F, Y h:i A') }}</td>
                                                            
                                                            <td>
                                                                <form action="{{ route('destroy-voice', $voice->voice_id) }}"  method="post" onsubmit="return confirm('Are you sure you want to delete this voice...?') ">
                                                                    <div class="justify-content-between">
                                                                        
                                                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-default"><i class="fa fa-pencil"></i>&nbsp;{{ _('Assign') }}</button>
                                                                        <a class="btn btn-info btn-sm" href="{{ route('voices', $voice->voice_id) }}"><i class="fa fa-download"></i>&nbsp;{{ _('Voice') }}</a>
    
                                                                        @csrf
                                                                        @method('delete')
    
                                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>&nbsp;{{ _('Delete') }}</button>
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
                                    <span> Showing {{ $voices->firstItem() }} to {{ $voices->lastItem() }} of {{ $voices->total() }} results</span>
                                    <span class="pull-right" id="paginate">{!! $voices->links() !!}</span>
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
