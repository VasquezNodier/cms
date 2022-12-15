@extends('layouts.master')
@section('title','Login')

@section('custom-head')
<link rel="stylesheet" href="{{ url('/static/css/connect.css?v='.time()) }}">
@stop

@section('content')
<div class="centered-box">
    <div class="box shadow">
        <h1 class="text-center">Login</h1>
        <form action="{{ url('login') }}" method="post">

            @include('layouts.errors')

            @csrf
            <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" required name="email" id="email" placeholder="Email / Username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" required name="password" id="password" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-success w-100">Login</button>
        </form>
        <div class="footer">
            <a name="" id="" class="btn btn-outline-primary my-1 w-100" href="{{ url('register') }}" role="button">Register</a>
            <a name="" id="" class="small text-primary text-center my-1 d-block" href="{{ url('recover') }}" role="button">Recover</a>
        </div>
    </div>
</div>
@stop
