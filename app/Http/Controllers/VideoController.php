<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Video;
use App\Models\VideoCategory;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class VideoController extends Controller
{
    //
    public function index(Request $request){

        $videotitle = $request->input('videotitle');
       
        if($videotitle){
            $query = Video::query();

            if ($videotitle) {
                $query->where('videotitle', 'LIKE', '%' . $videotitle . '%');
            }

            
            $videos = $query->paginate(30);

           
     }else{
        $videos =  Video::latest()->paginate(30)->withQueryString();
     }
     

        return view('video/index',[
            'videos' => $videos
        ]);
    }

    //show courses 
    public function showcourses(){
        $videos =  Video::latest()->paginate(30)->withQueryString();

        return view('courses',[
            'videos' => $videos
        ]);
    }

    public function createvideo(){
        $categories = Category::all();
        return view('video.create',[
            'categories' => $categories
        ]);
    }

    public function storevideo(){
        $formData = request()->validate([
            'videotitle' => 'required',
            'videoslug' => 'required',
            'videodescription' => 'nullable',
            'videolink' => 'required',
            'videocategories' => 'required',
           
           'videothumbnail' => ['mimes:jpeg,png,jpg','max:10240'],
        ]);

  

        

        if($file = request()->file('videothumbnail')){
           
            $image_name = md5(rand(1000, 10000));
            $ext = strtolower($file->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = './assets/thumbnails/';
            $image_url = $upload_path.$image_full_name;
            $file->move($upload_path, $image_full_name);
            $formData['videothumbnail'] = $image_url;
        
        }else{
            $formData['videothumbnail'] = "./assets/thubmnails/default.png";
        }

        
        
        if(isset($formData['videocategories'])){
            $videocategories  = $formData['videocategories'];
            unset($formData['videocategories']);
        }

        $formData['created_by'] = Auth::user()->username;

        try{
           
            // dd($formData);
            $video = Video::create($formData);
           
           

            if($video){
                
                $id = $video->id;
                foreach ($videocategories as $videocategory) {
                    $videocategorydata = [];
                    $videocategorydata['video_id'] = $id;
                    $videocategorydata['category_id'] = $videocategory;
    
                    $video->videocategory()->create($videocategorydata);
                }
                
                return redirect('/videos')->with('success','Video Create Successfully');
            }

           
       }catch(QueryException $e){
            
            return back()->withErrors('errors',$e->getMessage());
       }

        
    }

    public function editvideo(Video $video){

        $video = Video::with('categories')->find($video->id);
         
        
       

        $categories = Category::all();
        
       
        return view('video.edit',[
            'video' => $video,
            'categories' => $categories
        ]);
    }

    public function updatevideo(Video $video){
        $formData = request()->validate([
            'videotitle' => 'required',
            'videoslug' => 'required',
            'videodescription' => 'nullable',
            'videolink' => 'required',
            'videocategories' => 'required',
           
           'videothumbnail' => ['mimes:jpeg,png,jpg','max:10240','sometimes'],
        ]);

  

        

        if($file = request()->file('videothumbnail')){
            
            $image_name = md5(rand(1000, 10000));
            $ext = strtolower($file->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $firstpath = './assets/thumbnails/';

           
            if(File::exists(public_path().$video->videothumbnail)){
                File::delete(public_path().$video->videothumbnail);
            }


            
            $upload_path = $firstpath;
            $image_url = $upload_path . $image_full_name;
            $file->move($upload_path, $image_full_name);
            $formData['videothumbnail'] = $image_url;
        
        }

        
        
        if(isset($formData['videocategories'])){
            $videocategories  = $formData['videocategories'];
            unset($formData['videocategories']);
        }

        $formData['created_by'] = Auth::user()->username;

        try{
           
           
            $updatevideo = $video->update($formData);
            
           

            if($updatevideo){
                $deletevideocategories = $video->videocategory()->delete();
                $id = $video->id;
                foreach ($videocategories as $videocategory) {
                    $videocategorydata = [];
                    $videocategorydata['video_id'] = $id;
                    $videocategorydata['category_id'] = $videocategory;
    
                    $video->videocategory()->create($videocategorydata);
                }
                
                return redirect('/videos')->with('success','Video Update Successfully');
            }

           
       }catch(QueryException $e){
            
            return back()->withErrors('errors',$e->getMessage());
       }

    }

    public function deletevideo(Video $video){
        try{

            $deletevideocategories = VideoCategory::where('video_id',$video->id)->delete();
            $deletevideo = $video->delete();
            

            if($deletevideo){
                if(File::exists(public_path($video->blogcoverphoto))){
                    File::delete(public_path($video->blogcoverphoto));
                
                }
                $video->videocategory()->delete();
            }

            return redirect('/videos')->with('success','Video Delete Successfully');
       }catch(QueryException $e){
            if ($e->errorInfo[1] == 1451) {
                return back()->withErrors(['error' => 'Cannot delete this video because it is referenced by another table.']);
            } else {
                return back()->withErrors(['error' => $e->getMessage()]);
            }
       }
    }


}
