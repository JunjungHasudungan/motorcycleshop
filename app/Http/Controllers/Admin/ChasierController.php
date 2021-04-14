<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chasier;
use Illuminate\Http\Request;

class ChasierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chasiers = Chasier::all();
        
        dd($chasiers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chasier  $chasier
     * @return \Illuminate\Http\Response
     */
    public function show(Chasier $chasier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chasier  $chasier
     * @return \Illuminate\Http\Response
     */
    public function edit(Chasier $chasier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chasier  $chasier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chasier $chasier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chasier  $chasier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chasier $chasier)
    {
        //
    }
}
