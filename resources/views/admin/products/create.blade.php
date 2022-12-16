@extends('admin.base')
@section('title', 'Create Product')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a class="nav-link d-inline-block" href="{{ url('admin/products') }}">
            <i class="fas fa-boxes"></i>
            Products
        </a>
    </li>
    <li class="breadcrumb-item">
        <a class="nav-link d-inline-block" href="{{ url('admin/products/create') }}">
            <i class="fas fa-plus"></i>
            Create product
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


                <form action="{{ url('admin/producr/store') }}" class="row g-3" method="post"
                    enctype="multipart/form-data">
                    <div class="col-md-8">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="col-md-4">
                        <label for="category" class="form-label">Category</label>
                        <select id="category" class="form-select">
                            <option selected>Choose...</option>
                            <option>Category 1</option>
                            <option>Category 2</option>
                            <option>Category 3</option>
                            <option>Category 4</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label for="price" class="form-label">Price</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="price">$</span>
                            <input type="text" class="form-control" aria-label="Price" aria-describedby="price">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="margin" class="form-label">Margin</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="margin">%</span>
                            <input type="text" class="form-control" aria-label="Margin" aria-describedby="margin">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <label for="qty" class="form-label">Quantity</label>
                        <input type="text" class="form-control" id="qty">
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label for="hasDiscount" class="form-label">Has Discount?</label>
                            <select id="hasDiscount" class="form-select" onchange="showLink(value)">
                                <option selected>Choose...</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="available" class="form-label">Available Product</label>
                            <select id="available" class="form-select">
                                <option selected>Choose...</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>

                    <div id="discountFld" class="col-md-3">
                        <label for="discount" class="form-label">Discount</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="discount">%</span>
                            <input type="text" class="form-control" aria-label="Discount" aria-describedby="discount">
                        </div>
                    </div>

                    <div class="mb-3 col-md-12">
                        <label for="images" class="form-label">Product Images</label>
                        <input class="form-control" type="file" id="images" multiple>
                    </div>

                    <div class="form-floating">
                        <textarea class="form-control" id="description" style="height: 100px"></textarea>
                    </div>


                    <div class="col-12 text-center">
                        <div class="btns mt-3 d-flex justify-content-evenly">
                            <button type="submit" class="btn btn-success">Save</button>

                            <a class="px-3 d-inline-block btn btn-danger" href="{{ url('admin/products') }}">
                                Cancel
                            </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@stop
