<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tedavi;

class AdminCuresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return view('admin/cures',["cures" => Tedavi::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return  view('admin/cures_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$new = new Tedavi;
		$new->title 		= $request->input('title');
		$new->keywords 		= $request->input('keywords');
		$new->image 		= $request->input('image');
		$new->description	= $request->input('description');
		$new->detail		= $request->input('detail');
		$new->status 		= $request->input('status');
		$new->url 			= $request->input('url');
		$new->save();
		return redirect()->route('admin_cure');
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
		return  view('admin/cures_edit',["cure" => Tedavi::find($id)]);
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
		
		$new = Tedavi::find($id);
		$new->title 		= $request->input('title');
		$new->keywords 		= $request->input('keywords');
		$new->image 		= $request->input('image');
		$new->description	= $request->input('description');
		$new->detail		= $request->input('detail');
		$new->status 		= $request->input('status');
		$new->url 			= $request->input('url');
		$new->save();
		return redirect()->route('admin_cure');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		Tedavi::find($id)->delete();
		return redirect()->back();
    }
}
