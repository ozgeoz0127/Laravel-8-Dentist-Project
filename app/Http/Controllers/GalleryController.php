<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\SystemController;

class GalleryController extends Controller
{
	public function show()
	{
		$s = SystemController::settings();
		return view('gallery',$s);
	}
}
