<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BdDivision extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'bd_divisions';

    protected $fillable = [
        'name',
        'bn_name',
        'url',
    ];
}
