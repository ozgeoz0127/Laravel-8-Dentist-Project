<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\PageRepository;

class GalleryController extends Controller
{
	public function show()
	{
		$s = PageRepository::settings();
		return view('gallery',$s);
	}
}
