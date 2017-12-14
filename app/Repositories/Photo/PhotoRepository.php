<?php

namespace App\Repositories\Photo;

use App\Repositories\Repository;

class PhotoRepository extends Repository
{
    public function __construct()
    {
        $this->model = new Photo();
    }

    public function getHighestRank()
    {
        return $this->model->max('rank');
    }

    public function top100()
    {
        return $this->model->orderBy('rank', 'asc')->take(100)->get();
    }

    public function decrementHigherRank($rank)
    {
        return $this->model->where('rank', '>' , $rank)->decrement('rank');
    }

    public function incrementLowerRank($rank)
    {
        return $this->model->where('rank', '<', $rank)->increment('rank');
    }
}