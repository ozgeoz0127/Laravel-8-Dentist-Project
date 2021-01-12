<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Models\Randevu;
class AppointmentController extends Controller
{
	public function show(Request $post)
	{
		$post = $post->post();
		
		// kullanıcı email kayıtlımı ? 
		// kayıtlı değilse kayıt açıp IDsini alacaz
		// kayıtlı ise  IDsini alacağız
		$user = \DB::table('users')->where('email', $post["email"])->get()->toArray();
		if (count($user) == 0) {
			$user = AuthController::adduser($post);
		}else {
			$user = $user[0]->id; 
		}
		
		//rezervasyon oluşturacağız
		
		$t = new Randevu;
		$t->user_id 	= $user;
		$t->tedavi_id 	= $post["cure"];
		$t->date 		= date("Y-m-d",strtotime($post["date"]));
		$t->time 		= ($post["hour"].":".$post["minute"]);
		$t->hekim_id	= $post["doctor"];
		$t->ip			= \Request::ip();
		$t->note		= "";
		$t->status		= 0;
		
		$t->save();		
		return $t->id;
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
		return $t->id;
		
	}
	
	
}
