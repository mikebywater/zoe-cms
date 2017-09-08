<?php


namespace App\Repositories\Page;


use App\Repositories\Repository;

class PageRepository extends Repository
{
    /**
     * PageRepository constructor.
     */
    public function __construct()
    {
        $this->model = new Page;
    }



}