<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SystemController;

class HomeController extends Controller
{
    public function show(){
    	
		$s = SystemController::settings();
		return view('home',$s);
    }
    

    
}
