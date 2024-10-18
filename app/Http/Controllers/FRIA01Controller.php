<?php

namespace App\Http\Controllers;

use App\Models\FRIA01;
use Illuminate\Http\Request;

class FRIA01Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.tabel.FRIA01');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FRIA01 $fRIA01)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FRIA01 $fRIA01)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FRIA01 $fRIA01)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FRIA01 $fRIA01)
    {
        //
    }
}
