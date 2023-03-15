<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReporterCertificate extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "reporter_certificates";
    protected $fillable = [
        'user_id',
        'title',
        'image',
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
