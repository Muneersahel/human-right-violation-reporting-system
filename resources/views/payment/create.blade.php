@extends('survey.home')
@section('main')
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title push-right-7">{{ _('New Water Application Payment') }}</h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h4><strong>{{ _('Dar es salaam Water and Sanitation Suthority') }}</strong></h4>
                                </div>

                                <div class="mt-2 mb-2">
                                    <img src="{{ asset('images/dawasa/dawasa_logo.png') }}" class="offset-md-5" alt="Dawasa-logo" title="Dawasa-logo" width="115px" height="100px"/>
                                </div>

                                <div>
                                    <h4 class="text-center" ><strong>{{ _('APPLICATION AND AGREEMENT FOR WATER SUPPLY') }}</strong></h4>
                                </div>

                                <div class="lead">
                                    <h4 class="text-center" style="text-decoration: underline; text-decoration-color:lightslategray; text-underline-offset: 2px;" > 
                                        {{ _('MAGOMENI, KINONDONI SOUTH-DAR ES SALAAM AND COAST ZONE') }}
                                    </h4>
                                </div>
                            </div>

                            <form  class="form-horizontal mx-auto" role="form" method="post" autocomplete="on" action="{{ route('payment-store') }}" enctype="multipart/form-data" style="width: 85%; border: 1px solid lightslategray">
                                @csrf

                                <div class="card-body">
                                   <div>@include('inc.massages')</div> 

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
                                                <label for="amount" class="col-md-5 col-form-label text-md-right">{{_ ('Amount') }}</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control{{ $errors->has('amount') ? ' is-invalid' : '' }}" name="amount" id="amount" value="{{ old('amount') }}" required >

                                                    @if ($errors->has('amount'))
                                                    <span class="invalid-feedback">
                                                      <strong>{{ $errors->first('amount') }}</strong>
                                                    </span>
                                                  @endif
                                                </div>
                                            </div>
                                            
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

                                        {{-- <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="property_reference" class="col-md-5 col-form-label text-md-right" >{{_ ('Property reference') }} <span style="color: red"><strong>*</strong></span></label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control{{ $errors->has('property_reference') ? ' is-invalid' : '' }}" name="property_reference" id="property_reference" value="{{ old('property_reference') }}" required >
            
                                                    @if ($errors->has('property_reference'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('property_reference') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="nearest_office" class="col-md-5 col-form-label text-md-right">{{ _('Nearest Dawasa') }}</label>
                                                <div class="col-md-7">
                                                    <select class="form-control{{ $errors->has('nearest_office') ? ' is-invalid' : '' }}" name="nearest_office" id="nearest_office" required >
                                                        <option value="">{{ _('Choose nearby dawasa office') }}</option>
                                                        <option value="Bagamoyo" id="Bagamoyo">{{ _('Bagamoyo') }}</option>
                                                        <option value="Ilala" id="Ilala">{{ _('Ilala') }}</option>
                                                        <option value="Kawe" id="Kawe">{{ _('Kawe') }}</option>
                                                        <option value="Kibaha" id="Kibaha">{{ _('Kibaha') }}</option>
                                                        <option value="Kinondoni" id="Kinondoni">{{ _('Kinondoni') }}</option>
                                                        <option value="Magomeni" id="Magomeni">{{ _('Magomeni') }}</option>
                                                        <option value="Tabata" id="Tabata">{{ _('Tabata') }}</option>
                                                        <option value="Tegete" id="Tegete">{{ _('Tegete') }}</option>
                                                        <option value="Temeke" id="Temeke">{{ _('Temeke') }}</option>
                                                        <option value="Ubungo" id="Ubungo">{{ _('Ubungo') }}</option>
                                                        <option value="Others" id="others">{{ _('Others') }}</option>
                                                    </select>

                                                    @if ($errors->has('nearest_office'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('nearest_office') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>  
                                            </div>
            
                                            <div class="form-group row">
                                                <label for="application_description" class="col-md-5 col-form-label text-md-right">{{ _('Application remark') }}</label>
                                                <div class="col-md-7">
                                                  <textarea rows="3" cols="3" class="form-control{{ $errors->has('application_description') ? ' is-invalid' : '' }}" name="application_description" placeholder="{{ _('Any further information about your application') }}" required >{{ old('application_description') }}</textarea>
                  
                                                  @if ($errors->has('application_description'))
                                                    <span class="invalid-feedback">
                                                      <strong>{{ $errors->first('application_description') }}</strong>
                                                    </span>
                                                  @endif
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="float-left">
                                        <a class="btn btn-info" href="{{ route('customer/home') }}">&laquo; {{ _('Back') }}</a> 
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