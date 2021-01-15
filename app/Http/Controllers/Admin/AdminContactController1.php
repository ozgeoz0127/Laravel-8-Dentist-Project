<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\SystemController;

class AdminContactController extends Controller
{
	public function show(Request $request)
	{
		return  view('admin/contact',["settings" => SystemController::settings()]);
	}
}
