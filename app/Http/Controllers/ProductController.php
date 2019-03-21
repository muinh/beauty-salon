<?php

namespace App\Http\Controllers;

use App\Services\{BrandsService, CategoryService, DesignerService, LineService, ProductService};
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * @var BrandsService
     */
    protected $brandsService;

    /**
     * @var ProductService
     */
    private $productService;

    /**
     * ProductController constructor.
     *
     * @param ProductService $productService
     * @param CategoryService $categoryService
     * @param LineService $lineService
     * @param DesignerService $designerService
     * @param BrandsService $brandsService
     */
    public function __construct(
        ProductService $productService,
        CategoryService $categoryService,
        LineService $lineService,
        DesignerService $designerService,
        BrandsService $brandsService
    ) {
        parent::__construct($categoryService, $lineService, $designerService, $brandsService);
        $this->brandsService = $brandsService;
        $this->productService = $productService;
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function show(Request $request)
    {
        $params = $request->route()->parameters();
        $productId = array_get($params, 'productId');
        $product = $this->productService->getById($productId, array_get($params, 'locale'));
        $category = $this->categoryService->getBySlug($product->categorySlug);
        $line = $this->lineService->getBySlug($product->lineSlug);
        $designer = $this->designerService->getBySlug($product->designerSlug);
        $categories = array_get($this->getOptions($request), 'categories');
        $lines = array_get($this->getOptions($request), 'lines');

        return view('product.show', array_merge([
            'product' => $product,
            'category' => $category,
            'line' => $line,
            'designer' => $designer,
            'categoryMenus' => $categories !== null ? $categories->pluck('title', 'slug') : null,
            'lineMenus' => $lines !== null ? $lines->pluck('title', 'slug') : null,
            'similarProducts' => $this->productService->getSimilarProducts($product, array_get($params, 'locale')),
            'sameLineProducts' => $this->productService->getSameLineProducts($product),
            'steps' => [__('vocabulary.products'), $product->name]
        ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showByCategory(Request $request)
    {
       $params = $request->route()->parameters();
       $categorySlug = array_get($params, 'slug');
       $category = $this->categoryService->getBySlug($categorySlug, array_get($this->getOptions($request), 'locale'));
       $categories = array_get($this->getOptions($request), 'categories');
       $lines = array_get($this->getOptions($request), 'lines');

       return view('product.show-filtered', array_merge([
           'brands' => $this->brandsService->getAllBrands(),
           'category' => $category,
           'categoryMenus' => $categories !== null ? $categories->pluck('title', 'slug') : null,
           'lineMenus' => $lines !== null ? $lines->pluck('title', 'slug') : null,
           'products' => $this->productService->getByCategory($categorySlug, array_get($this->getOptions($request), 'locale')),
           'steps' => [__('vocabulary.categories'), $category->title]
       ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showByBrandAndCategory(Request $request)
    {
        $params = $request->route()->parameters();
        $brandId = array_get($params, 'brandId');
        $categorySlug = array_get($params, 'categorySlug');
        $category = $this->categoryService->getBySlug($categorySlug, array_get($this->getOptions($request), 'locale'));
        $categories = array_get($this->getOptions($request), 'categories');
        $lines = array_get($this->getOptions($request), 'lines');

        return view('product.show-filtered', array_merge([
            'brands' => $this->brandsService->getAllBrands(),
            'category' => $category,
            'categoryMenus' => $categories !== null ? $categories->pluck('title', 'slug') : null,
            'lineMenus' => $lines !== null ? $lines->pluck('title', 'slug') : null,
            'products' => $this->productService->getByBrandAndCategory($brandId, $categorySlug),
            'steps' => [__('vocabulary.products') . ' - ' . __('vocabulary.salonLayouts'), $category->title]
        ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showByLine(Request $request)
    {
        $params = $request->route()->parameters();
        $lineSlug = array_get($params, 'slug');
        $line = $this->lineService->getBySlug($lineSlug, array_get($this->getOptions($request), 'locale'));
        $categories = array_get($this->getOptions($request), 'categories');
        $lines = array_get($this->getOptions($request), 'lines');

        return view('product.show-by-line', array_merge([
            'line' => $line,
            'categoryMenus' => $categories !== null ? $categories->pluck('title', 'slug') : null,
            'lineMenus' => $lines !== null ? $lines->pluck('title', 'slug') : null,
            'products' => $this->productService->getByLine($lineSlug, array_get($this->getOptions($request), 'locale')),
            'steps' => [__('vocabulary.products') . ' - ' . __('vocabulary.salonLayouts'), $line->name ?? '']
        ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showByDesigner(Request $request)
    {
        $params = $request->route()->parameters();
        $designerSlug = array_get($params, 'slug');
        $designer = $this->designerService->getBySlug($designerSlug, array_get($this->getOptions($request), 'locale'));
        $designers = array_get($this->getOptions($request), 'designers');
        $designerMenus = $designers !== null ? $designers->pluck('title', 'slug') : null;
        $categories = array_get($this->getOptions($request), 'categories');
        $lines = array_get($this->getOptions($request), 'lines');

        return view('product.show-by-designer', array_merge([
            'designer' => $designer,
            'categoryMenus' => $categories !== null ? $categories->pluck('title', 'slug') : null,
            'lineMenus' => $lines !== null ? $lines->pluck('title', 'slug') : null,
            'products' => $this->productService->getByDesigner($designerSlug, array_get($this->getOptions($request), 'locale')),
            'designerMenus' => $designerMenus,
            'steps' => [__('vocabulary.designer') . ' - ' . $designer->name]
        ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function search(Request $request)
    {
        $params = $request->request->all();
        $categories = array_get($this->getOptions($request), 'categories');
        $lines = array_get($this->getOptions($request), 'lines');

        return view('product.search', array_merge([
            'products' => $this->productService->searchByNameOrCode(array_get($params, 'term')),
            'categoryMenus' => $categories !== null ? $categories->pluck('title', 'slug') : null,
            'lineMenus' => $lines !== null ? $lines->pluck('title', 'slug') : null,
        ], $this->getOptions($request)));
    }
}
