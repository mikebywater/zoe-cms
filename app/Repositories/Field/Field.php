<?php


namespace App\Repositories\Field;


use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $guarded = [];

    public function scopePage($query , $page_id)
    {
        return $query->where('page_id' , $page_id);
    }

    public function scopeName($query , $name)
    {
        return $query->where('name' , $name);
    }
}