<?php

namespace App\Http\Controllers;

use App\Services\{BrandsService, CategoryService, DealerService, DesignerService, LineService};
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CompanyPageController extends Controller
{
    /**
     * @var DealerService
     */
    private $dealerService;

    /**
     * CompanyPageController constructor.
     *
     * @param CategoryService $categoryService
     * @param LineService $lineService
     * @param DesignerService $designerService
     * @param DealerService $dealerService
     * @param BrandsService $brandsService
     */
    public function __construct(
        CategoryService $categoryService,
        LineService $lineService,
        DesignerService $designerService,
        DealerService $dealerService,
        BrandsService $brandsService
    ) {
        parent::__construct($categoryService, $lineService, $designerService, $brandsService);
        $this->dealerService = $dealerService;
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showProfilePage(Request $request)
    {
        return view('static.company.profile', array_merge([
            'steps' => ['Company - Profile'],
        ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showPhilosophyPage(Request $request)
    {
        return view('static.company.philosophy', array_merge([
            'steps' => ['Company - Philosophy']
        ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showHistoryPage(Request $request)
    {
        return view('static.company.history', array_merge([
            'steps' => ['Company - History']
        ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showDistributionPage(Request $request)
    {
        $params = $request->route()->parameters();

        return view('static.company.distribution', array_merge([
            'steps' => ['Company - Distribution'],
            'dealers' => $this->dealerService->getByCountryName(array_get($params, 'country'))
        ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showDistributionEuropePage(Request $request)
    {
        $params = $request->route()->parameters();

        return view('static.company.distribution-europe', array_merge([
            'steps' => ['Company - Distribution', 'Europe'],
            'dealers' => $this->dealerService->getByCountryName(array_get($params, 'country'))
        ], $this->getOptions($request)));
    }
}
