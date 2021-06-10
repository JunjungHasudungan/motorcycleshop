<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Motor_Service;
use App\Models\Loan;
use Illuminate\Http\Request;

class Motor_ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.motor_services.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loans = Loan::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.motor_services.create', compact('loans'));
        // dd($loans);
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
     * @param  \App\Models\Motor_Service  $motor_Service
     * @return \Illuminate\Http\Response
     */
    public function show(Motor_Service $motor_Service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Motor_Service  $motor_Service
     * @return \Illuminate\Http\Response
     */
    public function edit(Motor_Service $motor_Service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Motor_Service  $motor_Service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motor_Service $motor_Service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Motor_Service  $motor_Service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motor_Service $motor_Service)
    {
        //
    }
}
