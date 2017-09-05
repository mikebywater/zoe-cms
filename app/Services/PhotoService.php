<?php

namespace App\Services;

use App\Repositories\Photo\PhotoRepository;
use Storage;

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
        $imageFileName = time() . '.' . $file->getClientOriginalExtension();
        $s3 = Storage::disk('DO');
        $filePath = '/photos/' . $imageFileName;
        $content = file_get_contents($file);
        $s3->put($filePath, $content , 'public');

        // Write metadata to db
        $data['url'] = 'https://' . getenv('AWS_BUCKET') . '.nyc3.digitaloceanspaces.com' . $filePath;
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