<?php

namespace App\Http\Controllers;

use App\Repositories\Photo\PhotoRepository;
use App\Services\CategoryService;
use App\Services\PhotoService;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    protected $categoryService;
    protected $photoService;

    /**
     * HomeController constructor.
     * @param PhotoService $photoService
     * @param CategoryService $categoryService
     */
    public function __construct(PhotoService $photoService , CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
        $this->photoService = $photoService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = $this->photoService->all();
        $categories = $this->categoryService->all();
        return view('home')->with(['photos' => $photos , 'categories' => $categories ]);
    }
}
