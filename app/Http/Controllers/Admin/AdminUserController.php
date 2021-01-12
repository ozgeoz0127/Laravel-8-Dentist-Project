<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\SystemController;
use App\Models\User;

class AdminUserController extends Controller
{
    public function show(){
		$list = User::all();
		return  view('admin/user',["users" => $list]);
		
    }
    
}
