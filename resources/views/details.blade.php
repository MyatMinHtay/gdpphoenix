<x-layout>
    <div class="container">

        <div class="row">

            <div class="col-12 col-md-8">
                <iframe width="100%" height="400" src="{{$video->videolink}}" frameborder="0"  allowfullscreen></iframe>

                <h1>{{$video->videotitle}}</h1>
                <p>uploaded by admin</p>

                <p class="videodescription">{{$video->videodescription}}</p>
            </div>

            <div class="col-12 col-md-4 popularvideocontainer">
                <h1>Popular Video</h1>
                <hr>

                @forelse ($popularvideos as $popularvideo)
                <a href="/courses/details/{{$popularvideo->videoslug}}" class="text-decoration-none d-flex text-dark">
                <div class="col-12 d-flex videocontainer">

                        <div class="videoimgcontainer">
                            <img src="{{asset($popularvideo->videothumbnail)}}" width="100px" height="80px" alt="">
                        </div>

                        <div class="m-1 p-1">
                            <h6>{{$popularvideo->videotitle}}</h6>
                            <p>admin</p>


                        </div>

                </div>
            </a>
                @empty
                    <p>there is nothing video</p>
                @endforelse



            </div>

        </div>

        <div class="row">
            <div class="col-12 my-5">
                {{--start category menu  --}}
                <div class="main-carousel">

                    @forelse ($categories as $category)
                        <a href="/courses?category={{$category->categoryname}}"" class="text-decoration-none text-dark">
                            <div class="carousel-cell">{{$category->categoryname}}</div>
                        </a>
                    @empty

                    @endforelse

                </div>

    {{-- end category menu  --}}
            </div>
        </div>
    </div>
</x-layout>

<script type="text/javascript">

    $('.main-carousel').flickity({
      // options
      cellAlign: 'left',
      contain: false,
      draggable: true,
      pageDots: false,
      wrapAround: true
    });


    </script>
