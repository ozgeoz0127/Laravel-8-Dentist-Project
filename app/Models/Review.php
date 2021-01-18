<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
	protected $fillable = [
		'review',
		'rate',
		'user_id',
		'subject',
		'ip',
		'tedavi_id'
	];
	
	public function tedavi()
	{
		return $this->belongsTo(Tedavi::class);
	}
	public function user()
	{
		return $this->belongsTo(User::class);
	}
	
}
