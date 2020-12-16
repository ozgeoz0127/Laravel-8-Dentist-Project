<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

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
			'date' => $post["date"],
			'time' => $post["hour"],
			'hekim_id' => $post["doctor"],
			'ip' => \Request::ip(),
			'note' => '',
			'status' => '0',
			"created_at"	=> date("Y-m-d h:i:s"),
			"updated_at"	=> date("Y-m-d h:i:s")
		]);
		return \DB::getPdo()->lastInsertId();
		
	}
	
	public function newuser($p){
		
		\DB::table('user')->insert([
			'name' => $p["name"],
			'surname' => $p["surname"],
			'email' => $p["email"],
			'password' => md5('012701'),
			'role' => 'user',
			"created_at"	=> date("Y-m-d h:i:s"),
			"updated_at"	=> date("Y-m-d h:i:s")
		]);
		
		return \DB::getPdo()->lastInsertId();
		
	}
	
}
