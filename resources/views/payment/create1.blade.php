@extends('customer.home')
@section('main')
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title push-right-7">{{ _('PAYMENT CONFIRMATION') }}</h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h4><strong>{{ _('Dar es salaam Water and Sanitation Suthority') }}</strong></h4>
                                </div>

                                <div class="mt-2 mb-2">
                                    <img src="{{ asset('images/dawasa/dawasa_logo.png') }}" class="img-responsive d-block mx-auto" alt="Dawasa-logo" title="Dawasa-logo" width="110px" height="80px"/>
                                </div>

                                <div>
                                    <h4 class="text-center" ><strong>{{ _('APPLICATION AND AGREEMENT FOR WATER SUPPLY') }}</strong></h4>
                                </div>

                                <div class="lead">
                                    <h4 class="text-center" style="text-decoration: underline; text-decoration-color:lightslategray; text-underline-offset: 2px;" > 
                                        {{ 'CUSTOMER PAYMENT CONFIRMATION FOR'.' '.strtoupper($application->service_required).' '.'SERVICES' }}
                                    </h4>
                                </div>
                            </div>

                            <form  class=" form-horizontal mx-auto" role="form" method="post" autocomplete="on" action="{{ route('store-payment') }}" enctype="multipart/form-data" style="width: 85%; border: 1px solid lightslategray">
                                @csrf

                                <div class="card-body">
                                  
                                    @include('inc.massages')
                                
                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group row">
                                                <label for="transaction_id" class="col-md-5 col-form-label text-md-right">{{_ ('Transaction_ID') }}:</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control{{ $errors->has('transaction_id') ? ' is-invalid' : '' }}" name="transaction_id" id="transaction_id" value="{{ old('transaction_id') }}" required >
                                                    
                                                    @if ($errors->has('transaction_id'))
                                                    <span class="invalid-feedback">
                                                      <strong>{{ $errors->first('transaction_id') }}</strong>
                                                    </span>
                                                  @endif
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="amount" class="col-md-5 col-form-label text-md-right">{{_ ('Amount Paid') }}</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control{{ $errors->has('amount') ? ' is-invalid' : '' }}" name="amount" id="amount" value="{{ old('amount') }}" required >

                                                    @if ($errors->has('amount'))
                                                    <span class="invalid-feedback">
                                                      <strong>{{ $errors->first('amount') }}</strong>
                                                    </span>
                                                  @endif
                                                </div>
                                            </div>
                                            
                                               
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="name" class="col-md-5 col-form-label text-md-right">{{_ ('Customer Name') }}</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" value="{{ old('name') }}" required >

                                                    @if ($errors->has('name'))
                                                    <span class="invalid-feedback">
                                                      <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                  @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="mobile_no" class="col-md-5 col-form-label text-md-right" >{{_ ('Mobile Number') }}</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control{{ $errors->has('mobile_no') ? ' is-invalid' : '' }}" name="mobile_no" id="mobile_no" value="{{ old('mobile_no') }}" required >
                                                    
                                                    @if ($errors->has('mobile_no'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('mobile_no') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="float-left">
                                        <a class="btn btn-info" href="{{ route('show-payment') }}">&laquo; {{ _('Back') }}</a> 
                                    </div>
    
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-info" >{{ _('Submit') }} &raquo;</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop