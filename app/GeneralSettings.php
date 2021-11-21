<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralSettings extends Model
{
    protected $table = 'basic_settings';
    protected $guarded = ['id'];
    protected $casts = ['about_map' => 'object', 'schedule_cities' => 'object'];
}
