<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * @param Request $request
     * @return Factory|View
     */
    public function index(Request $request)
    {
        $categories = array_get($this->getOptions($request), 'categories');
        $lines = array_get($this->getOptions($request), 'lines');

        return view('category.index', array_merge([
            'categoryMenus' => $categories !== null ? $categories->pluck('title', 'slug') : null,
            'lineMenus' => $lines !== null ? $lines->pluck('title', 'slug') : null,
            'steps' => [__('vocabulary.products')]
        ], $this->getOptions($request)));
    }
}
