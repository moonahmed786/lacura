<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlotDeposit extends Model
{
    //    protected $guarded= ['id'];
    protected $fillable = [
        'deposit_time',
        'deposit_by_user',
        'type',
        'transactions_id',
        'slot_id',
        'is_gift',
        'gift_id',
        'receiver_user_id',
        'amount',
        'status'
    ];

    public function ReceiverUser()
    {
        return $this->belongsTo(User::class, 'receiver_user_id', 'id');
    }
    public function Deposit_by_user()
    {
        return $this->belongsTo(User::class, 'deposit_by_user', 'id');
    }
}
