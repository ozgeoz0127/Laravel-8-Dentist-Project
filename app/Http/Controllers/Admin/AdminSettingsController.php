<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\PageRepository;

class AdminSettingsController extends Controller
{
    public function show(Request $request){
    	$s = PageRepository::settings();
		return view('admin.settings',$s);
    }
}
