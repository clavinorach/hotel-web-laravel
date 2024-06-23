<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Clavino</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
        <li class="{{ Request::is('/home') ? 'active' : '' }}">
              <a href="{{ url('/home') }}">
                <i class="icon-home"></i>Home
              </a>
          </li>
          <li>
              <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse">
                <i class="icon-windows"></i>Hotel Rooms
              </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li class="{{ Request::is('create_room') ? 'active' : '' }}">
                    <a href="{{ url('create_room') }}">Add Rooms</a>
                </li>
                <li class="{{ Request::is('view_room') ? 'active' : '' }}">
                    <a href="{{ url('view_room') }}">View Rooms</a>
                </li>
              </ul>
          </li>
          <li class="{{ Request::is('bookings') ? 'active' : '' }}">
              <a href="{{ url('bookings') }}">
                <i class="icon-home"></i>Bookings
              </a>
          </li>
          <li class="{{ Request::is('view_gallery') ? 'active' : '' }}">
              <a href="{{ url('view_gallery') }}">
                <i class="icon-home"></i>Gallery
              </a>
          </li>
          <li class="{{ Request::is('all_messages') ? 'active' : '' }}">
              <a href="{{ url('all_messages') }}">
                <i class="icon-home"></i>Messages
              </a>
          </li>
        </ul>
      </nav>