<?php

namespace App\Http\Controllers;
use App\Http\Controllers\SystemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
	public function show(Request $request,$url)
	{
		//login kontrol
		if (!Auth::check()) {
			return redirect('/home');	
		}
		
	
		$s = SystemController::settings();
		
		if ($url == "appointment") {
			$s["appointment"]	= $this->appointmentlist();
		}

		$s["settings"]["subpagetitle"]	= "Üye İşlemleri";

		return view('profile',$s);
    }
    
    
	public function appointmentlist(){
		
		$user = Auth::user()->id;
		
		$appointment = \DB::table('randevus')->where('user_id', $user)->get()->toArray();
		return $appointment;
		
	}
    
}
