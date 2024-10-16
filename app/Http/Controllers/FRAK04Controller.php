<?php

namespace App\Http\Controllers;

use App\Models\FRAK04;
use Illuminate\Http\Request;

class FRAK04Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.tabel.FRAK04');
    
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
    public function show(FRAK04 $fRAK04)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FRAK04 $fRAK04)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FRAK04 $fRAK04)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FRAK04 $fRAK04)
    {
        //
    }
}
