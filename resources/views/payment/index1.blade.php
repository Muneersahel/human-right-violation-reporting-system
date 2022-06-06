@extends('customer.home')
    @section('main')
        <div class="content-wrapper">
            <section class="content">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-info text-white">
                                <h3 class="card-title">{!! ('CUSTOMER PAYMENT INFORMATION')!!}
                                    <span class="float-right">
                                        @if (isset($application))
                                            <a class="btn btn-info btn-sm" href="{{ url('customer/confirm-payment') }}"><i class="fa fa-user-plus"></i> confirm Payment</a> 
                                        @endif
                                    </span>
                                </h3>
                            </div>

                            <div class="justify-content-center col-md-12 mt-3">
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
                                                    <th>Transaction_Id</th>
                                                    <th>Amount_Paid</th>
                                                    <th>Customer_Name</th>
                                                    <th>Mobile_Number</th>
                                                    <th>Payment_Date</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @if(isset($payment))
                                                    <tr class="text-justify">
                                                        <td>{{ ++$i }}</td>
                                                        <td>{{ $payment->transaction_id }}</td>
                                                        <td>{{ number_format($payment->amount, 2, '.', ',') }}</td>
                                                        <td>{{ strtoupper($payment->name) }}</td>
                                                        <td>+{{ $payment->mobile_no }}</td>
                                                        <td>{{ Carbon\Carbon::parse($payment->payment_date)->isoFormat('LLLL') }}</td>
                                                    </tr>
                                                @else
                                                    <tr>
                                                        <td class="btn-default" colspan="6"><h3 class="text-center text-muted">No payment confirmation records found<h3></td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- /.card-body -->

                            <div class="card-footer">
                                <div class="offset-md-10">
                                    {{-- {!! $payment->links() !!} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endsection
                                  