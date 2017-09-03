<?php

namespace App\Http\Controllers;

use App\Repositories\Photo\PhotoRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repo = new PhotoRepository();
        $photos = $repo->all();
        return view('home')->with(['photos' => $photos]);
    }
}
