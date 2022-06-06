@extends('layouts.errors')
@section('content')
    <div class="error-page text-center">
        <h1 class="headline text-info">404</h1>
        <div class="error-content">
            <h2 class="text-warning"><i class="fa fa-warning"></i> Oops! Page not found.</h2>
            <p><h2>That page can’t be found.</h2></p>
        </div>
        <div class="user-home">
            {{-- <a class="btn btn-info" href="{{ route('login') }}">{{ __('Back to HomePage') }}</a></button> --}}
            <a class="btn btn-info" href="javascript:;" onclick = "history.back() "><i class="fa fa fa-angle-left" aria-hidden="true"></i>&nbsp;{{ __('Back to Previous') }}</a></button>
        </div>
    </div>
@endsection
