<?php

namespace App\Http\Middleware;

use Closure;
use Log;
class Apicheck
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
        if($request->api!="abhi")
        {
           log::INFO('Request Failed from '.$_SERVER['REMOTE_ADDR']); 
           return redirect()->route('index'); 
        }
        return $next($request);
    }
}
