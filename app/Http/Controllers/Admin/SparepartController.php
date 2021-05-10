<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sparepart;
use App\Models\Motor;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSparepartRequest;
use App\Http\Requests\UpdateSparepartRequest;
use App\Http\Requests\massDestroySparepartRequest;
use Gate;
use Symphony\Component\HttpFoundation\Response;

class SparepartController extends Controller
{
    public function index()
    {
        // abort_if(Gate::denies('sparepart_accsess'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $spareparts = Sparepart::with(['motors'])->get();

        return view('admin.spareparts.index', compact('spareparts'));
        // dd('spareparts');
    }

    public function create()
    {
        $motors = Motor::all()->pluck('name', 'id');

        return view('admin.spareparts.create', compact('motors'));
    }

    public function store(StoreSparepartRequest $request)
    {
        //
    }

    public function show(Sparepart $sparepart)
    {
        return view('admin.spareparts.show', compact('sparepart'));
        // dd($sparepart);
    }

    public function edit(Sparepart $sparepart)
    {
        return view('admin.spareparts.edit', compact('sparepart'));
    }

    public function update(UpdateSparepartRequest $request, Sparepart $sparepart)
    {
        //
    }

    public function destroy(Sparepart $sparepart)
    {
        $sparepart->delete();

        return redirect()->route('admin.spareparts.index');
    }

    public function massDestroy(massDestroySparepartRequest $request)
    {
        Sparepart::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function search()
    {
        $spareparts = Sparepart::with('motors')->orderBy('created_at', 'DESC');
        if (request()->search != '') {
            $spareparts = $spareparts->where('name', 'LIKE', '%' . request()->search . '%');
        }
        $spareparts = $spareparts->paginate(10);

        return view('admin.spareparts.index', compact('spareparts'));
    }
}
