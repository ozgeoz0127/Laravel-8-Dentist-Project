<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PageRepository;

class PageController extends Controller
{
    public function show(Request  $request){
		$s = PageRepository::settings();
		return view('about',$s);
    }
}
