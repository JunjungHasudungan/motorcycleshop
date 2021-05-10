<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Motor;
use App\Models\Category;
use App\Models\Capasity;
use Illuminate\Http\Request;
use App\Http\Requests\MassDestroyMotorRequest;
use Symfony\Component\HttpFoundation\Response;

class MotorController extends Controller
{
    public function index()
    {
        // abort_if(Gate::denies('motor_accsess'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        // $motors = \App\Models\Motor::capasity()->orderBy('capasity', 'DESC')->get();
        // $categories = Category::all();
        // $motors = Motor::with('capasities')->get();

        $motors = Motor::with('categoriesMotors')->get();
        // $motors->load(['categoriesMotors', 'capasities']);
        return view('admin.motors.index', compact('motors'));
        // dd($motors);
    }

    public function create()
    {
        $Capasities = Capasity::all()->pluck('capasity', 'id');

        return view('admin.motors.create', compact('capasities'));

    }

    public function store(StoreMotorRequest $request)
    {
        $motor = Motor::create($request->all());

        return redirect()->route('motor.index');
    }


    public function show(Motor $motor)
    {
        //abort_if(Gate::denies('motor_show'), Response::HTTP_FORBIDDEN, '403, Forbidden');
        $motor->load('capasities');

        return view('admin.motors.show', compact('motor'));
        // dd($motor);
    }

    public function edit(Motor $motor)
    {
        return view('admin.motors.edit', compact('motor'));
    }

    public function update(Request $request, Motor $motor)
    {
        //
    }

    public function destroy(Motor $motor)
    {
        $motor->delete();

        return redirect()->route('admin.motors.index');
    }

    public function massDestroy(MassDestroyMotorRequest $request)
    {
        Motor::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }

/*     public function search()
    {
        $motors = Motor::with('categoriesMotors')->orderBy('created_at', 'DESC');
        if (request()->search != '') {
            $motors = $motors->where('name', 'LIKE', '%' . request()->search . '%');
        }
        $motors = $motors->paginate(5);

        return view('admin.motors.index', compact('motors'));
    } */
}
