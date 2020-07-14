<?php

namespace App\Services;

use App\Repositories\Field\FieldRepository;
use App\Repositories\Page\PageRepository;
use App\Repositories\Template\TemplateRepository;
use GuzzleHttp\Psr7\UploadedFile;
use Intervention\Image\Facades\Image;

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
     * Get all pages that are not blog articles
     */
    public function pages()
    {
        return $this->pageRepository->pages();
    }

    /**
     * Get all blog pages / articles
     */
    public function articles()
    {
        return $this->pageRepository->articles();
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

    public function find($id)
    {
        return $this->pageRepository->find($id);
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

    public function update($id , $data)
    {
        return $this->pageRepository->update($id,$data);
    }

    public function updateFields($id , $request)
    {
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        $keys = array_keys($data);
        foreach($keys as $key){
            $field = $this->fieldRepository->findByPageAndName($id, $key);
            if($field->type == 'image'){
                $file = $request->file($field->name);
                $image = Image::make($file)->save('temp.jpg', 10);

                $data[$key] = base64_encode(file_get_contents('temp.jpg'));
                unlink('temp.jpg');
            }
            $this->fieldRepository->update($field->id,array('name' => $key , 'value' => $data[$key]));
        }
    }

    /**
     * Delete a page
     *
     * @param $id
     */
    public function delete($id)
    {
        return $this->pageRepository->delete($id);
    }




}