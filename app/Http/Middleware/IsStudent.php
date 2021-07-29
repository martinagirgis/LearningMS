<?php

namespace App\Http\Middleware;

use Closure;

class IsStudent
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
            if (auth()->user()->role_id == 'user') {
                return $next($request);
            }
        }
        return redirect('home')->with('error', 'You have no proper authentication to access the area!');

    }
}
