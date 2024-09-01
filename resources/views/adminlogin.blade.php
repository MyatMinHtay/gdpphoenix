
<x-layout>
    <div class="container">

        <div class="container loginbox displayFixer mt-3 py-3">
            <div class="col-12 col-sm-8 col-lg-5 mx-auto p-3 loginformContainer">
                      <h2 class="text-center">Login</h2>
                 
                      <form action="/login" class="loginForm" method="post">
    
                        @csrf
                           <div class="form-group mx-auto my-1">
                                <label for="email">Email</label>
                                <input type="email" id="email" value="{{old('email')}}" name="email" class="form-control inputbox" autocomplete="off" required/>
                           </div>
    
                           <x-error name="email"></x-error>
    
                           <div class="form-group mx-auto my-1">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" value="{{old('password')}}" class="form-control inputbox" autocomplete="off" required/>
                           </div>
    
                           <x-error name="password"></x-error>
                           
                           
                           <div class="form-check col-6 me-auto my-1">
                             <input class="form-check-input" type="checkbox" value="1" name="remember" class=" "  id="flexCheckChecked" checked>
                             <label class="form-check-label" for="flexCheckChecked">
                               Remember me
                             </label>
                             
                           </div>
    
                             
    
                           <div class="d-grid col-6 mx-auto mt-3 loginbtn bg-primarys">   
                            
                                <button type="submit" id="submitbtn" name="submitLogin" class="btn rounded-pill ">Login</button>  
                                  
                           </div>
    
                             
                             
                           
                      </form>
            </div> 
        </div>
        

    </div>
</x-layout>
    

