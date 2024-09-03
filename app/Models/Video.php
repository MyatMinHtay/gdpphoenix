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

    public function scopeFilter($query,$filter){  //Blog::latest()->filter()
            
        $query->when($filter['videotitle'] ?? false,function($query,$videotitle){

           $query->where(function ($query) use ($videotitle){
               $query->where('videotitle','LIKE','%'.$videotitle.'%');
         
           });
           
          
       });


       $query->when($filter['category'] ?? false,function($query,$category){

       
           $query->whereHas('categories',function($query) use ($category){
                   $query->where('categoryname',$category);
           });
       
       });

       

      
   } 

    public function videocategory(){
        return $this->hasMany(VideoCategory::class,'video_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'video_categories', 'video_id', 'category_id');
    }


   
}
