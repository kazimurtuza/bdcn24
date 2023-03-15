<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaImage extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "media_images";

    protected $fillable = [
        'type',
        'image_full_path',
        'image',
        'attributed_image_path',
        'name',
        'alt_text',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];
}
