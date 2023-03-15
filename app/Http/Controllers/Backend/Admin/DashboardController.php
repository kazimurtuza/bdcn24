<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Array_;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $common_data = new Array_();
        $common_data->title = 'Dashboard';

        return view('backend.admin.index')
            ->with(compact(
                'common_data'
            ));
    }

    public function showBlankPage()
    {
        $common_data = new Array_();
        $common_data->title = 'Blank Page';

        return view('backend.admin.blank-page')
            ->with(compact(
                'common_data'
            ));
    }
}
