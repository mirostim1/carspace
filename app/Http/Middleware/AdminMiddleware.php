<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if(Auth::check()) {
            if(Auth::user()->isAdmin()) {
                return $next($request);
            }
        }

        return redirect('/');
    }
}
