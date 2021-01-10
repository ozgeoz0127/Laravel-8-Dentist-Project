<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\SystemController;

class AboutController extends Controller
{
	public function show()
	{
		$s = SystemController::settings();
		return view('about',$s);
	}

}
