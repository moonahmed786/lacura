<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $guarded = ['id'];

    public function uploader()
    {
        return $this->morphTo();
    }

    public function items()
    {
        return $this->hasMany(AlbumItem::class);
    }
}
