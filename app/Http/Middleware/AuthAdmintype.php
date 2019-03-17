<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AuthAdmintype
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
        if(Auth::user()->utype == "Author")
        {
            return redirect()->route('home');
        }
        return $next($request);
    }
}
