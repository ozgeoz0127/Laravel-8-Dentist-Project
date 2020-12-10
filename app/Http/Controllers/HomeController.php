<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
		$s = new SettingsController;
		return view('home',$s->settings());
    }
    

    
}
