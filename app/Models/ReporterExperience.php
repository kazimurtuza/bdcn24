<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReporterExperience extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "reporter_experiences";
    protected $fillable = [
        'user_id',
        'designation',
        'company_name',
        'joining_date',
        'end_date',
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
