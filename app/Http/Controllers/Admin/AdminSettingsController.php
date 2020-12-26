<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\PageRepository;

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
		$post = $request->post();
		
			if (count($post) > 0) {
				$this->save($post);
			}
    	
    	$s = PageRepository::settings();
		return view('admin.settings',$s);
    }
    
    public function save($post){
		$data = array_merge($this->settings,$post);
		unset($data["_token"]);
		\DB::table('setting')->update($data);
    	
    }
}

