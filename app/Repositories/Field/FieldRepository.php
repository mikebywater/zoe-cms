<?php


namespace App\Repositories\Field;


use App\Repositories\Repository;

class FieldRepository extends Repository
{
    public function __construct()
    {
        $this->model = new Field();
    }

    public function findByPageAndName($page_id , $name)
    {
        return $this->model->page($page_id)->name($name)->first();
    }
}