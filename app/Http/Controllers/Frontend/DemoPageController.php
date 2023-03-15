<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoPageController extends Controller
{
    public function showCategoriesPage()
    {
        return view('frontend.pages.demo.categories');
    }

    public function showDivisionPage()
    {
        return view('frontend.pages.demo.division');
    }
    public function showSearchPage()
    {
        return view('frontend.pages.demo.search');
    }
}
