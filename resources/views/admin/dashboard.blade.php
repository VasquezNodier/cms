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
                        <ol class="breadcrumb shadow">
                            <li class="breadcrumb-item">
                                <a class="nav-link p-2" href="{{ url('admin') }}"><i class="fas fa-home"></i> Dashboard</a>
                            </li>
                        @section('breadcrumb')
                        @show
                    </ol>
                </nav>
            </div>
            @include('layouts.errors')

            <div class="container-fluid">
                <div class="panel-content shadow rounded">
                    <div class="header border-bottom">
                        <h5 class="title d-inline-block py-2 px-3">
                            <i class="fas fa-home"></i>
                            Dashboard
                        </h5>

                    </div>
                    <div class="content-inside p-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad nobis expedita culpa dicta quaerat
                        illum veritatis harum reprehenderit. Rem ratione incidunt soluta quaerat perspiciatis fugiat
                        earum saepe minima fugit facere.
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
