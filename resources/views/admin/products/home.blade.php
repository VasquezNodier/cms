@extends('admin.base')
@section('title', 'Products')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a class="nav-link d-inline-block" href="{{ url('admin') }}">
            <i class="fas fa-fas-boxes"></i>
            Products
        </a>
    </li>
@endsection

@section('container')
<div class="container-fluid">
    <div class="panel-content shadow rounded">
        <div class="header border-bottom">
            <h5 class="title d-inline-block py-2 px-3">
                <i class="fas fa-fas-boxes"></i>
                Products
            </h5>

        </div>
        <div class="content-inside p-3">

            <div class="btns mb-3">
                <a class="px-2 d-inline-block btn btn-success" href="{{ url('admin/products/create')}}">
                    Create new Product
                    <i class="fas fa-plus"></i>
                </a>
            </div>

            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->surname}}</td>
                        <td>{{$product->username}}</td>
                        <td>{{$product->email}}</td>
                        <td>{{$product->created_at}}</td>
                        <td>{{$product->updated_at}}</td>
                        <td>
                            <div class="options">
                                <a data-toggle="tooltip" data-placement="top" title="Editar" class="px-2 d-inline-block text-warning" href="{{ url('admin/users/'.$product->id.'/edit')}}">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="px-2 d-inline-block text-danger" href="{{ url('admin/users/'.$product->id.'/delete')}}">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                      </tr>
                    @endforeach --}}
                </tbody>
              </table>
        </div>
    </div>
</div>
@stop
