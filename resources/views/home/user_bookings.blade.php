<!DOCTYPE html>
<html lang="en">
   <head>
    @include('home.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <style type="text/css"> 

.table_deg
        {
            border: 2px solid white;
            margin: auto;
            width: 100%;
            text-align: center;
            margin-top: 40px;
            border-collapse: collapse;
        }

        .th_deg
        {
            background-color: skyblue;
            padding: 15px;
            box-sizing: border-box;
        }

        tr 
        {
            border: 3px solid white;
        }

        td 
        {
            padding: 15px;
        }
        .img_deg
        {
            width:150px;
            height:auto;
        }

</style>

   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
    @include('home.header')
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
    
<!-- resources/views/home/user_bookings.blade.php -->


<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <table class="table_deg">
                <thead>
                    <tr>
                        <th class="th_deg">Room ID</th>
                        <th class="th_deg">Customer Name</th>
                        <th class="th_deg">Email</th>
                        <th class="th_deg">Phone</th>
                        <th class="th_deg">Arrival Date</th>
                        <th class="th_deg">Leaving Date</th>
                        <th class="th_deg">Status</th>
                        <th class="th_deg">Room Title</th>
                        <th class="th_deg">Price</th>
                        <th class="th_deg">Image</th>
                        <th class="th_deg">Delete</th>
                        <th class="th_deg">Status Update</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $booking)
                    <tr>
                        <td>{{ $booking->room_id }}</td>
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->email }}</td>
                        <td>{{ $booking->phone }}</td>
                        <td>{{ $booking->start_date }}</td>
                        <td>{{ $booking->end_date }}</td>
                        <td>{{ $booking->room->room_title }}</td>
                        <td>{{ $booking->room->price }}</td>
                        <td>
                            <img class="img_deg" src="/room/{{ $booking->room->image }}" alt="Room Image">
                        </td>
                        <td>
                            <a onclick="return confirm('Are you sure to delete this?');" class="btn btn-danger" href="{{ url('delete_booking', $booking->id) }}">Delete</a>
                        </td>
                        <td>
                            <span style="padding-bottom: 10px;">
                                <a class="btn btn-success" href="{{ url('approve_book', $booking->id) }}">Approve</a>
                            </span>
                            <a class="btn btn-warning" href="{{ url('reject_book', $booking->id) }}">Reject</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

      <!--  footer -->
    @include('home.footer')


   </body>
</html>