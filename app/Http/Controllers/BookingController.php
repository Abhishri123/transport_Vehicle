<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;


class BookingController extends Controller
{
    
    public function index()
    {
        $bookings = Booking::orderBy('id','desc')->paginate(5);
        return view('bookings.index', compact('bookings'));
    }
    public function create()
    {
        return view('bookings.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
                    'full_name' => 'required',
                    'pax' => 'required',
                    'contact' => 'required|digits:10|numeric',
                    'transport_vehicle' => 'required',
                    'booking_for' => 'required',
                    'duration' => 'required'
        
                ]);
        Booking::create($request->post());

        return redirect()->route('bookings.index')->with('success','Booking has been created successfully.');
    }

    public function show(Booking $booking)
    {
        return view('bookings.show',compact('booking'));
    }
    public function edit(Booking $booking)
    {
        return view('bookings.edit',compact('booking'));
    }
    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'full_name' => 'required',
            'pax' => 'required',
            'contact' => 'required|digits:10|numeric',
            'transport_vehicle' => 'required',
            'booking_for' => 'required',
            'duration' => 'required'

        ]);
        
        $booking->fill($request->post())->save();

        return redirect()->route('bookings.index')->with('success','Booking Has Been updated successfully');
    }
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index')->with('success','Booking has been deleted successfully');
    }
}
