<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SystemController;
use Illuminate\Http\Request;

class AdminCommentController extends Controller
{
	public function show(Request $request)
	{
		return  view('admin/comment',["settings" => SystemController::settings()]);    	    	
    }
}
