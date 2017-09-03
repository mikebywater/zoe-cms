<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        return "Photo list will be here";
    }

    public function show()
    {
        return "This will be an individual photo";
    }
}
