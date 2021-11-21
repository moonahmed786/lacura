<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstSlider extends Model
{
    protected $table='inst_sliders';
    protected $fillable =[
        'image_name',
        'alt_pt',
        'alt_jp',
        'lang',
        'temp',
        'title_pt',
        'title_jp',
        'batch_no',
        'status'
    ];

}
