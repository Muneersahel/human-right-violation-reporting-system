@extends('admin.home')
@section('main')
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title">{{ _('LHRC Staff Registration') }}</h3>
                        </div>

                        <form  class=" form-horizontal" role="form" method="post" autocomplete="on" action="{{ route('create-staff')}}" enctype="multipart/form-data" >
                            @csrf

                            <div class="py-3">
                                @include('inc.massages')
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First name') }}</label>

                                            <div class="col-md-6">
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
                                            <div class="col-md-6">
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
                                            <div class="col-md-6">
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
                                            <div class="col-md-6">
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
                                            <div class="col-md-6">
                                                <select class="form-control select2{{ $errors->has('gender') ? ' is-invalid' : '' }}"  name="gender" id="gender" required >
                                                    <option value="">{{ __('Choose gender') }}</option>
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
                                            <label for="tribe" class="col-md-4 col-form-label text-md-right">{{ __('Tribe') }}</label>
                                            <div class="col-md-6">
                                                <select class="form-control select2{{ $errors->has('tribe') ? ' is-invalid' : '' }}"  name="tribe" id="tribe" required >
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
                                            <div class="col-md-6">
                                                <select class="form-control select2{{ $errors->has('religion') ? ' is-invalid' : '' }}"  name="religion" id="religion" required >
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
                                            <div class="col-md-6">
                                                <select class="form-control select2{{ $errors->has('merital_status') ? ' is-invalid' : '' }}"  name="merital_status" id="merital_status" required >
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

                                        <div class="form-group row">
                                            <label for="reg_no" class="col-md-4 col-form-label text-md-right">{{ __(' Staff Reg. no') }}</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('reg_no') ? ' is-invalid' : '' }}" name="reg_no" id="reg_no" value="{{ old('reg_no') }}" placeholder="Staff's reg no" required >

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
                                                <select class="form-control select2bs4{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role" id="role" style="width: 100%;" required >
                                                    <option value="">{{ __('Staff\'s role') }}</option>
                                                    <option value="HRM" id="HRM">{{ __('HRM') }}</option>
                                                    <option value="Operator" id="Operator">{{ __('Operator') }}</option>
                                                    <option value="Zonal Leader" id="Zonal Leader">{{ __('Zonal Leader') }}</option>
                                                    <option value="Journalist" id="Journalist">{{ __('Journalist') }}</option>
                                                    <option value="Administrator" id="VC">{{ __('Administrator') }}</option>
                                                </select>

                                                @if ($errors->has('role'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('role') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        {{-- <div class="form-group row">
                                            <label for="user_image" class="col-md-4 col-form-label text-md-right">{{ __('Staff Passport') }}</label>
                                            <div class="col-md-6">
                                                <input type="file" class="form-control{{ $errors->has('user_image') ? ' is-invalid' : '' }}" name="user_image" id="user_image" value="{{ old('user_image')}}" style="width: 100%;" class="btn btn-default" required >
                                                <small id="user_image" class="form-text text-muted">Passport should have a white or blue background.</small>

                                                @if ($errors->has('user_image'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('user_image') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div> --}}

                                        <div class="form-group row">
                                            <label for="user_image" class="col-md-4 col-form-label text-md-right">{{ __('Staff Passport') }}</label>
                                            <div class="col-md-6">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input form-control{{ $errors->has('user_image') ? ' is-invalid' : '' }}" name="user_image" id="user_image" value="{{ old('user_image')}}" required >
                                                    <label class="custom-file-label" for="user_image">Choose passport</label>

                                                    @if ($errors->has('user_image'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('user_image') }}</strong>
                                                        </span>
                                                    @endif
                                                    <small id="user_image" class="form-text text-muted">Passport should have a white or blue background.</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="center_code" class="col-md-4 col-form-label text-md-right">{{ _('Lhrc center') }}</label>
                                            <div class="col-md-6">
                                                <select class="form-control select2{{ $errors->has('center_code') ? ' is-invalid' : '' }}" name="center_code" id="center_code" required >
                                                    <option value="" >{{ _('Choose staff\'s center') }}</option>
                                                    @foreach ($center as $code => $name)
                                                        <option value="{{ $code }}">{{ $name }}</option>
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
                                                <select class="form-control select2{{ $errors->has('region') ? ' is-invalid' : '' }}" name="region" id="region" required >
                                                    <option value="">{{ __('Staff\'s region') }}</option>
                                                    <option value="Dar es Salaaam" id="Dar es Salaaam">{{ __('Dar es Salaaam') }}</option>
                                                    {{-- <option value="Constructor" id="DVCA">{{ __('Constructor') }}</option>
                                                    <option value="Admin" id="Admin">{{ __('Administrator') }}</option> --}}
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
                                            <div class="col-md-6">
                                                <select class="form-control select2{{ $errors->has('district') ? ' is-invalid' : '' }}" name="district" id="district" required >
                                                    <option value="">{{ __('Staff\'s district') }}</option>
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
                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('ward') ? ' is-invalid' : '' }}" name="ward" value="{{ old('ward') }}" placeholder="Enter ward name" id="ward" required >
                                                {{-- <select class="form-control{{ $errors->has('ward') ? ' is-invalid' : '' }}" name="ward" id="ward" required >
                                                    <option value="">{{ __('Center\'s ward') }}</option>
                                                </select> --}}

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
                                                <input type="text" class="form-control{{ $errors->has('street') ? ' is-invalid' : '' }}" name="street" value="{{ old('street') }}" placeholder="Enter street name" id="street" required >
                                                {{-- <select class="form-control{{ $errors->has('street') ? ' is-invalid' : '' }}" name="street" id="street" required >
                                                    <option value="">{{ __('Center\'s street') }}</option>
                                                </select> --}}

                                                @if ($errors->has('street'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('street') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right">{{ __('Mobile number') }}</label>
                                            <div class="col-md-6">
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
                                            <div class="col-md-6">
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

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" placeholder="Enter password" required >

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
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Repeat password" required >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="location_remark" class="col-md-4 col-form-label text-md-right">{{ _('Location remarks') }}</label>
                                            <div class="col-md-6">
                                                <textarea rows="3" cols="0" class="form-control{{ $errors->has('location_remarks') ? ' is-invalid' : '' }}" name="location_remarks" placeholder="{{ _('Any further information about your staff location') }}" required maxlength="150">{{ old('location_remarks') }}</textarea>
                                                <small id="location_remarks" class="form-text text-muted">Location remarks should not exceed 150 chars.</small>
                    
                                                @if ($errors->has('location_remarks'))
                                                    <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('location_remarks') }}</strong>
                                                    </span>
                                                @endif
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
                                    <button type="submit" class="btn btn-info">{{ _('Register') }} &raquo;</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

         <!-- Javascript -->
         <script src="{{ asset('js/select/select2.full.min.js') }}"></script>
         <script>
            $(function () {
              bsCustomFileInput.init();
            });

             //Initialize Select2 Elements
             $('.select2').select2()
             $('.select2bs4').select2({
             theme: 'bootstrap4'
             })
        </script>
    </div>
@endsection