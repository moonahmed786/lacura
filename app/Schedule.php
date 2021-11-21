<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'date' => 'date:dd-mm-yy',
        'time' => 'time:h:i',
    ];


    public function scheduler()
    {
        return $this->morphTo();
    }

    public function schedulerUser()
    {
        return $this->belongsTo(User::class,'scheduler_id','id');
    }
    public function invest()
    {
        return $this->belongsTo(Invest::class);
    }
    public function sign_imges()
    {
        return $this->morphTo();
    }
}
