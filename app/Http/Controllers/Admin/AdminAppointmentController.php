<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\SystemController;

class AdminAppointmentController extends Controller
{
    public function show(Request $request){
		$s = SystemController::settings();
		$s["appointment"] = $this->Appointmentlist();
		return view("admin.appointment",$s) ;
    }
    
	public function Appointmentlist()
	{
		$sql = "select a.*,concat(b.name,' ',b.surname) as username from randevu as a, user as b WHERE a.user_id=b.id order by a.id desc";
		$list = \DB::select($sql);
		return $list;
	}
}
