<?php

namespace App\Http\Controllers;

use App\Classes\Basket;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public $orderIdForSession = 'orderId';

    public function basket()
    {
        $order = (new Basket())->getOrder();

        return view('basket', compact('order'));
    }

    public function place()
    {
        $basket = new Basket();
        $order = $basket->getOrder();
        if(!$basket->countAvailable()){
            session()->flash('warning', 'Товар недоступен для заказа');
            return redirect()->route('basket');
        }
        return view('order', compact('order'));
    }

    public function confirm(Request $request)
    {
        $email = Auth::check() ? Auth::user()->email : $request->email;
        if((new Basket())->saveOrder($request->name, $request->phone, $email)){
            session()->flash('success','Ваш заказ обрабатывается');
        }else{
            session()->flash('warning', 'Товар недоступен для заказа');
        }
        return redirect()->route('index');
    }

    public function add(Product $product)
    {
        $result = (new Basket(true))->addProduct($product);
        if($result){
            session()->flash('success', 'Добавлен товар' . $product->name);
        }else{
            session()->flash('warning', 'Товар' . $product->name . 'в большем количестве недоступен для заказа');
        }
        return redirect()->route('basket');
    }

    public function remove(Product $product)
    {
        (new Basket())->removeProduct($product);
        session()->flash('warning', 'Товар удален' . $product->name);
        return redirect()->route('basket');
    }
}
