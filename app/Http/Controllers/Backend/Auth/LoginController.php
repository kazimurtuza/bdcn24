<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Array_;

class LoginController extends Controller
{
    public function showLogin()
    {
        $common_data = new Array_();
        $common_data->title = 'BDCN24 - NEWS PORTAL';
        $common_data->subtitle = '';

        return view('backend.auth.login')
            ->with(compact(
                'common_data'
            ));
    }

    public function phoneOtpCodeSend(Request $request)
    {

        $request->phone;
        $request->password;

        $user_info = User::where('phone', $request->phone)->where('status', 1)->first();

        if ($user_info) {
            $is_valid = Hash::check($request->password, $user_info->password);
            if ($is_valid) {
                $otpCode = '123456';
//               opt code send to phone number
                $user_info->validation_code = $otpCode;
                $user_info->save();
                return 1;
            } else {
                return 0;
            }
        } else {
            return 0;
        }

    }


    public function submitLogin(Request $request)
    {
        $otpCode = implode("", $request->otpCode);
        $user_data = User::where(['phone' => $request->phone, 'status' => 1, 'validation_code' => $otpCode])->first();
        if($user_data){
            if (Hash::check($request->password, $user_data->password)) {
                Auth::login($user_data);
                return redirect('/admin');
            } else {
                return redirect()->back()->with('error', 'Phone or Password is Invalid');
            }
        }
        return redirect()->back()->with('error', 'Your Otp Code is Invalid');

    }

    public function logout(){
        Auth::logout();
        return redirect()->back()->with('success','successfully logout');
    }
}
