@extends('layouts.home')
    @section('sidebar')
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- User Role -->
            <a href="{{ url('customer/home') }}" class="brand-link">
                <img src="{{ asset('images/app/lhrc_logo-2.png') }}"
                    alt="customer_logo"
                    class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Customer Profile</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/storage/images/{{ Auth::user()->user_image }}" class="img-circle elevation-2" alt="Image">
                    </div>
                    <div class="info">
                        <a href="{{ url('customer/edit-customer', Auth::user()->id ) }}" class="d-block">{{ Auth::user()->first_name }}&nbsp;{{ substr(Auth::user()->middle_name, 0,1).'.' }}&nbsp;{{ Auth::user()->last_name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ url('customer/home') }}" class="nav-link">
                                <i class="nav-icon fa fa-home"></i>
                                <p>
                                {{ _('Customer Home') }}
                                {{-- <span class="right badge badge-danger">New</span> --}}
                                </p>
                            </a>
                        </li>

                        {{-- @if( isset($reported) && (count($reported) >= 1 )) --}}
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-file-text"></i>
                                    <p>Form Reporting<i class="fa fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('customer/create-incident')}}" class="nav-link" onclick="return confirm('Do you really want to report the incident..?') ">
                                            <i class="nav-icon fa fa-circle"></i>
                                            <p>Report Incident</p>
                                        </a>
                                    </li>

                                    <li class="nav-item" id="progress">
                                        <a href="{{ url('customer/show-incident') }}" class="nav-link">
                                            <i class="nav-icon fa fa-circle"></i>
                                            <p>Incident Progress</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url('customer/create-sms') }}" class="nav-link">
                                    <i class="nav-icon fa fa-commenting" aria-hidden="true"></i>
                                    <p>
                                        {{ _('Sms Reporting') }}
                                        <span class="badge badge-info right">sms</span>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url('customer/create-voice') }}" class="nav-link">
                                    <i class=" nav-icon fa fa-file-audio-o" aria-hidden="true"></i>
                                    <p>
                                        {{ _('Voice Reporting') }}
                                        <span class="badge badge-info right">audio</span>
                                    </p>
                                </a>
                            </li>

                        {{-- @else --}}
                            {{-- <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-book"></i>
                                    <p>Right Violation<i class="fa fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('customer/create-incident')}}" class="nav-link">
                                            <i class="nav-icon fa fa-circle"></i>
                                            <p>Report Incident</p>
                                        </a>
                                    </li>
                                </ul>
                            </li> --}}
                        {{-- @endif --}}
                    </ul>
                </nav>
            </div>
        </aside>
    @endsection

    @section('main')
        <div class="content-wrapper">
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-header text-white bg-info">
                            <strong style="padding:0; margin:0;" class="card-title">Logged:&nbsp; {{ Auth::user()->first_name }}&nbsp;{{ substr(Auth::user()->middle_name,0,1).'.'}}&nbsp;{{ Auth::user()->last_name}}&nbsp;</strong>
                        </div>
                        
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 margin-tb">
                                        <div class="text-center">
                                            <img src="{{ asset('images/app/lhrc_logo.jpg') }}" class="d-block mx-auto img-responsive" alt="lhrc-logo" title="lhrc-logo" width="90px" height="90px"/>
                                            <h4><strong>{{ _('Legal and Human Rights Centre') }}</strong></h4>
                                        </div>

                                    <div class="col-md-10 offset-md-2">
                                        <h3 class="text-justify">{{ _('Human Right Violations Reporting System') }}</h3>
                                        <ul class="text-justify">
                                            <li>{{ _('Human rights protection is your duty.') }}</li>
                                            <li>{{ _('Report about human rights violation.') }}</li>
                                            <li>{{ _('The protection of human rights is your responsibility.') }}
                                            <li>{{ _('Report human rights violations at any time and wherever you are.') }}</li>
                                            <li>{{ _('Confidentiality and non-disclosure are strictly observed.') }}</li>
                                            <li>{{ _('Your information and identity will be kept confidential.') }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script>
            if (isset($reported) && (count($reported) >= 1)) {
                document.getElementById('progress').style.display = "";
            } else {
                document.getElementById('progress').style.display = "none";
            }
      </script>
    @endsection
