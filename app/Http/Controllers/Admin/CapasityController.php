<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Capasity;
use Illuminate\Http\Request;

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
        //
    }


    public function store(Request $request)
    {
        //
    }

    
    public function show(Capasity $capasity)
    {
        //
    }

    
    public function edit(Capasity $capasity)
    {
        //
    }

    
    public function update(Request $request, Capasity $capasity)
    {
        //
    }

    
    public function destroy(Capasity $capasity)
    {
        //
    }
}
