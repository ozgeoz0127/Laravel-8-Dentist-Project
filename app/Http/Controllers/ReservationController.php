<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ReservationController extends Controller
{
	public function show(Request $post)
	{
		$post = $post->post();
		
		// kullanıcı email kayıtlımı ? 
		// kayıtlı değilse kayıt açıp IDsini alacaz
		// kayıtlı ise  IDsini alacaz
		$user = \DB::table('user')->where('email', $post["email"])->get()->toArray();
		if (count($user) == 0) {
			$user = $this->newuser($post);
		}else {
			$user = $user[0]->id; 
		}
		
		//rezervasyon oluşturacağız
		
		\DB::table('randevu')->insert([
			'user_id' => $user,
			'tedavi_id' => $post["cure"],
			'date' => date("Y-m-d",strtotime($post["date"])),
			'time' => ($post["hour"].":".$post["minute"]),
			'hekim_id' => $post["doctor"],
			'ip' => \Request::ip(),
			'note' => '',
			'status' => '0',
			"created_at"	=> date("Y-m-d h:i:s"),
			"updated_at"	=> date("Y-m-d h:i:s")
		]);
		return \DB::getPdo()->lastInsertId();
		
	}
	
	public function newuser($user)
	{
		
	
		$new = new \App\Models\User();
		$new->name 		= $user['name'];
		$new->surname 	= $user['surname'];
		$new->email 	= $user['email'];
		$new->role 		= "user";
		$new->password 	= Hash::make("012701");
		$new->save();
		
		return $new->id;


		
	}
	
}
