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
            'categoryMenus' => $categories !== null ? $categories->pluck('title', 'id') : null,
            'lineMenus' => $lines !== null ? $lines->pluck('name', 'id') : null,
            'steps' => ['Products']
        ], $this->getOptions($request)));
    }
}
