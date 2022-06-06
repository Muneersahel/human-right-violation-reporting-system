@extends('construct.home')
@section('main')
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title">{{ _('CUSTOMER\'S CONSTRUCTION WORKS') }}</h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h4><strong>{{ _('Dar es Salaam Water and Sanitation Authority') }}</strong></h4>
                                </div>

                                <div class="mb-2">
                                    <img src="{{ asset('images/dawasa/dawasa_logo.png')}}" class="mx-auto d-block img-responsive" alt="Dawasa-logo" title="Dawasa-logo" width="115px" height="100px"/>
                                </div>

                                <div>
                                    <h4 class="text-center" ><strong>{{ __('APPLICATION AND AGREEMENT FOR WATER SUPPLY') }}</strong></h4>
                                </div>

                                <div class="lead pb-1">
                                    <h4 class="text-center" style="text-decoration: underline; text-decoration-color:lightslategray; text-underline-offset: 2px;">
                                        {{ ('CUSTOMER\'S CONSTRUCTION WORKS FOR'.' '.strtoupper($application->service_required).' '.'SERVICES') }}
                                </div>
                            </div>

                            <form  class="form-horizontal mx-auto" style="width: 95%; border: 1px solid lightslategray" id="demo-modal" role="form" method="post" autocomplete="on" action="" enctype="multipart/form-data" >
                                @csrf

                                <div class="pt-3">@include('inc.massages')</div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="service_installed" class="col-md-5 col-form-label text-md-right">{{_ ('Service Installed') }}:</label>
                                                <div class="col-md-7">
                                                    <select class="form-control{{ $errors->has('service_installed') ? ' is-invalid' : '' }}" name="service_installed" id="service_installed" required>
                                                        <option value="">{{_ ('Choose service installed') }}</option>
                                                        <option value="Water"> {{_ ('Water') }} </option>
                                                        <option value="Sewerage only"> {{_ ('Sewerage only') }}  </option>
                                                        <option value="Water & Sewerage"> {{_ ('Water & Sewerage') }}  </option>
                                                        <option value="Others"> {{_ ('Others') }}  </option>
                                                    </select>

                                                    @if ($errors->has('service_installed'))
                                                    <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('service_installed') }}</strong>
                                                    </span>
                                                @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="meter_number" class="col-md-5 col-form-label text-md-right">{{ _('Meter Number') }}</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control{{ $errors->has('meter_number') ? ' is-invalid' : '' }}" id="meter_number" name="meter_number" value="{{ old('meter_number')}}" required >

                                                    @if ($errors->has('meter_number'))
                                                        <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('meter_number') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="meter_digits" class="col-md-5 col-form-label text-md-right">{{ _('Meter Digits') }}</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control{{ $errors->has('meter_digits') ? ' is-invalid' : '' }}" id="meter_digits" name="meter_digits" value="{{ old('meter_digits')}}" required >

                                                    @if ($errors->has('meter_digits'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('meter_digits') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="meter_size" class="col-md-5 col-form-label text-md-right">{{ _('Meter Size') }}</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control{{ $errors->has('meter_size') ? ' is-invalid' : '' }}" id="meter_size" name="meter_size" value="{{ old('meter_size')}}" required >

                                                    @if ($errors->has('meter_size'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('meter_size') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="meter_gps" class="col-md-6 col-form-label text-md-right">{{ _('Meter coordinate(UTM84)') }}</label>
                                                <div class="form-group row">
                                                    <label for="meter_latitude" class="col-md-5 col-form-label text-md-right">{{ _('Latitude') }}</label>
                                                    <div class="col-md-7">
                                                        <input type="text" class="form-control{{ $errors->has('meter_latitude') ? ' is-invalid' : '' }}" name="meter_latitude" id="meter_latitude" value="{{ old('meter_latitude')}}" required >
                                                    
                                                        @if ($errors->has('meter_latitude'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('meter_latitude') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="meter_longitude" class="col-md-5 col-form-label text-md-right">{{ _('Longitude') }}</label>
                                                    <div class="col-md-7">
                                                        <input type="text" class="form-control{{ $errors->has('meter_longitude') ? ' is-invalid' : '' }}" id="meter_longitude" name="meter_longitude" value="{{ old('meter_longitude')}}" required >
                                                        
                                                        @if ($errors->has('meter_longitude'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('meter_longitude') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="meter_consuption" class="col-md-5 col-form-label text-md-right">{{ _('Estimated Consuption') }}</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control{{ $errors->has('meter_consuption') ? ' is-invalid' : '' }}" id="meter_consuption" name="meter_consuption" value="{{ old('meter_consuption')}}" required >
    
                                                    @if ($errors->has('meter_consuption'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('meter_consuption') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="initial_reading" class="col-md-4 col-form-label text-md-right">{{ _('Initial Reading') }}</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control{{ $errors->has('initial_reading') ? ' is-invalid' : '' }}" id="initial_reading" name="initial_reading" value="{{ old('initial_reading')}}" required >
    
                                                    @if ($errors->has('initial_reading'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('initial_reading') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        
                                            <div class="form-group row">
                                                <label for="meter_sequence_no" class="col-md-4 col-form-label text-md-right">{{ _('Sequence Number') }}</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control{{ $errors->has('meter_sequence_no') ? ' is-invalid' : '' }}" id="meter_sequence_no" name="meter_sequence_no" value="{{ old('meter_sequence_no')}}" required >

                                                    @if ($errors->has('meter_sequence_no'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('meter_sequence_no') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                        
                                            <div class="form-group row">
                                                <label for="meter_installer" class="col-md-4 col-form-label text-md-right">{{ _('Meter Installer name') }}</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control{{ $errors->has('meter_installer') ? ' is-invalid' : '' }}" id="meter_installer" name="meter_installer" value="{{ old('meter_installer')}}" required >

                                                    @if ($errors->has('meter_installer'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('meter_installer') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                        
                                            <div class="form-group row" >
                                                <label for="approval_name" class="col-md-4 col-form-label text-md-right">{{ _('Approved by(name)') }}</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control{{ $errors->has('approval_name') ? ' is-invalid' : '' }}" id="approval_name" name="approval_name" value="{{ old('approval_name')}}" required/>

                                                    @if ($errors->has('approval_name'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('approval_name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="installation_remarks" class="col-md-4 col-form-label text-md-right">{{ _('Installation Remark') }}</label>
                                                <div class="col-md-7">
                                                    <textarea rows="5" cols="5" class="form-control{{ $errors->has('installation_remarks') ? ' is-invalid' : '' }}" name="installation_remarks" id="installation_remarks" maxlength="150"  placeholder="{{ _('Any installation remarks') }}" required >{{ old('installation_remarks') }}</textarea>
                                                    <small id="installation_remarks" class="form-text text-muted">Installation remarks should not exceed 150 chars.</small>

                                                    @if ($errors->has('installation_remarks'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('installation_remarks') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {{-- </div> --}}

                                <div class="card-footer">
                                    <div class="float-left">
                                        <a class="btn btn-info" href="{{ route('constructor-index') }}">&laquo; {{ _('Back') }}</a> 
                                    </div>
        
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-success" >{{ _('Construct') }} &raquo;</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection