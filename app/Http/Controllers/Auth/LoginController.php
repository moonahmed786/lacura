<?php

namespace App\Http\Controllers\Auth;

use App\GeneralSettings;
use App\Http\Controllers\Controller;
use App\User;
use App\WithdrawMethod;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use App\UserLogin;
use Illuminate\Support\Carbon;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */



    public function showLoginForm()
    {
        $pt = __("auth_pages.Login");
        $withdraw = WithdrawMethod::whereStatus(1)->get();
        return view('auth.login_n', compact('pt', 'withdraw'));
    }


    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */




    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {


        $this->validateLogin($request);


        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }
    public function loginAjax(Request $request)
    {


        $this->validateLogin($request);


        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    public function username()
    {
        return 'email';
    }

    public function logout(Request $request)
    {
        $user = User::findOrFail(Auth::id());

        if (Auth::user()->tauth == 1) {
            $user['tfver'] = 0;
        } else {
            $user['tfver'] = 1;
        }
        $user->save();


        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/login');
    }

    public function redirectToProvider($provider)
    {
        $gnl = GeneralSettings::first();
        if ($provider == 'facebook') {

            Config::set('services.' . $provider, [
                'client_id' => $gnl->fb_client_id,
                'client_secret' => $gnl->fb_client_secret,
                'redirect' => url('/') . '/login/facebook/callback',
            ]);

            return Socialite::driver('facebook')->redirect();
        } elseif ($provider == 'google') {

            Config::set('services.' . $provider, [
                'client_id' => $gnl->google_client_id,
                'client_secret' => $gnl->google_client_secret,
                'redirect' => url('/') . '/login/google/callback',
            ]);
            return Socialite::driver('google')->redirect();
        } else {
            return back()->with('alert', 'Something Wrong');
        }
    }


    public function handleProviderCallback($provider)
    {

        $gnl = GeneralSettings::first();

        if ($provider == 'facebook') {

            Config::set('services.' . $provider, [
                'client_id' => $gnl->fb_client_id,
                'client_secret' => $gnl->fb_client_secret,
                'redirect' => url('/') . '/login/facebook/callback',
            ]);
            $user = Socialite::driver('facebook')->stateless()->user();
        } elseif ($provider == 'google') {

            Config::set('services.' . $provider, [
                'client_id' => $gnl->google_client_id,
                'client_secret' => $gnl->google_client_secret,
                'redirect' => url('/') . '/login/google/callback',
            ]);
            $user = Socialite::driver('google')->stateless()->user();
        }


        $exist = User::where('email', $user->email)->first();


        if ($exist) {

            if ($provider == 'facebook') {
                if (!($exist->fb_id)) {
                    $exist->fb_id = $user->id;
                    $exist->avatar = $user->avatar;
                    $exist->save();
                }
            } elseif ($provider == 'google') {
                if (!($exist->google_id)) {
                    $exist->google_id = $user->id;
                    $exist->avatar = $user->avatar;
                    $exist->save();
                }
            }
            Auth::login($exist);
            self::saveLogs($exist);

            return redirect()->route('home');
        } else {
            $new = User::create([
                'name' => $user->name,
                'email' => isset($user->email) ? $user->email : $user->id . '@' . $provider,
                'password' => Hash::make($provider),
                'username' => isset($user->email) ? explode('@', $user->email)[0] : $user->id,
                'provider' => $provider,
                'provider_id' => $user->id,
                'status' => 1,
                'balance' => 0,
                'tauth' => 0,
                'tfver' => 1,
                'emailv' =>  1,
                'smsv' =>  1,
                'email_verified_at'=>Carbon::now(),
            ]);
            Auth::login($new);
            self::saveLogs($new);
            return redirect()->route('home');
        }
    }

    public function authenticated(Request $request, $user)
    {
        if ($user->status == 0) {
            $this->guard()->logout();
            $notification =  array('message' => 'Sorry Your Account is Block Now.!', 'alert-type' => 'warning');
            return redirect('/login')->with($notification);
        }

         $ip = NULL;
         $deep_detect = TRUE;

         if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
             $ip = $_SERVER["REMOTE_ADDR"];
             if ($deep_detect) {
                 if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                     $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                 if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                     $ip = $_SERVER['HTTP_CLIENT_IP'];
             }
         }
         $xml = @simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".$ip);

         $country =  @$xml->geoplugin_countryName;
         $city = @$xml->geoplugin_city;
         $area = @$xml->geoplugin_areaCode;
         $code = @$xml->geoplugin_countryCode;
         $long = @$xml->geoplugin_longitude;
         $lat = @$xml->geoplugin_latitude;


         $user_agent     =   $_SERVER['HTTP_USER_AGENT'];
         $os_platform    =   "Unknown OS Platform";
         $os_array       =   array(
             '/windows nt 10/i'     =>  'Windows 10',
             '/windows nt 6.3/i'     =>  'Windows 8.1',
             '/windows nt 6.2/i'     =>  'Windows 8',
             '/windows nt 6.1/i'     =>  'Windows 7',
             '/windows nt 6.0/i'     =>  'Windows Vista',
             '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
             '/windows nt 5.1/i'     =>  'Windows XP',
             '/windows xp/i'         =>  'Windows XP',
             '/windows nt 5.0/i'     =>  'Windows 2000',
             '/windows me/i'         =>  'Windows ME',
             '/win98/i'              =>  'Windows 98',
             '/win95/i'              =>  'Windows 95',
             '/win16/i'              =>  'Windows 3.11',
             '/macintosh|mac os x/i' =>  'Mac OS X',
             '/mac_powerpc/i'        =>  'Mac OS 9',
             '/linux/i'              =>  'Linux',
             '/ubuntu/i'             =>  'Ubuntu',
             '/iphone/i'             =>  'iPhone',
             '/ipod/i'               =>  'iPod',
             '/ipad/i'               =>  'iPad',
             '/android/i'            =>  'Android',
             '/blackberry/i'         =>  'BlackBerry',
             '/webos/i'              =>  'Mobile'
         );
         foreach ($os_array as $regex => $value) {
             if (preg_match($regex, $user_agent)) {
                 $os_platform    =   $value;
             }
         }
         $browser        =   "Unknown Browser";
         $browser_array  =   array(
             '/msie/i'       =>  'Internet Explorer',
             '/firefox/i'    =>  'Firefox',
             '/safari/i'     =>  'Safari',
             '/chrome/i'     =>  'Chrome',
             '/edge/i'       =>  'Edge',
             '/opera/i'      =>  'Opera',
             '/netscape/i'   =>  'Netscape',
             '/maxthon/i'    =>  'Maxthon',
             '/konqueror/i'  =>  'Konqueror',
             '/mobile/i'     =>  'Handheld Browser'
         );
         foreach ($browser_array as $regex => $value) {
             if (preg_match($regex, $user_agent)) {
                 $browser    =   $value;
             }
         }
        $user->login_time = Carbon::now();
        $user->save();
        $ul['user_id'] = $user->id;
        $ul['user_ip'] =  request()->ip();
         $ul['long'] =  $long;
         $ul['lat'] =  $lat;
         $ul['location'] = $city . (" - $area - ") . $country . (" - $code ");
         $ul['details'] = $browser . ' on ' . $os_platform;
        UserLogin::create($ul);
        if ($request->session()->has('reservation')) {
            return redirect()->route('schedule.store.resubmit');
        }
    }
    public function saveLogs( $user)
    {
        if ($user->status == 0) {
            $this->guard()->logout();
            $notification =  array('message' => 'Sorry Your Account is Block Now.!', 'alert-type' => 'warning');
            return redirect('/login')->with($notification);
        }

         $ip = NULL;
         $deep_detect = TRUE;

         if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
             $ip = $_SERVER["REMOTE_ADDR"];
             if ($deep_detect) {
                 if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                     $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                 if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                     $ip = $_SERVER['HTTP_CLIENT_IP'];
             }
         }
         $xml = @simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".$ip);

         $country =  @$xml->geoplugin_countryName;
         $city = @$xml->geoplugin_city;
         $area = @$xml->geoplugin_areaCode;
         $code = @$xml->geoplugin_countryCode;
         $long = @$xml->geoplugin_longitude;
         $lat = @$xml->geoplugin_latitude;


         $user_agent     =   $_SERVER['HTTP_USER_AGENT'];
         $os_platform    =   "Unknown OS Platform";
         $os_array       =   array(
             '/windows nt 10/i'     =>  'Windows 10',
             '/windows nt 6.3/i'     =>  'Windows 8.1',
             '/windows nt 6.2/i'     =>  'Windows 8',
             '/windows nt 6.1/i'     =>  'Windows 7',
             '/windows nt 6.0/i'     =>  'Windows Vista',
             '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
             '/windows nt 5.1/i'     =>  'Windows XP',
             '/windows xp/i'         =>  'Windows XP',
             '/windows nt 5.0/i'     =>  'Windows 2000',
             '/windows me/i'         =>  'Windows ME',
             '/win98/i'              =>  'Windows 98',
             '/win95/i'              =>  'Windows 95',
             '/win16/i'              =>  'Windows 3.11',
             '/macintosh|mac os x/i' =>  'Mac OS X',
             '/mac_powerpc/i'        =>  'Mac OS 9',
             '/linux/i'              =>  'Linux',
             '/ubuntu/i'             =>  'Ubuntu',
             '/iphone/i'             =>  'iPhone',
             '/ipod/i'               =>  'iPod',
             '/ipad/i'               =>  'iPad',
             '/android/i'            =>  'Android',
             '/blackberry/i'         =>  'BlackBerry',
             '/webos/i'              =>  'Mobile'
         );
         foreach ($os_array as $regex => $value) {
             if (preg_match($regex, $user_agent)) {
                 $os_platform    =   $value;
             }
         }
         $browser        =   "Unknown Browser";
         $browser_array  =   array(
             '/msie/i'       =>  'Internet Explorer',
             '/firefox/i'    =>  'Firefox',
             '/safari/i'     =>  'Safari',
             '/chrome/i'     =>  'Chrome',
             '/edge/i'       =>  'Edge',
             '/opera/i'      =>  'Opera',
             '/netscape/i'   =>  'Netscape',
             '/maxthon/i'    =>  'Maxthon',
             '/konqueror/i'  =>  'Konqueror',
             '/mobile/i'     =>  'Handheld Browser'
         );
         foreach ($browser_array as $regex => $value) {
             if (preg_match($regex, $user_agent)) {
                 $browser    =   $value;
             }
         }
        $user->login_time = Carbon::now();
        $user->save();
        $ul['user_id'] = $user->id;
        $ul['user_ip'] =  request()->ip();
         $ul['long'] =  $long;
         $ul['lat'] =  $lat;
         $ul['location'] = $city . (" - $area - ") . $country . (" - $code ");
         $ul['details'] = $browser . ' on ' . $os_platform;
        UserLogin::create($ul);

    }
}
