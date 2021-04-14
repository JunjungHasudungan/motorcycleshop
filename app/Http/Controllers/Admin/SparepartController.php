<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sparepart;
use Illuminate\Http\Request;
use App\Http\Request\StoreSparepartRequest;
use Gate;
use Symphony\Component\HttpFoundation\Response;

class SparepartController extends Controller
{
    public function index()
    {
        // abort_if(Gate::denies('sparepart_accsess'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $spareparts = Sparepart::all();

        // return view('sparepart.index', compact('spareparts'));
        dd('spareparts');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Sparepart $sparepart)
    {
        $Sparepart = Sparepart::where('name',$sparepart);

        // return view('spareparts.show', compact('sparepart'));
        dd($sparepart);
    }

    public function edit(Sparepart $sparepart)
    {
        //
    }

    public function update(Request $request, Sparepart $sparepart)
    {
        //
    }

    public function destroy(Sparepart $sparepart)
    {
        //
    }
}
