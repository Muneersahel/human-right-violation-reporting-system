    @extends('layouts.app')
        @section('content')
            <div class="container">
                <div class="content-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card">

                                <div class="card-header bg-info text-white" >{{ __('User Login') }}</div>

                                <div class="card-body" style="background-image: url('images/app/legal human rights center.jpg')">
                                    {{-- <img src="{{ asset('images/app/lhrc_logo.jpg') }}" class="img-responsive d-block mx-auto mb-2" alt="lhrc-logo" title="Human right" width="70px" height="70px"/> --}}

                                    <form method="POST" action="{{ route('login') }}" autocomplete="on">
                                        @csrf

                                        <div class="form-group row">
                                            <div class="justify-content-center col-md-10 mx-auto">
                                                @if(Session::has('failure'))
                                                    <div class="alert alert-danger" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                        <strong><i class="fa fa-warning"></i>&nbsp;{{ Session::get('failure')}}</strong>
                                                    </div>
                                                @endif

                                                @if(Session::has('success'))
                                                    <div class="alert alert-success" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                        <strong> {{ Session::get('success')}}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('User Email') }}</label>
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" value="{{ old('email') }}" placeholder="email" required>
                                                </div>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Password') }}</label>
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fa fa-eye toggle-password" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="password" required />
                                                </div>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                       
                                        <div class="form-group row">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-info">
                                                    {{ __('Login') }}
                                                </button>

                                                <a class="btn btn-link" style="text-decoration-line: none" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).on('click', '.toggle-password', function() {
                    $(this).toggleClass("fa-eye fa-eye-slash");
                    var input = $("#password");
                    input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
                });
            </script>
        @endsection
