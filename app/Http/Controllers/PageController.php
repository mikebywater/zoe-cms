<?php

namespace App\Http\Controllers;

use App\Repositories\Field\Field;
use App\Services\PageService;
use Illuminate\Http\Request;

class PageController extends Controller
{

    protected $pageService;

    public function __construct(PageService $pageService)
    {
        $this->pageService = $pageService;
    }

    public function index()
    {
        $pages = $this->pageService->all();
        $templates = $this->pageService->templates();
        return view('admin.pages.index')->with(['pages' => $pages , 'templates' => $templates]);
    }

    /**
     * Actually render the page to the public
     * @param $name
     * @return $this
     */
    public function show($name)
    {
        $data = array();
        $page = $this->pageService->findByName($name);
        $pages = $this->pageService->all();
        $fields = $page->fields;
        foreach ($fields as $field) {
            $data[$field->name] = $field->value;
        }
        return view("templates.$page->template")->with(['pages' => $pages, 'fields' => (object)$data]);
    }

    /**
     * Edit form for a page where you can set the field values
     * @param $id
     */
    public function edit($id)
    {

    }

    /**
     * Update a page with field values
     * @param $id
     */
    public function update($id, Request $request)
    {

    }


    /**
     * Create a new page
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->pageService->create($request->all());
        return redirect('/admin/pages');
    }

    public function destroy($id)
    {
        $this->pageService->delete($id);
        return redirect('/admin/pages');
    }


}
