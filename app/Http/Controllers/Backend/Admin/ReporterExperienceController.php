<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use App\Models\ReporterExperience;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReporterExperienceController extends Controller
{
    public function reporterExperienceAdd(Request $request){


        foreach ($request->experience_id as  $key=>$expId){
            if($expId==0){
                $experience=new ReporterExperience();
                $experience->user_id=$request->user_id;
                $experience->designation=$request->designation[$key];
                $experience->company_name=$request->company_name[$key];
                $experience->joining_date=$request->joining_date[$key];
                $experience->end_date=$request->end_date[$key];
                $experience->created_at=Carbon::now();
                $experience->created_by=Auth::id();
                $experience->save();

            }else if($expId>0){
                $experience=ReporterExperience::find($expId);
                $experience->user_id=$request->user_id;
                $experience->designation=$request->designation[$key];
                $experience->company_name=$request->company_name[$key];
                $experience->joining_date=$request->joining_date[$key];
                $experience->end_date=$request->end_date[$key];
                $experience->save();
            }
        }


        return redirect()->back()->with('success','Reporter  Experience successfully Update');
    }
}
