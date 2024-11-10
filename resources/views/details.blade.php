<!DOCTYPE html>
<html>
<head>


    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">




    @if(isset($video))
        <meta name="title" content="{{ $video->videotitle }}">
        <meta name="description" content="{{ $video->videodescription }}">
        <meta name="keywords" content="{{ $video->videokeywords }}">
    @endif

    @if(isset($video))
        <meta property="og:title" content="{{ $video->videotitle }}" />
        <meta property="og:description" content="{{ $video->videodescription }}" />
        <meta property="og:image" content="{{ $video->videothumbnail }}" />
        <meta property="og:url" content="{{ url()->current() }}" />
    @endif



    <title>{{ $video->videotitle }}</title>

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

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8" itemscope itemtype="http://schema.org/Course">
                <article>
                    <iframe width="100%" height="400" src="{{$video->videolink}}" frameborder="0" allowfullscreen></iframe>

                    <h1 itemprop="name">{{$video->videotitle}}</h1>
                    <p>Uploaded by admin</p>
                    <meta itemprop="dateCreated" content="{{$video->created_at}}">
                    <p class="videodescription" itemprop="description">{{$video->videodescription}}</p>
                </article>
            </div>

            <aside class="col-12 col-md-4 popularvideocontainer">
                <h2>Popular Videos</h2>
                <hr>
                @forelse ($popularvideos as $popularvideo)
                    <a href="/courses/details/{{$popularvideo->videoslug}}" class="text-decoration-none d-flex text-dark">
                        <div class="col-12 d-flex videocontainer">
                            <div class="videoimgcontainer">
                                <img src="{{asset($popularvideo->videothumbnail)}}" width="100px" height="80px" alt="{{$popularvideo->videotitle}}">
                            </div>
                            <div class="m-1 p-1">
                                <h3 class="h6">{{$popularvideo->videotitle}}</h3>
                                <p>Admin</p>
                            </div>
                        </div>
                    </a>
                @empty
                    <p>There is no video available</p>
                @endforelse
            </aside>
        </div>

        <div class="row">
            <div class="col-12 my-5">
                {{-- Start Category Menu --}}
                <nav aria-label="Video Categories" class="main-carousel">
                    @forelse ($categories as $category)
                        <a href="/courses?category={{$category->categoryname}}" class="text-decoration-none text-dark">
                            <div class="carousel-cell">{{$category->categoryname}}</div>
                        </a>
                    @empty
                        <p>No categories available</p>
                    @endforelse
                </nav>
                {{-- End Category Menu --}}
            </div>
        </div>
    </div>

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

<script type="text/javascript">
    $('.main-carousel').flickity({
        cellAlign: 'left',
        contain: false,
        draggable: true,
        pageDots: false,
        wrapAround: true
    });
</script>
