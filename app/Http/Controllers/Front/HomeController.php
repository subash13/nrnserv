<?php

namespace App\Http\Controllers\Front;

use App\Shop\Categories\Category;
use App\Shop\Categories\Repositories\CategoryRepository;
use App\Shop\Categories\Repositories\Interfaces\CategoryRepositoryInterface;

class HomeController
{
    /**
     * @var CategoryRepositoryInterface
     */
    private $categoryRepo;

    /**
     * HomeController constructor.
     * @param CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepo = $categoryRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $categoryRepo = new CategoryRepository(new Category);
         $categories=$categoryRepo->listCategories('name', 'asc');

        return view('front.index', compact('categories'));
    }
}
