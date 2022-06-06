@extends('monitor.home')
@section('main')
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title">{{ _('VICTIM\'S INCIDENT VALIDATION') }}</h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="text-center">
                                    <h4><strong>{{ _('Legal and Human Rights Centre') }}</strong></h4>
                                    <img src="{{ asset('images/app/lhrc_logo.jpg') }}" class="d-block mx-auto img-responsive" alt="lhrc-logo" title="lhrc-logo" width="70px" height="70px"/>
                                    <h4 class="text-center" ><strong>{{ _('Human Right Violations Reporting System') }}</strong></h4>
                                    <h4 class="text-center" style="text-decoration: underline; text-decoration-color:lightslategray; text-underline-offset: 2px;" >
                                        {{ ('VICTIM\'S INCIDENT VALIDATION FOR'.' '.strtoupper($incident->right_violated).' '.'VIOLANCE')}}
                                    </h4>
                                </div>
                            </div>

                            <form  class="form-horizontal mx-auto" role="form" method="post" autocomplete="on" action="" enctype="multipart/form-data" style="width: 85%; border: 1px solid lightslategray" >
                                @csrf

                                <div class="mt-3">@include('inc.massages')</div>
                                
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="assistance_required" class="col-md-5 col-form-label text-md-right">{{_ ('LHRC Assistance required') }}</label>
                                                <div class="col-md-6">
                                                    <select class="form-control{{ $errors->has('assistance_required') ? ' is-invalid' : '' }}" name="assistance_required" id="assistance_required" required>
                                                        <option value="">{{_ ('Choose advice given') }}</option>
                                                        <option value="Guidance & Counseling"><span class="active">{{_ ('Guidance & Counseling') }}</span></option>
                                                        <option value="Legal Justice">{{_ ('Legal Justice') }}</option>
                                                        <option value="Human Support">{{_ ('Human Support') }}</option>
                                                        <option value="Others">{{ _('Others') }}</option>
                                                    </select>

                                                    @if ($errors->has('assistance_required'))
                                                    <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('assistance_required') }}</strong>
                                                    </span>
                                                @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="follow_up" class="col-md-5 col-form-label text-md-right">{{ _('Follow up') }}</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control{{ $errors->has('follow_up') ? ' is-invalid' : '' }}" id="follow_up" name="follow_up" value="{{ old('follow_up')}}" required >

                                                    @if ($errors->has('follow_up'))
                                                        <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('follow_up') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="Ways" class="col-md-5 col-form-label text-md-right">{{ _('Findings & Way Forward') }}</label>
                                                <div class="form-group row">
                                                    <label for="way_findings" class="col-md-5 col-form-label text-md-right">{{ _('Findings') }}</label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control{{ $errors->has('way_findings') ? ' is-invalid' : '' }}" name="way_findings" id="way_findings" value="{{ old('way_findings')}}" required >
                                                    
                                                        @if ($errors->has('way_findings'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('way_findings') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="way_forward" class="col-md-5 col-form-label text-md-right">{{ _('Forward') }}</label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control{{ $errors->has('way_forward') ? ' is-invalid' : '' }}" id="way_forward" name="way_forward" value="{{ old('way_forward')}}" required >
                                                        
                                                        @if ($errors->has('way_forward'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('way_forward') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="validation_status" class="col-md-4 col-form-label text-md-right">{{ _('Incident validation') }}</label>
                                                <div class="col-md-6">
                                                    <select class="form-control{{ $errors->has('validation_status') ? ' is-invalid' : '' }}"  name="validation_status" id="validation_status" required >
                                                        <option value="">{{ _('Choose incident validation') }}</option>
                                                        <option value="Valid" id="Valid">{{ _('Valid') }}</option>
                                                        <option value="Invalid" id="Invalid">{{ _('Invalid') }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        
                                            <div class="form-group row">
                                                <label for="operation" class="col-md-4 col-form-label text-md-right">{{ _('Operation') }}</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control{{ $errors->has('operation') ? ' is-invalid' : '' }}" id="operation" name="operation" value="{{ old('operation')}}" required >

                                                    @if ($errors->has('operation'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('operation') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                        
                                            {{-- <div class="form-group row" >
                                                <label for="approval_name" class="col-md-5 col-form-label text-md-right">{{ _('Approved by(name)') }}</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control{{ $errors->has('approval_name') ? ' is-invalid' : '' }}" id="approval_name" name="approval_name" value="{{ old('approval_name')}}" required/>

                                                    @if ($errors->has('approval_name'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('approval_name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div> --}}

                                            <div class="form-group row">
                                                <label for="validation_remarks" class="col-md-4 col-form-label text-md-right">{{ _('Validation Remarks') }}</label>
                                                <div class="col-md-6">
                                                    <textarea rows="4" cols="5" class="form-control{{ $errors->has('validation_remarks') ? ' is-invalid' : '' }}" name="validation_remarks" id="validation_remarks" maxlength="150"  placeholder="{{ _('Remarks if any:') }}" required >{{ old('validation_remarks') }}</textarea>
                                                    <small class="form-text text-muted">{{ _('Validation remarks should not exceed 150 chars.') }}</small>

                                                    @if ($errors->has('validation_remarks'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('validation_remarks') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="float-left">
                                        <a class="btn btn-info" href="{{ route('index-incident') }}">&laquo; {{ _('Back') }}</a> 
                                    </div>
        
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-success" >{{ _('Validate') }} &raquo;</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection