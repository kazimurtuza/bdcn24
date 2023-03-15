<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Helpers\CommonHelper;
use App\Http\Controllers\Controller;
use App\Models\BdDistrict;
use App\Models\BdDivision;
use App\Models\BdThana;
use App\Models\ReporterAchievement;
use App\Models\ReporterCertificate;
use App\Models\ReporterEducationalInformation;
use App\Models\ReporterExperience;
use App\Models\ReporterRole;
use App\Models\ReporterSkill;
use App\Models\ReporterType;
use App\Models\User;
use App\Models\UserDetail;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use mysql_xdevapi\Exception;
use PhpParser\Node\Expr\Array_;
use Image;

class ReporterController extends Controller
{
    public function registration()
    {
        $common_data = new Array_();
        $common_data->title = 'Reporter Registration';
        $reporterRole = ReporterRole::where('status', 1)->where('deleted', 0)->get();
        $reporterType = ReporterType::where('status', 1)->where('deleted', 0)->get();
        $division = BdDivision::get();

        return view('backend.admin.reporter.reporter_registration')->with(compact('reporterRole', 'reporterType', 'division', 'common_data'));
    }

    public function reporterStore(Request $request)
    {
        DB::beginTransaction();
        try {
            $user = new User();
            $user->role_id = $request->role_id;
            $user->en_first_name = $request->en_first_name;
            $user->en_last_name = $request->en_last_name;
            $user->bn_first_name = $request->bn_first_name;
            $user->bn_last_name = $request->bn_last_name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->created_at = Carbon::now();
            $user->created_by = Auth::id();
            $user->save();
            $user->user_id = 1000000 + $user->id;
            $user->save();

            $userDetails = new UserDetail();
            $userDetails->user_id = $user->id;
            $userDetails->en_designation = $request->en_designation;
            $userDetails->bn_designation = $request->bn_designation;
            $userDetails->reporter_type_id = $request->reporter_type_id;
            $userDetails->nid = $request->nid;
            $userDetails->blood_group = $request->blood_group;
            $userDetails->present_address = $request->present_address;
            $userDetails->present_address_division = $request->present_address_division;
            $userDetails->present_address_district = $request->present_address_district;
            $userDetails->present_address_thana = $request->present_address_thana;
            $userDetails->created_by = Auth::id();
            $userDetails->created_at = Carbon::now();
            $userDetails->save();

        } catch (\Exception $exception) {
            DB::rollBack();

            return redirect()->back()->with('failed', 'Failed  to Create Reporter');
        }
        DB::commit();

        return redirect()->back()->with('success', 'Reporter Created Successfully');
    }


    public function reporterList()
    {
        $common_data = new Array_();
        $common_data->title = 'Reporter List';
        $userList = User::with('userDetails')->where('deleted', 0)->get();

        return view('backend.admin.reporter.reporter_list')->with(compact('userList', 'common_data'));

    }

    public function reporterDetails(Request $request)
    {

        $details = User::find($request->id);
        $experience = ReporterExperience::where('user_id', $request->id)->get();
        $experienceItem = $experience->count();
        $educationInfo = ReporterEducationalInformation::where('user_id', $request->id)->get();
        $educationInfoCount = $educationInfo->count();

        $achievement = ReporterAchievement::where('user_id', $request->id)->get();
        $achievementCount = $achievement->count();

        $selectedPresentDistrict = BdDistrict::where('division_id', $details->userDetails->present_address_division)->get();
        $selectedPresentThana = BdThana::where('district_id', $details->userDetails->present_address_district)->get();

        $selectedPermanentDistrict = BdDistrict::where('division_id', $details->userDetails->permanent_address_division)->get();
        $selectedPermanentThana = BdThana::where('district_id', $details->userDetails->permanent_address_district)->get();

        $reporterRole = ReporterRole::where('deleted', 0)->where('status', 1)->get();
        $reporterType = ReporterType::where('deleted', 0)->where('status', 1)->get();

        $skillList=ReporterSkill::where('user_id',$request->id)->select('skill')->get();

        $userActiveSkill=[];
        foreach ($skillList as $skill){
            array_push($userActiveSkill, $skill->skill);
        }


        $divisionList = BdDivision::get();


        return view('backend.admin.reporter.reporter_details')
            ->with(compact('details', 'experience', 'experienceItem', 'educationInfo', 'educationInfoCount', 'achievement', 'achievementCount', 'divisionList', 'selectedPresentDistrict', 'selectedPermanentThana', 'selectedPermanentDistrict', 'selectedPresentThana', 'reporterRole', 'reporterType','userActiveSkill'));
    }


    public function getDistrict(Request $request)
    {
        $district = BdDistrict::where('division_id', $request->id)->get();

        return view('backend.admin.location._district_list')->with(compact('district'))->render();

    }

    public function getThana(Request $request)
    {
        $thana = BdThana::where('district_id', $request->id)->get();
        return view('backend.admin.location._thana_list')->with(compact('thana'))->render();

    }

    public function reporterEducationInfoStore(Request $request)
    {

        foreach ($request->id as $key => $edu_id) {
            if ($edu_id == 0) {
                $education = new ReporterEducationalInformation();
                $education->user_id = $request->user_id;
                $education->institute_name = $request->institute_name[$key];
                $education->examination = $request->examination[$key];
                $education->group = $request->group[$key];
                $education->grade = $request->grade[$key];
                $education->board = $request->board[$key];
                $education->passing_year = $request->passing_year[$key];
                $education->save();
            } else if ($edu_id > 0) {
                $education = ReporterEducationalInformation::find($edu_id);
                $education->user_id = $request->user_id;
                $education->institute_name = $request->institute_name[$key];
                $education->examination = $request->examination[$key];
                $education->group = $request->group[$key];
                $education->grade = $request->grade[$key];
                $education->board = $request->board[$key];
                $education->passing_year = $request->passing_year[$key];
                $education->save();

            }


        }

        return redirect()->back()->with('success', 'Successfully Store Data');
    }

    public function reporterAchievementStore(Request $request)
    {

        foreach ($request->id as $key => $item) {
            if ($item == 0) {
                $achievement = new ReporterAchievement();
                $achievement->user_id = $request->user_id;
                $achievement->title = $request->title[$key];
                $achievement->organization_name = $request->organization_name[$key];
                $achievement->date = $request->date[$key];
                $achievement->save();
            } else if ($item > 0) {
                $achievement = ReporterAchievement::find($item);
                $achievement->user_id = $request->user_id;
                $achievement->title = $request->title[$key];
                $achievement->organization_name = $request->organization_name[$key];
                $achievement->date = $request->date[$key];
                $achievement->save();
            }

        }

        return redirect()->back()->with('success', 'successfully store info');

    }

    public function reporterPersonalInfoUpdate(Request $request)
    {

        $userPersonalInfo = UserDetail::where('user_id', $request->user_id)->first();
        $userPersonalInfo->father_name = $request->father_name;
        $userPersonalInfo->mother_name = $request->mother_name;
        $userPersonalInfo->marital_status = $request->marital_status;
        $userPersonalInfo->nationality = $request->nationality;
        $userPersonalInfo->religion = $request->religion;
        $userPersonalInfo->date_of_birth = $request->date_of_birth;
        $userPersonalInfo->present_address = $request->present_address;
        $userPersonalInfo->present_address_division = $request->present_address_division;
        $userPersonalInfo->present_address_district = $request->present_address_district;
        $userPersonalInfo->present_address_thana = $request->present_address_thana;
        $userPersonalInfo->permanent_address = $request->permanent_address;
        $userPersonalInfo->permanent_address_division = $request->permanent_address_division;
        $userPersonalInfo->permanent_address_district = $request->permanent_address_district;
        $userPersonalInfo->permanent_address_thana = $request->permanent_address_thana;
        $userPersonalInfo->save();
        return redirect()->back()->with('success', 'User Personal Info Successfully update ');

    }

    public function reporterBasicInfoUpdate(Request $request)
    {

        $request->validate([
            "bn_first_name" => "required",
            "bn_last_name" => "required",
            "en_first_name" => "required",
            "en_last_name" => "required",
            "phone" => "required",
            "gender" => "required",

        ]);
        DB::beginTransaction();

        try {

            $userInfo = User::find($request->user_id);
            $userInfo->bn_first_name = $request->bn_first_name;
            $userInfo->bn_last_name = $request->bn_last_name;
            $userInfo->en_first_name = $request->en_first_name;
            $userInfo->en_last_name = $request->en_last_name;
            $userInfo->phone_2 = $request->phone_2;
            $userInfo->phone = $request->phone;
            $userInfo->save();

            $userDetails = UserDetail::where('user_id', Auth::id())->first();
            $userDetails->nid = $request->nid;
            $userDetails->passport = $request->passport;
            $userDetails->blood_group = $request->blood_group;
            $userDetails->gender = $request->gender;
            $userDetails->save();
        } catch (\Exception $error) {
            DB::rollBack();

            return $error->getMessage();

        }
        DB::commit();

        return redirect()->back()->with('success', 'Successfully updated Personal Info');

    }

    public function reporterInfoUpdate(Request $request)
    {

        $request->validate([
            "en_designation" => 'required',
            "bn_designation" => 'required',
            "joining_date" => 'required',
            "email" => 'required',
            "role_id" => 'required',
            "reporter_type_id" => 'required',

        ]);

        DB::beginTransaction();
        try {
            $userInfo = UserDetail::find($request->user_details_id);
            $userInfo->en_designation = $request->en_designation;
            $userInfo->bn_designation = $request->bn_designation;
            $userInfo->reporter_type_id = $request->reporter_type_id;
            $userInfo->social_facebook = $request->social_facebook;
            $userInfo->social_instagram = $request->social_instagram;
            $userInfo->social_linkedin = $request->social_linkedin;
            $userInfo->joining_date = $request->joining_date;
            $userInfo->save();

            $user = User::find($userInfo->user_id);
            $user->email = $request->email;
            $user->role_id = $request->role_id;
            $user->save();
        } catch (\Exception $error) {
            DB::rollBack();
            return redirect()->back()->with('error', $error->getMessage());
        }
        DB::commit();


        return redirect()->back()->with('success', 'Successfully Update Reporter Info');

    }

    public function reporterSkillUpdate(Request $request){
//        ReporterSkill::where('user_id',$request->user_id)->whereNotIn('skill', $request->skill)->delete();
        ReporterSkill::where('user_id',$request->user_id)->delete();
        foreach ($request->skill as $key=>$skill){
            $skill=new ReporterSkill();
            $skill->skill=$request->skill[$key];
            $skill->user_id=$request->user_id;
            $skill->save();
        }

        return redirect()->back()->with('success','Successfully  updated skill');
    }


    public function attachmentUpdate(Request $request){

        $user_details= UserDetail::where('user_id',$request->user_id)->first();

        if (isset($request->nid) && ($request->nid != '') && ($request->nid != null)) {
            $ext = explode('/', mime_content_type($request->nid))[1];
            $logo_url = "reporter_images-" . time() . rand(1000, 9999) . '.png';

            $logo_directory = CommonHelper::getUploadPath() . '/reporter_images/';
            $filePath=$logo_directory;

            $logo_path = $filePath . $logo_url;
            $db_media_img_path = 'storage/reporter_images/'. $logo_url;

            if (!file_exists($filePath)) {
                mkdir($filePath, 666, true);
            }
            $logo_image = Image::make(file_get_contents($request->nid))->resize(800, 450);


            // increase brightness of image
            $logo_image->brightness(8);
            $logo_image->contrast(11);
            $logo_image->sharpen(5);
//            list($r, $g, $b) = $this->hsl2rgb(0, 40, 1);
            $logo_image->encode('webp', 70);
            $logo_image->save($logo_path);
            $user_details->attachment_nid=$db_media_img_path;
        }

        if (isset($request->passport) && ($request->passport != '') && ($request->passport != null)) {
            $ext = explode('/', mime_content_type($request->passport))[1];
            $logo_url = "reporter_images-" . time() . rand(1000, 9999) . '.png';


            $logo_directory = CommonHelper::getUploadPath().'/reporter_images/';
            $filePath=$logo_directory;

            $logo_path = $filePath . $logo_url;
            $db_media_img_path = 'storage/reporter_images/'. $logo_url;

            if (!file_exists($filePath)) {
                mkdir($filePath, 666, true);
            }

            $logo_image = Image::make(file_get_contents($request->passport))->resize(800, 450);


            // increase brightness of image
            $logo_image->brightness(8);
            $logo_image->contrast(11);
            $logo_image->sharpen(5);
//            list($r, $g, $b) = $this->hsl2rgb(0, 40, 1);
            $logo_image->encode('webp', 70);
            $logo_image->save($logo_path);
            $user_details->attachment_passport=$db_media_img_path;
        }

        if (isset($request->signature) && ($request->signature != '') && ($request->signature != null)) {
            $ext = explode('/', mime_content_type($request->signature))[1];
            $logo_url = "reporter_images-" . time() . rand(1000, 9999) . '.png';

            $logo_directory = CommonHelper::getUploadPath() . '/reporter_images/';
            $filePath=$logo_directory;

            $logo_path = $filePath . $logo_url;
            $db_media_img_path = 'storage/reporter_images/'. $logo_url;

            if (!file_exists($filePath)) {
                mkdir($filePath, 666, true);
            }

            $logo_image = Image::make(file_get_contents($request->signature))->resize(800, 450);



            // increase brightness of image
            $logo_image->brightness(8);
            $logo_image->contrast(11);
            $logo_image->sharpen(5);
//          list($r, $g, $b) = $this->hsl2rgb(0, 40, 1);
            $logo_image->encode('webp', 70);
            $logo_image->save($logo_path);
            $user_details->attachment_signature=$db_media_img_path;
        }
         $user_details->save();


        foreach ($request->certificate as $key=>$certificate){

            if (isset($request->certificate[$key]) && ($request->certificate[$key] != '') && ($request->certificate[$key] != null)) {
                $reporter_certificate=new ReporterCertificate();
                $ext = explode('/', mime_content_type($request->certificate[$key]))[1];
                $logo_url = "reporter_images-" . time() . rand(1000, 9999) . '.png';

                $logo_directory = CommonHelper::getUploadPath() . '/reporter_images/';
                $filePath=$logo_directory;

                $logo_path = $filePath . $logo_url;
                $db_media_img_path = 'storage/reporter_images/'. $logo_url;

                if (!file_exists($filePath)) {
                    mkdir($filePath, 666, true);
                }
                $logo_image = Image::make(file_get_contents($request->certificate[$key]))->resize(800, 450);

                // increase brightness of image
                $logo_image->brightness(8);
                $logo_image->contrast(11);
                $logo_image->sharpen(5);
//              list($r, $g, $b) = $this->hsl2rgb(0, 40, 1);
                $logo_image->encode('webp', 70);
                $logo_image->save($logo_path);
                $reporter_certificate->user_id=$request->user_id;
                $reporter_certificate->image=$db_media_img_path;
                $reporter_certificate->title=$request->certificate_title[$key];
                $reporter_certificate->created_at=Carbon::now();
                $reporter_certificate->updated_at=Carbon::now();
                $reporter_certificate->created_by=Auth::id();
                $reporter_certificate->save();
            }

           }


         return redirect()->back()->with('success','Successfully Upload image');
    }

    public function reporterSrc(Request $request){

        $reporter=User::where('en_first_name','like','%'.$request->name.'%')
            ->orWhere('en_last_name','like','%'.$request->name.'%')
            ->orWhere('bn_first_name','like','%'.$request->name.'%')
            ->orWhere('bn_first_name','like','%'.$request->name.'%')
            ->get();

        return view('backend.admin.reporter._reporter_list')->with(compact('reporter'))->render();

    }

}
