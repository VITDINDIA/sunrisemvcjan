<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Authtype
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
        if(Auth::user()->utype == "Admin")
        {
            return redirect()->route('admin_home');
        }
        
        return $next($request);
    }
}
