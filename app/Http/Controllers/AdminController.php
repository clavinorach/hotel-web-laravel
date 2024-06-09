<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Models\ROom;

class AdminController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;

            if($usertype =='user')
            {
                return view('home.index');
            }

            if($usertype =='admin')
            {
                return view('admin.index');
            }

            else
            {
                return redirect() -> back();
            }
        }
    }

    public function home()
    {
        return view('home.index');
    }

    public function create_room()
    {
        return view('admin.create_room');
    }

    public function add_room(Request $request) 
    {
        $data = new Room;

        $data->room_title = $request-> title;

        $data->description = $request-> description;

        $data->price = $request-> price;

        $data->wifi = $request-> wifi;

        $data->room_type = $request-> type;

        $data->image = $request-> image;

        // Check if an image is uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('room'), $imagename);
            $data->image = $imagename;
        }

        $data->save();

        return redirect()->back();
    }

    public function view_room()
    {
        $data = Room::all();

        return view('admin.view_room', compact('data'));
    }
}