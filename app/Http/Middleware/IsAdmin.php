<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
        if(auth()->user()) {
            if (auth()->user()->role_id == 'admin') {
                return $next($request);
            }
        }
        return redirect('login')->with('error', 'You have no proper authentication to access the area!');

    }
}
