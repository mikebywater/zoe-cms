<?php


namespace App\Repositories\Field;


use App\Repositories\Repository;

class FieldRepository extends Repository
{
    public function __construct()
    {
        $this->model = new Field();
    }
}