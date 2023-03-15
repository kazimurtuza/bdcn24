<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReporterEducationalInformation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "reporter_educational_information";
    protected $fillable = [
        'user_id',
        'institute_name',
        'examination',
        'group',
        'grade',
        'board',
        'passing_year',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted',
        'deleted_at',
        'deleted_by',

    ];
}
