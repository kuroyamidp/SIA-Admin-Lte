<?php

namespace App\Http\Controllers;

use App\Models\FRIA05A;
use Illuminate\Http\Request;

class FRIA05AController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.tabel.FRIA05A');
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
    public function show(FRIA05A $fRIA05A)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FRIA05A $fRIA05A)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FRIA05A $fRIA05A)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FRIA05A $fRIA05A)
    {
        //
    }
}
