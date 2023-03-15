<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReporterRole extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "reporter_roles";
    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_default',
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
