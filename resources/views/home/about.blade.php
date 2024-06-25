<div class="about">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-5">
            <div class="titlepage">
               <h2>About Us</h2>
               <p>Website ini ditujukan untuk mempermudah user atau customer melakukan pemesanan kamar dari jarak jauh sehingga tidak khawatir kehabisan kamar yang diinginkan terutama pada saat hari liburan yang ramai pengunjung, Website ini berfungsi hanya sebagai reservasi kamar, ataupun mempermudah administrasi hotel dalam mendata kamar yang sudah dipesan oleh customer.</p>
               <a class="read_more" href="Javascript:void(0)"> Read More</a>
            </div>
         </div>
         <div class="col-md-7">
            <div class="gantengih">
               <div class="ganteng-track">
                  <div class="ganteng">
                     <div class="about_img">
                        <figure><img src="images/about.png" alt="#"/></figure>
                     </div>
                  </div>
                  <div class="ganteng">
                     <div class="about_img">
                        <figure><img src="images/about.png" alt="#"/></figure>
                     </div>
                  </div>
                  <div class="ganteng">
                     <div class="about_img">
                        <figure><img src="images/about.png" alt="#"/></figure>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<style>
   .gantengih {
      height: 600px;
      margin: auto;
      position: relative;
      width: 100%;
      display: grid;
      place-items: center;
      overflow: hidden; /* Prevent content overflow */
      padding-bottom: 100px;
      padding: 1px;
   }
   .ganteng-track {
      display: flex;
      width: calc(250px * 10);
      animation: scroll 40s linear infinite;
   }

   .ganteng-track.paused {
      animation-play-state: paused;
   }

   @keyframes scroll {
      0% {
         transform: translateX(0);
      }
      100% {
         transform: translateX(calc(-250px * 10));
      }
   }
   .ganteng {
      height: 200px;
      width: 1000px;
      display: flex;
      align-items: center;
      padding: 15px;
      perspective: 100px;
      position: relative;
   }
   img {
      transition: transform 1s;
   }

   .gantengih::before,
   .gantengih::after {
      background: linear-gradient(to right, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);
      content: '';
      height: 100%;
      position: absolute;
      width: 15%;
      z-index: 2;
   }

   .gantengih::before {
      left: 0;
      top: 0;
   }

   .gantengih::after {
      right: 0;
      top: 0;
      transform: rotateY(180deg);
   }

   /* Add clip-path to make images disappear */
   .ganteng img {
      clip-path: polygon(100%);
      transition: clip-path 0.5s;
      cursor: pointer;
   }

   /* When image is in hover state, extend clip-path to avoid cut-off effect */
   .ganteng img:hover {
      clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);
   }
</style>

<script>
   document.querySelectorAll('.ganteng img').forEach(img => {
      img.addEventListener('mouseover', () => {
         document.querySelector('.ganteng-track').classList.add('paused');
      });
      img.addEventListener('mouseout', () => {
         document.querySelector('.ganteng-track').classList.remove('paused');
      });
   });
</script>