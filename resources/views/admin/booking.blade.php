<!DOCTYPE html>
<html>
<head>
    @include('admin.css')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css"> 
        .table_deg {
            border: 2px solid white;
            margin: auto;
            width: 100%;
            text-align: center;
            margin-top: 40px;
            border-collapse: collapse;
        }

        .th_deg {
            background-color: skyblue;
            padding: 15px;
            box-sizing: border-box;
        }

        tr {
            border: 3px solid white;
        }

        td {
            padding: 15px;
            color: white;
        }

        .img_deg {
            width: 150px;
            height: auto;
        }
    </style>
</head>
<body>
    @include('admin.header')
    
    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table_deg">
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
                                <td>
                                    @if($booking->status == 'Approved')
                                    <span style="color: skyblue;">Approved</span>
                                    @elseif($booking->status == 'Rejected')
                                    <span style="color: red;">Rejected</span>
                                    @elseif($booking->status == 'waiting')
                                    <span style="color: yellow;">Waiting</span>
                                    @endif
                                </td>
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
                                        <a class="btn btn-success" href="{{url('approve_book', $booking->id)}}">Approve</a>
                                    </span>
                                    <a class="btn btn-warning" href="{{url('reject_book', $booking->id)}}">Reject</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('admin.footer')
</body>
</html>