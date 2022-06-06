@extends('customer.home')
@section('main')
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title push-right-7">{{ _('Incident Report') }}</h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h4><strong>{{ _('Legal and Human Rights Centre') }}</strong></h4>
                                    <img src="{{ asset('images/app/lhrc_logo.jpg') }}" class="img-responsive d-block mx-auto" alt="lhrc-logo" title="lhrc-logo" width="70px" height="70px"/>
                                    <h4 class="text-center" ><strong>{{ _('Human Right Violations Reporting System') }}</strong></h4>
                                    <h4 class="text-center" style="text-decoration: underline; text-decoration-color:lightslategray; text-underline-offset: 2px;" > {{ _('LHRC RIGHT VIOLANCE VICTIM REPORTING FORM') }}</h4>
                                </div>
                            </div>

                            <form  class=" form-horizontal mx-auto" role="form" method="post" autocomplete="on" action="{{ route('store-incident') }}" enctype="multipart/form-data" style="width: 85%; border: 1px solid lightslategray">
                                @csrf

                                <div class="card-body">
                                    @include('inc.massages')

                                    <div class="row">
                                        <div class="col-md-12"><h4 class="card-title push-right-7 h3"><mark>Incident Victim</mark></h4></div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="incident_source" class="col-md-5 col-form-label text-md-right">{{_ ('Incident source') }}</label>
                                                <div class="col-md-7">
                                                    <select class="form-control select2{{ $errors->has('incident_source') ? ' is-invalid' : '' }}" name="incident_source" id="incident_source" required>
                                                        <option value="">{{_ ('Choose incident source') }}</option>
                                                        <option value="Citizen"><span class="active">{{_ ('Citizen') }}</span></option>
                                                        <option value="Journalist">{{_ ('Journalist') }}</option>
                                                        <option value="Politician">{{_ ('Politician') }}</option>
                                                        <option value="Activist">{{_ ('Activist') }}</option>
                                                        <option value="Others">{{ _('Others') }}</option>
                                                    </select>

                                                    @if ($errors->has('incident_source'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('incident_source') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="issue_type" class="col-md-5 col-form-label text-md-right">{{_ ('Issue type') }}</label>
                                                <div class="col-md-7">
                                                    <select class="form-control select2{{ $errors->has('issue_type') ? ' is-invalid' : '' }}" name="issue_type" id="issue_type" required >
                                                        <option value=""> {{_ ('Choose issue type') }} </option>
                                                        <option value="Property Ownership"> {{_ ('Property Ownership') }} </option>
                                                        <option value="Divorce Conflict"> {{_ ('Divorce Conflict') }}  </option>
                                                        <option value="Plot Delimiter"> {{_ ('Plot Delimiter') }}  </option>
                                                        <option value="Others"> {{_ ('Others') }}  </option>
                                                    </select>

                                                    @if ($errors->has('issue_type'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('issue_type') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="right_violated" class="col-md-5 col-form-label text-md-right">{{_ ('Right violated') }}</label>
                                                <div class="col-md-7">
                                                    <select class="form-control select2{{ $errors->has('right_violated') ? ' is-invalid' : '' }}" name="right_violated" id="right_violated" required >
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
                                                <label for="special_group" class="col-md-5 col-form-label text-md-right" >{{_ ('Special group') }}</label>
                                                <div class="col-md-7">
                                                    <select class="form-control select2{{ $errors->has('special_group') ? ' is-invalid' : '' }}" name="special_group" id="special_group" required >
                                                        <option value="" >{{_ ('Choose disability') }}</option>
                                                        <option value="Physical">{{_ ('Physical') }}</option>
                                                        <option value="Visual">{{_ ('Visual') }}</option>
                                                        <option value="Hearing">{{_ ('Hearing') }}</option>
                                                        <option value="Speech">{{_ ('Speech') }}</option>
                                                        <option value="Albinism">{{_ ('Albinism') }}</option>
                                                        <option value="Mental">{{_ ('Mental') }}</option>
                                                        <option value="Mixed">{{_ ('Mixed') }}</option>
                                                        <option value="None" >{{_ ('None') }}</option>
                                                    </select>
                                                    
                                                    @if ($errors->has('special_group'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('special_group') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="date_time" class="col-md-5 col-form-label text-md-right" >{{_ ('Incident date/time') }} <span style="color: red"><strong class="h4">*</strong></span></label>
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
                                                <label for="region" class="col-md-5 col-form-label text-md-right">{{_ ('Region') }}</label>
                                                <div class="col-md-7">
                                                    <select class="form-control select2{{ $errors->has('region') ? ' is-invalid' : '' }}" name="region" id="region" required >
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
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="district" class="col-md-5 col-form-label text-md-right">{{_ ('District') }}</label>
                                                <div class="col-md-7">
                                                    <select class="form-control select2{{ $errors->has('district') ? ' is-invalid' : '' }}" name="district" id="district" value="{{ old('district')}}" required >
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
                                                <label for="nearest_center" class="col-md-5 col-form-label text-md-right">{{ _('Nearest LHRC') }}</label>
                                                <div class="col-md-7">
                                                    <select class="form-control select2{{ $errors->has('nearest_center') ? ' is-invalid' : '' }}" name="nearest_center" id="nearest_center" value="{{ old('nearest_center')}}" required >
                                                        <option value="">{{ _('Choose nearby lhrc center') }}</option>
                                                        {{-- @foreach ($centers as $center)
                                                            <option value="{{ $center->code }}">{{ $center->name.' : '.$center->district }}</option>
                                                        @endforeach --}}

                                                    </select>
    
                                                    @if ($errors->has('nearest_center'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('nearest_center') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>  
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="ward" class="col-md-5 col-form-label text-md-right">{{_ ('Ward') }}</label>
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
                                                <label for="street" class="col-md-5 col-form-label text-md-right" >{{_ ('Street/Village') }}</label>
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
                                                <label for="incident_remarks" class="col-md-5 col-form-label text-md-right">{{ _('Remarks') }}</label>
                                                <div class="col-md-7">
                                                    <textarea rows="3" cols="5" class="form-control{{ $errors->has('incident_remarks') ? ' is-invalid' : '' }}" name="incident_remarks" maxlength="250" placeholder="{{ _('Any further information about incident or incident\'s location') }}" required >{{ old('incident_remarks') }}</textarea>
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
                                        <div class="col-md-12"><h4 class="card-title push-right-7 h3"><mark>Incident Suspect</mark></h4></div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="name" class="col-md-5 col-form-label text-md-right">{{ _('Name') }}</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') }}"placeholder="Enter name(s)" pattern="[a-zA-Z\s]*" title="Name should only contain letters" required >
                        
                                                    @if ($errors->has('name'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="gender" class="col-md-5 col-form-label text-md-right">{{ _('Sex') }}</label>
                                                <div class="col-md-7">
                                                    <select class="form-control select2{{ $errors->has('gender') ? ' is-invalid' : '' }}"  name="gender" id="gender" required >
                                                        <option value="">{{ _('Choose gender') }}</option>
                                                        <option value="Male">{{ _('Male') }}</option>
                                                        <option value="Female">{{ _('Female') }}</option>
                                                    </select>

                                                    @if ($errors->has('gender'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('gender') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>  
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="age" class="col-md-5 col-form-label text-md-right">{{ _('Age(yrs)') }}</label>
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
                                                <label for="tribe" class="col-md-5 col-form-label text-md-right">{{ __('Tribe') }}</label>
                                                <div class="col-md-7">
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
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="religion" class="col-md-5 col-form-label text-md-right">{{ __('Religion') }}</label>
                                                <div class="col-md-7">
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
                                                <label for="merital_status" class="col-md-5 col-form-label text-md-right">{{ __('Status') }}</label>
                                                <div class="col-md-7">
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
                                                <label for="suspect_remarks" class="col-md-5 col-form-label text-md-right">{{ _('Suspect remarks') }}</label>
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
                                        <div class="col-md-12"><h4 class="card-title push-right-7 h3"><mark>Incident Uploads</mark></h4></div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="photos" class="col-md-5 col-form-label text-md-right">{{ __('Photo') }}</label>
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
                                                <label for="photos" class="col-md-5 col-form-label text-md-right">{{ __('Audio/Video') }}</label>
                                                <div class="col-md-7">
                                                    <input type="file" id="video" name="video" accept="audio/*,video/*,image/*" class="form-control{{ $errors->has('video') ? ' is-invalid' : '' }}" value="{{ old('video')}}" style="width: 100%" class="btn btn-default" required>
                                                    <small id="video" class="form-text text-muted">Upload audio or video.</small>
                                                    
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

                                <div class="card-footer">
                                    <div class="float-left">
                                        <a class="btn btn-info" href="{{ route('customer/home') }}">&laquo; {{ _('Back') }}</a> 
                                    </div>
    
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-info" >{{ _('Submit') }} &raquo;</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <!-- Javascript -->
        <script src="{{ asset('js/select/select2.full.min.js') }}"></script>
        <script type="text/javascript">

            $(function () {
              bsCustomFileInput.init();
            });

            //Initialize Select2 Elements
            $('.select2').select2()
            $('.select2bs4').select2({
            theme: 'bootstrap4'
            })
    
            $('#district').change(function(){
            var district = $(this).val(); // selected district
            var distname = [];
                $.ajax({
                   type:"GET",
                   url:"{{url('getdistrict')}}",
                   dataType:'JSON',
                   async: false,
                   success:function(data){
                        console.log(data);
                        distname = data;
                    },
                   error : function(req, err) {
                        console.log(err);
                    }
                });
    
                // window.alert(distname);
          
                if(distname.includes(district)){
                    $.ajax({
                        type:"GET",
                        url:"{{url('getcenters')}}?district="+district,
                        success:function(data){
                            $("#nearest_center").empty();
                            $("#nearest_center").append('<option value="">Choose nearby lhrc center</option>');
                            $.each(data, function(key, values){
                                $("#nearest_center").append('<option value="'+key+'">'+values+'</option>');
                            });
                        }
                    });
                }
                else{
                    $("#nearest_center").empty();
                    $("#nearest_center").append('<option value="HQ">No lhrc center found</option>');
                    // $("#nearest_center").append('<option value="HQ">No lhrc center found in '+district+'</option>');
                }
            });
        </script>
    </div>
@stop