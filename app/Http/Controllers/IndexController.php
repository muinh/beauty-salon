<?php

namespace App\Http\Controllers;

use App\Bags\AppBag;
use App\Models\Slider;
use App\Services\{BrandsService, CategoryService, DesignerService, LineService, NewsService, ProductService};
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    /**
     * @var ProductService
     */
    private $productService;

    /**
     * @var NewsService
     */
    private $newsService;

    /**
     * IndexController constructor.
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
     * @return Factory|View
     */
    public function index()
    {
        return view('static.index', ['brands' => $this->brandsService->getAllBrands()]);
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showHomePage(Request $request)
    {
        return view('static.home', array_merge([
            'products' => $this->productService->getLastProducts(),
            'latestNews' => $this->newsService->getLatest(),
            'sliders' => Slider::query()->where('is_on_main', '=', 1)->get(),
            'maxCategories' => AppBag::CATEGORY_SIDEBAR_MAX_COUNT
        ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showPrivacyPolicy(Request $request)
    {
        return view('static.privacy-policy', array_merge([
            'steps' => ['Privacy Policy']
        ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showCookiePolicy(Request $request)
    {
        return view('static.cookie-policy', array_merge([
            'steps' => ['Cookie Policy']
        ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showNotFoundPage(Request $request)
    {
        return view('static.404', array_merge([
            'steps' => ['404 - Not Found'],
            'products' => $this->productService->getRandomProducts()
        ], $this->getOptions($request)));
    }
}
