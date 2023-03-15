<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReporterIdCardDetails extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "reporter_id_card_details";
    protected $fillable = [
        'user_id',
        'issue_date',
        'expire_date',
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
