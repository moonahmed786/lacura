<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CPSDeposit extends Model
{
    protected $table = 'CPS_deposits';
    protected $fillable = [
        'user_id' ,
        'btc_rate',
        'trans_id' ,
        'coin_type',
        'capital_type',
        'detail'  ,
        'type',
        'amount',
        'payment_gateway',
        'btc_amo',
        'btc_wallet',
        'usd_amo' ,
        'deposite_status' ,
        'withdraw_status',
        'charge',
    ];


    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function Slot()
    {
        return $this->hasOne(Slot::class,'deposits_id','id');
    }
}
