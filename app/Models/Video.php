<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category; // Ensure this is correctly included in Video.php
  // Ensure this is correctly included in Category.php


class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'videotitle',
        'videolink',
        'videoslug',
        'videodescription',
        'videothumbnail',
        'created_by'
    ];

    public function videocategory(){
        return $this->hasMany(VideoCategory::class,'video_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'video_categories', 'video_id', 'category_id');
    }


   
}
