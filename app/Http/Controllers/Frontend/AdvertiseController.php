<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvertiseController extends Controller
{
    public function showAdvertisePage()
    {
        return view('frontend.pages.advertise');
    }
}
