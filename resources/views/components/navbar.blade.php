<!-- navbar section  -->


              
<!-- Strat Header  -->
<div class="container">
      <header id="home">
        <!-- Start Navbar  -->
        
            <nav class="navbar navbar-expand-lg">
            
                <a class="navbar-brand displayfixer p-1" href="/">
                    <div class="barndcontainer">
                       
                    </div>
                    <span class="navbarfontsize mx-2 brandtext">GDP Phoenix</span>
      
                </a>
                
    
                <button class="navbar-toggler navbarbuttons" data-bs-toggle="collapse" data-bs-target="#nav">
                    <div class="bg-light lines1"></div>
                    <div class="bg-light lines2"></div>
                    <div class="bg-light lines3"></div>
                </button>
    
                <div class="navbar-collapse collapse justify-content-end text-uppercase fw-bolder" id="nav">
                    <ul class="navbar-nav">
                        <li class="navbar-item"><a href="#home" class="nav-link m-2 menuitems">Home</a></li>
                        <li class="navbar-item"><a href="#mission" class="nav-link m-2 menuitems">Missing</a></li>
                        <li class="navbar-item"><a href="#collection" class="nav-link m-2 menuitems">collection</a></li>
                        <li class="navbar-item"><a href="#gallery" class="nav-link m-2 menuitems">Gallery</a></li>
                        <li class="navbar-item"><a href="#customer" class="nav-link m-2 menuitems">customer</a></li>
                        <li class="navbar-item"><a href="#pricing" class="nav-link m-2 menuitems">Pricing</a></li>
                        <li class="navbar-item"><a href="#contact" class="nav-link m-2 menuitems">Contact</a></li>
                    </ul>
                </div>
    
              
            </nav>
        
        <!-- End Navbar  -->

        <!-- Start Banner  -->
            <div class="text-light text-center text-md-end banners">
                <h1 class="display-4 bannerheaders">Welcome to <span class="display-3">GDP</span> <span class="text-uppercase">Phoenix</span></h1>
                <p class="lead bannerparagraphs">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        <!-- End Banner  -->

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

      <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-3260ba9a-aff4-4e9f-a2b2-d15e746e08b8" data-elfsight-app-lazy></div>

<!-- navbar section  -->  