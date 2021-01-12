<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\SystemController;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;


class AdminGallerysController extends Controller
{
	public function show(Request $request)
	{

		return  view('admin/gallery',["cures" => SystemController::getcure(),"gallery" => Image::all()]);
	}
	
	public function save(Request $request)
	{
        $im =new Image;
        $im->tedavi_id = $request->input("tedavi_id");
        $im->title     = $request->input("title");
        $im->image     = Storage::disk('public')->putFile('images', $request->file("image"));
		$im->save();
        return redirect()->back();
	}
	
	public function delete($id)
	{
        Image::find($id)->delete();
		return redirect()->back();
	}
	
}
