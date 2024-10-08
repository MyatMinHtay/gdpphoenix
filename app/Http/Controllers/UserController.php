<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Chapter;
use App\Models\Subscribe;
use App\Models\SystemRole;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    
    public function index(Request $request){

            $name = $request->input('name');
           
            $email = $request->input('email');
         if($name ||  $email){
                $query = User::query();

                if ($name) {
                    $query->where('username', 'LIKE', '%' . $name . '%');
                }

                if ($email) {
                    $query->where('email', 'LIKE', '%' . $email . '%');
                }

                $users = $query->paginate(30);

               
         }else{
            $users =  User::latest()->paginate(30)->withQueryString();
         }
         
        
   
        

      

        return view('adminusers',[
            "users" => $users,
           
            "request" => $request
        ]);

    }

    public function createuser(){

        // dd(request()->all());

        $formData = request()->validate([
            
            'email'=>['required','email',Rule::unique('users','email')],
            'username'=>['required','max:255','min:3',Rule::unique('users','username'),'regex:/^[A-Za-z0-9]+$/'],
            'password' => [
                'required',
                'confirmed', // Make sure the password confirmation field is present and matches the password field
                'min:8', // Require a minimum of 8 characters
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
                // Require at least one lowercase letter, one uppercase letter, one number, and one special character from @$!%*?&
            ],
            'userphoto' => ['nullable,image,mimes:jpeg,png,jpg,svg,max:2048'], 
           
            
        ],[
            'email.required'=>'we need your email address',
            'password.min'=>'Password should be more than 8 characters',
            
            'username.required'=>'username must be required'
            
        ]);

        

        $formData['status'] = "active";

        
            if($file = request()->file('userimg')){
           
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = './assets/avatars/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $formData['userphoto'] = $image_url;
            
            }else{
                $formData['userphoto'] = "./assets/avatars/user.png";
            }
        
         	


            try{
             
                $user = User::create($formData);

                return redirect()->route('users')->with('success','User ' . $user->username . '  Account Created Successfully ');
            }catch(QueryException $e){
                 return back()->withErrors(['error' => $e->getMessage()]);
            }

           
       
    }

    public function edituser(User $user){

        
        return view('edit',[
            'user' => $user,
            
        ]);
    }

    public function updateuser(User $user,Request $request){

                $imagepath = auth::user()->userphoto;

                $formData = $request->validate([
                    
                    'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
                    'username' => ['required', 'max:255', 'min:3', Rule::unique('users')->ignore($user->id), 'regex:/^[A-Za-z0-9]+$/'],
                    
                    'userphoto' => ['mimes:jpeg,png,jpg','max:2048','sometimes'],
                    'password' => 'nullable|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
                    'password_confirmation' => 'sometimes|same:password',
                ], [
                    'email.required' => 'required email address',
                    'username.required' => 'Username is required',
                ]);

             
              
                if($file = request()->file('userphoto')){


                    if($imagepath != './assets/avatars/user.png'){
                        if(File::exists(public_path().$imagepath)){
                            File::delete(public_path().$imagepath);
                        }
                    }
                   
                    $image_name = md5(rand(1000, 10000));
                    $ext = strtolower($file->getClientOriginalExtension());
                    $image_full_name = $image_name.'.'.$ext;
                    $upload_path = './assets/avatars/';
                    $image_url = $upload_path.$image_full_name;
        
                    
                    $file->move($upload_path, $image_full_name);
                   
                    $formData['userphoto'] = $image_url;
                }

             

               
           
                try {
                    $user->update($formData);

                    return redirect()->route('users')->with('success', 'User updated successfully');
                } catch (QueryException $e) {
                    return back()->withErrors(['error' => $e->getMessage()]);
                }
            

    }

    public function lockuser(User $user){
        try{
            $user->status = "inactive";
            $user->save();

            return redirect()->route('users')->with('success','User Account Locked Successfully');
        }catch(QueryException $e){
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function unlockuser(User $user){
        try{
            $user->status = "active";
            $user->save();

            return redirect()->route('users')->with('success','User Account Unlocked Successfully');
        }catch(QueryException $e){
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function gologin(){

        
        $user = auth::user();

   
        
        // dd($user);
        if ($user) {
            return redirect('/dashboard')->with('warning','You Already Login');
        }

        return view('/adminlogin');
    }

    public function godashboard(){
        $user = Auth::user();


        return view('admindashboard',[
            'user' => $user
        ]);
    }




         

}
