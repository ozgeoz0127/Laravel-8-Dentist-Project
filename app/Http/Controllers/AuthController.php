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
        $credentials["status"] = 1;
		$auth = Auth::attempt($credentials);

		if ($request->ajax()) {
			return response()->json([
				"auth"		=> $auth,
				"role"		=> (is_null(Auth::user()) ? "null" : Auth::user()->role),
				"redirect"	=> "refresh"
			]);
		}else {
		    if($auth) {
                return redirect()->route('admin_home');
            }
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
		$new->phone 	= $user['phone'];
		$new->address 	= $user['address'];
		$new->role 		= "user";
		$new->password 	= Hash::make($user["password"]);
		$new->status 	= 0;
		$new->save();

		return $new->id;
	}

	public function register(Request $post)
	{
		// email kayıtlımı kontrol
        $user = new \App\Models\User();
		$user = $user->where('email', $post["email"])->get();

		if ($user->count() == 0) {
			// kullanıcıyı kaydediyoruz
			$user = self::adduser($post);

			return response()->json([
				"auth"		=> false,
				"redirect"	=> "refresh",
                "error"     => "Üyeliğiniz onaylandıktan sonra giriş yapabilirsiniz"
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
