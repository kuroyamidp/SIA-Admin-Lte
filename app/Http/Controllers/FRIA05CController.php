<?php

namespace App\Http\Controllers;

use App\Models\FRIA05C;
use Illuminate\Http\Request;

class FRIA05CController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.tabel.FRIA05C');
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
    public function show(FRIA05C $fRIA05C)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FRIA05C $fRIA05C)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FRIA05C $fRIA05C)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FRIA05C $fRIA05C)
    {
        //
    }
}
