<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;


class LoginController extends Controller
{
	public function login (Request $post)
	{

		$auth = false;
		$info = [
			"email"		=>	$post->email,
			"password"	=>	md5($post->password),
		];


		if (Auth::attempt($info)) {
			$auth = true;
		} 
		
		return response()->json([
			"auth"		=> $auth,
			"redirect"	=> "home"
		]);
		
	}
}
