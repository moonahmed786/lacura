<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    protected $fillable = [
        'created_by',
        'amount',
        'used_by',
        'pool_id',
        'slot_id',
        'gift_code',
        'btc_rate',
        'source_slot_id',
        'gift_type',
        'status',
        'approved_at'
    ];

    public function Used_by()
    {
        return $this->belongsTo(User::class, 'used_by', 'id');
    }

    public function Created_by()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
