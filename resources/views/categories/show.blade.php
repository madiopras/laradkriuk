@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Category Details</h1>
    <div>
        <h3>{{ $category->category_name }}</h3>
        <p>Created at: {{ $category->created_at }}</p>
        <p>Updated at: {{ $category->updated_at }}</p>
    </div>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to Categories</a>
</div>
@endsection
