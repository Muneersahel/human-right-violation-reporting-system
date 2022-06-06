@extends('admin.home')
@section('main')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title">{{ _('CENTER INFORMATION EDIT') }}</h3>
                        </div>

                        <form  class=" form-horizontal" role="form" method="post" autocomplete="on" action="{{ route('update-center', $center->id) }}" enctype="multipart/form-data" >
                            @csrf
                            @method('put')

                            <div class="mt-3">@include('inc.massages')</div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 justify-content-center">
                                        <div class="form-group row">
                                            <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Center code') }}</label>

                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" name="code" value="{{ $center->code }}" id="code" required aria-required="true" >

                                                @if ($errors->has('code'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('code') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Center Name') }}</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" value="{{ $center->name }}" required aria-required="true" >

                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="director" class="col-md-4 col-form-label text-md-right">{{ __('Center Director') }}</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('director') ? ' is-invalid' : '' }}" name="director" id="director" value="{{ $center->director }}" required aria-required="true" >

                                                @if ($errors->has('director'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('director') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __(' center Address') }}</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" id="address"  value="{{ $center->address }}" required aria-required="true" >

                                                @if ($errors->has('address'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('address') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right">{{ __('center Mobile#') }}</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('mobile_no') ? ' is-invalid' : '' }}" name="mobile_no" id="mobile_no"  value="{{ $center->mobile_no }}" required autofocus >

                                                @if ($errors->has('mobile_no'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('mobile_no') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label  for="fax_no" class="col-md-4 col-form-label text-md-right">{{ __('center Fax#') }}</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('fax_no') ? ' is-invalid' : '' }}" id="fax_no" name="fax_no" value="{{ $center->fax_no }}" required aria-required="true">

                                                @if ($errors->has('fax_no'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('fax_no') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('center Email') }}</label>
                                            <div class="col-md-6">
                                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" value="{{ $center->email }}" required aria-required="true"  >

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="region" class="col-md-4 col-form-label text-md-right">{{ __('Region') }}</label>
                                            <div class="col-md-6">
                                                <select class="form-control{{ $errors->has('region') ? ' is-invalid' : '' }}" name="region" id="region" required >
                                                    @if (isset($center->region))
                                                        <option selected value="{{ $center->region }}">{{ __($center->region) }}</option>
                                                    @else
                                                        @foreach ($center as $region)
                                                            <option value="{{$region->region }}">{{ __($region->region) }}</option>
                                                        @endforeach
                                                    @endif
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
                                                <select class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" name="district" id="district" required >
                                                    @if (isset($center->district))
                                                        <option selected value="{{ $center->district }}">{{ __($center->district) }}</option>
                                                    @else
                                                        @foreach ($center as $district)
                                                            <option value="{{$district->district }}">{{ __($district->district) }}</option>
                                                        @endforeach
                                                    @endif
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
                                                <input type="text" class="form-control{{ $errors->has('ward') ? ' is-invalid' : '' }}" name="ward" value="{{ $center->ward }}"id="ward" required >
                                                {{-- <select class="form-control{{ $errors->has('ward') ? ' is-invalid' : '' }}" name="ward" id="ward" required >
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
                                                <input type="text" class="form-control{{ $errors->has('street') ? ' is-invalid' : '' }}" name="street" value="{{ $center->street }}" id="street" required >
                                                {{-- <select class="form-control{{ $errors->has('street') ? ' is-invalid' : '' }}" name="street" id="street" required >
                                                </select> --}}

                                                @if ($errors->has('street'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('street') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="remarks" class="col-md-4 col-form-label text-md-right">{{ _('Center remark') }}</label>
                                            
                                            <div class="col-md-6">
                                                <textarea rows="4" cols="0" class="form-control{{ $errors->has('remarks') ? ' is-invalid' : '' }}" name="remarks" required maxlength="150">{{ $center->remarks }}</textarea>
                                                <small id="remarks" class="form-text text-muted">Center remarks should not exceed 150 chars.</small>
              
                                                @if ($errors->has('remarks'))
                                                    <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('remarks') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="float-left">
                                    <a class="btn btn-info" href="{{ route('center-management')}}"> &laquo; {{ _('Back') }}</a>
                                </div>

                                <div class="float-right">
                                    <button type="submit" class="btn btn-info">{{ _('Edit') }} &raquo; </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
