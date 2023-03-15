<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    public $timestamps = "false";
    protected $table = "user_details";
    protected $fillable = [
        'user_id',
        'image',
        'social_facebook',
        'social_twitter',
        'social_linkedin',
        'social_instagram',
        'en_designation',
        'bn_designation',
        'reporter_type_id',
        'joining_date',
        'nid',
        'passport',
        'blood_group',
        'gender',
        'father_name',
        'mother_name',
        'marital_status',
        'nationality',
        'religion',
        'date_of_birth',
        'present_address',
        'present_address_division',
        'present_address_district',
        'present_address_thana',
        'permanent_address',
        'permanent_address_division',
        'permanent_address_district',
        'permanent_address_thana',
        'attachment_nid',
        'attachment_passport',
        'attachment_signature',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted',
        'deleted_at',
        'deleted_by',
    ];

    public function reporter_type(){
        return $this->belongsTo(ReporterType::class,'reporter_type_id','id');
    }
}
