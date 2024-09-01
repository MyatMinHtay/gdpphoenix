<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoryname'
        
    ];

   

    public function videos()
    {
        // Many-to-Many relationship with Video
        return $this->belongsToMany(Video::class, 'video_categories', 'category_id', 'video_id');
    }
}
