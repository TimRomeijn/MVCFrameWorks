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
    //Deny permission if the user doesn't have the artist/admin role
    public function handle($request, Closure $next)
    {
        if($request->user()->role < 2)
        {
            return redirect('/denied');
        }


        return $next($request);
    }
}
