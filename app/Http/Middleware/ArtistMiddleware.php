<?php

namespace App\Http\Middleware;

use Closure;

class ArtistMiddleware
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
        if($request->user()->role < 2)
        {
            return redirect('/denied');
        }


        return $next($request);
    }
}
