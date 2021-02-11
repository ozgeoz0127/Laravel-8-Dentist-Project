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
    public function delete($id){
        User::find($id)->delete();
        return redirect()->back();
    }
    public function status($id){
        $user = User::find($id);
        $user->status = 1;
        $user->save();
        return redirect()->back();
    }

}
