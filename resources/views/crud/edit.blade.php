@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <h1>Edit Product</h1>

        <div class="card w-50">
            <div class="card-body">
                <form action="{{route('products.update', $product->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                        <input type="text" name="ProductName" class="form-control" placeholder="Product Name" value="{{$product->ProductName}}">
                    </div>
                    <div class="form-group mb-2">
                        <input type="number" name="ProductPrice" class="form-control" placeholder="product price" value="{{$product->ProductPrice}}">
                    </div>
                    <div class="form-group mb-2">
                        <input type="number" name="ProductQuantity" class="form-control" placeholder="product quantity" value="{{$product->ProductQuantity}}">
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" name="ProductDescription" class="form-control" placeholder="product description" value="{{$product->ProductDescription}}">
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" name="ProductSlug" class="form-control" placeholder="product slug" value="{{$product->ProductSlug}}">
                    </div>
                    <button type="submit" class="btn btn-success">UPDATE</button>
                </form>
            </div>
        </div>
    </div>
@endsection