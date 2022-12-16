@extends('admin.base')
@section('title', 'Create Category')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a class="nav-link d-inline-block" href="{{ url('admin/category') }}">
            <i class="fas fa-folder"></i>
            Category
        </a>
    </li>
    <li class="breadcrumb-item">
        <a class="nav-link d-inline-block" href="{{ url('admin/category/create') }}">
            <i class="fas fa-plus"></i>
            Create Category
        </a>
    </li>
@endsection

@section('container')
    <div class="container-fluid">
        <div class="panel-content shadow rounded">
            <div class="header border-bottom">
                <h5 class="title d-inline-block py-2 px-3">
                    <i class="fas fa-fas-folder"></i>
                    Category
                </h5>

            </div>
            <div class="content-inside p-3">


                <form action="{{ url('admin/producr/store') }}" class="row g-3" method="post"
                    enctype="multipart/form-data">
                    <div class="col-md-8">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="col-md-4">
                        <label for="module" class="form-label">Module</label>
                        <select id="module" class="form-select">
                            <option selected>Choose...</option>
                            <option>Module 1</option>
                            <option>Module 2</option>
                            <option>Module 3</option>
                            <option>Module 4</option>
                        </select>
                    </div>

                    {{-- <div class="col-md-3">
                        <label for="price" class="form-label">Price</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="price">$</span>
                            <input type="text" class="form-control" aria-label="Price" aria-describedby="price">
                        </div>
                    </div> --}}

                    <div class="row mt-3">

                        <div class="col-md-4">
                            <label for="available" class="form-label">Available Category</label>
                            <select id="available" class="form-select">
                                <option selected>Choose...</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 text-center">
                        <div class="btns mt-3 d-flex justify-content-evenly">
                            <button type="submit" class="btn btn-success">Save</button>

                            <a class="px-3 d-inline-block btn btn-danger" href="{{ url('admin/category') }}">
                                Cancel
                            </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@stop
