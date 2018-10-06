<?php

namespace App\Http\Controllers;

class CompanyPageController extends Controller
{
    public function showProfilePage()
    {
        return view('static.company.profile');
    }

    public function showPhilosophyPage()
    {
        return view('static.company.philosophy');
    }

    public function showHistoryPage()
    {
        return view('static.company.history');
    }

    public function showDistributionPage()
    {
        return view('static.company.distribution');
    }
}
