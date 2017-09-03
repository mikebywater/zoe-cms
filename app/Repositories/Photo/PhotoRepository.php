<?php

namespace App\Repositories\Photo;

use App\Repositories\Repository;

class PhotoRepository extends Repository
{
    public function __construct()
    {
        $this->model = new Photo();
    }
}