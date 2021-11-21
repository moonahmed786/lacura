<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialMarketingServiceSubscriber extends Model
{
    protected $guarded = ['id'];

    public function service()
    {
        return $this->belongsTo(SocialMarketingService::class, 'service_id');
    }

    public function subscriber()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
