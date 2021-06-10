<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Motor;
use App\Models\Category;
use App\Models\Capasity;
use Illuminate\Http\Request;
use App\Http\Requests\MassDestroyMotorRequest;
use App\Http\Requests\StoreMotorRequest;
use Gate;
use App\Http\Requests\UpdateMotorRequest;
use Symfony\Component\HttpFoundation\Response;

class MotorController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('motor_accsess'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        // $motors = \App\Models\Motor::capasity()->orderBy('capasity', 'DESC')->get();
        // $categories = Category::all();
        // $motors = Motor::with('capasities')->get();

        $motors = Motor::withCount('categoriesMotors')->orderBy('name', 'desc')->get();
        // $motors = Motor::get();

        return view('admin.motors.index', compact('motors'));

    }

    public function create()
    {
        abort_if(Gate::denies('motor_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $capasities = Capasity::all()->pluck('capasity', 'id')->prepend(trans('global.pleaseSelect'), '');
        
        $categories = Category::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.motors.create', compact('capasities', 'categories'));
        // dd([$capasities, $categories]);

    }

    public function store(StoreMotorRequest $request)
    {
        $motor = Motor::create($request->all());
/*         $motor->capasities()->sync($request->input('capasities', []));
        $motor->categoriesMotors()->sync($request->input('categories', [])); */

        return redirect()->route('admin.motors.index');
        // dd($motor);
    }


    public function show(Motor $motor)
    {
        abort_if(Gate::denies('motor_show'), Response::HTTP_FORBIDDEN, '403, Forbidden');

        $motor->load('capasities');

        return view('admin.motors.show', compact('motor'));
        // dd($motor);
    }

    public function edit(Motor $motor)
    {
        abort_if(Gate::denies('motor_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $capasities = Capasity::all()->pluck('capasity', 'id');

        $categories = Category::all()->pluck('name', 'id');

        $motor->load('capasities', 'categoriesMotors');
        
        return view('admin.motors.edit', compact('capasities', 'categories', 'motor'));
        // dd($motor);
    }

    public function update(UpdateMotorRequest $request, Motor $motor)
    {
        $motor->update($request->all());

        return redirect()->route('admin.motors.index');
        // dd($motor);
    }

    public function destroy(Motor $motor)
    {
        abort_if(Gate::denies('motor_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
