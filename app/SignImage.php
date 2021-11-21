<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SignImage extends Model
{
    protected $guarded = ['id'];

    public function schedule()
    {
        return $this->morphMany(Schedule::class, 'schedules_id','id');

    }
}
