<?php

namespace App\Http\Controllers;
use App\Repositories\PageRepository;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
	public function show(Request $request,$url)
	{
		$s = PageRepository::settings();
		$s["settings"]["subpagetitle"]	= "Üye İşlemleri";
		return view('profile',$s);
    }
}
