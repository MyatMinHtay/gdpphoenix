<x-adminlayout>
    <div class="container">
         <h1 class="text-center bg-purple">Categories</h1>

         <x-showerror name="categoryname"></x-showerror>
        

         <div class="col-12 d-flex justify-content-end my-3">
             
              <a  class="btn btn-primarys" data-bs-target="#genrecreatemodal" data-bs-toggle="modal"><i class="fa-solid fa-plus mx-1"></i>Add Category</a>
         </div>

         <div class="table-responsive">
              <table class="table table-hover table-primary text-center">
                   <thead>
                        <th>Id</th>
                        <th>Category Name</th>
                      
                        <th>Edit</th>
                        <th>Delete</th>
                   </thead>
                   <tbody>
                        @forelse ($categories as $category)
                             <tr>
                                  <td>{{$category->id}}</td>
                                  <td>{{$category->categoryname}}</td>
                                 
                                  <td><a  class="btn btn-warning editgenre"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                  <td><a href="/admin/category/delete/{{$category->categoryname}}"  onclick="return confirmDelete();"  class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                             </tr>
                        @empty
                             
                        @endforelse
                       
                   </tbody>
              </table>
         </div>
         
    </div>

    {{-- Create Modal  --}}
    <div class="modal fade" id="genrecreatemodal" tabindex="-1">
         <div class="modal-dialog">
           <div class="modal-content bg-color">
             <div class="modal-header">
               <h5 class="modal-title">Add Category</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>

             <form action="/admin/category/create" method="POST" >
              @csrf
             <div class="modal-body">
                   <div class="form-group my-1">
                             <label for="categoryname">Category Name</label>
                             <input type="text" class="form-control inputbox" name="categoryname" id="categoryname" required placeholder="genre name">
                   </div>

                  
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-green">Create Category</button>
             </div>
         </form>
           </div>
         </div>
    </div>

    {{-- Edit Modal  --}}
    <div class="modal fade" id="genreeditmodal" tabindex="-1">
         <div class="modal-dialog">
           <div class="modal-content bg-color">
             <div class="modal-header">
               <h5 class="modal-title">Edit Category</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>

             <form  id="genreeditform" method="POST" >
              @csrf
              <div class="modal-body">
                        <div class="form-group">
                                  <label for="genrenameedit">Category Name</label>
                                  <input type="text" class="form-control inputbox" name="categoryname" id="genrenameedit" required placeholder="genre name">
                        </div>

                   
              </div>
              <div class="modal-footer">
                   <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                   <button type="submit" class="btn btn-green">Update Category</button>
              </div>
              </form>
           </div>
         </div>
    </div>
</x-adminlayout>

<script type="text/javascript">
       $('document').ready(function(){
              $(".editgenre").on('click',function(){
                  let genrerow =  $(this.closest('tr'));

                  let data = genrerow.children('td').map(function(){
                        return $(this).text()
                  });

                  let genreslug = data[1];
                  
                  $("#genreeditform").attr("action","/admin/category/update/" + genreslug);
              

                  
                  $("#genrenameedit").val(data[1]);
                  

                  $('#genreeditmodal').modal('show');

              });
       });


       function confirmDelete() {
          return confirm('Are you sure you want to delete this category?');
     }
       
</script>