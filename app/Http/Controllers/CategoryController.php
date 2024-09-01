<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index(){
        return view('category.index',[
            'categories' => Category::all(),
        ]);
    }


    public function createcategory(){


        $formData = request()->validate([
           'categoryname' => 'required|unique:categories,categoryname',
          
       ],[
           'categoryname.unique' => 'genre name must be unique',
           
       ]);

      try{
        $category = Category::create($formData);

        return redirect()->back()->with('success','Category Created Successfully');

        }catch(QueryException $e){
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
        }
       
       
    }

    public function updatecategory(Category $category){
    
        $formData = request()->validate([
            'categoryname' => [
                'required',
                Rule::unique('categories')->ignore($category->id),
            ],
            
        ],[
            'categoryname.unique' => 'Genre name must be unique'
           
        ]);

        

        try{
                // update the genre with the new values
                $category = Category::find($category->id);
                $category->categoryname = $formData['categoryname'];
               
                // update other fields here
                $category->save(); 

                return redirect()->route('categories')->with('success', 'Category updated successfully!');
        }catch(QueryException $e){
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
        }
    
        
    }

    public function deletegenre(Category $category){
        try{
            $category->delete();

            return redirect()->route('categories')->with('success','Delete Category Successfully');
        }catch(QueryException $e){
            if ($e->errorInfo[1] == 1451) {
                return back()->withErrors(['error' => 'Cannot delete this Category because it is referenced by another Video.']);
            } else {
                return back()->withErrors(['error' => $e->getMessage()]);
            }
        }
    }
}
