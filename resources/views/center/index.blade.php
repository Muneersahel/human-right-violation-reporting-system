@extends('admin.home')
@section('main')
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title col-md-12 col-sm-12">{{ _('LHRC CENTER MANAGEMENT') }}
                                <span classs="mr-auto">
                                    <button type="button" class="btn btn-info btn-sm float-right" data-toggle="modal" data-target="#modal-create"><i class="fa fa-plus"></i> Create center</button>
                                    {{-- <a class="btn btn-info btn-sm float-right" href="{{ url('admin/create-center') }}"><i class="fa fa-plus"></i> Create center</a> --}}
                                </span>
                            </h3>
                        </div>
                        {{-- <?
                        // Blade::extend(function($value) {
                            // return preg_replace('/\{\?(.+)\?\}/', '<?php ${1} ?>', $value);
                        })
                        ?> --}}

                        {{-- <?
                            // php $i = 1; ?>
                        {{$i}} --}}
                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h2>List of LHRC Center</h2>
                                </div>

                                <div class="float-right">
                                    {{-- <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 200px;">
                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div> --}}
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

                        <div class="modal fade" id="modal-show">
                            <div class="modal-dialog modal-lg">           
                                @includeIf('center.show')          
                            </div>
                        </div>

                        <div class="modal fade" id="modal-create">
                            <div class="modal-dialog modal-lg">           
                                @includeIf('center.create')
                            </div>
                        </div>

                        {{-- <div class="modal fade" id="modal-edit">
                            <div class="modal-dialog modal-lg">           
                                @includeIf('center.edit')          
                            </div>
                        </div> --}}
                          
                          <div class="modal fade" id="modal-edit">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Extra Large Modal</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <p>One fine body&hellip;</p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->

                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="table-responsive col-md-12 col-sm-12 col-lg-12">
                                    <table id="example" class="table table-bordered table-hover display">
                                        <thead>
                                            <tr class="text-left">
                                                <th style="width: 2%">#</th>
                                                <th style="width: 25%">Center Name</th>
                                                <th style="width: 20%">Center Director</th>
                                                <th style="width: 20%">Center E-Address</th>
                                                <th style="width: 13%">Center Phone#</th>
                                                <th style="width: 20%" class="text-center">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @if(count($centers) < 1)
                                                <tr>
                                                    <td class="btn-default" colspan="7"><h3 class="text-center">No center records found<h3></td>
                                                </tr>
                                            @else
                                                @foreach ($centers as $center)
                                                    <tr>
                                                        <td>{{ ++$i }}</td>
                                                        <td>{{ ucfirst($center->name) }}</td>
                                                        <td>{{ ucfirst($center->director) }}</td>
                                                        <td>{{ $center->email }}</td>
                                                        <td>{{ '+'.$center->mobile_no }}</td>                                                        
                                                        <td>
                                                            <form action="{{ route('destroy-center', $center->id) }}" method="post" onsubmit="return window.confirm('Are you sure you want to delete this lhrc center...?') ">

                                                                {{-- <a class="btn btn-info btn-sm" href="{{ url('admin/show-center', $center->id) }}"><i class="fa fa-ellipsis-h"></i>&nbsp;{{ _('More') }}</a> --}}
                                                                {{-- <a class="btn btn-primary btn-sm" href="{{ url('admin/edit-center', $center->id) }}"><i class="fa fa-pencil"></i>&nbsp;{{ _('Edit') }}</a> --}}
                                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-show" data-id = "{{ $center->id }}"><i class="fa fa-ellipsis-h"></i>&nbsp;{{ _('More') }}</button>
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-edit" data-ids = "{{ $center->id }}" ><i class="fa fa-pencil"></i>&nbsp;{{ _('Edit') }}</button>

                                                                @csrf
                                                                @method('delete')

                                                                <button type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"></i>&nbsp;{{ _('Delete') }}</button>
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
                            <span> Showing {{ $centers->firstItem() }} to {{ $centers->lastItem() }} of {{ $centers->total() }} results</span>
                            <span class="float-right" id="paginate">{!! $centers->links() !!}</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Javascript -->
    <script type="text/javascript">
        $(document).on('click', 'button[data-id]', function (e) {
            var id = $(this).attr('data-id');
            $.ajax({
                type: "POST",
                url:"{{url('showcenter')}}",
                // url: '/showcenter',
                // data: JSON.stringify(data),
                data: {'id': id},
                // async: false,
                // dataType: 'JSON', 
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    console.log(data);
                    alert(data);
                    // data = JSON.parse();  
                }
            });
        });
    </script>
@endsection
