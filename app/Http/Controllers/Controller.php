<?php

namespace App\Http\Controllers;

use App\Bags\AppBag;
use App\Models\Slider;
use App\Services\{BrandsService, CategoryService, DesignerService, LineService};
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\App;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var CategoryService
     */
    protected $categoryService;

    /**
     * @var LineService
     */
    protected $lineService;

    /**
     * @var DesignerService
     */
    protected $designerService;

    /**
     * @var BrandsService
     */
    protected $brandsService;

    /**
     * @var string
     */
    protected $locale;

    /**
     * Controller constructor.
     *
     * @param CategoryService $categoryService
     * @param LineService $lineService
     * @param DesignerService $designerService
     * @param BrandsService $brandsService
     * @param string $locale
     */
    public function __construct(
        CategoryService $categoryService,
        LineService $lineService,
        DesignerService $designerService,
        BrandsService $brandsService,
        string $locale = 'ru'
    ) {
        $this->categoryService = $categoryService;
        $this->lineService = $lineService;
        $this->designerService = $designerService;
        $this->brandsService = $brandsService;
        $this->locale = $locale;
        App::getLocale($this->locale);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function getControllerName(Request $request)
    {
        $action = $request->route()->getAction();
        $controller = class_basename(array_get($action, 'controller'));
        list($controller, $action) = explode('@', $controller);
        return $controller;
    }

    /**
     * @param Request $request
     * @return array
     */
    protected function getOptions(Request $request)
    {
        $params = $request->route()->parameters();
        $locale = array_get($params, 'locale') ?? $this->locale;

        return [
            'controllerName' => $this->getControllerName($request),
            'categories' => $this->categoryService->getAllCategories($locale),
            'lines' => $this->lineService->getAllLines($locale),
            'designers' => $this->designerService->getAllDesigners($locale),
            'brands' => $this->brandsService->getAllBrands(),
            'sliderRand' => Slider::query()
                ->where('is_on_main', '=', 0)
                ->inRandomOrder()
                ->first(),
            'sidebarTemplate' => '/' . $this->locale . AppBag::CATEGORY_SIDEBAR_TEMPLATE,
            'locale' => $locale,
            'assetsSrc' => AppBag::ASSETS_SRC
        ];
    }
}
