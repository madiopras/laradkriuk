@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Customer Details</h1>
    <div>
        <h3>{{ $customer->name }}</h3>
        <p>Email: {{ $customer->email }}</p>
        <p>Phone: {{ $customer->phone }}</p>
        <p>Address: {{ $customer->address }}</p>
        <p>Created at: {{ $customer->created_at }}</p>
        <p>Updated at: {{ $customer->updated_at }}</p>
    </div>
    <a href="{{ route('customers.index') }}" class="btn btn-secondary">Back to Customers</a>
</div>
@endsection
