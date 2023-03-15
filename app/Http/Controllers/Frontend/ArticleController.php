<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showArticleDetails()
    {
        return view('frontend.pages.article-details.article_details');
    }
}
