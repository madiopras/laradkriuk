@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Product Details</h1>
    <div>
        <h3>Name: {{ $product->name }}</h3>
        <p>Category: {{ $product->category->category_name }}</p>
        <p>Price: {{ $product->price }}</p>
        <p>Stock: {{ $product->stock }}</p>
        <p>Created at: {{ $product->created_at }}</p>
        <p>Updated at: {{ $product->updated_at }}</p>
    </div>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
</div>
@endsection
