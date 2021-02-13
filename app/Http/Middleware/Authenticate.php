<?php

namespace App\Http\Middleware;


use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{

    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('admin.login');
        }
    }

/*
	public function handle($request, Closure $next, ...$guards)
	{

		if (is_null(Auth::user()) || Auth::user()->role != 'admin') {
			return redirect(route('admin.login'));
		}

		return $next($request);
	}*/
}

