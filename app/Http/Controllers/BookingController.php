<?php

namespace App\Http\Controllers;
use App\Models\Booking;

use Illuminate\Http\Request;

class BookingController extends Controller
{
       public function index()
    {
        $dataBooking = Booking::all();
        // dd($dataPenyewaan);

        return view('booking/booking',compact('dataBooking'));
    }
}

