<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\PageRepository;

class AboutController extends Controller
{
	public function show()
	{
		$s = PageRepository::settings();
		return view('about',$s);
	}

}
