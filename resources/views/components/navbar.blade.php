<!-- navbar section  -->


              
<!-- Strat Header  -->
    <div class="container">
      <header id="home">
        <!-- Start Navbar  -->
        
            <nav class="navbar navbar-expand-lg sticky-top">
            
                <a class="navbar-brand displayfixer p-1" href="/">
                    <div class="barndcontainer">
                       
                    </div>
                    <span class="navbarfontsize mx-2 brandtext">Develop Your Career</span>
      
                </a>
                
    
                <button class="navbar-toggler navbarbuttons" data-bs-toggle="collapse" data-bs-target="#nav">
                    <div class="bg-light lines1"></div>
                    <div class="bg-light lines2"></div>
                    <div class="bg-light lines3"></div>
                </button>
    
                <div class="navbar-collapse collapse justify-content-end text-uppercase fw-bolder" id="nav">
                    <ul class="navbar-nav">
                        <li class="navbar-item"><a href="/" class="nav-link m-2 menuitems">Home</a></li>
                        <li class="navbar-item"><a href="/about" class="nav-link m-2 menuitems">About</a></li>
                        <li class="navbar-item"><a href="/donate" class="nav-link m-2 menuitems">Donate</a></li>
                        <li class="navbar-item"><a href="/courses" class="nav-link m-2 menuitems">Courses</a></li>
                        
                        @auth
                            <li class="navbar-item"><a href="/dashboard" class="nav-link m-2 menuitems">Dashboard</a></li>
                        @endauth
                    </ul>
                </div>

                
                {{-- <div class="buttoncontainer d-none d-lg-flex p-3">
                    <button class="btn btn-primary mx-2">Sign In</button>
                    <button class="btn btn-success mx-2">Sign Up</button>
                </div> --}}
              
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