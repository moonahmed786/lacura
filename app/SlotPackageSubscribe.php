<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlotPackageSubscribe extends Model
{
    protected $guarded = ['id'];

    public function user()
    {

        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function packages()
    {

        return $this->belongsTo(SlotPackages::class, 'package_id', 'id');
    }

}
