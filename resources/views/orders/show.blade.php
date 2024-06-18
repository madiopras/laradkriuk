@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Order Details</h1>
    <div>
        <h3>Product: {{ $order->product->name }}</h3>
        <h3>Customer: {{ $order->customer->name }}</h3>
        <p>Order Date: {{ $order->order_date }}</p>
        <p>Quantity: {{ $order->quantity }}</p>
        <p>Total Price: {{ $order->total_price }}</p>
        <p>Status: {{ $order->status }}</p>
        <p>Created at: {{ $order->created_at }}</p>
        <p>Updated at: {{ $order->updated_at }}</p>
    </div>
    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back to Orders</a>
</div>
@endsection
