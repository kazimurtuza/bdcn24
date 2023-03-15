<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostChildCategory extends Model
{
    use HasFactory;

    public $timestamps = "false";
    protected $table = "post_child_categories";
    protected $fillable = [
        'post_category_id',
        'post_sub_category_id',
        'language',
        'name',
        'slug',
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
