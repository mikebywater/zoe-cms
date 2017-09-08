<?php

namespace App\Repositories\Page;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function fields()
    {
        return $this->hasMany('App\Repositories\Field\Field');
    }
}