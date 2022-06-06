@extends('layouts.errors')
@section('content')
    <div class="error-page text-center">
        <h1 class="headline text-info">503</h1>
        <div class="error-content">
            <h2 class="text-warning"><i class="fa fa-warning"></i> Oops! Service Unavailable.</h2>
            <p><h2>Service is Currently Unavailable </h2></p>
        </div>
        <div class="user-home">
            {{-- <a class="btn btn-info" href="{{ route('login') }}">{{ __('Back to HomePage') }}</a></button> --}}
        </div>
    </div>
@endsection
