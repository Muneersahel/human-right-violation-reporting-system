@extends('layouts.errors')
@section('content')
    <div class="container">
        <div class="content-wrapper">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white" >{{ __('Customer Registration Form') }}</div>
                  
                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h4><strong>{{ _('Legal and Human Rights Centre') }}</strong></h4>
                                    <img src="{{ asset('images/app/lhrc_logo.jpg') }}" class="d-block mx-auto img-responsive" alt="lhrc-logo" title="lhrc-logo" width="70px" height="70px"/>
                                    <h4 class="text-center" ><strong>{{ _('Human Right Violations Reporting System') }}</strong></h4>
                                    <h4 class="text-center" style="text-decoration: underline; text-decoration-color:lightslategray; text-underline-offset: 2px;" > {{ _('APPLICATION AND AGREEMENT FOR MEMBERSHIP') }}</h4>
                                </div>
                            </div>

                            <form  class="form-horizontal" role="form" method="post" autocomplete="on" action="{{ route('register')}}" enctype="multipart/form-data" >
                                @csrf
                                @include('inc.massages')
              
                                {{-- <div class="card-body">  offset-md-1 py-3 style="width: 85%; border: 1px solid lightslategray"--}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ _('First name') }}</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" id="first_name" name="first_name" value="{{ old('first_name') }}" placeholder="first_name" required >
                    
                                                @if ($errors->has('first_name'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('first_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label  for="middle_name" class="col-md-4 col-form-label text-md-right">{{ _('Middle name') }}</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control{{ $errors->has('middle_name') ? ' is-invalid' : '' }}" id="middle_name" name="middle_name" value="{{ old('middle_name') }}" placeholder="middle_name" required>
                                                
                                                @if ($errors->has('middle_name'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('middle_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ _('Last name') }}</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" id="last_name" value="{{ old('last_name') }}" placeholder="last_name" required >
                                                
                                                @if ($errors->has('last_name'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('last_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>
                                            <div class="col-md-7">
                                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" value="{{ old('email') }}" placeholder="E-Mail Address" required>
                
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right">{{ _('Mobile no') }}</label>
                                            <div class="col-md-7">
                                                <input type="tel" class="form-control{{ $errors->has('mobile_no') ? ' is-invalid' : '' }}" name="mobile_no" id="mobile_no" value="{{ old('mobile_no') }}" placeholder="enter 12 digits number" required >
                
                                                @if ($errors->has('mobile_no'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('mobile_no') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ _('Gender') }}</label>
                                            <div class="col-md-7">
                                                <select class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}"  name="gender" id="gender" required >
                                                    <option value="">{{ _('Choose gender') }}</option>
                                                    <option value="Male">{{ _('Male') }}</option>
                                                    <option value="Female">{{ _('Female') }}</option>
                                                </select>
                                            </div>  
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="birth_date" class="col-md-4 col-form-label text-md-right">{{ _('Date of birth') }}</label>
                                            <div class="col-md-7">
                                                <input type="date" class="form-control{{ $errors->has('birth_date') ? ' is-invalid' : '' }}" name="birth_date" id="birth_date" value="{{ old('birth_date') }}" required>
                    
                                                @if ($errors->has('birth_date'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('birth_date') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="tribe" class="col-md-4 col-form-label text-md-right">{{ __('Tribe') }}</label>
                                            <div class="col-md-7">
                                                <select class="form-control{{ $errors->has('tribe') ? ' is-invalid' : '' }}"  name="tribe" id="tribe" required >
                                                    <option value="">{{ __('Choose tribe') }}</option>
                                                    <option id="Haya" value="Haya">{{ __('Haya') }}</option>
                                                    <option id="Sukuma" value="Sukuma">{{ __('Sukuma') }}</option>
                                                    <option id="Chaga" value="Chaga">{{ __('Chaga') }}</option>
                                                    <option id="Nyamwezi" value="Nyamwezi">{{ __('Nyamwezi') }}</option>
                                                </select>
                
                                                @if ($errors->has('tribe'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('tribe') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="religion" class="col-md-4 col-form-label text-md-right">{{ __('Religion') }}</label>
                                            <div class="col-md-7">
                                                <select class="form-control{{ $errors->has('religion') ? ' is-invalid' : '' }}"  name="religion" id="religion" required >
                                                    <option value="">{{ __('Choose religion') }}</option>
                                                    <option id="Christian" value="Christian">{{ __('Christian') }}</option>
                                                    <option id="Muslim" value="Muslim">{{ __('Muslim') }}</option>
                                                    <option id="Others" value="Others">{{ __('Others') }}</option>
                                                </select>
            
                                                @if ($errors->has('religion'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('religion') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="merital_status" class="col-md-4 col-form-label text-md-right">{{ __('Merital Status') }}</label>
                                            <div class="col-md-7">
                                                <select class="form-control{{ $errors->has('merital_status') ? ' is-invalid' : '' }}"  name="merital_status" id="merital_status" required >
                                                    <option value="">{{ __('Merital status') }}</option>
                                                    <option value="Single">{{_ ('Single') }}</option>
                                                    <option value="Marriage">{{_ ('Marriage') }}</option>
                                                    <option value="Divorced">{{_ ('Divorced') }}</option>
                                                    <option value="Widowed">{{_ ('Widowed') }}</option>
                                                    <option value="Others">{{_ ('Others') }}</option>
                                                </select>
            
                                                @if ($errors->has('merital_status'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('merital_status') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="region" class="col-md-4 col-form-label text-md-right">{{ __('Region') }}</label>
                                            <div class="col-md-7">
                                                <select class="form-control{{ $errors->has('region') ? ' is-invalid' : '' }}" name="region" id="region" required >
                                                    <option value="">{{ __('Choose region') }}</option>
                                                    <option value="Dar es Salaaam" id="Dar es Salaaam"><span class="active">{{ __('Dar es Salaaam') }}</span></option>
                                                </select>
                
                                                @if ($errors->has('region'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('region') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
              
                                        <div class="form-group row">
                                            <label for="district" class="col-md-4 col-form-label text-md-right">{{ __('District') }}</label>
                                            <div class="col-md-7">
                                                <select class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" name="district" id="district" required >
                                                    <option value="">{{ __('Choose district') }}</option>
                                                    <option value="Ilala" id="Ilala">{{ __('Ilala') }}</option>
                                                    <option value="Kinondoni" id="Kinondoni">{{ __('Kinondoni') }}</option>
                                                    <option value="Ubungo" id="Ubungo">{{ __('Ubungo') }}</option>
                                                    <option value="Temeke" id="Temeke">{{ __('Temeke') }}</option>
                                                    <option value="Kigamboni" id="Kigamboni">{{ __('Kigamboni') }}</option>
                                                </select>
                
                                                @if ($errors->has('district'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('district') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
              
                                        <div class="form-group row">
                                            <label for="ward" class="col-md-4 col-form-label text-md-right">{{ __('Ward/Area') }}</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control{{ $errors->has('ward') ? ' is-invalid' : '' }}" name="ward" id="ward" value="{{ old('ward') }}" placeholder="Enter ward" required >
                
                                                {{-- <select class="form-control{{ $errors->has('ward') ? ' is-invalid' : '' }}" name="ward" id="ward" required >
                                                    <option value="">{{ __('Choose ward') }}</option>
                                                </select> --}}
                
                                                @if ($errors->has('ward'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('ward') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="street" class="col-md-4 col-form-label text-md-right">{{ __('Street/Village') }}</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control{{ $errors->has('street') ? ' is-invalid' : '' }}" name="street" id="street" value="{{ old('street') }}" placeholder="Enter street" required>
                                                    
                                                @if ($errors->has('street'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('street') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                            <div class="col-md-7">
                                                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" placeholder="Enter password" required>
                    
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                            <div class="col-md-7">
                                                <input type="password" class="form-control{{ $errors->has('password-confirm') ? ' is-invalid' : '' }}" name="password_confirmation" id="password-confirm"  placeholder="Repeat password" required>

                                                @if ($errors->has('password-confirm'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('password-confirm') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="location_remark" class="col-md-4 col-form-label text-md-right">{{ _('Location remarks') }}</label>
                                            <div class="col-md-7">
                                                <textarea rows="3" cols="0" class="form-control{{ $errors->has('location_remarks') ? ' is-invalid' : '' }}" name="location_remarks" placeholder="{{ _('Any further information about your location') }}" required maxlength="150">{{ old('location_remarks') }}</textarea>
                                                <small id="location_remarks" class="form-text text-muted">Location remarks should not exceed 150 chars.</small>
                    
                                                @if ($errors->has('location_remarks'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('location_remarks') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="user_image" class="col-md-4 col-form-label text-md-right">{{ __('Customer Image') }}</label>
                                            <div class="col-md-7">
                                                <input type="file" class="form-control{{ $errors->has('user_image') ? ' is-invalid' : '' }}" name="user_image" id="user_image" value="{{ old('user_image')}}" style="width: 100%" class="btn btn-default" required >
                                                <small id="user_image" class="form-text text-muted">Passport should have a white or blue background.</small>
                    
                                                @if ($errors->has('user_image'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('user_image') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="float-left mb-2">
                                    <a class="btn btn-info" href="javascript:;" onclick = "history.back() ">&laquo;&nbsp;{{ _('Back') }}</a>
                                </div>
                                <div class="float-right mb-2">
                                    <button type="submit" class="btn btn-success" >{{ _('Register') }}&nbsp;&raquo;</button>
                                </div>
                            </div>  
                        </form>
                    </div>
                </div>
            </div>
         </div>
    </div>
@endsection