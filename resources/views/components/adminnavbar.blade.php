<!-- navbar section  -->


              
<!-- Strat Header  -->
<div class="container-fluid">
    <header id="home">
      <!-- Start Navbar  -->
      
       

      <nav class="navbar bg-body-tertiary sticky-top customnavbar mt-1">
        <div class="container-fluid customnavbarchild">
         
             <div class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                  <i class="fa-solid fa-bars"></i>
             </div>


           <a class="navbar-brand fontcolor" href="/">Develop Your Career</a>

          <div class="offcanvas offcanvas-start bg-primarys" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
             <div class="userimgcontainer" style="background: url('{{ asset(auth()->user()->userphoto) }}'); background-position: center;
                  background-repeat: no-repeat;
                  background-size: cover;">
                   {{-- user photo  --}}
                  </div>
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">{{auth()->user()->username}} </h5>
             
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body bg-primarys">
             
           
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/dashboard">
                       <i class="fa-solid fa-house icon fs-5"></i>Dashboard
                  </a>
                </li>

                

                

                <li class="nav-item">
                  <a class="nav-link" href="/videos">
                       <i class="fa-solid fa-w fs-5 icon"></i>
                       Videos</a>
                </li>


                

                


                

                <li class="nav-item">
                 <a class="nav-link" href="/categories">
                      <i class="fa-solid fa-g fs-5 icon"></i>
                    
                      Category</a>
               </li>

              

                <li class="nav-item">
                  <a class="nav-link" href="/users">
                       
                       <i class="fa-solid fa-user fs-5 icon"></i>
                       Users</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="/logout">
                       <i class="fa-solid fa-circle-chevron-left fs-5 icon"></i>
                       Logout</a>
                </li>

                



               
              </ul>
              
            </div>
          </div>
        </div>
   </nav>
      
      <!-- End Navbar  -->



    </header>
  </div>
<!-- End Header  -->



    <div class="mt-5">
        @if (session('success'))
        <x-alert type='success'>{{session('success')}}</x-alert>
      @endif
  
      @if (session('warning'))
          <x-alert type='warning'>{{session('warning')}}</x-alert>
      @endif
  
      @if (session('danger'))
          <x-alert type='danger'>{{session('danger')}}</x-alert>
      @endif

        <x-error name="error"></x-error>
    </div>

    {{-- <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-3260ba9a-aff4-4e9f-a2b2-d15e746e08b8" data-elfsight-app-lazy></div> --}}

<!-- navbar section  -->  