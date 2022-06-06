@extends('dawasa.home')
@section('main')
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title">{{ _('Dawasa New Staff Registration') }}</h3>
                        </div>

                        <form  class=" form-horizontal" role="form" method="post" autocomplete="on" action="{{ route('create-staff')}}" enctype="multipart/form-data" >
                            @csrf

                            <div class="mt-3">
                                @include('inc.massages')
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First name') }}</label>

                                            <div class="col-md-7">
                                                <input type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" placeholder="first_name" id="first_name" required >

                                                @if ($errors->has('first_name'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('first_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label  for="middle_name" class="col-md-4 col-form-label text-md-right">{{ __('Middle name') }}</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control{{ $errors->has('middle_name') ? ' is-invalid' : '' }}" id="middle_name" name="middle_name" value="{{ old('middle_name') }}" placeholder="middle_name"  required >

                                                @if ($errors->has('middle_name'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('middle_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last name') }}</label>
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

                                            <label for="birth_date" class="col-md-4 col-form-label text-md-right">{{ __('Date of birth') }}</label>
                                            <div class="col-md-7">
                                                <input type="date" class="form-control{{ $errors->has('birth_date') ? ' is-invalid' : '' }}" name="birth_date" id="birth_date" value="{{ old('birth_date') }}" required >

                                                @if ($errors->has('birth_date'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('birth_date') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                                            <div class="col-md-7">
                                                <select class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}"  name="gender" id="gender" required >
                                                    <option value="">{{ __('Gender') }}</option>
                                                    <option id="male" value="Male">{{ __('Male') }}</option>
                                                    <option id="female" value="Female">{{ __('Female') }}</option>
                                                </select>

                                                @if ($errors->has('gender'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('gender') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="reg_no" class="col-md-4 col-form-label text-md-right">{{ __(' Staff Reg. no') }}</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control{{ $errors->has('reg_no') ? ' is-invalid' : '' }}" name="reg_no" id="reg_no" value="{{ old('reg_no') }}" placeholder="Staff's reg no" required >

                                                @if ($errors->has('reg_no'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('reg_no') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group row">
                                            <label for="dawasa_office" class="col-md-4 col-form-label text-md-right">{{ _('Dawasa office') }}</label>
                                            <div class="col-md-7">
                                                <select class="form-control{{ $errors->has('dawasa_office') ? ' is-invalid' : '' }}" name="dawasa_office" id="dawasa_office" required >
                                                    <option value="" >{{ _('Choose staff\'s center') }}</option>
                                                    <option class="active" value="{{ $user->dawasa_office}}" >{{ _($user->dawasa_office) }}</option>
                                                </select>

                                                @if ($errors->has('dawasa_office'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('dawasa_office') }}</strong>
                                                    </span>
                                                @endif
                                            </div>  
                                        </div>

                                        <div class="form-group row">
                                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Staff Role') }}</label>
                                            <div class="col-md-7">
                                                <select class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role" id="role" required >
                                                    <option value="">{{ __('Staff\'s Role') }}</option>
                                                    <option value="Surveyor" id="Surveyor">{{ __('Surveyor') }}</option>
                                                    <option value="Constructor" id="Constructor">{{ __('Constructor') }}</option>
                                                </select>

                                                @if ($errors->has('role'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('role') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right">{{ __('Mobile number') }}</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control{{ $errors->has('mobile_no') ? ' is-invalid' : '' }}" name="mobile_no" id="mobile_no"  value="{{ old('mobile_no') }}" placeholder="eg 255799123456"  required >

                                                @if ($errors->has('mobile_no'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('mobile_no') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>
                                            <div class="col-md-7">
                                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" value="{{ old('email') }}" placeholder="eg email@gmail.com" required >

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-7">
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}"  required >

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
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}"  required >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="float-left">
                                    <a class="btn btn-info" href="{{ route('staff-management')}}"> &laquo; {{ _('Back') }}</a>
                                </div>

                                <div class="float-right">
                                    <button type="submit" class="btn btn-info"><i class="fa fa-user-plus"></i> {{ _('Register') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection