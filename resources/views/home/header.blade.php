
<!-- header inner -->
<div class="header" style="display: flex; align-items: center; height: 70px; padding-bottom: 12px;">
    <div style="flex-grow: 1;"> <!-- menghapus class container -->
        <div class="row align-items-center w-100" style="height: 100%;">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                <div class="full">
                    <div class="center-desk">
                        <div class="col-auto logo">
                            <a href="{{url('/')}}"><img src="images/asmara-hotel.png" alt="#" style="max-height: 100%;" width="130px;" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 d-flex justify-content-end"> <!-- menambahkan beberapa class untuk mengatur posisi navbar -->
                <nav class="navigation navbar navbar-expand-md navbar-dark">
                    <button class="navbar-toggler" type="button" data-toggle="" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="" id="navbarsExample04">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                                <a class="nav-link" href="{{url('/')}}" style="padding-top: 9px;">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item {{ Request::is('our_rooms') ? 'active' : '' }}">
                                <a class="nav-link" href="{{url('our_rooms')}}" style="padding-top: 9px;">
                                    Our Room
                                </a>
                            </li>
                            <li class="nav-item {{ Request::is('contact_us') ? 'active' : '' }}">
                                <a class="nav-link" href="{{url('contact_us')}}" style="padding-top: 9px;">
                                    Contact Us
                                </a>
                            </li>

                            @if (Route::has('login'))
                                @auth

                                <li class="nav-item {{ Request::is('user_bookings') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{url('user_bookings')}}" style="padding-top: 9px;">
                                           Booked Room
                                    </a>
                            	   </li>
                                 
                                    <x-app-layout>
				                        
                                    </x-app-layout>


                                @else
                                    <li class="nav-item" style="padding-right: 15px; padding-bottom: 10px;">
                                        <a class="btn btn-success" href="{{url('login')}}">Login</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item" style="padding-bottom: 10px;">
                                            <a class="btn btn-primary" href="{{url('register')}}">Register</a>
                                        </li>
                                    @endif
                                @endauth
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<style>
    .navigation.navbar {
        padding-top: 14px !important;
        padding: 0;
    }

    .navigation.navbar-dark .navbar-nav .nav-link {
        padding: 7px 0px 27px 0px;
        margin: 0 22px;
        color: #010101;
        font-size: 16px;
        line-height: 20px;
        font-weight: 500;
        text-transform: uppercase;
        border-bottom: #fff solid 3px;
    }

    .navigation.navbar-dark .navbar-nav .nav-link:focus,
    .navigation.navbar-dark .navbar-nav .nav-link:hover {
        color: #fe0000;
        border-bottom: #fe0000 solid 3px;
    }

    .navigation.navbar-dark .navbar-nav .active > .nav-link,
    .navigation.navbar-dark .navbar-nav .nav-link.active,
    .navigation.navbar-dark .navbar-nav .nav-link.show,
    .navigation.navbar-dark .navbar-nav .show > .nav-link {
        color: #fe0000;
        border-bottom: #fe0000 solid 3px;
    }

    .navbar-expand-md .navbar-nav {
        padding-right: 10px;
    }

    .header {
        width: 100%;
        height: 86px;
        padding: 15px 0px 15px 0px;
        background: #fff;
    }

    .btn-success, .btn-primary {
        border-radius: 5px;
        padding: 10px 20px;
        color: #fff;
        transition: background 0.3s, transform 0.3s;
        text-transform: uppercase;
        font-weight: bold;
        margin-left: 10px;
    }
    .btn-primary {
        background: linear-gradient(45deg, #6a11cb, #2575fc);
        border: none;
    }
    .btn-primary:hover {
        background: linear-gradient(45deg, #5c0fb4, #206fe1);
        transform: translateY(-2px);
        color: #fff; /* Ensuring text color stays white */
    }
    .btn-success {
        background: linear-gradient(45deg, #ff512f, #dd2476);
        border: none;
    }
    .btn-success:hover {
        background: linear-gradient(45deg, #e94a27, #c11f6a);
        transform: translateY(-2px);
        color: #fff; /* Ensuring text color stays white */
    }
</style>