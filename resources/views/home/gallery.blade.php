<div class="gallery py-5">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage text-center mb-5">
               <h2 class="display-4">Gallery</h2>
            </div>
         </div>
      </div>
      <div class="row">
         @foreach($gallery as $gallery)
            <div class="col-md-3 col-sm-6 mb-4">
               <div class="gallery_img position-relative overflow-hidden rounded shadow-sm mb-2">
                  <figure class="mb-0">
                     <img src="/gallery/{{$gallery->image}}" alt="#" class="img-fluid w-100 h-100">
                  </figure>
                  <div class="overlay d-flex align-items-center justify-content-center">
                     <a href="/gallery/{{$gallery->image}}" class="btn btn-light" data-lightbox="gallery">View Image</a>
                     
                  </div>
                  
               </div>
               
            </div>
         @endforeach
      </div>
   </div>
</div>

<style>
   .gallery_img {
      height: 250px;
      overflow: hidden;
      border-radius: 15px;
      position: relative;
   }
   
   .gallery_img img {
      transition: transform 0.3s ease-in-out;
   }

   .gallery_img:hover img {
      transform: scale(1.1);
   }

   .overlay {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      height: 100%;
      width: 100%;
      opacity: 0;
      transition: .5s ease;
      background-color: rgba(0, 0, 0, 0.5);
      border-radius: 15px;
   }

   .gallery_img:hover .overlay {
      opacity: 1;
   }

   .overlay .btn {
      opacity: 0;
      transition: .5s ease;
   }

   .overlay:hover .btn {
      opacity: 1;
   }

   .text-center p {
      margin: 0;
      font-size: 14px;
      color: #555;
   }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">