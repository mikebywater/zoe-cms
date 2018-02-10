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
        $pages = $this->pageService->pages();
        $fields = $page->fields;
        foreach ($fields as $field) {
            $data[$field->name] = $field->value;
        }
        return view("templates.$page->template")->with(['pages' => $pages, 'fields' => (object)$data]);
    }

    /**
     * Edit form for a page where you can set the field values
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $page = $this->pageService->find($id);
        return view('admin.pages.edit')->with(['page' => $page]);
    }

    /**
     * Update page properties
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $this->pageService->update($id, $request->all());
        return redirect('admin/pages/' . $id . '/edit');
    }

    /**
     * Update a page with field values
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function updateFields($id, Request $request)
    {
        $this->pageService->updateFields($id, $request->all());
        return redirect('admin/pages/' . $id . '/edit');
    }


    /**
     * Create a new page
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if (isset($data['is_blog_page'])) {
            if($data['is_blog_page']){
                $data['is_blog_page'] = 1;
            }
        }
        $this->pageService->create($data);
        return redirect('/admin/pages');
    }


    public function sitemap()
    {
        $pages = $this->pageService->all();
        return response()->view('sitemap', ['pages' => $pages])->header('Content-Type', 'text/xml');
    }

    public function destroy($id)
    {
        $this->pageService->delete($id);
        return redirect('/admin/pages');
    }


}
