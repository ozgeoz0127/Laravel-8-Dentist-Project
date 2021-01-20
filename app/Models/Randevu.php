<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Randevu extends Model
{
    use HasFactory;
    
	public function user()
	{
		return $this->belongsTo(User::class,"hekim_id","id");
	}
	public function tedavi()
	{
		return $this->belongsTo(Tedavi::class);
	}
}
