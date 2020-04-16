<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index(){
        $orders = Order::where('status', 1)->paginate(12);
        return view('home', compact('orders'));
    }

    public function show(Order $order)
    {
        $products = $order->products()->withTrashed()->get();
        return view('auth.orders.show', compact('order', 'products'));
    }

}
