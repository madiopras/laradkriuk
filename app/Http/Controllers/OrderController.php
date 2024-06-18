<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('product', 'customer')->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $products = Product::all();
        $customers = Customer::all();
        return view('orders.create', compact('products', 'customers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'customer_id' => 'required|exists:customers,id',
            'order_date' => 'required|date',
            'quantity' => 'required|integer|min:1',
            'status' => 'required|string',
        ]);

        $product = Product::find($request->product_id);
        $total_price = $product->price * $request->quantity;

        Order::create([
            'product_id' => $request->product_id,
            'customer_id' => $request->customer_id,
            'order_date' => $request->order_date,
            'quantity' => $request->quantity,
            'total_price' => $total_price,
            'status' => $request->status,
        ]);

        return redirect()->route('orders.index')
                         ->with('success', 'Order created successfully.');
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        $products = Product::all();
        $customers = Customer::all();
        return view('orders.edit', compact('order', 'products', 'customers'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'customer_id' => 'required|exists:customers,id',
            'order_date' => 'required|date',
            'quantity' => 'required|integer|min:1',
            'status' => 'required|string',
        ]);

        $product = Product::find($request->product_id);
        $total_price = $product->price * $request->quantity;

        $order->update([
            'product_id' => $request->product_id,
            'customer_id' => $request->customer_id,
            'order_date' => $request->order_date,
            'quantity' => $request->quantity,
            'total_price' => $total_price,
            'status' => $request->status,
        ]);

        return redirect()->route('orders.index')
                         ->with('success', 'Order updated successfully.');
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders.index')
                         ->with('success', 'Order deleted successfully.');
    }
}
