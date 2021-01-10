<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\SystemController;

class AdminHomeController extends Controller
{
    public function show(){
		$s = SystemController::settings();
		return  view('admin/dashboard',$s);
    }
}
