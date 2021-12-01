<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class admin
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
        if (\Auth::user() && \Auth::user()->role_id == 3 ) {
            return $next($request);
        }

        return back()->with('error', "Sorry brody, you don't have access");
    }
}
