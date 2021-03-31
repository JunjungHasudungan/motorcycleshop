<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;
use Gate;
use App\Http\Requests\StoreMotorRequest;
use Symfony\Component\HttpFoundation\Response;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motors = Motor::paginate(5);

        return view('motors.index', compact('motors'));
        // dd($motors);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // abort_if(Gate::denies('motor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('motors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMotorRequest $request)
    {
            $motor = Motor::create($request->all());

            return redirect()->route('motor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Motor $motor)
    {
        $motors = Motor::find($motor);
        return view('motors.show', compact('motors'));
        // dd($motors);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Motor $motor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motor $motor)
    {
        //
    }
}
