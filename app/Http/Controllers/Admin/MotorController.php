<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Motor;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MotorController extends Controller
{
    public function index()
    {
        // abort_if(Gate::denies('motor_accsess'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $motors = Motor::all();

        // return view('admin.motor.index', compact('motors'));
        dd($motors);
    }

    public function create()
    {
        //
    }

    public function store(StoreMotorRequest $request)
    {
        $motor = Motor::create($request->all());

        return redirect()->route('motor.index');
    }


    public function show(Motor $motor)
    {
        //abort_if(Gate::denies('motor_show'), Response::HTTP_FORBIDDEN, '403, Forbidden');

        return view('motor.show', compact('motor'));
        
        dd($motors);
    }

    public function edit(Motor $motor)
    {
        //
    }

    public function update(Request $request, Motor $motor)
    {
        //
    }

    public function destroy(Motor $motor)
    {
        //
    }
}
