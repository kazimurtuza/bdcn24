<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BdThana extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'bd_thanas';

    protected $fillable = [
        'district_id',
        'name',
        'bn_name',
        'url',
    ];
}
