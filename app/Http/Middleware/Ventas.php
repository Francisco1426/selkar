<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Ventas
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->rol=="Admin" || auth()->user()->rol=="Ventas"){
            return $next($request);
        }
        else{
            abort(403);
        }
    }
}
