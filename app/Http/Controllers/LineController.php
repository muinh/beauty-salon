<?php

namespace App\Http\Controllers;

class LineController extends Controller
{
    public function index()
    {
        return view('line.index');
    }

    public function show()
    {
        return view('line.show');
    }
}
