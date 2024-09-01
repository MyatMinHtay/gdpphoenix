<x-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            @forelse ($videos as $video)
                <div class="card m-3 p-2" style="width: 18rem;">
                    <img src="{{ asset($video->videothumbnail) }}" width="100px" class="card-img-top" alt="...">
                    <div class="card-body py-2 px-1">
                    <h5 class="card-title d-flex justify-content-between align-items-center">
                        
                        <span class="badge text-bg-secondary text-white">
                            
                            Notifications
                        
                        </span>

                        <span class="badge text-bg-secondary">$40</span>
                        
                    </h5>
                    <h3 class="card-text">{{$video->videotitle}}</h3>
                    <p class="card-text">{{$video->videodescription}}</p>
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="./courses/{{$video->videoslug}}" class="btn btn-primary text-center">Watch Now</a>
                        </div>
                    </div>
                </div>
            @empty
                
            @endforelse
        </div>
    </div>
</x-layout>