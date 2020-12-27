<?php

namespace App\Http\Middleware;


use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{

	public function handle(Request $request, Closure $next)
	{
		if (is_null(Auth::user()) || Auth::user()->role != 'admin') {
			return redirect(route('admin.login'));
		}

		return $next($request);
	}
}

