<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\ReporterType;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Array_;

class ReporterTypeController extends Controller
{
    public function reporterType()
    {
        $common_data = new Array_();
        $common_data->title = 'Reporter Type';

        $reporterTypeList=ReporterType::where('status',1)->where('deleted',0)->get();

        return view('backend.admin.reporter.reporter_type')->with(compact('common_data','reporterTypeList'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $reporterType = new ReporterType();
        $reporterType->name = $request->name;
        $reporterType->description = $request->description;
        $reporterType->created_at = Carbon::now();
        $reporterType->created_by = Auth::id();
        $reporterType->save();

        return redirect()->back()->with('success', 'Reporter  Type Successfully Created');

    }

    public function reporterTypeEdit(Request $request){
        $request->validate([
            'name' => 'required',
        ]);
        $reporter_info= ReporterType::find($request->id);
        $reporter_info->name=$request->name;
        $reporter_info->description=$request->description;
        $reporter_info->save();

        return redirect()->back()->with('success','successfully update Reporter Type');
    }

    public function reporterTypeInfoGet(Request $request){
        $reporter_info= ReporterType::find($request->id);
        return $reporter_info;

    }
}
