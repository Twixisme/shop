<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = ['name', 'code', 'price', 'category_id', 'about', 'image'];
	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function getPrice()
	{
		if(!is_null($this->pivot)){
			return $this->pivot->count * $this->price;
		}
		return $this->price;
	}
}
