<?php

namespace App\Http\Controllers;
use App\Repositories\PageRepository;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show(){
		$s = PageRepository::settings();
		return view('contact',$s);
    }
}
