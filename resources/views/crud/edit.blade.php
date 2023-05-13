@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <h1>Edit Product</h1>

        <div class="card w-50">
            @if(session()->has('success') || session()->has('error'))
            <div class="alert alert-dismissable a-{{ (session()->get('success') ? 'success' :danger) }}" role="alert">
                <h4 class="alert-heading">Well Done!</h4>
                <hr>
                <p class="mb-0">{{ (session()->get('success') ? session()->get('success') : session()->get('error')) }}</p>
            </div>
            @endif
            <div class="card-body">
                <form action="{{route('update.product', '$product->id')}}" method="post">
                    @csrf
                    <div class="form-group mb-2">
                        <input type="text" name="ProductName" class="form-control" placeholder="Product Name" value="{{$product->product_name}}">
                    </div>
                    <div class="form-group mb-2">
                        <input type="number" name="ProductPrice" class="form-control" placeholder="product price" value="{{$product->product_price}}">
                    </div>
                    <div class="form-group mb-2">
                        <input type="number" name="ProductQuantity" class="form-control" placeholder="product quantity" value="{{$product->product_quantity}}">
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" name="ProductDescription" class="form-control" placeholder="product description" value="{{$product->product_description}}">
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" name="ProductSlug" class="form-control" placeholder="product slug" value="{{$product->product_slug}}">
                    </div>
                    <button type="submit" class="btn btn-success">UPDATE</button>
                </form>
            </div>
        </div>
    </div>
@endsection