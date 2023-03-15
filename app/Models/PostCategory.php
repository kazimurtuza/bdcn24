<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "post_categories";

    protected $fillable = [
        'language',
        'name',
        'slug',
        'image',
        'color',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted',
        'deleted_at',
        'deleted_by',
    ];

    public function subcategory(){
       return  $this->hasMany(PostSubCategory::class,'post_category_id','id');
    }

}
