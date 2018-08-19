<?php

namespace App\Http\Controllers;

use App\Repositories\Photo\PhotoRepository;
use App\Services\CategoryService;
use App\Services\PageService;
use App\Services\PhotoService;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    protected $categoryService;
    protected $photoService;
    protected $pageService;

    /**
     * HomeController constructor.
     * @param PhotoService $photoService
     * @param CategoryService $categoryService
     * @param PageService $pageService
     */
    public function __construct(PhotoService $photoService , CategoryService $categoryService, PageService $pageService)
    {
        $this->categoryService = $categoryService;
        $this->photoService = $photoService;
        $this->pageService = $pageService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery()
    {
        $photos = $this->photoService->all();
        $categories = $this->categoryService->all();
        $pages = $this->pageService->pages();
        return view('gallery')->with(['photos' => $photos , 'categories' => $categories , 'pages' => $pages ]);
    }

    public function index()
    {
        $categories = $this->categoryService->all();
        $pages = $this->pageService->pages();
        $posts = $this->pageService->articles()->take(3);
        return view('home')->with(['categories' => $categories , 'pages' => $pages, 'posts' => $posts ]);
    }
}
