<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class IsPasswordSetContoller extends Controller
{
    public function showResetFormMid(Request $request ,$email )
    {
        $data['page_title'] = "Reset Password";
        $pt ="Reset Password";

        return view('auth.passwords.reset_midd',compact('email'));


    }
    public function passwordSet(Request $request)
    {

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
        ]);

        $user= User::where('email',auth()->user()->email)->first();

        if ($request->password == $request->password_confirmation) {
            $user->password = bcrypt($request->password);
            $user->save();

            if (session()->get('lang') == 'ja') {
                $msg = 'パスワードが正常に設定されました';
            }
            else{
                $msg = 'Senha definida com sucesso';

            }
//            send_sms($user->mobile, $sms);

            return redirect()->route('root')->with('message', $msg);
        } else {
            if (session()->get('lang') == 'ja') {
                $error = 'パスワードが一致しません';
            }
            else{
                $error = 'Senha não combinada';

            }
            return back()->with('alert', $error);
        }

    }

}
