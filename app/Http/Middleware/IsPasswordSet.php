<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsPasswordSet
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
        $user = Auth::user();
        if ($user->password !=1) {
            return $next($request);
        } else {
            if (session()->get('lang') == 'ja') {
                $msg = 'システムにアクセスするには、すべての必須フィールドに入力してください。';
            }
            else{
                $msg = 'Preencha todos os campos obrigatórios para acessar o sistema.';

            }
            return redirect()->route('user.password.reset.auth',$user->email)->with('message',$msg);

        }
    }
}
