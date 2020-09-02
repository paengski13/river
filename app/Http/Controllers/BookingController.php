<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Http\Requests\BookingRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::activeReservation()->limit(2)->get();
        return response($bookings->toArray(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BookingRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingRequest $request)
    {
        $booking = Booking::create($request->all());
        return response($booking->toArray(), 200);
    }
}
