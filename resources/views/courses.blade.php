<x-layout>
    <div class="container">

        <h1 class="text-center">Our Courses</h1>

       


        <form action="" method="GET">
            <div class=" col-12 d-flex justify-content-between my-5">
                 <div class="form-group col-9 mr-2 mx-auto">
                      <label for="videotitle">Search Your Course</label>
                      <input type="text" class="form-control" value="{{request('videotitle')}}" id="videotitle" name="videotitle" placeholder="Enter Course Title">
                 </div>

                 

                 

                 <div class="form-group col-3 d-flex justify-content-center">
                      <button type="submit" class="btn btn-primary mt-4 text-end">Search</button>
                 </div>
            </div>
       </form>


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


        <div class="row justify-content-center align-items-center">
            @forelse ($videos as $video)
            
                <div class="card m-3 p-2 col-11 col-md-4 col-lg-3">
                    <a href="./courses/details/{{$video->videoslug}}" class="text-center text-dark text-decoration-none d-inline-block">
                    <img src="{{ asset($video->videothumbnail) }}" width="100px" class="card-img-top" alt="...">
                    <div class="card-body py-2 px-1">
                        <h6 class="card-title text-start">
                            
                            {{$video->videotitle}}
                            
                        </h6>
                        <p class="text-start">{{$video->created_at->diffForHumans()}}</p>
                    
                    
                      
                    </div>
                </a>
                </div>
            
            @empty
                
            @endforelse
        </div>

        <div class="col-12 displayfixer mt-3 justify-content-end">
            {{$videos->links()}}
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