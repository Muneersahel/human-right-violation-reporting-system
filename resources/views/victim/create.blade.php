@extends('monitor.home')
@section('main')
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title">{{ _('Victim Registration and Incident Report') }}</h3>
                        </div>

                        <div class="card-body p-3">
                            <div class="bs-stepper">
                                <div class="bs-stepper-header" role="tablist">
                                    <div class="step" data-target="#logins-part">
                                        <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                                            <span class="bs-stepper-circle">1</span>
                                            <span class="bs-stepper-label">Victim Registration</span>
                                        </button>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step" data-target="#information-part">
                                        <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                                            <span class="bs-stepper-circle">2</span>
                                            <span class="bs-stepper-label">Incident Report</span>
                                        </button>
                                    </div>
                                </div>

                                <form  class="form-horizontal mx-auto py-3" role="form" method="post" autocomplete="on" action="{{ route('store-victim', $sms->id)}}" enctype="multipart/form-data"  style="width: 85%; border: 1px solid lightslategray" >
                                    @csrf
                                    @include('inc.massages')

                                    <div class="bs-stepper-content">
                                        <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                                            <div class="card-body">
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
                                                                <input type="tel" class="form-control{{ $errors->has('mobile_no') ? ' is-invalid' : '' }}" name="mobile_no" id="mobile_no" value="{{ $sms->mobile_no.' '.'(Sms reporting number)' }}" disabled required >

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
                                                                    <option value="Male" {{ old('gender') =='Male' ? 'selected="selected"' : '' }}>{{ _('Male') }}</option>
                                                                    <option value="Female" {{ old('gender') =='Female' ? 'selected="selected"' : '' }}>{{ _('Female') }}</option>
                                                                    {{-- <option value="Male" @if (Input::old('gender') == 'Male') selected = "selected" @endif>{{ _('Male') }}</option>
                                                                    <option value="Female" @if (Input::old('gender') == 'Female') selected = "selected" @endif>{{ _('Female') }}</option> --}}
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
                                                                    <option id="Christian" value="Christian" {{ old('religion') =='Christian' ? 'selected="selected"' : '' }}>{{ __('Christian') }}</option>
                                                                    <option id="Muslim" value="Muslim" {{ old('religion') =='Muslim' ? 'selected="selected"' : '' }}>{{ __('Muslim') }}</option>
                                                                    <option id="Others" value="Others" {{ old('religion') =='Others' ? 'selected="selected"' : '' }}>{{ __('Others') }}</option>
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
                                                                    <option value="Single" {{ old('merital_status') =='Single' ? 'selected="selected"' : '' }}>{{_ ('Single') }}</option>
                                                                    <option value="Marriage" {{ old('merital_status') =='Marriage' ? 'selected="selected"' : '' }}>{{_ ('Marriage') }}</option>
                                                                    <option value="Divorced" {{ old('merital_status') =='Divorced' ? 'selected="selected"' : '' }}>{{_ ('Divorced') }}</option>
                                                                    <option value="Widowed" {{ old('merital_status') =='Widowed' ? 'selected="selected"' : '' }}>{{_ ('Widowed') }}</option>
                                                                    <option value="Others" {{ old('merital_status') =='Others' ? 'selected="selected"' : '' }}>{{_ ('Others') }}</option>
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
                                                                    <option value="Dar es Salaaam" id="Dar es Salaaam" selected><span class="active">{{ __('Dar es Salaaam') }}</span></option>
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
                                                            <label for="user_image" class="col-md-4 col-form-label text-md-right">{{ __('Victim Image') }}</label>
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
                                            
                                            <hr>
                                                @if (!count($errors) > 0)
                                                <button class="btn btn-primary" onclick="stepper.next()">{{ _('Next') }}&nbsp;&raquo;</button>
                                                    
                                                    {{-- This is Richard --}}
                                                @else
                                                {{-- This is Petro --}}
                                                <button class="btn btn-warning" onclick="@disabled()">{{ _('Next') }}&nbsp;&raquo;</button>
                                                @endif
                                        </div>

                                        <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12"><h4 class="card-title push-right-7 h3">Incident Victim</h4></div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="incident_source" class="col-md-4 col-form-label text-md-right">{{_ ('Incident source') }}</label>
                                                            <div class="col-md-7">
                                                                <select class="form-control{{ $errors->has('incident_source') ? ' is-invalid' : '' }}" name="incident_source" id="incident_source" required>
                                                                    <option value="">{{_ ('Choose incident source') }}</option>
                                                                    <option value="Citizen" {{ old('incident_source') =='Citizen' ? 'selected="selected"' : '' }}><span class="active">{{_ ('Citizen') }}</span></option>
                                                                    <option value="Journalist" {{ old('incident_source') =='Journalist' ? 'selected="selected"' : '' }}>{{_ ('Journalist') }}</option>
                                                                    <option value="Politician" {{ old('incident_source') =='Politician' ? 'selected="selected"' : '' }}>{{_ ('Politician') }}</option>
                                                                    <option value="Activist" {{ old('incident_source') =='Activist' ? 'selected="selected"' : '' }}>{{_ ('Activist') }}</option>
                                                                    <option value="Others" {{ old('incident_source') =='Others' ? 'selected="selected"' : '' }}>{{ _('Others') }}</option>
                                                                </select>

                                                                @if ($errors->has('incident_source'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('incident_source') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group row">
                                                            <label for="issue_type" class="col-md-4 col-form-label text-md-right">{{_ ('Issue type') }}</label>
                                                            <div class="col-md-7">
                                                                <select class="form-control{{ $errors->has('issue_type') ? ' is-invalid' : '' }}" name="issue_type" id="issue_type" required >
                                                                    <option value=""> {{_ ('Choose issue type') }} </option>
                                                                    <option value="Property Ownership" {{ old('issue_type') =='Property Ownership' ? 'selected="selected"' : '' }}> {{_ ('Property Ownership') }} </option>
                                                                    <option value="Divorce Conflict" {{ old('issue_type') =='Divorce Conflict' ? 'selected="selected"' : '' }}> {{_ ('Divorce Conflict') }}  </option>
                                                                    <option value="Plot Delimiter" {{ old('issue_type') =='Plot Delimiter' ? 'selected="selected"' : '' }}> {{_ ('Plot Delimiter') }}  </option>
                                                                    <option value="Others" {{ old('issue_type') =='Others' ? 'selected="selected"' : '' }}> {{_ ('Others') }}  </option>
                                                                </select>

                                                                @if ($errors->has('issue_type'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('issue_type') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group row">
                                                            <label for="right_violated" class="col-md-4 col-form-label text-md-right">{{_ ('Right violated') }}</label>
                                                            <div class="col-md-7">
                                                                <select class="form-control{{ $errors->has('right_violated') ? ' is-invalid' : '' }}" name="right_violated" id="right_violated" required >
                                                                    <option value="">{{_ ('Choose right violated') }}</option>
                                                                    <option value="Political">{{_ ('Political Right') }}</option>
                                                                    <option value="Social">{{_ ('Social Right') }}</option>
                                                                    <option value="Financial">{{_ ('Financial Right') }}</option>
                                                                    <option value="Freedom of Speech">{{_ ('Freedom of Speech') }}</option>
                                                                    <option value="Property Ownership">{{_ ('Property Ownership') }}</option>
                                                                    <option value="Others">{{_ ('Others') }}</option>
                                                                </select>

                                                                @if ($errors->has('right_violated'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('right_violated') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="special_group" class="col-md-4 col-form-label text-md-right" >{{_ ('Special group') }}</label>
                                                            <div class="col-md-7">
                                                                <select class="form-control{{ $errors->has('special_group') ? ' is-invalid' : '' }}" name="special_group" id="special_group" required >
                                                                    <option value="" >{{_ ('Choose disability') }}</option>
                                                                    <option value="Physical" {{ old('special_group') =='Physical' ? 'selected="selected"' : '' }}>{{_ ('Physical') }}</option>
                                                                    <option value="Visual" {{ old('special_group') =='Visual' ? 'selected="selected"' : '' }}>{{_ ('Visual') }}</option>
                                                                    <option value="Hearing" {{ old('special_group') =='Hearing' ? 'selected="selected"' : '' }}>{{_ ('Hearing') }}</option>
                                                                    <option value="Speech" {{ old('special_group') =='Speech' ? 'selected="selected"' : '' }}>{{_ ('Speech') }}</option>
                                                                    <option value="Albinism" {{ old('special_group') =='Albinism' ? 'selected="selected"' : '' }}>{{_ ('Albinism') }}</option>
                                                                    <option value="Mental" {{ old('special_group') =='Mental' ? 'selected="selected"' : '' }}>{{_ ('Mental') }}</option>
                                                                    <option value="Mixed" {{ old('special_group') =='Mixed' ? 'selected="selected"' : '' }}>{{_ ('Mixed') }}</option>
                                                                    <option value="None" {{ old('special_group') =='None' ? 'selected="selected"' : '' }}>{{_ ('None') }}</option>
                                                                </select>
                                                                
                                                                @if ($errors->has('special_group'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('special_group') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group row">
                                                            <label for="date_time" class="col-md-4 col-form-label text-md-right" >{{_ ('Incident date/time') }} <span style="color: red"><strong class="h4">*</strong></span></label>
                                                            <div class="col-md-7">
                                                                <input type="datetime-local" class="form-control{{ $errors->has('date_time') ? ' is-invalid' : '' }}" name="date_time" id="date_time" value="{{ old('date_time') }}" required >

                                                                @if ($errors->has('date_time'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('date_time') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="region" class="col-md-4 col-form-label text-md-right">{{_ ('Region') }}</label>
                                                            <div class="col-md-7">
                                                                <select class="form-control{{ $errors->has('incident_region') ? 'is-invalid' : '' }}" name="incident_region" id="incident_region" required >
                                                                    <option value="">{{ __('Choose region') }}</option>
                                                                    <option value="Dar es Salaaam" id="Dar es Salaaam"><span class="active">{{ __('Dar es Salaaam') }}</span></option>
                                                                </select>
                                                        
                                                                @if ($errors->has('incident_region'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('incident_region') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="district" class="col-md-4 col-form-label text-md-right">{{_ ('District') }}</label>
                                                            <div class="col-md-7">
                                                                <select class="form-control{{ $errors->has('incident_district') ? 'is-invalid' : '' }}" name="incident_district" id="incident_district" value="{{ old('incident_district')}}" required >
                                                                    <option value="">{{ __('Choose district') }}</option>
                                                                    <option value="Ilala" id="Ilala">{{ __('Ilala') }}</option>
                                                                    <option value="Kinondoni" id="Kinondoni">{{ __('Kinondoni') }}</option>
                                                                    <option value="Ubungo" id="Ubungo">{{ __('Ubungo') }}</option>
                                                                    <option value="Temeke" id="Temeke">{{ __('Temeke') }}</option>
                                                                    <option value="Kigamboni" id="Kigamboni">{{ __('Kigamboni') }}</option>
                                                                </select>

                                                                @if ($errors->has('incident_district'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('incident_district') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group row">
                                                            <label for="ward" class="col-md-4 col-form-label text-md-right">{{_ ('Ward') }}</label>
                                                            <div class="col-md-7">
                                                                <input type="text" class="form-control{{ $errors->has('incident_ward') ? ' is-invalid' : '' }}" name="incident_ward" id="incident_ward" value="{{ old('incident_ward') }}" placeholder="Enter ward" required >
                                                                
                                                                @if ($errors->has('incident_ward'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('incident_ward') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="street" class="col-md-4 col-form-label text-md-right" >{{_ ('Street/Village') }}</label>
                                                            <div class="col-md-7">
                                                                <input type="text" class="form-control{{ $errors->has('incident_street') ? ' is-invalid' : '' }}" name="incident_street" id="incident_street" value="{{ old('incident_street') }}" placeholder="Enter street" required>
                                                
                                                                @if ($errors->has('incident_street'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('incident_street') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group row">
                                                            <label for="incident_remarks" class="col-md-4 col-form-label text-md-right">{{ _('Remarks') }}</label>
                                                            <div class="col-md-7">
                                                                <textarea rows="5" cols="5" class="form-control{{ $errors->has('incident_remarks') ? ' is-invalid' : '' }}" name="incident_remarks" maxlength="250" placeholder="{{ _('Any further information about incident or incident\'s location') }}" required >{{ old('incident_remarks') }}</textarea>
                                                                <small id="incident_remarks" class="form-text text-muted">Please do not exceed 250 characters.</small>

                                                                @if ($errors->has('incident_remarks'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('incident_remarks') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12"><h4 class="card-title push-right-7 h3">Incident Suspect</h4></div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ _('Name') }}</label>
                                                            <div class="col-md-7">
                                                            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') }}" placeholder="Enter name(s)" pattern="[a-zA-Z\s]*" title="Name should only contain letters" required >

                                                                @if ($errors->has('name'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('name') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group row">
                                                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ _('Sex') }}</label>
                                                            <div class="col-md-7">
                                                                <select class="form-control{{ $errors->has('suspect_gender') ? ' is-invalid' : '' }}"  name="suspect_gender" id="suspect_gender" required >
                                                                    <option value="">{{ _('Choose gender') }}</option>
                                                                    <option value="Male" {{ old('suspect_gender') =='Male' ? 'selected="selected"' : '' }}>{{ _('Male') }}</option>
                                                                    <option value="Female" {{ old('suspect_gender') =='Female' ? 'selected="selected"' : '' }}>{{ _('Female') }}</option>
                                                                </select>

                                                                @if ($errors->has('suspect_gender'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('suspect_gender') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>  
                                                        </div>
                                                        
                                                        <div class="form-group row">
                                                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ _('Age(yrs)') }}</label>
                                                            <div class="col-md-7">
                                                            <input type="text" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" name="age" id="age" value="{{ old('age') }}" placeholder="Enter age" pattern="100|[1-9]\d|[1-9]" title="Age should be a positive number (10-100)" required>

                                                                @if ($errors->has('age'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('age') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="tribe" class="col-md-4 col-form-label text-md-right">{{ __('Tribe') }}</label>
                                                            <div class="col-md-7">
                                                                <select class="form-control{{ $errors->has('suspect_tribe') ? ' is-invalid' : '' }}"  name="suspect_tribe" id="suspect_tribe" required >
                                                                    <option value="">{{ __('Choose tribe') }}</option>
                                                                    <option id="Haya" value="Haya">{{ __('Haya') }}</option>
                                                                    <option id="Sukuma" value="Sukuma">{{ __('Sukuma') }}</option>
                                                                    <option id="Chaga" value="Chaga">{{ __('Chaga') }}</option>
                                                                    <option id="Nyamwezi" value="Nyamwezi">{{ __('Nyamwezi') }}</option>
                                                                </select>

                                                                @if ($errors->has('suspect_tribe'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('suspect_tribe') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>  
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="religion" class="col-md-4 col-form-label text-md-right">{{ __('Religion') }}</label>
                                                            <div class="col-md-7">
                                                                <select class="form-control{{ $errors->has('suspect_religion') ? ' is-invalid' : '' }}"  name="suspect_religion" id="suspect_religion" required >
                                                                    <option value="">{{ __('Choose religion') }}</option>
                                                                    <option id="Christian" value="Christian" {{ old('suspect_religion') =='Christian' ? 'selected="selected"' : '' }}>{{ __('Christian') }}</option>
                                                                    <option id="Muslim" value="Muslim" {{ old('suspect_religion') =='Muslim' ? 'selected="selected"' : '' }}>{{ __('Muslim') }}</option>
                                                                    <option id="Others" value="Others" {{ old('suspect_religion') =='Others' ? 'selected="selected"' : '' }}>{{ __('Others') }}</option>
                                                                </select>

                                                                @if ($errors->has('suspect_religion'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('suspect_religion') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="merital_status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                                                            <div class="col-md-7">
                                                                <select class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}"  name="status" id="status" required >
                                                                    <option value="">{{ __('Merital status') }}</option>
                                                                    <option value="Single" {{ old('status') =='Single' ? 'selected="selected"' : '' }}>{{_ ('Single') }}</option>
                                                                    <option value="Marriage" {{ old('status') =='Marriage' ? 'selected="selected"' : '' }}>{{_ ('Marriage') }}</option>
                                                                    <option value="Divorced" {{ old('status') =='Divorced' ? 'selected="selected"' : '' }}>{{_ ('Divorced') }}</option>
                                                                    <option value="Widowed" {{ old('status') =='Widowed' ? 'selected="selected"' : '' }}>{{_ ('Widowed') }}</option>
                                                                    <option value="Others" {{ old('status') =='Others' ? 'selected="selected"' : '' }}>{{_ ('Others') }}</option>
                                                                </select>

                                                                @if ($errors->has('status'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('status') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="suspect_remarks" class="col-md-4 col-form-label text-md-right">{{ _('Suspect remarks') }}</label>
                                                            <div class="col-md-7">
                                                            <textarea rows="3" cols="3" class="form-control{{ $errors->has('suspect_remarks') ? ' is-invalid' : '' }}" name="suspect_remarks" placeholder="{{ _('Any further information about suspected person(s)') }}" required >{{ old('suspect_remarks') }}</textarea>
                                                            <small id="suspect_remarks" class="form-text text-muted">Please do not exceed 250 characters.</small>

                                                            @if ($errors->has('suspect_remarks'))
                                                                <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('suspect_remarks') }}</strong>
                                                                </span>
                                                            @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12"><h4 class="card-title push-right-7 h3">Incident Uploads</h4></div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="photos" class="col-md-4 col-form-label text-md-right">{{ __('Photo') }}</label>
                                                            <div class="col-md-7">
                                                                <input type="file" class="form-control{{ $errors->has('photos') ? ' is-invalid' : '' }}" name="photos" id="photos" value="{{ old('photos')}}" style="width: 100%" class="btn btn-default" required >
                                                                <small id="photos" class="form-text text-muted">Upload photos.</small>

                                                                @if ($errors->has('photos'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('photos') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="photos" class="col-md-4 col-form-label text-md-right">{{ __('Audio/Video') }}</label>
                                                            <div class="col-md-7">
                                                                <input type="file" id="video" name="video" accept="audio/*,video/*,image/*" class="form-control{{ $errors->has('video') ? ' is-invalid' : '' }}" value="{{ old('video')}}" style="width: 100%" class="btn btn-default" required>
                                                                <small id="video" class="form-text text-muted">Upload audio or video.</small>
                                                            {{-- <video width="280px" height="80px" autoplay controls="controls"/> <source src="vid.mp4" type="video/mp4"></video>  --}}
                                                                
                                                                @if ($errors->has('video'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('video') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="mb-5"> 
                                                <button class="btn btn-info pull-left" onclick="stepper.previous()">&laquo;&nbsp;{{ _('Previous') }}</button>
                                                <button type="submit" class="btn btn-success pull-right">{{ _('Report') }} &raquo;&nbsp;</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function () {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })
    </script>
@endsection