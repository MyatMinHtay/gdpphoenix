<x-adminlayout>
    <div class="container">

        <div class="col-11 mx-auto mt-5">
           
            <form action="/admin/videos/update/{{$video->videoslug}}" class="bg-color p-2" method="POST" enctype="multipart/form-data">
                 @csrf
                 <h3 class="text-center">Edit Video</h3>
            
                      <div class="row">
                           <div class="form-group mb-3">
                                     <label for="videotitle">Video Title</label>
                                     <input 
                                     type="text" class="form-control inputbox" 
                                     name="videotitle" min="3"
                                     required
                                     value="{{old('videotitle',$video->videotitle)}}"
                                     id="videotitle" placeholder="Video Title">
                           
                                     <x-error name="videotitle"></x-error>
                           </div>

                           <div class="form-group mb-3">
                                <label for="videoslug">Video Slug</label>
                                <input 
                                type="text" class="form-control inputbox" 
                                name="videoslug"
                                required
                                value="{{old('videoslug',$video->videoslug)}}"
                                
                                id="videoslug" placeholder="Video Slug">
                      
                                <x-error name="videoslug"></x-error>
                           </div>

                           <div class="form-group mb-3">
                                <label for="videothumbnail">Video Thumbnail</label>
                                <input 
                                type="file" class="form-control inputbox" 
                                name="videothumbnail"
                                
                                
                                id="videothumbnail" placeholder="Video Thumbnail">
                                <div class="col-12 col-md-6 mx-auto my-2 displayfixer" id="thumbnail-preview">
                                   <img src="{{asset($video->videothumbnail)}}" width="80%" alt="">
                                </div>
                                <x-error name="videothumbnail"></x-error>
                           </div>

                           
                           
                           <div class="form-group mb-3">
                                <label for="videodescription">Description</label>
                                <textarea name="videodescription" class="form-control" id="videodescription" cols="10" rows="10" placeholder="write something">{{$video->videodescription}}</textarea>
                      
                                <x-error name="videodescription"></x-error>
                           </div>

                          

                          

                           
                           
                           <div class="form-group mb-3 col-12 col-md-6">
                                <label for="videolink">Video Link</label>
                                <input 
                                type="text" class="form-control inputbox" 
                                name="videolink"
                                required
                                value="{{old('videolink',$video->videolink)}}"
                                
                                id="videolink" placeholder="Video Link">
                      
                                <x-error name="videolink"></x-error>
                           </div>

                          

                          

                          

                           <div class="form-group mb-3 col-12">
                                    
                                <div class="col-12 d-flex justify-content-between">
                                     <label class="d-block" for="videocategory">Video Category</label>
                                        
                                      
                                </div>

                                        <div class="videocategories my-2">
                                         
                                              @forelse ($categories as $category)

                                       

                                                       @php
                                                          $isChecked = false; // initialize $isChecked to false by default
                                                          foreach($video->categories as $gen) {
                                                              if ($gen->id == $category->id) {
                                                                  $isChecked = true; // set $isChecked to true if the genre is associated with the blog
                                                                  break;
                                                              }
                                                          }
                                                      @endphp
                                                    <label for="{{$category->categoryname}}" class="m-1">{{$category->categoryname}}</label>
                                                    <input type="checkbox" class="genresbox" name="videocategories[]" value="{{$category->id}}" id="{{$category->categoryname}}" {{$isChecked ? 'checked' : ''}}>
                                              @empty
                                                    <p>There is no Category </p>
                                              @endforelse
                                               

                                        </div>
                                         
                                     
                       
                                <x-error name="videocategories"></x-error>
                           </div>

                           <div class="form-group col-12 d-flex justify-content-end">
                                <a href="/admin/videos" class="btn btn-thirds mx-2">Cancel</a>
                                <button type="submit" class="btn btn-primarys">Update</button>
                           </div>

                      </div>

                 

            </form>

       </div>
 </div>
    </div>
</x-adminlayout>

<script type="text/javascript">
    $('document').ready(function(){
               $(".videocategories input" ).checkboxradio();
          });

          // Get the file input element
     const fileInput = document.getElementById('videothumbnail');

// Add an event listener to the file input element
fileInput.addEventListener('change', (event) => {
// Get the file object
const file = event.target.files[0];

// Create a new FileReader object
const reader = new FileReader();

// Set the onload event handler
reader.onload = (event) => {
// Create a new image element
const image = new Image();

// Set the source of the image element to the data URL
image.src = event.target.result;

// Get the image preview element
const videoThumbnail = document.getElementById('thumbnail-preview');

// Remove any existing children from the image preview element
while (videoThumbnail.firstChild) {
     videoThumbnail.removeChild(videoThumbnail.firstChild);
}

// Append the image element to the image preview element
videoThumbnail.appendChild(image);
};

// Read the file as a data URL
reader.readAsDataURL(file);
});
</script>