<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckDeletedUser
{
    public function handle(Request $request, Closure $next)
    {

        if (Auth::check()) {

            if (Auth::user()->trashed()) {

                return redirect()->route('user.check.account');
            }
            
        }

        return $next($request);
    }
}
