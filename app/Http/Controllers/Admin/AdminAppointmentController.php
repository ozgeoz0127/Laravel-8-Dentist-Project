<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\SystemController;
use App\Models\Randevu;

class AdminAppointmentController extends Controller
{
	public function show(Request $request)
	{
		$s = SystemController::settings();
		$s["appointment"] = Randevu::all();
		return view("admin.appointment",$s) ;
	}

}