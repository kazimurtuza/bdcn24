<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\ReporterRole;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Array_;
use function Symfony\Component\Finder\name;

class ReporterRoleController extends Controller
{
    public function index()
    {
        $common_data = new Array_();
        $common_data->title = 'Reporter Role';
        $reporterRole = ReporterRole::where('deleted', 0)->get();
        return view('backend.admin.reporter.reporter_role')->with(compact('reporterRole','common_data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        if ($request->is_default == 1) {
            ReporterRole::where("is_default", 1)->update(['is_default' => 0]);
        }
        $role = new ReporterRole();
        $role->name = $request->name;
        $role->slug = $request->slug;
        $role->description = $request->description;
        $role->is_default = $request->is_default ?? 0;
        $role->created_at=Carbon::now();
        $role->created_by=Auth::id();
        $role->save();

        return redirect()->back()->with('success', 'Successfully Created Reporter Role');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        if ($request->is_default == 1) {
            ReporterRole::where("is_default", 1)->update(['is_default' => 0]);
        }
        $role = ReporterRole::find($request->role_id);
        $role->name = $request->name;
        $role->slug = $request->slug;
        $role->description = $request->description;
        $role->is_default = $request->is_default ?? 0;
        $role->created_at=Carbon::now();
        $role->created_by=Auth::id();
        $role->save();

        return redirect()->back()->with('success', 'Successfully Updated Reporter Role');
    }

    public function roleInfoGet(Request $request)
    {

        $roleInfo=ReporterRole::find($request->id);

        return view('backend.admin.reporter._edit_reporter_role')->with(compact('roleInfo'))->render();
    }

    public function statusUpdate(Request $request){
        $role = ReporterRole::find($request->id);
        $role->status=$request->status;
        $role->save();
        return [
            "status"=>200,
            "message"=>"Status Updated Successfully "
        ];
    }
}
