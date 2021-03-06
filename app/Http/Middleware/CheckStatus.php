<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (Auth::check()) {
            if (Auth()->user()->status == '1' && Auth()->user()->emailv == '1' && Auth()->user()->smsv == '1' && Auth()->user()->tfver == '1') {
                return $next($request);
            } else {
                return redirect()->route('authorization');
            }
        }
    }
}
