<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $hotels = Hotel::all();
        return view('hotels.index', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //  
        return view('hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Hotel::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Hotel $hotel)
    {
        //
        return view('hotels.show', compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $hotel)
    {
        //
        return view('hotels.edit', compact('hotel'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
        $hotel->update($request->all());
        return redirect()->route('hotels.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        //
        $hotel->delete();
        return redirect()->route('hotels.index');
    }
}
