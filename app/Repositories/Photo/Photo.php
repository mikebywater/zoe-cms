<?php

namespace App\Repositories\Photo;


use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo('App\Repositories\Category\Category');
    }
}