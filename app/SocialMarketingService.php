<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialMarketingService extends Model
{
    protected $guarded = ['id'];

    public function package()
    {
        return $this->belongsTo(SocialMarketing::class, 'package_id');
    }

    public function subscribers()
    {
        return $this->belongsToMany(User::class, 'user_social_marketing_services', 'user_id', 'service_id')->withPivot('unit', 'price', 'completed', 'status')->withTimestamps();
    }
}
