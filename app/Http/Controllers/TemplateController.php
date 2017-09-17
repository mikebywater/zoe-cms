<?php

namespace App\Http\Controllers;

use App\Repositories\Template\TemplateRepository;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function __construct(TemplateRepository $templateRepository)
    {
        $this->repo = $templateRepository;
    }

    public function index()
    {

        $templates = $this->repo->all();
        return view('admin.templates.index')->with(['templates' =>$templates]);
    }

    public function show($name)
    {

        $template = $this->repo->findByName($name);
        return view('admin.templates.show')->with(['template' =>$template]);
    }


}
