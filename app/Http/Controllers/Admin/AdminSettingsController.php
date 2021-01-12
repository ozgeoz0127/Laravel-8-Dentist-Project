<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\SystemController;
use App\Models\Setting;

class AdminSettingsController extends Controller
{
    public function show(Request $request){
    	
		$s = SystemController::settings();
		return view('admin.settings',$s);
    }
    
	public function save(Request $request)
	{

		$new =Setting::find(1);
		$new->title 		= $request->input("title");
		$new->keywords 		= $request->input("keywords");
		$new->description 	= $request->input("description");
		$new->company 		= $request->input("company");
		$new->address 		= $request->input("address");
		$new->phone 		= $request->input("phone");
		$new->fax 			= $request->input("fax");
		$new->email 		= $request->input("email");
		$new->smtpserver 	= $request->input("smtpserver");
		$new->smtpemail 	= $request->input("smtpemail");
		$new->smtppassword 	= $request->input("smtppassword");
		$new->smtpport 		= $request->input("smtpport");
		$new->facebook 		= $request->input("facebook");
		$new->instagram 	= $request->input("instagram");
		$new->twitter 		= $request->input("twitter");
		$new->aboutus 		= $request->input("aboutus");
		$new->references 	= $request->input("references");
		$new->contact 		= "";
		$new->status 		= 1;
		$new->save();

		return back()->with('info','Bilgiler güncellendi.');

    	
    }
}

