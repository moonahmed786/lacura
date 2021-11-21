<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReferralCommission extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ref_user()
    {
        return $this->belongsTo(User::class, 'ref_id');
    }
}
