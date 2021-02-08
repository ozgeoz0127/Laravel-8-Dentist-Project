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
    public function status($id)
    {
        $new = Randevu::find($id);
        $new->status = 1;
        $new->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        Randevu::find($id)->delete();
        return redirect()->back();
    }

}
