<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Motor;
use Illuminate\Http\Request;
use Gate;
use App\Http\Resources\Admin\MotorResource;
use Symfony\Component\HttpFoundation\Response;

class MotorApiController extends Controller
{

    public function index()
    {
        // abort_if(Gate::denies('motor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MotorResource(Motor::all());   
    }


    public function store(StoreMotorRequest $request)
    {
        //
    }


    public function show(Motor $motor)
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
