<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class AuthController extends Controller
{
	public function login (LoginRequest $request)
	{
		$credentials = $request->only('email', 'password');
		
		return response()->json([
			"auth"		=> Auth::attempt($credentials),
			"redirect"	=> "refresh"
		]);
		
	}
	
	public function logout(Request $request)
	{
		Auth::logout();
		return redirect('/home');
	}
}
