<?php

namespace App\Http\Controllers;

use App\Album;
use App\GeneralSettings;
use App\Invest;
use App\IpTrack;
use App\Link;
use App\Transection;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;
use App\Schedule;
use App\Slider;

class CronController extends Controller
{

    public function remove_albums()
    {
        $albums = Album::whereDate('created_at', '<', Carbon::today())->where('public', 9)->where('temp', '!=', null)->get();
        $path = 'assets/images/album/temp';
        foreach ($albums as $album) {
            if (is_dir($path . '/' . $album->temp)) {
                array_map('unlink', glob($path . '/' . $album->temp . '/*.*'));
                @rmdir($path . '/' . $album->temp);
            }
            $album->items()->delete();
            $album->delete();
        }
    }

    public function remove_sliders()
    {
        $slider_query = Slider::whereDate('created_at', '<', Carbon::today())->where('temp', '!=', null);
        $sliders = $slider_query->get()->groupBy('temp');
        $path = 'assets/images/slider/temp';
        foreach ($sliders as $key => $slider) {
            if (is_dir($path . '/' . $key)) {
                array_map('unlink', glob($path . '/' . $key . '/*.*'));
                @rmdir($path . '/' . $key);
            }
        }
        $slider_query->delete();
    }

    public function send_reminder()
    {
        $schedules = Schedule::where('status', 1)->whereDate('date', '>=', \Carbon\Carbon::today())->where('notified_at', '<', \Carbon\Carbon::now()->subMinutes(180)->toDateTimeString())->get();
        $gen = GeneralSettings::first();

        foreach ($schedules as $schedule) {

            $user = $schedule->scheduler;
            $message = 'Your schedule reminder from <b><q>Admin</q></b>.<br>';
            $message .= 'Date: <b>' . \Carbon\Carbon::parse($schedule->date)->format('M d, Y') . '</b><br>';
            $message .= 'Time: <b>' . $schedule->time . ':00 - ' . bcadd($schedule->time, 1) . ':00</b><br>';
            $message .= 'Message: <blockquote>' . $schedule->remark . '</blockquote>';

            if ($user->lang == 'en') {
                send_email($user->email, $user->name, 'Schedule Reminder by Admin', $message);
            } else {
                $data['date'] = \Carbon\Carbon::parse($schedule->date)->format('M d, Y');
                $data['time'] = $schedule->time . ':00 - ' . bcadd($schedule->time, 1) . ':00';
                $data['message'] = $schedule->remark;
                $data['charge'] = $schedule->charge . ' ' . $gen->currency;
                send_email_lang($user->email, $user->name, $data, 'SREMINDER', $user->lang);
                $schedule->update(['notified_at' => \Carbon\Carbon::now()]);
            }
        }
    }

    public function returnInterest()
    {
        $now = Carbon::now();
        $day1 = Carbon::now()->format( 'l' );
        echo $day1;
        
        echo "<br/>";
        
        if ( $day1 == "Monday" ) {

            echo "Segunda";

            $invest = Invest::whereStatus(1)->where('next_time', '<=', $now)->get();
            
            $gnl = GeneralSettings::first();
            foreach ($invest as $data) {
                $user = User::find($data->user_id);
                $next_time = Carbon::parse($now)->addHours($data->hours);

                $in = Invest::find($data->id);
                $in->return_rec_time = $data->return_rec_time + 1;
                $in->next_time = $next_time;
                $in->last_time = $now;
                $in->withdraw_amount = $in->withdraw_amount + $data->interest;

                if ($data->period == '-1') {
                    $in->status = 1;
                    $in->save();

                    $new_balance = $user->interest_balance + $data->interest;
                    $user->interest_balance = $new_balance;

                    Transection::create([
                        'trxid' => 'TRX-' . rand(1000, 9999) . uniqid(),
                        'user_id' => $user->id,
                        'des' => 'Interest Return ' . $data->interest . ' ' . $gnl->currency . ' Added on Your ' . $gnl->interest_wallet_name . ' Wallet',
                        'amount' => $data->interest,
                        'balance' => round($new_balance, 4)
                    ]);

                    $user->save();
                } else {

                    if ($data->capital_status == 1) {

                        if ($in->return_rec_time >= $data->period) {
                            $bonus = $data->interest + $data->amount;
                            $new_balance = $user->interest_balance + $bonus;
                            $user->interest_balance = $new_balance;
                            $in->status = 0;
                            $in->withdraw_amount = $in->withdraw_amount +  $data->interest + $data->amount;
                        } else {
                            $bonus = 0;
                            $new_balance = $user->interest_balance + $data->interest;
                            $user->interest_balance = $new_balance;
                            $in->status = 1;
                        }

                        $in->save();



                        if ($bonus != 0) {
                            Transection::create([
                                'trxid' => 'TRX-' . rand(1000, 9999) . uniqid(),
                                'user_id' => $user->id,
                                'des' => 'Interest Return ' . $data->interest . ' ' . $gnl->currency . ' Added on Your ' . $gnl->interest_wallet_name . ' Wallet',
                                'amount' => $data->interest,
                                'balance' => round($new_balance, 4)
                            ]);
                        } else {
                            Transection::create([
                                'trxid' => 'TRX-' . rand(1000, 9999) . uniqid(),
                                'user_id' => $user->id,
                                'des' => 'Interest & Capital Return ' . $bonus . ' ' . $gnl->currency . ' Added on Your ' . $gnl->interest_wallet_name . ' Wallet',
                                'amount' => $data->interest,
                                'balance' => round($new_balance, 4)
                            ]);
                        }


                        $user->save();
                    } else {

                        if ($in->return_rec_time >= $data->period) {
                            $in->status = 0;
                        } else {
                            $in->status = 1;
                        }

                        $in->save();

                        $new_balance = $user->interest_balance + $data->interest;
                        $user->interest_balance = $new_balance;

                        Transection::create([
                            'trxid' => 'TRX-' . rand(1000, 9999) . uniqid(),
                            'user_id' => $user->id,
                            'des' => 'Interest Return ' . $data->interest . ' ' . $gnl->currency . ' Added on Your ' . $gnl->interest_wallet_name . ' Wallet',
                            'amount' => $data->interest,
                            'balance' => round($new_balance, 4)
                        ]);

                        $user->save();
                    }
                }

                // // Check if invest is matured
                // $invest_time = Carbon::parse($in->created_at);
                // if ($invest_time->diffInHours() >= $in->hours) {
                //     $in->withdrawable = 1; // Matured invest
                // }

                // // Add interest to invest.withdraw_amount
                // $in->withdraw_amount = $new_balance;
                // $in->save();
            }



        }

        else if ( $day1 == "Tuesday" ) {


            $invest = Invest::whereStatus(1)->where('next_time', '<=', $now)->get();
            
            $gnl = GeneralSettings::first();
            foreach ($invest as $data) {
                $user = User::find($data->user_id);
                $next_time = Carbon::parse($now)->addHours($data->hours);

                $in = Invest::find($data->id);
                $in->return_rec_time = $data->return_rec_time + 1;
                $in->next_time = $next_time;
                $in->last_time = $now;
                $in->withdraw_amount = $in->withdraw_amount + $data->interest;

                if ($data->period == '-1') {
                    $in->status = 1;
                    $in->save();

                    $new_balance = $user->interest_balance + $data->interest;
                    $user->interest_balance = $new_balance;

                    Transection::create([
                        'trxid' => 'TRX-' . rand(1000, 9999) . uniqid(),
                        'user_id' => $user->id,
                        'des' => 'Interest Return ' . $data->interest . ' ' . $gnl->currency . ' Added on Your ' . $gnl->interest_wallet_name . ' Wallet',
                        'amount' => $data->interest,
                        'balance' => round($new_balance, 4)
                    ]);

                    $user->save();
                } else {

                    if ($data->capital_status == 1) {

                        if ($in->return_rec_time >= $data->period) {
                            $bonus = $data->interest + $data->amount;
                            $new_balance = $user->interest_balance + $bonus;
                            $user->interest_balance = $new_balance;
                            $in->status = 0;
                            $in->withdraw_amount = $in->withdraw_amount +  $data->interest + $data->amount;
                        } else {
                            $bonus = 0;
                            $new_balance = $user->interest_balance + $data->interest;
                            $user->interest_balance = $new_balance;
                            $in->status = 1;
                        }

                        $in->save();



                        if ($bonus != 0) {
                            Transection::create([
                                'trxid' => 'TRX-' . rand(1000, 9999) . uniqid(),
                                'user_id' => $user->id,
                                'des' => 'Interest Return ' . $data->interest . ' ' . $gnl->currency . ' Added on Your ' . $gnl->interest_wallet_name . ' Wallet',
                                'amount' => $data->interest,
                                'balance' => round($new_balance, 4)
                            ]);
                        } else {
                            Transection::create([
                                'trxid' => 'TRX-' . rand(1000, 9999) . uniqid(),
                                'user_id' => $user->id,
                                'des' => 'Interest & Capital Return ' . $bonus . ' ' . $gnl->currency . ' Added on Your ' . $gnl->interest_wallet_name . ' Wallet',
                                'amount' => $data->interest,
                                'balance' => round($new_balance, 4)
                            ]);
                        }


                        $user->save();
                    } else {

                        if ($in->return_rec_time >= $data->period) {
                            $in->status = 0;
                        } else {
                            $in->status = 1;
                        }

                        $in->save();

                        $new_balance = $user->interest_balance + $data->interest;
                        $user->interest_balance = $new_balance;

                        Transection::create([
                            'trxid' => 'TRX-' . rand(1000, 9999) . uniqid(),
                            'user_id' => $user->id,
                            'des' => 'Interest Return ' . $data->interest . ' ' . $gnl->currency . ' Added on Your ' . $gnl->interest_wallet_name . ' Wallet',
                            'amount' => $data->interest,
                            'balance' => round($new_balance, 4)
                        ]);

                        $user->save();
                    }
                }

                // // Check if invest is matured
                // $invest_time = Carbon::parse($in->created_at);
                // if ($invest_time->diffInHours() >= $in->hours) {
                //     $in->withdrawable = 1; // Matured invest
                // }

                // // Add interest to invest.withdraw_amount
                // $in->withdraw_amount = $new_balance;
                // $in->save();
            }



        }

        else if ( $day1 == "Wednesday" ) {

            echo "Quarta";

            $invest = Invest::whereStatus(1)->where('next_time', '<=', $now)->get();
            
            $gnl = GeneralSettings::first();
            foreach ($invest as $data) {
                $user = User::find($data->user_id);
                $next_time = Carbon::parse($now)->addHours($data->hours);

                $in = Invest::find($data->id);
                $in->return_rec_time = $data->return_rec_time + 1;
                $in->next_time = $next_time;
                $in->last_time = $now;
                $in->withdraw_amount = $in->withdraw_amount + $data->interest;

                if ($data->period == '-1') {
                    $in->status = 1;
                    $in->save();

                    $new_balance = $user->interest_balance + $data->interest;
                    $user->interest_balance = $new_balance;

                    Transection::create([
                        'trxid' => 'TRX-' . rand(1000, 9999) . uniqid(),
                        'user_id' => $user->id,
                        'des' => 'Interest Return ' . $data->interest . ' ' . $gnl->currency . ' Added on Your ' . $gnl->interest_wallet_name . ' Wallet',
                        'amount' => $data->interest,
                        'balance' => round($new_balance, 4)
                    ]);

                    $user->save();
                } else {

                    if ($data->capital_status == 1) {

                        if ($in->return_rec_time >= $data->period) {
                            $bonus = $data->interest + $data->amount;
                            $new_balance = $user->interest_balance + $bonus;
                            $user->interest_balance = $new_balance;
                            $in->status = 0;
                            $in->withdraw_amount = $in->withdraw_amount +  $data->interest + $data->amount;
                        } else {
                            $bonus = 0;
                            $new_balance = $user->interest_balance + $data->interest;
                            $user->interest_balance = $new_balance;
                            $in->status = 1;
                        }

                        $in->save();



                        if ($bonus != 0) {
                            Transection::create([
                                'trxid' => 'TRX-' . rand(1000, 9999) . uniqid(),
                                'user_id' => $user->id,
                                'des' => 'Interest Return ' . $data->interest . ' ' . $gnl->currency . ' Added on Your ' . $gnl->interest_wallet_name . ' Wallet',
                                'amount' => $data->interest,
                                'balance' => round($new_balance, 4)
                            ]);
                        } else {
                            Transection::create([
                                'trxid' => 'TRX-' . rand(1000, 9999) . uniqid(),
                                'user_id' => $user->id,
                                'des' => 'Interest & Capital Return ' . $bonus . ' ' . $gnl->currency . ' Added on Your ' . $gnl->interest_wallet_name . ' Wallet',
                                'amount' => $data->interest,
                                'balance' => round($new_balance, 4)
                            ]);
                        }


                        $user->save();
                    } else {

                        if ($in->return_rec_time >= $data->period) {
                            $in->status = 0;
                        } else {
                            $in->status = 1;
                        }

                        $in->save();

                        $new_balance = $user->interest_balance + $data->interest;
                        $user->interest_balance = $new_balance;

                        Transection::create([
                            'trxid' => 'TRX-' . rand(1000, 9999) . uniqid(),
                            'user_id' => $user->id,
                            'des' => 'Interest Return ' . $data->interest . ' ' . $gnl->currency . ' Added on Your ' . $gnl->interest_wallet_name . ' Wallet',
                            'amount' => $data->interest,
                            'balance' => round($new_balance, 4)
                        ]);

                        $user->save();
                    }
                }

                // // Check if invest is matured
                // $invest_time = Carbon::parse($in->created_at);
                // if ($invest_time->diffInHours() >= $in->hours) {
                //     $in->withdrawable = 1; // Matured invest
                // }

                // // Add interest to invest.withdraw_amount
                // $in->withdraw_amount = $new_balance;
                // $in->save();
            }



        }

        else if ( $day1 == "Thursday" ) {

            echo "Quinta";

            $invest = Invest::whereStatus(1)->where('next_time', '<=', $now)->get();
            
            $gnl = GeneralSettings::first();
            foreach ($invest as $data) {
                $user = User::find($data->user_id);
                $next_time = Carbon::parse($now)->addHours($data->hours);

                $in = Invest::find($data->id);
                $in->return_rec_time = $data->return_rec_time + 1;
                $in->next_time = $next_time;
                $in->last_time = $now;
                $in->withdraw_amount = $in->withdraw_amount + $data->interest;

                if ($data->period == '-1') {
                    $in->status = 1;
                    $in->save();

                    $new_balance = $user->interest_balance + $data->interest;
                    $user->interest_balance = $new_balance;

                    Transection::create([
                        'trxid' => 'TRX-' . rand(1000, 9999) . uniqid(),
                        'user_id' => $user->id,
                        'des' => 'Interest Return ' . $data->interest . ' ' . $gnl->currency . ' Added on Your ' . $gnl->interest_wallet_name . ' Wallet',
                        'amount' => $data->interest,
                        'balance' => round($new_balance, 4)
                    ]);

                    $user->save();
                } else {

                    if ($data->capital_status == 1) {

                        if ($in->return_rec_time >= $data->period) {
                            $bonus = $data->interest + $data->amount;
                            $new_balance = $user->interest_balance + $bonus;
                            $user->interest_balance = $new_balance;
                            $in->status = 0;
                            $in->withdraw_amount = $in->withdraw_amount +  $data->interest + $data->amount;
                        } else {
                            $bonus = 0;
                            $new_balance = $user->interest_balance + $data->interest;
                            $user->interest_balance = $new_balance;
                            $in->status = 1;
                        }

                        $in->save();



                        if ($bonus != 0) {
                            Transection::create([
                                'trxid' => 'TRX-' . rand(1000, 9999) . uniqid(),
                                'user_id' => $user->id,
                                'des' => 'Interest Return ' . $data->interest . ' ' . $gnl->currency . ' Added on Your ' . $gnl->interest_wallet_name . ' Wallet',
                                'amount' => $data->interest,
                                'balance' => round($new_balance, 4)
                            ]);
                        } else {
                            Transection::create([
                                'trxid' => 'TRX-' . rand(1000, 9999) . uniqid(),
                                'user_id' => $user->id,
                                'des' => 'Interest & Capital Return ' . $bonus . ' ' . $gnl->currency . ' Added on Your ' . $gnl->interest_wallet_name . ' Wallet',
                                'amount' => $data->interest,
                                'balance' => round($new_balance, 4)
                            ]);
                        }


                        $user->save();
                    } else {

                        if ($in->return_rec_time >= $data->period) {
                            $in->status = 0;
                        } else {
                            $in->status = 1;
                        }

                        $in->save();

                        $new_balance = $user->interest_balance + $data->interest;
                        $user->interest_balance = $new_balance;

                        Transection::create([
                            'trxid' => 'TRX-' . rand(1000, 9999) . uniqid(),
                            'user_id' => $user->id,
                            'des' => 'Interest Return ' . $data->interest . ' ' . $gnl->currency . ' Added on Your ' . $gnl->interest_wallet_name . ' Wallet',
                            'amount' => $data->interest,
                            'balance' => round($new_balance, 4)
                        ]);

                        $user->save();
                    }
                }

                // // Check if invest is matured
                // $invest_time = Carbon::parse($in->created_at);
                // if ($invest_time->diffInHours() >= $in->hours) {
                //     $in->withdrawable = 1; // Matured invest
                // }

                // // Add interest to invest.withdraw_amount
                // $in->withdraw_amount = $new_balance;
                // $in->save();
            }



        }       

        else if ( $day1 == "Friday" ) {

            echo "Sexta";


            $invest = Invest::whereStatus(1)->where('next_time', '<=', $now)->get();
            
            $gnl = GeneralSettings::first();
            foreach ($invest as $data) {
                $user = User::find($data->user_id);
                $next_time = Carbon::parse($now)->addHours($data->hours);

                $in = Invest::find($data->id);
                $in->return_rec_time = $data->return_rec_time + 1;
                $in->next_time = $next_time;
                $in->last_time = $now;
                $in->withdraw_amount = $in->withdraw_amount + $data->interest;

                if ($data->period == '-1') {
                    $in->status = 1;
                    $in->save();

                    $new_balance = $user->interest_balance + $data->interest;
                    $user->interest_balance = $new_balance;

                    Transection::create([
                        'trxid' => 'TRX-' . rand(1000, 9999) . uniqid(),
                        'user_id' => $user->id,
                        'des' => 'Interest Return ' . $data->interest . ' ' . $gnl->currency . ' Added on Your ' . $gnl->interest_wallet_name . ' Wallet',
                        'amount' => $data->interest,
                        'balance' => round($new_balance, 4)
                    ]);

                    $user->save();
                } else {

                    if ($data->capital_status == 1) {

                        if ($in->return_rec_time >= $data->period) {
                            $bonus = $data->interest + $data->amount;
                            $new_balance = $user->interest_balance + $bonus;
                            $user->interest_balance = $new_balance;
                            $in->status = 0;
                            $in->withdraw_amount = $in->withdraw_amount +  $data->interest + $data->amount;
                        } else {
                            $bonus = 0;
                            $new_balance = $user->interest_balance + $data->interest;
                            $user->interest_balance = $new_balance;
                            $in->status = 1;
                        }

                        $in->save();



                        if ($bonus != 0) {
                            Transection::create([
                                'trxid' => 'TRX-' . rand(1000, 9999) . uniqid(),
                                'user_id' => $user->id,
                                'des' => 'Interest Return ' . $data->interest . ' ' . $gnl->currency . ' Added on Your ' . $gnl->interest_wallet_name . ' Wallet',
                                'amount' => $data->interest,
                                'balance' => round($new_balance, 4)
                            ]);
                        } else {
                            Transection::create([
                                'trxid' => 'TRX-' . rand(1000, 9999) . uniqid(),
                                'user_id' => $user->id,
                                'des' => 'Interest & Capital Return ' . $bonus . ' ' . $gnl->currency . ' Added on Your ' . $gnl->interest_wallet_name . ' Wallet',
                                'amount' => $data->interest,
                                'balance' => round($new_balance, 4)
                            ]);
                        }


                        $user->save();
                    } else {

                        if ($in->return_rec_time >= $data->period) {
                            $in->status = 0;
                        } else {
                            $in->status = 1;
                        }

                        $in->save();

                        $new_balance = $user->interest_balance + $data->interest;
                        $user->interest_balance = $new_balance;

                        Transection::create([
                            'trxid' => 'TRX-' . rand(1000, 9999) . uniqid(),
                            'user_id' => $user->id,
                            'des' => 'Interest Return ' . $data->interest . ' ' . $gnl->currency . ' Added on Your ' . $gnl->interest_wallet_name . ' Wallet',
                            'amount' => $data->interest,
                            'balance' => round($new_balance, 4)
                        ]);

                        $user->save();
                    }
                }

                // // Check if invest is matured
                // $invest_time = Carbon::parse($in->created_at);
                // if ($invest_time->diffInHours() >= $in->hours) {
                //     $in->withdrawable = 1; // Matured invest
                // }

                // // Add interest to invest.withdraw_amount
                // $in->withdraw_amount = $new_balance;
                // $in->save();
            }



        }
        
        else if ( $day1 == "Saturday" ) {

            echo "Sábado";

        }        
        
        else {

            echo "Domingo";

        }        
        
        
        exit;


    }
}
