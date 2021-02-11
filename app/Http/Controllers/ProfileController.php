<?php

namespace App\Http\Controllers;
use App\Http\Controllers\SystemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Review;
use App\Models\Randevu;

class ProfileController extends Controller
{

	public function show(Request $request)
	{

		//login kontrol
		if (!Auth::check()) {
			$s = SystemController::settings();
			return view("profilelogin",$s);
		}

		$s = SystemController::settings();

		/*if ($url == "appointment") {
			$s["appointment"]	= $this->appointmentlist();
		}*/

		$s["settings"]["subpagetitle"]	= "Üye İşlemleri";

		return view('profile',$s);
    }

    public function userinfo(){
		$s = SystemController::settings();
		$s["detailpage"]	= view('profile/userinfo');
		return view('profile',$s);

    }

	public function review()
	{
		$s = SystemController::settings();
		$s["detailpage"]	= view('profile/review',["review" => Review::where("user_id",Auth::user()->id)->get()]);
		return view('profile',$s);

	}
	public function review_delete($id){
        Review::find($id)->delete();
        return redirect()->back();
    }



	public function userupdate(Request $request)
	{
		$new = User::find(Auth::user()->id);
		$new->name 		= $request->input('name');
		$new->surname 	= $request->input('surname');
		$new->email 	= $request->input('email');
		$new->password 	= Hash::make($request->input('password'));
		$new->save();
		return redirect()->route("logout");
	}


	public function appointment(){

		$s = SystemController::settings();
		$s["detailpage"]	= view('profile/appointment',["appointment" => Randevu::where("user_id",Auth::user()->id)->get()]);
		return view('profile',$s);

	}
    public function appointment_delete($id){
        Randevu::find($id)->delete();
        return redirect()->back();
    }

}
