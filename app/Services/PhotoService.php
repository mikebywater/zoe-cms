<?php

namespace App\Services;

use App\Repositories\Photo\PhotoRepository;

class PhotoService
{
    public function __construct(PhotoRepository $photoRepository)
    {
        $this->photoRepository = $photoRepository;
    }

    /**
     * Get all photos from the repo
     */
    public function all()
    {
        return $this->photoRepository->all();
    }

    /**
     * Upload a file and its associated meta data
     *
     * @param $file
     * @param $data
     */
    public function upload($file, $data)
    {
        // Store the photo to disk
        $data['url'] = 'https://i.pinimg.com/736x/67/c4/8e/67c48e715f250ca5d0d4d634590ef093--beauty-makeup-hair-beauty.jpg';
        unset($data['photo']);
        $this->photoRepository->create($data);
    }

    /**
     * Delete a photo from disk and remove its metadata
     *
     * @param $id
     */
    public function delete($id)
    {

    }


}