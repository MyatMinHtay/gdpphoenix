<x-adminlayout>
    <div class="container">


        <h1 class="text-center bg-purple mt-3">Videos</h1>

        <div class="col-12 d-flex justify-content-end my-3">
          
          <a  class="btn btn-primary mx-2" href="/admin/videos/create"><i class="fa-solid fa-plus mx-1"></i>Add Videos</a>
        </div>

      


        <div class="container-fluid my-3">
             <div class="row justify-content-center">
                  <div class="col-md-12">
                      
                           

                            
                            <form action="" method="GET">
                                 <div class="d-flex justify-content-between flex-wrap">
                                      <div class="form-group mr-2">
                                           <label for="videotitle">Title</label>
                                           <input type="text" class="form-control" value="{{request('videotitle')}}" id="videotitle" name="videotitle" placeholder="Enter Video Title">
                                      </div>

                                      

                                      

                                      <div class="form-group">
                                           <button type="submit" class="btn btn-primary mt-4">Search</button>
                                      </div>
                                 </div>
                            </form>
                        
                       
                  </div>
             </div>
        </div>

        

      
    
      

        
        
     

        <div class="table-responsive">
             <table class="table table-hover table-bordered border-1 table-primary">
                  <thead>
                       <th scope="col">Id</th>
                       
                      
                       <th scope="col">Title</th>
                       <th scope="col">Thumbnail</th>
                       
                       
                      
                       
                       <th scope="col">Description</th>
                       <th scope="col">Link</th>
                       
                       
                       <th scope="col">Edit</th>
                       
                       <th scope="col">Delete</th>
                  </thead>
                  <tbody>
                   @forelse ($videos as $video)
                   <tr>

                        <td scope="row">{{$video->id}}</td>
                        
                       
                        <td scope="row">{{$video->videotitle}}</td>
                        <td scope="row">
                         <img src="{{ asset($video->videothumbnail) }}" width="100px" alt="...">
                        </td>

                      
                    
                   
                        <td scope="row">{{ Str::words($video->videodescription, 30, '...') }}</td>
                        <td scope="row">{{$video->videolink}}</td>

                      
                      
                       
                        <td scope="row" class="text-center"><a href="/admin/videos/edit/{{$video->videoslug}}"  class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        
                       
                        <td scope="row" class="text-center"><a href="/admin/videos/delete/{{$video->videoslug}}"  onclick="return confirmDelete();"  class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                   </tr>
                   
                   
              @empty
                    <tr>
                          <td scope="row" colspan="9" class="text-center">There is no record</td>                                                                                                             
                    </tr>
              @endforelse
                      
                  </tbody>
             </table>

             <div class="col-12 displayfixer mt-3 justify-content-end">
                  {{$videos->links()}}
               </div>
        </div>
        
   </div>

 
  
</x-adminlayout>

<script type="text/javascript">

function confirmDelete() {
    return confirm('Are you sure you want to delete this video?');
}

</script>