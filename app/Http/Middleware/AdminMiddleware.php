<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    //Deny permission if the user doesnt have the admin role
    public function handle($request, Closure $next)
    {
        if($request->user()->role < 3)
        {
            return redirect('/denied');
        }


        return $next($request);
    }
}
