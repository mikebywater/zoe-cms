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

    public function create()
    {
        return view('admin.photos.upload');
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

    public function store(Request $request)
    {
        $this->service->upload($request->file('photo') , $request->all());
        return redirect('/admin/photos');
    }

}
