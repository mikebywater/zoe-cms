<?php

namespace App\Services;

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