@extends('connect.master')
@section('title','Register')

@section('content')
<div class="centered-box">
    <div class="box shadow">
        <h1 class="text-center">Register</h1>
        <form action="{{ url('createUser') }}" method="POST">

            @include('connect.errors')

            @csrf
            <div class="row">
                <div class="form-group col-6">
                    <label for="name">Name</label>
                    <input id="name" class="form-control" required type="text" name="name" placeholder="Name">
                </div>
                <div class="form-group col-6">
                    <label for="surname">Surname</label>
                    <input id="surname" class="form-control" required type="text" name="surname" placeholder="Surname">
                </div>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="username" class="form-control" required name="username" id="username" placeholder="Username">

            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" required name="email" id="email" placeholder="Email">
            </div>

            <div class="row mb-3">
                <div class="form-group col-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" required name="password" id="password" placeholder="Password">
                </div>
                <div class="form-group col-6">
                    <label for="confirm-password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" required name="confirm-password" id="confirm-password" placeholder="Confirm Password">
                </div>
            </div>

            <button type="submit" class="btn btn-success w-100">Registrarse</button>
        </form>
        <div class="footer">
            <a name="" id="" class="btn btn-outline-primary my-1 w-100" href="{{ url('login') }}" role="button">Login</a>
            <a name="" id="" class="small text-primary text-center my-1 d-block" href="{{ url('recover') }}" role="button">Recover</a>
        </div>
    </div>
</div>
@stop
