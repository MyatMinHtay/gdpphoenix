<x-adminlayout>
   <div class="container">
    <x-showerror name="videoerror" />


        <div class="col-11 mx-auto mt-5">

                <form action="/admin/videos/create" class="bg-color p-2" method="POST" enctype="multipart/form-data">
                     @csrf
                     <h3 class="text-center">Create Video</h3>

                          <div class="row">
                               <div class="form-group mb-3">
                                         <label for="videotitle">Video Title</label>
                                         <input
                                         type="text" class="form-control inputbox"
                                         name="videotitle" min="3"
                                         required

                                         id="videotitle" placeholder="Video Title">

                                         <x-error name="videotitle"></x-error>
                               </div>

                               <div class="form-group mb-3">
                                    <label for="videoslug">Video Slug</label>
                                    <input
                                    type="text" class="form-control inputbox"
                                    name="videoslug"
                                    required

                                    id="videoslug" placeholder="Video Slug">

                                    <x-error name="videoslug"></x-error>
                               </div>

                               <div class="form-group mb-3">
                                    <label for="videothumbnail">Video Thumbnail</label>
                                    <input
                                    type="file" class="form-control inputbox"
                                    name="videothumbnail"


                                    id="videothumbnail" placeholder="Video Thumbnail">

                                    <x-error name="videothumbnail"></x-error>
                               </div>

                               <div class="col-10 mx-auto p-2 my-2 displayfixer" id="thumbnail-preview">

                               </div>



                               <div class="form-group mb-3">
                                    <label for="videodescription">Description</label>
                                    <textarea name="videodescription" class="form-control" id="videodescription" cols="10" rows="10" placeholder="write something"></textarea>

                                    <x-error name="videodescription"></x-error>
                               </div>

                               <div class="form-group mb-3">
                                    <label for="videokeywords">Video Keywords</label>
                                    <input
                                    type="text" class="form-control inputbox"
                                    name="videokeywords"
                                    required

                                    id="videokeywords" placeholder="eg. business,education,knowledge">

                                    <x-error name="videokeywords"></x-error>
                                </div>







                               <div class="form-group mb-3 col-12 col-md-6">
                                    <label for="videolink">Video Link</label>
                                    <input
                                    type="text" class="form-control inputbox"
                                    name="videolink"
                                    required

                                    id="videolink" placeholder="Video Link">

                                    <x-error name="videolink"></x-error>
                               </div>







                               <div class="form-group mb-3 col-12">

                                    <div class="col-12 d-flex justify-content-between">
                                         <label class="d-block" for="videocategory">Video Category</label>

                                           <button type="button" class="btn btn-primarys ms-auto " data-bs-toggle="modal" data-bs-target="#videocategorycreatemodal" ><i class="fa-solid fa-plus mx-1"></i>Add Genre</button>
                                    </div>

                                            <div class="videocategories my-2">
                                                  @forelse ($categories as $category)
                                                        <label for="{{$category->categoryname}}" class="m-1">{{$category->categoryname}}</label>
                                                        <input type="checkbox" class="genresbox" name="videocategories[]" value="{{$category->id}}" id="{{$category->categoryname}}">
                                                  @empty
                                                        <p>There is no Category </p>
                                                  @endforelse


                                            </div>



                                    <x-error name="videocategories"></x-error>
                               </div>

                               <div class="form-group col-12 d-flex justify-content-end">
                                    <a href="/videos" class="btn btn-thirds mx-2">Cancel</a>
                                    <button type="submit" class="btn btn-primarys">Create</button>
                               </div>

                          </div>



                </form>

           </div>
     </div>

     <div class="modal fade" id="videocategorycreatemodal" tabindex="-1">
          <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
               <h5 class="modal-title">Add Category</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <form action="/admin/category/create" method="POST" >
               @csrf
          <div class="modal-body">
                    <div class="form-group">
                              <label for="categoryname">Category Name</label>
                              <input type="text" class="form-control" name="categoryname" id="categoryname" required placeholder="categoryname">
                    </div>


          </div>
          <div class="modal-footer">
               <button type="button" class="btn btn-secondarys" data-bs-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primarys">Create Category</button>
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
