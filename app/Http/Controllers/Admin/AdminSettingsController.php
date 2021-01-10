<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\SystemController;


class AdminSettingsController extends Controller
{
	private $settings = [
		"title"			=> "title",
		"keywords"		=> "keywords",
		"description"	=> "desc",
		"company"		=> "comp",
		"address"		=> "add",
		"phone"			=> "ph",
		"fax"			=> "fax",
		"email"			=> "email",
		"smtpserver"	=> "server",
		"smtpemail"		=> "email",
		"smtppassword"	=> "pass",
		"smtpport"		=> "port",
		"facebook"		=> "port",
		"instagram"		=> "port",
		"twitter"		=> "port",
		"aboutus"		=> "portport",
		"contact"		=> "portport",
		"references"	=> "portport",
		"status"		=> 1,

	]; 
	
    public function show(Request $request){
    	
		$s = SystemController::settings();
		return view('admin.settings',$s);
    }
    
	public function save(Request $request)
	{
		$post = $request->post();

		/*$new = new \App\Models\Setting();
		$new->title 		= $post['title'];
		$new->keywords 		= $post['keywords'];
		$new->description 	= $post['description'];
		$new->company 		= $post['company'];
		$new->address 		= $post['address'];
		$new->phone 		= $post['phone'];
		$new->fax 			= $post['fax'];
		$new->email 		= $post['email'];
		$new->smtpserver 	= $post['smtpserver'];
		$new->smtpemail 	= $post['smtpemail'];
		$new->smtppassword 	= $post['smtppassword'];
		$new->smtpport 		= $post['smtpport'];
		$new->facebook 		= $post['facebook'];
		$new->instagram 	= $post['instagram'];
		$new->twitter 		= $post['twitter'];
		$new->aboutus 		= $post['aboutus'];
		$new->contact 		= "";
		$new->references 	= $post['references'];
		$new->status 		= 1;
		$new->whereId(1)->update();*/
		unset($post["_token"]);
		unset($post["files"]);
		\DB::table('settings')->update($post);
		return back()->with('info','Bilgiler güncellendi.');
    	
    }
}

