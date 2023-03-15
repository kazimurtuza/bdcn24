<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "posts";
    protected $fillable = [
        'language',
        'related_post_type',
        'post_category_id',
        'post_sub_category_id',
        'post_child_category_id',
        'division_id',
        'district_id',
        'thana_id',
        'title',
        'slug',
        'subtitle',
        'first_description',
        'post_tags',
        'second_description',
        'seo_meta_keyword',
        'seo_meta_description',
        'featured_image_id',
        'youtube_video_link',
        'soundcloud_audio_link',
        'is_featured',
        'is_featured_left',
        'is_featured_right',
        'is_breaking_news',
        'post_status',
        'author_id',
        'is_schedule',
        'publish_at',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted',
        'deleted_at',
        'deleted_by',
    ];

    protected $appends=[
        'post_status_name'
    ];

    public function getPostStatusNameAttribute()
    {
        $name='';
        if($this->post_status==0){
            $name='Draft';
        }
        if($this->post_status==1){
            $name='Published';
        }
        if($this->post_status==2){
            $name='Pending';
        }
        if($this->post_status==3){
            $name='UnPublish';
        }

        return $name;
    }

    public function uploadImage(){
        return $this->belongsTo(MediaImage::class,'featured_image_id','id');
    }
    public function reporterInfo(){
        return $this->belongsTo(User::class,'author_id','id');
    }
    public function category(){
        return $this->belongsTo(PostCategory::class,'post_category_id','id');
    }
    public function subCategory(){
        return $this->belongsTo(PostSubCategory::class,'post_sub_category_id','id');
    }
    public function childCategory(){
        return $this->belongsTo(PostChildCategory::class,'post_child_category_id','id');
    }
    public function district(){
        return $this->belongsTo(BdDistrict::class,'district_id','id');
    }
    public function postSection(){
        return $this->hasMany(PostSection::class,'post_id','id');
    }
}
