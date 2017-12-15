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

    public function increment($id)
    {
        $photo = $this->model->find($id);
        $rank = $photo->rank;
        if($rank != $this->getHighestRank()) {
            $photo2 = $this->model->where('rank', $rank + 1)->first();
            $photo->increment('rank');
            $photo2->decrement('rank');
        }
        return $photo;

    }

    public function decrement($id)
    {
        $photo = $this->model->find($id);
        $rank = $photo->rank;
        if($rank != 1){
            $photo2 = $this->model->where('rank' , $rank - 1)->first();
            $photo->decrement('rank');
            $photo2->increment('rank');
        }
        return $photo;
    }

    public function incrementLowerRank($rank)
    {
        return $this->model->where('rank', '<', $rank)->increment('rank');
    }
}