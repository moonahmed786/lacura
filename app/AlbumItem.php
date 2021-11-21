<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlbumItem extends Model
{
    protected $guarded = ['id'];


    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function uploader()
    {
        return $this->morphTo();
    }
}
