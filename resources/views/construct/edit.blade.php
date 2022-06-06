@extends('construct.home')
@section('main')
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title">{{ _('STAFF INFORMATION UPDATE') }}</h3>
                        </div>

                        <form  class=" form-horizontal" role="form" method="post" autocomplete="on" action ="{{ route('update-constructor', $user->id) }}" enctype="multipart/form-data" >
                            @csrf
                            @method('put')

                            <div class="card-body">

                                <div> @include('inc.massages')</div>

                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group row">
                                            <label for="first_name" class="col-md-4 col-form-label text-md-right" >{{ __('First name') }}</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" id="first_name" value="{{ $user->first_name }}" disabled >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label  for="middle_name" class="col-md-4 col-form-label text-md-right">{{ __('Middle name') }}</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control{{ $errors->has('middle_name') ? ' is-invalid' : '' }}" id="middle_name" name="middle_name"  value="{{ $user->middle_name }}"  disabled >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last name') }}</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name"  value="{{ $user->last_name }}" disabled >
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                                            <label for="birth_date" class="col-md-4 col-form-label text-md-right">{{ __('Date of birth') }}</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control{{ $errors->has('birth_date') ? ' is-invalid' : '' }}" name="birth_date" id="birth_date"  value="{{ Carbon\Carbon::parse($user->birth_date)->isoFormat('LL') }}" disabled >
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" id="gender"  value="{{ $user->gender }}" disabled >
                                            </div>  
                                        </div>

                                        <div class="form-group row">
                                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Staff Role') }}</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role" id="role"  value="{{ $user->role.' '.$user->dawasa_office }}" disabled >
                                            </div>  
                                        </div>

                                        <div class="form-group row">
                                            <label for="reg_no" class="col-md-4 col-form-label text-md-right">{{ __('Staff Reg. no') }}</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control{{ $errors->has('reg_no') ? ' is-invalid' : '' }}" name="reg_no" id="reg_no"  value="{{ $user->reg_no }}" disabled >
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6">

                                        <div class="form-group row">
                                            <label for="dawasa_office" class="col-md-4 col-form-label text-md-right">{{ _('Dawasa office') }}</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control{{ $errors->has('dawasa_office') ? ' is-invalid' : '' }}" name="dawasa_office" id="dawasa_office"  value="{{ $user->dawasa_office }}" disabled >
                                            </div>  
                                        </div>

                                        <div class="form-group row">
                                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right">{{ __('Mobile no') }}</label>
                                            <div class="col-md-7">
                                                <input type="telephone" class="form-control{{ $errors->has('mobile_no') ? ' is-invalid' : '' }}" name="mobile_no" id="mobile_no"  value="{{ $user->mobile_no }}"  required autofocus >

                                                @if ($errors->has('mobile_no'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('mobile_no') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                                            <div class="col-md-7">
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

                                            <div class="col-md-7">
                                                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" required>

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
                                                <input type="password" class="form-control" name="password_confirmation" id="password-confirm" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="user_image" class="col-md-4 col-form-label text-md-right">{{ __($user->role.' '.'Image') }}</label>
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
                                <div class="float-left">
                                    <a class="btn btn-info" href="{{ route('constructor/home') }}">&laquo; {{ _('Back') }}</a> 
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

