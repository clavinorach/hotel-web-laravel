<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Room;

use App\Models\Booking;

use App\Models\Contact;

use App\Models\Gallery;

class HomeController extends Controller
{
    public function room_details($id)
    {
        $room = Room::find($id);

        return view('home.room_details', compact('room'));
    }

    public function add_booking(Request $request , $id)
    {

        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ], [
            'start_date.required' => 'The start date field is required.',
            'end_date.required' => 'The end date field is required.',
            'end_date.after' => 'The end date field must be a date after the start date.',
        ]);
        $data = new Booking;

        $data->room_id = $id;

        $data->name = $request-> name;

        $data->email = $request-> email;

        $data->phone = $request-> phone;

        $data->start_date = $request-> start_date;

        $data->end_date = $request-> end_date;

        $startDate = $request->start_date;
        $endDate = $request->end_date;

        $isBooked = Booking::where('room_id', $id)
        ->where('start_date', '<=', $endDate)
        ->where('end_date', '>=', $startDate)->exists();

        if($isBooked)
        {

            return redirect()->back()->with('message','Room is already booked please try different date!');

        }

        else
        {
            $startDate = $request-> start_date;

            $endDate = $request-> end_date;
    
            $data->save();
    
            return redirect()->back()->with('message','Room Booked Successfully!');
        }
        
    }

    public function contact(Request $request)
    {

        $contact = new Contact;

        $contact-> name = $request-> name;

        $contact-> email = $request-> email;

        $contact-> phone = $request-> phone;

        $contact-> message = $request-> message;

        $contact->save();

        return redirect()->back()->with('message','Message Sent Successfully!');
    }

    public function our_rooms()
    {
        $room = Room::all();
        return view('home.our_rooms', compact('room'));
    }

    public function hotel_gallery()
    {
        $gallery = Gallery::all();

        return view('home.hotel_gallery', compact('gallery'));
    }

    public function contact_us()
    {
        return view('home.contact_us');
    }

    
} 
