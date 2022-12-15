@extends('admin.base')
@section('title', 'Users')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a class="nav-link d-inline-block" href="{{ url('admin') }}">
            <i class="fas fa-user-friends"></i>
            Users
        </a>
    </li>
@endsection

@section('container')
<div class="container-fluid">
    <div class="panel-content shadow rounded">
        <div class="header border-bottom">
            <h5 class="title d-inline-block py-2 px-3">
                <i class="fas fa-home"></i>
                Users
            </h5>

        </div>
        <div class="content-inside p-3">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Names</th>
                    <th scope="col">Surnames</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->surname}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td>
                            <div class="options">
                                <a data-toggle="tooltip" data-placement="top" title="Editar" class="px-2 d-inline-block text-warning" href="{{ url('admin/users/'.$user->id.'/edit')}}">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="px-2 d-inline-block text-danger" href="{{ url('admin/users/'.$user->id.'/delete')}}">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@stop
