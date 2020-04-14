<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public $orderIdForSession = 'orderId';

    public function basket()
    {
    	$orderId = session($this->orderIdForSession);
        if(!is_null($orderId)) {
    		$order = Order::findOrFail($orderId);
		}
    	return view('basket', compact('order'));
    }

    public function place()
    {
    	$orderId = session($this->orderIdForSession);
    	if(!$orderId) {
    		return redirect()->route('index');
    	}
    	$order = Order::find($orderId);
    	return view('order', compact('order'));
    }

    public function confirm(Request $request)
    {
    	$orderId = session($this->orderIdForSession);
    	if (!$orderId) {
    		return redirect()->route('index');
    	}
    	$order = Order::find($orderId);
    	$success = $order->saveOrder($request->name, $request->phone);
    	if($success){
    		session()->flash('success','Ваш заказ обрабатывается');
    	}else{
    		session()->flash('success', 'Error');
    	}
    	return redirect()->route('categories');
	}

    public function add($productId)
    {
    	$orderId = session($this->orderIdForSession);
    	if (!$orderId){
    		$order = Order::create();
    		session([$this->orderIdForSession => $order->id]);
    	}else{
    		$order = Order::find($orderId);
    	}
    	if($order->products->contains($productId)){
    		$pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
    		$pivotRow->count++;
    		$pivotRow->update();
    	}else{
    		$order->products()->attach($productId);
    	}

        if(Auth::check()){
            $order->user_id = Auth::id();
            $order->save();
        }

    	$product = Product::find($productId);
    	session()->flash('success', 'Добавлен товар' . $product->name);

 		return redirect()->route('basket');
    }

    public function remove($productId)
    {
		$orderId = session($this->orderIdForSession);
		if(is_null($orderId)) {
			return redirect()->route('basket');
		}
		$order=Order::find($orderId);

		if($order->products->contains($productId)){
    		$pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
    		if ($pivotRow->count < 2){
	    		$order->products()->detach($productId);
    		}else{
	    		$pivotRow->count--;
	    		$pivotRow->update();
    		}
    	}
		return redirect()->route('basket');

	}
}
