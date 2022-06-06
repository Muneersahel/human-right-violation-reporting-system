{{-- @extends('errors::minimal')
@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden')) --}}

@extends('layouts.errors')
@section('content')
    <div class="error-page text-center">
        <h1 class="headline text-info">403</h1>
        <div class="error-content">
            <h2 class="text-warning"><i class="fa fa-warning"></i> Oops! Page Forbidden.</h2>
            <p><h2>{{ __($exception->getMessage() ?: 'Forbidden') }}</h2></p>
        </div>
        <div class="user-home">
            <a class="btn btn-info" href="{{ route('login') }}">{{ __('Back to HomePage') }}</a></button>
        </div>
    </div>
@endsection
