@extends('admin.home')
@section('main')
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title">{{ _('STAFF INFORMATION UPDATE') }}</h3>
                        </div>

                        <form  class=" form-horizontal" role="form" method="post" autocomplete="on" action ="{{ route('update-staff', $user->id) }}" enctype="multipart/form-data" >
                            @csrf
                            @method('put')

                            <div class="card-body">

                                <div class="mt-3">@include('inc.massages')</div>

                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group row">
                                            <label for="first_name" class="col-md-4 col-form-label text-md-right" >{{ __('First name') }}</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" id="first_name" value="{{ $user->first_name }}" required >

                                                @if ($errors->has('first_name'))
                                                    <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('first_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label  for="middle_name" class="col-md-4 col-form-label text-md-right">{{ __('Middle name') }}</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('middle_name') ? ' is-invalid' : '' }}" id="middle_name" name="middle_name"  value="{{ $user->middle_name }}"  required >

                                                @if ($errors->has('middle_name'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('middle_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last name') }}</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" id="last_name" value="{{ $user->last_name }}" required >
                                                
                                                @if ($errors->has('last_name'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('last_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="birth_date" class="col-md-4 col-form-label text-md-right">{{ __('Date of birth') }}</label>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control{{ $errors->has('birth_date') ? ' is-invalid' : '' }}" name="birth_date" id="birth_date"  value="{{ $user->birth_date }}" required >

                                                @if ($errors->has('birth_date'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('birth_date') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" id="gender"  value="{{ $user->gender }}" required >

                                                @if ($errors->has('gender'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('gender') }}</strong>
                                                    </span>
                                                @endif
                                            </div>  
                                        </div>

                                        <div class="form-group row">
                                            <label for="tribe" class="col-md-4 col-form-label text-md-right">{{ __('Tribe') }}</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('tribe') ? ' is-invalid' : '' }}" name="tribe" id="tribe"  value="{{ $user->tribe }}" required >

                                                @if ($errors->has('tribe'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('tribe') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="religion" class="col-md-4 col-form-label text-md-right">{{ __('Religion') }}</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('religion') ? ' is-invalid' : '' }}" name="religion" id="religion"  value="{{ $user->religion }}" required >

                                                @if ($errors->has('religion'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('religion') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="merital_status" class="col-md-4 col-form-label text-md-right">{{ __('Merital Status') }}</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('merital_status') ? ' is-invalid' : '' }}" name="merital_status" id="merital_status"  value="{{ $user->merital_status }}" required >

                                                @if ($errors->has('merital_status'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('merital_status') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="reg_no" class="col-md-4 col-form-label text-md-right">{{ __('Staff Reg. no') }}</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('reg_no') ? ' is-invalid' : '' }}" name="reg_no" id="reg_no"  value="{{ $user->reg_no }}" required >

                                                @if ($errors->has('reg_no'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('reg_no') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Staff Role') }}</label>
                                            <div class="col-md-6">
                                                <select class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role" id="role" required >
                                                    <option value="">{{ __('Staff\'s role') }}</option>
                                                    <option value="Administrator" id="VC">{{ __('Administrator') }}</option>
                                                    <option value="HRM" id="HRM">{{ __('HRM') }}</option>
                                                    <option value="Operator" id="Operator">{{ __('Operator') }}</option>
                                                    <option value="Zonal Leader" id="Zonal Leader">{{ __('Zonal Leader') }}</option>
                                                    <option value="Journalist" id="Journalist">{{ __('Journalist') }}</option>
                                                </select>

                                                @if ($errors->has('role'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('role') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="center_code" class="col-md-4 col-form-label text-md-right">{{ _('Lhrc center') }}</label>
                                            <div class="col-md-6">
                                                <select class="form-control{{ $errors->has('center_code') ? ' is-invalid' : '' }}" name="center_code" id="center_code" required >
                                                    <option value="" >{{ _('Choose staff\'s center') }}</option>
                                                    @foreach ($center as $key=>$value)
                                                        <option value="{{ $key }}">{{ $value }}</option>
                                                    @endforeach
                                                </select>

                                                @if ($errors->has('center_code'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('center_code') }}</strong>
                                                    </span>
                                                @endif
                                            </div>  
                                        </div>

                                        <div class="form-group row">
                                            <label for="region" class="col-md-4 col-form-label text-md-right">{{ __('Region') }}</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('region') ? ' is-invalid' : '' }}" name="region" id="region"  value="{{ $user->region }}" required >
                                                {{-- <select class="form-control{{ $errors->has('region') ? ' is-invalid' : '' }}" name="region" id="region" required >
                                                    <option value="">{{ __('Staff\'s region') }}</option>
                                                    <option value="Dar es Salaaam" id="Dar es Salaaam">{{ __('Dar es Salaaam') }}</option>
                                                </select> --}}

                                                @if ($errors->has('region'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('region') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="district" class="col-md-4 col-form-label text-md-right">{{ __('District') }}</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" name="district" id="district"  value="{{ $user->district }}" required >
                                                {{-- <select class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" name="district" id="district" required >
                                                    <option value="">{{ __('Staff\'s district') }}</option>
                                                </select> --}}

                                                @if ($errors->has('district'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('district') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="ward" class="col-md-4 col-form-label text-md-right">{{ __('Ward/Area') }}</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('ward') ? ' is-invalid' : '' }}" name="ward" value="{{ $user->ward }}" id="ward" required >
                                            
                                                @if ($errors->has('ward'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('ward') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="street" class="col-md-4 col-form-label text-md-right">{{ __('Street/Road') }}</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('street') ? ' is-invalid' : '' }}" name="street" value="{{ $user->street }}" id="street" required >

                                                @if ($errors->has('street'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('street') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right">{{ __('Mobile no') }}</label>
                                            <div class="col-md-6">
                                                <input type="tel" class="form-control{{ $errors->has('mobile_no') ? ' is-invalid' : '' }}" name="mobile_no" id="mobile_no"  value="{{ $user->mobile_no }}"  required autofocus >

                                                @if ($errors->has('mobile_no'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('mobile_no') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                                            <div class="col-md-6">
                                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" value="{{ $user->email }}" required  >

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-6">
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

                                            <div class="col-md-6">
                                                <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="Repeat password" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="user_image" class="col-md-4 col-form-label text-md-right">{{ __('Staff Passport') }}</label>
                                            <div class="col-md-6">
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
                                <div class="float-left">
                                    <a class="btn btn-info" href="{{ route('staff-management') }}">&laquo; {{ _('Back') }}</a> 
                                </div>

                                <div class="float-right">
                                    <button type="submit" class="btn btn-success" >{{ _('Update') }} &raquo;</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection