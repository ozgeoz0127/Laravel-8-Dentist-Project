<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SystemController;

class FaqController extends Controller
{
	public function show()
	{
		$s = SystemController::settings();
		return view('faq',$s);
	}
}
