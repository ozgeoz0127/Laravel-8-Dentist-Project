<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
    	
		return view('home',["settings" => ["email" => "tewt","phone" => "+90 322 3259988"] ]);
    }
    
    public function getsettings(){
		$arr["email"]	= "test@test.com";
    }
    
}
