<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
    	
		return view('home',$this->getsettings());
    }
    
    public function getsettings(){
		$arr 			= [];
		$arr["settings"]["email"]		= "test@test.com";
		$arr["settings"]["phone"]		= "+90 322 3259988";
		$arr["settings"]["twitter"]		= "+90 322 3259988";
		$arr["settings"]["facebook"]	= "+90 322 3259988";
		$arr["settings"]["instagram"]	= "+90 322 3259988";
		$arr["settings"]["linkedin"]	= "+90 322 3259988";
		$arr["settings"]["menu"]		= [
			["url" => "/","text" => "#"],
			["url" => "/about","text" => "Hakkımızda"],
			["url" => "/services","text" => "Servisler","sub"=> [["url" => "sub","text" => "Menu1"]] ],
			["url" => "/appointment","text" => "Randevu" ],
			["url" => "/contact","text" => "İletişim" ],

		];
		return $arr;
    }
    
}
