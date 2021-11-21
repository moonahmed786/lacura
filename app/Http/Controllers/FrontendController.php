<?php

namespace App\Http\Controllers;

use App\Advertise;
use App\AlbumItem;
use App\Blog;
use App\BlogComment;
use App\Deposit;
use App\Faq;
use App\Gateway;
use App\GeneralSettings;
use App\HowItWork;
use App\IpTrack;
use App\Language;
use App\Lib\GoogleAuthenticator;
use App\Link;
use App\Menu;
use App\MinBlogCategory;
use App\Miniblog;
use App\Page;
use App\Plan;
use App\Referral;
use App\Rules\BTC_Address;
use App\Schedule;
use App\ScheduleCity;
use App\Service;
use App\SignImage;
use App\Slider;
use App\Social;
use App\Subscriber;
use App\Team;
use App\Testimonial;
use App\User;
use App\UserQuestionnaire;
use App\Withdraw;
use App\WithdrawMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Image;

class FrontendController extends Controller
{
    public function frontIndex()
    {
        //       if(isset($_GET['temp']) != null){
        //           Session::put('template', $_GET['temp']);
        //       }else{
        //           Session::put('template', 1);
        //       }

        $general = GeneralSettings::first();
        $pt = __('Home');
        $service = Service::all();
        $howitwork = HowItWork::all();
        $test = Testimonial::all();
        $know = Blog::take(6)->get();
        $team = Team::all();
        $faq = Faq::all();
        $withdraw = WithdrawMethod::where('status', 1)->get();
        $plan = Plan::where('status', 1)->where('show', 1)->get();
        $method = Gateway::where('status', 1)->get();
        $level = Referral::all();
        $latest_deposit = Deposit::where('status', 1)->latest()->take(10)->get();
        $latest_withdaw = Withdraw::where('status', 1)->latest()->take(10)->get();

        if ($general->gallery_show_method == 'newest') {
            $album_items = AlbumItem::whereHas('album', function ($query) {
                $query->where('public', 1);
            })->orderBy('created_at', 'desc')->limit(config('constants.gallery.item'))->get();
        } else {
            $album_items = AlbumItem::whereHas('album', function ($query) {
                $query->where('public', 1);
            })->inRandomOrder()->limit(config('constants.gallery.item'))->get();
        }
        $new_users = User::where('status', 1)->where('emailv', 1)->orderByDesc('created_at')->limit(4)->get()->shuffle();
        $lang = session('lang');

        if ($general->slider_show_method == 'newest') {
            $slider_batch = Slider::where('temp', null)->where('lang', $lang)->where('batch_no', '!=', 0)->orderByDesc('batch_no')->first(['batch_no']);
            $sliders = Slider::where('batch_no', $slider_batch['batch_no'])->orderBy('created_at', 'desc')->limit($general->slider_number)->get();
        } else {
            $slider_batch = Slider::where('temp', null)->where('lang', $lang)->where('batch_no', '!=', 0)->inRandomOrder()->first(['batch_no']);
            $sliders = Slider::where('batch_no', $slider_batch['batch_no'])->inRandomOrder()->limit($general->slider_number)->get();
        }
        $social_btns = Social::all();

        //Mini Blog

        $allblogs = Miniblog::where('Status', 1)->latest()->take(3)->get();

        //Last Submitted approved Comment

        $homecomment = DB::table('home_comments')->where('status', 1)->where('lang', session('lang'))->orderBy('created_at', 'DESC')->take(3)->get();


        $page = Page::where('idx', 'index_page')->first();


        return view('front.index_n', compact(
            'pt',
            'service',
            'test',
            'know',
            'team',
            'withdraw',
            'faq',
            'plan',
            'method',
            'level',
            'howitwork',
            'latest_deposit',
            'latest_withdaw',
            'album_items',
            'new_users',
            'sliders',
            'social_btns',
            'allblogs',
            'homecomment', 'page'

        ));
    }

    public function blogIndex()
    {
        $pt = __('Knowledge-Base');
        $know = Blog::latest()->paginate(12);
        $know_rev = Blog::take(8)->get();
        return view('front.blog', compact('pt', 'know', 'know_rev'));
    }

    public function blogDetail($id)
    {
        $pt = __('Knowledge-Base Details');
        $know = Blog::findOrFail($id);
        $know_rev = Blog::take(8)->get();
        return view('front.blog_detail', compact('pt', 'know', 'know_rev'));
    }

    public function termsIndex()
    {

//        $know = Menu::findOrFail($id);
        $know = Menu::all();
        $pt = __('Terms.Terms & Condition');
        return view('front.privacy', compact('pt', 'know'));
    }

    public function contactIndex()
    {
        $pt = __('Contact Us');
        return view('front.contact', compact('pt'));
    }

    public function contactMailSend(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:191',
            'email' => 'required|max:191',
            'message' => 'required|max:191',
        ]);

        $gnl = GeneralSettings::first();

        if (session()->get('lang') == 'en') {
            send_email($gnl->email, $request->name, "Contact Us Mail", $request->message . __('And My Email').':' . $request->email);
        } else {
            $data['message'] = $request->message;
            $data['email'] = $request->email;
            send_email_lang($gnl->email, $request->name, $data, 'CMAIL', session()->get('lang'));
        }

//        $message = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//        $headers = 'From: ' . "webmaster@$_SERVER[HTTP_HOST] \r\n" .
//            'X-Mailer: PHP/' . phpversion();
//        @mail($gnl->email, 'HYIPKING TEST DATA', $message, $headers);
        return back()->with('message', __('Mail Send Successfully'));
    }

    public function forgotPass(Request $request)
    {

        $this->validate($request, [
            'email' => 'required',
        ]);
        $user = User::where('email', $request->email)->first();
        if ($user == null) {
            return back()->with('alert', __('auth_pages.Email Not Available'));
        } else {
            $to = $user->email;
            $name = $user->name;
            $subject = __("auth_pages.Reset Password");
            $code = str_random(30);
            $message = __('auth_pages.Use This Link to Reset Password: ') . url('/') . '/reset/' . $code;

            DB::table('password_resets')->insert(
                ['email' => $to, 'token' => $code, 'status' => 0, 'created_at' => date("Y-m-d h:i:s")]
            );

            if ($user->lang == 'en') {
                send_email($to, $name, $subject, $message);
            } else {
                $data['link'] = url('/') . '/reset/' . $code;
                send_email_lang($to, $name, $data, 'FPASS', $user->lang);
            }

            return back()->with('message', __('auth_pages.Password Reset Email Sent Successfully'));
        }
    }

    public function resetLink($code)
    {

        $reset = DB::table('password_resets')->where('token', $code)->orderBy('created_at', 'desc')->first();
        if ($reset->status == 1) {
            return redirect()->route('login')->with('alert', __('auth_pages.Invalid Reset Link'));
        } else {
            $pt = __("auth_pages.Reset Password");
            return view('auth.passwords.reset_n', compact('reset', 'pt'));
        }
    }

    public function passwordReset(Request $request)
    {

        $this->validate($request, [
            'email' => 'required',
            'token' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
        ]);

        $reset = DB::table('password_resets')->where('token', $request->token)->orderBy('created_at', 'desc')->first();
        $user = User::where('email', $reset->email)->first();
        if ($reset->status == 1) {
            return redirect()->route('login')->with('alert', __('auth_pages.Invalid Reset Link'));
        } else {
            if ($request->password == $request->password_confirmation) {
                $user->password = bcrypt($request->password);
                $user->save();

                DB::table('password_resets')->where('email', $user->email)->update(['status' => 1]);

                $msg = __('auth_pages.Password Changed Successfully');
                if ($user->lang == 'en') {
                    send_email($user->email, $user->username, __('auth_pages.Password Changed'), $msg);
                } else {
                    send_email_lang($user->email, $user->username, [], 'RPASS', $user->lang);
                }
                $sms = __('auth_pages.Password Changed Successfully');
                send_sms($user->mobile, $sms);

                return redirect()->route('login')->with('message', __('auth_pages.Password Changed'));
            } else {
                return back()->with('alert', __('Password Not Matched'));
            }
        }
    }



    public function authorization()
    {
        if (Auth::user()->status == '1' && Auth::user()->emailv == 1 && Auth::user()->smsv == 1 && Auth()->user()->tfver == '1') {
            return redirect('home');
        } else {
            $pt = __('auth_pages.Authorization');
            return view('front.authorization', compact('pt'));
        }
    }

    public function regWithdrawIndexSettings()
    {


        $pt = __('user_profile.Withdraw Accounts Information is Required');
        return view('user.re_withdraw_settings_profile_n', compact('pt'));


    }

    public function regDocindex()
    {
        $pt = __('Personal Document is Required to continue');
        return view('user.re_withdraw_settings_profile_n', compact('pt'));
    }


    public function withdrawSettingsUpdate(Request $request)
    {
        $user = auth()->user();

        $request->request->add(['personal_document_check' => ($user->personal_document) ? 1 : 0]);
        $request->request->add(['selfie_document_check' => ($user->selfie_document) ? 1 : 0]);


        $this->validate($request, [

            'bank_account_number' => 'required',
            'bank_name' => 'required',
            'bank_IBN_number' => 'required',
            'account_name' => 'required',
            'account_type' => 'required',
            'branch_number' => 'required',
            'btc_address' => ['required', new BTC_Address],

            'selfie_document' => 'required_if:selfie_document_check,0|mimes:jpeg,jpg,png',
            'personal_document' => 'required_if:personal_document_check,0|mimes:jpeg,jpg,png',
        ]);
        if ($request->hasFile('personal_document')) {
            try {

                $location = 'assets/images/user/withdraw_verify';
                if (!file_exists($location)) mkdir($location, 0755, true);
                $filename = uniqid() . time() . '.' . $request->personal_document->getClientOriginalExtension();
                Image::make($request->personal_document)->save($location . '/' . $filename);
                $user->personal_document = $filename;
                $user->save();
            } catch (\Exception $exp) {
                return back()->withErrors([__('Personal Document could not be uploaded')]);
            }
        }

        if ($request->hasFile('selfie_document')) {
            try {
                $location = 'assets/images/user/withdraw_verify';
                if (!file_exists($location)) mkdir($location, 0755, true);
                $filename = uniqid() . time() . '.' . $request->selfie_document->getClientOriginalExtension();
                Image::make($request->selfie_document)->save($location . '/' . $filename);
                $user->selfie_document = $filename;
                $user->save();
            } catch (\Exception $exp) {
                return back()->withErrors([__('Personal Document could not be uploaded')]);
            }
        }

        $input['payoneer_email'] = $request->payoneer_email;
        $input['payoneer_username'] = $request->payoneer_username;
        $input['stripe'] = $request->stripe;
        $input['stripe_email'] = $request->stripe_email;
        $input['bank_account_number'] = $request->bank_account_number;
        $input['bank_name'] = $request->bank_name;
        $input['bank_IBN_number'] = $request->bank_IBN_number;
        $input['account_name'] = $request->account_name;
        $input['account_type'] = $request->account_type;
        $input['branch_number'] = $request->branch_number;
        $input['btc_address'] = $request->btc_address;

        $user->update($input);
        return redirect()->route('home')->with('message',  __('Update Successfully'));
    }

    public function docSettingsUpdate(Request $request)
    {

        $user = Auth::user();
        $request->request->add(['withdraw_verify_document' => ($user->selfie_document && $user->selfie_document) ? 1 : 0]);
        $this->validate($request, [

            'selfie_document' => 'required_if:withdraw_verify_document,0|mimes:jpeg,jpg,png',
            'personal_document' => 'required_if:withdraw_verify_document,0|mimes:jpeg,jpg,png',
        ]);


        $input['payoneer_email'] = $request->payoneer_email;
        $input['payoneer_username'] = $request->payoneer_username;
        $input['stripe'] = $request->stripe;
        $input['stripe_email'] = $request->stripe_email;
        $input['bank_account_number'] = $request->bank_account_number;
        $input['bank_name'] = $request->bank_name;
        $input['bank_IBN_number'] = $request->bank_IBN_number;
        $input['account_name'] = $request->account_name;
        $input['account_type'] = $request->account_type;
        $input['branch_number'] = $request->branch_number;
        $input['btc_address'] = $request->btc_address;

        $user->update($input);
        return redirect()->route('home')->with('message',__('Update Successfully'));
    }


    public function sendemailver()
    {
        $user = User::find(Auth::id());
        $chktm = $user->vsent + 1000;
        if (false) {
            $delay = $chktm - time();
            return back()->with('alert', 'auth_pages.Please Try after ' . $delay . 'auth_pages.Seconds');
        } else {
            $code = substr(rand(), 0, 6);
            $message = __('auth_pages.Your referral ID is').': ' . $user->username . '<br>';
            $message .= __('auth_pages.Your Verification code is').': ' . $code;
            $user['vercode'] = $code;
            $user['vsent'] = time();
            $user->save();

            if ($user->lang == 'en') {
                send_email($user->email, $user->name, 'auth_pages.Verification Code', $message);
            } else {
                $data['user'] = $user->username;
                $data['code'] = $code;
                send_email_lang($user->email, $user->username, $data, 'EVER', $user->lang);
            }
            $sms = $message;
            send_sms($user['mobile'], $sms);
            return back()->with('success', __('auth_pages.The authentication code has been successfully sent, please check your email'));
        }
    }

    public function sendsmsver()
    {
        $user = User::find(Auth::id());
        $chktm = $user->vsent + 1000;
        if ($chktm > time()) {
            $delay = $chktm - time();
            return back()->with('alert', '' . $delay . __('auth_pages.Please wait a second.'));
        } else {
            $code = substr(rand(), 0, 6);
            $sms = __('Your Verification code is').': ' . $code;
            $user['vercode'] = $code;
            $user['vsent'] = time();
            $user->save();

            send_sms($user->mobile, $sms);
            return back()->with('success', __('auth_pages.SMS verification code sent successfully'));
        }
    }

    public function emailverify(Request $request)
    {

        $this->validate($request, [
            'code' => 'required'
        ]);
        $user = User::find(Auth::id());

        $code = $request->code;
        if ($user->vercode == $code) {
            $user['emailv'] = 1;
            $user['vercode'] = str_random(10);
            $user['vsent'] = 0;
            $user->save();

            if ($request->session()->has('reservation')) {
                return redirect()->route('schedule.store.resubmit');
            }
            return redirect('home')->with('success', __('auth_pages.Email confirmed.'));
        } else {
            return back()->with('alert', __('auth_pages.Confirmation code does not match'));
        }
    }

    public function smsverify(Request $request)
    {

        $this->validate($request, [
            'code' => 'required'
        ]);
        $user = User::find(Auth::id());

        $code = $request->code;
        if ($user->vercode == $code) {
            $user['smsv'] = 1;
            $user['vercode'] = str_random(10);
            $user['vsent'] = 0;
            $user->save();

            return redirect('home')->with('success', __('auth_pages.SMS Verified'));
        } else {
            return back()->with('alert',  __("auth_pages.Wrong Verification Code"));
        }
    }

    public function verify2fa(Request $request)
    {
        $user = User::find(Auth::id());

        $this->validate($request, [
            'code' => 'required',
        ]);

        $ga = new GoogleAuthenticator();
        $secret = $user->secretcode;
        $oneCode = $ga->getCode($secret);
        $userCode = $request->code;

        if ($oneCode == $userCode) {
            $user['tfver'] = 1;
            $user->save();
            return redirect('home');
        } else {

            return back()->with('alert', __("auth_pages.Wrong Verification Code"));
        }
    }

    public function storeSubs(Request $request)
    {
        if ($request->subscribe_email == '') {
            return response()->json(['success' => false, 'message' => __('auth_pages.Subscriber Field Is Required')]);
        }

        $subs = Subscriber::where('email', $request->subscribe_email)->count();

        if ($subs == 0) {
            $a = Subscriber::create([
                'email' => $request->subscribe_email
            ]);

            return response()->json(['success' => true, 'message' => __('auth_pages.Successfully Subscribed')]);
        } else {
            return response()->json(['success' => false, 'message' => __('auth_pages.Already Subscribed')]);
        }
    }

    public function changeLang($lang)
    {

        $language = Language::where('code', $lang)->first();
        if (!$language) $lang = 'ja';

        session()->put('lang', $lang);

        return redirect()->back();
    }

    public function purification_soulIndex()
    {
        $pt = __("Purification of Soul");
        $lang = session('lang');
        $slider_batch = Slider::where('temp', null)->where('lang', $lang)->where('batch_no', '!=', 0)->orderByDesc('batch_no')->first(['batch_no']);
        $sliders = Slider::where('batch_no', $slider_batch['batch_no'])->inRandomOrder()->limit(2)->get();
        $page = Page::where('idx', 'purification')->first();

        return view('front.purification-soul_n', compact('pt', 'sliders', 'page'));
    }

    public function influence_of_workIndex()
    {
        $pt = __("influence-of-work.The influence of work");
        $lang = session('lang');
        $slider_batch = Slider::where('temp', null)->where('lang', $lang)->where('batch_no', '!=', 0)->orderByDesc('batch_no')->first(['batch_no']);
        $sliders = Slider::where('batch_no', $slider_batch['batch_no'])->inRandomOrder()->limit(2)->get();
        $page = Page::where('idx', 'influence')->first();

        return view('front.influence-of-work_n', compact('pt', 'sliders', 'page'));
    }

    public function spiritual_purificationIndex()
    {
//        App::setLocale('en-us');
//        App::setLocale('pt-br');
//        App::setLocale('ja');
//        session()->put('lang', 'pt-br');
//        session()->put('lang', 'en-us');
//        session()->put('lang', 'ja');
        $pt = __("spiritual.Spiritual Purification");
        $lang = session('lang');
//        dd($lang);
        $slider_batch = Slider::where('temp', null)->where('lang', $lang)->where('batch_no', '!=', 0)->orderByDesc('batch_no')->first(['batch_no']);
        $sliders = Slider::where('batch_no', $slider_batch['batch_no'])->inRandomOrder()->limit(2)->get();
        $page = Page::where('idx', 'spiritual')->first();

        return view('front.spiritual-purification_n', compact('pt', 'sliders', 'page'));
    }

    public function mental_traumaIndex()
    {

        $pt = __("mental-trauma.Mental Trauma");
        $lang = session('lang');
        $slider_batch = Slider::where('temp', null)->where('lang', $lang)->where('batch_no', '!=', 0)->orderByDesc('batch_no')->first(['batch_no']);
        $sliders = Slider::where('batch_no', $slider_batch['batch_no'])->inRandomOrder()->limit(2)->get();
        $page = Page::where('idx', 'mental')->first();


        $auth_user = Auth::user();


        return view('front.mental-trauma_n', compact('pt', 'sliders', 'page', 'auth_user'));
    }

    public function alcoholics_and_addictionsIndex()
    {
        $pt = __("Alcoholics&Addictions.Alcoholism and Addictions");
        $lang = session('lang');
        $slider_batch = Slider::where('temp', null)->where('lang', $lang)->where('batch_no', '!=', 0)->orderByDesc('batch_no')->first(['batch_no']);
        $sliders = Slider::where('batch_no', $slider_batch['batch_no'])->inRandomOrder()->limit(2)->get();
        $page = Page::where('idx', 'alcoholics')->first();

        return view('front.alcoholics-and-addictions_n', compact('pt', 'sliders', 'page'));
    }

    public function about()
    {
        $pt = __('About Me');
        // $abouts = AboutMe::all();
        $lang = session('lang');
        $slider_batch = Slider::where('temp', null)->where('lang', $lang)->where('batch_no', '!=', 0)->orderByDesc('batch_no')->first(['batch_no']);
        $sliders = Slider::where('batch_no', $slider_batch['batch_no'])->inRandomOrder()->limit(2)->get();
        $page = Page::where('idx', 'about')->first();
        $album_items = AlbumItem::whereHas('album', function ($q) {
            $q->where('show_about', 1);
        })->where('show_about', 1)->inRandomOrder()->limit(9)->get();

        return view('front.about_n', compact('pt', 'sliders', 'page', 'album_items'));
    }


    public function schedule()
    {

        $pt = __('schedules.Get a Schedule');
        $schedules = Schedule::where('id', 0)->paginate(15);
        if (Auth::check()) {
            $schedules = Auth::user()->schedules()->orderByDesc('status')->orderByDesc('date')->paginate(15);
        }

        $ScheduleCity = ScheduleCity::all();
        $plans = Plan::where('status', 1)->get();
        $idade = 'ss';
//        dd($schedules);
        $pendingQuery = UserQuestionnaire::where('user_id', auth()->user()->id)->where('schedule_id', null)->first();
//        dd($pendingQuery);
        if (empty($pendingQuery)) {
            return redirect()->route('user-questionnaire');

        } else {

            return view('front.schedule_n', compact('pt', 'schedules', 'plans', 'idade', 'pendingQuery','ScheduleCity'));
        }
    }

    public function scheduleList()
    {
        $pt = __('My Schedule List');
//        $schedules = Schedule::where('scheduler_id', auth()->user())->get();
        if (Auth::check()) {
            $schedules = Auth::user()->schedules()->with('invest')->orderByDesc('status')->orderByDesc('date')->paginate(15);
        } else {
            return redirect()->route('login');
        }

        return view('user.schedule_list_n', compact('pt', 'schedules'));

    }

    public function singleUserQuestionnare($userQuestionnareId, Request $request)
    {
        $pt = "My Questionnaire Form";

        $user_questionnaire = UserQuestionnaire::where('id', $userQuestionnareId)->with('queryUser')->first();


        $schedules = Schedule::where('id', $user_questionnaire->schedule_id)->first();

        $SignImages = SignImage::where('schedules_id', $schedules->user_query_id)->get();

        return view('user.user_form', compact('pt', 'user_questionnaire', 'SignImages'));
    }


    //add for Willians 17/04/2020
    public function duvidasIndex()
    {

        $user = Auth::user();
        $pt = __('Questions');

        $lang = session('lang');
        $page = Page::where('idx', 'mental')->first();
//dd($page);
        return view('front.duvidas', compact('pt', 'page'));
    }

    public function miniblogIndex()
    {
        $pt = __('miniblog.blog');
        $lang = session('lang');
        $slider_batch = Slider::where('temp', null)->where('lang', $lang)->where('batch_no', '!=', 0)->orderByDesc('batch_no')->first(['batch_no']);
        $sliders = Slider::where('batch_no', $slider_batch['batch_no'])->inRandomOrder()->limit(2)->get();
        $page = Page::where('idx', 'about')->first();
        $album_items = AlbumItem::whereHas('album', function ($q) {
            $q->where('show_about', 1);
        })->where('show_about', 1)->inRandomOrder()->limit(9)->get();
        $allblogs = Miniblog::where('Status', 1)->paginate(4);
        $categories = MinBlogCategory::all();
        return view('front.miniblog_n', compact('pt', 'sliders', 'page', 'album_items', 'allblogs', 'categories'));
    }

    public function miniblogCategoryIndex($category)
    {
        $pt = __('miniblog.blog');
        $lang = session('lang');
        $slider_batch = Slider::where('temp', null)->where('lang', $lang)->where('batch_no', '!=', 0)->orderByDesc('batch_no')->first(['batch_no']);
        $sliders = Slider::where('batch_no', $slider_batch['batch_no'])->inRandomOrder()->limit(2)->get();
        $page = Page::where('idx', 'about')->first();
        $album_items = AlbumItem::whereHas('album', function ($q) {
            $q->where('show_about', 1);
        })->where('show_about', 1)->inRandomOrder()->limit(9)->get();
        $allblogs = Miniblog::where('category_id', $category)->where('Status', 1)->paginate(4);
        $categories = MinBlogCategory::all();
        return view('front.miniblog_n', compact('pt', 'sliders', 'page', 'album_items', 'allblogs', 'categories'));
    }

    public function MiniBlogdetail($id)
    {

        $detail = Miniblog::find($id);
        $pt = __('miniblog.blog');

        $lang = session('lang');
        $slider_batch = Slider::where('temp', null)->where('lang', $lang)->where('batch_no', '!=', 0)->orderByDesc('batch_no')->first(['batch_no']);
        $sliders = Slider::where('batch_no', $slider_batch['batch_no'])->inRandomOrder()->limit(2)->get();
        $page = Page::where('idx', 'about')->first();
        $album_items = AlbumItem::whereHas('album', function ($q) {
            $q->where('show_about', 1);
        })->where('show_about', 1)->inRandomOrder()->limit(9)->get();
        $categories = MinBlogCategory::all();
        $blog_comments = BlogComment::where('blog_id', $id)->get()->load('user');

        return view('front.detailblog_n', compact('pt', 'sliders', 'page', 'album_items', 'detail', 'categories', 'blog_comments'));
    }

    public function saveBlogComment(Request $request)
    {
        $user = Auth::user();
//dd($request->all());
        if ($request->text) {
            if ($user) {
                BlogComment::create(['user_id' => $user->id, 'text' => $request->text, 'blog_id' => $request->blog_id]);
                return redirect()->back()->with('alert', __('miniblog.Comment Submit Successfully!'));
            } else {
                return redirect()->route('login')->with('alert', __('miniblog.Login First to Post Comment'));
            }
        } else {
            return redirect()->back()->with('alert', __('miniblog.Please Enter Comment'));
        }

    }

    public function submithomecomment(Request $request)
    {
        $user = Auth::user();

        if ($request->homecomment) {
            if ($user) {

                DB::table('home_comments')->insert(
                    ['user_id' => $user->id, 'comment' => $request->homecomment, 'lang' => session('lang'),'created_at'=>now(),'updated_at'=>now(),'status'=>0]
                );
               $message = __("miniblog.Comment Submit for Review Successfully!");
                return redirect()->back()->with('alert', $message);
            } else {
                $message2 = __('miniblog.Login First to Post Comment');
                return redirect()->route('login')->with('alert', $message2);
            }
        } else {
            $message3 = __('miniblog.Please Enter Comment');

            return redirect()->back()->with('alert',$message3 );
        }

    }

    //Get All Home Comments

    public function allcomments()
    {

        $pt = __('miniblog.All Comments');
        $lang = session('lang');
        $slider_batch = Slider::where('temp', null)->where('lang', $lang)->where('batch_no', '!=', 0)->orderByDesc('batch_no')->first(['batch_no']);
        $sliders = Slider::where('batch_no', $slider_batch['batch_no'])->inRandomOrder()->limit(2)->get();
        // $page = Page::where('idx', 'about')->first();
        $album_items = AlbumItem::whereHas('album', function ($q) {
            $q->where('show_about', 1);
        })->where('show_about', 1)->inRandomOrder()->limit(9)->get();

        $homecomment = DB::table('home_comments')->where('status', 1)->orderBy('created_at', 'DESC')->get();


        return view('front.displayallhomecomments_n', compact('pt', 'sliders', 'album_items', 'homecomment'));
    }

    public function faq_index()
    {
        $pt = __('miniblog.All Comments');

        $Faqs = Faq::where('status', 1)->orderBy('id', 'desc')->get();
        $page = Page::where('idx', 'index_page')->first();
        return view('front.Faq_index', compact('pt', 'page', 'Faqs'));

    }

    public function privacy()
    {
        $pt = __('miniblog.All Comments');


        $Faqs = Faq::where('status', 1)->orderBy('id', 'desc')->get();
        $page = Page::where('idx', 'index_page')->first();
        return view('front.Faq_index', compact('pt', 'page', 'Faqs'));

    }


}
