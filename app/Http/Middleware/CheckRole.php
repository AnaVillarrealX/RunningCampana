<?php

namespace App\Http\Middleware;
use App\User;

use Closure;

class CheckRole
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
        if ($request->user()->role != 7) {
        return redirect()->route('login');
    }
        return $next($request);
    }
}
