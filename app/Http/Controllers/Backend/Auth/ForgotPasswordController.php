<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Array_;

class ForgotPasswordController extends Controller
{
    public function showForgotPassword()
    {
        $common_data = new Array_();
        $common_data->title = 'BDCN24 - NEWS PORTAL';
        $common_data->subtitle = '';

        return view('backend.auth.forgot-password')
            ->with(compact(
                'common_data'
            ));
    }
}
