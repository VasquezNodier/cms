@extends('connect.master')
@section('title','Login')

@section('content')
<div class="login-box">
    <div class="box shadow">
        <h1 class="text-center">Login</h1>
        <form action="{{ url('login') }}" method="post">
            @csrf
            <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email / Username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-success w-100">Ingresar</button>
        </form>
        <div class="footer">
            <a name="" id="" class="btn btn-outline-primary my-1 w-100" href="{{ url('register') }}" role="button">Registrarse</a>
            <a name="" id="" class="small text-primary text-center my-1 d-block" href="{{ url('recover') }}" role="button">Recuperar contraseña</a>
        </div>
    </div>
</div>
@stop
