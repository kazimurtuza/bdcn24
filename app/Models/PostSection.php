<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostSection extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "post_sections";
    protected $fillable = [
        'post_id',
        'image_id',
        'image_caption',
        'description',
        'related_post_id',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted',
        'deleted_at',
        'deleted_by',
    ];

    public function sectionImage(){
        return $this->belongsTo(MediaImage::class,'image_id','id');
    }

    public function relatedPost(){
    return $this->belongsTo(Post::class,'related_post_id','id');
    }
}
