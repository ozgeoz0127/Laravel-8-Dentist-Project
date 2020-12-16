<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show (Request $post){
		$post = $post->post();
		dd($post);    	
    }
}
