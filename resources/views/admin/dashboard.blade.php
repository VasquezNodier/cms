@extends('layouts.master')
@section('title','Dashboard')

@section('custom-head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="routeName" content="{{ Route::currentRouteName() }}">
    <link rel="stylesheet" href="{{ url('/static/css/admin.css?v='.time()) }}">
    <script src="{{ url('/static/js/admin.js') }}"></script>
@endsection

@section('content')
    <div class="wrapper float-left">
        <div class="panel">
            @include('layouts.sidebar')
        </div>
        <div class="nav float-left">

        </div>
    </div>
@endsection
