<?php

namespace App\Http\Controllers;

use App\Services\PhotoService;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function __construct(PhotoService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $photos = $this->service->all();
        return view('admin.photos.index')->with(['photos' => $photos]);
    }

    public function show()
    {
        return "This will be an individual photo";
    }
}
