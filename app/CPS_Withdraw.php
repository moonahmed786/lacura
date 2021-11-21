<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CPS_Withdraw extends Model
{
    protected $table = 'CPS_withdraws';
    protected $fillable = [
        'user_id',
        'slot_id',
        'amount',
        'btc_rate',
        'coin_type',
        'type',
        'gift_id',
        'withdraw_status',
        'approved_by',
        'withdraw_approved_time',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
