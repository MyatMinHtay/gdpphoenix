<!DOCTYPE html>
<html>
<head>


    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:title" content="DYC Myanmar" />
    <meta property="og:description" content="Looking for professional guidance in Myanmar? Our Free Consult Service offers you personalized advice without any charge. Whether you're navigating legal, financial, educational, or health-related decisions, our dedicated team is here to help. Accessible and committed to your success, we provide clear, reliable guidance tailored to your needs. Empower yourself today with expert support and make informed decisions for a brighter future. Connect with us for a free consultation!" />
    
    <meta property="og:image" content="{{ asset('./assets/img/logo.jpg') }}" />
    <meta property="og:url" content="{{ url()->current() }}" />

    <meta name="keywords" content="dyc myanmar,free consult service,free consult service in myanmar,business,knowledge,advice,entrepreneurship,my world career,rise for career,small business in myanmar,small business ideas in myanmar">


    <title>Develop Your Career</title>

    <!-- favicon  -->
    <link href="{{ asset('./assets/img/logo.jpg') }}" width="16" rel="icon" type="image/jpg">

   <!-- fontawesome  -->
   <link href="{{ asset('./assets/fontawesomefree/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- bootstrap css 1 js1 -->
    <link href="{{ asset('./assets/css/bootstrap.min.css') }}" rel="stylesheet"  type="text/css" />

    {{-- jquery ui css 1 js1  --}}

    <link href="{{ asset('./assets/css/jquery-ui.min.css') }}" rel="stylesheet"  type="text/css">

     {{-- glider css 1 js 1  --}}
     <link href="{{ asset('./assets/css/glider.min.css') }}?v=1" rel="stylesheet" type="text/css" />



    {{-- swiper css 1 js 1 --}}
    <link rel="stylesheet" href="{{ asset('./assets/css/swiper-bundle.min.css') }}">
    <script src="{{ asset('./assets/js/swiper-bundle.min.js') }}"></script>

     {{-- flickity css 1 js1  --}}
    <link rel="stylesheet" href="{{ asset('assets/css/flickity.css') }}">

    <!-- custom css -->
    <link href="{{ asset('./assets/css/style.css') }}?v=1" rel="stylesheet" type="text/css" />


<body id="nightbody" onload="dayornightcheck()">



  <x-navbar></x-navbar>

   {{$slot}}


   <x-footer></x-footer>


    {{-- fontawesome css1 js1  --}}
    <script src="{{ asset('./assets/fontawesomefree/js/all.min.js') }}" type="text/javascript"></script>

    <!-- jquery js1  -->
    <script src="{{ asset('./assets/js/jquery.min.js') }}" type="text/javascript"></script>

    {{-- flickity css 1 js1  --}}

    <script src="{{ asset('assets/js/flickity.pkgd.min.js') }}"></script>

    {{-- jquery ui css 1 js1 --}}

    <script src="{{ asset('./assets/js/jquery-ui.min.js') }}" type="text/javascript"></script>



    <!-- bootstrap css1 js1  -->
    <script src="{{ asset('./assets/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>

    {{-- glider css1 js1  --}}
    <script src="{{ asset('./assets/js/glider.min.js') }}" type="text/javascript"></script>

    <!-- custom js  -->
    <script src="{{ asset('./assets/js/app.js') }}" type="text/javascript"></script>


    <!-- jquery validate  -->
    <script src="{{ asset('./assets/js/jquery.validate.min.js') }}"></script>




</body>
</html>
