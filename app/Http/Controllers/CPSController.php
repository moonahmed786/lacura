<?php

namespace App\Http\Controllers;

use App\CPS_Withdraw;
use App\CPSDeposit;
use App\GeneralSettings;
use App\Gift;
use App\Project;
use App\Slot;
use App\SlotDeposit;
use App\SlotPackages;
use App\SlotPackageSubscribe;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CPSController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'ckstatus', 'checkdoc', 'checkWithdraw', 'IsPasswordSet']);
    }

    public function cps_Index()
    {
        $pt = 'CPS Index';
        dd('cps index');
        $Faqs = Faq::where('status', 1)->orderBy('id', 'desc')->get();
        $page = Page::where('idx', 'index_page')->first();
        return view('front.Faq_index', compact('pt', 'page', 'Faqs'));

    }

    public function dashboard(Request $request)
    {
//        ProcessBtcOrder::dispatch('e36f25f3','CPFF1JDFHJTOCI57QYVO5WUD7Q')->delay(now());
////        self::checkOrdersBtcTable();
//        dd(2);
//        $pending_orders = paymentJobs::where('status', 0)->get();
//
//        if(!empty($pending_orders->toArray())) {
//            ProcessBtcOrder::dispatch()->delay(now());
//
//        }


        if ($request->session()->has('user')) {
            $id = (int)$request->session()->get('user');

        } else {
            $id = auth()->user()->id;

        }
        $user = User::where('id', $id)->first();
//        $referrals = User::where('reff_by', $user->reff_key)->count();
        $referrals = 1;
        $slots = Slot::where('user_id', $id)->get();
        $slots_sum = Slot::where('user_id', $id)->where('status', '1')->sum('balance');
        $CPSDeposit = CPSDeposit::where('user_id', $id)->sum('amount');

        $Contracts = $slots->count();

        $user_packages_list = SlotPackageSubscribe::where('user_id',auth()->user()->id)->where('reaming_slots','>=',1)->with('packages')->get();

        $is_allowed_buy = SlotPackageSubscribe::where('user_id',auth()->user()->id)->where('reaming_slots','>=',1)->with('packages')->get()->toArray();
            $allowed_buy =  (sizeof($is_allowed_buy) != 0)?1:0;
        $gn_setting =GeneralSettings::first();
//dd($allowed_buy);

        return view('user.CPS.dashboard', compact('gn_setting','user_packages_list','slots', 'Contracts', 'referrals', 'slots_sum', 'CPSDeposit','allowed_buy'));
    }

    public function cpsAjax(Request $request)
    {
        $now = Carbon::now();


        $pack_selected=  SlotPackageSubscribe::where('id',$request->package_id)->where('expired_at' ,'>', $now)->where('reaming_slots','>=',$request->input_slots)->with('packages')->first();
        $gn_setting =GeneralSettings::first();
        if (!empty($pack_selected)) {

        if (!empty($request->get('coin_type') == 'voucher')) {
            $voucher_code = $request->get('gift_code');
            $temp_gift = Gift::where('gift_code', $voucher_code)->where('status', 0)->first();

            if (empty($temp_gift)) {
                return ['error' => true, 'message' => __('cps_dashboard.this Voucher Code is not Valid')];
            }
            //commission
            //
            $type = 'gift_code';

            $slots = $temp_gift->amount / 150;
            $total_amout = $temp_gift->amount;

            $is_gift = '1';
            $btc = file_get_contents('https://blockchain.info/ticker');
            $rate = json_decode($btc)->USD->sell;
            $post = ([
                'user_id' => auth()->user()->id,
                'btc_rate' => $rate,
                'trans_id' => 'tem_id',
                'coin_type' => $type,
                'capital_type' => 'gift',
                'detail' => 'test',
                'type' => 'gift_code',
                'amount' => $total_amout,
                'payment_gateway' => "local System",
                'btc_amo' => $total_amout / $rate,
                'btc_wallet' => "giftcode",
                'usd_amo' => $total_amout,
                'deposite_status' => '1',
                'withdraw_status' => '0',
                'charge' => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ]);
//              $tran_id =  Deposit::insertGetId($request->except(['_token']));
            $tran_id = CPSDeposit::insertGetId($post);


            $new_reaming_slot = $pack_selected->reaming_slots - $request->input_slots;

            $pack_selected ->update(['reaming_slots'=>$new_reaming_slot]);




            for ($i = 1; $i <= $slots; $i++) {

                $user = User::where('id',auth()->user()->id)->first();
                $user->update(['reward_points'=>auth()->user()->reward_points +$gn_setting->reward_points ]);

                $db_slots = Slot::where('status', 1)->where('slot_validate_until','>',$now)->get();
//                $amount_returned = User::commission(150, auth()->user()->id, $type);
                $amount_returned = $total_amout;

                if (!empty($db_slots->toArray())) {
                    //amount will update after commission
                    $profit_amount = $amount_returned / $db_slots->count();
                    foreach ($db_slots as $P_slot) {
                        SlotDeposit::create(
                            ['deposit_time' => Carbon::now(),
                                'deposit_by_user' => auth()->user()->id,
                                'type' => $type,
                                'transactions_id' => $tran_id,
                                'slot_id' => $P_slot->id,
                                'is_gift' => $is_gift,
                                'gift_id' => $temp_gift->id,
                                'receiver_user_id' => $P_slot->user_id,
                                'amount' => $profit_amount,
                                'status' => 1,

                            ]
                        );
                        $slot_to_update = Slot::where('id', $P_slot->id)->first();
                        $NewBlance = $slot_to_update->balance + $profit_amount;
                        $Newprofit = $slot_to_update->profit + $profit_amount;
                        $slot_to_update->update(['balance' => $NewBlance, 'profit' => $Newprofit]);

                    }


                } else {
                    //admin case only first user
                    $fist_slot = Slot::insertGetId([
                        'user_id' => auth()->user()->id,
                        'deposits_id' => $tran_id,
                        'slot_number' => Slot::slotUniqNumber(),
                        'balance' => $amount_returned,
                        'profit' => $amount_returned,
                        'status' => 1,
                        'allowed_withdraw_at' => $now->addDays($pack_selected->packages->withdraw_time),
                        'package_id' => $pack_selected->package_id,
                        'slot_validate_until' => $now->addDays($pack_selected->packages->valid_for_days),

                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),

                    ]);
                    SlotDeposit::create(
                        ['deposit_time' => Carbon::now(),
                            'deposit_by_user' => auth()->user()->id,
                            'type' => $type,
                            'transactions_id' => $tran_id,
                            'slot_id' => $fist_slot,
                            'is_gift' => $is_gift,
                            'gift_id' => $temp_gift->id,
                            'receiver_user_id' => auth()->user()->id,
                            'amount' => $amount_returned,
                            'status' => 1
                        ]
                    );
                    continue;
                }

                $Slot_creaded = Slot::insertGetId([
                    'user_id' => auth()->user()->id,
                    'deposits_id' => $tran_id,
                    'slot_number' => Slot::slotUniqNumber(),
                    'balance' => 0,
                    'profit' => 0,
                    'status' => 1,
                    'allowed_withdraw_at' => $now->addDays($pack_selected->packages->withdraw_time),
                    'package_id' => $pack_selected->package_id,
                    'slot_validate_until' => $now->addDays($pack_selected->packages->valid_for_days),

                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),


                ]);

            }
            $temp_gift->update([
                'status' => 1, 'slot_id' => 1,
                'used_by' => auth()->user()->id,
                'approved_at' => Carbon::now(),
            ]);

            return ['error' => false, 'message' => __('cps_dashboard.Slot Booked!'), '$tran_id' => $tran_id];


        } elseif (!empty($request->get('coin_type') == 'balance')) {
            if (auth()->user()->balance < $request->get('input_slots') * 150) {
                return ['error' => true, 'message' => __('cps_dashboard.Your total amount is greater then your Account Balance so this Request is Rejected')];

            }
            $user_update = User::where('id', auth()->user()->id)->first();
            $user_update->update(['balance' => $user_update->balance - $request->get('input_slots') * 150]);
            $slots = $request->get('input_slots');
            $total_amout = $slots * 150;
            $type = __('cps_dashboard.Balance');
            $is_gift = '';
            $btc = file_get_contents('https://blockchain.info/ticker');
            $rate = json_decode($btc)->USD->sell;

            $post = ([
                'user_id' => auth()->user()->id,
                'btc_rate' => $rate,
                'trans_id' => 'tem_id',
                'coin_type' => $type,
                'capital_type' => 'balance',
                'detail' => 'user Balance',
                'type' => $type,
                'amount' => $total_amout,
                'payment_gateway' => "local System",
                'btc_amo' => $total_amout / $rate,
                'btc_wallet' => "user Balance",
                'usd_amo' => $total_amout,
                'deposite_status' => '1',
                'withdraw_status' => '0',
                'charge' => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ]);
//              $tran_id =  Deposit::insertGetId($request->except(['_token']));
            $tran_id = CPSDeposit::insertGetId($post);

            for ($i = 1; $i <= $slots; $i++) {
//                $amount_returned = User::commission(150, auth()->user()->id, $type);
                $user = User::where('id',auth()->user()->id)->first();
                $user->update(['reward_points'=>auth()->user()->reward_points +$gn_setting->reward_points ]);

                $amount_returned = $total_amout;
                $db_slots = Slot::where('status', 1)->where('slot_validate_until','>',$now)->get();



                $new_reaming_slot = $pack_selected->reaming_slots - $request->input_slots;

                $pack_selected ->update(['reaming_slots'=>$new_reaming_slot]);


//                $new_reaming_slot = $pack->reaming_slots - $request->input_slots;
//                $pack ->update(['reaming_slots'=>$new_reaming_slot]);

                if (!empty($db_slots->toArray())) {
                    $profit_amount = $amount_returned / $db_slots->count();
                    foreach ($db_slots as $P_slot) {
                        SlotDeposit::create(
                            ['deposit_time' => Carbon::now(),
                                'deposit_by_user' => auth()->user()->id,
                                'type' => $type,
                                'transactions_id' => $tran_id,
                                'slot_id' => $P_slot->id,
                                'is_gift' => $is_gift,
                                'gift_id' => null,
                                'receiver_user_id' => $P_slot->user_id,
                                'amount' => $profit_amount,
                                'status' => 1
                            ]
                        );
                        $slot_to_update = Slot::where('id', $P_slot->id)->first();
                        $NewBlance = $slot_to_update->balance + $profit_amount;
                        $Newprofit = $slot_to_update->profit + $profit_amount;
                        $slot_to_update->update(['balance' => $NewBlance, 'profit' => $Newprofit]);

                        $amount_returned = $amount_returned - $profit_amount;
                    }


                } else {
                    //admin case only first user
                    $fist_slot = Slot::insertGetId([
                        'user_id' => auth()->user()->id,
                        'deposits_id' => $tran_id,
                        'slot_number' => Slot::slotUniqNumber(),
                        'balance' => 150,
                        'profit' => 150,
                        'status' => 1,
                        'allowed_withdraw_at' => $now->addDays($pack_selected->packages->withdraw_time),
                        'package_id' => $pack_selected->package_id,
                        'slot_validate_until' => $now->addDays($pack_selected->packages->valid_for_days),

                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),

                    ]);
                    SlotDeposit::create(
                        [
                            'deposit_time' => Carbon::now(),
                            'deposit_by_user' => auth()->user()->id,
                            'type' => $type,
                            'transactions_id' => $tran_id,
                            'slot_id' => $fist_slot,
                            'is_gift' => $is_gift,
                            'gift_id' => null,
                            'receiver_user_id' => auth()->user()->id,
                            'amount' => 150,
                            'status' => 1
                        ]
                    );
                    $amount_returned = $amount_returned - 150;

                    continue;
                }

                Slot::create([
                    'user_id' => auth()->user()->id,
                    'deposits_id' => $tran_id,
                    'slot_number' => Slot::slotUniqNumber(),
                    'balance' => 0,
                    'profit' => 0,
                    'status' => 1,
                    'allowed_withdraw_at' => $now->addDays($pack_selected->packages->withdraw_time),
                    'package_id' => $pack_selected->package_id,
                    'slot_validate_until' => $now->addDays($pack_selected->packages->valid_for_days),


                ]);
            }


            return ['error' => false, 'message' => __('cps_dashboard.Slot Booked!'), '$tran_id' => $tran_id];


        } else {
            return ['error' => true, 'message' => __('cps_dashboard.Please file the required filed')];
        }

        } else {
            return ['error' => true, 'message' => __('cps_dashboard.Please Subscribe a Package to Buy a Slot or your Package Limit is over.')];

        }
    }

    public function delete_All()
    {
        CPSDeposit::truncate();
        CPS_Withdraw::truncate();
        Slot::truncate();
        SlotDeposit::truncate();
        return redirect()->route('user.cps.dashboard');

    }

    public function withdrawBalanceAjax(Request $request)
    {
//        dd($request->all());
        if ($request->ajax()) {

            $amt_withdraw = $request->get('amt_withdraw');
            if (auth()->user()->balance < $amt_withdraw) {
                return ['error' => true, 'message' => __('cps_dashboard.Your total amount is greater then your Account Balance so this Request is Rejected')];
            }

            if (auth()->user()->balance < 30) {
                return ['error' => true, 'message' => __('cps_dashboard.Your Balance is less then the min Limit so this Request is Rejected.')];
            }
            if (!empty($amt_withdraw)) {
                $btc = file_get_contents('https://blockchain.info/ticker');
                $rate = json_decode($btc)->USD->sell;

                $user_toupdate = User::where('id', auth()->user()->id)->first();
                $user_toupdate->update(['balance' => $user_toupdate->balance - $amt_withdraw]);
                CPS_Withdraw::create([
                    'user_id' => auth()->user()->id,
                    'slot_id' => null,
                    'amount' => $amt_withdraw - $amt_withdraw * 0.11,
                    'btc_rate' => $rate,
                    'coin_type' => __('cps_dashboard.Balance'),
                    'type' => 'withdraw',
                    'withdraw_status' => 0,
                ]);
                return ['error' => false, 'message' => __('cps_dashboard.Withdraw Request Submitted to Admin Successfully')];

            } else {
                return ['error' => true, 'message' => __('cps_dashboard.The Amount is Missing from Request.')];

            }

            /*$model=FundDetail::where('id',$id)
            ->update(['withdraw_status'=> $request->get('withdrawStatus'),
                    'withdraw_id'=> $request->get('withdrawId')]);*/

//            } elseif (!empty($request->get('id')) && $request->get('withdrawStatus')) {
//                $id = $request->get('id');
//
//                $model = FundDetail::where('id', $id)->update(['withdraw_status' => $request->get('withdrawStatus')]);
//                return ["error" => null, 'success' => '200'];
//            } else {
//                return ['error' => 409];
        }
    }

    public function giftList(Request $request)
    {

        $Gifts = Gift::where('created_by', auth()->user()->id)->with('Created_by')->get();
        return view('user.gift.list', compact('Gifts'));
    }

    public function giftform()
    {

        $code = bin2hex(random_bytes(16));
        return view('user.gift.gift_form', compact('code'));
    }

    public function giftStore(Request $request)
    {
        $this->validate($request, [
            'cps_qty' => 'required|integer',
            'gift_code' => 'required|min:1|max:32',
        ]);
        if (auth()->user()->balance >= $request->cps_qty * 150) {
            $check = Gift::where('gift_code', $request->get('gift_code'))->first();

            if (!empty($check)) {
                return redirect()->route('users.gift.form')->with(['message' => "Try Again Somethings Wrong!", 'type' => 'warning']);
            } else {

                $btc = file_get_contents('https://blockchain.info/ticker');
                $rate = json_decode($btc)->USD->sell;
                $request->merge(['btc_rate' => $rate, 'gift_type' => 'user']);
                $request->merge(['created_by' => auth()->user()->id]);
                $request->merge(['amount' => $request->cps_qty * 150]);

                $post = $request->all();


                /*echo "<pre>";
                print_r($post);exit;*/
                $create = Gift::create($post);
                $user = User::where("id", auth()->user()->id)->first();
                $user->update(['balance' => $user->balance - $request->cps_qty * 150]);

//            activity('Gift Created')
//                ->causedBy(auth()->user())
////                    ->performedOn($user)
//                ->withProperties($request->except('_token', "created_by"))
//                ->log('Gift code added');
                return redirect()->route('users.gift.list')->with(['message' => __('cps_dashboard.Your voucher is Created Successfully!'), 'type' => 'success']);


            }
        } else {
            return redirect()->route('users.gift.form')->with(['message' => __('cps_dashboard.You Account Balance is less then Your Total!'), 'type' => 'warning']);

        }


    }

    public function withDrawAjax(Request $request)
    {
        if ($request->ajax()) {

            $source_slot_id = $request->get('source_slot_id');
            $slot = Slot::where('id', $source_slot_id)->first();

            if ($slot->balance < 30) {
                return ['error' => true, 'message' => __('cps_dashboard.Your Balance is less then the min Limit so this Request is Rejected.')];
            }
            if (!empty($request->get('source_slot_id'))) {
                $btc = file_get_contents('https://blockchain.info/ticker');
                $rate = json_decode($btc)->USD->sell;
                $slot->update(['status' => 0]);
                CPS_Withdraw::create([
                    'user_id' => auth()->user()->id,
                    'slot_id' => $source_slot_id,
                    'amount' => $slot->balance - $slot->balance * 0.11,
                    'btc_rate' => $rate,
                    'coin_type' => __('cps_dashboard.Complete CPS Slot'),
                    'type' => 'withdraw',
                    'withdraw_status' => 0,
                ]);
                return ['error' => false, 'message' => __('cps_dashboard.Withdraw Request Submitted to Admin Successfully')];

            } else {
                return ['error' => true, 'message' => __('cps_dashboard.The slot ID is not found.')];

            }


        }
    }

    function withdrawList(Request $request)
    {

        $Withdraws = CPS_Withdraw::where('user_id', auth()->user()->id)->get();

        return view('user.withdraw.list', compact('Withdraws'));
    }


    public function myPackages()
    {
        $packages = SlotPackageSubscribe::where('user_id', auth()->user()->id)->with('user', 'packages')->get();

        return view('user.CPS.my_packages', compact('packages'));


    }

    public function packages_List()
    {

        $is_allowed = 1;
        $packages = SlotPackages::where('status', 1)->get();

//        $is_allowed_model =  FundDetails::where('user_id',auth()->user()->id)->where('stats','!=',1)->exists();
//        if($is_allowed_model){
//            $is_allowed=0;
//        }
//        dd($is_allowed_model,$is_allowed);
        $gn_setting =GeneralSettings::first();

        return view('user.CPS.packages_list', compact('gn_setting','packages'), compact('is_allowed'));

    }

    public function Subscribe_Package(Request $request)
    {
        $package = SlotPackages::where('id', $request->package_id)->first();


        if (!empty($request->package_id)) {

            $id = $request->get('package_id');
            $time_deposited = date('Y-m-d');
//
            $user_id = auth()->user()->id;
            $pack = SlotPackages::where('id', $id)->first();

            $now = Carbon::now();
            $ad_days = $now->addDays($pack->valid_for_days);
//                dd($ad_days, $fund->user_id);
            $user_model = User::where('id', $user_id)->first();

            if (!empty($user_model->balance >= $package->amount)) {
                $user_model->update(['balance' => $user_model->balance - $package->amount]);

                SlotPackageSubscribe::create([
                    'user_id' => $user_id,
                    'package_id' => $package->id,
                    'expired_at' => $ad_days,
                    'status' => 1,
                    'reaming_slots' => $package->allowed_slots,
                    'amount' => $package->amount,
                    'buy_with' => 'Balance',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
                return redirect()->route('user.packages_list')->with(['success' => __('cps_dashboard.Package Subscribed Successfully!')]);

            } else {
                return redirect()->route('user.packages_list')->with(['warning' => 'Your Balance is Low.']);
            }

//                $new_balanc = $userthis->balance + $fund->amount;
//
//                User::where('id', $fund->user_id)->update([ 'balance' => $new_balanc]);

//                $balance = User::select('remain_balance')->where('id', $u_id->u_id)->first();
//                $total = $balance->remain_balance + $u_id->amount;


//                $update_balance = User::where('id', $u_id->u_id)->update(['remain_balance' => $total]);
//            return ["error" => null, 'success' => '200'];
//        } elseif (!empty($request->get('id')) && $request->get('deposite') == 'doPending') {
//            $id = $request->get('id');
//
//            $model = FundDetails::where('id', $id)->update(['stats' => 2]);
//            return ["error" => null, 'success' => '200'];
//        } else {
//            return ['error' => 409];
//        }
        }


//        if (auth()->user()->balance - $package->amount) {
//
//        }
//        SlotPackageSubscribe::insertGetId(
//            [
//
//                'user_id' => auth()->user()->id,
//                'package_id' => $request->package_id,
//                'amount' => $request->amount,
//                'buy_with' => 'Balance',
//                'expired_at' => auth()->user()->name,
//                'payment_method' => $request->payment_method,
//                'status' => 1,
//                'created_at' => date('Y-m-d H:i:s'),
//                'updated_at' => date('Y-m-d H:i:s')
//            ]
//        );
//
//        return response()->json([
//            'message' => 'Your Package Subscription Request is Submitted With Prof Successfully.It may take 3 Working Days!  Please Wait for Admin Response! '
//
//        ]);
    }


}
