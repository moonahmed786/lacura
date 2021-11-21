<?php

namespace App\Http\Controllers;

use App\Album;
use App\AlbumItem;
use App\Language;
use App\Deposit;
use App\Epin;
use App\Gateway;
use App\GeneralSettings;
use App\Invest;
use App\Lib\GoogleAuthenticator;
use App\Plan;
use App\Rules\BTC_Address;
use App\Slider;
use App\TimeSetting;
use App\Transection;
use App\User;
use App\Withdraw;
use App\WithdrawMethod;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\ReferralCommission;
use App\SocialMarketingService;
use App\SocialMarketingServiceSubscriber;
use Image;
use App\Miniblog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'ckstatus','checkdoc','checkWithdraw','IsPasswordSet']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pt = __('user_dashboard.User Dashboard');
        $total_deposit = Deposit::whereUserId(Auth::id())->whereStatus(1);
        $total_withdraw = Withdraw::whereUserId(Auth::id())->whereStatus(1);
        $total_trans = Transection::whereUserId(Auth::id());
        $total_ref_com = Transection::whereUserId(Auth::id())->where('type', 11);

        $investes = Invest::whereUserId(Auth::id())->get();
        $totalinin = 0;
        foreach ($investes as $inv) {
            $totalinin += $inv->interest * $inv->return_rec_time;
        }

        $total_interest =  $totalinin;

        $total_ref = User::where('ref_id', Auth::id());



        return view('home_nu', compact('pt', 'total_deposit', 'total_withdraw', 'total_interest', 'total_trans', 'total_ref', 'total_ref_com'));
    }


    public function indexTrans()
    {

        $pt = __('Transaction Detail');
        $trans = Transection::where('user_id', Auth::id())->latest()->get();
        return view('user.tarns_n', compact('pt', 'trans'));
    }

    public function refComIndex()
    {
        $pt = __('affiliate.Referral Commission History');
        $ref_comms = Auth::user()->referral_commission()->orderByDesc('status')->get();
        return view('user.com_history_n', compact('pt', 'ref_comms'));
    }

    public function refComAdjust(Request $request)
    {
        $this->validate($request, [
            'ref_comm_id' => 'required|integer',
        ]);

        $user = Auth::user();

        $ref_comm = ReferralCommission::find($request->ref_comm_id);
        $general_setting = GeneralSettings::first();

        if (empty($ref_comm) || empty($general_setting)) {
            return back()->withErrors([__('affiliate.Cannot process this request at this moment.')]);
        }

        if ($ref_comm->user_id != $user->id || $ref_comm->status != 1) {
            return back()->withErrors([__('affiliate.You are not allowed to adjust this balance.')]);
        }

        $today = \Carbon\Carbon::now();
        $day = $today->diffInDays(\Carbon\Carbon::parse($ref_comm->created_at));

        if ($day >= $general_setting->affiliate_withdraw_day && $user->referral_commission->count() >= $general_setting->affiliate_withdraw_person) {
            $ref_comm->update([
                'status' => 0,
            ]);
            $user->update([
                'interest_balance' => bcadd($user->interest_balance, $ref_comm->amount),
            ]);
        } else {
            return back()->withErrors([__('affiliate.You are not allowed to adjust yet, please follow the rules.')]);
        }

        return redirect()->route('user.referral.com')->withSuccess(__('affiliate.Your referral commission') .' '. $general_setting->currency_sym . $ref_comm->amount . __('affiliate.has been adjusted with your interest balance.'));
    }

    public function indexWithdraw()
    {
        $pt = 'Withdraw Now';
        $trans = WithdrawMethod::where('status', 1)->get();
        return view('user.withdraw.withdraw_n', compact('pt', 'trans'));
    }

    public function previewWithdraw(Request $request)
    {
        $user = Auth::user();
        $request->request->add(['withdraw_verify_document' => ($user->selfie_document && $user->selfie_document) ? 1 : 0]);
        $this->validate($request, [
            'gateway' => 'required',
            'amount' => 'required|numeric|min:1',
            'selfie_document' => 'required_if:withdraw_verify_document,0|image|mimes:jpeg,jpg,png|max:5120',
            'personal_document' => 'required_if:withdraw_verify_document,0|image|mimes:jpeg,jpg,png|max:5120',
        ]);

//dd($request->all());
        $running = Invest::where('user_id', Auth::id())->where('status', 1)->sum('withdraw_amount');


        $max_withdraw  =  Auth::user()->interest_balance - $running;
        $general = GeneralSettings::first();
        if ($max_withdraw < $request->amount) {
            return back()->withErrors([__('withdraw.Not enough matured invest. Matured balance is :') . $max_withdraw . $general->currency_sym]);
        }


        $ref_user_count = User::where('ref_id', Auth::id())->has('invests')->count();

        $creditUsed = DB::table('users')->where('id', Auth::id())->value('credit_used');
        $creditAvailable = $ref_user_count - $creditUsed;


        if ($creditAvailable < $general->nominee) {
            return back()->with(['nominee_error' => $general->nominee_error]);
        }
//        dd($request->all(),$ref_user_count,$creditAvailable);

        if ($request->hasFile('personal_document')) {
            try {
                $location = 'assets/images/user/withdraw_verify';
                if (!file_exists($location)) mkdir($location, 0755, true);
                $filename = uniqid() . time() . '.' . $request->personal_document->getClientOriginalExtension();
                Image::make($request->personal_document)->save($location . '/' . $filename);
                $user->personal_document = $filename;
                $user->save();
            } catch (\Exception $exp) {
                return back()->withErrors([__('withdraw.Personal Documents could not be uploaded')]);
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
                return back()->withErrors([__('withdraw.Personal Documents could not be uploaded')]);
            }
        }

        $amount = $request->amount;
        $with_method = WithdrawMethod::find($request->gateway);

        if ($request->amount <= Auth::user()->interest_balance && $request->amount >= $with_method->min_amo && $request->amount <= $with_method->max_amo) {

            $pt = __('withdraw.Confirm Withdraw');
            return view('user.withdraw.withdraw_preview_n', compact('pt', 'with_method', 'amount'));
        } else {
            return redirect()->back()->withErrors([__('withdraw.Invalid Amount')]);
        }
    }

    public function storeWithdraw(Request $request, $id)
    {
        $this->validate($request, [
            'amount' => 'required',
            'detail' => 'required',
        ]);

        $with_method = WithdrawMethod::findOrFail($id);
        $charge = $with_method->chargefx + ($request->amount * $with_method->chargepc) / 100;
        $payble_amount = $request->amount - $charge;
        //$in_method_cur = $payble_amount / $with_method->rate;
        $in_method_cur = $payble_amount;
        $user = User::find(Auth::user()->id);


        $running = Invest::where('user_id', Auth::id())->where('status', 1)->sum('withdraw_amount');
        $max_withdraw  =  Auth::user()->interest_balance - $running;
        if ($max_withdraw < $request->amount) {
            return back()->withErrors([__('withdraw.Not enough matured invest. Matured balance is :') .' '. $max_withdraw . GeneralSettings::first()->currency_sym]);
        }

        $ref_user_count = User::where('ref_id', Auth::id())->has('invests')->count();
        if ($ref_user_count < 2) {
            return back()->withErrors([__('withdraw.You are not eligible to withdraw now. You have to refer 2 person and they have to invest in plan.'), __('withdraw.You currently have').' '. $ref_user_count . __('withdraw.valid user')]);
        }

        if ($request->amount <= $user->interest_balance && $request->amount >= $with_method->min_amo && $request->amount <= $with_method->max_amo) {
            Withdraw::create([
                'amount' => $request->amount,
                'charge' => round($charge, 4),
                'method_id' => $with_method->id,
                'processing_time' => $with_method->processing_day,
                'detail' => $request->detail,
                'withdraw_id' => 'WD-' . rand(),
                'user_id' => $user->id,
                'method_cur_amount' => round($in_method_cur, 4),
                'status' => 0,
            ]);

            $new_balance = $user->interest_balance - $request->amount;
            $user->interest_balance = round($new_balance, 4);
            $user->save();

            Transection::create([
                'user_id' => $user->id,
                'des' => 'Withdraw Via ' . $with_method->name,
                'amount' => '-' . $request->amount,
                'balance' => round($new_balance, 4)
            ]);

            $general = GeneralSettings::first();
            $message = __('withdraw.Welcome! Your Withdraw request is success, Please wait for processing days. Your Withdraw amount.').': ' . $request->amount . $general->currency . __('withdraw.Your current balance is') . $new_balance . $general->currency . ' .';

            if ($user->lang == 'en') {
                send_email($user['email'], $user['name'], 'Successfully Withdraw', $message);
            } else {
                $data['amount'] = $request->amount;
                $data['balance'] = $new_balance;
                send_email_lang($user['email'], $user['name'], $data, 'WSUCCESS', $user->lang);
            }
            send_sms($user['mobile'], $message);


            return redirect('/withdraw')->with('message', __('withdraw.Withdraw Request Success, Wait for processing day'));
        } else {
            return redirect()->back()->with('alert', __("withdraw.Invalid Amount"));
        }
    }

    public function historyWithdraw()
    {
        $pt = __('Withdraw History');
        $trans = Withdraw::where('user_id', Auth::id())->latest()->get();
        return view('user.withdraw.history_n', compact('pt', 'trans'));
    }

    public function accountIndex()
    {
        $pt = __('Account Settings');
        return view('user.profile_n', compact('pt'));
    }
    public function withdrawIndexSettings()
    {
        $pt = __('Withdraw Account Settings');
        return view('user.withdraw_setttings_profile_n', compact('pt'));
    }
    public function withdrawSettingsUpdate(Request $request)
    {

        $this->validate($request, [

            'bank_account_number' => 'required',
            'bank_name' => 'required',
            'bank_IBN_number' => 'required',
            'account_name' => 'required',
            'account_type' => 'required',
            'branch_number' => 'required',
            'btc_address' => ['required', new BTC_Address],
        ]);

        $user = auth()->user();



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
        return back()->with('message', __('user_profile.Update Successfully'));
    }



    //add for Willians 17/07/2020
    public function shareIndex()
    {
        $lang = session('lang');
        $general = GeneralSettings::first();
        if($general->gallery_show_method == 'newest'){
            $album_items = AlbumItem::whereHas('album', function ($query) {
                $query->where('public', 1);
            })->orderBy('created_at', 'desc')->limit(config('constants.gallery.item'))->get();
        }else{
            $album_items = AlbumItem::whereHas('album', function ($query) {
                $query->where('public', 1);
            })->inRandomOrder()->limit(config('constants.gallery.item'))->get();
        }
        if($general->slider_show_method == 'newest'){
            $slider_batch = Slider::where('temp', null)->where('lang', $lang)->where('batch_no', '!=', 0)->orderByDesc('batch_no')->first(['batch_no']);
            $sliders = Slider::where('lang', $lang)->orderBy('created_at', 'desc')->get();
        }else{
            $slider_batch = Slider::where('temp', null)->where('lang', $lang)->where('batch_no', '!=', 0)->inRandomOrder()->first(['batch_no']);
            $sliders = Slider::where('lang', $lang)->inRandomOrder()->get();
        }
		$user = Auth::user();

            $pt = __('Questions');
			$lang = session('lang');
        $albums = Album::where('public', 1)->get();

            return view('user.share_n', compact('pt','albums','sliders'));
    }



    public function photosIndex()
    {
        $pt = __('Photo Gallery');
        return view('user.photos', compact('pt'));
    }

    public function accountUpdate(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'nickname' => 'required',
            'email' => 'required',
            'country' => 'required',
            'mobile' => 'required',
            'lang' => 'required|in:ja,pt-br',
            'image' => 'nullable|mimes:jpg,png,jpeg,svg|max:1000'
        ]);

        $user = auth()->user();

        $filename = $user->image;
        if ($request->hasFile('image')) {
            try {
                $filename = uniqid() . time() . '.' . $request->image->getClientOriginalExtension();
                Image::make($request->image)->resize(120, 120)->save('assets/images/user/' . $filename);
            } catch (\Exception $exp) {
                return back()->withErrors(__('Could not upload image'));
            }
        }

        $input['name'] = $request->name;
        $input['nickname'] = $request->nickname;
        $input['email'] = $request->email;
        $input['mobile'] = $request->mobile;
        $input['country'] = $request->country;
        $input['lang'] = $request->lang;
        $input['image'] = $filename;
        $input['dob'] = $request->dob;

        $user->update($input);
        return back()->with('message', __('Update Successfully'));
    }

    public function deposit()
    {

        $pt = __('deposit.Deposit Methods');
        $gates = Gateway::where('status', 1)->get();
        $deposit = Deposit::where('user_id', Auth::id())->orderBy('id', 'DESC')->where('status', 1)->get();

        return view('user.deposit_n', compact('pt', 'gates', 'deposit'));
    }

    public function depositHistory()
    {
        $data['pt'] = 'Deposit History';
        $data['deposit'] = Deposit::where('user_id', Auth::id())->orderBy('id', 'DESC')->where('status', 1)->paginate(15);
        return view('user.deposit_history_n', $data);
    }

    public function depositDataInsert(Request $request)
    {
        $this->validate($request, ['amount' => 'required|numeric', 'gateway' => 'required']);

        $user = auth()->user();
        $lang = $request->lang;

        if ($request->amount  <= 0) {

                return back()->with('alert', __('deposit.Invalid amount'));

        } else {


            $gate = Gateway::findOrFail($request->gateway);
//dd($request->all(),$gate->minamo ,'<=', $request->amount ,'&&', $gate->maxamo ,'>=', $request->amount,$gate->minamo <= $request->amount );
            if (isset($gate)) {
                if ($gate->minamo <= $request->amount && $gate->maxamo >= $request->amount) {
                    $charge = $gate->fixed_charge + ($request->amount * $gate->percent_charge / 100);
                    $usdamo = ($request->amount + $charge) / $gate->rate;

                    $depo['user_id'] = Auth::id();
                    $depo['gateway_id'] = $gate->id;
                    $depo['amount'] = $request->amount;
                    $depo['charge'] = $charge;
                    $depo['usd_amo'] = round($usdamo, 2);
                    $depo['btc_amo'] = 0;
                    $depo['btc_wallet'] = "";
                    $depo['trx'] = str_random(16);
                    $depo['try'] = 0;
                    $depo['status'] = 0;
                    Deposit::create($depo);

                    Session::put('Track', $depo['trx']);
                    return redirect()->route('deposit.preview');
                } else {


                        return back()->with('alert', __('deposit.Deposit limit is restricted.'));


                }
            } else {
                    return back()->with('alert', __('deposit.Please select a deposit.'));


            }
        }
    }

    public function depositPreview()
    {
        $track = Session::get('Track');
        session()->forget('pranto');
        $data = Deposit::where('status', 0)->where('trx', $track)->first();
        $pt = 'Deposit Preview';

        return view('user.payment.preview_n', compact('pt', 'data'));
    }

    public function indexPlan()
    {
        $pt = 'Investment Plans';
        $gates = Plan::where('status', 1)->get();
        return view('user.plan', compact('pt', 'gates'));
    }



    public function buyPlan(Request $request)
    {
        $vali = Validator::make($request->all(), [
            'amount' => 'required|numeric|min:0',
            'plan_id' => 'required',
            'wallet_type' => 'required',
        ]);

        if ($vali->fails()) {
            return response()->json(['success' => false, 'message' => $vali->errors()->first()]);
        }



        $user = User::find(Auth::id());

        if ($request->wallet_type == 1) {
            $wallet_bal = $user->balance;
        } else {
            $wallet_bal = $user->interest_balance;
        }


        if ($request->amount > $wallet_bal) {
            return response()->json(['success' => false, 'message' => 'Insufficient Balance']);
        }




        if ($request->wallet_type == 1) {
            $new_balance = $user->balance - $request->amount;
            $user->balance = $new_balance;
        } else {
            $new_balance = $user->interest_balance - $request->amount;
            $user->interest_balance = $new_balance;
        }

        $user->save();



        $gnl = GeneralSettings::first();
        $plan = Plan::find($request->plan_id);
        $time_name = TimeSetting::where('time', $plan->times)->first();
        $now = Carbon::now();



        Transection::create([
            'trxid' => 'TRX-' . rand(1000, 9999),
            'user_id' => $user->id,
            'des' => 'Invested On ' . $plan->name,
            'amount' => '-' . $request->amount,
            'balance' => round($new_balance, 4)
        ]);




        //start
        if ($plan->interest_status == 1) {
            $interest_amount = ($request->amount * $plan->interest) / 100;
        } else {
            $interest_amount = $plan->interest;
        }

        if ($plan->lifetime_status == 1) {
            $period = '-1';
        } else {
            $period = $plan->repeat_time;
        }
        //end

        if ($plan->fixed_amount == 0) {

            if ($plan->minimum <= $request->amount && $plan->maximum >= $request->amount) {



                $pranto['user_id'] = $user->id;
                $pranto['plan_id'] = $plan->id;
                $pranto['amount'] = $request->amount;
                $pranto['interest'] = $interest_amount;
                $pranto['period'] = $period;
                $pranto['time_name'] = $time_name->name;
                $pranto['hours'] = $plan->times;
                $pranto['next_time'] = Carbon::parse($now)->addHours($plan->times);
                $pranto['status'] = 1;
                $pranto['capital_status'] = $plan->capital_back_status;
                $a = Invest::create($pranto);


                levelCommision($user->id, $request->amount);

                $message = "Congratulation, Successfully Invest complete. You invest " . $request->amount . ' ' . $gnl->currency . ' And you will get ' .
                    $interest_amount . ' ' . $gnl->currency . ' interest.';

                if ($user->lang == 'en') {
                    send_email($user->email, $user->name, 'Invest Complete', $message);
                } else {
                    $data['amount'] = $request->amount . ' ' . $gnl->currency;
                    $data['interest'] = $interest_amount . ' ' . $gnl->currency;
                    send_email_lang($user->email, $user->name, $data, 'ICOMPETE', $user->lang);
                }

                send_sms($user->mobile, $message);

                Session::flash('success', 'deposit.Package Purchased Successfully Complete');
                return $a;
            }

            return response()->json(['success' => false, 'message' => __('deposit.Invalid Amount')]);
        } else {

            if ($plan->fixed_amount == $request->amount) {


                $data['user_id'] = $user->id;
                $data['plan_id'] = $plan->id;
                $data['amount']  = $request->amount;
                $data['interest'] = $interest_amount;
                $data['period'] = $period;
                $data['time_name'] = $time_name->name;
                $data['hours'] = $plan->times;
                $data['next_time'] = Carbon::parse($now)->addHours($plan->times);
                $data['status'] = 1;
                $data['capital_status'] = $plan->capital_back_status;
                $a = Invest::create($data);
                $message = "Congratulation, Successfully Invest complete. You invest " . $request->amount . ' ' . $gnl->currency . ' And you will get ' .
                    $interest_amount . ' ' . $gnl->currency . ' interest.';

                if ($user->lang == 'en') {
                    send_email($user->email, $user->name, 'Invest Complete', $message);
                } else {
                    $data['amount'] = $request->amount . ' ' . $gnl->currency;
                    $data['interest'] = $interest_amount . ' ' . $gnl->currency;
                    send_email_lang($user->email, $user->name, $data, 'ICOMPETE', $user->lang);
                }
                send_sms($user->mobile, $message);

                $user->save();
                Session::flash('success', 'deposit.Package Purchased Successfully Complete');
                return $a;
            }
            return response()->json(['success' => false, 'message' => 'deposit.Something Went Wrong']);
        }
    }

    /*
    public function buyPlan(Request $request)
    {
        $vali = Validator::make($request->all(), [
            'amount' => 'required|numeric|min:0',
            'plan_id' => 'required',
            'wallet_type' => 'required',
        ]);

        if ($vali->fails()) {
            return response()->json(['success' => false, 'message' => $vali->errors()->first()]);
        }

        $gnl = GeneralSettings::first();
        $plan = Plan::find($request->plan_id);
        $time_name = TimeSetting::where('time', $plan->times)->first();
        $user = User::find(Auth::id());
        $now = Carbon::now();

        if ($request->wallet_type == 1)
        {
            $wallet_bal = $user->balance;
        }else{
            $wallet_bal = $user->interest_balance;
        }


        if ($request->amount > $wallet_bal)
        {
            return response()->json(['success' => false, 'message' => 'Insufficient Balance']);
        }

        //start
        if ($plan->interest_status == 1)
        {
            $interest_amount = ($request->amount*$plan->interest)/100;
        }else{
            $interest_amount = $plan->interest;
        }

        if ($plan->lifetime_status == 1)
        {
            $period = '-1';
        }else{
            $period = $plan->repeat_time;
        }
        //end

        if ($plan->fixed_amount == 0)
        {

            if ($plan->minimum <= $request->amount && $plan->maximum >= $request->amount)
            {



                $pranto['user_id'] = $user->id;
                $pranto['plan_id'] = $plan->id;
                $pranto['amount'] = $request->amount;
                $pranto['interest'] = $interest_amount;
                $pranto['period'] = $period;
                $pranto['time_name'] = $time_name->name;
                $pranto['hours'] = $plan->times;
                $pranto['next_time'] = Carbon::parse($now)->addHours($plan->times);
                $pranto['status'] = 1;
                $pranto['capital_status'] = $plan->capital_back_status;
                $a = Invest::create($pranto);


                levelCommision($user->id, $request->amount);


                if ($request->wallet_type == 1)
                {
                    $new_balance = $user->balance - $request->amount;
                    $user->balance = $new_balance;
                }else{
                    $new_balance = $user->interest_balance - $request->amount;
                    $user->interest_balance = $new_balance;
                }

                Transection::create([
                    'trxid' => 'TRX-'.rand(1000,9999),
                    'user_id' => $user->id,
                    'des' => 'Purchased '.$plan->name,
                    'amount' => '-'.$request->amount,
                    'balance' => round($new_balance,4)
                ]);




                $message = "Congratulation, Successfully Invest complete. You invest ".$request->amount.' '.$gnl->currency.' And you will get '.
                    $interest_amount.' '.$gnl->currency. ' interest.';
                send_email($user->email, $user->name, 'Invest Complete', $message);
                send_sms($user->mobile, $message);

                $user->save();

                Session::flash('success','Package Purchased Successfully Complete');
                return $a;
            }

            return response()->json(['success' => false, 'message' => 'Invalid Amount']);

        }else{
            if ($plan->fixed_amount == $request->amount) {


                $data['user_id'] = $user->id;
                $data['plan_id'] = $plan->id;
                $data['amount'] = $request->amount;
                $data['interest'] = $interest_amount;
                $data['period'] = $period;
                $data['time_name'] = $time_name->name;
                $data['hours'] = $plan->times;
                $data['next_time'] = Carbon::parse($now)->addHours($plan->times);
                $data['status'] = 1;
                $data['capital_status'] = $plan->capital_back_status;
                $a = Invest::create($data);

                if ($request->wallet_type == 1)
                {
                    $new_balance = $user->balance - $request->amount;
                    $user->balance = $new_balance;
                }else{
                    $new_balance = $user->interest_balance - $request->amount;
                    $user->interest_balance = $new_balance;
                }


                Transection::create([
                    'trxid' => 'TRX-'.rand(1000,9999),
                    'user_id' => $user->id,
                    'des' => 'Purchased '.$plan->name,
                    'amount' => '-'.$request->amount,
                    'balance' => round($new_balance,4)
                ]);

                $message = "Congratulation, Successfully Invest complete. You invest ".$request->amount.' '.$gnl->currency.' And you will get '.
                    $interest_amount.' '.$gnl->currency. ' interest.';
                send_email($user->email, $user->name, 'Invest Complete', $message);
                send_sms($user->mobile, $message);

                $user->save();
                Session::flash('success','Package Purchased Successfully Complete');
                return $a;
            }
            return response()->json(['success' => false, 'message' => 'Something Went Wrong']);
        }


    }
*/
    public function interestLog()
    {
        $pt = 'Interest Log';
        $trans = Invest::where('user_id', Auth::id())->latest()->get();
        return view('user.interest_log_n', compact('pt', 'trans'));
    }

    public function indexTransfer()
    {
        $pt = 'Balance Transfer';
        return view('user.balance_tranfer_n', compact('pt'));
    }

    public function balTransfer(Request $request)
    {
        $this->validate($request, [
            'wallet_id' => 'required',
            'username' => 'required',
            'amount' => 'required|numeric|min:0',
        ]);




        // wallet_id 1 = deposit & 2 = interest wallet
        $gnl = GeneralSettings::first();
        $user = User::find(Auth::id());

        $trans_user = User::where('username', $request->username)->orwhere('email', $request->username)->first();

        if ($trans_user == '') {
            return back()->with('alert', 'Username Not Found');
        }

        if ($trans_user->username == $user->username) {
            return back()->with('alert', 'Balance Transfer Not Possible In Your Own Account');
        }


        if ($request->wallet_id == 1) {
            $balance = $user->balance;
        } else {
            $balance = $user->interest_balance;
        }

        $charge = $gnl->bal_trans_fixed_charge + ($request->amount * $gnl->bal_trans_per_charge) / 100;
        $amount = $request->amount + $charge;


        if ($balance >= $amount) {
            if ($request->wallet_id == 1) {
                $new_balance = $user->balance - $amount;
                $user->balance = $new_balance;
            } else {
                $new_balance = $user->interest_balance - $amount;
                $user->interest_balance = $new_balance;
            }
            Transection::create([
                'trxid' => 'TRX-' . rand(1000, 9999),
                'user_id' => $user->id,
                'des' => 'Balance Transfer To ' . $trans_user->name,
                'amount' => '-' . $request->amount,
                'balance' => round($new_balance, 4),
                'charge' => $charge
            ]);
            $message = "Balance transferred successfully complete. You send " . $request->amount . '' . $gnl->currency . " to " . $trans_user->name . '<br>' .
                "And charge to transfer " . $charge . ' ' . $gnl->currency . ".Your current balance is " . $new_balance . ' ' . $gnl->currency;

            if ($user->lang == 'en') {
                send_email($user->email, $user->name, 'Balance Transfer', $message);
            } else {
                $data['amount'] = $request->amount . ' ' . $gnl->currency;
                $data['receiver'] = $trans_user->name;
                $data['charge'] = $charge . ' ' . $gnl->currency;
                $data['balance'] = $new_balance . ' ' . $gnl->currency;

                send_email_lang($user->email, $user->name, $data, 'BTRANSFER', $user->lang);
            }
            send_sms($user->mobile, $message);
            $user->save();

            $trans_new_bal = $trans_user->balance + $request->amount;
            $trans_user->balance = $trans_new_bal;

            Transection::create([
                'trxid' => 'TRX-' . rand(1000, 9999),
                'user_id' => $user->id,
                'des' => 'Balance Transfer To ' . $trans_user->name,
                'amount' => '-' . $request->amount,
                'balance' => round($new_balance, 4),
                'charge' => $charge
            ]);

            $message = "Balance received successfully. You got " . $request->amount . '' . $gnl->currency . " from " . $user->name . '<br>' . ".Your current balance is " . $trans_new_bal . ' ' . $gnl->currency;

            if ($user->lang == 'en') {
                send_email($user->email, $user->name, 'Balance Received', $message);
            } else {
                $data['amount'] = $request->amount . ' ' . $gnl->currency;
                $data['sender'] = $user->name;
                $data['balance'] = $trans_new_bal . ' ' . $gnl->currency;

                send_email_lang($user->email, $user->name, $data, 'BRECEIVE', $user->lang);
            }
            send_sms($user->mobile, $message);

            $trans_user->save();
            return back()->with('message', 'Balance Transferred Successfully');
        } else {
            return back()->with('alert', 'Insufficient Balance');
        }
    }

    public function searchUser(Request $request)
    {
        $trans_user = User::where('id', '!=', Auth::id())->where('username', $request->username)->orwhere('email', $request->username)->count();

        if ($trans_user == 1) {
            return response()->json(['success' => true, 'message' => 'Correct User']);
        } else {
            return response()->json(['success' => false, 'message' => 'User Not Found']);
        }
    }

    public function twoFactorIndex()
    {
        $pt = '2FA Security';
        $gnl = GeneralSettings::first();
        $ga = new GoogleAuthenticator();
        $secret = $ga->createSecret();

        $qrCodeUrl = $ga->getQRCodeGoogleUrl(Auth::user()->username . '@' . $_SERVER['HTTP_HOST'], $secret);
        $prevcode = Auth::user()->secretcode;
        $prevqr = $ga->getQRCodeGoogleUrl(Auth::user()->username . '@' . $_SERVER['HTTP_HOST'], $prevcode);

        return view('user.two_factor', compact('secret', 'qrCodeUrl', 'prevcode', 'prevqr', 'pt'));
    }

    public function disable2fa(Request $request)
    {
        $this->validate($request, [
            'code' => 'required',
        ]);

        $user = User::find(Auth::id());
        $ga = new GoogleAuthenticator();

        $secret = $user->secretcode;
        $oneCode = $ga->getCode($secret);
        $userCode = $request->code;

        if ($oneCode == $userCode) {
            $user = User::find(Auth::id());
            $user['tauth'] = 0;
            $user['tfver'] = 1;
            $user['secretcode'] = '0';
            $user->save();

            $message =  'Google Two Factor Authentication Disabled Successfully';

            if ($user->lang == 'en') {
                send_email($user['email'], $user['first_name'], 'Google 2FA', $message);
            } else {
                send_email_lang($user['email'], $user['first_name'], [], 'GAUTHDISABLE', $user->lang);
            }

            $sms =  'Google Two Factor Authentication Disabled Successfully';
            send_sms($user->mobile, $sms);

            return back()->with('message', 'Two Factor Authenticator Disable Successfully');
        } else {
            return back()->with('alert', 'Wrong Verification Code');
        }
    }

    public function create2fa(Request $request)
    {
        $user = User::find(Auth::id());
        $this->validate($request, [
            'key' => 'required',
            'code' => 'required',
        ]);

        $ga = new GoogleAuthenticator();

        $secret = $request->key;
        $oneCode = $ga->getCode($secret);
        $userCode = $request->code;
        if ($oneCode == $userCode) {
            $user['secretcode'] = $request->key;
            $user['tauth'] = 1;
            $user['tfver'] = 1;
            $user->save();

            $message = 'Google Two Factor Authentication Enabled Successfully';

            if ($user->lang == 'en') {
                send_email($user['email'], $user['first_name'], 'Google 2FA', $message);
            } else {
                send_email_lang($user['email'], $user['first_name'], [], 'GAUTHENABLE', $user->lang);
            }

            $sms =  'Google Two Factor Authentication Enabled Successfully';
            send_sms($user->mobile, $sms);

            return back()->with('message', 'Google Authenticator Enabeled Successfully');
        } else {
            return back()->with('alert', 'Wrong Verification Code');
        }
    }

    public function checkTwoFactor(Request $request)
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
            return response()->json(['success' => true, 'message' => "ok"]);
        } else {
            return response()->json(['success' => false, 'message' => "Wrong Verification Code"]);
        }
    }


    public function passwordChange(Request $request)
    {
        $this->validate($request, [
            'passwordold' => 'required',
            'password' => 'required|min:5|confirmed'
        ]);

        try {
            $c_password = User::find($request->id)->password;
            $c_id = User::find($request->id)->id;
            $user = User::findOrFail($c_id);

            if (Hash::check($request->passwordold, $c_password)) {

                $password = Hash::make($request->password);
                $user->password = $password;
                $user->save();

                return redirect()->back()->with('message', 'Password Change Successfully.');
            } else {
                session()->flash('alert', 'Password Not Match');
                Session::flash('type', 'warning');
                return redirect()->back();
            }
        } catch (\PDOException $e) {
            session()->flash('message', 'Some Problem Occurs, Please Try Again!');
            Session::flash('type', 'warning');
            return redirect()->back();
        }
    }



    public function pinRecharge()
    {
        $pt = __('deposit.Recharge Wallet With E-PIN');
        return view('user.pinRecharge_n', compact('pt'));
    }


    public function pinRechargePost(Request $request)
    {

        $this->validate($request, [
            'pin' => 'required'
        ]);

        $pin = Epin::where('pin', $request->pin)->first();

        if ($pin == '') {
            return redirect()->back()->with(Session::flash('talert', __('deposit.Wrong Pin')));
        }
        if ($pin->status == 2) {
            return redirect()->back()->with(Session::flash('twarning', __('deposit.Already Used')));
        }
        if ($pin->status == 1) {
            $pin->status = 2;
            $pin->user_id = Auth::id();
            $pin->save();

            $user = User::find(Auth::id());
            $new_balance = $user->balance + $pin->amount;
            $user->balance = $new_balance;
            $user->save();

            $tlog['user_id'] = $user->id;
            $tlog['amount'] = $pin->amount;
            $tlog['balance'] = $user->balance;
            $tlog['des'] = 'E-Pin Recharge';
            $tlog['trxid'] = str_random(16);
            Transection::create($tlog);
            return redirect()->back()->with(Session::flash('tsuccess', 'deposit.Balance Added Successfully.'));
        }
    }

    public function depositBankPranto()
    {
        $track = Session::get('Track');

        if ($track != '') {
            $data = Deposit::where('trx', $track)->orderBy('id', 'DESC')->first();
            $method = Gateway::find($data->gateway_id);
            $pt = "Deposit Now";
            return view('user.bank_deposite_n', compact('method', 'data', 'pt'));
        }

        return redirect('home')->with('alert', 'Session Expired Please Try Again');
    }

    public function depositBankSubmit(Request $request)
    {
        $this->validate($request, [
            'detail' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,svg',
        ]);
        $track = Session::get('Track');
        $data = Deposit::find($request->data_id);
        $data_one = Deposit::where('trx', $track)->orderBy('id', 'DESC')->first();
        if ($data->trx == $data_one->trx) {

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = time() . '.' . 'jpg';
                $location = 'assets/images/deposit_prove/' . $filename;
                Image::make($image)->save($location);
                $data->image = $filename;
            }
            $data->detail = $request->detail;
            $data->type = $request->type;
            $data->save();


            return redirect('/home')->with('success', __('deposit.Submitted Successfully, Wait for confirmation'));
        }
        return redirect()->back()->with('alert', __('deposit.Failed to Process'));
    }

    public function refMy()
    {

        $pt = "My Referral";
        return view('user.my_referral_n', compact('pt'));
    }

    public function smmServices()
    {
        $pt = 'Social Marketing Services';
        $services = SocialMarketingService::where('status', 1)->get();
        return view('user.services_n', compact('pt', 'services'));
    }

    public function smmSubscriptions()
    {
        $pt = 'Your Subscriptions';
        $subscriptions = auth()->user()->subscribed_services()->orderBy('status')->paginate(15);
        return view('user.service_subscriptions_n', compact('pt', 'subscriptions'));
    }

    public function smmSubscribe(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'wallet_type' => 'required|in:1,2',
            'unit' => 'required|integer',
        ]);

        $service = SocialMarketingService::findOrFail($request->id);

        $wallet_name = '';
        $wallet_balance = 0;
        $general = GeneralSettings::first(['deposit_wallet_name', 'interest_wallet_name']);
        $user = auth()->user();

        if ($request->unit < $service->min || $request->unit > $service->max) {
            return back()->withErrors(['Invalid unit, please follow the minimum and maxium unit range']);
        }

        $amount = $request->unit * ($service->price / $service->unit);

        if ($request->wallet_type == 1) {
            $wallet_name = $general->deposit_wallet_name;
            $wallet_balance = $user->balance;
        } else {
            $wallet_name = $general->interest_wallet_name;
            $wallet_balance = $user->interest_balance;
        }

        if ($wallet_balance < $amount) {
            return back()->withErrors(['Insufficient balance in your ' . $wallet_name]);
        }

        if ($request->wallet_type == 1) {
            $user->update(['balance' => $user->balance - $amount]);
        } else {
            $user->update(['balance' => $user->interest_balance - $amount]);
        }

        $user->subscribed_services()->save(new SocialMarketingServiceSubscriber([
            'service_id' => $service->id,
            'unit' => $request->unit,
            'price' => $amount,
            'completed' => 0,
            'status' => 0,
        ]));

        return redirect()->route('user.smm.subscriptions')->withSuccess($service->title . ' has been subscribed successfully.');
    }

    public function cps_Index()
    {
        $pt = 'CPS Index';
dd('cps index');
        $Faqs = Faq::where('status', 1)->orderBy('id', 'desc')->get();
        $page = Page::where('idx', 'index_page')->first();
        return view('front.Faq_index', compact('pt', 'page', 'Faqs'));

    }


}

