<?php

namespace App\Http\Controllers;

use App\Services\PageService;
use App\Services\ReviewService;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    protected $pageService;
    protected $reviewService;

    public function __construct(ReviewService $reviewService, PageService $pageService)
    {
        $this->reviewService = $reviewService;
        $this->pageService = $pageService;

    }

    public function index()
    {
        $reviews = $this->reviewService->all();
        $link = $this->reviewService->link();
        $pages = $this->pageService->all();
        return view('reviews.index')->with(['reviews' => $reviews , 'link' => $link, 'pages' => $pages]);
    }
}
