<?php

namespace App\Http\Controllers;

class DesignCenterController extends Controller
{
    public function showLayouts()
    {
        return view('design-center.layouts');
    }

    public function showPictures()
    {
        return view('design-center.pictures');
    }

    public function showShowrooms()
    {
        return view('design-center.showrooms');
    }

    public function showPlanner()
    {
        return view('design-center.planner');
    }
}
