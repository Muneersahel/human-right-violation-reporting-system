@extends('dawasa.home')
    @section('main')
        <div class="content-wrapper">
            <section class="content">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-info text-white">
                                <h3 class="card-title">{{ ($user->dawasa_office)}} Customer Management</h3>
                            </div>

                            <div class="card-body">
                                <div class="col-lg-12 margin-tb">
                                    <div class="pull-left">
                                        <h4>List of {{ $user->dawasa_office }} Customers</h4>
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
                                        <table id="example" class="table table-bordered table-hover display">
                                            <thead>
                                                <tr class="text-left">
                                                    <th>#</th>
                                                    <th>Customer Name</th>
                                                    <th>ID_Type</th>
                                                    <th>TIN/ID#</th>
                                                    <th>Mobile #</th>
                                                    <th>Email Address</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @if(count($customers) < 1)
                                                    <tr>
                                                        <td class="btn-default" colspan="7"><h3 class="text-center">No customer records found<h3></td>
                                                    </tr>
                                                @else
                                                    @foreach ($customers as $customer)
                                                        <tr class="text-justify">
                                                            <td>{{ ++$i }}</td>
                                                            <td>{{ ucfirst($customer->first_name) }}&nbsp;{{ ucfirst($customer->middle_name) }}&nbsp;{{ ucfirst($customer->last_name) }}</td>
                                                            <td>{{ ucfirst($customer->identity_type) }}</td>
                                                            <td>{{ ucfirst($customer->identity_no) }}</td>
                                                            <td>+{{ $customer->mobile_no }}</td>
                                                            <td>{{ $customer->email }}</td>
                                                            <td>
                                                                <form action="{{ route('destroy-staff', $customer->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this staff...?') ">
                                                                    
                                                                    <a class="btn btn-info btn-sm" href="mailto::{{ $customer->email }}"><i class="fa fa-envelope-o"></i>&nbsp;{{ _('Email') }}</a>
                                                                    {{-- <a class="btn btn-primary btn-sm" href="{{ url('admin/edit-staff', $customer->id) }}"><i class="fa fa-pencil"></i>&nbsp;{{ _('Edit') }}</a> --}}

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
                                <div class="offset-md-10">
                                    {!! $customers->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endsection
