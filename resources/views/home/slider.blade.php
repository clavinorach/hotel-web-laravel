<link rel="stylesheet" href="css/bootstrap.min.css">

<section class="banner_main" style="margin-bottom: 0; position: relative; width: 100%; height: 100vh; overflow: hidden;">
  <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active" style="width: 20px; height: 20px; border-radius: 30px; background: #000;"></li>
      <li data-target="#myCarousel" data-slide-to="1" style="width: 20px; height: 20px; border-radius: 30px; background: #000;"></li>
      <li data-target="#myCarousel" data-slide-to="2" style="width: 20px; height: 20px; border-radius: 30px; background: #000;"></li>
    </ol>
    <div class="carousel-inner" style="padding: 0; height: 100vh;">
      <div class="carousel-item active">
        <img class="first-slide" src="images/banner1.jpg" alt="First slide" style="width: 100%; height: 100vh; object-fit: cover;">
        <div class="container"></div>
      </div>
      <div class="carousel-item" style="padding: 0; height: 100vh;">
        <img class="second-slide" src="images/banner2.jpg" alt="Second slide" style="width: 100%; height: 100vh; object-fit: cover;">
      </div>
      <div class="carousel-item" style="padding: 0; height: 100vh;">
        <img class="third-slide" src="images/banner3.jpg" alt="Third slide" style="width: 100%; height: 100vh; object-fit: cover;">
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

  <div class="booking_ocline">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="book_room">
            <h1>Book a Room Online</h1>
            <form class="book_now">
              <div class="row">
                <div class="col-md-12">
                  <span>Check-in</span>
                  <img class="date_cua" src="images/date.png">
                  <input class="online_book" placeholder="dd/mm/yyyy" type="date" name="dd/mm/yyyy">
                </div>
                <div class="col-md-12">
                  <span>Check-out</span>
                  <img class="date_cua" src="images/date.png">
                  <input class="online_book" placeholder="dd/mm/yyyy" type="date" name="dd/mm/yyyy">
                </div>
                <div class="col-md-12">
                  <button class="book_btn" href="{{url('our_rooms')}}">Book Now</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .carousel-inner, .carousel-item, .carousel-item img {
    height: 100vh; /* Full height */
  }

  .carousel-item img {
    width: 100%;
    object-fit: cover; /* Ensures the image covers the carousel area */
  }

  .banner .carousel-indicators .active {
    background-color: #fe0000;
  }
</style>