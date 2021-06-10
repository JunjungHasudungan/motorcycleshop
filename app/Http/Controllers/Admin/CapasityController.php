<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Capasity;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCapasityRequest;
use App\Http\Requests\UpdateCapasityRequest;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class CapasityController extends Controller
{

    public function index()
    {
        // abort_if(Gate::denies('capasities_index'), Response::HTTP_FORBIDDEN, '403 | Forbidden');

        $capasities = Capasity::all();

        return view('admin.capasities.index', compact('capasities'));
        // dd($capasities);
    }

    
    public function create()
    {
        // abort_if(Gate::denies('capasities_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.capasities.create');
    }


    public function store(StoreCapasityRequest $request)
    {
        $capasities = Capasity::create($request->all());

        return redirect()->route('admin.capasities.index');
    }

    
    public function show(Capasity $capasity)
    {
        // abort_if(Gate::denies('capasity_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.capasities.show', compact('capasity'));
    }

    
    public function edit(Capasity $capasity)
    {
        // abort_if(Gate::denies('capasity_edit'),Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.capasities.edit', compact('capasity'));
    }

    
    public function update(UpdateCapasityRequest $request, Capasity $capasity)
    {
        $capasity->update($request->all());

        return redirect()->route('admin.capasities.index');
    }

    
    public function destroy(Capasity $capasity)
    {
        // abort_if(Gate::denies('capasity_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $capasity->delete();

        return back();
    }
}
