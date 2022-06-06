@extends('admin.home')
@section('main')
    <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Message Body</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <p>{{ $sms->sms}}</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('admin.home')
@section('main')
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title push-right-7">{{ _('SmS Report') }}</h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h4><strong>{{ _('Legal and Human Rights Centre') }}</strong></h4>
                                    <img src="{{ asset('images/human/lhrc_logo.jpg') }}" class="img-responsive d-block mx-auto" alt="lhrc-logo" title="lhrc-logo" width="90px" height="90px"/>
                                    <h4 class="text-center" ><strong>{{ _('Human Right Violations Reporting System') }}</strong></h4>
                                    <h4 class="text-center" style="text-decoration: underline; text-decoration-color:lightslategray; text-underline-offset: 2px;" > {{ _('LHRC RIGHT VIOLANCE VICTIM SMS REPORING FORM') }}</h4>
                                </div>
                            </div>

                            <form  class=" form-horizontal mx-auto" role="form" method="post" autocomplete="on" action="{{ route('update-sms', $sms->id) }}" enctype="multipart/form-data" style="width:65%; border: 1px solid lightslategray">
                                @csrf
                                @method('put')

                                <div class="card-body">
                                    @include('inc.massages')

                                    <div class="row">
                                        <div class="col-md-12"><h4 class="card-title push-right-7 h3">Incident SmS Assignment</h4></div>
                                        <div class=" col-md-12">
                                            <div class="form-group row">
                                                <label for="sms_center" class="col-md-2 col-form-label text-md-right">{{_ ('LHRC Center') }}</label>
                                                <div class="col-md-8">
                                                    <select class="form-control{{ $errors->has('sms_center') ? ' is-invalid' : '' }}" name="sms_center" id="sms_center" required>
                                                        <option value="" >{{ _('Choose lhrc\'s center') }}</option>
                                                        @foreach ($center as $code=>$name)
                                                            <option value="{{ $code }}">{{ $name }}</option>
                                                        @endforeach
                                                    </select>

                                                    @if ($errors->has('sms_center'))
                                                    <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('sms_center') }}</strong>
                                                    </span>
                                                @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="float-left">
                                        <a class="btn btn-info" href="{{ route('sms-management') }}">&laquo; {{ _('Back') }}</a> 
                                    </div>
    
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-info" >{{ _('Assign') }} &raquo;</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        if(dist.includes(district)){
            // if(district){
                $.ajax({
                   type:"GET",
                   url:"{{url('getcenters')}}?district="+district,
                   success:function(data){
                    if(data){
                        $("#nearest_center").empty();
                        $("#nearest_center").append('<option>Choose nearby lhrc center</option>');
                        $.each(data, function(key, values){
                            $("#nearest_center").append('<option value="'+key+'">'+values+'</option>');
                        });
                    }
                    else{
                        $("#nearest_center").empty();
                        $("#nearest_center").append('<option>No lhrc center found</option>');
                    }
                   }
                });
            }
            else{
                $("#nearest_center").empty();
                $("#nearest_center").append('<option>No lhrc center found</option>');
            }
    </script>
@stop

{{-- //center show --}}
{{-- {{ HTML::link_to_action('CenterController@show') }} --}}
{{-- <p>One fine body&hellip;</p> --}}
@extends('admin.home')
@section('main')
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title">{{ _('LHRC CENTER INFORMATION') }}
                                <span class="float-right"></span>
                            </h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="mx-auto">
                                    <h4 class="text-center"><strong>{{ _('Legal and Human Rights Centre') }}</strong></h4>
                                    <img src="{{ asset('images/app/lhrc_logo.jpg')}}" class="mx-auto d-block img-responsive" alt="lhrc-logo" title="lhrc-logo" width="80px" height="80px"/>
                                    <h4 class="text-center" ><strong>{{ $center->code }}:&nbsp;{{ $center->name }}</strong></h4>
                                    <h4 class="text-center" style="text-decoration: underline; text-decoration-color:lightslategray; text-underline-offset: 2px;" >
                                        {{ $center->address }},&nbsp;Phone# +{{$center->mobile_no}},&nbsp;Email: {{$center->email}}
                                    </h4> 
                                </div>
                            </div>

                            <div class="card-body offset-md-2">
                                <div class="table-responsive col-md-10">
                                    <table  class="table table-bordered table-hover">
                                        <tr>
                                            <td><strong>Center Code</strong></td>
                                            <td>{{ $center->code }}</td>
                                            <td><strong>Physical address</strong></td>
                                            <td>{{$center->address}}</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Center Name</strong></td>
                                            <td>{{$center->name}}</td>
                                            <td><strong>Center Region</strong></td>
                                            <td>{{ $center->region }}</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Director Name</strong></td>
                                            <td>{{$center->director}}</td>
                                            <td><strong>Center District</strong></td>
                                            <td>{{$center->district}}</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Center Mobile#</strong></td>
                                            <td>+{{$center->mobile_no}}</td>
                                            <td><strong>Center Ward</strong></td>
                                            <td>{{$center->ward}}</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Center Fax#</strong></td>
                                            <td>+{{$center->fax_no}}</td>
                                            <td><strong>Center Street</strong></td>
                                            <td>{{$center->street}}</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Center Email</strong></td>
                                            <td>{{$center->email}}</td>
                                            <td rowspan="3"><strong>Center Remark</strong></td>
                                            <td>{{substr($center->remarks ,0,30).'...'}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="float-left">
                                <a class="btn btn-info" href="{{ url('admin/center-management') }}">&laquo;&nbsp;{{ _('Prev') }}</a>
                            </div>

                            <div class="float-right">
                                <a class="btn btn-info" href="{{ url('admin/edit-center', $center->id) }}">{{ _('Edit') }}&nbsp;&raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

{{-- center create --}}
@extends('admin.home')
@section('main')
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title">{{ _('LHRC CENTER REGISTRATION') }}</h3>
                        </div>
                        
                        <form  class=" form-horizontal" role="form" method="post" autocomplete="on" action="create-center" enctype="multipart/form-data" >
                            @csrf

                            <div class="mt-3">
                                @include('inc.massages')
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Center Code') }}</label>

                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" name="code" value="{{ old('code') }}" placeholder="eg.HQ" id="code" required >

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
                                                <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" value="{{ old('name') }}" placeholder="eg. Justice Lugakingira House" required>

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
                                                <input type="text" class="form-control{{ $errors->has('director') ? ' is-invalid' : '' }}" name="director" id="director" value="{{ old('director') }}" placeholder="eg. Ms. Anna Aloys Henga" required >

                                                @if ($errors->has('director'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('director') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __(' Center Address') }}</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" id="address"  value="{{ old('address') }}" placeholder="eg. P.O.Box 75254, Kijitonyama" required >

                                                @if ($errors->has('address'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('address') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right">{{ __('Center Mobile#') }}</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('mobile_no') ? ' is-invalid' : '' }}" name="mobile_no" id="mobile_no"  value="{{ old('mobile_no') }}" placeholder="eg. 255 22 2773038" required autofocus >

                                                @if ($errors->has('mobile_no'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('mobile_no') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label  for="fax_no" class="col-md-4 col-form-label text-md-right">{{ __('Center Fax#') }}</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('fax_no') ? ' is-invalid' : '' }}" id="fax_no" name="fax_no" value="{{ old('fax_no') }}" placeholder="eg. 255 22 2773048" required>

                                                @if ($errors->has('fax_no'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('fax_no') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Center Email') }}</label>
                                            <div class="col-md-6">
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
                                            <label for="region" class="col-md-4 col-form-label text-md-right">{{ __('Region') }}</label>
                                            <div class="col-md-6">
                                                <select class="form-control{{ $errors->has('region') ? ' is-invalid' : '' }}" name="region" id="region" required >
                                                    <option value="">{{ __('Center\'s region') }}</option>
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
                                            <label for="ward" class="col-md-4 col-form-label text-md-right">{{ __('Ward/Area') }}</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control{{ $errors->has('ward') ? ' is-invalid' : '' }}" name="ward" value="{{ old('ward') }}" placeholder="eg.Kijitonyama" id="ward" required >
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
                                                <input type="text" class="form-control{{ $errors->has('street') ? ' is-invalid' : '' }}" name="street" value="{{ old('street') }}" placeholder="eg.Science" id="street" required >
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
                                            <label for="remarks" class="col-md-4 col-form-label text-md-right">{{ _('Center remark') }}</label>
                                            
                                            <div class="col-md-6">
                                                <textarea rows="4" cols="0" class="form-control{{ $errors->has('remarks') ? ' is-invalid' : '' }}" name="remarks" placeholder="{{ _('Any further information about your LHRC center') }}" required maxlength="150">{{ old('remarks') }}</textarea>
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
                                    <button type="submit" class="btn btn-info">{{ _('Create') }}&nbsp;&raquo;</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
