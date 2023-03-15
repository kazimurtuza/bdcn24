<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $timestamps = false;
    protected $table = "users";
    protected $fillable = [
        'user_id',
        'type',
        'role_id',
        'en_first_name',
        'en_last_name',
        'bn_first_name',
        'bn_last_name',
        'email',
        'email_verified',
        'email_verified_at',
        'validation_code',
        'phone',
        'phone_verified',
        'phone_verified_at',
        'phone_2',
        'password',
        'google_login_id',
        'facebook_login_id',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted',
        'deleted_at',
        'deleted_by',

    ];
    protected $appends=['bn_full_name','en_full_name'];



    public function getBnFullNameAttribute()
    {
        return $this->bn_first_name . ' ' . $this->bn_last_name;
    }
    public function getEnFullNameAttribute()
    {
        return $this->en_first_name . ' ' . $this->en_last_name;
    }

    public function userDetails(){
        return $this->hasOne(UserDetail::class,'user_id','id');
    }
    public function userRole(){
        return $this->belongsTo(ReporterRole::class,'role_id','id');
    }

    public function userSkill(){
        return $this->hasMany(ReporterSkill::class,'user_id','id');
    }

    public function  reporterCertificate(){
        return $this->hasMany(ReporterCertificate::class,'user_id','id');
    }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
