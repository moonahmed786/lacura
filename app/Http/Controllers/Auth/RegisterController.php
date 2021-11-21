<?php

namespace App\Http\Controllers\Auth;

use App\GeneralSettings;
use App\Http\Controllers\Controller;
use App\User;
use App\WithdrawMethod;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    public function showRegistrationForm()
    {
        $pt = "Sign Up";
        $ref_users = User::where('status', 1)->pluck('reference_link');
//        if (isset($ref_users)) {
            $ref_user_random = $ref_users[mt_rand(0, sizeof($ref_users) - 1)];

////            dd($ref_user_random);
//        }else{
//            $ref_user_random = $ref_users[mt_rand(0, sizeof(10) - 1)];
//
//        }

        // $withdraw = WithdrawMethod::whereStatus(1)->get();
        // return view('auth.register', compact('pt', 'withdraw'));
//         return view('comming_soon', compact('pt'));
        return redirect()->action(
            'Auth\RegisterController@showRegistrationFormWithoutRef', [$ref_user_random, true]
        );
        //return redirect()->route('register/472078899');
        // return view('auth.register', compact('pt'));
    }

    public function showRegistrationFormRef($reference_link)
    {
        $ref_user = User::where('reference_link', $reference_link)->first();
        if (isset($ref_user)) {
            $pt = __("auth_pages.Sign Up");
//            $withdraw = WithdrawMethod::whereStatus(1)->get();
            // var_dump($ref_user->ref_id);exit;
            return view('auth.register_n', compact('pt', 'ref_user'));
        } else {
            return redirect()->route('register');
        }
    }

    public function showRegistrationFormWithoutRef($reference_link, $is_refer)
    {
        $not_refer_user = true;
        $ref_user = User::where('reference_link', $reference_link)->first();
        if (isset($ref_user)) {
            $pt = "Sign Up";
            $withdraw = WithdrawMethod::whereStatus(1)->get();
            // var_dump($ref_user->ref_id);exit;
            return view('auth.register_n', compact('pt', 'withdraw', 'ref_user','not_refer_user'));
        } else {
            return redirect()->route('register');
        }
    }


    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $data['id'] = $data['ref_id'];
        return Validator::make($data, [
            'name' => 'required|string|max:190',
            'nickname' => 'required|string|max:190|unique:users',
            'country' => 'required|string|max:190',
            'email' => 'required|string|email|max:190|unique:users',
            'mobile' => 'required|string|max:190|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'lang' => 'required|in:en,ja,pt-br',
            'id' => 'required|exists:users',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $this->validator($data);
        $gnl = GeneralSettings::first();

        if ($gnl->emailver == 1) {
            $e = 0;
        } else {
            $e = 1;
        }
        if ($gnl->smsver == 1) {
            $s = 0;
        } else {
            $s = 1;
        }

        return User::create([
            'name' => $data['name'],
            'nickname' => $data['nickname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'username' => $data['nickname'],
            'mobile' => $data['mobile'],
            'country' => $data['country'],
            'ref_id' => $data['ref_id'],
            'status' => 1,
            'balance' => '0',
            'emailv' => $e,
            'smsv' => $s,
            'reference_link' =>  $this->unique_reference_link(),
            'lang' => $data['lang'],
        ]);
    }

    protected function unique_reference_link()
    {
        $reference_link = mt_rand(100000, 10000000000);
        if (User::where('reference_link',$reference_link)->count() == 0) {
            return $reference_link;
        }
        $this->unique_reference_link();
    }
}
