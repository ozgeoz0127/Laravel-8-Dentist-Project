<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PageRepository;

class FaqController extends Controller
{
	public function show()
	{
		$s = PageRepository::settings();
		return view('faq',$s);
	}
}
