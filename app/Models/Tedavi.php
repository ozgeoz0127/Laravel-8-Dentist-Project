<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tedavi extends Model
{
    use HasFactory;
    
    
	public function reviews()
	{
		return $this->hasMany(Review::class);
	}
	public function randevu()
	{
		return $this->hasMany(Randevu::class);
	}
}
