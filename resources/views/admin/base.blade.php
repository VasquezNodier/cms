@extends('layouts.master')
@section('title', 'Dashboard')

@section('custom-head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="routeName" content="{{ Route::currentRouteName() }}">
    <link rel="stylesheet" href="{{ url('/static/css/admin.css?v=' . time()) }}">
    <script src="{{ url('/static/js/admin.js') }}"></script>
@endsection

@section('content')
    <div class="wrapper">
        <div class="panel">
            @include('layouts.sidebar')
        </div>
        <div class="col2">
            <nav class="navbar navbar-expand-lg shadow">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('admin') }}"><i class="fas fa-home"></i> Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('admin') }}"></a>
                        </li>
                </div>
            </nav>
            <div class="page py-3">
                <div class="container-fluid">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb shadow p-2">
                            <li class="breadcrumb-item">
                                <a class="nav-link" href="{{ url('admin') }}"><i class="fas fa-home"></i> Dashboard</a>
                            </li>
                            @section('breadcrumb')
                            @show
                    </ol>
                </nav>
            </div>
            @include('layouts.errors')

            @section('container')
            @show

        </div>
    </div>
</div>
@endsection
