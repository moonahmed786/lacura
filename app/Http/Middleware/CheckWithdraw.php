<?php

namespace App\Http\Middleware;

use Closure;

class CheckWithdraw
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

        $user = Auth()->user();
        if( !empty($user->bank_account_number ) && !empty( $user->bank_name)&& !empty($user->bank_IBN_number ) && !empty( $user->account_name) && !empty( $user->account_type) && !empty( $user->branch_number) && !empty( $user->btc_address))
        {
            return $next($request);


        }else{
            return redirect()->route('user.withdraw.auth.settings');

        }
    }
}
