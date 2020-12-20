<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\PageRepository;

class AdminUserController extends Controller
{
    public function show(){
		$list = $this->Userlist();
		return  view('admin/user',["users" => $list]);
		
    }
    
    public function Userlist(){
		$list = \DB::table('user')->orderBy('id', 'DESC')->get()->toArray();
		return $list;
    	
    }
    
}
