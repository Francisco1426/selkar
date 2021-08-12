<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ProduccionLogistica
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
        if(auth()->user()->rol=="Admin" || ( auth()->user()->rol=="Produccion" || auth()->user()->rol=="Logistica" )){
            return $next($request);
        }
        else{
            abort(403);
        }
    }
}
