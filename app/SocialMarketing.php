<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialMarketing extends Model
{
    protected $guarded = ['id'];

    public function services()
    {
        return $this->hasMany(SocialMarketingService::class, 'package_id');
    }
}
