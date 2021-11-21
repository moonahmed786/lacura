<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlotPackages extends Model
{
    protected $guarded = ['id'];

    public function package_user()
    {
        return $this->hasMany(SlotPackageSubscribe::class);
    }
}
