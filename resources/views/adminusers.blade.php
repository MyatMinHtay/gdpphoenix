<x-adminlayout>
    <div class="container">


         <h1 class="text-center bg-purple mt-3">Users</h1>

         <div class="col-12 d-flex justify-content-end my-3">
           
           <a  class="btn btn-primary mx-2" data-bs-target="#usercreatemodal" data-bs-toggle="modal"><i class="fa-solid fa-plus mx-1"></i>Add Users</a>
         </div>

       


         <div class="container-fluid my-3">
              <div class="row justify-content-center">
                   <div class="col-md-12">
                       
                            

                             
                             <form action="" method="GET">
                                  <div class="d-flex justify-content-between flex-wrap">
                                       <div class="form-group mr-2">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" value="{{request('name')}}" id="name" name="name" placeholder="Enter name">
                                       </div>

                                       

                                       <div class="form-group mr-2">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" value="{{request('email')}}" id="email" name="email" placeholder="Enter email">
                                       </div>

                                       <div class="form-group">
                                            <button type="submit" class="btn btn-primary mt-4">Search</button>
                                       </div>
                                  </div>
                             </form>
                         
                        
                   </div>
              </div>
         </div>

         

       
     
       

         
         <x-error name="username"></x-error>
         <x-error name="email"></x-error>
         <x-error name="password"></x-error>
         <x-error name="password_confirmation"></x-error>
         <x-error name="userimg"></x-error>

         <div class="table-responsive">
              <table class="table table-hover table-bordered border-1 table-primary">
                   <thead>
                        <th scope="col">Id</th>
                        
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        
                       
                        
                        <th scope="col">Status</th>
                        
                        <th scope="col">Edit</th>
                        
                        <th scope="col">Lock</th>
                        <th scope="col">Un Lock</th>
                        
                   </thead>
                   <tbody>
                    @forelse ($users as $user)
                    <tr>
                         <td scope="row">{{$user->id}}</td>
                        
                         <td scope="row">{{$user->username}}</td>
                         <td scope="row">{{$user->email}}</td>
                         

                         <td scope="row">{{$user->status}}</td>
                       
                        
                         <td scope="row" class="text-center"><a href="/admin/users/edit/{{$user->username}}"  class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a></td>
                         
                        
                         <td scope="row" class="text-center"><a href="/admin/users/lock/{{$user->username}}" onclick="confirm('Are you sure lock this account?')" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                         <td scope="row" class="text-center"><a href="/admin/users/unlock/{{$user->username}}" onclick="confirm('Are you sure unlock this account?')" class="btn btn-success"><i class="fa-solid fa-unlock"></i></a></td>
                    </tr>
                    
                    
               @empty
                     <tr>
                           <td scope="row" colspan="9" class="text-center">There is no record</td>                                                                                                             
                     </tr>
               @endforelse
                       
                   </tbody>
              </table>

              <div class="col-12 displayfixer mt-3 justify-content-end">
                   
                 </div>
         </div>
         
    </div>

  
    {{-- Create Modal  --}}
    <div class="modal fade" id="usercreatemodal">
         <div class="modal-dialog modal-lg">
           <div class="modal-content">
             <div class="modal-header">
             
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>

           
             <div class="modal-body">
              <div class="card p-4 my-3 shadow-sm loginformContainer d-flex">
                   <div class="row">
 
                  
                       <div class="col-12 col-md-6 mx-auto">
                           <form action="/admin/users/create" class="signupbox" method="POST" enctype="multipart/form-data">
                             @csrf
                             <h3 class="text-center fontcolor">Add User</h3>
                             
 
                               <div class="form-group mb-3">
                                 <label for="username">Username</label>
                                 <input 
                                 type="text" 
                                 class="form-control inputbox"
                                 value="{{old('username')}}"
                                 name="username" id="username" aria-describedby="emailHelp" placeholder="Enter Username"
                                 required>
                                 
                                 
                                
                               </div>

                             <div class="form-group mb-3">
                               <label for="exampleInputEmail1">Email address</label>
                               <input 
                               type="email"
                               class="form-control inputbox"
                                 name="email"
                                 value="{{old('email')}}" 
                                 id="exampleInputEmail1" 
                                 aria-describedby="emailHelp" 
                                 placeholder="Enter email"
                                 required>
         
                                
                             </div>
 
                             
 
                             <div class="form-group mb-3">
                               <label for="exampleInputPassword1">Password</label>
                               <input 
                               type="password" class="form-control inputbox" 
                               name="password"
                               required
                               
                               id="password" placeholder="Password">
                              
                             
                               
                             </div>
 
                             <div class="form-group mb-3">
                               <label for="password_confirmation">Confirm Password</label>
                               <input type="password" class="form-control inputbox" name="password_confirmation" placeholder="Confirm Password" id="password_confirmation" required>
 
                               
                             </div>
 
                             <div class="form-group mb-3">
                               <label for="userimg">Photo</label>
                               <input 
                               type="file" class="form-control inputbox" 
                               name="userimg" id="userimg" placeholder="User Photo">
                       
                             
                             </div>
 
                             
                             
                             
                             
                         
           
                                 
                          
                       </div>
                       
                 </div>

                
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="submit" id="submitbtn" name="submitLogin" class="btn btn-success inputbox">Add  User</button>  
             </div>
         </form>
           </div>
         </div>
    </div>

   

    

   

   

  
</x-adminlayout>



