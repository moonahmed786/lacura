<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function pin_user()
    {
        return $this->hasMany(Epin::class, 'id', 'user_id');
    }

    public function albums()
    {
        return $this->morphMany(Album::class, 'uploader');
    }

    public function album_items()
    {
        return $this->morphMany(AlbumItem::class, 'uploader');
    }

    public function referral_commission()
    {
        return $this->hasMany(ReferralCommission::class);
    }

    public function invests()
    {
        return $this->hasMany(Invest::class);
    }

    public function login_log()
    {
        return $this->hasMany(UserLogin::class);
    }

    public function schedules()
    {
        return $this->morphMany(Schedule::class, 'scheduler');
    }

    public function subscribed_services()
    {
        return $this->hasMany(SocialMarketingServiceSubscriber::class);
    }
    public function userSchedules()
    {
        return $this->hasMany(Schedule::class);
    }
    public function user_withdraws()
    {
        return $this->hasMany(CPS_Withdraw::class);
    }
    public function user_packages()
    {
        return $this->hasMany(SlotPackageSubscribe::class);
    }
    public static function slotUniqNumber()
    {


        do
        {
            $reference_link = substr(sha1(rand()), 0, 15);
            $check =  User::where('reference_link',$reference_link)->first();
            if(empty($check)){
                return $reference_link;
            }


        }while(!empty($check));

    }
}
