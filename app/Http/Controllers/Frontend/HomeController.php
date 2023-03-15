<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       $featuredLef= Post::where('is_featured_left',1)->where('post_status',1)->where('deleted',0)->orderBy('publish_at','DESC')->take(1)->get()[0];
       $featuredRight= Post::where('is_featured_right',1)->where('post_status',1)->where('deleted',0)->orderBy('publish_at','DESC')->take(4)->get();
       $featured= Post::where('is_featured',1)->where('post_status',1)->where('deleted',0)->orderBy('publish_at','DESC')->take(4)->get();
       $breakingNews= Post::where('is_breaking_news',1)->where('post_status',1)->where('deleted',0)->orderBy('publish_at','DESC')->take(15)->get();

        return view('frontend.index')->with(compact('featured','featuredLef','featuredRight','breakingNews'));
    }
}
