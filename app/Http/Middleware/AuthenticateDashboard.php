<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthenticateDashboard
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('is_logged_in')) {
            return redirect('/login')->with('error', 'You need to log in first.');
        }

        return $next($request);
    }
}
