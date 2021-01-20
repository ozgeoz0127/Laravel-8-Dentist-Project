<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\SystemController;

class AdminHomeController extends Controller
{
    public function show(){
		$s = SystemController::settings();
		$s["usercount"]		= SystemController::usercount();
		$s["randevucount"]	= SystemController::randevucount();
		$s["reviewcount"]	= SystemController::reviewcount();
		$s["messagecount"]	= SystemController::messagecount();
		$s["ssscount"]		= SystemController::faqcount();
		$s["tedavicount"]	= SystemController::tedavicount();
		return  view('admin/dashboard',$s);
    }
}
