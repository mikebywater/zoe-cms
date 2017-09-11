<?php

namespace App\Services;

use App\Repositories\Page\PageRepository;

class PageService
{

    protected $pageRepository;


    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    /**
     * Get all pages
     */
    public function all()
    {
        return $this->pageRepository->all();
    }

    public function findByName($name)
    {
        return $this->pageRepository->findByName($name);
    }

    /**
     * Create a new page
     * @param $data
     * @return
     */
    public function create($data)
    {
        return $this->pageRepository->create($data);
    }


    /**
     * Delete a page
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete($id)
    {
        return $this->pageRepository->delete($id);
    }


}