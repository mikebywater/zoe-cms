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

        // Write to the photo repository
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