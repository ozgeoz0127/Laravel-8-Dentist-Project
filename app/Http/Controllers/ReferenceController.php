<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferenceController extends Controller
{
	public function show()
	{

		$s = SystemController::settings();

		return view('reference',$s);
	}

}
