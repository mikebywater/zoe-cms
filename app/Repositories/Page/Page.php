<?php

namespace App\Repositories\Page;
use App\Repositories\Field\Field;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded = [];
    public function fields()
    {
        return $this->hasMany('App\Repositories\Field\Field');
    }

    public function field($name)
    {
        return Field::where('page_id' , $this->id)->where('name' , $name)->first();
    }
}