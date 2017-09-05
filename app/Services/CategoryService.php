<?php

namespace App\Services;


use App\Repositories\Category\CategoryRepository;

class CategoryService
{
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Get all categories from the repo
     */
    public function all()
    {
        return $this->categoryRepository->all();
    }

    public function create($data)
    {
        return $this->categoryRepository->create($data);
    }
}