<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Internaute;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $hotels = Hotel::all();
        $internautes = Internaute::all();

        return view('reservations.create',compact('hotels','internautes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Reservation::create($request->all());
        return redirect()->route('reservations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
        return view('reservations.show', compact('reservation'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
        $internautes=Internaute::all();
        $hotels=Hotel::all();
        return view('reservations.edit', compact('reservation','internautes','hotels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
        $reservation->update($request->all());
        return redirect()->route('reservations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
        $reservation->delete();
        return redirect()->route('reservations.index');
    }
}
