<?php

namespace App\Http\Controllers;

use App\Services\{BrandsService, CategoryService, DesignCenterService, DesignerService, LineService};
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class DesignCenterController
 *
 * @package App\Http\Controllers
 */
class DesignCenterController extends Controller
{
    /**
     * @var DesignCenterService
     */
    private $designCenterService;

    /**
     * DesignCenterController constructor.
     *
     * @param CategoryService $categoryService
     * @param LineService $lineService
     * @param DesignerService $designerService
     * @param DesignCenterService $designCenterService
     * @param BrandsService $brandsService
     */
    public function __construct(
        CategoryService $categoryService,
        LineService $lineService,
        DesignerService $designerService,
        DesignCenterService $designCenterService,
        BrandsService $brandsService
    ) {
        parent::__construct($categoryService, $lineService, $designerService, $brandsService);
        $this->designCenterService = $designCenterService;
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showLayouts(Request $request)
    {
        return view('design-center.layouts', array_merge([
            'layouts' => $this->designCenterService->getAllSalonLayouts(array_get($this->getOptions($request), 'locale')),
            'steps' => [__('vocabulary.designCenters') . ' - ' . __('vocabulary.salonLayouts')]
        ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showPictures(Request $request)
    {
        return view('design-center.pictures', array_merge([
            'pictures' => $this->designCenterService->getAllSalonPictures(array_get($this->getOptions($request), 'locale')),
            'steps' => [__('vocabulary.designCenters') . ' - ' . __('vocabulary.salonPictures')]
        ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showShowrooms(Request $request)
    {
        return view('design-center.showrooms', array_merge([
            'showrooms' => $this->designCenterService->getAllShowrooms(array_get($this->getOptions($request), 'locale')),
            'steps' => [__('vocabulary.designCenters') . ' - ' . __('vocabulary.showrooms')]
        ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showPlanner(Request $request)
    {
        return view('design-center.planner', array_merge([
            'steps' => [__('vocabulary.designCenters') . ' - ' . __('vocabulary.salonPlanner')]
        ], $this->getOptions($request)));
    }
}
