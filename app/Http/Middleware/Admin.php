<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     * @throws AuthorizationException
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()){
            return redirect('/');
        }

        if(Auth::user()->is_admin){
        return $next($request);
    }elseif (Auth::user()->is_dealer_principal){
        return $next($request);
    }
        throw abort('404');
    }
}
