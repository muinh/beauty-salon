<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index');
    }

    public function showNewsByCategory()
    {
        return view('news.show-by-category');
    }

    public function show()
    {
        return view('news.show');
    }
}
