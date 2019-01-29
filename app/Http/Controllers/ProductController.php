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
        $product = $this->productService->getById($productId);
        $categories = array_get($this->getOptions($request), 'categories');
        $lines = array_get($this->getOptions($request), 'lines');

        return view('product.show', array_merge([
            'product' => $product,
            'categoryMenus' => $categories !== null ? $categories->pluck('title', 'id') : null,
            'lineMenus' => $lines !== null ? $lines->pluck('name', 'id') : null,
            'similarProducts' => $this->productService->getSimilarProducts($product),
            'sameLineProducts' => $this->productService->getSameLineProducts($product),
            'steps' => ['Products', $product->categoryId->title]
        ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showByCategory(Request $request)
    {
       $params = $request->route()->parameters();
       $categoryId = array_get($params, 'categoryId');
       $category = $this->categoryService->getById($categoryId);
       $categories = array_get($this->getOptions($request), 'categories');
       $lines = array_get($this->getOptions($request), 'lines');

       return view('product.show-filtered', array_merge([
           'brands' => $this->brandsService->getAllBrands(),
           'category' => $category,
           'categoryMenus' => $categories !== null ? $categories->pluck('title', 'id') : null,
           'lineMenus' => $lines !== null ? $lines->pluck('name', 'id') : null,
           'products' => $this->productService->getByCategory($categoryId),
           'steps' => ['Products', $category->title]
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
        $categoryId = array_get($params, 'categoryId');
        $category = $this->categoryService->getById($categoryId);
        $categories = array_get($this->getOptions($request), 'categories');
        $lines = array_get($this->getOptions($request), 'lines');

        return view('product.show-filtered', array_merge([
            'brands' => $this->brandsService->getAllBrands(),
            'category' => $category,
            'categoryMenus' => $categories !== null ? $categories->pluck('title', 'id') : null,
            'lineMenus' => $lines !== null ? $lines->pluck('name', 'id') : null,
            'products' => $this->productService->getByBrandAndCategory($brandId, $categoryId),
            'steps' => ['Products', $category->title]
        ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showByLine(Request $request)
    {
        $params = $request->route()->parameters();
        $lineId = array_get($params, 'lineId');
        $line = $this->lineService->getById($lineId);
        $categories = array_get($this->getOptions($request), 'categories');
        $lines = array_get($this->getOptions($request), 'lines');

        return view('product.show-by-line', array_merge([
            'line' => $line,
            'categoryMenus' => $categories !== null ? $categories->pluck('title', 'id') : null,
            'lineMenus' => $lines !== null ? $lines->pluck('name', 'id') : null,
            'products' => $this->productService->getByLine($lineId),
            'steps' => ['Products', $line->name]
        ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showByDesigner(Request $request)
    {
        $params = $request->route()->parameters();
        $designerId = array_get($params, 'designerId');
        $designer = $this->designerService->getById($designerId);
        $designers = array_get($this->getOptions($request), 'designers');
        $designerMenus = $designers !== null ? $designers->pluck('name', 'id') : null;
        $categories = array_get($this->getOptions($request), 'categories');
        $lines = array_get($this->getOptions($request), 'lines');

        return view('product.show-by-designer', array_merge([
            'designer' => $designer,
            'categoryMenus' => $categories !== null ? $categories->pluck('title', 'id') : null,
            'lineMenus' => $lines !== null ? $lines->pluck('name', 'id') : null,
            'products' => $this->productService->getByDesigner($designerId),
            'designerMenus' => $designerMenus,
            'steps' => ['Designer - ' . $designer->name]
        ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function search(Request $request)
    {
        $params = $request->request->all();

        return view('product.search', array_merge([
            'products' => $this->productService->searchByNameOrCode(array_get($params, 'term'))
        ], $this->getOptions($request)));
    }
}
