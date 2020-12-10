<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AboutController extends Controller
{
	public function show()
	{
		$s = new SettingsController;
		return view('about',$s->settings());
	}

}
