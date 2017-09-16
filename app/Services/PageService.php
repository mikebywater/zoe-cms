<?php

namespace App\Services;

use App\Repositories\Field\FieldRepository;
use App\Repositories\Page\PageRepository;
use App\Repositories\Template\TemplateRepository;

class PageService
{

    protected $pageRepository;
    protected $templateRepository;
    protected $fieldRepository;


    public function __construct(PageRepository $pageRepository , TemplateRepository $templateRepository, FieldRepository $fieldRepository)
    {
        $this->pageRepository = $pageRepository;
        $this->templateRepository = $templateRepository;
        $this->fieldRepository = $fieldRepository;
    }

    /**
     * Get all pages
     */
    public function all()
    {
        return $this->pageRepository->all();
    }

    /**
     * Get all templates
     */
    public function templates()
    {
        return $this->templateRepository->all();
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
        $page = $this->pageRepository->create($data);
        $template = $this->templateRepository->findByName($data['template']);
        foreach($template->fields as $field){
            $this->fieldRepository->create(['name' => $field->name , 'type' => $field->type , 'value' => '0' , 'page_id' => $page->id ]);
        }
        return $page;
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