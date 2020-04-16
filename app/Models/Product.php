<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

	protected $fillable = ['name', 'code', 'price', 'category_id', 'about', 'image', 'count'];
	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function isAvailable()
    {
        return !$this->trashed() && $this->count>0;
    }

	public function getPrice()
	{
		if(!is_null($this->pivot)){
			return $this->pivot->count * $this->price;
		}
		return $this->price;
	}
}
