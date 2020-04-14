<?php

namespace App\Models;

use App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	public function products()
	{
		return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
	}

	public function calc()
	{
		$sum = 0;
		foreach ($this->products as $product) {
			$sum += $product->getPrice();
		}
		return $sum;
	}

	public function saveOrder($name, $phone)
	{
		if ($this->status == 0) {
			$this->name = $name;
	    	$this->phone = $phone;
	    	$this->status = 1;
	    	$this->save();

	    	session()->forget('orderId');
	    	return true;
		} else{
			return false;
		}

	}
}
