@extends('layouts.home')
    @section('sidebar')
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- User Role -->
            <a href="{{ url('admin/home') }}" class="brand-link">
                <img src="{{ asset('images/app/lhrc_logo-2.png') }}"
                    alt="admin_logo"
                    class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Admin Profile</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/storage/images/{{ Auth::user()->user_image }}" class="img-circle elevation-2" alt="Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->first_name }}&nbsp;{{ substr(Auth::user()->middle_name, 0,1).'.' }}&nbsp;{{ Auth::user()->last_name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ url('admin/home') }}" class="nav-link">
                                <i class="nav-icon fa fa-home"></i>
                                <p>{{ _('Admin Home') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/staff-management') }}" class="nav-link">
                                <i class="nav-icon fa fa-users"></i>
                                <p>{{ _('Staff Management') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/center-management') }}" class="nav-link">
                                <i class="nav-icon fa fa-building" aria-hidden="true"></i>
                                <p>{{ _('Center Management') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/sms-management') }}" class="nav-link">
                                <i class="nav-icon fa fa-commenting"></i>
                                <p>{{ _('Sms Management') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/voice-management') }}" class="nav-link">
                                <i class="nav-icon fa fa-file-audio-o" aria-hidden="true"></i>
                                <p>{{ _('Voice Management') }}</p>
                            </a>
                        </li>

                        {{-- <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-folder"></i>
                                <p>LHRC Management<i class="fa fa-angle-left right"></i></p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('admin/center-management') }}" class="nav-link">
                                    <i class="nav-icon fa fa-circle"></i>
                                    <p>Lhrc Offices</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ url('admin/department-management') }}" class="nav-link">
                                    <i class="nav-icon fa fa-circle"></i>
                                    <p>Lhrc Regions</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ url('admin/program-management') }}" class="nav-link">
                                    <i class="nav-icon fa fa-circle"></i>
                                    <p>Lhrc District</p>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
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
                                <h3 class="card-title">{{ _('System Administrator Quidlines') }}</h3>
                            </div>
                            
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 text-justify">
                                            {{-- @if ($message = Session::get('success'))
                                                <div class=" alert alert-success alert-block">
                                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @endif --}}
                                           
                                            <h2 class="mt-0">General responsibilty of System Administrator</h2>
                                            <dd>
                                                <dl>Responsible to ensure reported victim incidents are processed on time after they have reported to LHRC Center</dl>
                                                <dt>Management of the System involves the activities like.</dt>
                                                <ul>
                                                    <li>Manage users account informations</li>  
                                                    <li>Registering of Human Right Monitors that are Responsible for validation of reported incidents</li>
                                                    <li>Registering of Operators that performs the preliminary and vulnability of human right violance</li>
                                                    <li>Registering of Zonal Leader that corresponds to management of Hunan Right Zonal Offices</li>
                                                    <li>Registering and Management of Human Righr Centers around the Country</li>
                                                </ul>
                                            </dd>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endsection
