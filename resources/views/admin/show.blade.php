@extends('admin.home')
@section('main')
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title">{{ _('LHRC STAFF INFORMATION') }}
                                <span class="float-right"></span>
                            </h3>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-12 margin-tb">
                                <div class="mx-auto">
                                    <h4 class="text-center"><strong>{{ _('Legal and Human Rights Centre') }}</strong></h4>
                                    <img src="{{ asset('images/human/lhrc_logo.jpg')}}" class="mx-auto d-block img-responsive" alt="lhrc-logo" title="lhrc-logo" width="80px" height="80px"/>
                                    {{-- <h4 class="text-center" ><strong>{{ $center->code }}:&nbsp;{{ $center->name }}</strong></h4>
                                    <h4 class="text-center" style="text-decoration: underline; text-decoration-color:lightslategray; text-underline-offset: 2px;" >
                                        {{ $center->address }},&nbsp;Phone# +{{$center->mobile_no}},&nbsp;Email: {{$center->email}}
                                    </h4>  --}}
                                </div>
                            </div>
                        {{-- </div> --}}

                            <div class="card-body offset-md-2">
                                <div class="table-responsive col-md-10">
                                <h2 class="text-center">This page is temporary unavailable</h2>

                                    {{-- <table  class="table table-bordered table-hover">
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
                                    </table> --}}
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="float-left">
                                <a class="btn btn-info" href="{{ url('admin/staff-management') }}">&laquo;&nbsp;{{ _('Prev') }}</a>
                            </div>

                            <div class="float-right">
                                {{-- <a class="btn btn-info" href="{{ url('admin/edit-center', $center->id) }}">{{ _('Edit') }}&nbsp;&raquo;</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
