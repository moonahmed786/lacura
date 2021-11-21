<?php

namespace App\Http\Controllers;

use App\CPS_Withdraw;
use App\Gift;
use App\Slot;
use App\Withdraw;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GiftCodeController extends Controller
{
    public function giftList(Request $request)
    {
        $page_title = __('cps_dashboard.Gift Codes List');
        $Gifts = Gift::where('created_by', auth()->user()->id)->get();
        return view('admin.gift_code.list',compact('Gifts','page_title'));

    }
    public function getGiftCode()
    {
        $hash = bin2hex(random_bytes(16));
        /*$bytes = openssl_random_pseudo_bytes(32);
        $hash = bin2hex($bytes);*/

        /* echo serialize($hash);
         exit;*/
        return ["error" => null, 'code' => $hash];
    }
    public function giftStore(Request $request)
    {
//dd($request->all());
        $check = Gift::where('gift_code', $request->get('gift_code'))->first();


        if (!empty($check)) {
            return redirect()->route('admin.gift.add');
        } else {

            $btc = file_get_contents('https://blockchain.info/ticker');
            $rate = json_decode($btc)->USD->sell;

            $request->merge(['btc_rate' => $rate,'gift_type'=>'admin','amount'=>$request->get('count')*150]);
            $request->merge(['created_by' => auth()->user()->id]);

            $post = $request->all();


            /*echo "<pre>";
            print_r($post);exit;*/
            $create = Gift::create($post);
            $notification = array(
                'message' => __('cps_dashboard.Gift Created Successfully!'),
                'alert-type' => 'success',
                'heading' => __('cps_dashboard.Succeeded'),
            );
//            activity('Gift Created')
//                ->causedBy(auth()->user())
////                    ->performedOn($user)
//                ->withProperties($request->except('_token', "created_by"))
//                ->log('Gift code added');
            return $notification;

        }
    }
    public function getGiftCodeStatus(Request $request)
    {
        if (!empty($request->get('gift_code'))) {
            $giftcode = Gift::where('gift_code', $request->get('gift_code'))->where('status', 0)->first();
            if (!empty($giftcode)) {
                return ["error" => null, 'message' => __('cps_dashboard.Voucher is Valid Please Click to Confirm to use it'), 'voucher_balance' => $giftcode->amount, 'voucher_cps' => $giftcode->amount / 150];
            } else {
                return ["error" => true, 'message' => __('cps_dashboard.Invalid Voucher or Used By an other User')];

            }

        } else {
            return ["error" => true, 'message' => __('cps_dashboard.Please Put a Voucher Code or Enter a Valid Value')];

        }

    }
    public function slotBalanceGift(Request $request)
    {
//dd($request->all());
        $check = Gift::where('gift_code', $request->get('gift_code'))->first();
        $input_slots = $request->get('input_slots');
        $source_slot_id = $request->get('source_slot_id');
        $slot_check = Slot::where('id', $source_slot_id)->first();

        if ($slot_check->balance >= $input_slots * 150) {
            if (!empty($check)) {
                return redirect()->route('users.gift.list');
            } else {
                $newb = $slot_check->balance - $input_slots * 150;

                $slot_check->update(['balance' => $newb ,'status'=>($newb==0)?0:1]);

                $btc = file_get_contents('https://blockchain.info/ticker');
                $rate = json_decode($btc)->USD->sell;


                /*echo "<pre>";
                print_r($post);exit;*/
                $create = Gift::insertGetId([
                    'created_by' => auth()->user()->id,
                    'amount' => $input_slots * 150,
                    'slot_id' => $source_slot_id,
                    'gift_code' => $request->get('gift_code'),
                    'btc_rate' => $rate,
                    'gift_type' => 'Slot Balance',
                    'status' => 0,
                ]);
                CPS_Withdraw::create([

                    'user_id' => auth()->user()->id,
                    'slot_id' => $source_slot_id,
                    'amount' => $input_slots * 150,
                    'btc_rate' => $rate,
                    'coin_type' => 'Slot Balance',
                    'type' => 'cps',
                    'gift_id' => $create,
                    'withdraw_status' => 1,
                    'approved_by' => auth()->user()->id,
                    'withdraw_approved_time' => Carbon::now(),
                ]);
                return ['error' => false, 'message' => __('cps_dashboard.Voucher Is  Created Successfully!')];

            }
        } else {
            return ['error' => true, 'message' => __('cps_dashboard.Your Slot Balance is Less then your total amount!')];
        }

    }


}
