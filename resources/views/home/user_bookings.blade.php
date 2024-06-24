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
            @csrf
                <thead>
                    <tr>
                        <th class="th_deg">Room ID</th>
                        <th class="th_deg">Customer Name</th>
                        <th class="th_deg">Email</th>
                        <th class="th_deg">Phone</th>
                        <th class="th_deg">Arrival Date</th>
                        <th class="th_deg">Leaving Date</th>
                        <th class="th_deg">Room Title</th>
                        <th class="th_deg">Price</th>
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
                        <td>{{ $booking->room->room_title}}</td>
                        <td>{{ $booking->room->price }}</td>
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