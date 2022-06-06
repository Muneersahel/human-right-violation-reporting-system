
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">LHRC Center Registration</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <form action="{{ route('store-center') }}" method="post" enctype="multipart/form-data" class="form-horizontal" autocomplete="on">
        @csrf

        <div class="mt-3">@include('inc.massages')</div>

        <div class="modal-body">
            <section class="content">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="code" class="col-md-3 col-form-label text-md-right">{{ __('Code') }}</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" name="code" id="code" value="{{ old('code') }}" placeholder="eg.HQ" pattern="[a-zA-Z]*" title="Code only contains the first letters..." required >

                                        @if ($errors->has('code'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('code') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Name') }}</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" value="{{ old('name') }}" placeholder="Enter center name" pattern="[a-zA-Z\s]*" title="Center name should only contain letters" required>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="director" class="col-md-3 col-form-label text-md-right">{{ __('Director') }}</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control{{ $errors->has('director') ? ' is-invalid' : '' }}" name="director" id="director" value="{{ old('director') }}" placeholder="Enter director name" pattern="[a-zA-Z\s]*" title="Director name should only contain letters" required >

                                        @if ($errors->has('director'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('director') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address" class="col-md-3 col-form-label text-md-right">{{ __('Address#') }}</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" id="address"  value="{{ old('address') }}" placeholder="Enter postal number" pattern="[1-9](\d+)" title="Postal number should only be digits" required >

                                        @if ($errors->has('address'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="mobile_no" class="col-md-3 col-form-label text-md-right">{{ __('Mobile#') }}</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control{{ $errors->has('mobile_no') ? ' is-invalid' : '' }}" name="mobile_no" id="mobile_no"  value="{{ old('mobile_no') }}" placeholder="eg. 255222773038" pattern="255[1-9](\d{8})" title="Mobile number should be 12 digits starts 255.." required>

                                        @if ($errors->has('mobile_no'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('mobile_no') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label  for="fax_no" class="col-md-3 col-form-label text-md-right">{{ __('Fax#') }}</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control{{ $errors->has('fax_no') ? ' is-invalid' : '' }}" name="fax_no" id="fax_no" value="{{ old('fax_no') }}" placeholder="eg. 255222773048" pattern="255[1-9](\d{8})" title="Fax number should be 12 digits starts 255.." required>

                                        @if ($errors->has('fax_no'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('fax_no') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Email') }}</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" value="{{ old('email') }}" placeholder="eg. info@lhrc.org.tz" required  >

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
                                    <label for="region" class="col-md-3 col-form-label text-md-right">{{ __('Region') }}</label>
                                    <div class="col-md-9">
                                        <select class="form-control{{ $errors->has('region') ? ' is-invalid' : '' }}" name="region" id="region" required >
                                            <option value="">{{ __('Center\'s region') }}</option>
                                            <option value="Dar es Salaaam" id="Dar es Salaaam">{{ __('Dar es Salaaam') }}</option>
                                        </select>

                                        @if ($errors->has('region'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('region') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="district" class="col-md-3 col-form-label text-md-right">{{ __('District') }}</label>
                                    <div class="col-md-9">
                                        <select class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" name="district" id="district" required >
                                            <option value="">{{ __('Center\'s district') }}</option>
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
                                    <label for="ward" class="col-md-3 col-form-label text-md-right">{{ __('Ward') }}</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control{{ $errors->has('ward') ? ' is-invalid' : '' }}" name="ward" value="{{ old('ward') }}" placeholder="eg.Kijitonyama" id="ward" required >
                                        
                                        @if ($errors->has('ward'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('ward') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="street" class="col-md-3 col-form-label text-md-right">{{ __('Street') }}</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control{{ $errors->has('street') ? ' is-invalid' : '' }}" name="street" value="{{ old('street') }}" placeholder="eg.Science" id="street" required >

                                        @if ($errors->has('street'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('street') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="remarks" class="col-md-3 col-form-label text-md-right">{{ _('Remark') }}</label>
                                    
                                    <div class="col-md-9">
                                        <textarea rows="5" cols="0" class="form-control{{ $errors->has('remarks') ? ' is-invalid' : '' }}" name="remarks" placeholder="{{ _('Any further information about the center') }}" required maxlength="150">{{ old('remarks') }}</textarea>
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
                </div>
            </section>
        </div>

        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">{{ _('Cancel') }}</button>
            <button type="submit" class="btn btn-primary">{{ _('Create') }}</button>
        </div>
    </form>
</div>
