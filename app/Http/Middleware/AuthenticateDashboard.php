<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class AuthenticateDashboard
{
    // Session timeout in seconds (2 hours)
    protected $sessionTimeout = 7200;

    public function handle(Request $request, Closure $next)
    {
        $currentTime = Carbon::now();

        // Check if the user is logged in
        if (session()->has('is_logged_in')) {
            $lastActivity = session('last_activity', $currentTime);

            // Check if session has expired
            if ($currentTime->diffInSeconds($lastActivity) > $this->sessionTimeout) {
                // Log session expiration
                Log::info('Session expired for user.', [
                    'user_id' => session('user_id'),
                    'time' => $currentTime
                ]);

                // Clear session data
                session()->forget('is_logged_in');
                session()->forget('last_activity');
                session()->forget('user_id');

                // Redirect to login
                return redirect('/login')->with('error', 'Session expired. Please log in again.');
            }

            // Update last activity timestamp
            session(['last_activity' => $currentTime]);

            // Log active session status
            Log::info('Session is active for user.', [
                'user_id' => session('user_id'),
                'time' => $currentTime
            ]);
        } else {
            // Log unauthenticated access attempt
            Log::warning('Unauthenticated access attempt.', [
                'ip_address' => $request->ip(),
                'time' => $currentTime
            ]);

            // Redirect to login if user is not logged in
            return redirect('/login')->with('error', 'You need to log in first.');
        }

        return $next($request);
    }
}
