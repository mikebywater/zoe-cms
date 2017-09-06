<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(CategoryService $service)
    {
        $this->service = $service;
    }

    public function create()
    {
        return redirect('/admin/categories');
    }

    public function index()
    {
        $categories = $this->service->all();
        return view('admin.categories.index')->with(['categories' => $categories]);
    }

    public function show()
    {
        return "This will be an individual photo";
    }

    public function store(Request $request)
    {
        $this->service->create($request->all());
        return redirect('/admin/categories');
    }

    public function destroy($id)
    {
        $this->service->delete($id);
        return redirect('/admin/categories');
    }
}
