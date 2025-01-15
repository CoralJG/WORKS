<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mision extends Model
{
	use HasFactory;
	protected $table = 'misiones';
	protected $guarded = [];

	public function tripulante()
	{
		return $this->belongsTo(Tripulante::class);
	}
}
