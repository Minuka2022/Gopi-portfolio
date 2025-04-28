<?php
// app/Http/Middleware/CustomAuth.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('logged_in')) {
            Session::put('intended_url', $request->url());

            return redirect()->route('login');
        }

        return $next($request);
    }
}
