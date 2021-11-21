<?php

namespace App\Http\Controllers;

use App\Admin;
use App\GeneralSettings;
use App\Invest;
use App\Plan;
use App\Schedule;
use App\ScheduleCity;
use App\TimeSetting;
use App\Transection;
use App\UserQuestionnaire;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use function GuzzleHttp\json_encode;

class ScheduleController extends Controller
{
    public function getSchedule(Request $request)
    {
//dd($request->all());
        $validation_rule = [
            'date' => 'required|date',
        ];
        $validator = \Validator::make($request->all(), $validation_rule);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $date = \Carbon\Carbon::parse($request->date);
        $reserve_time = Schedule::where('status', '!=', 0)->where('date', $date)->get();


        return response()->json(['success' => $request->date, 'reserve_time' => json_encode($reserve_time)]);
    }

    public function storeSchedule(Request $request)
    {

        $validation_rule = [
            'date' => 'required|date|after:yesterday',
            'time' => 'required|integer|min:8|max:18',
            'plan' => 'required|integer',
            'amount' => 'required|numeric|min:0',
            'wallet_type' => 'required|integer',
            'city' => 'required',
        ];
        $validator = \Validator::make($request->all(), $validation_rule);

        if ($validator->fails()) {
            return redirect()->route('front.schedule')->withErrors($validator->errors());
        }
//        dd($request->all());
        $plan = Plan::findOrFail($request->plan);
        $amount = 0;
        $user_balance = 0;
        $wallet_name = '';
        if ($plan->fixed_amount == 0) {
            if ($request->amount == 0) return redirect()->route('front.schedule')->withErrors(['Please provide your amount for ' . $plan->name]);
            else if ($request->amount < $plan->minimum || $request->amount > $plan->maximum) return redirect()->route('front.schedule')->withErrors(['Please follow the range for ' . $plan->name]);
            $amount = $request->amount;
        } else {
            $amount = $plan->fixed_amount;
        }

        if (!\Auth::check()) {
            $request->session()->put('reservation', $request->all());
            return redirect('/register')->withErrors(['Please register / login first for reservation.']);
        }

        // save schedule
        $user = \Auth::user();
        $gen = GeneralSettings::first();

        $amount += $gen->schedule_price;

        if ($request->wallet_type == 1) {
            $user_balance = \Auth::user()->balance;
            $wallet_name = $gen->deposit_wallet_name;
        } else {
            $user_balance = \Auth::user()->interest_balance;
            $wallet_name = $gen->interest_wallet_name;
        }
        if ($user_balance < $amount) {

            $user = auth()->user();
            $lang = $request->lang;

//            if ($request->amount <= 0) {

                if ($user->lang == 'ja') {
                    return redirect()->route('front.schedule')->with([
                        'alertSchedule' => 'キャッシュバック' . $gen->currency_sym . $amount . ' 残高不足しています。 '
                    ]);
                }

                if ($user->lang == 'pt-br') {
                    return redirect()->route('front.schedule')->with([
                        'alertSchedule' => 'Você não tem ' . $gen->currency_sym . $amount . ' de saldo em sua carteira.'
                    ]);
                }

//            }


        }

        $ScheduleCity =ScheduleCity::where('image',$request->city)->first();
        $admin_token = md5(microtime() . rand());
        $date = \Carbon\Carbon::parse($request->date);
        if (Schedule::where('status', '!=', 0)->where('date', $date)->where('time', $request->time)->count() == 0) {
            $schedule = new Schedule([
                'date' => $date,
                'time' => $request->time,
                'charge' => $gen->schedule_price,
                'location' =>$ScheduleCity->city_name_ja,
                'admin_token' => $admin_token,
                'user_query_id' => $request->user_query_id,
                'status' => 1,
            ]);

            if ($request->wallet_type == 1) {
                $user->update(['balance' => $user->balance - $amount]);
            } else {
                $user->update(['interest_balance' => $user->interest_balance - $amount]);
            }
            Transection::create([
                'trxid' => 'TRX-' . rand(1000, 9999),
                'user_id' => $user->id,
                'des' => 'Invested On ' . $plan->name,
                'amount' => '-' . $amount,
                'balance' => round($user_balance, 4)
            ]);
            $invest = $this->buyPlan($request);
            $schedule->invest_id = $invest->id;
            $user->schedules()->save($schedule);

            $pendingQuery = UserQuestionnaire::where('id', $request->user_query_id)->first();
            $pendingQuery->update(['schedule_id'=>$schedule->id, 'status'=>1]);
        } else {
            return redirect()->route('front.schedule')->with(['alert' => 'This schedule has been already booked.']);
        }

        // Send confirmation email to admin & user
        $message = 'Your schedule has been reserved.Schedule charge <b>' . $gen->currency . ' ' . $schedule->charge . '</b> has been deducted from your balance.<br>';
        $message .= 'Date: <b>' . \Carbon\Carbon::parse($schedule->date)->format('M d, Y') . '</b><br>';
        $message .= 'Time: <b>' . $schedule->time . ':00 - ' . bcadd($schedule->time, 1) . ':00</b><br>';
        $message .= ' You will get update for this schedule in every 15 minute, You may change your schedule from <b>Your Schedule</b> La Cura is not partnered with any other company or person. We work as a team and do not have any reseller, distributor or partner!panel.<br>';
        $message .= '<small>* Admin has all right to change schedule or cancel.<small>';
        if ($user->lang == 'en') {
            send_email($user->email, $user->name, 'Schedule Confirmation', $message);
        } else {
            $data['charge'] = $gen->currency . ' ' . $schedule->charge;
            $data['date'] = \Carbon\Carbon::parse($schedule->date)->format('M d, Y');
            $data['time'] = $schedule->time . ':00 - ' . bcadd($schedule->time, 1) . ':00';
            send_email_lang($user->email, $user->name, $data, 'SCONFIRM', $user->lang);
        }
        send_sms($user->mobile, $message);

        $message = 'Schedule Reservation from ' . $user->name . '. Schedule charge <b>' . $gen->currency . ' ' . $schedule->charge . '</b> has been deducted from user balance.<br>';
        $message .= 'Date: <b>' . \Carbon\Carbon::parse($schedule->date)->format('M d, Y') . '</b><br>';
        $message .= 'Time: <b>' . $schedule->time . ':00 - ' . bcadd($schedule->time, 1) . ':00</b><br>';
        $message .= 'You and user will get update for this schedule in every 15 minute. You has all right to change schedule or cancel.';
        $message .= '<br><a href="https://lacura.me/confirm/schedual/' . $schedule->id . '/' . $admin_token . '" style="background-color:#2ecc71;padding:10px 0;margin:10px;display:inline-block;width:100px;text-transform:uppercase;text-decoration:none;color:#ffff;font-weight:600;border-radius:4px;text-align:center;font-size:15px" target="_blank">click to Confirm the Interest cycle</a>';
        $admin = Admin::first();
        if ($gen->lang == 'en') {
            send_email($gen->schedule_email, $admin->name, 'Schedule Confirmation', $message);
        } else {
            $data['charge'] = $gen->currency . ' ' . $schedule->charge;
            $data['date'] = \Carbon\Carbon::parse($schedule->date)->format('M d, Y');
            $data['time'] = $schedule->time . ':00 - ' . bcadd($schedule->time, 1) . ':00';
            $data['user'] = $user->username;
            $data['confirm'] = '<br><a href="https://lacura.me/confirm/schedual/' . $schedule->id . '/'. $admin_token.'" style="background-color:#2ecc71;padding:10px 0;margin:10px;display:inline-block;width:100px;text-transform:uppercase;text-decoration:none;color:#ffff;font-weight:600;border-radius:4px;text-align:center;font-size:15px" target="_blank">click to Confirm the Interest cycle</a>';
            send_email_lang($gen->schedule_email, $admin->name, $data, 'SCONFIRMADMIN', $gen->lang, '', true);
        }
        send_sms($admin->mobile, $message);

        session()->forget('reservation');
        return redirect()->route('front.schedule.list')->withSuccess(__('schedules.Your schedule has been reserved'));

//        return redirect()->route('front.schedule')->withSuccess('Your schedule has been reserved.');

    }

    public function storeScheduleSubmit()
    {
        if (!\Auth::check()) {
            return redirect('/register')->withErrors(['Please register / login first for reservation.']);
        }
        if (\Session::has('reservation')) {
            return $this->storeSchedule(new Request(\Session::get('reservation')));
        }
        return redirect()->route('/')->withErrors(['Something went wrong.']);
    }

    public function cancelSchedule(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }
        $this->validate($request, ['id' => 'required|integer', 'remark' => 'required']);
        $schedule = Schedule::findOrFail($request->id);
        $user = \Auth::user();
        if ($user->id != $schedule->scheduler->id) {
            return back()->withErrors(['You cannot modify this schedule']);
        }
        $schedule->update(['status' => '0', 'remark' => $request->remark]);

        $gen = GeneralSettings::first();

        // Send cancelation email to user
        $user->update(['balance' => $user->balance + $schedule->charge]);

        if (Auth::user()->lang)
            $message = 'Your have canceled a schedule.Schedule charge <b>' . $gen->currency . ' ' . $schedule->charge . '</b> has been refunded to your balance.<br>';
        $message .= 'Date: <b>' . \Carbon\Carbon::parse($schedule->date)->format('M d, Y') . '</b><br>';
        $message .= 'Time: <b>' . $schedule->time . ':00 - ' . bcadd($schedule->time, 1) . ':00</b><br>';
        $message .= 'Reason: <blockquote>' . $schedule->remark . '</blockquote>';
        if ($user->lang == 'en') {
            send_email($user->email, $user->name, 'Schedule Cancelation', $message);
        } else {
            $data['charge'] = $gen->currency . ' ' . $schedule->charge;
            $data['date'] = \Carbon\Carbon::parse($schedule->date)->format('M d, Y');
            $data['time'] = $schedule->time . ':00 - ' . bcadd($schedule->time, 1) . ':00';
            $data['message'] = $schedule->remark;
            send_email_lang($user->email, $user->name, $data, 'SCANCEL', $user->lang);
        }
        send_sms($user->mobile, $message);

        $message = 'Schedule Reservation from <b>' . $user->name . '</b> has been canceled by user. User will get <b>' . $gen->currency . ' ' . $schedule->charge . '</b> refunded.<br>';
        $message .= 'Date: <b>' . \Carbon\Carbon::parse($schedule->date)->format('M d, Y') . '</b><br>';
        $message .= 'Time: <b>' . $schedule->time . ':00 - ' . bcadd($schedule->time, 1) . ':00</b><br>';
        $message .= 'Reason: <blockquote>' . $schedule->remark . '</blockquote>';

        $admin = Admin::first();
        if ($gen->lang == 'en') {
            send_email($gen->schedule_email, $admin->name, 'Schedule Cancelation by User', $message);
        } else {
            $data['charge'] = $gen->currency . ' ' . $schedule->charge;
            $data['date'] = \Carbon\Carbon::parse($schedule->date)->format('M d, Y');
            $data['time'] = $schedule->time . ':00 - ' . bcadd($schedule->time, 1) . ':00';
            $data['user'] = $user->username;
            $data['message'] = $schedule->remark;
            send_email_lang($gen->schedule_email, $admin->name, $data, 'SCANCELADMIN', $gen->lang);
        }
        send_sms($admin->mobile, $message);
        return redirect()->route('schedule.index')->withSuccess('Schedule has been canceled.');
    }

    protected function buyPlan(Request $request)
    {
        $gnl = GeneralSettings::first();
        $plan = Plan::find($request->plan);
        $time_name = TimeSetting::where('time', $plan->times)->first();
        $now = Carbon::now();
        $user = \Auth::user();
        //start
        if ($plan->interest_status == 1) {
            $interest_amount = ($plan->fixed_amount * $plan->interest) / 100;
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
            $data['user_id'] = $user->id;
            $data['plan_id'] = $plan->id;
            $data['amount'] = $request->amount;
            $data['interest'] = $interest_amount;
            $data['period'] = $period;
            $data['time_name'] = $time_name->name;
            $data['hours'] = $plan->times;
            $data['next_time'] = Carbon::parse($now)->addHours($plan->times);
            $data['status'] = 9; // hold for admin confirmation from schedule module
            $data['capital_status'] = $plan->capital_back_status;


            levelCommision($user->id, $request->amount);
        } else {
            $data['user_id'] = $user->id;
            $data['plan_id'] = $plan->id;
            $data['amount'] = $plan->fixed_amount;
            $data['interest'] = $interest_amount;
            $data['period'] = $period;
            $data['time_name'] = $time_name->name;
            $data['hours'] = $plan->times;
            $data['next_time'] = Carbon::parse($now)->addHours($plan->times);
            $data['status'] = 9; // hold for admin confirmation from schedule module
            $data['capital_status'] = $plan->capital_back_status;
            levelCommision($user->id, $data['amount']);
        }

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
        Session::flash('success', 'Package Purchased Successfully Complete');
        return $a;
    }

    public function scheduleCityStore(Request $request)
    {

        $cities = [];
        foreach ($request->key as $idx => $key) {
            if (!$key && !$request->value[$idx]) continue;
            else if (!$key || !$request->value[$idx]) return back()->withErrors(['Key value are required.']);
            $cities[$key] = $request->value[$idx];
        }

        $general = GeneralSettings::first();

        $general->update([
            'schedule_cities' => $cities,


        ]);
        return back()->withSuccess('Schedule cities has been updated.');
    }

    public function confirmShecdual($id, $token)
    {
//        dd($id, $token);
        $page_title = 'Schedule Confirm : ';
        $schedule = Schedule::findOrFail($id);
        if ($schedule->admin_token == $token) {
            $schedule->invest()->update([
                'status' => 1
            ]);
            $message = 'Client schedule has been confirmed. client interest cycle has been started';
            return view('admin.confirShcedual', compact('page_title', 'message'));
        } else {
            $message = 'Client schedule has not been confirmed. schedule not found';
            return view('admin.confirShcedual', compact('page_title', 'message'));
        }

    }
}
