@extends('layouts.app')

@section('content')
    {{$product->ProductName}}
    {{$product->ProductPrice}}
    {{$product->ProductQuantity}}
    {{$product->ProductDescription}}
    {{$product->ProductSlug}}
@endsection