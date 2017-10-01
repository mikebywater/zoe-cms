<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use App\Services\PhotoService;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    protected $photoService;
    protected $categoryService;

    public function __construct(PhotoService $photoService, CategoryService $categoryService)
    {
        $this->photoService = $photoService;
        $this->categoryService = $categoryService;
    }

    public function create()
    {
        $categories = $this->categoryService->all();
        return view('admin.photos.upload')->with(['categories' => $categories]);
    }

    public function index()
    {
        $photos = $this->photoService->all();
        return view('admin.photos.index')->with(['photos' => $photos]);
    }

    public function show()
    {
        return "This will be an individual photo";
    }

    public function store(Request $request)
    {
        $this->photoService->upload($request->file('photo'), $request->all());
        return redirect('/admin/photos');
    }

    public function destroy($id)
    {
        $this->photoService->delete($id);
        return redirect('/admin/photos');
    }

}
