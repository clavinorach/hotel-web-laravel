<div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Room</h2>
                     <p>Lorem Ipsum available, but the majority have suffered </p>
                  </div>
               </div>
            </div>

            <div class="row">
            @foreach($room as $rooms)
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <img style="height 200px; width:475px" src="room/{{$rooms->image}}" alt="#"/>
                     </div>
                     <div class="bed_room">
                        <h3>{{$rooms->room_title}}</h3>
                        <p>{{!! Str::limit($rooms->description, 100)!!}}</p>
                     </div>
                  </div>
               </div>
               @endforeach
         </div>
      </div>