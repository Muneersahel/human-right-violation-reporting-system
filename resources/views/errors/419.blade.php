@extends('layouts.errors')
@section('content')
    <div class="error-page text-center">
        <h1 class="headline text-info">419</h1>
        <div class="error-content">
            <h2 class="text-warning"><i class="fa fa-warning"></i> Oops! Page Expired.</h2>
            <p><h2>The page has been Expired</h2></p>
        </div>
        <div class="user-home">
            <a class="btn btn-info" href="{{ url('/') }}">{{ __('Back to HomePage') }}</a></button>
        </div>
    </div>
@endsection
