<?php

namespace App\Http\Controllers;

use App\Models\FRIA06C;
use Illuminate\Http\Request;

class FRIA06CController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.tabel.FRIA06C');
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
    public function show(FRIA06C $fRIA06C)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FRIA06C $fRIA06C)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FRIA06C $fRIA06C)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FRIA06C $fRIA06C)
    {
        //
    }
}
