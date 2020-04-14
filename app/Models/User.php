<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
	use Notifiable;
	public function isAdmin()
	{
		return $this->is_admin === 1;
	}

	public function orders()
	{
		return $this->hasMany(Order::class);
	}

	protected $fillable = [
		'name', 'email', 'password',
	];

	protected $hidden = [
		'password', 'remember_token',
	];

	protected $casts = [
		'email_verified_at' => 'datetime',
	];
}

