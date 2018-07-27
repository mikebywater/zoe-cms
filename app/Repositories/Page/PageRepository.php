<?php


namespace App\Repositories\Page;


use App\Repositories\Repository;

class PageRepository extends Repository
{
    /**
     * PageRepository constructor.
     */
    public function __construct()
    {
        $this->model = new Page;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function findByName($name)
    {
        return $this->model->where('name' , $name)->first();
    }

    public function articles()
    {
        return $this->model->where('is_blog_page' , true)->orderBy('created_at' , 'desc')->get();;
    }

    public function pages()
    {
        return $this->model->where('is_blog_page' , false)->get();
    }

}