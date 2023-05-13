@extends('layouts.app')

@section('content')
    <div class="container-fluid vh-100">
        <div class="row">
            <div class="col-lg-6 bg-warning vh-100 p-5">
                <div class="card text-left">
                    @if (session()->has('success') || session()->has('error'))
                        <div class="alert alert-dismissable a-{{ session()->get('success') ? 'success' : danger }}"
                            role="alert">
                            <h4 class="alert-heading">Well Done!</h4>
                            <hr>
                            <p class="mb-0">
                                {{ session()->get('success') ? session()->get('success') : session()->get('error') }}</p>
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="POST">
                            @csrf
                            <div class="from-group mb-2">
                                <input type="text" class="form-control" name="ProductName" placeholder="Product name">
                            </div>
                            <div class="from-group mb-2">
                                <input type="number" class="form-control" name="ProductPrice" placeholder="Product price">
                            </div>
                            <div class="from-group mb-2">
                                <input type="text" class="form-control" name="ProductDescription"
                                    placeholder="Product Description">
                            </div>
                            <div class="from-group mb-2">
                                <input type="number" class="form-control" name="ProductQuantity"
                                    placeholder="Product Quantity">
                            </div>
                            <div class="from-group mb-2">
                                <input type="text" class="form-control" name="ProductSlug" placeholder="Product slug">
                            </div>
                            <div class="from-group mb-2">
                                <button type="submit" class="btn btn-block btn-success">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 bg-info vh-100 p-5">
                <table class="table">
                    <thead class="bg-danger text-white">
                        <tr>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Description</th>
                            <th>Product Quantity</th>
                            <th>Product slug</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($products->count() > 0)
                            @foreach ($products as $product)
                                <tr>
                                    <td scope="row">{{ $product->ProductName }}</td>
                                    <td>{{ $product->ProductPrice }}</td>
                                    <td>{{ $product->ProductDescription }}</td>
                                    <td>{{ $product->ProductQuantity }}</td>
                                    <td>{{ $product->ProductSlug }}</td>
                                    <td>
                                        <a href="{{ URL::to('products', $product->id) }}"
                                            class="btn btn-success btn-sm">Show</a>
                                        <a href="{{ URL::to('products', $product->id) }}/edit"
                                            class="btn btn-primary btn-sm">Edit</a>

                                        <a href="{{ URL::to('products', $product->id) }}" class="btn btn-danger btn-sm"
                                            onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this product?')) { document.getElementById('delete-form-{{ $product->id }}').submit(); }">Delete</a>
                                        <form id="delete-form-{{ $product->id }}"
                                            action="{{ URL::to('products', $product->id) }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td>No Products Found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                @include('layouts.pagination') 
            </div>
        </div>
    </div>
@endsection
