<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    protected $guarded = ['id'];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function blog()
    {
        return $this->belongsTo(Miniblog::class,'blog_id','id');
    }
}
