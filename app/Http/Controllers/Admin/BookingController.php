<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.contactandbookings.bookings', compact('bookings'));
    }

    public function destroy(Booking $booking){
        $booking->delete();
        return redirect()->back();
    }
}
