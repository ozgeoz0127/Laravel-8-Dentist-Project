<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class AuthController extends Controller
{

	
	public function login (LoginRequest $request)
	{
		$credentials = $request->only('email', 'password');
		
		$auth = Auth::attempt($credentials);
		
		if ($request->ajax()) {
			return response()->json([
				"auth"		=> $auth,
				"role"		=> (is_null(Auth::user()) ? "null" : Auth::user()->role),
				"redirect"	=> "refresh"
			]);
		}
		return back();

		
	}
	
	public function logout(Request $request)
	{
		Auth::logout();
		return redirect('/home');
	}
	
	
	public static function adduser($user)
	{


		$new = new \App\Models\User();
		$new->name 		= $user['name'];
		$new->surname 	= $user['surname'];
		$new->email 	= $user['email'];
		$new->role 		= "user";
		$new->password 	= Hash::make((isset($user["password"]) ? $user["password"] : "012701"));
		$new->save();

		return $new->id;
	}
	
	public function register(Request $post)
	{
		// email kayıtlımı kontrol
		$user = \DB::table('user')->where('email', $post["email"])->get()->toArray();
		if (count($user) == 0) {
			// kullanıcıyı kaydediyoruz
			$user = self::adduser($post);
			
			// yeni kullanıcıyı login yapıyoruz
			$credentials = $post->only('email', 'password');

			return response()->json([
				"auth"		=> Auth::attempt($credentials),
				"redirect"	=> "refresh"
			]);
			
			
		} else {
			return response()->json([
				"auth"		=> false,
				"error"		=> "Aynı E-mail kayıtlıdır! kontrol ediniz",
				"redirect"	=> "refresh"
			]);
		}

	}
	
}
