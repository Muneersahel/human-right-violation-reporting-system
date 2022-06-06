@extends('customer.home')
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
                                    <img src="{{ asset('images/app/lhrc_logo.jpg') }}" class="img-responsive d-block mx-auto" alt="lhrc-logo" title="lhrc-logo" width="90px" height="90px"/>
                                    <h4 class="text-center" ><strong>{{ _('Human Right Violations Reporting System') }}</strong></h4>
                                    <h4 class="text-center" style="text-decoration: underline; text-decoration-color:lightslategray; text-underline-offset: 2px;" > {{ _('LHRC RIGHT VIOLANCE VICTIM SMS REPORING FORM') }}</h4>
                                </div>
                            </div>

                            <form  class=" form-horizontal mx-auto" role="form" method="post" autocomplete="on" action="{{ route('store-sms') }}" enctype="multipart/form-data" style="width: 85%; border: 1px solid lightslategray">
                                @csrf

                                <div class="card-body">
                                    @include('inc.massages')

                                    <div class="row">
                                        <div class="col-md-12"><h4 class="card-title push-right-7 h3">Incident Sms</h4></div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for="sms" class="col-md-2 col-form-label text-md-right">{{ _('Message') }}</label>
                                                <div class="col-md-10">
                                                    <textarea rows="3" cols="5" class="form-control{{ $errors->has('sms') ? ' is-invalid' : '' }}" name="sms" maxlength="250" placeholder="{{ _('Please explain in brief on how the incidents happen...') }}" required >{{ old('sms') }}</textarea>
                                                    <small id="sms" class="form-text text-muted">Please do not exceed 250 characters.</small>

                                                    @if ($errors->has('sms'))
                                                        <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('sms') }}</strong>
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
    </div>
@stop