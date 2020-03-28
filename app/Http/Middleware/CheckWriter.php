<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckWriter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        // If user is not logged in, go to login page
        if ($user === null) {
            return redirect('login');
        }

        // If user is logged in, but no writer 401
        if ($user->writer !== 1) {
            return response('You are not a writer, sorry', 401);
        }

        return $next($request);
    }
}
