<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">


        <center> 
        
          <h1 style="font-size: 40px; font-weight: bolder; color: white;">Gallery</h1>
          
          <div class="row"> 

          @foreach($gallery as $gallery)

          <div class="col-md-4 mb-4 d-flex flex-column align-items-center">

            <img style="height: 200px!important; width: 300px!important;" src="/gallery/{{$gallery->image}}">
            <a class="btn btn-danger mt-2" href="{{url('delete_gallery', $gallery->id)}}"> Delete Image </a>

          </div>
            
          @endforeach

          </div>  

          <form action="{{ url('upload_gallery') }}" method="POST" enctype="multipart/form-data"> 

            @csrf
            <div style="padding: 30px;">
              <label style="color: white; font-weight: bold" for="image">Upload Image</label>
              <input type="file" id="image" name="image">

              <input class="btn btn-primary" type="submit" value="Add Image" required>
            </div>


          </form>
        </center>



    </div>
    </div>
    </div>
      
        
        @include('admin.footer')

  </body>
</html>