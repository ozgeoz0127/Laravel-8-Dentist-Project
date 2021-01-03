<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\PageRepository;

class AdminGallerysController extends Controller
{
	public function show(Request $request)
	{
		
		if (count($request->file()) > 0) {
			$img = $this->imageupload($request);	
		}
		return  view('admin/gallery',["cures" => PageRepository::getcure(),"gallery" => PageRepository::gallery()]);
	}
	
	public function imageupload($request)
	{
		$request->validate([
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		]);

		$imageName = time().'.'.$request->image->extension();

		$request->image->move(public_path('images/uploads'), $imageName);
		
		
		$post = $request->post();
		unset($post["_token"]);
		$post["image"] = $imageName;
		\DB::table('image')->insert($post);

	}
	
	public function delete($id)
	{
		\DB::table('image')->where('id', $id)->delete();
		return redirect()->back();
	}
	
}
