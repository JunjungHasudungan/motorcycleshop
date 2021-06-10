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
use Symfony\Component\HttpFoundation\Response;

class SparepartController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('sparepart_accsess'), Response::HTTP_FORBIDDEN, 'Forbidden');

        $spareparts = Sparepart::orderBy('name', 'asc')->get();

        return view('admin.spareparts.index', compact('spareparts'));
        // dd('spareparts');
    }

    public function create()
    {
        abort_if(Gate::denies('sparepart_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $motors = Motor::pluck( 'name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.spareparts.create', compact('motors'));
        // dd($motors);
    }

    public function store(StoreSparepartRequest $request)
    {
        $sparepart = Sparepart::create($request->all());

        $sparepart->motors()->sync($request->input('motors', []));

        return redirect()->route('admin.spareparts.index');
        // dd($sparepart);
    }

    public function show(Sparepart $sparepart)
    {
        abort_if(Gate::denies('sparepart_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.spareparts.show', compact('sparepart'));
        // dd($sparepart);
    }

    public function edit(Sparepart $sparepart)
    {
        $motors = Motor::pluck('name', 'id');

        $sparepart->load('motors');
        
        return view('admin.spareparts.edit', compact('sparepart', 'motors'));
        // dd($sparepart);
    }

    public function update(UpdateSparepartRequest $request, Sparepart $sparepart)
    {
        $sparepart->update($request->all());

        $sparepart->motors()->sync($request->input('motors', []));

        return redirect()->route('admin.spareparts.index');
        // dd($sparepart);
    }

    public function destroy(Sparepart $sparepart)
    {
        abort_if(Gate::denies('sparepart_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        
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
