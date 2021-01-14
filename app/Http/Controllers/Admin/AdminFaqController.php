<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\SystemController;
use Illuminate\Support\Facades\Storage;
use App\Models\Faq;

class AdminFaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	
		return  view('admin/faq',["faq" => SystemController::faq("all")]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return  view('admin/faq_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$new = new Faq;
		$new->question 		= $request->input('question');
		$new->answer 		= $request->input('answer');
		$new->status 		= $request->input('status');
		$new->save();
		return redirect()->route('admin_faq');
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
    	
		return  view('admin/faq_edit',["faq" => Faq::find($id)]);
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
		$new = Faq::find($id);
		$new->question 		= $request->input('question');
		$new->answer 		= $request->input('answer');
		$new->status 		= $request->input('status');
		$new->save();
		return redirect()->route('admin_faq');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		Faq::find($id)->delete();
		return redirect()->back();
    }
}
