<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\PageRepository;

class AdminHomeController extends Controller
{
    public function show(){
		$s = PageRepository::settings();
		return  view('admin/dashboard',$s);
    }
}
