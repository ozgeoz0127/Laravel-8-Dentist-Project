<?php

namespace App\Http\Controllers;
use App\Repositories\PageRepository;
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
		
	
		$s = PageRepository::settings();
		
		if ($url == "appointment") {
			$s["appointment"]	= $this->appointmentlist();
		}

		$s["settings"]["subpagetitle"]	= "Üye İşlemleri";

		return view('profile',$s);
    }
    
    
	public function appointmentlist(){
		
		$user = Auth::user()->id;
		
		$appointment = \DB::table('randevu')->where('user_id', $user)->get()->toArray();
		return $appointment;
		
	}
    
}
