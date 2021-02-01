<?php

namespace App\Http\Controllers;

use App\Models\Laborsocial;
use Illuminate\Http\Request;

class LaborsocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Laborsocial::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Laborsocial::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laborsocial  $laborsocial
     * @return \Illuminate\Http\Response
     */
    public function show(Laborsocial $laborsocial)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laborsocial  $laborsocial
     * @return \Illuminate\Http\Response
     */
    public function edit(Laborsocial $laborsocial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laborsocial  $laborsocial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laborsocial $laborsocial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laborsocial  $laborsocial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laborsocial $laborsocial)
    {
        return Laborsocial::deleted($laborsocial);
    }
}
