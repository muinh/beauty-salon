<?php

namespace App\Http\Controllers;

use App\Services\{BrandsService, CategoryService, DesignerService, LineService, NewsService, ProductService};
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{
    /**
     * @var NewsService
     */
    private $newsService;

    /**
     * @var ProductService
     */
    private $productService;

    /**
     * NewsController constructor.
     *
     * @param ProductService $productService
     * @param CategoryService $categoryService
     * @param LineService $lineService
     * @param DesignerService $designerService
     * @param NewsService $newsService
     * @param BrandsService $brandsService
     */
    public function __construct(
        ProductService $productService,
        CategoryService $categoryService,
        LineService $lineService,
        DesignerService $designerService,
        NewsService $newsService,
        BrandsService $brandsService
    ) {
        parent::__construct($categoryService, $lineService, $designerService, $brandsService);
        $this->newsService = $newsService;
        $this->productService = $productService;
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function index(Request $request)
    {
        return view('news.index', array_merge([
            'news' => $this->newsService->getAll(),
            'steps' => [__('vocabulary.news')]
        ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showByCategory(Request $request)
    {
        $params = $request->route()->parameters();
        $newsCategoryId = array_get($params, 'newsCategoryId');

        return view('news.index', array_merge([
            'news' => $this->newsService->getByCategory($newsCategoryId),
            'steps' => [__('vocabulary.news')]
        ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function show(Request $request)
    {
        $params = $request->route()->parameters();
        $newsId = array_get($params, 'newsId');
        $article = $this->newsService->getById($newsId);

        return view('news.show', array_merge([
            'article' => $article,
            'steps' => [$article->name]
        ], $this->getOptions($request)));
    }
}
