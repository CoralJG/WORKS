<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tripulante extends Model
{
	use HasFactory;
	protected $table = 'tripulantes';
	protected $guarded = [];

	public function mision()
	{
		return $this->hasMany(Mision::class);
	}
}
