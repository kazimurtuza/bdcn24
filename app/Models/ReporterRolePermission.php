<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReporterRolePermission extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "reporter_role_permissions";
    protected $fillable = [
        'reporter_role_id',
        'permission_name',
        'permission_slug',
        'has_permission',
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
