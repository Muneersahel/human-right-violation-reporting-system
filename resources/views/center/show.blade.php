{{-- @foreach ($centers as $center)
    @if ($loop->index == 0)
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Center Information</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <section class="content">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="col-lg-12 margin-tb">
                                <div class="mx-auto">
                                    <h4 class="text-center"><strong>{{ _('Legal and Human Rights Centre') }}</strong></h4>
                                    <img src="{{ asset('images/app/lhrc_logo.jpg')}}" class="mx-auto d-block img-responsive" alt="lhrc-logo" title="lhrc-logo" width="60px" height="60px"/>
                                    <h4 class="text-center" ><strong>{{ $center->code }}:&nbsp;{{ $center->name }}</strong></h4>
                                    <h4 class="text-center" style="text-decoration: underline; text-decoration-color:lightslategray; text-underline-offset: 2px;" >
                                        {{ 'P. O. Box'.' '.$center->address }},&nbsp;Phone# +{{$center->mobile_no}},&nbsp;Email: {{$center->email}}
                                    </h4> 
                                </div>
                            </div>

                            <div class="table-responsive col-md-12">
                                <table  class="table table-bordered table-hover">
                                    <tr>
                                        <td><strong>Center Code</strong></td>
                                        <td>{{ $center->code }}</td>
                                        <td><strong>Physical address</strong></td>
                                        <td>{{'P. O. Box'.' '.$center->address.', '.$center->ward}}</td>
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
                </section>
            </div>

            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ _('Close') }}</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">{{ _('OK') }}</button>
            </div>
        </div>
    @endif
@endforeach --}}

    @if (isset($center))
        {{'True'}}
        {{-- @foreach ($json_array as $key=>$value)
            {{ $value['code'] }}
        @endforeach --}}
    @else
        {{'False'}}
    @endif
