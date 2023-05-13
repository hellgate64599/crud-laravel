@extends('layouts.app')
@section('title', 'Create Product')

@section('content')
    <div class="container p-5">
        <h1>Create Products</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card w-50">
            @if (session()->has('success') || session()->has('error'))
                <div class="alert alert-dismissible a-{{ session()->get('success') ? 'success' : 'danger' }}"
                    role="alert">
                    <div class="alert alert-{{ session()->get('success') ? 'success' : 'danger' }}" role="alert">
                        <h4 class="alert-heading">Well Done!</h4>
                        <hr>
                        <p class="mb-0">
                            {{ session()->get('success') ? session()->get('success') : session()->get('error') }}</p>
                    </div>
                </div>
            @endif
            <div class="card-body">
                <form action="{{route('store.product')}}" method="post"></form>
                @csrf
                <div class="form-group mb-2">
                    <input type="text" name="ProductName" class="form-control" placeholder="Product Name">
                </div>
                <div class="form-group mb-2">
                    <input type="number" name="ProductPrice" class="form-control" placeholder="product price">
                </div>
                <div class="form-group mb-2">
                    <input type="number" name="ProductQuantity" class="form-control" placeholder="product quantity">
                </div>
                <div class="form-group mb-2">
                    <input type="text" name="ProductDescription" class="form-control" placeholder="product description">
                </div>
                <div class="form-group mb-2">
                    <input type="text" name="ProductSlug" class="form-control" placeholder="product slug">
                </div>
                <button type="submit" class="btn btn-success">CREATE</button>
            </div>
        </div>
    </div>
@endsection
