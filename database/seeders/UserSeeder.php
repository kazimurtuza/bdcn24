<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new User();
        $user->user_id='1000001';
        $user->type='admin';
        $user->role_id=1;
        $user->en_first_name="Admin";
        $user->en_last_name="user";
//        $user->bn_first_name=
//        $user->bn_last_name=
        $user->email="admin@gmail.com";
        $user->email_verified=1;
        $user->email_verified_at=Carbon::now();
        $user->phone='01877756677';
        $user->phone_verified=1;
        $user->phone_verified_at=Carbon::now();
//        $user->phone_2=
        $user->password=Hash::make('123456');
        $user->google_login_id=
        $user->facebook_login_id=
        $user->status=1;
        $user->created_at=Carbon::now();
//        $user->created_by=
//        $user->updated_at=
//        $user->updated_by=
//        $user->deleted=
//        $user->deleted_at=
//        $user->deleted_by=
        $user->save();
    }
}
