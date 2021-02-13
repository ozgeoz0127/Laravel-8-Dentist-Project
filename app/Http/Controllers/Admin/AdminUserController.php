<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\SystemController;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Storage;


class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = User::all();
        return  view('admin/user',["users" => $list]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return  view('admin/user_edit',["user" => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = User::find($id);
        $data->name     = $request->input("name");
        $data->surname  = $request->input("surname");
        $data->email    = $request->input("email");
        $data->phone    = $request->input("phone");
        $data->address  = $request->input("address");
        $data->status   = $request->input("status");

        if($request->file("image") != null) {
            $data->profile_photo_path = Storage::disk('public')->putFile('profile_photos',$request->file("image"));
        }
        $data->save();
        return redirect(route('admin_user'));
    }

    public function user_roles($id)
    {
        $data = User::find($id);
        $datalist = Role::all()->sortBy("name");
        return view("admin.user_roles",["data" =>$data,"datalist" => $datalist]);
    }

    public function user_role_store(Request $request, User $user, $id){
        $user = User::find($id);
        $roleid = $request->input("roleid");
        $user->roles()->attach($roleid);
        return redirect()->back()->with("success","Role güncellendi.");
    }
    public function user_role_delete(Request $request, User $user, $userid,$roleid){
        $user = User::find($userid);
        $user->roles()->detach($roleid);
        return redirect()->back()->with("success","Role güncellendi.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }
}
