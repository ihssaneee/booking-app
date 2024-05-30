<?php

namespace App\Http\Controllers;

use App\Models\Internaute;
use Illuminate\Http\Request;

class InternauteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $internautes = Internaute::all();
        return view('internautes.index', compact('internautes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('internautes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Internaute::create($request->all());
        return redirect()->route('internautes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Internaute $internaute)
    {
        //
        return view('internautes.show', compact('internaute'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Internaute $internaute)
    {
        //
        return view('internautes.edit', compact('internaute'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Internaute $internaute)
    {
        //
        $internaute->update($request->all());
        return redirect()->route('internautes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Internaute $internaute)
    {
        //
        $internaute->delete();
        return redirect()->route('internautes.index');
    }
}
