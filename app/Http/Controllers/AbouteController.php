<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AbouteController extends Controller
{
    public function index(Order $order)
    {
        $orders = Order::count();
        return view('about' ,compact('orders'));
    }
}
